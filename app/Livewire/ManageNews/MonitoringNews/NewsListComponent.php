<?php
namespace App\Livewire\ManageNews\MonitoringNews;
use App\Models\{News,NewsStep};
use Livewire\{Component, WithPagination};
use Illuminate\Support\Facades\{Auth,Validator,DB};

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
    public $path = false;
    protected $listeners = ['$_news_refresh' => 'refresh'];

    public function mount()
    {
        $this->path = request()->is('*addInfo*');
    }

    private function getBaseQuery()
    {
        return News::with('step.stepDefinition')
            ->when($this->path, fn($q) => $q->whereHas('step.stepDefinition', 
                fn($q) => $q->where('step_id', '!=', 2)
            ))
            ->where(function ($q) {
                $search = "%{$this->char}%";
                $q->whereAny(['title', 'link', 'topic'], 'LIKE', $search);
            });
    }
    
    public function addInfo($id)
    {
        $this->dispatch('$_info_add', $id);
        $this->dispatch('show-add-info-news-modal');
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

    public function render()
    {
        $items = $this->getBaseQuery()->latest()->paginate($this->pageNumber);

        return view('livewire.manage-news.monitoring-news.news-list-component', [
            'items' => $items,
        ]);
    }
}