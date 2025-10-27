<?php

namespace App\Livewire\ManageNews\NewsTitle;
use Livewire\Component;
use App\Models\News;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class TitleListComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $char = "";
    public $news_id, $newTitle, $status, $description;
    public $pageNumber = 10;
    protected $listeners = [
        '$_title_refresh' => 'refresh'
    ];
    public function refresh()
    {
        $searchTerm = '%'.$this->char.'%';
        $editorId = Auth::user()->id;
        $items = News::with('titr')->where('title','LIKE',$searchTerm)->whereHas('editorsAssignments', function ($query) use ($editorId) {
            $query->where('editor_id', $editorId);
        })->with(['assignedEditors' => function ($q) use ($editorId) {
            $q->where('editor_id', $editorId);
        }])->latest()->paginate($this->pageNumber);
    }
    public function delete($id)
    {
        $this->dispatch('$_title_deletable', $id);
        $this->dispatch('show-delete-title-modal');
    }
    public function update($id)
    {
        $this->dispatch('$_title_editable', $id);
    }
    public function details($id)
    {
        $this->dispatch('$_title_details', $id);
    }
    public function render()
    {
        $searchTerm = '%'.$this->char.'%';
        $editorId = Auth::user()->id;
        $items = News::with('titr')->where('title','LIKE',$searchTerm)->whereHas('editorsAssignments', function ($query) use ($editorId) {
            $query->where('editor_id', $editorId);
        })->with(['assignedEditors' => function ($q) use ($editorId) {
            $q->where('editor_id', $editorId);
        }])->latest()->paginate($this->pageNumber);
        return view('livewire.manage-news.news-title.title-list-component', [
            'items' => $items,
        ]);
    }
}
