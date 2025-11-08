<?php

namespace App\Livewire\ManageNews\MonitoringNews;

use Livewire\Component;
use App\Models\{EditNews};
use Illuminate\Support\Facades\{Auth,Validator,DB};

class ReviewHistoryComponent extends Component
{
    protected $listeners = [
        '$_review_history'=>'loadData'
    ];

    public $newsId;
    public $values = [];

    public function loadData($id)
    {
        $this->newsId = $id;
        $this->values = EditNews::where('status', 'reject')
            ->where('news_id', $id)
            ->latest('created_at')
            ->get();
    }

    public function render()
    {
        return view('livewire.manage-news.monitoring-news.review-history-component', [
            'values' => $this->values
        ]);
    }
}
