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
use Livewire\WithPagination;

class ReportsListComponent extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        '$_report_refresh'=>'refresh'
    ];
    
    public $char = "";
    public $search = '';
    public $pageNumber = 10;
    public $selectedUser;
    public $users = [];
    public $selectedDate;
    public $startDate,$endDate;
    public $time,$reportFile,$size;
    public $months = [];

    public function mount(){
        $this->selectedUser = Auth::user()->id;
        $this->users = User::orderBy('family','asc')->get();
        
        $months = [];
        for ($i = 0; $i < 3; $i++) {
            $months[date('Y-m', strtotime("-$i months"))] = date('F Y', strtotime("-$i months"));
        }
        $this->months = $months;
        
        $this->time = date('Y-m');
    }
    
    public function refresh(){
        $searchTerm = '%'.$this->search.'%';
        $query = Task::where('user_id',$this->selectedUser)->where('report_status', '=', "1")->where('task', 'LIKE', $searchTerm);
    
        if ($this->selectedDate) {
            $query->whereDate('finished_date','>=',$this->startDate)->whereDate('finished_date','<=',$this->endDate);
        }else{
            $x = Carbon::now();
            $mytime = Carbon::parse($x);
            $x = $mytime->subMonth()->format('Y-m-d');
            $month= Verta::instance($x)->format('m');
            $year = Verta::instance($x)->format('Y');
            $shamsi = $year .'-'. $month . '-15';
            
            $miladi = \Morilog\Jalali\CalendarUtils::createCarbonFromFormat('Y-m-d', $shamsi);
            $miladi = $miladi->toDateTimeString();
                        
            $query->whereDate('finished_date','>=',$miladi);
        }
        
        $items = $query->latest()->paginate($this->pageNumber);
    }
    
    public function delete($id){
        $this->dispatch('$_report_deletable',$id);
        $this->dispatch('show-delete-report-modal');
    }

    public function changeDate(){
        $before_ta = trim(Str::before($this->selectedDate, 'تا'));
        $after_ta = trim(Str::after($this->selectedDate, 'تا')); 
        
        $this->startDate = \Morilog\Jalali\CalendarUtils::createCarbonFromFormat('Y-m-d', $before_ta);
        $this->startDate = $this->startDate ->toDateTimeString();

        $this->endDate =\Morilog\Jalali\CalendarUtils::createCarbonFromFormat('Y-m-d', $after_ta); 
        $this->endDate =   $this->endDate->toDateTimeString();
    }

    public function export()
    {
        $user = User::findOrFail($this->selectedUser);
        $excelName = $user->name . " ".$user->family .".xlsx";
        return Excel::download(new ReportsExport($this->char,$this->selectedUser, $this->selectedDate, $this->startDate, $this->endDate), $excelName);
    }
    
    public function storeReportFile(){
        $rules = [
            'time' => 'required',
            'reportFile' => 'required|file|mimes:zip|max:51200',
        ];

        $this->validate($rules);

        $row = ReportFile::where('user_id',$this->selectedUser)->where('related_month',$this->time)->first();
        if($row){
            Storage::disk('public')->delete("public/files/reports/" . $row->file);
            $fileName = time() . '_' . $this->reportFile->getClientOriginalName();
            $this->reportFile->storeAs('public/files/reports', $fileName);

            $row->update(['file'=>$fileName]);
        }else{
            $tirthFromLast = ReportFile::where('user_id',$this->selectedUser)->orderBy('id', 'desc')->skip(2)->take(1)->get();
            if(count($tirthFromLast)>0){
                Storage::disk('public')->delete("public/files/reports/" . $tirthFromLast->file);
            }
            
            $fileName = time() . '_' . $this->reportFile->getClientOriginalName();
            $this->reportFile->storeAs('public/files/reports', $fileName);
            
            ReportFile::create
            ([
                'size' => $this->reportFile->getSize(), // in bytes;
                'related_month' => $this->time,
                'file' => $fileName,
                'user_id' => $this->selectedUser,
            ]);
        }
        $this->dispatch('$_success_full_message_report');
        $this->dispatch('$_report_refresh');
        $this->dispatch('reportDownload_created');
    }

    function render()
    {
        $searchTerm = '%'.$this->search.'%';
        $query = Task::where('user_id',$this->selectedUser)->where('report_status', '=', "1")->where('task', 'LIKE', $searchTerm);
    
        if ($this->selectedDate) {
            $query->whereDate('finished_date','>=',$this->startDate)->whereDate('finished_date','<=',$this->endDate);
        }else{
            $x = Carbon::now();
            $mytime = Carbon::parse($x);
            $x = $mytime->subMonth()->format('Y-m-d');
            $month= Verta::instance($x)->format('m');
            $year = Verta::instance($x)->format('Y');
            $shamsi = $year .'-'. $month . '-15';
            
            $miladi = \Morilog\Jalali\CalendarUtils::createCarbonFromFormat('Y-m-d', $shamsi);
            $miladi = $miladi->toDateTimeString();
                        
            $query->whereDate('finished_date','>=',$miladi);
        }
        
        $items = $query->latest()->paginate($this->pageNumber);
    
        return view('livewire.manage-reports.reports-list-component',['items'=>$items]);
    }
    
    public function updatedSelectedUser()
    {
        $this->resetPage();
    }
    

}
