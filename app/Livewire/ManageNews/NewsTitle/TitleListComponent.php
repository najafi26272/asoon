<?php

namespace App\Livewire\ManageNews\NewsTitle;
use Livewire\Component;
use App\Models\News;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

class TitleListComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $char = "";
    public $selectedStatus ='all',$selectedPriority = 'all';
    public $news_id, $newTitle, $status, $description;
    public $pageNumber = 10;
    protected $listeners = [
        '$_title_refresh' => 'refresh'
    ];
    public $activeTab = 'web';

    public function setActiveTab($tab)
    {
        $this->activeTab = $tab;
        $this->resetPage();
    }
    public function getBaseQuery(): Builder
    {
        $titleCreatorId = Auth::id();
        $char = $this->char ?? '';
        $selectedStatus = $this->selectedStatus;

        $query = News::with(['step.stepDefinition', 'latestWebTitle', 'latestSocialTitle']);

        // Apply the step condition if selected status is set and not 'all'
        if ($selectedStatus && $selectedStatus !== 'all') {
            $query->whereHas('step.stepDefinition', function (Builder $q2) use ($selectedStatus) {
                $q2->where('step_id', $selectedStatus);
            });
        }

        // Apply active tab conditions
        $this->applyActiveTabConditions($query, $titleCreatorId);

        // Apply search conditions
        $this->applySearchConditions($query, $char);

        return $query;
    }

    private function applyActiveTabConditions(Builder $query, $titleCreatorId): void
    {
        if ($this->activeTab) {
            $query->where(function ($q) use ($titleCreatorId) {
                if ($this->activeTab === 'web') {
                    $q->whereHas('latestWebTitle', function ($subQuery) use ($titleCreatorId) {
                        $subQuery->where('creator_id', $titleCreatorId);
                    });
                } elseif ($this->activeTab === 'socialMedia') {
                    $q->whereHas('latestSocialTitle', function ($subQuery) use ($titleCreatorId) {
                        $subQuery->where('creator_id', $titleCreatorId);
                    });
                }
            });
        }
    }

    private function applySearchConditions(Builder $query, $char): void
    {
        $search = "%{$char}%";
        $query->where(function ($q) use ($search) {
            $q->where('title', 'LIKE', $search)
              ->orWhere('link', 'LIKE', $search)
              ->orWhere('topic', 'LIKE', $search);
        });

        if ($this->selectedPriority && $this->selectedPriority !== 'all') {
            $query->where('priority', $this->selectedPriority);
        }
    }

    public function refresh()
    {
        $items = $this->getBaseQuery()->latest()->paginate($this->pageNumber);
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

    public function titleHistory($id)
    {
        $this->dispatch('$_my_title_history', ['id' => $id , 'activeTab' => $this->activeTab]);
        $this->dispatch('show-my-title-history-modal');
    }

    public function render()
    {
        $items = $this->getBaseQuery()->latest()->paginate($this->pageNumber);

        return view('livewire.manage-news.news-title.title-list-component', [
            'items' => $items,
        ]);
    }
}
