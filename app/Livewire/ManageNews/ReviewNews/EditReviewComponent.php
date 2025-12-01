<?php

namespace App\Livewire\ManageNews\ReviewNews;

use Livewire\Component;
use App\Models\{News,NewsStep,EditNews};
use Illuminate\Support\Facades\Auth;

class EditReviewComponent extends Component
{
    protected $listeners =[
        '$_review_editable'=>'saveData'
    ];

    public $reviewId,$newsId,$title,$link,$content,$summary,$agency,$topic,$reason,$goals,$edited_content;

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

    public function submit()
    {
        $this->validate([
            'edited_content' => 'required',
        ]);

        $news = News::findOrFail($this->newsId);
    
        $canCreateNewEdit = !in_array($news->editNews?->status, ['progressing', 'waiting']);
    
        if($news->editNews?->status == 'waiting'){
            $editStep = NewsStep::create([
                'news_id' => $this->newsId,
                'step_id' => 9,
                'creator_id' => auth()->id()
            ]);
    
            $news->update(['status' => $editStep->id]);
        }
        if ($canCreateNewEdit) {
            $editNews = EditNews::create([
                'news_id' => $this->newsId,
                'edited_content' => $this->edited_content,
                'editor_id' => auth()->id(),
                'status' => 'progressing'
            ]);
        } else {
            EditNews::where('id', $this->reviewId)->update([
                'edited_content' => $this->edited_content,
                'status' => 'progressing'
            ]);
        }
        $this->dispatch('$_review_refresh');
        $this->dispatch('review_edited');
        $this->dispatch('$_success_full_message');
    }
    public function render()
    {
        return view('livewire.manage-news.review-news.edit-review-component');
    }
}