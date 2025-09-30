<div class="col-xl-9 col-md-8 col-12 mb-md-0 mb-4">
    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
{{--                            <span class="secondary-font fw-medium">تعداد حاضرین</span>--}}
                            <div class="d-flex align-items-baseline mt-2">
                                <h4 class="mb-0 me-2">{{count($jalase->hazerin)}}</h4>
{{--                                <small class="text-success">(+29%)</small>--}}
                            </div>
                            <small>تعداد حاضرین</small>
                        </div>
                        <span class="badge bg-label-success rounded p-2">
                          <i class="bx bx-group bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
{{--                            <span class="secondary-font fw-medium">کاربران ویژه</span>--}}
                            <div class="d-flex align-items-baseline mt-2">
                                <h4 class="mb-0 me-2">{{count($jalase->ghayebin)}}</h4>
{{--                                <small class="text-success">(+18%)</small>--}}
                            </div>
                            <small>تعداد غایبین </small>
                        </div>
                        <span class="badge bg-label-danger rounded p-2">
                          <i class="bx bx-user-minus bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
{{--                            <span class="secondary-font fw-medium">کاربران فعال</span>--}}
                            <div class="d-flex align-items-baseline mt-2">
                                <h4 class="mb-0 me-2">{{count($jalase->mosavabat)}}</h4>
{{--                                <small class="text-danger">(-14%)</small>--}}
                            </div>
                            <small>تعداد مصوبات جلسه</small>
                        </div>
                        <span class="badge bg-label-primary rounded p-2">
                          <i class="bx bx-task bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card invoice-preview-card">

        <div class="card-body">

            <div class="d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column p-sm-3 p-0">
                <div class="mb-xl-0 mb-4">
                    <div class="d-flex align-items-center svg-illustration gap-2">
                        <span>عنوان جلسه : </span>
                        <span class="app-brand-text h3 mb-0 fw-bold">{{$jalase->title}}</span>
                    </div>
                    <p class="mb-1">
                        <span>تاریخ جلسه : </span>
                        {{verta($jalase->date)->format('H:i Y/m/d')}}
                    </p>
                    <p class="mb-1">
                        <span>مربوط به : </span>
                        @php($i = 0)
                        @foreach($jalase->categories as $cat)
                            @php($i++)
                            {{$cat->title}}
                            @if($i != count($jalase->categories))
                                ،
                            @endif

                        @endforeach
                    </p>

                    <p class="mb-1">
                        <span>توضیحات : </span>
                        {{$jalase->description}}
                    </p>


                    <p class="mb-1">
                        <span>مدعوین : </span>
                        {{$jalase->invited}}
                    </p>
                    <p class="mb-1">
                        <span>حاضرین : </span>
                        @php($i = 0)
                        @foreach($jalase->hazerin as $haz)
                            @php($i++)
                            {{$haz->name}} {{$haz->family}}
                            @if($i != count($jalase->hazerin))
                                ،
                            @endif

                        @endforeach
                    </p>

                    <p class="mb-1">
                        <span>غایبین : </span>
                        @php($i = 0)
                        @foreach($jalase->ghayebin as $gha)
                            @php($i++)
                            {{$gha->name}} {{$gha->family}}
                            @if($i != count($jalase->ghayebin))
                                ،
                            @endif

                        @endforeach
                    </p>
                </div>
{{--                <div>--}}
{{--                    <div class="mb-2 lh-1-85">--}}
{{--                        <span class="me-1">تاریخ جلسه:</span>--}}
{{--                        <span class="fw-semibold">--}}
{{--                            {{verta($jalase->date)->format('H:i Y/m/d')}}--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
        <hr class="my-0">

        <livewire:manage-mosavabe.mosavabe-list-component/>

        <div class="card-body">
            <div class="row">
                <div class="col-12 lh-1-85">
                    <span class="fw-semibold">نکته:</span>
                    <span>کاربران میتوانند مصوبات را به صورت وظایف شخصی، در پنل کاربری خود مشاهده کنند.</span>
                </div>
            </div>
        </div>
    </div>
</div>
