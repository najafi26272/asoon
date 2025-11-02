<?php

namespace App\Livewire\ManageNews\MonitoringNews;

use Livewire\Component;
use App\Models\{News,NewsStep,EditNews};

class NewsDetailsComponent extends Component
{
    public $titleId,$title_status,$new_title,$reviewId,$newsId,$title,$link,$content,$summary,$agency,$topic,$reason,$goals,$edited_content;
    protected $listeners =[
        '$_news_details'=>'saveData'
    ];

    public function saveData($id){
        $news = News::with(['editNews'])->find($id);
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
        return view('livewire.manage-news.monitoring-news.news-details-component');
    }
}
