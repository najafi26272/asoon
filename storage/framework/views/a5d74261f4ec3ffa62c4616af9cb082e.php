<?php $__env->startPush("css"); ?>
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
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
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
                                
                            </p>
                        </td>
                        <td>
                            <a href="#"data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_detail_news" 
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 ">
                                <span class="ms-1" data-bs-toggle="tooltip" title="جزییات">
                                    <i class="ki-duotone ki-eye fs-2 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </a>
                            
                        </td>
                    
                        
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
                <h2>لیست رصد های منافی </h2>
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
                    <th class="" >
                        عملیات
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
                                
                            </p>
                        </td>
                        <td>

                            <a href="" data-bs-toggle="modal" data-bs-target="#kt_modal_detail_news"
                                class="cursor-pointer btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                             <span class="ms-1" data-bs-toggle="tooltip" title="جزییات">
                                 <i class="ki-duotone ki-eye fs-2 text-gray-500 fs-6">
                                     <span class="path1"></span>
                                     <span class="path2"></span>
                                     <span class="path3"></span>
                                 </i>
                             </span>
                             </a>
                        </td>
                    
                        <td>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_select_users"
                                class="cursor-pointer btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                              <span class="ms-1" data-bs-toggle="tooltip" title="ویرایش">
                                <i class="ki-duotone ki-switch fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                              </span>
                              </a>
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


<div class="row g-6 g-xl-9">
    <!--begin::Col-->
    <div class="col-md-6 col-xl-4">
        <!--begin::کارت-->
        <div  class="card border-hover-primary text-center">
            <!--begin::کارت header-->
            <div class="card-header border-0 pt-9 m-auto">
                <!--begin::کارت Title-->
                <div class="card-title m-0">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-50px w-50px bg-light">
                        <img src="<?php echo e(asset("assets/img/rasad.png")); ?>"  alt="image" class="p-3">
                    </div>
                    <!--end::Avatar-->
                </div>
                <!--end::Car Title-->
               
            </div>
            <!--end:: کارت header-->
            <!--begin:: کارت body-->
            <div class="card-body p-9">
                <!--begin::نام-->
                <div class="fs-3 fw-bold text-dark"> رصدهای من </div>
                <!--end::نام-->
                <!--begin::توضیحات-->
                <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">
                    لیست رصدهای که تاکنون انجام داده اید
                </p>
                <!--end::توضیحات-->
                <!--begin::Info-->
                <div class="d-flex flex-wrap mb-5 justify-center">
                    <!--begin::Due-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">123</div>
                        <div class="fw-semibold text-gray-400">تایید شده</div>
                    </div>
                    <!--end::Due-->
                    <!--begin::بودجه-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">30</div>
                        <div class="fw-semibold text-gray-400">رد شده</div>
                    </div>
                    <!--end::بودجه-->
                </div>
                <!--end::Info-->
                <!--begin::پردازش-->
                <div class=" mb-5" >
                    <a href="#" class="btn btn-primary  w-full" style="width: 100%">مشاهده</a>
                </div>
                <!--end::پردازش-->
            
            </div>
            <!--end:: کارت body-->
        </div>
        <!--end::کارت-->
    </div>
    <!--end::Col-->
 <!--begin::Col-->
    <div class="col-md-6 col-xl-4">
        <!--begin::کارت-->
        <div  class="card border-hover-primary text-center">
            <!--begin::کارت header-->
            <div class="card-header border-0 pt-9 m-auto">
                <!--begin::کارت Title-->
                <div class="card-title m-0">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-50px w-50px bg-light">
                        <img src="<?php echo e(asset("assets/img/rasad.png")); ?>"  alt="image" class="p-3">
                    </div>
                    <!--end::Avatar-->
                </div>
                <!--end::Car Title-->
            
            </div>
            <!--end:: کارت header-->
            <!--begin:: کارت body-->
            <div class="card-body p-9">
                <!--begin::نام-->
                <div class="fs-3 fw-bold text-dark">  بازنویسی ها </div>
                <!--end::نام-->
                <!--begin::توضیحات-->
                <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">
                    بازنویسی رصدهای تایید شده
                </p>
                <!--end::توضیحات-->
                <!--begin::Info-->
                <div class="d-flex flex-wrap mb-5 justify-center">
                    <!--begin::Due-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">123</div>
                        <div class="fw-semibold text-gray-400"> بازنویسی کل</div>
                    </div>
                    <!--end::Due-->
                    <!--begin::بودجه-->
                    <div class="border border-danger border-dashed rounded min-w-125px py-3 px-4 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">3</div>
                        <div class="fw-semibold text-gray-400"> بازنویسی جدید</div>
                    </div>
                    <!--end::بودجه-->
                </div>
                <!--end::Info-->
                <!--begin::پردازش-->
                <div class=" mb-5" >
                    <a href="#" class="btn btn-primary  w-full" style="width: 100%">مشاهده</a>
                </div>
                <!--end::پردازش-->
            
            </div>
            <!--end:: کارت body-->
        </div>
        <!--end::کارت-->
    </div>
    <!--end::Col-->
    
    <!--begin::Col-->
    <div class="col-md-6 col-xl-4">
        <!--begin::کارت-->
        <div  class="card border-hover-primary text-center">
            <!--begin::کارت header-->
            <div class="card-header border-0 pt-9 m-auto">
                <!--begin::کارت Title-->
                <div class="card-title m-0">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-50px w-50px bg-light">
                        <img src="<?php echo e(asset("assets/img/rasad.png")); ?>"  alt="image" class="p-3">
                    </div>
                    <!--end::Avatar-->
                </div>
                <!--end::Car Title-->
            
            </div>
            <!--end:: کارت header-->
            <!--begin:: کارت body-->
            <div class="card-body p-9">
                <!--begin::نام-->
                <div class="fs-3 fw-bold text-dark">   تیتر رصد ها </div>
                <!--end::نام-->
                <!--begin::توضیحات-->
                <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">
                        افزودن تیتر مناسب خبر
                </p>
                <!--end::توضیحات-->
                <!--begin::Info-->
                <div class="d-flex flex-wrap mb-5 justify-center">
                    <!--begin::Due-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">123</div>
                        <div class="fw-semibold text-gray-400">  کل تیترها</div>
                    </div>
                    <!--end::Due-->
                    <!--begin::بودجه-->
                    <div class="border border-danger border-dashed rounded min-w-125px py-3 px-4 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">3</div>
                        <div class="fw-semibold text-gray-400"> در انتظار</div>
                    </div>
                    <!--end::بودجه-->
                </div>
                <!--end::Info-->
                <!--begin::پردازش-->
                <div class=" mb-5" >
                    <a href="#" class="btn btn-primary  w-full" style="width: 100%">مشاهده</a>
                </div>
                <!--end::پردازش-->
            
            </div>
            <!--end:: کارت body-->
        </div>
        <!--end::کارت-->
    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-md-6 col-xl-4">
        <!--begin::کارت-->
        <div  class="card border-hover-primary text-center">
            <!--begin::کارت header-->
            <div class="card-header border-0 pt-9 m-auto">
                <!--begin::کارت Title-->
                <div class="card-title m-0">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-50px w-50px bg-light">
                        <img src="<?php echo e(asset("assets/img/rasad.png")); ?>"  alt="image" class="p-3">
                    </div>
                    <!--end::Avatar-->
                </div>
                <!--end::Car Title-->
            
            </div>
            <!--end:: کارت header-->
            <!--begin:: کارت body-->
            <div class="card-body p-9">
                <!--begin::نام-->
                <div class="fs-3 fw-bold text-dark">   رصد های اولیه </div>
                <!--end::نام-->
                <!--begin::توضیحات-->
                <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">
                   تایید یا رد رصد ها
                </p>
                <!--end::توضیحات-->
                <!--begin::Info-->
                <div class="d-flex flex-wrap mb-5 justify-center">
                    <!--begin::Due-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">123</div>
                        <div class="fw-semibold text-gray-400"> رصد ها </div>
                    </div>
                    <!--end::Due-->
                    <!--begin::بودجه-->
                    <div class="border border-danger border-dashed rounded min-w-125px py-3 px-4 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">3</div>
                        <div class="fw-semibold text-gray-400">  در انتظار تایید</div>
                    </div>
                    <!--end::بودجه-->
                </div>
                <!--end::Info-->
                <!--begin::پردازش-->
                <div class=" mb-5" >
                    <a href="#" class="btn btn-primary  w-full" style="width: 100%">مشاهده</a>
                </div>
                <!--end::پردازش-->
            
            </div>
            <!--end:: کارت body-->
        </div>
        <!--end::کارت-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-md-6 col-xl-4">
        <!--begin::کارت-->
        <div  class="card border-hover-primary text-center">
            <!--begin::کارت header-->
            <div class="card-header border-0 pt-9 m-auto">
                <!--begin::کارت Title-->
                <div class="card-title m-0">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-50px w-50px bg-light">
                        <img src="<?php echo e(asset("assets/img/rasad.png")); ?>"  alt="image" class="p-3">
                    </div>
                    <!--end::Avatar-->
                </div>
                <!--end::Car Title-->
            
            </div>
            <!--end:: کارت header-->
            <!--begin:: کارت body-->
            <div class="card-body p-9">
                <!--begin::نام-->
                <div class="fs-3 fw-bold text-dark">
                   انتخاب بازنویس 
                                    </div>
                <!--end::نام-->
                <!--begin::توضیحات-->
                <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">
                    انتخاب شخص بازنویس 

                </p>
                <!--end::توضیحات-->
                <!--begin::Info-->
                <div class="d-flex flex-wrap mb-5 justify-center">
                    <!--begin::Due-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">12</div>
                        <div class="fw-semibold text-gray-400">  در حال بازنویسی</div>
                    </div>
                    <!--end::Due-->
                    <!--begin::بودجه-->
                    <div class="border border-danger border-dashed rounded min-w-125px py-3 px-4 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">3</div>
                        <div class="fw-semibold text-gray-400">  در انتظار </div>
                    </div>
                    <!--end::بودجه-->
                </div>
                <!--end::Info-->
                <!--begin::پردازش-->
                <div class=" mb-5" >
                    <a href="#" class="btn btn-primary  w-full" style="width: 100%">مشاهده</a>
                </div>
                <!--end::پردازش-->
            
            </div>
            <!--end:: کارت body-->
        </div>
        <!--end::کارت-->
    </div>
    <!--end::Col-->
    
        <!--begin::Col-->
    <div class="col-md-6 col-xl-4">
        <!--begin::کارت-->
        <div  class="card border-hover-primary text-center">
            <!--begin::کارت header-->
            <div class="card-header border-0 pt-9 m-auto">
                <!--begin::کارت Title-->
                <div class="card-title m-0">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-50px w-50px bg-light">
                        <img src="<?php echo e(asset("assets/img/rasad.png")); ?>"  alt="image" class="p-3">
                    </div>
                    <!--end::Avatar-->
                </div>
                <!--end::Car Title-->
            
            </div>
            <!--end:: کارت header-->
            <!--begin:: کارت body-->
            <div class="card-body p-9">
                <!--begin::نام-->
                <div class="fs-3 fw-bold text-dark">   تایید بازنویسی ها </div>
                <!--end::نام-->
                <!--begin::توضیحات-->
                <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">
                    چک کردن بازنویسی های انجام شده
                </p>
                <!--end::توضیحات-->
                <!--begin::Info-->
                <div class="d-flex flex-wrap mb-5 justify-center">
                    <!--begin::Due-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">123</div>
                        <div class="fw-semibold text-gray-400">  تایید شده ها</div>
                    </div>
                    <!--end::Due-->
                    <!--begin::بودجه-->
                    <div class="border border-danger border-dashed rounded min-w-125px py-3 px-4 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">3</div>
                        <div class="fw-semibold text-gray-400">  در انتظار تایید</div>
                    </div>
                    <!--end::بودجه-->
                </div>
                <!--end::Info-->
                <!--begin::پردازش-->
                <div class=" mb-5" >
                    <a href="#" class="btn btn-primary  w-full" style="width: 100%">مشاهده</a>
                </div>
                <!--end::پردازش-->
            
            </div>
            <!--end:: کارت body-->
        </div>
        <!--end::کارت-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-md-6 col-xl-4">
        <!--begin::کارت-->
        <div  class="card border-hover-primary text-center">
            <!--begin::کارت header-->
            <div class="card-header border-0 pt-9 m-auto">
                <!--begin::کارت Title-->
                <div class="card-title m-0">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-50px w-50px bg-light">
                        <img src="<?php echo e(asset("assets/img/rasad.png")); ?>"  alt="image" class="p-3">
                    </div>
                    <!--end::Avatar-->
                </div>
                <!--end::Car Title-->
            
            </div>
            <!--end:: کارت header-->
            <!--begin:: کارت body-->
            <div class="card-body p-9">
                <!--begin::نام-->
                <div class="fs-3 fw-bold text-dark">   تایید رصد ها </div>
                <!--end::نام-->
                <!--begin::توضیحات-->
                <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">
                    انتخاب مکان و زبان انتشار
                </p>
                <!--end::توضیحات-->
                <!--begin::Info-->
                <div class="d-flex flex-wrap mb-5 justify-center">
                    <!--begin::Due-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">123</div>
                        <div class="fw-semibold text-gray-400">  کل رصد ها</div>
                    </div>
                    <!--end::Due-->
                    <!--begin::بودجه-->
                    <div class="border border-danger border-dashed rounded min-w-125px py-3 px-4 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">3</div>
                        <div class="fw-semibold text-gray-400">  در انتظار تایید</div>
                    </div>
                    <!--end::بودجه-->
                </div>
                <!--end::Info-->
                <!--begin::پردازش-->
                <div class=" mb-5" >
                    <a href="#" class="btn btn-primary  w-full" style="width: 100%">مشاهده</a>
                </div>
                <!--end::پردازش-->
            
            </div>
            <!--end:: کارت body-->
        </div>
        <!--end::کارت-->
    </div>
    <!--end::Col-->

</div>











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


<div wire:ignore.self class="modal fade" id="kt_modal_select_users" tabindex="-1" aria-hidden="true">
    <!-- Modal Dialog -->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!-- Modal Content -->
        <div class="modal-content">
            <!-- Form Start -->
                <!-- Modal Header -->
                <div class="modal-header" id="kt_modal_new_mosavabe_header">
                    <h2>انتخاب تیترزن و اولویت </h2>
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>
                <!-- Modal Body -->
                <div class="modal-body py-10 px-lg-17">
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_new_mosavabe_scroll" data-kt-scroll="true"
                         data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                         data-kt-scroll-dependencies="#kt_modal_new_address_header"
                         data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">

                       
                            <!--begin::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Input group-->
                                <div wire:ignore class="d-flex flex-column mb-8 fv-row">
                                    <!--begin::Tags-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class=""> تیتر سایت</span>
                                        <span class="ms-1" data-bs-toggle="tooltip"
                                              title="چه کسی تیتر سایت را انتخاب کند؟">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                    </label>
                                    <!--end::Tags-->
                                    <select class="form-select form-select-solid" id="selectedAuthorWeb"
                                            data-placeholder=" انتخاب کنید." >

                                        
                                            <option value="1"> 
                                                داداشی
                                            </option>
                                        
                                    </select>

                                </div>
                                <!--end::Input group-->
                                
                            </div>
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Input group-->
                                <div wire:ignore class="d-flex flex-column mb-8 fv-row">
                                    <!--begin::Tags-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class=""> تیتر شبکه های اجتماعی</span>
                                        <span class="ms-1" data-bs-toggle="tooltip"
                                              title="چه کسی تیترهای شبکه های اجتماعی را بنویسد؟">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span>
                                    </label>
                                    <!--end::Tags-->
                                    <select class="form-select form-select-solid" id="selectedAuthorSocioal"
                                            data-placeholder="انتخاب کنید ">

                                        
                                            <option value="1"> 
                                                ملکوتی
                                            </option>

                                        

                                    </select>
                                </div>
                                <!--end::Input group-->
                                
                            </div>
                        </div>
                        <div class="row g-9 mb-8">
                            
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row">
                                <!--begin::Input group-->
                                <div wire:ignore class="d-flex flex-column mb-8 fv-row">
                                    <!--begin::Tags-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class=""> اولویت</span>
                                        <span class="ms-1" data-bs-toggle="tooltip"
                                              title="این خبر چه اولویتی دارد؟ ">
                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                    </label>
                                    <!--end::Tags-->
                                    <select class="form-select form-select-solid" id="selectedPriority"
                                            data-placeholder="انتخاب کنید ">

                                        
                                            <option value="1">کم</option>
                                            <option value="2">متوسط</option>
                                            <option value="3">زیاد</option>
                                        

                                    </select>
                                </div>
                                <!--end::Input group-->
                                
                            </div>
                        </div>

                        <div class="row g-9 mb-8">
                            
                            <!--begin::Col-->
                            <div class="col-md-12 fv-row">
                                <!--begin::Input group-->
                                <div wire:ignore class="d-flex flex-column mb-8 fv-row">
                                    <!--begin::Tags-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class=""> اولویت</span>
                                        <span class="ms-1" data-bs-toggle="tooltip"
                                              title="این خبر چه اولویتی دارد؟ ">
                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                    </label>
                                    <!--end::Tags-->
                                    <select class="form-select form-select-solid" id="selectedLanguage"
                                            data-placeholder="انتخاب کنید ">

                                        
                                            <option value="fa">فارسی</option>
                                            <option value="ar">عربی</option>
                                            <option value="en">انگلیسی</option>
                                        

                                    </select>
                                </div>
                                <!--end::Input group-->
                                
                            </div>
                        </div>
                         
                    </div>
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
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    


<script src="<?php echo e(asset("assets/plugins/custom/tinymce/tinymce.bundle.js")); ?>"></script>

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


    

$(document).ready(function() {
    $('#selectedPriority').select2({
        width: '100%', // به جای 'style'، می‌توانید '100%' استفاده کنید
        placeholder:"انتخاب کنید",
        closeOnSelect: true
    });
    $('#selectedAuthorSocioal').select2({
        width: '100%', // به جای 'style'، می‌توانید '100%' استفاده کنید
        placeholder:"انتخاب کنید",
        closeOnSelect: true
    });
    $('#selectedAuthorWeb').select2({
        width: '100%', // به جای 'style'، می‌توانید '100%' استفاده کنید
        placeholder:"انتخاب کنید",
        closeOnSelect: true
    });
    $('#selectedLanguage').select2({
        width: '100%', // به جای 'style'، می‌توانید '100%' استفاده کنید
        placeholder:"انتخاب کنید",
        closeOnSelect: true
    });
    
});
</script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\B\work\Asou\main asou react\asoon\resources\views/admin/pages/news.blade.php ENDPATH**/ ?>