<?php
namespace App\Livewire\ManageNews\MonitoringNews;
use Livewire\Component;
use App\Models\{News,NewsStep};
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

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
    protected $listeners = [
        '$_news_refresh' => 'refresh',
    ];

    public function addInfo($id)
    {
        $this->dispatch('$_info_add', $id);
        $this->dispatch('show-add-info-news-modal');
    }

    public function refresh()
    {
        $searchTerm = '%'.$this->char.'%';
        $items = News::with('step.stepDefinition')
            ->where('title', 'LIKE', $searchTerm)
            ->orWhere('link', 'LIKE', $searchTerm)
            ->orWhere('topic', 'LIKE', $searchTerm)
            ->latest()
            ->paginate($this->pageNumber);
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

            foreach ($this->selectedIds as $id) {
                $step = NewsStep::create([
                    'news_id' => $id,
                    'step_id' => $stepId,
                    'creator_id' => Auth::id(),
                    'description' => $this->rejectDescription
                ]);
                
                News::findOrFail($id)->update([
                    'status' => $step->id
                ]);
            }

            $this->reset(['selectedIds', 'rejectDescription']);
            $this->dispatch('$_alert_message', ['message' => $stepId === 2 
                    ? 'موارد انتخابی رد شدند' 
                    : 'موارد انتخابی تأیید شدند']);   
            $this->dispatch('news-rejected'); 
            $this->selectAll = false;
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
        $searchTerm = '%'.$this->char.'%';

        $query = News::with('step.stepDefinition')
        ->where('title', 'LIKE', $searchTerm)
        ->orWhere('link', 'LIKE', $searchTerm)
        ->orWhere('topic', 'LIKE', $searchTerm);

        if(request()->routeIs('addInfoNews')) {
            $query->whereHas('step.stepDefinition', function($q) {
                $q->where('id', '!=', 2);
            });
        }

        $items = $query->latest()->paginate($this->pageNumber ?: 15);

        return view('livewire.manage-news.monitoring-news.news-list-component', [
            'items' => $items,
        ]);
    }
}