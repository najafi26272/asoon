@extends('admin.layout.main')

@push('css')
    {{--    دیت پیکر جدید--}}
    <link rel="stylesheet" href="{{asset("assets/plugins/custom/datepicker/flatpickr.css")}}">
    <link rel="stylesheet" href="{{asset("assets/plugins/custom/datepicker/pickr-themes.css")}}">

@endpush

@section('content')
 
    <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_report">
                    <i class="ki-duotone ki-plus fs-2"></i>بارگذاری خروجی کار </a>
                    
               
<div class="modal fade" id="kt_modal_report" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form wire:submit.prevent="submit" class="form" method="POST" id="kt_modal_new_report_form">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_new_report_header">
                    <!--begin::Modal title-->
                    <h2>بارگذاری خروجی کار</h2>
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
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_new_jalase_scroll" data-kt-scroll="true"
                         data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                         data-kt-scroll-dependencies="#kt_modal_new_address_header"
                         data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
                       
                      <!--begin::Input group-->
                      <div class="row">
                          <div class="col-3">
                               <div class="d-flex flex-column mb-8">
                                    <label class="fs-6 fw-semibold mb-2 required">سال</label>
                                    <input class="form-control form-control-solid text-right" name="year" value="1402" type="number">
                                </div>
                          </div>
                          <div class="col-9">
                              <div class="d-flex flex-column mb-8">
                                    <label class="fs-6 fw-semibold mb-2 required">ماه</label>
                                    <select class="form-control">
                                        <option>فروردین</option>
                                         <option>فروردین</option>
                                          <option>فروردین</option>
                                    </select>
                                </div>
                          </div>
                      </div>
                       
                    <!--end::Input group-->
                    
                     <!--begin::Input group-->
                      <div class="row">
                          <div class="col">
                            
                              <div class="d-flex flex-column mb-8">
                                   <label class="fs-6 fw-semibold mb-2 required">فایل گزارش</label>
                                    <input class="form-control form-control-solid btn btn-sm  me-2" name="file" type="file">
                                   <span class="form-text fs-6 text-muted"> 1MB </span>
                                </div>
                          </div>
                      </div>
                       
                        <!--end::Input group-->
                        
                       
										
                    </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Modal body-->
                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    <!--begin::Button-->
                    <button type="button" data-bs-dismiss="modal" class="btn btn-light me-3">لغو</button>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" class="btn btn-primary">
                        <span class="indicator-label">ثبت</span>
                        <span wire:loading class="indicator-progress">لطفا صبر کنید...
								<span class="spinner-border spinner-border-sm align-middle ms-2">

                                </span>
                        </span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>


@endsection

@push('scripts')
    {{--دیت پیکر جدید--}}

    <script src="{{asset("assets/plugins/custom/datepicker/jdate.js")}}"></script>
    <script src="{{asset("assets/plugins/custom/datepicker/flatpickr-jdate.js")}}"></script>
    <script src="{{asset("assets/plugins/custom/datepicker/fa-jdate.js")}}"></script>
    <script src="{{asset("assets/plugins/custom/datepicker/pickr.js")}}"></script>
    <script src="{{asset("assets/plugins/custom/datepicker/forms-pickers.js")}}"></script>

@endpush
