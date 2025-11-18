<?php

namespace App\Livewire\ManageNews\NewsTitle;

use Livewire\Component;
use App\Models\Title;
use Illuminate\Support\Facades\Auth;

class MyTitleHistoryComponent extends Component
{
    protected $listeners = [
        '$_my_title_history'=>'loadData'
    ];

    public $newsId;
    public $values = [];

    public function loadData($payload)
    {
        $this->values = Title::where('status', 'reject')
        ->where('creator_id',Auth::id())
        ->where('news_id', $payload['id'])
        ->where('channel', $payload['activeTab']) 
        ->latest('created_at')
        ->get();
    }

    public function render()
    {
        return view('livewire.manage-news.news-title.my-title-history-component',[
            'values' => $this->values
        ]);
    }
}
