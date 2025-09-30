<?php

namespace App\Livewire\ManageTask;

use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Mosavabat;
use App\Models\ProjectTask;

class TaskListComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        '$_task_refresh'=>'refresh'
    ];

    public $pageNumber = 10;
    public $char = "";
    public $search = '',$selectedUser = 'all',$users = [];

    public function mount(){
        $this->users = User::orderBy('family','asc')->get();
    }
    
    public function changeTaskStatus($id){
        $task = Task::find($id);
        $task->status = 'finished';
        $task->save();
        
        if ($task->mosavabe_id){
            $mosavabe = Mosavabat::find($task->mosavabe_id);
            $mosavabe->status = 'finished';
            $mosavabe->save();
        }
        
        if ($task->project_id){
            $projectTask = ProjectTask::find($task->project_id);
            $projectTask->status = 'finished';
            $projectTask->save();
        }
    }
    
    public function refresh(){
        $searchTerm = '%'.$this->search.'%';
        $items = [];
        
        if (Auth::user()->accesses->task_access){
            if($this->selectedUser && $this->selectedUser !== 'all'){
                $items = Task::where('user_id',$this->selectedUser)->with('user')->where('report_only',0)->where('task','LIKE',$searchTerm)->latest()->paginate($this->pageNumber);
            }else{
                $items = Task::with('user')->where('report_only',0)->where('task','LIKE',$searchTerm)->latest()->paginate($this->pageNumber);
            }
        }else{
            $items = Task::where('user_id',Auth::user()->id)->where('report_only',0)->where('task','LIKE',$searchTerm)->latest()->paginate($this->pageNumber);
            // $otherItems = Task::where('user_id',Auth::user()->id)->where('status','!=','finished')->where('report_only',0)->where('task','LIKE',$searchTerm)->latest()->paginate($this->pageNumber);
        }
    }
    
    public function delete($id){
        $this->dispatch('$_task_deletable',$id);
        $this->dispatch('show-delete-task-modal');
    }
    
    public function update($id){
        $this->dispatch('$_task_editable',$id);
    }

    public function showMessage(){
        $this->dispatch('$_mosavabeTask_uneditable_message');
    }
    
    public function showProjectTaskMessage(){
        $this->dispatch('$_projectTask_uneditable_message');
    }
    
    public function changeStatus($id){
        $this->dispatch('show-change-status-task-modal',$id);
        $this->dispatch('$_task_status_editable',$id);
    }

    public function changeRememberDate($id){
        $this->dispatch('show-change-status-remember-date-modal',$id);
        $this->dispatch('$_task_remember_date_editable',$id);
    }

    public function render()
    {
        $searchTerm = '%'.$this->search.'%';
        $items = [];
        
        
        if (Auth::user()->accesses->task_access){
            if($this->selectedUser && $this->selectedUser !== 'all'){
                $items = Task::where('user_id',$this->selectedUser)->with('user')->where('report_only',0)->where('task','LIKE',$searchTerm)->latest()->paginate($this->pageNumber);
            }else{
                $items = Task::with('user')->where('report_only',0)->where('task','LIKE',$searchTerm)->latest()->paginate($this->pageNumber);
            }
        }else{
            $items = Task::where('user_id',Auth::user()->id)->where('report_only',0)->where('task','LIKE',$searchTerm)->latest()->paginate($this->pageNumber);
            // $otherItems = Task::where('user_id',Auth::user()->id)->where('status','!=','finished')->where('report_only',0)->where('task','LIKE',$searchTerm)->latest()->paginate($this->pageNumber);
        }
        return view('livewire.manage-task.task-list-component',['items'=>$items]);
    }
}
