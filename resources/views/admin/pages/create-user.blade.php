@extends('admin.layout.main')

@push('css')
<!-- Vendors CSS -->
<link rel="stylesheet" href="{{asset("assets/css/persian-datepicker.min.css")}}"/>
<link rel="stylesheet" href="{{asset("assets/admin/assets/vendor/libs/bootstrap-select/bootstrap-select.css")}}">




<style>
    .img-icon{
        width:6rem;
    }
</style>
<!-- Page CSS -->
@endpush

@section('content')
<div class="row g-6 g-xl-9">
    <div class="col-xl-9">
        {{-- start information--}}
        <div class="row">
            <div class="col-lg-6 col-xxl-6">
                <!--begin::کارت-->
                <div class="card h-100">
                    <!--begin::کارت body-->
                    <div class="card-body p-9 d-flex justify-content-between">
                        <div class="flex-column">
                            <div class="fs-2hx fw-bold">12</div>
                            <div class="fs-4 fw-semibold text-gray-400 mb-7"> تعداد کاربران </div>
                        </div>
                        <div class="">
                            <img src="{{asset("assets/media/icons/present.png")}}" class="img-icon">
                        </div>
                    </div>
                    <!--end::کارت body-->
                </div>
                <!--end::کارت-->
            </div>
            <div class="col-lg-6 col-xxl-6">
                <!--begin::کارت-->
                <div class="card h-100">
                    <!--begin::کارت body-->
                    <div class="card-body p-9 d-flex justify-content-between">
                        <div class="flex-column">
                            <div class="fs-2hx fw-bold">2</div>
                            <div class="fs-4 fw-semibold text-gray-400 mb-7"> تعداد کاربران فعال </div>
                        </div>
                        <div class="">
                            <img src="{{asset("assets/media/icons/absent.png")}}" class="img-icon">
                        </div>
                    </div>
                    <!--end::کارت body-->
                </div>
                <!--end::کارت-->
            </div>

        </div>
        {{--end information--}}


        <div class="row">

            <div class="col-12">

                <!--begin::جدول کاربران Widget 9-->
                <div class="card mb-5 mb-xl-8 mt-5">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">کاربران </span>
                        </h3>
                            <!--begin::افزودن subscription-->
                            <button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#kt_modal_new_user">
                                <i class="ki-duotone ki-plus fs-2"></i>
                                افزودن کاربر</button>
                            <!--end::افزودن subscription-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                <tr class="fw-bold text-muted">
                                    <th class="w-25px">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-9-check" />
                                        </div>
                                    </th>
                                    <th class="min-w-200px">نام</th>
                                    <th class="min-w-150px">شماره تماس</th>
                                    <th class="min-w-150px">وضعیت</th>
                                    <th class="min-w-100px text-end">عملیات</th>
                                </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input widget-9-check" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-45px me-5">
                                                <img src="../../../../../..//assets/media/avatars/300-14.jpg" alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-dark fw-bold text-hover-primary fs-6">محمد رضایی</a>
                                                <span class="text-muted fw-semibold text-muted d-block fs-7">rezae</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>

                                        <span class="text-dark fw-bold text-hover-primary d-block fs-6">09192345678</span>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">فعال</div>
                                        <div class="badge badge-light-warning">  </div>
                                        <div class="badge badge-light-danger">غیر فعال</div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-end flex-shrink-0">
                                            <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <i class="ki-duotone ki-switch fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <i class="ki-duotone ki-pencil fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <i class="ki-duotone ki-trash fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--begin::Body-->
                </div>
                <!--end::جدول کاربران Widget 9-->
            </div>
        </div>

    </div>

    {{--        start sidebar--}}
    <div class="col-xl-3">
        <div class="row g-6 g-xl-9">
            <!-- Invoice Actions -->

            <div class="col-12">
                <div class="card ">
                        <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">آمار پیشرفت کارها</h5>
                            </div>
                        <div class="card-body text-center" style="position: relative;">
                                <div id="statisticsRadialChart" class="mb-2" style="min-height: 167.222px;"><div id="apexchartsq06o84oi" class="apexcharts-canvas apexchartsq06o84oi apexcharts-theme-light" style=" height: 167.222px;"><svg id="SvgjsSvg2061" width="240"  height="167.22222222222223" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2063" class="apexcharts-inner apexcharts-graphical" transform="translate(46, -7)"><defs id="SvgjsDefs2062"><clipPath id="gridRectMaskq06o84oi"><rect id="SvgjsRect2065"  height="191" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskq06o84oi"></clipPath><clipPath id="nonForecastMaskq06o84oi"></clipPath><clipPath id="gridRectMarkerMaskq06o84oi"><rect id="SvgjsRect2066" height="193" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG2067" class="apexcharts-radialbar"><g id="SvgjsG2068"><g id="SvgjsG2069" class="apexcharts-tracks"><g id="SvgjsG2070" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 43.90935945252451 155.38745442039328 A 79.4829268292683 79.4829268292683 0 1 1 146.09064054747546 155.3874544203933" fill="none" fill-opacity="1" stroke="rgba(233,236,238,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="5.141463414634147" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 43.90935945252451 155.38745442039328 A 79.4829268292683 79.4829268292683 0 1 1 146.09064054747546 155.3874544203933"></path></g></g><g id="SvgjsG2072"><image id="SvgjsImage2073" xlink:href="../../assets/img/icons/unicons/rocket.png" width="0" height="0"></image><g id="SvgjsG2078" class="apexcharts-series apexcharts-radial-series" seriesName="بازدیدxکل" rel="1" data:realIndex="0"><path id="SvgjsPath2079" d="M 43.90935945252451 0 A 0 0 0 1 1 0 0" fill="none" fill-opacity="0.85" stroke="rgba(253,172,65,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="5.141463414634147" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="218" data:value="0" index="0" j="0" data:pathOrig="M 43.90935945252451 155.38745442039328 A 79.4829268292683 79.4829268292683 0 1 1 172.74603417734943 77.97457029178258"></path></g><circle id="SvgjsCircle2074" r="71.91219512195121" cx="95" cy="94.5" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG2075" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText2076" font-family="inherit" x="95" y="134.5" text-anchor="middle" dominant-baseline="auto" font-size="0.938rem" font-weight="500" fill="#69809a" class="apexcharts-text apexcharts-datalabel-label" style="font-family: inherit;">کارهای انجام شده </text><text id="SvgjsText2077" font-family="inherit" x="95" y="105.5" text-anchor="middle" dominant-baseline="auto" font-size="2rem" font-weight="500" fill="#516377" class="apexcharts-text apexcharts-datalabel-value" style="font-family: inherit;">0%</text></g></g></g></g><line id="SvgjsLine2080" x1="0" y1="0" x2="190" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2081" x1="0" y1="0" x2="190" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG2064" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                                    <h5 class="mb-1">عالی</h5>
                                                    <span class="lh-1-85">نزدیک به رسیدن به 1000K دنبال کننده!</span>
                                <div class="resize-triggers"><div class="expand-trigger"><div style=" height: 263px;"></div></div><div class="contract-trigger"></div></div></div>
                </div>
            </div>
            <!-- /Invoice Actions -->
        </div>
    </div>
    {{--        end sidebar--}}
</div>



<!--begin::Modal - افزودن کاربر-->
<div class="modal fade" id="kt_modal_new_user" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form class="form" action="#" id="kt_modal_new_user_form">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_new_user_header">
                    <!--begin::Modal title-->
                    <h2>کاربر جدید  </h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body py-10 px-lg-17">
                    <!--begin::Scroll-->
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_new_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header" data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Tags-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required"> نام</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="نام حقیقی">
										<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
                            </label>
                            <!--end::Tags-->
                            <input type="text" class="form-control form-control-solid" placeholder="نام" name="first_name" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Tags-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required"> نام خانوادگی</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="نام خانوادگی حقیقی">
										<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
                            </label>
                            <!--end::Tags-->
                            <input type="text" class="form-control form-control-solid" placeholder="نام خانوادگی" name="lasr_name" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Tags-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required"> نام کاربری</span>
                            </label>
                            <!--end::Tags-->
                            <input type="text" class="form-control form-control-solid" placeholder="نام کاربری" name="user_name" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Tags-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required"> کد ملی</span>
                            </label>
                            <!--end::Tags-->
                            <input type="number" class="form-control form-control-solid" placeholder="کد ملی" name="national_code" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Tags-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required"> شماره تماس </span>
                            </label>
                            <!--end::Tags-->
                            <input type="number" class="form-control form-control-solid text-right" placeholder="شماره تماس" name="phone_number" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Tags-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span > ایمیل</span>
                            </label>
                            <!--end::Tags-->
                            <input type="email" class="form-control form-control-solid" placeholder="ایمیل " name="email" />
                        </div>
                        <!--end::Input group-->

                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">نوع  </label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="نوع کاربر" name="type_user">
                                <option value=""> موردی انتخاب نشده است...</option>
                                <option value="1">رسمی</option>
                                <option value="2"> قراردادی</option>
                            </select>
                        </div>

                    </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Modal body-->
                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    <!--begin::Button-->
                    <button type="reset" id="kt_modal_new_user_cancel" class="btn btn-light me-3">لغو</button>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" id="kt_modal_new_user_submit" class="btn btn-primary">
                        <span class="indicator-label">ثبت</span>
                        <span class="indicator-progress">لطفا صبر کنید...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>
<!--end::Modal -افزودن کاربر   -->




@endsection

@push('scripts')
<script src="{{asset("assets/js/custom/utilities/modals/create-user.js")}}"></script>
<script src="{{asset("assets/js/custom/utilities/modals/create-app.js")}}"></script>

{{--    date picker--}}
<script src="{{asset("assets/js/persian-date.min.js")}}"></script>
<script src="{{asset("assets/js/persian-datepicker.min.js")}}"></script>

{{--جدید اضافه شده--}}
<script src="{{asset("assets/admin/assets/vendor/libs/bootstrap-select/bootstrap-select.js")}}"></script>

@endpush
