<?php

namespace App\Livewire\ManageProjects;

use App\Models\Project;
use App\Models\Part;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class ProjectListComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    protected $listeners = [
        '$_project_refresh'=>'refresh'
    ];

    public $pageNumber = 10;
    public $char = "";
    public $search = '',$users = [],  $selectedUser ='all';

    public function mount(){
        $this->users = User::orderBy('family','asc')->get();
    }
    
    public function refresh(){
        $searchTerm = '%'.$this->search.'%';
        $items = [];
        
        if (Auth::user()->level == 'admin' || Auth::user()->id == 20){
            if($this->selectedUser && $this->selectedUser !== 'all'){
                $items = Project::where(function ($query) {
                $query->where('user_id', $this->selectedUser)->orWhere('creator_id', $this->selectedUser)
                    ->orWhereHas('members', function ($q) {
                        $q->where('user_id', $this->selectedUser);
                    });
                })->with('members')->latest()->where('title','LIKE',$searchTerm)->paginate($this->pageNumber);
            }else{
                $items = Project::with('members')->latest()->where('title','LIKE',$searchTerm)->paginate($this->pageNumber);
            }
        }else{
            $items = Project::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('creator_id', Auth::user()->id)
                ->orWhereHas('members', function ($q) {
                    $q->where('user_id', Auth::user()->id);
                });
            })->with('members')->latest()->where('title','LIKE',$searchTerm)->paginate($this->pageNumber);
        }

    }
    public function delete($id){
        $this->dispatch('$_project_deletable',$id);
        $this->dispatch('show-delete-project-modal');
    }
    public function update($id){
        $this->dispatch('$_project_editable',$id);
    }

    public function render()
    {
        $searchTerm = '%'.$this->search.'%';
        $items = [];
        if (Auth::user()->level == 'admin' || Auth::user()->id == 20){
            if($this->selectedUser && $this->selectedUser !== 'all'){
                $items = Project::where(function ($query) {
                $query->where('user_id', $this->selectedUser)->orWhere('creator_id', $this->selectedUser)
                    ->orWhereHas('members', function ($q) {
                        $q->where('user_id', $this->selectedUser);
                    });
                })->with('members')->latest()->where('title','LIKE',$searchTerm)->paginate($this->pageNumber);
            }else{
                $items = Project::with('members')->latest()->where('title','LIKE',$searchTerm)->paginate($this->pageNumber);
            }
        }else{
            $items = Project::where(function ($query) {
            $query->where('user_id', Auth::user()->id)->orWhere('creator_id', Auth::user()->id)
                ->orWhereHas('members', function ($q) {
                    $q->where('user_id', Auth::user()->id);
                });
            })->with('members')->latest()->where('title','LIKE',$searchTerm)->paginate($this->pageNumber);

            // $items = Project::where('user_id', '=', Auth::user()->id)->latest()->where('title','LIKE',$searchTerm)->paginate($this->pageNumber);
        }
        return view('livewire.manage-projects.project-list-component',['items'=>$items]);
    }
}
