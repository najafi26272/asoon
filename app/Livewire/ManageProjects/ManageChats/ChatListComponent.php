<?php

namespace App\Livewire\ManageProjects\ManageChats;

use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\CommentFolder;
use App\Models\CommentMessage;

class ChatListComponent extends Component
{
    public $project,$users,$messages,$firstUser,$chat,$selectedUser = '';
    public $text = '';
    public $search = '';
    protected $rules = [  
        'text' => 'required|string',  
    ];  

    public function mount(){
        $id = Route::current()->parameter('id');
        $this->project = Project::with('members','user')->find($id);
        $this->users = $this->project->members->where('id', '!=', Auth::user()->id);
        
        // Count unread messages for each user
        $this->users->map(function ($user) use ($id) {
        // Fetch the chat folder for the user
        $chat = CommentFolder::with('messages')
            ->where('category', 'project')
            ->where('category_id', $id)
            ->where('user_id', $user->id)
            ->first();

        // Initialize unread count
            $user->unreadCount = $chat ? $chat->messages->filter(function ($message) {
                return $message->status === 'waiting' && $message->role === 'member';
            })->count() : 0; // Count unread messages or set to 0 if no chat
        });

    }
    
    public function changeChat($id)
    {
        // Fetch the chat folder for the given user ID
        $this->selectedUser = User::find($id);
        $this->chat = CommentFolder::with('messages')
            ->where('category', 'project')
            ->where('category_id', $this->project->id) // Assuming you want the chat for the current project
            ->where('user_id', $id) // Get chat for the user whose ID was clicked
            ->first();
        if($this->chat){
            CommentMessage::where('folder_id', $this->chat->id)
            ->whereRole('member')
            ->update(['status' => 'seen']);
        }
    }
    
    public function sendManagerMessage()
    {     
        // Validate the message
        // $this->validate([
        //     'text' => 'required|string', // Ensure it's a string
        // ]);
    
        // Fetch or create the comment folder
        $folder = CommentFolder::where('category', 'project')
            ->where('category_id', $this->project->id)
            ->where('user_id',$this->selectedUser->id)
            ->first();
    
        if (!$folder) {
            $folder = CommentFolder::create([
                'category' => 'project',
                'user_id' => $this->selectedUser->id,
                'category_id' => $this->project->id
            ]);
        }
        
        // Create the comment message
        CommentMessage::create([
            'message' => $this->text,
            'user_id' => Auth::user()->id,
            'folder_id' => $folder->id,
            'status' => "waiting",
            'role' => "manager",
        ]);
    
        // Update the status of member messages
        CommentMessage::where('folder_id', $folder->id)
            ->whereRole('member')
            ->update(['status' => 'answered']);
    
        // Fetch the updated chat
        $this->chat = CommentFolder::with('messages')
            ->where('category', 'project')
            ->where('category_id', $this->project->id)
            ->where('user_id', $this->selectedUser->id)
            ->first();
            
            
    
        // Clear the message input
        $this->text = "";
    }

    public function sendMemberMessage()
    {
        // Validate the message
        // $this->validate([
        //     'message' => 'required|string', // Ensure it's a string as well
        // ]);
    
        // Fetch or create the comment folder
        $folder = CommentFolder::where('category', 'project')
            ->where('category_id', $this->project->id)
            ->where('user_id',Auth::user()->id)
            ->first();
    
        if (!$folder) {
            $folder = CommentFolder::create([
                'category' => 'project',
                'user_id' => Auth::user()->id,
                'category_id' => $this->project->id
            ]);
        }
    
        // Create the comment message
        CommentMessage::create([
            'message' => $this->text,
            'user_id' => Auth::user()->id,
            'folder_id' => $folder->id,
            'status' => "waiting",
            'role' => "member",
        ]);
    
        // Update the status of member messages
        CommentMessage::where('folder_id', $folder->id)
            ->whereRole('manager')
            ->update(['status' => 'answered']);
    
        // Fetch the updated chat
        $this->chat = CommentFolder::with('messages')
            ->where('category', 'project')
            ->where('category_id', $this->project->id)
            ->where('user_id', Auth::user()->id)
            ->first();
    
        // Clear the message input
        $this->text = "";
    }

    public function render()
    {
        // Prepare the search term for project tasks
        $searchTerm = '%'.$this->search.'%';
    
        if(!Auth::user()->accesses->project_access){
            $this->chat = CommentFolder::with('messages')
                ->where('category', 'project')
                ->where('category_id', $this->project->id)
                ->where('user_id', Auth::user()->id)
                ->first();
        }
        
        // Load the project with its members
        $this->project = Project::with('members', 'user')->find($this->project->id);
    
        // Get the members of the project
        $this->users = $this->project->members->where('id', '!=', Auth::user()->id);
    
    
        // Filter the members based on the search term
        $this->users = $this->users->filter(function ($member) {
            // Concatenate name and family
            $fullName = $member->name . ' ' . $member->family;
            
            // Check if the concatenated full name or username contains the search term
            return stripos($fullName, $this->search) !== false || 
                   stripos($member->username, $this->search) !== false;
        });
        
        // Count unread messages for each user
        $id = $this->project->id;
        $this->users->map(function ($user) use ($id) {
        // Fetch the chat folder for the user
        $chat = CommentFolder::with('messages')
            ->where('category', 'project')
            ->where('category_id', $this->project->id)
            ->where('user_id', $user->id)
            ->first();

        // Initialize unread count
            $user->unreadCount = $chat ? $chat->messages->filter(function ($message) {
                return $message->status === 'waiting' && $message->role === 'member';
            })->count() : 0; // Count unread messages or set to 0 if no chat
        });
        
        return view('livewire.manage-projects.manage-chats.chat-list-component', [
            'project' => $this->project,
            'users' => $this->users
        ]);
    }
}
