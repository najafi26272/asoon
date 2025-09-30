<?php

namespace App\Livewire\ManageProjects;

use App\Models\Project;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;
use Morilog\Jalali\Jalalian;

class CreateProjectComponent extends Component
{
    use WithFileUploads;

    public $title;
    public $guests;
    public $description;
    public $selectedStartDate,$selectedDeadline;
    public $invited = "";
    public $selectedProjectCategory;
    public $selectedManagers;
    public $selectedMembers = [];

    public $projectCategories = [];
    public $users = [],$members = [] , $filterUsers=[];
    
    public function mount(){
        $this->projectCategories = Category::all();
        $this->users = User::all();
        $this->selectedDate =verta(date('Y-m-d'))->format('Y-n-j');
    }

    public function submit(){

        $this->validate([
            'title'=>['required','max:200'],
            'selectedManagers'=>['required'],
            'selectedMembers'=>['required'],
            'selectedStartDate'=>['required'],
            'selectedProjectCategory'=>['required'],
        ]);

        DB::transaction(function (){
            $date2 = null;
            if ($this->selectedStartDate) {
                $date2 = Jalalian::fromFormat('Y-n-j', $this->selectedStartDate)->toCarbon();
                $date2 = $date2->toDateTimeString();
            }
            $date3 = null;
            if ($this->selectedDeadline) {
                $date3 = Jalalian::fromFormat('Y-n-j', $this->selectedDeadline)->toCarbon();
                $date3 = $date3->toDateTimeString();
            }
            
            $project = Project::create([
                'title'=>trim($this->title),
                'description'=>$this->description,
                'creator_id'=>Auth::user()->id,
                'user_id'=>$this->selectedManagers,
                'start_date'=>$date2,
                'deadline'=>$date3,
                'category_id'=>$this->selectedProjectCategory
            ]);

            $this->selectedMembers = array_diff($this->selectedMembers, [$this->selectedManagers]);
            $members = User::find($this->selectedMembers);
            $project->members()->attach($members);

            $this->dispatch('$_project_refresh');
            $this->dispatch ('$_success_full_message_project');
            $this->dispatch ('project_created');

        });

    }


    public function render()
    {
        $this->selectedDate =verta(date('Y-m-d'))->format('Y-n-j');
        return view('livewire.manage-projects.create-project-component');
    }
}