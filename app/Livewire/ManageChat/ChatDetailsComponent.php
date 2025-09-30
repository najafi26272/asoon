<?php

namespace App\Livewire\ManageChat;

use App\Models\Chat;
use App\Models\Message;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Morilog\Jalali\Jalalian;

class ChatDetailsComponent extends Component
{
    public $chat,$chatId,$message;

    public function mount()
    {
        $id = Route::current()->parameter('id');
        $this->chatId = $id;
        
        $this->chat = Chat::with('user', 'messages')
            ->whereHas('messages') // Filter out items with zero messages
            ->where('id',$id)->first();
            
        Message::where('chat_id',$this->chat->id)->whereRole('user')->update(['status'=>'seen']);
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
            'role'=>"support",
        ]);
        
        Message::where('chat_id', $this->chat->id)->whereRole('user')->update(['status'=>'answered']);
        
        $this->chat = Chat::with('user', 'messages')
            ->where('id',$this->chat->id)
            ->has('messages')
            ->first();
            
        $this->message ="";
    }
    
    public function render()
    {
        return view('livewire.manage-chat.chat-details-component');
    }
}
