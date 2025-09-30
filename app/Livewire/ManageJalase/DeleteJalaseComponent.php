<?php

namespace App\Livewire\ManageJalase;

use App\Models\Jalase;
use Livewire\Component;

class DeleteJalaseComponent extends Component
{

    protected $listeners = [
        '$_jalase_deletable'=>'saveData'
    ];

    public $jalaseId;

    public function saveData($id){
        $this->jalaseId = $id;
    }

    public function delete(){
        Jalase::find($this->jalaseId)->delete();
        $this->dispatch('jalase-deleted');
        $this->dispatch('$_jalase_refresh');
        $this->dispatch('$_success_full_message');

    }

    public function render()
    {
        return view('livewire.manage-jalase.delete-jalase-component');
    }
}
