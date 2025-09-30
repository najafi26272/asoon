<?php

namespace App\Livewire\ManageMosavabe;

use App\Models\Jalase;
use App\Models\Mosavabat;
use App\Models\Task;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Morilog\Jalali\Jalalian;

class EditMosavabeComponent extends Component
{


    protected $listeners =[
        '$_mosavabe_editable'=>'saveData'
    ];

    public $mosavabeId;
    public $description;
    public $selectedDate;
    public $jalase;
    public $priority = "normal";
    public $selectedUser = "";
    public $selectedPriority= "normal";

    public $users = [];
    public $sms = false;

    public function saveData($id){
        $this->mosavabeId = $id;
        $mosavabe = Mosavabat::find($id);
        $this->description = $mosavabe->description;
        $this->selectedDate = $mosavabe->end_date != null ? verta($mosavabe->end_date)->format('Y-m-j H:i') : null;
        $this->selectedUser = $mosavabe->user_id;
        $this->selectedPriority = $mosavabe->priority;
        $this->sms = $mosavabe->sms_status == 1;
        $this->jalase = Jalase::with('hazerin')->find($mosavabe->jalase_id);
        $this->users = $this->jalase->hazerin;

    }



    public function submit(){
        $this->validate([
//            'person'=>['required','max:200'],
            'description'=>['required'],
            'selectedDate'=>'required',
        ],['selectedUser.required'=>'فیلد شخص مسئول الزامی است.']);


        $date2 = null;
        if ($this->selectedDate) {
            $date2 = Jalalian::fromFormat('Y-m-j H:i', $this->selectedDate)->toCarbon();
            $date2 = $date2->toDateTimeString();
        }
        $mosavabe = Mosavabat::find($this->mosavabeId);
        $mosavabe->user_id = $this->selectedUser;
        $mosavabe->description =trim($this->description);
        $mosavabe->end_date = $date2;
        $mosavabe->priority = $this->priority;
        $mosavabe->save();

        $task = Task::whereMosavabeId($this->mosavabeId)->first();
        if($task){
            $task->task = trim($this->description);
            $task->user_id = $this->selectedUser;
            $task->end_date = $date2;
            $task->priority = $this->priority;
            $task->save();
        }

        $this->dispatch('$_mosavabe_refresh');
        $this->dispatch('$_success_full_message');
        $this->dispatch('mosavabe_created');

    }


    public function render()
    {

        return view('livewire.manage-mosavabe.edit-mosavabe-component');
    }
}
