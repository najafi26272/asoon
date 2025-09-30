<?php

namespace App\Livewire\ManageReports;

use App\Models\Jalase;
use App\Models\Mosavabat;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Morilog\Jalali\Jalalian;

class CreateReportComponent extends Component
{

    public $description;
    public $selectedDate;
    public $time;
    
    public function submit(){
        $this->validate([
            'description'=>['required'],
            'time'=>['required'],
            'selectedDate'=> ['required']
        ]);
        DB::transaction(function () {

            $date2 = null;
            if ($this->selectedDate) {
                $date2 = Jalalian::fromFormat('Y-n-j', $this->selectedDate)->toCarbon();
                $date2 = $date2->toDateTimeString();
            }

            $task = Task::create([
                'task'=>trim($this->description),
                'finished_date'=>$date2,
                'user_id'=>Auth::user()->id,
                'time' => $this->time,
                'report_status' => 1,
                'report_only' => 1
            ]);
            $this->description = "";
            $this->time = "";
            $this->end_date = "";
            $this->dispatch('$_report_refresh');
            $this->dispatch('report_created');
            $this->dispatch('$_success_full_message');
        });

    }
    public function render()
    {
        return view('livewire.manage-reports.create-report-component');
    }
}
