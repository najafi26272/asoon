


@extends('admin.layout.main')
@push("css")
<link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/47.0.0/ckeditor5.css" />
<style>
    #reasonInput {
        transition: opacity 0.3s ease, max-height 0.3s ease !important;
        opacity: 0 !important;
        max-height: 0 !important;
        overflow: hidden !important;
        /* display: none; */
    }
    #reasonInput.show {
        opacity: 1 !important;
        /* display: block; */
        max-height: 100px !important; /* یا مقداری که مناسب است */
    }
</style>
@endpush
@section('content')
<div class="card mb-5 mb-xl-10">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">رصدها </span>
        </h3>
            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                 data-bs-original-title="Click to add a user" data-kt-initialized="1">
               
                 <!--begin::جستجو-->
            <div id="kt_header_search" class="header-search d-flex align-items-center w-lg-250px me-3" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="lg" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
                
                <!--begin::Fیاm(use d-none d-lg-block classes for responsive search)-->
                <div wire:ignore data-kt-search-element="form" class="searching-div d-block d-lg-block w-100 position-relative mb-2 mb-lg-0" autocomplete="true">
                    <!--end::Hidden input-->
                    <!--begin::Icon-->
                    <i class="ki-duotone ki-magnifier fs-2 text-gray-700 position-absolute top-50 translate-middle-y ms-4">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <!--end::Icon-->
                    <!--begin::Input-->
                    <input type="text" id="searching" class="searching-input form-control bg-transparent ps-13 fs-7 " style="border-radius:0.3rem;padding-top: calc(0.55rem + 1px);padding-top: calc(0.55rem + 1px);" name="search" placeholder="جستجوی عنوان" data-kt-search-element="input" />
                    <!--end::Input-->
                    <!--begin::Spinner-->
                    <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
						<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
					</span>
                    <!--end::Spinner-->
                    <!--begin::ریست-->
                    <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
						<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
							<span class="path1"></span>
							<span class="path2"></span>
						</i>
					</span>
                    <!--end::ریست-->
                </div>
                <!--end::Form-->
            </div>
             
           
          
            </div>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
           
            <hr>
            <div class="px-5">
                <h2>لیست رصد های صانعی </h2>
              <!--begin::Table-->
              <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                <tr class="fw-bold text-muted ">
                    <th class="min-w-200px">
                        عنوان
                    </th>
                    <th class="min-w-100px">
                          نویسنده
                    </th>
                    <th class="min-w-100px">
                        تاریخ ثبت  
                    </th>  
                    <th class="mx">
                          جزئیات
                    </th>                    
                    <th class="text-center" style="width: 200px">
                        وضعیت
                    </th>   
                                          
                </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                    <tr>
                        <td class="">
                        عنوان رصد
                        </td>
                        <td class="">
                          صادقی
                        </td>
                        <td>
                            <p class="text-dark fw-bold text-hover-primary d-block fs-6">
                                9/7/6789
                                {{-- {{$item->created_at? verta($item->created_at)->format('Y/m/d'): ''}} --}}
                            </p>
                        </td>
                        <td>
                            <a href="#"data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_detail_news" 
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 ">
                                <i class="ki-duotone ki-switch fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                        </td>
                    
                        {{-- <td>
                            <a class="cursor-pointer" >
                                    <div class="badge badge-light-warning"> در انتظار</div>
            
                                    <div class="badge badge-light-primary">درحال انجام</div>
            
                                    <div class="badge badge-light-success">انجام شده</div>
                              
                            </a>
                        </td> --}}
                        <td>
                           
                            <div class="d-flex justify-content-around ">
            
                                <div class="form-radio form-radio-custom form-radio-solid ">
                                    <span class="form-check form-check-custom form-check-solid ">
                                        <input class="form-check-input me-1" type="radio" name="decision" value="reject">
                                        <label for="reject">کنسل</label>
                                    </span>                                  
                                </div>

                                <div class="form-radio form-radio-custom form-radio-solid ">
                                    <span class="form-check form-check-custom form-check-solid ">
                                        <input class="form-check-input me-1" type="radio" name="decision" value="approve" checked>
                                        <label for="approve">تایید</label>
                                    </span>                                  
                                </div>
                                
                            </div>
                            <input type="text" class="form-control form-control-sm  min-w-100px mt-1 " id="reasonInput" placeholder="دلیل رد شدن"/>
                        </td>
                       
                    </tr>
              
                </tbody>
                <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
    <style>
        .text-new-green{
            color:#3da5a5 !important;
        }
    </style>
</div>



{{-- modals --}}

<div wire:ignore.self class="modal fade" id="kt_modal_detail_news" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_new_mosavabe_header">
                    <!--begin::Modal title-->
                    <h2> جزئیات</h2>
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
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_new_mosavabe_scroll" data-kt-scroll="true"
                         data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                         data-kt-scroll-dependencies="#kt_modal_new_address_header"
                         data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
                        
                        
                         <table class="table  table-row-dashed ">
                            <thead>
                                <tr>
                                    <th class="min-w-100px">ویژگی</th>
                                    <th> #</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td > اهداف</td>
                                    <td> </td>
                                   
                                </tr>
                                <tr>
                                    <td>موضوع</td>
                                    <td> </td>
                                </tr>

                                <tr>
                                    <td>لینک</td>
                                    <td> </td>
                                </tr>
                               
                            </tbody>
                        </table>

                    </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Modal body-->
               
           
        </div>
    </div>
</div>


@endsection
@push('scripts')
    {{-- <script>
        $('#searching').on('keyup', function (e) {
            let data = $(this).val();
            @this.set('char', data);
        });
    </script> --}}

{{-- textEditor --}}
<script src="{{asset("assets/plugins/custom/tinymce/tinymce.bundle.js")}}"></script>

<script>
  document.querySelectorAll('input[name="decision"]').forEach((elem) => {
        elem.addEventListener("change", function(event) {
            const reasonInput = document.getElementById("reasonInput");
            if (event.target.value === "reject") {
                reasonInput.classList.add('show'); // نمایش فیلد ورودی با انیمیشن
            } else {
                reasonInput.classList.remove('show'); // پنهان کردن فیلد ورودی با انیمیشن
                reasonInput.value = ""; // پاک کردن مقدار فیلد ورودی
            }
        });
    });
    // start textEditor
    var options = {selector: "#editor", height : "480"};

    if ( KTThemeMode.getMode() === "dark" ) {
        options["skin"] = "oxide-dark";
        options["content_css"] = "dark";
    }

    tinymce.init({
        selector: "#editor",
        height : "480",
        toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | link code',    plugins : "advlist autolink link image lists charmap print preview",
        menubar: false 
    });
    // end textEditor
</script>

@endpush