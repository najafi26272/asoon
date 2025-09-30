<div class="col-md mb-4 mb-md-0">
    <div class="card">
        <h5 class="card-header">اعلان ها</h5>
        <div class="card-body">

            @foreach($items as $item)
                <div class="alert {{$item->color}}" role="alert">
                    <h6 class="alert-heading mb-1">{{$item->title}}  <span style="font-size: 12px; margin-right: 20px">  {{verta($item->created_at)->format('H:i Y/m/d')}}</span>  </h6>
                    <span>{{$item->message}}</span>
                </div>
            @endforeach
        </div>
    </div>
</div>
