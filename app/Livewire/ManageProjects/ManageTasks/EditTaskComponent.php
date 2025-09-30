<?php

namespace App\Livewire\ManageProjects\ManageTasks;

use App\Models\Project;
use App\Models\ProjectTask;
use App\Models\Task;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Morilog\Jalali\Jalalian;

class EditTaskComponent extends Component
{
    protected $listeners =[
        '$_projectTask_editable'=>'saveData'
    ];

    public $projectTaskId;
    public $description;
    public $selectedDate;
    public $project;
    public $priority = "normal";
    public $selectedUser = "";
    public $selectedPriority= "normal";

    public $users = [];
    public $managerId, $managerName, $managerFamily;
    public $sms = false;

    public function saveData($id){
        $this->projectTaskId = $id;
        $project = ProjectTask::find($id);
        $this->description = $project->description;
        $this->selectedDate = $project->end_date != null ? verta($project->end_date)->format('Y-n-j H:i') : null;
        $this->selectedUser = $project->user_id;
        $this->selectedPriority = $project->priority;
        $this->sms = $project->sms_status == 1;
        $this->project = Project::with('members','user')->find($project->project_id);
        $this->users = $this->project->members;
        
        $this->managerId = $this->project->user->id;
        $this->managerName = $this->project->user->name;
        $this->managerFamily = $this->project->user->family;

    }

    public function submit(){
        $this->validate([
//            'person'=>['required','max:200'],
            'description'=>['required'],
        ],['selectedUser.required'=>'فیلد شخص مسئول الزامی است.']);

        $date2 = null;
        if ($this->selectedDate) {
            $date2 = Jalalian::fromFormat('Y-n-j H:i', $this->selectedDate)->toCarbon();
            $date2 = $date2->toDateTimeString();
        }
        $projectTask = ProjectTask::find($this->projectTaskId);
        $projectTask->user_id = $this->selectedUser;
        $projectTask->description =trim($this->description);
        $projectTask->end_date = $date2;
        $projectTask->priority = $this->priority;
        $projectTask->save();

        $task = Task::whereProjectId($this->projectTaskId)->first();
        if($task){
            $task->task = trim($this->description);
            $task->user_id = $this->selectedUser;
            $task->end_date = $date2;
            $task->priority = $this->priority;
            $task->save();
        }

        $this->dispatch('$_projectTask_refresh');
        $this->dispatch('$_success_full_message');
        $this->dispatch('projectTask_created');
    }

    public function render()
    {
        return view('livewire.manage-projects.manage-tasks.edit-task-component');
    }
}
