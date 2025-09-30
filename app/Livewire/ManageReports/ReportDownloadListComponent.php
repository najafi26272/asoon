<?php

namespace App\Livewire\ManageReports;

use App\Models\Task;
use App\Models\User;
use App\Models\ReportFile;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Hekmatinasser\Verta\Verta;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ReportsExport;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Morilog\Jalali\Jalalian;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class ReportDownloadListComponent extends Component
{
    use WithFileUploads;

    protected $listeners = [
        '$_report_refresh'=>'refresh'
    ];

    public $char = "";
    public $pageNumber = 10;

    function render()
    {
        $items = [];
        if (Auth::user()->accesses->report_access){
            $items = ReportFile::latest()->paginate($this->pageNumber);

        }else{
            $items = ReportFile::whereUserId(Auth::user()->id)->latest()->paginate($this->pageNumber);

        }
        return view('livewire.manage-reports.reportDownload-list-component',['items'=>$items]);
    }

}
