<?php

namespace App\Livewire\ManageUser;

use App\Models\NewsLetter;
use Livewire\Component;
use Livewire\WithPagination;

class NewsLettersListComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $items = NewsLetter::latest()->paginate(10);
        return view('livewire.manage-user.news-letters-list-component',['items'=>$items]);
    }
}
