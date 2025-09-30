<?php

namespace App\Livewire\ManageProjects;

use App\Models\Project;
use App\Models\ProjectUser;
use Livewire\Component;

class DeleteProjectComponent extends Component
{
    protected $listeners = [
        '$_project_deletable'=>'saveData'
    ];

    public $projectId;

    public function saveData($id){
        $this->projectId = $id;
    }

    public function delete(){
        Project::find($this->projectId)->delete();
        ProjectUser::where('project_id',$this->projectId)->delete();
        $this->dispatch('project-deleted');
        $this->dispatch('$_project_refresh');
        $this->dispatch('$_success_full_message');
    }

    public function render()
    {
        return view('livewire.manage-projects.delete-project-component');
    }
}
