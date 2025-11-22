<?php

namespace App\Livewire\ManageNews\ReviewNews;
use Livewire\Component;
use App\Models\News;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

class ReviewListComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $char = "";
    public $news_id, $edited_content, $status, $description;
    public $pageNumber = 10;
    public $selectedStatus ='all';

    protected $listeners = [
        '$_review_refresh' => 'refresh'
    ];
    public function refresh()
    {
        $items = $this->buildQuery();
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
    public function details($id)
    {
        $this->dispatch('$_review_details', $id);
    }
    public function reviewHistory($id)
    {
        $this->dispatch('$_my_review_history', $id);
        $this->dispatch('show-my-review-history-modal');
    }


    private function buildQuery(): LengthAwarePaginator
    {
        $searchTerm = '%' . $this->char . '%';
        $editorId = Auth::user()->id;
        $selectedStatus = $this->selectedStatus;
        // Start building the query
        $query = News::with(['editNews','step.stepDefinition'])
            ->where('title', 'LIKE', $searchTerm)
            ->whereHas('editorsAssignments', function ($query) use ($editorId) {
                $query->where('editor_id', $editorId);
            })
            ->with(['assignedEditors' => function ($q) use ($editorId) {
                $q->where('editor_id', $editorId);
            }]);

        // Apply selected status conditionally
        if ($this->selectedStatus && $this->selectedStatus !== 'all') {
            $query->whereHas('step.stepDefinition', function (Builder $q2) use ($selectedStatus) {
                $q2->where('step_id', $selectedStatus);
            });
        }

        return $query->latest()->paginate($this->pageNumber);
    }

    public function render()
    {
        $items = $this->buildQuery();

        return view('livewire.manage-news.review-news.review-list-component', [
            'items' => $items,
        ]);
    }
}
