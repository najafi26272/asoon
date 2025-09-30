<?php

namespace App\Livewire\ManageUser;

use App\Models\UserAccess;
use Livewire\Component;

class UserAccessComponent extends Component
{

    protected $listeners = [
        '$_user_access_changeable' => 'saveData'
    ];

    public $userAccess;
    public $taskAccess;
    public $projectAccess;
    public $meetingsAccess;
    public $reportAccess;

    public $userId;

    public function saveData($id)
    {
        $access = UserAccess::where('user_id', $id)->first();
        $this->userAccess = $access->user_access == 1;
        $this->taskAccess = $access->task_access == 1;
        $this->meetingsAccess = $access->meetings_access == 1;
        $this->projectAccess = $access->project_access == 1;
        $this->reportAccess = $access->report_access == 1;
        $this->userId = $id;
    }


    public function update()
    {
        $access = UserAccess::where('user_id', $this->userId)->first();
        $access->user_access = $this->userAccess;
        $access->task_access = $this->taskAccess;
        $access->meetings_access = $this->meetingsAccess;
        $access->project_access = $this->projectAccess;
        $access->report_access = $this->reportAccess;
        $access->save();
        $this->dispatch('user_access_changed');
        $this->dispatch('$_success_full_message');

    }

    public function render()
    {
        return view('livewire.manage-user.user-access-component');
    }
}
