<?php

namespace App\Http\Controllers;

use App\Models\Jalase;
use Illuminate\Http\Request;

class JalaseController extends Controller
{
    public function details($id){
        $jalse= Jalase::with('hazerin')->with('mosavabat')->with('ghayebin')->with('categories')->find($id);
        return view('admin.pages.jalase.jalase-details',['jalase'=>$jalse]);
    }
}
