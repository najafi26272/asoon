<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        if (Auth::check()){
            return redirect('admin/dashboard');
        }else{
            return view('admin.pages.login');
        }

    }

    public function checkLogin(){
        if (Auth::check()){
            return redirect('admin/dashboard');
        }else{
            return redirect('login');
        }

    }

    public function crc(Request $request){
        $rules = [
            'username'=>'required|string',
            'password'=>'required|string|regex:/^[a-zA-Z0-9@$#^%&*!]+$/u',
            'captcha' => 'required|captcha_api:'. request('key') . ',math'
        ];

        $validator = validator()->make(request()->all(), $rules);
        if ($validator->fails()) {
            return  "yes";

        } else {
           return "no";
        }
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
}
