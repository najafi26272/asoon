<?php

namespace App\Livewire\ManageUser;

use App\Models\Ostanha;
use App\Models\Province;
use App\Models\User;
use App\Models\UserAccess;
use Iamfarhad\Validation\Rules\Mobile;
use Iamfarhad\Validation\Rules\NationalCode;
use Iamfarhad\Validation\Rules\PersianAlpha;
use Iamfarhad\Validation\Rules\PersianNumber;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateUserComponent extends Component
{

    use WithFileUploads;

    public $name;
    public $family;
    public $username;
    public $mobile;
    public $nationalCode;
    public $password;
    public $rePassword;
    public $email;
    public $image;
    public $status = true;
    public $employeeCode;
    public $selectedLevel;
    public $description;

    public $level = 'stuff';
    public $contractType = [
        'rasmi'=>true,
        'gharardadi'=>false
    ];




    public function submit()
    {

        $rules = [
            'name' => ['required', 'max:40'],
            'family' => ['required', 'max:40'],
            'username' => 'required|max:40|unique:users',
            'mobile' => ['max:12'],
            'password' => 'required|max:20|same:rePassword|min:6|regex:/^[a-zA-Z0-9@$#^%&*!]+$/u',
            'rePassword' => 'required|max:20|same:password|min:6|regex:/^[a-zA-Z0-9@$#^%&*!]+$/u',

        ];

        if ($this->image) {
            $rules['image'] = "image|max:2000";
        }


        $this->validate($rules);

        $user = new User();
        $user->name = $this->name;
        $user->family = $this->family;
        $user->mobile = $this->mobile;
        $user->username = $this->username;
        $user->national_code = $this->nationalCode;
        $user->email = $this->email;
        $user->level = $this->level;
        $user->password = Hash::make($this->password);
        $user->status = $this->status ? "active" : "passive";
        $user->description = $this->description;
        $user->creator_id = Auth::user()->id;
        if ($this->image != '') {
            $imageName = time() . '_' . $this->image->getClientOriginalName();
            $this->image->storeAs('public/images/users/avatar', $imageName);
            $user->avatar = $imageName;
        }
        $user->save();
         UserAccess::create(['user_id'=>$user->id]);
        $this->dispatch('$_success_full_message');
        $this->redirect('list');

    }


    public function render()
    {
        return view('livewire.manage-user.create-user-component');
    }
}
