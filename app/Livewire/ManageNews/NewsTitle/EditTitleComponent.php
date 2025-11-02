<?php

namespace App\Livewire\ManageNews\NewsTitle;

use Livewire\Component;
use App\Models\{News,NewsStep,Title};
use Illuminate\Support\Facades\{Auth,Validator,DB};

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
        $this->validate(['newTitle' => 'required']);

        DB::transaction(function () {
            $news = News::with(['latestWebTitle', 'latestSocialTitle'])
                    ->findOrFail($this->newsId);
           
            // بررسی وضعیت گردش کار
            $totalStatus = true;
            
            if ($news->latestWebTitle?->status === 'progressing' || 
                $news->latestWebTitle?->status === 'waiting') {
                $totalStatus = false;
            }

            if ($news->latestSocialTitle?->status === 'progressing' || 
                $news->latestSocialTitle?->status === 'waiting') {
                $totalStatus = false;
            }

            $title = Title::findOrFail($this->titleId);
            // ایجاد Step جدید در صورت نیاز
            if($totalStatus) {
                $title = Title::create([
                    'news_id' => $this->newsId,
                    'title' => $this->newTitle,
                    'channel' => $title->channel,
                    'creator_id' => Auth::id(),
                    'status' => 'progressing'
                ]);

                $step = NewsStep::create([
                    'news_id' => $this->newsId,
                    'step_id' => 5,
                    'creator_id' => Auth::id()
                ]);
                
                $news->update(['status' => $step->id]);
            }else{
                if(in_array($title->status, ['progressing', 'waiting'])) {
                    $title->update([
                        'title' => $this->newTitle,
                        'status' => 'progressing'
                    ]);
                }
            }
        });

        // ارسال ایونت‌ها
        $this->dispatch('$_title_refresh');
        $this->dispatch('title_edited');
        $this->dispatch('$_success_full_message');
    }

    public function render()
    {
        return view('livewire.manage-news.news-title.edit-title-component');
    }
}