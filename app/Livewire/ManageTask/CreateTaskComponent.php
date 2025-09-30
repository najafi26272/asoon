<?php

namespace App\Livewire\ManageTask;

use App\Models\Jalase;
use App\Models\Mosavabat;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Morilog\Jalali\Jalalian;

class CreateTaskComponent extends Component
{

    public $title,$description;
    public $selectedDate;
    public $sms;
    public $priority = "normal";

    public function submit(){
        $this->validate([
            'title' => ['required'],
            'selectedDate' => ['required_if:sms,true']
        ],['selectedDate.required_if'=>'درصورت انتخاب یادآوری، فیلد تاریخ الزامی است.']);
        DB::transaction(function () {

            $date2 = null;
            if ($this->selectedDate) {
                $date2 = Jalalian::fromFormat('Y-n-j H:i', $this->selectedDate)->toCarbon();
                $date2 = $date2->toDateTimeString();
            }

            $task = Task::create([
                'task'=>trim($this->title),
                'description'=>trim($this->description),
                'status'=>"waiting",
                'end_date'=>$date2,
                'finished_date'=>$date2,
                'sms_status'=>$this->sms,
                'priority'=>$this->priority,
                'user_id'=>Auth::user()->id

            ]);
            $this->title = "";
            $this->description = "";
            $this->priority = "normal";
            $this->sms = false;
            $this->dispatch('$_task_refresh');
            $this->dispatch('task_created');
            $this->dispatch('$_success_full_message');
        });
    }
    
    public function render()
    {
        return view('livewire.manage-task.create-task-component');
    }
}
