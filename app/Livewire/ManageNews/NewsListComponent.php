<?php
namespace App\Livewire\ManageNews;
use Livewire\Component;
use App\Models\News;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class NewsListComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $char = "";
    public $title, $link, $content, $summary, $agency, $topic, $reason, $goals;
    public $pageNumber = 10;
    protected $listeners = [
        '$_news_refresh' => 'refresh'
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