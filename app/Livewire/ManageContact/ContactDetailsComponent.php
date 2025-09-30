<?php

namespace App\Livewire\ManageContact;

use App\Models\Contact;
use Livewire\Component;
use Morilog\Jalali\Jalalian;
use SebastianBergmann\CodeUnit\FileUnit;
use Illuminate\Support\Facades\Route;

class ContactDetailsComponent extends Component
{
    protected $listeners =[
        '$_contact_details'=>'saveData'
    ];

    public $title,$message,$mobile,$createdDate;
    public $contactId;

    public function saveData($id){
        $this->contactId = $id;
        $data = Contact::find($id);
        $this->title =$data->title;
        $this->mobile =$data->mobile;
        $this->message =$data->message;
        $this->createdDate = verta($data->created_at)->format('Y-m-j H:i');
    }

    public function render()
    {
        return view('livewire.manage-contact.contact-details-component');
    }
}
