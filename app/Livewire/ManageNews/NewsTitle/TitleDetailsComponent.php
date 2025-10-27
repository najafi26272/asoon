<?php

namespace App\Livewire\ManageNews\NewsTitle;

use Livewire\Component;
use App\Models\{News,NewsStep,Title};

class TitleDetailsComponent extends Component
{
    public $titleId,$newsId,$title,$link,$content,$summary,$agency,$topic,$reason,$goals,$new_title;
    protected $listeners =[
        '$_title_details'=>'saveData'
    ];

    public function saveData($id){
        $news = News::with('titr')->find($id);
        $this->newsId         = $news->id;
        $this->title          = $news->title;
        $this->link           = $news->link;
        $this->summary        = $news->summary;
        $this->topic          = $news->topic;
        $this->goals          = $news->goals;
        $this->titleId = $news->titr->id ?? null;
        $this->title_status = $news->titr->status ?? null;
        $this->new_title = $news->titr->title ?? null;
    }

    public function render()
    {
        return view('livewire.manage-news.news-title.title-details-component');
    }
}
