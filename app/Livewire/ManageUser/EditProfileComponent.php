<?php

namespace App\Livewire\ManageUser;

use App\Models\User;
use Carbon\Carbon;
use Iamfarhad\Validation\Rules\PersianAlpha;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditProfileComponent extends Component
{
    use WithFileUploads;


    public $name ,$family ,$username ,$mobile ,$nationalCode ,$password ,$description ,$rePassword ,$email ,$image ,$newImage ,$status ,$selectedLevel ,$nameImage , $userId;


    public function mount()
    {
        $id = Route::current()->parameter('id');
        $this->userId = $id;
        $user = User::find($id);
        $this->name = $user->name;
        $this->family = $user->family;
        $this->username = $user->username;
        $this->email = $user->email;
        $this->mobile = $user->mobile;
        $this->nationalCode = $user->national_code;
        $this->image = $user->avatar;
        $this->status = $user->status == "active";
        $this->description = $user->description;
        $this->selectedLevel = $user->level;

    }

    public function submit()
    {

        $rules = [
            'name' => ['required', 'max:40', new PersianAlpha()],
            'family' => ['required', 'max:40', new PersianAlpha()],
            'username' => 'required|max:40|unique:users,username,' . $this->userId ,
        ];

        if ($this->newImage) {
            $rules['newImage'] = "image|max:2000";
        }
        if ($this->password) {
            $rules['password'] = "max:255|same:password|min:6";
            $rules['rePassword'] = "required|max:255|same:password|min:6";
        }

        $this->validate($rules);

        $user = User::find($this->userId);
        $user->name = $this->name;
        $user->family = $this->family;
        $user->mobile = $this->mobile;
        $user->username = $this->username;
        $user->email = $this->email;
        $user->description = $this->description;

        if ($this->password) {
            $user->password = Hash::make($this->password);
        }
        if ($this->newImage != '') {
            Storage::disk('public')->delete("public/images/users/avatar" . $user->image);
            $imageName = time() . '_' . $this->newImage->getClientOriginalName();
            $this->newImage->storeAs('public/images/users/avatar', $imageName);
            $user->avatar = $imageName;
        }
        $user->save();
        $this->dispatch('$_success_full_message');

    }


    public function render()
    {
        return view('livewire.manage-user.edit-profile-component');
    }
}
