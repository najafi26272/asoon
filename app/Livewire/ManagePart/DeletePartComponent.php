<?php

namespace App\Livewire\ManagePart;

use App\Models\Part;
use Livewire\Component;

class DeletePartComponent extends Component
{
    protected $listeners = [
        '$_part_deletable'=>'saveData'
    ];

    public $partId;

    public function saveData($id){
        $this->partId = $id;
    }

    public function delete(){
        Part::find($this->partId)->delete();
        $this->dispatchBrowserEvent('part-deleted');
        $this->emit('$_part_refresh');
        $this->dispatchBrowserEvent('$_success_full_message');

    }

    public function render()
    {
        return view('livewire.manage-part.delete-part-component');
    }
}
