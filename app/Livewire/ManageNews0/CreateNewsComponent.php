<?php

namespace App\Livewire\ManageNews;

use App\Models\Author;
use App\Models\News;
use App\Models\NewsAuthor;
use App\Models\NewsCreatorInfo;
use App\Models\NewsPart;
use App\Models\NewsPublisherInfo;
use App\Models\NewsService;
use App\Models\NewsSource;
use App\Models\NewsStatus;
use App\Models\NewsSubject;
use App\Models\NewsViewsCount;
use App\Models\Part;
use App\Models\Service;
use App\Models\Source;
use App\Models\Status;
use App\Models\Subject;
use App\Models\Tag;
use Hekmatinasser\Verta\Verta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Morilog\Jalali\Jalalian;
use Intervention\Image\Facades\Image;

class CreateNewsComponent extends Component
{
    use WithFileUploads;

    protected $listeners = [
        'storeNews' => 'store'
    ];

    protected $rules = [
        'data.title' => 'required|max:150',
        'data.content' => 'required|max:30000000',
        'data.selectedService' => 'required',
        'data.selectedPart' => 'required',
        'data.selectedSubject' => 'required',
        'data.selectedAuthor' => 'required',
        'data.lead'=>'max:300'
    ];

    public $data = [
        'services' => [],
        'sources' => [],
        'authors' => [],
        'image' => "",
        'thumbnail' => "",
        'mediumThumbnail' => "",
        'largeThumbnail' => "",
        'title' => "",
        'content' => "",
        'topTitle' => "",
        'shortTitle' => "",
        'description' => "",
        'lead' => "",
        'leadImage' => "",
        'selectedService' => "",
        'selectedPart' => "",
        'selectedSubject' => "",
        'selectedSource' => "",
        'selectedAuthor' => "",
        'publishedDate' => "",
        'selectedTags' => "",
        'selectedStatus' => 3,
        'teletypeStatus' => false,
        'commentFormDisplayStatus' => true,
        'commentDisplayStatus' => true,
        'editableStatus' => true,
        'statuses' => []
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

    public $parts;
    public $subjects;
    public $publishAccess = false;
    public $serviceAccess = [];

    public function mount()
    {
        $this->data['services'] = Service::all();
        $this->data['statuses'] = NewsStatus::latest()->get();
        $this->subjects = Subject::whereServiceId($this->data['selectedService'])->latest()->get();
        $this->parts = Part::whereServiceId($this->data['selectedService'])->latest()->get();
        $this->data['sources'] = Source::latest()->get();
        $this->data['authors'] = Author::latest()->get();
        $accesses = [];

        for ($i = 0; $i < count(Auth::user()->accesses); $i++) {
            array_push($accesses, Auth::user()->accesses[$i]['access_id']);
        }
        $this->publishAccess = in_array(2, $accesses);
        for ($i = 0; $i < count(Auth::user()->serviceAccess); $i++) {
            array_push($this->serviceAccess, Auth::user()->serviceAccess[$i]['service_id']);
        }

    }

    public function store($content)
    {

        if ($content != "<p><br></p>") {
            $this->data['content'] = $content;
        }
        if ($this->data['image']) {
            $this->rules['data.image'] = "image|max:2000";
        }
        if ($this->data['leadImage']) {
            $this->rules['data.leadImage'] = "image|max:2000";
        }

        if ($this->data['description']) {
            $this->rules['data.description'] = "max:250";
        }
        if ($this->data['topTitle']) {
            $this->rules['data.topTitle'] = "max:150";
        }
        if ($this->data['shortTitle']) {
            $this->rules['data.shortTitle'] = "max:65";
        }

        $this->validate($this->rules);


        DB::transaction(function () {

            $year = date("Y");
            $month = date("m");

            if ($this->data['image'] != '') {
                $smallthumbnail = time() . '_small_' . $this->data['image']->getClientOriginalName();
                //medium thumbnail name
                $mediumthumbnail = time() . '_medium_' . $this->data['image']->getClientOriginalName();
                //large thumbnail name
                $largethumbnail = time() . '_large_' . $this->data['image']->getClientOriginalName();

                $imageName = time() . '_' . $this->data['image']->getClientOriginalName();
                $this->data['image']->storeAs('public/images/news/'.$year."/".$month, $imageName);

                $path ="public/images/news/thumbnail/".$year."/".$month;
                $this->createThumbnail($smallthumbnail,$this->data['image'], $path, 200,70);

                $this->createThumbnail($mediumthumbnail,$this->data['image'], $path,  500,80);

                $this->createThumbnail($largethumbnail,$this->data['image'], $path,  700,90);

                $this->data['image'] = $year."/".$month."/".$imageName;
                $this->data['thumbnail'] = $year."/".$month."/".$smallthumbnail;
                $this->data['mediumThumbnail'] = $year."/".$month."/".$mediumthumbnail;
                $this->data['largeThumbnail'] = $year."/".$month."/".$largethumbnail;

            }

            if ($this->data['leadImage'] != '') {
                $imageName = time() . '_' . $this->data['leadImage']->getClientOriginalName();
                $this->createThumbnail($imageName,$this->data['leadImage'], 'public/images/news/lead/'.$year."/".$month,  300,70);
                $this->data['leadImage'] =  $year."/".$month."/".$imageName;
            }


            $selectedTagIds = [];
            if ($this->data['selectedTags']) {
                for ($i = 0; $i < count($this->data['selectedTags']); $i++) {
                    $tags = Tag::whereTitle($this->data['selectedTags'][$i])->first();
                    if ($tags) {
                        array_push($selectedTagIds, $tags->id);
                    } else {
                        $tag = new Tag();
                        $tag->title = $this->data['selectedTags'][$i];
                        $s = str_replace([" ","/","+","%","&"], "-", $this->data['selectedTags'][$i]);
                        $tag->slug =$s;
                        $tag->save();
                        array_push($selectedTagIds, $tag->id);
                    }
                }
            }
            $s = str_replace([" ","/","+","%","&"], "-", trim($this->data['title']));
            $date2 = null;
            if ($this->data['publishedDate']) {
                $date2 = Jalalian::fromFormat('Y-n-j H:i', $this->data['publishedDate'])->toCarbon();
                $date2 = $date2->toDateTimeString();
            }

            $news = News::create(
                [
                    'title' => $this->data['title'],
                    'content' => $this->data['content'],
                    'description' => $this->data['description'],
                    'image' => $this->data['image'],
                    'lead_image' =>$this->data['leadImage'],
                    'thumbnail' => $this->data['thumbnail'],
                    'medium_thumbnail' => $this->data['mediumThumbnail'],
                    'large_thumbnail' => $this->data['largeThumbnail'],
                    'lead' => $this->data['lead'],
                    'top_title' => $this->data['topTitle'],
                    'published_date'=> $date2,
                    'short_title' => $this->data['shortTitle'],
                    'slug' => str_replace("/", "", $s),
                    'teletype_status' => $this->data['teletypeStatus'],
                    'comment_form_display_status' => $this->data['commentFormDisplayStatus'],
                    'comment_display_status' => $this->data['commentDisplayStatus'],
                    'editable_status' => $this->data['editableStatus'],
                    'sender_id' => Auth::user()->id,
                    'creator_id' => Auth::user()->id,
                    'status_id' =>  $this->data['selectedStatus'],
                    'service_id' =>  $this->data['selectedService'],
                    'part_id' =>  $this->data['selectedPart'],
                    'subject_id' =>  $this->data['selectedSubject'],
                    'source_id' =>  $this->data['selectedSource'] ? $this->data['selectedSource'] : null,
                    'author_id' =>  $this->data['selectedAuthor'],
                    'publisher_id' => $this->data['selectedStatus'] == "2" ? Auth::user()->id : null,
                ]
            );

            $news->news_code = $news->id + 11011;

            $news->save();

            $news_views_count = NewsViewsCount::create([
                'count' => 0,
                'news_id' => $news->id
            ]);

            $tagg = Tag::find($selectedTagIds);
            $news->tags()->attach($tagg);

            $this->dispatchBrowserEvent('$_success_full_message');
            $this->redirect('/admin/news/list');
        });


    }

    public function updated()
    {
        $this->subjects = Subject::whereServiceId($this->data['selectedService'])->latest()->get();
        $this->parts = Part::whereServiceId($this->data['selectedService'])->latest()->get();
        $this->resetValidation();
    }

    public function submit()
    {
//
//        $image = $this->data['image'];
//        $imageName = $image->getClientOriginalName();
//        $img = Image::make($image->getRealPath())->encode('jpg', 65)->fit(760, null, function ($c) {
//            $c->aspectRatio();
//            $c->upsize();
//        });
//        $img->stream(); // <-- Key point
//        Storage::disk('local')->put('public/images/images' . '/' . $imageName, $img, 'public');


        if (!Auth::check()) {
            $this->redirect('/login');
        }else{
            $this->emit('getContent');
        }

    }

    public function render()
    {
        return view('livewire.manage-news.create-news-component');
    }
}
