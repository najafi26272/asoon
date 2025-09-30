<?php

namespace App\Livewire\ManageProjects\ManageTasks;

use App\Models\Project;
use App\Models\ProjectTask;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Livewire\WithPagination;

class TaskListComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        '$_projectTask_refresh'=>'refresh'
    ];

    public $project;
    public $char = "";
    public $pageNumber = 10;

    public function mount(){
        $id = Route::current()->parameter('id');
        $this->project = Project::find($id);
    }
    public function refresh(){
        $searchTerm = '%'.$this->char.'%';
        $items = ProjectTask::with('user')->whereProjectId($this->project->id)->where('description','LIKE',$searchTerm)->latest()->paginate($this->pageNumber);
    }
    public function delete($id){
        $this->dispatch('$_projectTask_deletable',$id);
        $this->dispatch('show-delete-projectTask-modal');

    }
    public function update($id){
        $this->dispatch('$_projectTask_editable',$id);
        $this->dispatch('show-projectTask_edit-modal');

    }

    public function render()
    {
        $searchTerm = '%'.$this->char.'%';
        $items = ProjectTask::with('user')->whereProjectId($this->project->id)->where('description','LIKE',$searchTerm)->latest()->paginate($this->pageNumber);
        return view('livewire.manage-projects.manage-tasks.task-list-component', ['items'=>$items, 'project'=>$this->project]);
    }
}
