<?php
namespace App\Livewire\ManageNews\MonitoringNews;

use Livewire\Component;
use App\Models\{News, NewsStep, EditNews, Rate};
use Illuminate\Support\Facades\{Auth, DB};

class EditContentComponent extends Component
{
    protected $listeners = [
        '$_content_editable' => 'saveData'
    ];

    public $status = false; // Default status
    public $editRate, $rowStatus, $contentId, $newsId, $edited_content, $description, $review_rating;

    public function saveData($id)
    {
        $this->newsId = $id;
        $data = EditNews::where('news_id', $id)->latest()->first();
        if ($data) {
            $this->contentId = $data->id;
            $this->edited_content = $data->edited_content;
            $this->description = $data->description;
            $this->status = ($data->status == 'accept');
            $this->rowStatus = ($data->status == 'accept') ? 'accept' : 'reject';
            $this->editRate = $data->editRate->rate ?? null;

            // Emit an event to open the modal after data is set
            $this->dispatch('open-edit-modal');
        }
    }

    public function submit()
    {
        DB::transaction(function () {
            $news = News::findOrFail($this->newsId);
            $step_id = $this->status ? 11 : 10;

            $newsStep = $news->step()->create([
                'news_id' => $this->newsId,
                'step_id' => $step_id,
                'creator_id' => Auth::id()
            ]);

            $news->update(['status' => $newsStep->id]);
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
            $status = $this->status ? 'accept' : 'reject';
            $data->update([
                'status' => $status,
                'edited_content' => $this->edited_content,
                'description' => $this->description,
            ]);
            $rate = $this->review_rating ?? null;
            if ($rate) {
                Rate::create([
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