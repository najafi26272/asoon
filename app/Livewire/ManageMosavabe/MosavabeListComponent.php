<?php

namespace App\Livewire\ManageMosavabe;

use App\Models\Jalase;
use App\Models\Mosavabat;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Livewire\WithPagination;

class MosavabeListComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        '$_mosavabe_refresh'=>'refresh'
    ];

    public $jalase;
    public $char = "";
    public $pageNumber = 10;

    public function mount(){
        $id = Route::current()->parameter('jalaseId');
        $this->jalase = Jalase::find($id);
    }


    public function refresh(){
        $searchTerm = '%'.$this->char.'%';
        $items = Mosavabat::with('user')->whereJalaseId($this->jalase->id)->where('description','LIKE',$searchTerm)->latest()->paginate($this->pageNumber);
    }
    public function delete($id){
        $this->dispatch('$_mosavabe_deletable',$id);
        $this->dispatch('show-delete-mosavabe-modal');

    }
    public function update($id){
        $this->dispatch('$_mosavabe_editable',$id);
        $this->dispatch('show-mosavabe_edit-modal');

    }

    public function render()
    {
        $searchTerm = '%'.$this->char.'%';
        $items = Mosavabat::with('user')->whereJalaseId($this->jalase->id)->where('description','LIKE',$searchTerm)->latest()->paginate($this->pageNumber);
        return view('livewire.manage-mosavabe.mosavabe-list-component',['items'=>$items]);
    }
}
