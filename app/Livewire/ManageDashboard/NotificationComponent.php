<?php

namespace App\Livewire\ManageDashboard;

use App\Models\Notification;
use Livewire\Component;

class NotificationComponent extends Component
{
    public function render()
    {
        $items = Notification::whereStatus('active')->latest()->get();
        return view('livewire.manage-dashboard.notification-component',['items'=>$items]);
    }
}
