<?php

namespace App\Livewire\ManageNews\NewsTitle;

use Livewire\Component;
use App\Models\{News,NewsStep,Title};
use Illuminate\Support\Facades\Auth;

class EditTitleComponent extends Component
{
    protected $listeners =[
        '$_title_editable'=>'saveData'
    ];

    public $titleId,$newsId,$newTitle;

    public function saveData($id){
        $row = Title::where([
            'news_id' => $id,
            'creator_id' => Auth::id()
        ])->latest('created_at')->firstOrFail();        
        $this->newsId = $id;
        $this->newTitle = $row->title;
        $this->titleId = $row->id;
    }
    public function submit()
    {
        $this->validate([
            'newTitle' => 'required',
        ]);
        $newsStep = NewsStep::create([
            'news_id'    => $this->newsId,
            'step_id'    => 5,
            'creator_id' => Auth::id(),
        ]);
        News::findOrFail($this->newsId)->update(['status' => $newsStep->id]);
        Title::updateOrCreate(
            ['id' => $this->titleId],
            [
                'news_id' => $this->newsId,
                'title' => $this->newTitle,
                'creator_id'      => Auth::id(),
                'status'         => 'progressing',
            ]
        );
        $this->dispatch('$_title_refresh');
        $this->dispatch('title_edited');
        $this->dispatch('$_success_full_message');
    }
    public function render()
    {
        return view('livewire.manage-news.news-title.edit-title-component');
    }
}