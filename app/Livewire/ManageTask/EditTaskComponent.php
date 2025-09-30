<?php

namespace App\Livewire\ManageTask;

use App\Models\Task;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Morilog\Jalali\Jalalian;
use SebastianBergmann\CodeUnit\FileUnit;
use Illuminate\Support\Facades\Route;

class EditTaskComponent extends Component
{

    protected $listeners =[
        '$_task_editable'=>'saveData'
    ];

    public $title,$description;
    public $selectedDate,$currentEndDate;
    public $sms;
    public $priority ;
    public $taskId;
    public $dateEditable = false;

    public function saveData($id){
        $this->taskId = $id;
        $task = Task::find($id);
        $this->title = $task->task;
        $this->description =$task->description;
        $this->priority = $task->priority;
        $this->sms = $task->sms_status == 1 ;
        $today = new DateTime('');
        $expireDate = new DateTime( $task->end_date); //from database
        $this->dateEditable = $expireDate > $today;
        // $this->selectedDate =$task->end_date != null ? verta($task->end_date)->format('Y-m-j H:i') : null;
        $this->currentEndDate =$task->end_date ;
        $this->selectedDate = "";
    }


    public function submit(){
         $this->validate([
            'title' => ['required'],
            // 'selectedDate' => ['required_if:sms,true']
            ]);

       if($this->currentEndDate == null && $this->sms == true){
            $this->validate([
            // 'time' => ['required_if:reportStatus,true'],
            'selectedDate' => ['required']
            ],['selectedDate.required'=>'در صورت انتخاب یادآوری، فیلد تاریخ الزامی است.']);
        
        }
        
        DB::transaction(function () {

            $date2 = null;
            if ($this->selectedDate) {
                $date2 = Jalalian::fromFormat('Y-m-j H:i', $this->selectedDate)->toCarbon();
                $date2 = $date2->toDateTimeString();
            }

            $task = Task::where('id','=',$this->taskId)->update([
                'task'=>trim($this->title),
                'description'=>trim($this->description),
                'end_date'=>$date2 ? $date2 : $this->currentEndDate,
                'sms_status'=>$this->sms,
                'priority'=>$this->priority,

            ]);
            $this->selectedDate = "";
            $this->dispatch('$_task_refresh');
            $this->dispatch('task_created');
            $this->dispatch('$_success_full_message');

        });

    }


    public function render()
    {
        return view('livewire.manage-task.edit-task-component');
    }
}
