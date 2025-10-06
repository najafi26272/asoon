<?php

namespace App\Livewire\ManageNews;
use App\Models\News;
use Livewire\Component;

class DeleteNewsComponent extends Component
{
    protected $listeners = [
        '$_news_deletable'=>'saveData'
    ];
    public $newsId;
    public function saveData($id){
        $this->newsId = $id;
    }
    public function delete(){
        News::find($this->newsId)->delete();
        $this->dispatch('news-deleted');
        $this->dispatch('$_news_refresh');
        $this->dispatch('$_success_full_message');

    }
    public function render()
    {
        return view('livewire.manage-news.delete-news-component');
    }
}
