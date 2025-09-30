<?php

namespace App\Livewire\ManageLogin;

use App\Rules\ReCaptcha;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginComponent extends Component
{

    public $data=[
        "username"=>"",
        "password"=>"",
        "remember"=>false
    ];

    public $gRecaptchaResponse;
    public $errorMessage='';
    public $captcha;

    public function submit(){
        $this->validate([
            'data.username'=>'required|string',
            'data.password'=>'required|string|regex:/^[a-zA-Z0-9@$#^%&*!]+$/u',
//            'captcha' => 'required|captcha_api:'. request('key') . ',math'
        ]);

        if (Auth::attempt([
            'username'=>$this->data['username'],
            'password'=>$this->data['password'],
        ],$this->data['remember'])){
            if (auth()->user()->status =='active'){
                return redirect()->to('admin/dashboard');
            }
            else{
                $this->errorMessage = "حساب کاربری شما غیرفعال است.";
                Auth::logout();
            }
        }
        else{
            $this->errorMessage = "نام کاربری یا رمز عبور نادرست است.";
        }
    }

    public function render()
    {
        return view('livewire.manage-login.login-component');
    }
}
