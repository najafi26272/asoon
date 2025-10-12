<?php

namespace App\Livewire\ManageReview;

use Livewire\Component;
use App\Models\{News,NewsStep,EditNews};

class ReviewDetailsComponent extends Component
{
    public $reviewId,$newsId,$title,$link,$content,$summary,$agency,$topic,$reason,$goals,$edited_content;
    protected $listeners =[
        '$_review_details'=>'saveData'
    ];

    public function saveData($id){
        $news = News::with('editNews')->find($id);
        $this->newsId         = $news->id;
        $this->title          = $news->title;
        $this->link           = $news->link;
        $this->summary        = $news->summary;
        $this->topic          = $news->topic;
        $this->goals          = $news->goals;
        $this->reviewId = $news->editNews->id ?? null;
        $this->review_status = $news->editNews->status ?? null;
        $this->edited_content = $news->editNews->edited_content ?? null;
    }

    public function render()
    {
        return view('livewire.manage-review.review-details-component');
    }
}
