<?php

namespace App\Livewire\ManageReports;

use App\Models\Task;
use Livewire\Component;

class DeleteReportComponent extends Component
{
    protected $listeners = [
        '$_report_deletable'=>'saveData'
    ];

    public $reportId;

    public function saveData($id){
        $this->reportId = $id;
    }

    public function delete(){
        Task::find($this->reportId)->update(['report_status'=>0]);
        $this->dispatch('report-deleted');
        $this->dispatch('$_report_refresh');
        $this->dispatch('$_success_full_message');
    }

    public function render()
    {
        return view('livewire.manage-reports.delete-report-component');
    }
}
