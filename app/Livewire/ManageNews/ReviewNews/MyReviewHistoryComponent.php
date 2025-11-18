<?php

namespace App\Livewire\ManageNews\ReviewNews;

use Livewire\Component;
use App\Models\EditNews;
use Illuminate\Support\Facades\Auth;

class MyReviewHistoryComponent extends Component
{
    protected $listeners = [
        '$_my_review_history'=>'loadData'
    ];

    public $newsId;
    public $values = [];

    public function loadData($id)
    {
        $this->newsId = $id;
        $this->values = EditNews::where('status', 'reject')
            ->where('editor_id',Auth::id())
            ->where('news_id', $id)
            ->latest('created_at')
            ->get();
    }

    public function render()
    {
        return view('livewire.manage-news.review-news.my-review-history-component',[
            'values' => $this->values
        ]);
    }
}
