<?php

namespace App\Livewire\ManageCategories;

use Livewire\Component;
use App\Models\Category;

class CategoryListComponent extends Component
{
    public $title;
     
    protected $listeners = [
        '$_category_refresh'=>'refresh'
    ];
    
    public function refresh(){
        $items = Category::orderBy('title', 'asc')->get();
    }
    
    public function submit(){
        $this->validate([
            'title' => ['required']
        ]);
        $data = Category::create([
            'title'=>trim($this->title),
        ]);
        $this->title = "";
    }
    
    public function delete($id){
        $this->dispatch('$_category_deletable',$id);
        $this->dispatch('show-delete-category-modal');
    }
    
    public function update($id){
        $this->dispatch('$_category_editable',$id);
    }
    
    public function render()
    {
        $items = Category::orderBy('title', 'asc')->get();
        return view('livewire.manage-categories.category-list-component',['items'=>$items]);
    }
}
