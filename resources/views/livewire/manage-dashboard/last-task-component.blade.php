<!--begin::Row-->
<div class="row gy-5 g-xl-10">
    <!--begin::Col-->
    <div class="col-12">
        <!--begin::لیست Widget 5-->
        <div class="card card-xl-stretch mb-xl-10">
            <!--begin::Header-->
            <div class="card-header align-items-center border-0 mt-4">
                <h3 class="card-title align-items-start flex-column">
                    <span class="fw-bold mb-2 text-dark">آخرین وظایف</span>
                    <span class="text-muted fw-semibold fs-7">شما  {{$waitingTaskCount}}  فعالیت انجام نشده برای امروز دارید.</span>
                </h3>
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-category fs-6">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </button>

                    <!--end::Menu-->
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-5">


                @if(count($items) == 0)
                    <div class="py-10 text-center">
                        <img src="{{asset("assets/media/svg/illustrations/easy/1.svg")}}" class=" w-200px" alt="">
                        {{--                <img src="{{asset("assets/media/svg/illustrations/easy/1-dark.svg")}}" class="theme-dark-show w-200px" alt="">--}}
                        <p class="m-5">در حال حاضر وظیفه ای برای شما ثبت نشده است.</p>
                    </div>
                @else

                <!--begin::timeline-->
                <div class="timeline-label">


                    @foreach($items as $item)
                        <!--begin::item-->
                        <div class="timeline-item">
                            <!--begin::Tags-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">
                                {{verta($item->end_date)->format('H:i Y/m/d')}}
                            </div>
                            <!--end::Tags-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                                <i class="fa fa-genderless @if($item->status == "waiting") text-warning @elseif($item->status == "progressing") text-primary @else text-success @endif fs-1"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Text-->
                            <div class="fw-mیاmal timeline-content text-muted ps-3">{{$item->task}}</div>
                            <!--end::Text-->
                        </div>
                        <!--end::item-->
                    @endforeach

                </div>
                <!--end::timeline-->

                @endif
            </div>
            <!--end: کارت Body-->
        </div>
        <!--end: لیست Widget 5-->
    </div>
    <!--end::Col-->
</div>
<!--end::Row-->
