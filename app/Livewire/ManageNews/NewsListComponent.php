<?php
namespace App\Livewire\ManageNews;
use Livewire\Component;
use App\Models\{News,NewsStep};
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
                NewsStep::create([
                    'news_id' => $id,
                    'step_id' => $stepId,
                    'creator_id' => Auth::id(),
                    'description' => $this->rejectDescription
                ]);
                
                News::findOrFail($id)->update([
                    'status' => NewsStep::latest()->first()->id
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
    
    // public function addDetails($id)  // step_id 3
    // {
    //     $step = NewsStep::create([
    //         'news_id' => $id,
    //         'step_id' => 4, // or 2 for reject
    //         'creator_id' => Auth::user()->id,
    //         'description' => $this->description
    //     ]);
    //     News::findOrFail($id)->update(['status' => $step->id, 'channel'=>$this->channel, 'need_cover'=>$this->need_cover, 'language'=>$this->language, 'priority'=>$this->priority]);
    //     // Title::create(['news_id'=>$id,'ch'])
    // }
    public function render()
    {
        $searchTerm = '%'.$this->char.'%';
        $items = News::with('step.stepDefinition')
        ->where('title', 'LIKE', $searchTerm)
        ->orWhere('link', 'LIKE', $searchTerm)
        ->orWhere('topic', 'LIKE', $searchTerm)
        ->latest()
        ->paginate($this->pageNumber);

        return view('livewire.manage-news.news-list-component', [
            'items' => $items,
        ]);
    }
}