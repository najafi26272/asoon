<?php

namespace App\Livewire\ManageNews;

use App\Models\News;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class DeleteNewsComponent extends Component
{

    protected $listeners =[
        '$_news_deletable'=>'saveData'
    ];

    public $newsId;

    public function saveData($newsId){
        $this->newsId = $newsId;
    }

    public function delete(){
        $news = News::find($this->newsId);
        Storage::disk('public')->delete("images/news/lead/".$news->lead_image);
        Storage::disk('public')->delete("images/news/".$news->image);
        Storage::disk('public')->delete("images/news/thumbnail/".$news->thumbnail);
        Storage::disk('public')->delete("images/news/thumbnail/".$news->medium_thumbnail);
        Storage::disk('public')->delete("images/news/thumbnail/".$news->large_thumbnail);
        $news->delete();
        $this->emit('$_news_refresh');
        $this->dispatchBrowserEvent('news-deleted');
        $this->dispatchBrowserEvent('$_success_full_message');
    }
    public function render()
    {
        return view('livewire.manage-news.delete-news-component');
    }
}
