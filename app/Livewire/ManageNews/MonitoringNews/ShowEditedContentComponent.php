<?php

namespace App\Livewire\ManageNews\MonitoringNews;

use Livewire\Component;

class ShowEditedContentComponent extends Component
{
    protected $listeners =[
        '$_content_editable'=>'saveData'
    ];

    public function render()
    {
        return view('livewire.manage-news.monitoring-news.show-edited-content-component');
    }
}
