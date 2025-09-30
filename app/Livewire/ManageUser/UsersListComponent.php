<?php

namespace App\Livewire\ManageUser;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class UsersListComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        '$_user_refresh'=>'refresh'
    ];
    public $search = '';

    public $paginate_num=10;
    public $char = "";

    public function refresh(){
        $searchTerm = '%'.$this->search.'%';
        $items = User::where(function($query) use ($searchTerm) {
                $query->whereRaw("CONCAT(name, ' ', family) LIKE ?", ['%'.$searchTerm.'%'])
                      ->orWhere('username', 'LIKE', '%'.$searchTerm.'%')
                      ->orWhere('description', 'LIKE', '%'.$searchTerm.'%');
            })
            ->orderBy('id', 'desc')
            ->paginate($this->paginate_num);
    }

    public function mount(){
        $searchTerm = '%'.$this->search.'%';
        $items = User::where(function($query) use ($searchTerm) {
                $query->whereRaw("CONCAT(name, ' ', family) LIKE ?", ['%'.$searchTerm.'%'])
                      ->orWhere('username', 'LIKE', '%'.$searchTerm.'%')
                      ->orWhere('description', 'LIKE', '%'.$searchTerm.'%');
            })
            ->orderBy('id', 'desc')
            ->paginate($this->paginate_num);
    }

    public function delete($id){
        $this->dispatch('show-delete-user-modal');
        $this->dispatch('$_user_deletable',$id);
    }

    public function changeAccess($id){
        $this->dispatch('show-user-access-modal');
        $this->dispatch('$_user_access_changeable',$id);
    }

    public function changeStatus($id){
        $user = User::find($id);
        if($user->status == "active"){
            $user->status = 'passive';
        }else{
            $user->status = 'active';
        }
        $user->save();
        $this->refresh();
    }

    
    public function render()
    {
        $searchTerm = '%'.$this->search.'%';
        $items = User::where(function($query) use ($searchTerm) {
                $query->whereRaw("CONCAT(name, ' ', family) LIKE ?", ['%'.$searchTerm.'%'])
                      ->orWhere('username', 'LIKE', '%'.$searchTerm.'%')
                      ->orWhere('description', 'LIKE', '%'.$searchTerm.'%');
            })
            ->orderBy('id', 'desc')
            ->paginate($this->paginate_num);
    
        return view('livewire.manage-user.users-list-component',['items'=>$items]);
    }
}
