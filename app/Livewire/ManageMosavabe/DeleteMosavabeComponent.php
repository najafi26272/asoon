<?php

namespace App\Livewire\ManageMosavabe;

use App\Models\Mosavabat;
use App\Models\Task;
use Livewire\Component;

class DeleteMosavabeComponent extends Component
{

    protected $listeners = [
        '$_mosavabe_deletable'=>'saveData'
    ];

    public $mosavabeId;

    public function saveData($id){
        $this->mosavabeId = $id;
    }

    public function delete(){
        Mosavabat::find($this->mosavabeId)->delete();
        Task::Where('mosavabe_id',$this->mosavabeId)->delete();
        $this->dispatch('mosavabe-deleted');
        $this->dispatch('$_mosavabe_refresh');
        $this->dispatch('$_success_full_message');

    }
    public function render()
    {
        return view('livewire.manage-mosavabe.delete-mosavabe-component');
    }
}
