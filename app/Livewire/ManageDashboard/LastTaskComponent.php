<?php

namespace App\Livewire\ManageDashboard;

use App\Models\Task;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LastTaskComponent extends Component
{
    public function render()
    {
        $yesterday = new DateTime('yesterday');
        $waitingTaskCount = Task::where('user_id','=', Auth::user()->id)->where('end_date' ,'>', $yesterday->format('Y-m-d H:i:s'))->where('status','=','waiting')->orderBy('end_date','desc')->count();
        $items = Task::where('user_id','=', Auth::user()->id)->orderBy('id','desc')->limit(7)->get();
        return view('livewire.manage-dashboard.last-task-component', ['items'=>$items, 'waitingTaskCount'=>$waitingTaskCount]);
    }
}
