<?php

namespace App\Livewire\ManagePart;

use App\Models\Part;
use App\Models\Service;
use Iamfarhad\Validation\Rules\PersianAlpha;
use Livewire\Component;
use function Symfony\Component\Translation\t;

class EditPartComponent extends Component
{
    protected $listeners = [
        '$_part_editable'=>'saveData'
    ];
    public $title;
    public $name;
    public $partId;
    public $services;
    public $selectedService;

    public function mount(){
        $this->services = Service::latest()->get();
    }
    public function saveData($id){
        $this->partId = $id;
        $part = Part::find($id);
        $this->selectedService = $part->service_id;
        $this->title = $part->title;
        $this->name = $part->name;
    }

    public function submit(){
        $this->validate([
            'title'=>['required','max:40'],
            'name'=>['required','max:40','regex:/^[a-zA-Z0-9@$#^%&*!]+$/u','unique:parts,name,'.$this->partId],
        ]);
        $part =Part::find($this->partId);
        $part->title = trim($this->title);
        $part->name = trim($this->name);
        $part->service_id = $this->selectedService;
        $part->save();
        $this->title = "";
        $this->name = "";
        $this->emit('$_part_refresh');
        $this->dispatchBrowserEvent('$_success_full_message');
        $this->dispatchBrowserEvent('part-edited');

    }
    public function render()
    {
        return view('livewire.manage-part.edit-part-component');
    }
}
