<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\LoginLogoutLog;

class LogoutController extends Controller
{
    public function logout(){
        LoginLogoutLog::create([  
            'user_id' =>  Auth::user()->id,  
            'action' => 'logout',  
        ]);
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
