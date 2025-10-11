<?php

namespace App\Livewire\ManageNews;

use Livewire\Component;
use App\Models\News;
use Illuminate\Support\Facades\Auth;

class EditNewsComponent extends Component
{
    protected $listeners =[
        '$_news_editable'=>'saveData'
    ];

    public $newsId,$title,$link,$content,$summary,$agency,$topic,$reason,$goals;

    public function saveData($id){
        $this->newsId = $id;
        $news = News::find($id);
        $this->title = $news->title;
        $this->link = $news->link;
        $this->summary = $news->summary;
        $this->topic = $news->topic;
        $this->goals = $news->goals;
    }
    public function submit(){
        $this->validate([
            'title' => ['required'],
            'link' => ['required']
        ]);
      
        $news = News::find($this->newsId);
        $news->title = trim($this->title);
        $news->link = $this->link;
        $news->goals = $this->goals;
        $news->topic = $this->topic;
        $news->summary = $this->summary;
        $news->save();

        $this->dispatch('$_news_refresh');
        $this->dispatch('news_created');
        $this->dispatch('$_success_full_message');
    }
    public function render()
    {
        return view('livewire.manage-news.edit-news-component');
    }
}
