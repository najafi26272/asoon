<?php

namespace App\Livewire\ManageJalase;

use App\Models\Jalase;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class JalaseDetailsComponent extends Component
{

    public $jalase;

    public function mount(){
        $id = Route::current()->parameter('jalaseId');
        $this->jalase = Jalase::with('mosavabat')->with('hazerin')->with('ghayebin')->with('categories')->find($id);
    }


    public function render()
    {
        return view('livewire.manage-jalase.jalase-details-component');
    }
}
