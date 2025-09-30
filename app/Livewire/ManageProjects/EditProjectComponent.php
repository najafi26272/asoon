<?php

namespace App\Livewire\ManageProjects;

use App\Models\Category;
use App\Models\Project;
use App\Models\ProjectUser;
use App\Models\JalaseCategory;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Morilog\Jalali\Jalalian;

class EditProjectComponent extends Component
{
    public $title;
    public $guests;
    public $description;
    public $startDate,$deadline;
    public $selectedProjectCategory;
    public $selectedManager;
    public $selectedMembers = [];

    public $projectCategories = [];
    public $users = [];

    public $project;
    public $projectId;

    public function saveData($id)
    {

    }

    public function mount()
    {
        $id = Route::current()->parameter('id');
        $this->projectId = $id;
        $project = Project::find($id);
        $this->title = $project->title;
        $this->description = $project->description;
        $this->selectedManager = $project->user_id;
        $this->startDate = $project->start_date != null ? verta($project->start_date)->format('Y-n-j') : null;
        $this->deadline = $project->deadline != null ? verta($project->deadline)->format('Y-n-j') : null;
        $members = ProjectUser::where('project_id', $id)->get();
        for ($i = 0; count($members) > $i; $i++) {
            array_push($this->selectedMembers, $members[$i]['user_id']);
        }
        $this->selectedProjectCategory = $project->category_id;
        
        $this->projectCategories = Category::all();
        $this->users = User::all();
    }


    public function submit()
    {
        $this->validate([
            'title'=>['required','max:200'],
            'selectedManager'=>['required'],
            'selectedMembers'=>['required'],
            'startDate'=>['required'],
            'selectedProjectCategory'=>['required'],
        ]);

        DB::transaction(function () {
            $date2 = null;
            if ($this->startDate) {
                $date2 = Jalalian::fromFormat('Y-n-j', $this->startDate)->toCarbon();
                $date2 = $date2->toDateTimeString();
            }
            $date3 = null;
            if ($this->deadline) {
                $date3 = Jalalian::fromFormat('Y-n-j', $this->deadline)->toCarbon();
                $date3 = $date3->toDateTimeString();
            }
            
            $project = Project::find($this->projectId)->update([
                'title'=>trim($this->title),
                'description'=>$this->description,
                'creator_id'=>Auth::user()->id,
                'user_id'=>$this->selectedManager,
                'start_date'=>$date2,
                'deadline'=>$date3,
                'category_id'=>$this->selectedProjectCategory
            ]);

            $project = Project::find($this->projectId);

            $this->selectedMembers = array_diff($this->selectedMembers, [$this->selectedManager]);
            $members = User::find($this->selectedMembers);
            $project->members()->sync($members);

            $this->dispatch('$_project_refresh');
            $this->dispatch('$_success_full_message');
            $this->dispatch('project_updated');

        });
    }


    public function render()
    {
        $o = [];
        
        return view('livewire.manage-projects.edit-project-component', compact("o"));
    }
}
