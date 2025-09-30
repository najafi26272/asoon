<?php

namespace App\Livewire\ManageReports;

use App\Models\Task;
use App\Models\Project;
use App\Models\ProjectUser;
use App\Models\JalaseCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Morilog\Jalali\Jalalian;

class EditReportComponent extends Component
{
    public $time;
    public $description;
    public $selectedDate;
    public $task;
    public $taskId;

    public function mount()
    {
        $id = Route::current()->parameter('id');
        $this->taskId = $id;
        $report = Task::find($id);
        $this->time = $report->time;
        $this->description = $report->task;
        $this->selectedDate = $report->finished_date != null ? verta($report->finished_date)->format('Y-n-j') : null;

    }


    public function submit()
    {
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

            $task = Task::find($this->taskId)->update([
                'task'=>$this->description,
                'time'=>$this->time,
                'finished_date'=>$date2,
            ]);

            $this->dispatch('$_report_refresh');
            $this->dispatch('$_success_full_message');
            $this->dispatch('report_updated');

        });
    }


    public function render()
    {

        return view('livewire.manage-reports.edit-report-component');
    }
}
