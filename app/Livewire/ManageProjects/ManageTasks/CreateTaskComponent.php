<?php

namespace App\Livewire\ManageProjects\ManageTasks;

use App\Models\Project;
use App\Models\ProjectTask;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Morilog\Jalali\Jalalian;

class CreateTaskComponent extends Component
{
    public $description;
    public $selectedDate;
    public $project;
    public $priority = "normal";
    public $selectedUser = "";
    public $selectedPriority= "normal";

    public $users = [];
    public $sms = false;

    public function mount(){
        $id = Route::current()->parameter('id');
        $this->project = Project::with('members','user')->find($id);
        $this->users = $this->project->members;
    }

    public function submit(){
        $this->validate([
            'selectedUser'=>['required'],
            'description'=>['required'],
        ],['selectedUser.required'=>'فیلد شخص مسئول الزامی است.']);
        DB::transaction(function () {

            $date2 = null;
            if ($this->selectedDate) {
                $date2 = Jalalian::fromFormat('Y-n-j H:i', $this->selectedDate)->toCarbon();
                $date2 = $date2->toDateTimeString();
            }

            $projectTask = ProjectTask::create([
                'user_id'=> $this->selectedUser,
                'description'=>trim($this->description),
                'status'=>'waiting',
                'project_id'=> $this->project->id,
                'end_date'=> $date2,
                'sms_status'=> $this->sms,
                'priority'=>$this->priority
            ]);

            $task = Task::create([
                'task'=>trim($this->description),
                'user_id'=> $this->selectedUser,
                'status'=>"waiting",
                'finished_date'=>$date2,
                'project_id'=>$projectTask->id,
                'end_date'=>$date2,
                'priority'=>$this->priority

            ]);
            $this->selectedUser = "";
            $this->description = "";
            $this->dispatch('$_projectTask_refresh');
            $this->dispatch('projectTask_created');
            $this->dispatch('$_success_full_message');

        });

    }

    public function render()
    {
        return view('livewire.manage-projects.manage-tasks.create-task-component');
    }
}
