<?php

namespace App\Livewire\ManagePart;

use App\Models\Part;
use App\Models\Service;
use Iamfarhad\Validation\Rules\PersianAlpha;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreatePartComponent extends Component
{

    public $title;
    public $name;
    public $services;
    public $selectedService;

    public function mount(){
        $this->services = Service::latest()->get();
    }

    public function submit(){
        $this->validate([
            'title'=>['required','max:40'],
            'name'=>['required','unique:parts','max:40','regex:/^[a-zA-Z0-9@$#^%&*!]+$/u'],
            'selectedService'=>'required',
        ]);
        $part = new Part();
        $part->title = trim($this->title);
        $part->name =trim($this->name);
        $part->creator_id = Auth::user()->id;
        $part->service_id = $this->selectedService;
        $part->save();
        $this->title = "";
        $this->name = "";
        $this->emit('$_part_refresh');
        $this->dispatchBrowserEvent('$_success_full_message');

    }
    public function render()
    {
        return view('livewire.manage-part.create-part-component');
    }
}
