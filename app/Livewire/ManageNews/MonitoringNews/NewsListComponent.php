<?php
namespace App\Livewire\ManageNews\MonitoringNews;

use App\Models\{News, NewsStep, Rate};
use Livewire\{Component, WithPagination};
use Illuminate\Support\Facades\{Auth, DB};
use Illuminate\Database\Eloquent\Builder;

class NewsListComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $selectedIds = [];
    public $rejectDescription = '';
    public $selectAll = false;
    public $char = '';
    public $selectedStatus ='all',$selectedPriority = 'all';
    public $title, $link, $content, $summary, $agency, $topic, $reason, $goals, $description;
    public $pageNumber = 10;
    public $pathIsMonitoring = false, $pathIsReview = false, $pathIsTitle = false, $pathIsAddInfo = false, $pathIsFinal = false, $pathIsMyMonitoring = false;
    protected $listeners = ['$_news_refresh' => 'refresh'];
    public $activeTab = 'web',$test;

    public function setActiveTab($tab)
    {
        $this->activeTab = $tab;
        $this->selectedIds = []; 
        $this->selectAll = false; 
        $this->resetPage(); 
    }
    
    public function mount()
    {
        $paths = ['addInfo', 'final', 'monitoring', 'myMonitoring', 'title', 'review'];
        foreach ($paths as $path) {
            $this->{'pathIs' . ucfirst($path)} = request()->is("*news/{$path}*");
        }
    }

    public function getBaseQuery()
    {
        $query = News::with(['step.stepDefinition', 'latestWebTitle', 'latestSocialTitle']);
        $stepConditions = $this->getStepConditions($this->selectedStatus);

         // Check if selectedStatus is not 'all' and apply conditions
        if ($this->selectedStatus !== 'all') {
            $this->applyStepConditions($query, $stepConditions);
        } else {
            $this->applyPathConditions($query);
        }

        // Apply active tab conditions if the path is title
        if ($this->pathIsTitle) {
            $this->applyActiveTabConditions($query);
        }

        return $query->where(function ($query) {
            $this->applySearchConditions($query);
        });
    }
    
    private function applyStepConditions($query, $stepConditions)
    {
        foreach ($stepConditions as $key => $condition) {
            $query->when($this->{'pathIs' . ucfirst($key)}, function ($q) use ($condition) {
                $q->whereHas('step.stepDefinition', $condition);
            });
        }
    }

    private function applyPathConditions($query)
    {
        $conditions = [
            'addInfo' => [3, 4],
            'title' => [4, 5, 6, 7],
            'final' => [11, 12, 13],
            'review' => [6, 8, 9, 10, 11],
            'myMonitoring' => function (Builder $q) {
                $q->where('creator_id', Auth::user()->id);
            },
        ];

        foreach ($conditions as $key => $value) {
            $query->when($this->{'pathIs' . ucfirst($key)}, function (Builder $q) use ($value) {
                if (is_array($value)) {
                    $q->whereHas('step.stepDefinition', function (Builder $q2) use ($value) {
                        $q2->whereIn('step_id', $value);
                    });
                } else {
                    $value($q);  // Call the closure directly for myMonitoring
                }
            });
        }
    }

    private function getStepConditions($selectedStatus): array
    {
        return [
            'addInfo' => function ($q) use ($selectedStatus) {
                $q->where('step_id', $selectedStatus);
            },
            'title' => function ($q) use ($selectedStatus) {
                $q->where('step_id', $selectedStatus);
            },
            'final' => function ($q) use ($selectedStatus) {
                $q->where('step_id', $selectedStatus);
            },
            'review' => function ($q) use ($selectedStatus) {
                $q->where('step_id', $selectedStatus);
            },
            'monitoring' => function ($q) use ($selectedStatus) {
                if ($selectedStatus == 3) {
                    $q->whereNotIn('step_id', [1, 2]);
                } else {
                    $q->where('step_id', $selectedStatus);
                }
            },
            'myMonitoring' => function ($q) use ($selectedStatus) {
                if ($selectedStatus == 3) {
                    $q->whereNotIn('step_id', [1, 2]);
                } else {
                    $q->where('step_id', $selectedStatus);
                }
            },
        ];
    }

    private function applySearchConditions($query)
    {
        $search = "%{$this->char}%";
        $query->where(function ($q) use ($search) {
            $q->where('title', 'LIKE', $search)
            ->orWhere('link', 'LIKE', $search)
            ->orWhere('topic', 'LIKE', $search);
        });

        if ($this->selectedPriority && $this->selectedPriority !== 'all') {
            $query->where('priority', $this->selectedPriority);
        }
    }

    private function applyActiveTabConditions(Builder $query): void
    {
        if ($this->activeTab === 'web') {
            $query->whereHas('latestWebTitle');
        } elseif ($this->activeTab === 'socialMedia') {
            $query->whereHas('latestSocialTitle');
        }
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

    public function titleHistory($id)
    {
        $this->dispatch('$_title_history', ['id' => $id , 'activeTab' => $this->activeTab]);
        $this->dispatch('show-title-history-modal');
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
        $this->items = $this->getBaseQuery()->latest()->paginate($this->pageNumber);
    
        foreach ($this->items as $news) {
            $news->newsRate = $news->rasadRate->rate ?? null;
        }
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

        $this->processTitrsStatus('accept',6,['progressing', 'waiting', 'reject']);
    }

    public function rejectSelectedTitrs()
    {
        // $this->validate([
        //     'selectedIds' => 'required|array|min:1',
        //     'selectedIds.*' => 'integer|exists:news,id',
        //     'rejectDescription' => 'required|string|max:500'
        // ]);

        $this->processTitrsStatus('reject',7,['progressing', 'waiting']);
    }

    private function processTitrsStatus($status,$stepId,$arrayStatus = [],)
    {
        DB::transaction(function () use ($status, $stepId, $arrayStatus) {
            foreach ($this->selectedIds as $newsId) {
                $news = News::findOrFail($newsId);
                $this->test = $news->step->stepDefinition->id;
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

                if ($news->latestWebTitle && in_array($news->latestWebTitle->status, $arrayStatus)) {
                    $totalStatus = false;
                }
        
                if ($news->latestSocialTitle && in_array($news->latestSocialTitle->status, $arrayStatus)) {
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
        foreach ($items as $news) {
            $news->newsRate = $news->rasadRate->rate ?? null;
        }

        return view('livewire.manage-news.monitoring-news.news-list-component', [
            'items' => $items,
        ]);
    }
}