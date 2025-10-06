<?php

namespace App\Livewire\ManageNews;

use Livewire\Component;
use App\Models\News;

class NewsListComponent extends Component
{
    public $title,$link,$content,$summary,$agency,$topic,$reason,$goals;
     
    protected $listeners = [
        '$_news_refresh'=>'refresh'
    ];
    
    public function refresh(){
        $items = News::orderBy('title', 'asc')->get();
    }
    
    public function submit(){
        $this->validate([
            'title' => ['required'],
            'link' => ['required']
        ]);
        $data = News::create([
            'title'=>trim($this->title),
            'link'=>$this->link
        ]);
        $this->title = "";
    }
    
    public function delete($id){
        $this->dispatch('$_news_deletable',$id);
        $this->dispatch('show-delete-news-modal');
    }
    
    public function update($id){
        $this->dispatch('$_news_editable',$id);
    }
    
    public function render()
    {
        $items = News::orderBy('title', 'asc')->get();
        return view('livewire.manage-news.news-list-component',['items'=>$items]);
    }

}
