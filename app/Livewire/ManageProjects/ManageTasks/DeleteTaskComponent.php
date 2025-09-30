<?php

namespace App\Livewire\ManageProjects\ManageTasks;

use App\Models\ProjectTask;
use App\Models\Task;
use Livewire\Component;

class DeleteTaskComponent extends Component
{
    protected $listeners = [
        '$_projectTask_deletable'=>'saveData'
    ];

    public $projectTaskId;

    public function saveData($id){
        $this->projectTaskId = $id;
    }

    public function delete(){
        $row = Task::where('project_id',$this->projectTaskId)->delete();
        ProjectTask::find($this->projectTaskId)->delete();
        $this->dispatch('projectTask-deleted');
        $this->dispatch('$_projectTask_refresh');
        $this->dispatch('$_success_full_message');

    }
    public function render()
    {
        return view('livewire.manage-projects.manage-tasks.delete-task-component');
    }
}
