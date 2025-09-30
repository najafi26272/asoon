<?php

namespace App\Livewire\ManageDashboard;

use App\Models\Comment;
use App\Models\Jalase;
use App\Models\Mosavabat;
use App\Models\News;
use App\Models\NewsViewsCount;
use App\Models\Province;
use App\Models\Service;
use App\Models\Task;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AnalyticsComponent extends Component
{

    public $tasksCount;
    public $finishedTasksCount;
    public $progressingTasksCount;
    public $waitungTasksCount;

    public $projectCount;
    public $jalaseCount;

    public function mount(){
        $this->tasksCount = Auth::user()->level == "admin" ? Task::Count() : Task::whereUserId(Auth::user()->id)->count() ;
        $this->finishedTasksCount =Auth::user()->level == "admin" ?  Task::whereStatus('finished')->Count()  : Task::whereUserId(Auth::user()->id)->whereStatus('finished')->Count();
        $this->waitungTasksCount =Auth::user()->level == "admin" ?  Task::whereStatus('waiting')->Count()  : Task::whereUserId(Auth::user()->id)->whereStatus('waiting')->Count();
        $this->progressingTasksCount = Auth::user()->level == "admin" ? Task::whereStatus('progressing')->Count() : Task::whereUserId(Auth::user()->id)->whereStatus('progressing')->Count();
        $this->projectCount = Auth::user()->level == "admin" ? Project::count() :
            Project::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('creator_id', Auth::user()->id)
                ->orWhereHas('members', function ($q) {
                    $q->where('user_id', Auth::user()->id);
                });
            })->with('members')->count();
            
        $this->jalaseCount = Auth::user()->level == "admin" ? Jalase::count() :
            Jalase::where(function($query) {
            $query->where('creator_id', Auth::user()->id)
                  ->orWhereHas('hazerin', function($q) {
                      $q->where('user_id', Auth::user()->id);
                  })
                  ->orWhereHas('ghayebin', function($q) {
                      $q->where('user_id', Auth::user()->id);
                  });
            })->with('categories', 'hazerin')
              ->count();
    }

    public function render()
    {
        return view('livewire.manage-dashboard.analytics-component');
    }
}
