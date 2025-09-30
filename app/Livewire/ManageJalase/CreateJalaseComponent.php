<?php

namespace App\Livewire\ManageJalase;

use App\Models\Jalase;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;
use Morilog\Jalali\Jalalian;

class CreateJalaseComponent extends Component
{

    use WithFileUploads;

    public $title;
    public $hazerin;
    public $ghayebin;
    public $guests;
    public $description;
    public $selectedDate;
    public $invited = "";
    public $selectedJalaseCategory;
    public $selectedHazerin = [];
    public $selectedGhayebin = [];

    public $jalaseCategories = [];
    public $users = [];



    public function mount(){
        $this->jalaseCategories = Category::all();
        $this->users = User::all();
        $this->selectedDate =verta(date('Y-m-d H:i:s'))->format('Y-n-j H:i');
    }

    public function submit(){

        $this->validate([
            'title'=>['required','max:200'],
            'selectedHazerin'=>['required'],
            'selectedDate'=>['required'],
            'selectedJalaseCategory'=>['required'],
        ]);

        DB::transaction(function (){
            $date2 = null;
            if ($this->selectedDate) {
                $date2 = Jalalian::fromFormat('Y-n-j H:i', $this->selectedDate)->toCarbon();
                $date2 = $date2->toDateTimeString();
            }
            $jalase = Jalase::create([
                'title'=>trim($this->title),
                'description'=>$this->description,
                'creator_id'=>Auth::user()->id,
                'date'=>$date2,
                'invited'=>$this->invited,
            ]);
            $cat = Category::find($this->selectedJalaseCategory);
            $jalase->categories()->attach($cat);

            $hazerin = User::find($this->selectedHazerin);
            $jalase->hazerin()->attach($hazerin);


            $ghayebin = User::find($this->selectedGhayebin);
            $jalase->ghayebin()->attach($ghayebin);


            $this->dispatch('$_jalase_refresh');
            $this->dispatch ('$_success_full_message');
            $this->dispatch ('jalase_created');

        });

    }


    public function render()
    {
        $this->selectedDate =verta(date('Y-m-d H:i:s'))->format('Y-n-j H:i');
        return view('livewire.manage-jalase.create-jalase-component');
    }
}
