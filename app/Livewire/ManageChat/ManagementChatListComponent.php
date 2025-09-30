<?php

namespace App\Livewire\ManageChat;

use App\Models\Chat;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ManagementChatListComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    protected $listeners = [
        '$_project_refresh'=>'refresh'
    ];

    public $pageNumber = 10;
    public $char = "";
    public $search = '';

    public function refresh(){
        $searchTerm = '%'.$this->search.'%';
        $items = [];

        $items = Chat::with('user', 'messages')
        ->whereHas('user', function ($query) use ($searchTerm) {
            $query->where(function($query) use ($searchTerm) {
                $query->whereRaw("CONCAT(name, ' ', family) LIKE ?", ['%'.$searchTerm.'%']);
            });
        })
        ->whereHas('messages') // Filter out items with zero messages
        ->orderBy(function ($query) {
            $query->select('created_at')
                ->from('messages')
                ->where(['status'=>'waiting','role'=>'user'])
                ->whereColumn('chats.id', 'messages.chat_id')
                ->orderBy('created_at', 'desc')
                ->limit(1);
        }, 'desc')
        ->paginate($this->pageNumber);
        
        $items->each(function ($item) {
            $item->hasUnread = $item->messages->contains(function ($message) {
                return $message->status === 'waiting' && $message->role === 'user';
            });
        });

    }

    public function render()
    {
        $searchTerm = '%'.$this->search.'%';
        $items = [];

        $items = Chat::with('user', 'messages')
        ->whereHas('user', function ($query) use ($searchTerm) {
            $query->where(function($query) use ($searchTerm) {
                $query->whereRaw("CONCAT(name, ' ', family) LIKE ?", ['%'.$searchTerm.'%']);
            });
        })
        ->whereHas('messages') // Filter out items with zero messages
         // ->withCount('messages')
         // ->orderBy('messages_count', 'desc')
        ->orderBy(function ($query) {
            $query->select('created_at')
                ->from('messages')
                ->where(['status'=>'waiting','role'=>'user'])
                ->whereColumn('chats.id', 'messages.chat_id')
                ->orderBy('created_at', 'desc')
                ->limit(1);
        }, 'desc')
        ->paginate($this->pageNumber);

        $items->each(function ($item) {
            $item->hasUnread = $item->messages->contains(function ($message) {
                return $message->status === 'waiting' && $message->role === 'user';
            });
        });
        return view('livewire.manage-chat.management-chat-list-component',['items'=>$items]);
    }
}
