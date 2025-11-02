<?php

namespace App\Livewire\ManageNews\MonitoringNews;

use Livewire\Component;
use App\Models\{News,NewsStep,User,AssignEditor,EditNews};
use Illuminate\Support\Facades\{Auth,Validator,DB};

class AddEditorComponent extends Component
{
    protected $listeners = [
        '$_editor_add'=>'saveData'
    ];

    public $newsId;
    public $selectedEditor;

    public function saveData($id){
        $this->newsId = $id;
    }

    public function addEditor()
    {
        DB::transaction(function () {
            $news = News::findOrFail($this->newsId);
            
            $newsStep = $news->step()->create([
                'news_id' => $this->newsId,
                'step_id' => 8,
                'creator_id' => Auth::id()
            ]);

            $news->update([
                'status' => $newsStep->id,
            ]);

            $this->createEditor();
        });

        $this->dispatch('editor-added');
        $this->dispatch('$_news_refresh');
        $this->dispatch('$_success_full_message');
    }

    private function createEditor()
    {
        DB::transaction(function () {
            AssignEditor::updateOrCreate(
                ['news_id' => $this->newsId],
                [
                    'assigner_id' => auth()->id(),
                    'editor_id' => $this->selectedEditor,
                ]
            );
            EditNews::updateOrCreate(
                ['news_id' => $this->newsId],
                [
                    'status' => 'waiting',
                    'editor_id' => $this->selectedEditor,
                ]
            );
        });
    }

    public function render()
    {
        return view('livewire.manage-news.monitoring-news.add-editor-component', [
            'users' => User::get(),
        ]);
    }
}
