<?php

namespace App\Livewire\ManageNews;

use Livewire\Component;
use App\Models\{News,NewsStep,User,Title};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class AddInfoComponent extends Component
{
    protected $listeners = [
        '$_info_add'=>'saveData'
    ];

    public $newsId;
    public $selectedLanguages = [];
    public $selectedWebAuthor = 45;
    public $selectedSocialMediaAuthor = 35;
    public $priority = 'medium';
    public $need_cover = false;

    public function saveData($id){
        $this->newsId = $id;
    }

    public function addInfo()
    {
        DB::transaction(function () {
            $news = News::findOrFail($this->newsId);
            
            $newsStep = $news->step()->create([
                'news_id' => $this->newsId,
                'step_id' => 4,
                'creator_id' => Auth::id()
            ]);

            $news->update([
                'status_id' => $newsStep->id,
                'priority' => $this->priority,
                'channels' => $this->getChannels(),
                'languages' => $this->selectedLanguages,
                'need_cover' => $this->need_cover
            ]);

            $this->createTitles();
        });

        $this->dispatch('info-added');
        $this->dispatch('$_news_refresh');
        $this->dispatch('$_success_full_message');
    }

    private function getChannels()
    {
        return collect(['web', 'socialMedia'])
            ->filter(fn($channel) => $this->{"selected".ucfirst($channel)."Author"})
            ->toArray();
    }

    private function createTitles()
    {
        collect([
            'web' => $this->selectedWebAuthor,
            'socialMedia' => $this->selectedSocialMediaAuthor
        ])->each(function ($authorId, $channel) {
            if ($authorId) {
                Title::create([
                    'creator_id' => $authorId,
                    'news_id' => $this->newsId,
                    'reviewer_id' => Auth::id(),
                    'channel' => $channel,
                    'status' => 'waiting'
                ]);
            }
        });
    }

    public function render()
    {
        return view('livewire.manage-news.add-info-component', [
            'siteTitrs' => User::whereIn('id', [45])->get(),
            'socialMediaTitrs' => User::whereIn('id', [35])->get()
        ]);
    }
}
