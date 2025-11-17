<?php

namespace App\Livewire\ManageNews\MonitoringNews;

use Livewire\Component;
use App\Models\{Title};
use Illuminate\Support\Facades\{Auth,Validator,DB};

class TitleHistoryComponent extends Component
{
    protected $listeners = [
        '$_title_history'=>'loadData'
    ];

    public $newsId;
    public $values = [];

    public function loadData($payload)
    {
        $this->values = Title::where('status', 'reject')
        ->where('news_id', $payload['id'])
        ->where('channel', $payload['activeTab']) 
        ->latest('created_at')
        ->get();
    }

    public function render()
    {
        return view('livewire.manage-news.monitoring-news.title-history-component', [
            'values' => $this->values
        ]);
    }
}
