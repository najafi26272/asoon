<?php

namespace App\Livewire\ManageTask;

use App\Models\Task;
use Livewire\Component;

class DeleteTaskComponent extends Component
{
    protected $listeners = [
        '$_task_deletable'=>'saveData'
    ];

    public $taskId;

    public function saveData($id){
        $this->taskId = $id;
    }

    public function delete(){
        Task::find($this->taskId)->delete();
        $this->dispatch('task-deleted');
        $this->dispatch('$_task_refresh');
        $this->dispatch('$_success_full_message');
    }

    public function render()
    {
        return view('livewire.manage-task.delete-task-component');
    }
}
