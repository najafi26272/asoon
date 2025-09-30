<?php

namespace App\Livewire\ManageCategories;

use App\Models\Category;
use Livewire\Component;

class DeleteCategoryComponent extends Component
{
    protected $listeners = [
        '$_category_deletable'=>'saveData'
    ];

    public $categoryId;

    public function saveData($id){
        $this->categoryId = $id;
    }

    public function delete(){
        Category::find($this->categoryId)->delete();
        $this->dispatch('category-deleted');
        $this->dispatch('$_category_refresh');
        $this->dispatch('$_success_full_message');
    }

    public function render()
    {
        return view('livewire.manage-categories.delete-category-component');
    }
}
