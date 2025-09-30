@extends('admin.layout.main')

@push('css')
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset("assets/css/persian-datepicker.min.css")}}"/>
    <link rel="stylesheet" href="{{asset("assets/admin/assets/vendor/libs/bootstrap-select/bootstrap-select.css")}}">
    <style>
        .img-icon {
            width: 6rem;
        }
    </style>
    <!-- Page CSS -->
@endpush

@section('content')

    <div class="row">
        <div class="col-6">
            <div class="col-12">
                <div class="card p-5 px-lg-10 py-lg-10">
                    <!--begin::Content main-->
                    <div class="">
                        <!--begin::Heading-->
                        <div class="mb-2">
                            <!--begin::Title-->
                            <h5 class="text-dark mb-6">{{$jalase->title}}</h5>
                            <!--end::Title-->
                            <div class="separator separator-dashed"></div>

                        </div>
                        <!--end::Heading-->
                        <!--begin::Body-->

                        {{--  begin::info--}}
                        <div>
                            <table class="table table-row-gray-300 align-middle gs-0 gy-4">
                                <tr class="">
                                    <td class="text-dark fw-bold text-hover-primary d-block fs-6">تاریخ جلسه:</td>
                                    <td>{{verta($jalase->date)->format('H:i Y/m/d')}}</td>
                                </tr>
                                <tr>
                                    <td class="text-dark fw-bold text-hover-primary d-block fs-6">مربوط به:</td>
                                    <td>
                                        @php($i = 0)
                                        @foreach($jalase->categories as $cat)
                                            @php($i++)
                                            {{$cat->title}}
                                            @if(count($jalase->categories) > $i)، @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr >
                                    <td  class="text-dark fw-bold text-hover-primary d-block fs-6">توضیحات:</td>
                                    <td>{{$jalase->description}}</td>
                                </tr>
                                <tr>
                                    <td  class="text-dark fw-bold text-hover-primary d-block fs-6">حاضرین:</td>
                                    <td>
                                        @php($i = 0)
                                        @foreach($jalase->hazerin as $haz)
                                            @php($i++)
                                            {{$haz->name}} {{$haz->family}}
                                            @if(count($jalase->hazerin) > $i)، @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td  class="text-dark fw-bold text-hover-primary d-block fs-6">غائبین:</td>
                                    <td>@php($i = 0)
                                        @foreach($jalase->ghayebin as $gha)
                                            @php($i++)
                                            {{$gha->name}} {{$gha->family}}
                                            @if(count($jalase->hazerin) > $i)، @endif
                                        @endforeach</td>
                                </tr>
                                <tr>
                                    <td  class="text-dark fw-bold text-hover-primary d-block fs-6">مدعوین:</td>
                                    <td>
                                        {{$jalase->invited}}
                                    </td>
                                </tr>
                            </table>
                        </div>
                        {{-- end:: info--}}

                        <!--end::Body-->
                    </div>
                    <!--end::Content main-->

                </div>
            </div>
        </div>
        <div class="col-6">

            <!--begin::کارت widget 17-->
            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <div class="card-title d-flex flex-column" style="width: 100%">
                        <!--begin::Heading-->
                        <div style="width: 100%">
                            <!--begin::Title-->
                            <h5 class=" text-dark mb-6">آمار پیشرفت کارها</h5>
                            <!--end::Title-->
                            <div class="separator separator-dashed"></div>

                        </div>
                        <!--end::Heading-->
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Header-->
                <!--begin::کارت body-->
                <div class="card-body pt-1 d-flex flex-wrap align-items-center">
                    <!--begin::Chart-->
                    <div class="d-flex flex-center me-5 pt-2">
                        <div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70"
                             data-kt-line="11"><span></span>
                        </div>
                    </div>
                    <!--end::Chart-->
                    <!--begin::برچسبs-->
                    <div class="d-flex flex-column content-justify-center flex-row-fluid">
                        <!--begin::Tags-->
                        <div class="d-flex fw-semibold align-items-center">
                            <!--begin::Bullet-->
                            <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                            <!--end::Bullet-->
                            <!--begin::Tags-->
                            <div class="text-success flex-grow-1 me-4">مصوبات انجام شده</div>
                            <!--end::Tags-->
                            <!--begin::Stats-->
                            <div class="fw-bolder text-success text-xxl-end">{{count($jalase->mosavabat->where('status','=','finished'))}}</div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Tags-->
                        <!--begin::Tags-->
                        <div class="d-flex fw-semibold align-items-center my-3">
                            <!--begin::Bullet-->
                            <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                            <!--end::Bullet-->
                            <!--begin::Tags-->
                            <div class="text-primary flex-grow-1 me-4">مصوبات در حال انجام</div>
                            <!--end::Tags-->
                            <!--begin::Stats-->
                            <div class="fw-bolder text-primary text-xxl-end">{{count($jalase->mosavabat->where('status','=','progressing'))}}</div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Tags-->
                        <!--begin::Tags-->
                        <div class="d-flex fw-semibold align-items-center">
                            <!--begin::Bullet-->
                            <div class="bullet w-8px h-3px rounded-2 me-3 bg-warning"></div>
                            <!--end::Bullet-->
                            <!--begin::Tags-->
                            <div class="text-warning flex-grow-1 me-4">مصوبات انجام نشده</div>
                            <!--end::Tags-->
                            <!--begin::Stats-->
                            <div class="fw-bolder text-warning text-xxl-end">{{count($jalase->mosavabat->where('status','=','waiting'))}}</div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Tags-->
                    </div>
                    <!--end::برچسبs-->
                </div>
                <!--end::کارت body-->
            </div>
            <!--end::کارت widget 17-->
        </div>
    </div>

@endsection

@push('scripts')
    <script src="{{asset("assets/js/custom/utilities/modals/create-mosavabe.js")}}"></script>
    <script src="{{asset("assets/js/custom/utilities/modals/create-app.js")}}"></script>

    {{--    date picker--}}
    <script src="{{asset("assets/js/persian-date.min.js")}}"></script>
    <script src="{{asset("assets/js/persian-datepicker.min.js")}}"></script>

    {{--جدید اضافه شده--}}
    <script src="{{asset("assets/admin/assets/vendor/libs/bootstrap-select/bootstrap-select.js")}}"></script>

@endpush
