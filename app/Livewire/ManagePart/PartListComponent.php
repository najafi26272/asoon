<?php

namespace App\Livewire\ManagePart;

use App\Models\Part;
use Livewire\Component;
use Livewire\WithPagination;

class PartListComponent extends Component
{
    use WithPagination;
    protected $listeners = [
        '$_part_refresh'=>'refresh'
    ];

    public $pageNumber = 10;

    public function refresh(){
        $items = Part::latest()->with('service')->paginate($this->pageNumber);
    }

    public function update($id){
        $this->emit('$_part_editable',$id);
        $this->dispatchBrowserEvent('show-update-part-modal');

    }

    public function delete($id){
        $this->emit('$_part_deletable',$id);
        $this->dispatchBrowserEvent('show-delete-part-modal');

    }

    public function render()
    {
        $items = Part::latest()->with('service')->paginate($this->pageNumber);
        return view('livewire.manage-part.part-list-component',['items'=>$items]);
    }
}
