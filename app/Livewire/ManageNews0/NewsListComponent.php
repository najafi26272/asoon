<?php

namespace App\Livewire\ManageNews;

use App\Models\News;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;


class NewsListComponent extends Component
{
    use WithPagination;
    protected $listeners = [
        '$_news_refresh'=>'refresh'
    ];

    public $paginate_num=20;
    public $char = "";

    public function refresh(){
        $serviceAccess = [];
        for ($i = 0 ;  $i < count(Auth::user()->serviceAccess) ; $i++){
            array_push($serviceAccess ,Auth::user()->serviceAccess[$i]['service_id']);
        }
        $searchTerm = '%'.$this->char.'%';
        $items = News::join('news_status', 'news_status.id', '=','news.status_id')->join('users','users.id','=','news.creator_id')->join('services','services.id','=','news.service_id')->select('news.title','news.id','news.news_code','users.username','services.title as service_title','news.created_at','news_status.title as status_title','news.editable_status')->where('news.title','LIKE',$searchTerm)->whereIn('news.service_id',$serviceAccess)->orderBy('news.id','desc')->paginate($this->paginate_num);
    }

    public $deleteAccess = false;
    public function mount(Request $request){
        $this->char = $request->get('char');
        $accesses = [];
        for ($i = 0 ;  $i < count(Auth::user()->accesses) ; $i++){
            array_push($accesses ,Auth::user()->accesses[$i]['access_id']);
        }
        $this->deleteAccess = in_array(3 , $accesses);

        $serviceAccess = [];
        for ($i = 0 ;  $i < count(Auth::user()->serviceAccess) ; $i++){
            array_push($serviceAccess ,Auth::user()->serviceAccess[$i]['service_id']);
        }
        $searchTerm = '%'.$this->char.'%';
        $items = News::join('news_status', 'news_status.id', '=','news.status_id')->join('users','users.id','=','news.creator_id')->join('services','services.id','=','news.service_id')->select('news.title','news.id','news.news_code','users.username','services.title as service_title','news.created_at','news_status.title as status_title','news.editable_status')->where('news.title','LIKE',$searchTerm)->whereIn('news.service_id',$serviceAccess)->orderBy('news.id','desc')->paginate($this->paginate_num);

    }

    public function delete($id){
        $this->dispatchBrowserEvent('show-delete-news-modal');
        $this->emit('$_news_deletable',$id);
    }

    public function changeStatus($id){
        $news = News::find($id);
        if($news->status == "active"){
            $news->status = 'passive';
        }else{
            $news->status = 'active';
        }
        $news->save();
        $this->refresh();
    }

    public function render()
    {
        $searchTerm = '%'.$this->char.'%';
        $serviceAccess = [];
        for ($i = 0 ;  $i < count(Auth::user()->serviceAccess) ; $i++){
            array_push($serviceAccess ,Auth::user()->serviceAccess[$i]['service_id']);
        }
        $items = News::join('news_status', 'news_status.id', '=','news.status_id')->join('users','users.id','=','news.creator_id')->join('services','services.id','=','news.service_id')->select('news.title','news.id','news.news_code','users.username','services.title as service_title','news.created_at','news_status.title as status_title','news.editable_status')->where('news.title','LIKE',$searchTerm)->whereIn('news.service_id',$serviceAccess)->orderBy('news.id','desc')->paginate($this->paginate_num);
        return view('livewire.manage-news.news-list-component',['items'=>$items]);
    }
}
