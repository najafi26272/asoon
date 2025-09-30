<?php

namespace App\Livewire\ManageContact;

use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ContactListComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    protected $listeners = [
        '$_contact_refresh'=>'refresh'
    ];

    public $pageNumber = 10;
    public $search = '';

    public function refresh(){
        $searchTerm = '%'.$this->search.'%';
        $items = [];

        $items = Contact::where('title','like',$searchTerm)->orWhere('message','like',$searchTerm)->orderBy('id', 'desc')->paginate($this->pageNumber);
    }
    
    public function details($id){
        $this->dispatch('$_contact_details',$id);
    }

    public function render()
    {
        $searchTerm = '%'.$this->search.'%';
        $items = [];

        $items = Contact::where('title','like',$searchTerm)->orWhere('message','like',$searchTerm)->orderBy('id', 'desc')->paginate($this->pageNumber);

        return view('livewire.manage-contact.contact-list-component',['items'=>$items]);
    }
}
