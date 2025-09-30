<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\User;
use App\Models\Task;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Hekmatinasser\Verta\Verta;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ReportsExport;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Style;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Border;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Morilog\Jalali\Jalalian;

class ReportsExport implements FromView,WithEvents,ShouldAutoSize,WithStyles
{
    public $char ='';
    public $selectedUser = '';
    public $selectedDate = '';
    public $startDate = '';
    public $endDate = '';

    public function __construct($char,$selectedUser,$selectedDate,$startDate,$endDate){
        $this->char = $char;
        $this->selectedUser = $selectedUser;
        $this->selectedDate = $selectedDate;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }
    
    public function view(): View
    {
        $userId = 1;
        $searchTerm = '%'.$this->char.'%';
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
        $items = $query->latest()->get();
        
            $groupedItems = $items->groupBy(function ($item) {
                return date('d-m-Y', strtotime($item->finished_date));
            });

        return view('exports.report', 
            ['items'=>$items,'groupedItems'=>$groupedItems]
        );
    }
    
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getDelegate()->setRightToLeft(true);
            },
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1    => 
            [
                'font' => [
                    'bold' => true,
                    'size' => 12 
                ],  
                'fill' => [
                    'fillType'   => Fill::FILL_SOLID,
                    'startColor' => array('argb' => '99FFCC'),
                ],
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => Border::BORDER_THIN,
                        'color' => ['rgb' => '969696'],
                    ],
                ]
            ],
        ];
    }
}
