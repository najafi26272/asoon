<?php

namespace App\Livewire\ManageMosavabe;

use App\Models\Jalase;
use App\Models\Mosavabat;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Morilog\Jalali\Jalalian;

class CreateMosavabeComponent extends Component
{
    public $description;
    public $selectedDate;
    public $jalase;
    public $priority = "normal";
    public $selectedUser = "";
    public $selectedPriority= "normal";

    public $users = [];
    public $sms = false;

    public function mount(){
        $id = Route::current()->parameter('jalaseId');
        $this->jalase = Jalase::with('hazerin')->find($id);
        $this->users = $this->jalase->hazerin;
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

            $mosavabe = Mosavabat::create([
                'user_id'=> $this->selectedUser,
                'description'=>trim($this->description),
                'status'=>'waiting',
                'jalase_id'=> $this->jalase->id,
                'end_date'=> $date2,
                'sms_status'=> $this->sms,
                'priority'=>$this->priority
            ]);

            $task = Task::create([
                'task'=>trim($this->description),
                'user_id'=> $this->selectedUser,
                'status'=>"waiting",
                'finished_date'=>$date2,
                'mosavabe_id'=>$mosavabe->id,
                'end_date'=>$date2,
                'priority'=>$this->priority

            ]);
            $this->selectedUser = "";
            $this->description = "";
            $this->dispatch('$_mosavabe_refresh');
            $this->dispatch('mosavabe_created');
            $this->dispatch('$_success_full_message');

        });

    }

    public function render()
    {
        return view('livewire.manage-mosavabe.create-mosavabe-component');
    }
}
