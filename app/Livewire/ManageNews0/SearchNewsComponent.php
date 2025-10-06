<?php

namespace App\Livewire\ManageNews;

use App\Models\News;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SearchNewsComponent extends Component
{

    public $char = "";
    public $paginate_num=8;

    public function submit(){
        $this->validate([
            'char'=>'required'
        ]);
        $serviceAccess = [];
        for ($i = 0 ;  $i < count(Auth::user()->serviceAccess) ; $i++){
            array_push($serviceAccess ,Auth::user()->serviceAccess[$i]['service_id']);
        }
        $searchTerm = '%'.$this->char.'%';
        $items = News::Join('news_creator_info','news_creator_info.news_id','=','news.id')->join('news_service', 'news_service.news_id', '=','news.id')->join('news_status', 'news_status.news_id', '=','news.id')->join('users','users.id','=','news_creator_info.user_id')->join('statuses','statuses.id','=','news_status.status_id')->join('services','services.id','=','news_service.service_id')->select('news.title','news.id','news.news_code','users.username','services.title as service_title','news.created_at','statuses.title as status_title','news.editable_status')->where('news.title','LIKE',$searchTerm)->whereIn('news_service.service_id',$serviceAccess)->orderBy('news.id')->paginate($this->paginate_num);
        return view('admin.pages.news.news-list',['items'=>$items]);


    }

    public function render()
    {
        return view('livewire.manage-news.search-news-component');
    }
}
