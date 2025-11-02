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

        return News::with(['step.stepDefinition', 'latestWebTitle', 'latestSocialTitle'])
            ->when($this->activeTab, function ($query) use ($titleCreatorId) {
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
    public function render()
    {
        $items = $this->getBaseQuery()->latest()->paginate($this->pageNumber);

        return view('livewire.manage-news.news-title.title-list-component', [
            'items' => $items,
        ]);
    }
}
