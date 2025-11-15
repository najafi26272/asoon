<?php
namespace App\Livewire\ManageNews\MonitoringNews;
use App\Models\{News,NewsStep,Title};
use Livewire\{Component, WithPagination};
use Illuminate\Support\Facades\{Auth,Validator,DB};
use Illuminate\Database\Eloquent\Builder;

class NewsListComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $selectedIds = [];
    public $rejectDescription = '';
    public $selectAll = false;
    public $char = '';
    public $title, $link, $content, $summary, $agency, $topic, $reason, $goals, $description;
    public $pageNumber = 10;
    public $pathIsReview = false, $pathIsTitle = false, $pathIsAddInfo = false, $pathIsFinal = false, $pathIsMyMonitoring = false;
    protected $listeners = ['$_news_refresh' => 'refresh'];
    public $activeTab = 'web';

    public function setActiveTab($tab)
    {
        $this->activeTab = $tab;
        $this->resetPage();
    }
    public function mount()
    {
        $this->pathIsAddInfo = request()->is('*news/addInfo*');
        $this->pathIsFinal = request()->is('*news/final*');
        $this->pathIsMyMonitoring = request()->is('*news/myMonitoring*');
        $this->pathIsTitle = request()->is('*news/title*');
        $this->pathIsReview = request()->is('*news/review*');
    }

    public function getBaseQuery(): Builder
    {
        $pathIsAddInfo = $this->pathIsAddInfo ?? false;
        $pathIsFinal = $this->pathIsFinal ?? false;
        $pathIsMyMonitoring = $this->pathIsMyMonitoring ?? false;
        $pathIsTitle = $this->pathIsTitle ?? false;
        $pathIsReview = $this->pathIsReview ?? false;

        $char = $this->char ?? '';

        return News::with(['step.stepDefinition', 'latestWebTitle', 'latestSocialTitle'])
        ->when($pathIsAddInfo, function (Builder $q) {
                $q->whereHas('step.stepDefinition', function (Builder $q2) {
                    $q2->whereIn('step_id',[3,4]);
                });
            })
            ->when($pathIsTitle, function (Builder $q) {
                // فیلتر بر اساس تعریف مرحله
                $q->whereHas('step.stepDefinition', function (Builder $q2) {
                    $q2->whereIn('step_id', [4, 5, 6, 7]);
                });

                // وقتی تب web است فقط وجود latestWebTitle را بررسی کن
                if ($this->activeTab === 'web') {
                    $q->whereHas('latestWebTitle');
                }
                // وقتی تب socialMedia است فقط وجود latestSocialTitle را بررسی کن
                elseif ($this->activeTab === 'socialMedia') {
                    $q->whereHas('latestSocialTitle');
                }
            })
            ->when($pathIsFinal, function (Builder $q) {
                $q->whereHas('step.stepDefinition', function (Builder $q2) {
                    $q2->whereIn('step_id', [11, 12, 13]);
                });
            })
            ->when($pathIsReview, function (Builder $q) {
                $q->whereHas('step.stepDefinition', function (Builder $q2) {
                    $q2->whereIn('step_id', [6, 8, 9, 10]);
                });
            })
            ->when($pathIsMyMonitoring, function (Builder $q) {
                $q->where('creator_id', Auth::user()->id);
            })
            ->where(function (Builder $query) use ($char) {
                $search = "%{$char}%";
                $query->where(function (Builder $q2) use ($search) {
                    $q2->where('title', 'LIKE', $search)
                       ->orWhere('link', 'LIKE', $search)
                       ->orWhere('topic', 'LIKE', $search);
                });
            });
    }

    public function changeStatus($id,$status)
    {
        $step = NewsStep::create([
            'news_id' => $id,
            'step_id' => $status,
            'creator_id' => auth()->id(),
        ]);
            
        News::find($id)->update(['status' => $step->id]);
        $this->dispatch('$_alert_message',['message' => 'وضعیت با موفقیت تغییر کرد.']);
    }

    public function reviewHistory($id)
    {
        $this->dispatch('$_review_history', $id);
        $this->dispatch('show-review-history-modal');
    }

    public function addInfo($id)
    {
        $this->dispatch('$_info_add', $id);
        $this->dispatch('show-add-info-news-modal');
    }

    public function addEditor($id)
    {
        $this->dispatch('$_editor_add', $id);
        $this->dispatch('show-add-editor-news-modal');
    }

    public function refresh()
    {
        $items = $this->getBaseQuery()->latest()->paginate($this->pageNumber);
    }
    public function delete($id)
    {
        $this->dispatch('$_news_deletable', $id);
        $this->dispatch('show-delete-news-modal');
    }
    public function update($id)
    {
        $this->dispatch('$_news_editable', $id);
    }
    public function editedContent($id)
    {
        $this->dispatch('$_content_editable', $id);
    }

    private function processSelected($stepId)
    {
        $this->validate([
            'selectedIds' => 'required|array|min:1',
            'selectedIds.*' => 'integer|exists:news,id',
            'rejectDescription' => $stepId === 2 ? 'nullable|string|max:500' : ''
        ]);

        DB::transaction(function () use ($stepId) {
            foreach ($this->selectedIds as $id) {
                $step = NewsStep::create([
                    'news_id' => $id,
                    'step_id' => $stepId,
                    'creator_id' => auth()->id(),
                    'description' => $this->rejectDescription
                ]);
                
                News::find($id)->update(['status' => $step->id]);
            }
        });

        $this->reset(['selectedIds', 'rejectDescription', 'selectAll']);
        $this->dispatch('$_alert_message', ['message' => $stepId === 2 
                    ? 'موارد انتخابی رد شدند' 
                    : 'موارد انتخابی تأیید شدند']);   
        $this->dispatch('news-rejected'); 
    }
    public function approveSelected()
    {
        $this->processSelected(3);
    }
    public function rejectSelected()
    {
        $this->processSelected(2);
    }

    public function rejectSelectedTitr($newsId)
    {
        DB::transaction(function () use ($newsId) {
                $news = News::findOrFail($newsId);
                $totalStatus = true;
        
                $title = ($this->activeTab === 'web') 
                    ? $news->latestWebTitle 
                    : $news->latestSocialTitle;
        
                if ($title) {
                    $title->update([
                        'status' => 'reject',
                        'reject_reason' => $this->rejectDescription
                    ]);
                }

                if ($news->latestWebTitle && in_array($news->latestWebTitle->status, ['progressing', 'waiting'])) {
                    $totalStatus = false;
                }
        
                if ($news->latestSocialTitle && in_array($news->latestSocialTitle->status, ['progressing', 'waiting'])) {
                    $totalStatus = false;
                }
        
                if ($totalStatus) {
                    $step = NewsStep::create([
                        'news_id' => $newsId,
                        'step_id' => 7,
                        'creator_id' => auth()->id(),
                        'description' => $this->rejectDescription
                    ]);
                    
                    $news->update(['status' => $step->id]); 
                }
        });

        $this->reset(['selectedIds', 'rejectDescription', 'selectAll']);
        $this->dispatch('$_alert_message', [
            'message' => 'تیتر انتخابی رد شد'
        ]);
        $this->dispatch('newsTitle-rejected'); 
    }

    public function approveSelectedTitrs()
    {
        // $this->validate([
        //     'selectedIds' => 'required|array|min:1',
        //     'selectedIds.*' => 'integer|exists:news,id',
        // ]);

        $this->processTitrsStatus('accept',6);
    }

    public function rejectSelectedTitrs()
    {
        // $this->validate([
        //     'selectedIds' => 'required|array|min:1',
        //     'selectedIds.*' => 'integer|exists:news,id',
        //     'rejectDescription' => 'required|string|max:500'
        // ]);

        $this->processTitrsStatus('reject',7);
    }

    private function processTitrsStatus($status,$stepId)
    {
        DB::transaction(function () use ($status, $stepId) {
            foreach ($this->selectedIds as $newsId) {
                $news = News::findOrFail($newsId);
                $totalStatus = true;
        
                $title = ($this->activeTab === 'web') 
                    ? $news->latestWebTitle 
                    : $news->latestSocialTitle;
        
                if ($title) {
                    $title->update([
                        'status' => $status,
                        'reject_reason' => $status === 'reject' ? $this->rejectDescription : null
                    ]);
                }

                if ($news->latestWebTitle && in_array($news->latestWebTitle->status, ['progressing', 'waiting'])) {
                    $totalStatus = false;
                }
        
                if ($news->latestSocialTitle && in_array($news->latestSocialTitle->status, ['progressing', 'waiting'])) {
                    $totalStatus = false;
                }
        
                if ($totalStatus) {
                    $step = NewsStep::create([
                        'news_id' => $newsId,
                        'step_id' => $stepId,
                        'creator_id' => auth()->id(),
                        'description' => $this->rejectDescription
                    ]);
                    
                    $news->update(['status' => $step->id]); 
                }
            }
        });

        $this->reset(['selectedIds', 'rejectDescription', 'selectAll']);
        $this->dispatch('$_alert_message', [
            'message' => $status === 'accept' 
                ? 'تیترهای انتخابی با موفقیت تأیید شدند' 
                : 'تیترهای انتخابی رد شدند'
        ]);
        $this->dispatch('newsTitle-rejected'); 
    }

    public function processContent($newsId)
    {
        DB::transaction(function () use ($newsId) {
                $news = News::findOrFail($newsId);
                $totalStatus = true;
        
              $this->contentStatus;
                  
                if ($title) {
                    $title->update([
                        'status' => 'reject',
                        'reject_reason' => $this->rejectDescription
                    ]);
                }

                if ($news->latestWebTitle && in_array($news->latestWebTitle->status, ['progressing', 'waiting'])) {
                    $totalStatus = false;
                }
        
                if ($news->latestSocialTitle && in_array($news->latestSocialTitle->status, ['progressing', 'waiting'])) {
                    $totalStatus = false;
                }
        
                if ($totalStatus) {
                    $step = NewsStep::create([
                        'news_id' => $newsId,
                        'step_id' => 7,
                        'creator_id' => auth()->id(),
                        'description' => $this->rejectDescription
                    ]);
                    
                    $news->update(['status' => $step->id]); 
                }
        });

        $this->reset(['selectedIds', 'rejectDescription', 'selectAll']);
        $this->dispatch('$_alert_message', [
            'message' => 'تیتر انتخابی رد شد'
        ]);
        $this->dispatch('newsTitle-rejected'); 
    }

    public function details($id)
    {
        $this->dispatch('$_news_details', $id);
    }

    public function render()
    {
        $items = $this->getBaseQuery()->latest()->paginate($this->pageNumber);

        return view('livewire.manage-news.monitoring-news.news-list-component', [
            'items' => $items,
        ]);
    }
}