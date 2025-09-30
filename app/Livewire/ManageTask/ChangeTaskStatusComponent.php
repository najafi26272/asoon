<?php

namespace App\Livewire\ManageTask;

use App\Models\Mosavabat;
use App\Models\ProjectTask;
use App\Models\Task;
use Livewire\Component;
use Morilog\Jalali\Jalalian;

class ChangeTaskStatusComponent extends Component
{

    protected $listeners =[
        '$_task_status_editable'=>'saveData'
    ];

    public $selectedTaskStatus;
    public $time,$description;
    public $reportStatus;
    public $taskId;
    public $selectedDate,$finishedDate;

    public function saveData($id){
        $task = Task::find($id);
        $this->taskId = $id;
        $this->selectedTaskStatus = $task->status;
        $this->time = $task->time;
        $this->finishedDate = $task->finished_date;
        // $this->selectedDate = $task->finished_date;
        $this->reportStatus = $task->report_status == 1;
        $this->description = $task->description;
    }


    public function submit(){
        if($this->finishedDate == null && $this->selectedTaskStatus == true){
            $this->validate([
            // 'time' => ['required_if:reportStatus,true'],
            'selectedDate' => ['required']
            ],['selectedDate.required'=>'در صورت انتخاب درج در گزارش کار، فیلد تاریخ الزامی است.']);
        
        }
        $date2 = null;
        if ($this->selectedDate) {
            $date2 = Jalalian::fromFormat('Y-n-j', $this->selectedDate)->toCarbon();
            $date2 = $date2->toDateTimeString();
        }
        $this->time = $this->time ? $this->time : 0 ;
            
        $task = Task::find($this->taskId);
        $task->time = $this->selectedTaskStatus == "progressing" ||  $this->selectedTaskStatus == "waiting" ? null :  $this->time;
        $task->report_status =  $this->selectedTaskStatus == "progressing" ||  $this->selectedTaskStatus == "waiting" ? 0 :  $this->reportStatus;
        $task->status = $this->selectedTaskStatus;
        $task->finished_date = $date2 ? $date2 : $this->finishedDate;
        $task->description = $this->description;
        $task->save();
        
        if ($task->mosavabe_id){
            $mosavabe = Mosavabat::find($task->mosavabe_id);
            $mosavabe->status = $this->selectedTaskStatus;
            $mosavabe->save();
        }
        
        if ($task->project_id){
            $projectTask = ProjectTask::find($task->project_id);
            $projectTask->status = $this->selectedTaskStatus;
            $projectTask->save();
        }
        
        $this->dispatch('$_task_refresh');
        $this->dispatch('task_status_changed');
    }



    public function render()
    {
        return view('livewire.manage-task.change-task-status-component');
    }
}
