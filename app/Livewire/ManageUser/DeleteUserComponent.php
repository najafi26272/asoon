<?php

namespace App\Livewire\ManageUser;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class DeleteUserComponent extends Component
{
    protected $listeners =[
        '$_user_deletable'=>'saveData'
    ];

    public $userId;

    public function saveData($userId){
        $this->userId = $userId;
    }

    public function delete(){
        $user = User::find($this->userId);
//        Storage::disk('public')->delete("public/images/users".$user->image);
        $user->delete();
        $this->dispatch('$_user_refresh');
        $this->dispatch('user-deleted');
        $this->dispatch('$_success_full_message');
    }

    public function render()
    {
        return view('livewire.manage-user.delete-user-component');
    }
}
