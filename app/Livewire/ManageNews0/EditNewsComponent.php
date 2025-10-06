<?php

namespace App\Livewire\ManageNews;

use App\Models\Author;
use App\Models\News;
use App\Models\NewsAuthor;
use App\Models\NewsEditorInfo;
use App\Models\NewsPart;
use App\Models\NewsPublisherInfo;
use App\Models\NewsService;
use App\Models\NewsSource;
use App\Models\NewsStatus;
use App\Models\NewsSubject;
use App\Models\NewsTag;
use App\Models\Part;
use App\Models\Service;
use App\Models\Source;
use App\Models\Status;
use App\Models\Subject;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use Morilog\Jalali\Jalalian;

class EditNewsComponent extends Component
{

    use WithFileUploads;

    protected $listeners = [
        'storeNews'=>'store'
    ];

    protected $rules =[
        'data.title'=>'required|max:150',
        'data.content'=>'required|max:30000000',
        'data.selectedService'=>'required',
        'data.selectedPart'=>'required',
        'data.selectedSubject'=>'required',
        'data.selectedAuthor'=>'required',
        'data.lead'=>'max:300'


    ];

    public $data = [
        'services'=> [],
        'sources'=>[],
        'authors'=>[],
        'newImage'=>"",
        'image'=>"",
        'thumbnail' => "",
        'mediumThumbnail' => "",
        'largeThumbnail' => "",
        'title'=>"",
        'content'=>"",
        'topTitle'=>"",
        'shortTitle'=>"",
        'description'=>"",
        'lead'=>"",
        'newLeadImage'=>"",
        'leadImage'=>"",
        'selectedService'=>"",
        'selectedPart'=>"",
        'selectedSubject'=>"",
        'selectedSource'=>"",
        'selectedAuthor'=>"",
        'publishedDate'=>"",
        'selectedTags'=>[],
        'selectedStatus'=> "",
        'teletypeStatus'=> false,
        'commentFormDisplayStatus'=>true,
        'commentDisplayStatus'=>true,
        'editableStatus'=> true,
        'statuses'=>[]
    ];

    public function createThumbnail($name,$image,$path, $width, $quality)
    {
        $img = Image::make($image->getRealPath())->encode('jpg', $quality)->resize($width, null, function ($c) {
            $c->aspectRatio();
            $c->upsize();
        });
        $img->stream(); // <-- Key point
        Storage::disk('local')->put($path . '/' . $name, $img, 'public');
    }


    public $editStatusAccess = false;
    public $publishAccess = false;
    public $parts;
    public $subjects;
    public $newsId;

    public function mount(){
        $this->dispatchBrowserEvent('set_news_content');
        $id = Route::current()->parameter('id');
        $this->newsId = $id;
        $news = News::find($id);
        $this->data['title'] = $news->title;
        $this->data['topTitle'] = $news->top_title;
        $this->data['content'] = $news->content;
        $this->data['description'] = $news->description;
        $this->data['shortTitle'] = $news->short_title;
        $this->data['lead'] = $news->lead;
        $this->data['selectedAuthor'] = $news->author_id;
        $this->data['selectedSource'] = $news->source_id ;
        $this->data['selectedStatus'] = $news->status_id ;

        $this->data['publishedDate'] = $news->published_date != null ? verta($news->published_date)->format('Y-n-j H:i') : null;

        $tags = NewsTag::whereNewsId($this->newsId)->get();
        $tagsId = [];

        for ($i = 0; $i < count($tags);$i++){
            array_push($tagsId,$tags[$i]['tag_id']);
        }
        $t = Tag::find($tagsId);
        for ($i = 0; $i < count($t);$i++){
            array_push($this->data['selectedTags'],$t[$i]['title']);
        }
        $this->data['selectedService'] = $news->service_id ;

        $this->data['selectedSubject'] = $news->subject_id ;

        $this->data['selectedPart'] = $news->part_id ;

        $this->data['teletypeStatus'] = $news->teletype_status ;
        $this->data['commentFormDisplayStatus'] = $news->comment_form_display_status ;
        $this->data['commentDisplayStatus'] = $news->comment_display_status ;
        $this->data['editableStatus'] = $news->editable_status ;
        $this->data['image'] = $news->image ;
        $this->data['thumbnail'] = $news->thumbnail ;
        $this->data['largeThumbnail'] = $news->large_thumbnail ;
        $this->data['mediumThumbnail'] = $news->medium_thumbnail ;
        $this->data['leadImage'] = $news->lead_image ;

        $this->data['services']= Service::latest()->get();
        $this->data['statuses']= NewsStatus::latest()->get();
        $this->subjects= Subject::whereServiceId($this->data['selectedService'])->latest()->get();
        $this->parts = Part::whereServiceId($this->data['selectedService'])->latest()->get();
        $this->data['sources'] = Source::latest()->get();
        $this->data['authors'] = Author::latest()->get();
        $accesses = [];
        for ($i = 0 ;  $i < count(Auth::user()->accesses) ; $i++){
            array_push($accesses ,Auth::user()->accesses[$i]['access_id']);
        }
        $this->editStatusAccess = in_array(9,$accesses);
        $this->publishAccess = in_array(2,$accesses);

    }

    public function updated(){
        $this->subjects= Subject::whereServiceId($this->data['selectedService'])->latest()->get();
        $this->parts = Part::whereServiceId($this->data['selectedService'])->latest()->get();
        $this->resetValidation();
    }


    public function submit(){
        if(!Auth::check()){
            $this->redirect('/login');
        }
        $this->emit('getContent');
    }

    public function store($content){

        if($content != "<p><br></p>"){
            $this->data['content'] = $content;
        }
        if($this->data['newImage']){
            $this->rules['data.newImage'] = "image|max:2000";
        }
        if($this->data['newLeadImage']){
            $this->rules['data.newLeadImage'] = "image|max:2000";
        }

        if($this->data['description']){
            $this->rules['data.description'] = "max:250";
        }
        if($this->data['topTitle']){
            $this->rules['data.topTitle'] = "max:150";
        }
        if($this->data['shortTitle']){
            $this->rules['data.shortTitle'] = "max:65";
        }

        $this->validate($this->rules);


        DB::transaction(function (){
            $year = date("Y");
            $month = date("m");
            if($this->data['newImage'] != ''){
                Storage::disk('public')->delete("images/news/thumbnail/".$this->data['thumbnail']);
                Storage::disk('public')->delete("images/news/thumbnail/".$this->data['largeThumbnail']);
                Storage::disk('public')->delete("images/news/thumbnail/".$this->data['mediumThumbnail']);
                Storage::disk('public')->delete("images/news/".$this->data['image']);

                $smallthumbnail = time() . '_small_' . $this->data['newImage']->getClientOriginalName();
                $mediumthumbnail = time() . '_medium_' . $this->data['newImage']->getClientOriginalName();
                $largethumbnail = time() . '_large_' . $this->data['newImage']->getClientOriginalName();

                $imageName = time().'_'.$this->data['newImage']->getClientOriginalName();
                $this->data['newImage']->storeAs('public/images/news/'.$year."/".$month,$imageName);
                $path ="public/images/news/thumbnail/".$year."/".$month;
                $this->createThumbnail($smallthumbnail,$this->data['newImage'], $path, 200,70);

                $this->createThumbnail($mediumthumbnail,$this->data['newImage'], $path,  500,80);

                $this->createThumbnail($largethumbnail,$this->data['newImage'], $path,  700,90);
                $this->data['newImage'] = $year."/".$month."/".$imageName;
                $this->data['thumbnail'] = $year."/".$month."/".$smallthumbnail;
                $this->data['mediumThumbnail'] = $year."/".$month."/".$mediumthumbnail;
                $this->data['largeThumbnail'] = $year."/".$month."/".$largethumbnail;
            }

            if($this->data['newLeadImage'] != ''){
                $imageName = time() . '_' . $this->data['newLeadImage']->getClientOriginalName();
                $this->createThumbnail($imageName,$this->data['newLeadImage'], 'public/images/news/lead/'.$year."/".$month,  300,70);
                $this->data['newLeadImage'] = $year."/".$month."/".$imageName;
            }
            $date = $this->data['publishedDate'];
            if($this->data['publishedDate']){
                $date = Jalalian::fromFormat('Y-n-j H:i', $this->data['publishedDate'])->toCarbon();
                $date = $date->toDateTimeString();
            }

            $selectedTagIds = [];
            if($this->data['selectedTags']){
                NewsTag::whereNewsId($this->newsId)->delete();
                for ($i = 0; $i < count($this->data['selectedTags']); $i++) {
                    $tags = Tag::whereTitle($this->data['selectedTags'][$i])->first();
                    if($tags){
                        array_push($selectedTagIds, $tags->id);
                    }else{
                        $tag = new Tag();
                        $tag->title =$this->data['selectedTags'][$i];
                        $s = str_replace(" ","-",$this->data['selectedTags'][$i]);
                        $tag->slug = str_replace("/","",$s);
                        $tag->save();
                        array_push($selectedTagIds, $tag->id);
                    }
                }
            }

            $news = News::where('id',$this->newsId)->update(
                [
                    'title'=>$this->data['title'],
                    'content'=>$this->data['content'],
                    'description'=>$this->data['description'],
                    'image'=> $this->data['newImage'] == "" ? $this->data['image']  : $this->data['newImage'],
                    'lead_image'=>$this->data['newLeadImage'] == "" ? $this->data['leadImage'] : $this->data['newLeadImage'] ,
                    'lead'=>$this->data['lead'],
                    'thumbnail' => $this->data['thumbnail'],
                    'medium_thumbnail' => $this->data['mediumThumbnail'],
                    'large_thumbnail' => $this->data['largeThumbnail'],
                    'top_title'=>$this->data['topTitle'],
                    'published_date'=> $date,
                    'short_title'=> $this->data['shortTitle'],
                    'teletype_status'=>$this->data['teletypeStatus'],
                    'comment_form_display_status'=>$this->data['commentFormDisplayStatus'],
                    'comment_display_status'=>$this->data['commentDisplayStatus'],
                    'editable_status'=>$this->data['editableStatus'],
                    'editor_id' => Auth::user()->id,
                    'status_id' =>  $this->data['selectedStatus'],
                    'service_id' =>  $this->data['selectedService'],
                    'part_id' =>  $this->data['selectedPart'],
                    'subject_id' =>  $this->data['selectedSubject'],
                    'source_id' =>  $this->data['selectedSource'] ? $this->data['selectedSource'] : null,
                    'author_id' =>  $this->data['selectedAuthor'],
                    'publisher_id' => $this->data['selectedStatus'] == "2" ? Auth::user()->id : null,
                ]
            );

            $tagg = Tag::find($selectedTagIds);

            $n = News::find($this->newsId);
            $n->tags()->attach($tagg);

            $this->dispatchBrowserEvent('$_success_full_message');
        });


    }


    public function render()
    {
        return view('livewire.manage-news.edit-news-component');
    }
}
