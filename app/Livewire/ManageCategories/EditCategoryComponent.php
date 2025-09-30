<?php

namespace App\Livewire\ManageCategories;

use App\Models\Category;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Morilog\Jalali\Jalalian;
use SebastianBergmann\CodeUnit\FileUnit;
use Illuminate\Support\Facades\Route;

class EditCategoryComponent extends Component
{
    protected $listeners =[
        '$_category_editable'=>'saveData'
    ];

    public $title;
    public $categoryId;

    public function saveData($id){
        $this->categoryId = $id;
        $data = Category::find($id);
        $this->title =$data->title;
    }

    public function submit(){
        $this->validate([
            'title' => ['required'],
        ]);

        $data = Category::where('id','=',$this->categoryId)->update([
            'title'=>trim($this->title),
        ]);
            
        $this->dispatch('$_category_refresh');
        $this->dispatch('category_created');
        $this->dispatch('$_success_full_message');
    }

    public function render()
    {
        return view('livewire.manage-categories.edit-category-component');
    }
}
