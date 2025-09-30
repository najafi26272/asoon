<?php

namespace App\Livewire\ManageChat;

use App\Models\Chat;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ChatListComponent extends Component
{
    public $department;
    public $chat;
    public $message;

    public function mount(){
        $this->department = 'technical';
        $this->chat = Chat::with('messages')->whereDepartment($this->department)->whereUserId(Auth::user()->id)->first();
        if(!$this->chat){
            $this->chat = Chat::create([
                'department'=> "technical",
                'user_id'=> Auth::user()->id,
            ]);
        }
        
        $this->chat->messages->where('role','support')->each(function ($message) {
            $message->update(['status' => 'seen']);
        });
        
        $mng_chat = Chat::whereDepartment("management_part")->whereUserId(Auth::user()->id)->first();
        if (!$mng_chat){
            Chat::create([
                'department'=> "management_part",
                'user_id'=> Auth::user()->id,
            ]);
        }
    }

    public function changeDepartment($department){
        $this->department = $department;
        $this->chat = Chat::with('messages')->whereDepartment($this->department)->whereUserId(Auth::user()->id)->first();
        $this->chat->messages->where('role','support')->each(function ($message) {
            $message->update(['status' => 'seen']);
        });
    }

    public function sendMessage(){
        $this->validate([
            'message'=>'required'
        ]);
        Message::create([
            'message'=>$this->message,
            'user_id'=>Auth::user()->id,
            'chat_id'=>$this->chat->id,
            'status'=>"waiting",
            'role'=>"user",
        ]);
        $this->chat = Chat::with('messages')->whereDepartment($this->department)->whereUserId(Auth::user()->id)->first();
        $this->message ="";
    }

    public function render()
    {
        return view('livewire.manage-chat.chat-list-component');
    }
}
