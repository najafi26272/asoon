<?php

namespace App\Livewire\ManageJalase;

use App\Models\Category;
use App\Models\Jalase;
use App\Models\JalaseCategory;
use App\Models\JalaseGhayebin;
use App\Models\JalaseHazerin;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Morilog\Jalali\Jalalian;

class EditJalaseComponent extends Component
{

    public $title;
    public $description;
    public $selectedDate;
    public $invited = "";
    public $selectedJalaseCategory = [];
    public $selectedHazerin = [];
    public $selectedGhayebin = [];

    public $jalaseCategories = [];
    public $users = [];
    public $jalase;
    public $jalaseId;

    public function saveData($id)
    {

    }

    public function mount()
    {
        $id = Route::current()->parameter('id');
        $this->jalaseId = $id;
        $jalase = Jalase::with('categories')->find($id);
        $this->title = $jalase->title;
        $this->invited = $jalase->invited;
        $this->description = $jalase->description;
        $this->selectedDate = $jalase->date != null ? verta($jalase->date)->format('Y-n-j H:i') : null;
        $hazerin = JalaseHazerin::where('jalase_id', $id)->get();
        $ghayebin = JalaseGhayebin::where('jalase_id', $id)->get();
        $jalaseCategory = JalaseCategory::where('jalase_id', $id)->get();
        for ($i = 0; count($hazerin) > $i; $i++) {
            array_push($this->selectedHazerin, $hazerin[$i]['user_id']);
        }
        for ($i = 0; count($ghayebin) > $i; $i++) {
            array_push($this->selectedGhayebin, $ghayebin[$i]['user_id']);
        }
        for ($i = 0 ; count($jalaseCategory) > $i ; $i++){
            array_push($this->selectedJalaseCategory, $jalaseCategory[$i]['category_id']);
        }
        $this->jalaseCategories = Category::all();
        $this->users = User::all();
    }


    public function submit()
    {

        DB::transaction(function () {
            $date2 = null;
            if ($this->selectedDate) {
                $date2 = Jalalian::fromFormat('Y-n-j H:i', $this->selectedDate)->toCarbon();
                $date2 = $date2->toDateTimeString();
            }
            $jalase = Jalase::find($this->jalaseId)->update([
                'title' => trim($this->title),
                'description' => $this->description,
                'date' => $date2,
                'invited' => $this->invited,
            ]);


            $jalase = Jalase::find($this->jalaseId);

            $cat = Category::find($this->selectedJalaseCategory);
            $jalase->categories()->sync($cat);

            $hazerin = User::find($this->selectedHazerin);
            $jalase->hazerin()->sync($hazerin);


            $ghayebin = User::find($this->selectedGhayebin);
            $jalase->ghayebin()->sync($ghayebin);


            $this->dispatch('$_jalase_refresh');
            $this->dispatch('$_success_full_message');
            $this->dispatch('jalase_created');

        });
    }


    public function render()
    {
        $o = [];
        $ss = JalaseCategory::where('jalase_id', $this->jalaseId)->get();
        for ($i = 0; count($ss) > $i; $i++) {
            array_push($o, $ss[$i]['category_id']);
        }
        return view('livewire.manage-jalase.edit-jalase-component', compact("o"));
    }
}
