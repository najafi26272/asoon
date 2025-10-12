<?php

namespace App\Livewire\ManageReview;

use Livewire\Component;
use App\Models\{News,NewsStep,EditNews};
use Illuminate\Support\Facades\Auth;

class EditReviewComponent extends Component
{
    protected $listeners =[
        '$_review_editable'=>'saveData'
    ];

    public $newsId,$title,$link,$content,$summary,$agency,$topic,$reason,$goals,$edited_content;

    public function saveData($id){
        $this->newsId = $id;
        $news = News::with('editNews')->find($id);
        $this->newsId         = $news->id;
        $this->title          = $news->title;
        $this->link           = $news->link;
        $this->summary        = $news->summary;
        $this->topic          = $news->topic;
        $this->goals          = $news->goals;
        $this->edited_content = $news->editNews->edited_content ?? null;
    }
    public function submit()
    {
        $this->validate([
            'edited_content' => 'required',
        ]);
        $newsStep = NewsStep::create([
            'news_id'    => $this->newsId,
            'step_id'    => 8,
            'creator_id' => Auth::id(),
        ]);
        News::findOrFail($this->newsId)->update(['status' => $newsStep->id]);
        EditNews::updateOrCreate(
            ['news_id' => $this->newsId],
            [
                'edited_content' => $this->edited_content,
                'editor_id'      => Auth::id(),
                'status'         => 'waiting',
            ]
        );
        $this->dispatch('$_review_refresh');
        $this->dispatch('review_edited');
        $this->dispatch('$_success_full_message');
    }
    public function render()
    {
        return view('livewire.manage-review.edit-review-component');
    }
}