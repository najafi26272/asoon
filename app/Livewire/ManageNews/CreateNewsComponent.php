<?php

namespace App\Livewire\ManageNews;

use Livewire\Component;
use App\Models\News;
use Illuminate\Support\Facades\Auth;

class CreateNewsComponent extends Component
{
    public $title,$link,$content,$summary,$agency,$topic,$reason,$goals;

    public function submit(){
        $this->validate([
            'title' => ['required'],
            'link' => ['required']
        ]);
        $data = News::create([
            'creator_id' => Auth::user()->id,
            'title' => trim($this->title),
            'link' => $this->link,
            'goals' => $this->goals,
            'topic' => $this->topic,
            'summary' => $this->summary,
            'status' => 'waiting'
        ]);
        $this->reset();
        $this->dispatch('$_news_refresh');
        $this->dispatch('news_created');
        $this->dispatch('$_success_full_message');
    }

    public function render()
    {
        return view('livewire.manage-news.create-news-component');
    }
}
