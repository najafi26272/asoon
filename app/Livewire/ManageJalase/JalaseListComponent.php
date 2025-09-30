<?php

namespace App\Livewire\ManageJalase;

use App\Models\Jalase;
use App\Models\Part;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class JalaseListComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        '$_jalase_refresh'=>'refresh'
    ];

    public $pageNumber = 10;
    public $char = "";
    public $search='';
    public $selectedUser = 'all',$users = [];

    public function mount(){
        $this->users = User::orderBy('family','asc')->get();
    }
    
    public function refresh(){
        $searchTerm = '%'.$this->search.'%';
        $items = [];
        // if (Auth::user()->accesses->meetings_access){
        if (Auth::user()->level == 'admin'){
            if($this->selectedUser && $this->selectedUser !== 'all'){
                $items = Jalase::where(function($query) {
                    $query->where('creator_id', $this->selectedUser)
                          ->orWhereHas('hazerin', function($q) {
                              $q->where('user_id', $this->selectedUser);
                          })
                          ->orWhereHas('ghayebin', function($q) {
                              $q->where('user_id', $this->selectedUser);
                          });
                    })->with('categories', 'hazerin')->latest()->where('title','LIKE',$searchTerm)->paginate($this->pageNumber);
            }else{
                $items = Jalase::with('categories', 'hazerin')->latest()->where('title','LIKE',$searchTerm)->paginate($this->pageNumber);
            }
        }else{
            $items = Jalase::where(function($query) {
            $query->where('creator_id', Auth::user()->id)
                  ->orWhereHas('hazerin', function($q) {
                      $q->where('user_id', Auth::user()->id);
                  })
                  ->orWhereHas('ghayebin', function($q) {
                      $q->where('user_id', Auth::user()->id);
                  });
            })->with('categories', 'hazerin')->latest()
              ->where('title', 'LIKE', $searchTerm)
              ->paginate($this->pageNumber);
              
            // $items = Jalase::where('creator_id',Auth::user()->id)->with('categories')->with('hazerin')->latest()->where('title','LIKE',$searchTerm)->paginate($this->pageNumber);
        }
    }
    
    public function delete($id){
        $this->dispatch('$_jalase_deletable',$id);
        $this->dispatch('show-delete-jalase-modal');
    }
    public function update($id){
        $this->dispatch('$_jalase_editable',$id);
    }

    public function render()
    {
        $searchTerm = '%'.$this->search.'%';
        $items = [];
        if (Auth::user()->level == 'admin'){
            if($this->selectedUser && $this->selectedUser !== 'all'){
                $items = Jalase::where(function($query) {
                    $query->where('creator_id', $this->selectedUser)
                          ->orWhereHas('hazerin', function($q) {
                              $q->where('user_id', $this->selectedUser);
                          })
                          ->orWhereHas('ghayebin', function($q) {
                              $q->where('user_id', $this->selectedUser);
                          });
                    })->with('categories', 'hazerin')->latest()->where('title','LIKE',$searchTerm)->paginate($this->pageNumber);
            }else{
                $items = Jalase::with('categories', 'hazerin')->latest()->where('title','LIKE',$searchTerm)->paginate($this->pageNumber);
            }
        }else{
            $items = Jalase::where(function($query) {
            $query->where('creator_id', Auth::user()->id)
                  ->orWhereHas('hazerin', function($q) {
                      $q->where('user_id', Auth::user()->id);
                  })
                  ->orWhereHas('ghayebin', function($q) {
                      $q->where('user_id', Auth::user()->id);
                  });
            })->with('categories', 'hazerin')->latest()
              ->where('title', 'LIKE', $searchTerm)
              ->paginate($this->pageNumber);
              
  
        //     // $items = Jalase::where('creator_id',Auth::user()->id)->with('categories')->with('hazerin')->whereHas('hazerin',function($q) {
        //     //     $q->where('user_id', '=', Auth::user()->id);
        //     // })->latest()->where('title','LIKE',$searchTerm)->paginate($this->pageNumber);
        //     $items = Jalase::where('creator_id',Auth::user()->id)->with('categories')->with('hazerin')->latest()->where('title','LIKE',$searchTerm)->paginate($this->pageNumber);
        }
        return view('livewire.manage-jalase.jalase-list-component',['items'=>$items]);
    }
}
