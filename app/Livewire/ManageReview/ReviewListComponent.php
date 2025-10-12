<?php

namespace App\Livewire\ManageReview;
use Livewire\Component;
use App\Models\News;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class ReviewListComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $char = "";
    public $news_id, $edited_content, $status, $description;
    public $pageNumber = 10;
    protected $listeners = [
        '$_review_refresh' => 'refresh'
    ];
    public function refresh()
    {
        $searchTerm = '%'.$this->char.'%';
        $editorId = Auth::user()->id;
        $items = News::where('title','LIKE',$searchTerm)->whereHas('editorsAssignments', function ($query) use ($editorId) {
            $query->where('editor_id', $editorId);
        })->with(['assignedEditors' => function ($q) use ($editorId) {
            $q->where('editor_id', $editorId);
        }])->latest()->paginate($this->pageNumber);
    }
    public function delete($id)
    {
        $this->dispatch('$_review_deletable', $id);
        $this->dispatch('show-delete-review-modal');
    }
    public function update($id)
    {
        $this->dispatch('$_review_editable', $id);
    }
    public function render()
    {
        $searchTerm = '%'.$this->char.'%';
        $editorId = Auth::user()->id;
        $items = News::where('title','LIKE',$searchTerm)->whereHas('editorsAssignments', function ($query) use ($editorId) {
            $query->where('editor_id', $editorId);
        })->with(['assignedEditors' => function ($q) use ($editorId) {
            $q->where('editor_id', $editorId);
        }])->latest()->paginate($this->pageNumber);
        return view('livewire.manage-review.review-list-component', [
            'items' => $items,
        ]);
    }
}
