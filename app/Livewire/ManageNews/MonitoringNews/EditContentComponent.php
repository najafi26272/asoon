<?php

namespace App\Livewire\ManageNews\MonitoringNews;

use Livewire\Component;
use App\Models\{News,NewsStep,EditNews,Rate};
use Illuminate\Support\Facades\{Auth,Validator,DB};

class EditContentComponent extends Component
{
    protected $listeners =[
        '$_content_editable'=>'saveData'
    ];

    public $contentId, $newsId,$edited_content,$description,$status,$review_rating;

    public function saveData($id){
        $this->newsId = $id;
        $data = EditNews::where('news_id', $id)->latest()->first();
        $this->contentId = $data->id;
        $this->edited_content = $data->edited_content;
        $this->description = $data->description;
        $this->status = $data->status;
    }

    public function editContent()
    {
        DB::transaction(function () {
            $news = News::findOrFail($this->newsId);

            if($this->status){
                $this->status = 'accept';
                $step_id = 11;
            }else{
                $this->status = 'reject';
                $step_id = 10;
            }

            $newsStep = $news->step()->create([
                'news_id' => $this->newsId,
                'step_id' => $step_id,
                'creator_id' => Auth::id()
            ]);

            $news->update([
                'status' => $newsStep->id,
            ]);

            $this->createOrUpdateContent();
        });

        $this->dispatch('content-edited');
        $this->dispatch('$_news_refresh');
        $this->dispatch('$_success_full_message');
    }

    private function createOrUpdateContent()
    {
        DB::transaction(function () {
            $data = EditNews::where('news_id', $this->newsId)->latest()->first();
            $data->update([
                'status'        => $this->status,
                'edited_content'=> $this->edited_content,
                'description'   => $this->description,
            ]);
            $rate = $this->review_rating ?? null;
            if($rate){
                Rate::Create([
                    'review_id' => $data->id,
                    'news_id' => $this->newsId,
                    'creator_id' => Auth::id(),
                    'user_id' => $data->editor_id,
                    'rate' => $rate,
                    'type' => 'edit',
                ]);
            }

        });
    }


    public function render()
    {
        return view('livewire.manage-news.monitoring-news.edit-content-component');
    }
}
