<?php

namespace App\Livewire\ManageContact;

use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ContactComponent extends Component
{

    public $title;
    public $mobile;
    public $message;
    public $msg = "";

    public function submit(){
        $this->validate([
            'title'=>'required',
            'message'=>'required',
        ]);

        Contact::create([
            'title'=>$this->title,
            'mobile'=>$this->mobile,
            'message'=>$this->message,
            'user_id'=>Auth::user() ? Auth::user()->id : null,
            'status'=>'new',
        ]);
        $this->message = "";
        $this->title = "";
        $this->mobile = "";
        $this->msg = "پیام شما با موفقیت ثبت شد.";


    }

    public function render()
    {
        return view('livewire.manage-contact.contact-component');
    }
}
