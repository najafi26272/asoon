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
                <div class="fs-3 fw-bold text-dark">اخبار رصدشده</div>
                <!--end::نام-->
                <!--begin::توضیحات-->
                <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">
                    لیست اولیه اخبار رصدشده
                </p>
                <!--end::توضیحات-->
                <!--begin::Info-->
                <div class="d-flex flex-wrap mb-5 justify-center">
                    <!--begin::Due-->
                    <div class="border border-gray-300 border-dashed rounded min-w-120px py-3 px-4 me-7 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold"><?php echo e($approvedMonitoringNewsCount); ?></div>
                        <div class="fw-semibold text-gray-400">تایید شده</div>
                    </div>
                    <!--end::Due-->
                    <!--begin::-->
                    <div class="border border-gray-300 border-dashed rounded min-w-120px py-3 px-4 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold"><?php echo e($rejectedMonitoringNewsCount); ?></div>
                        <div class="fw-semibold text-gray-400">رد شده</div>
                    </div>
                    <!--end::-->
                </div>
                <!--end::Info-->
                <!--begin::پردازش-->
                <div class=" mb-5" >
                    <a target="_blank" href="<?php echo e(route('monitoringNews')); ?>" class="btn btn-primary  w-full" style="width: 100%">مشاهده</a>
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
            <div class="card-body p-9">
                <!--begin::نام-->
                <div class="fs-3 fw-bold text-dark">اخبار تاییدشده</div>
                <!--end::نام-->
                <!--begin::توضیحات-->
                <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">
                 لیست اخبار تاییدشده برای تکمیل محل انتشار، زبان و ...
                </p>
                <!--end::توضیحات-->
                <!--begin::Info-->
                <div class="d-flex flex-wrap mb-5 justify-center">
                    <!--begin::Due-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold"><?php echo e($waitingForAddInfoNewsCount); ?></div>
                        <div class="fw-semibold text-gray-400">در انتظار افزودن اطلاعات</div>
                    </div>
                    <!--end::Due-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold"><?php echo e($addedInfoNewsCount); ?></div>
                        <div class="fw-semibold text-gray-400">اطلاعات ثبت شده</div>
                    </div>
                </div>
                <!--end::Info-->
                <!--begin::پردازش-->
                <div class=" mb-5" >
                    <a target="_blank" href="<?php echo e(route('addInfoNews')); ?>" class="btn btn-primary  w-full" style="width: 100%">مشاهده</a>
                </div>
                <!--end::پردازش-->
            
            </div>
            <!--begin:: کارت body-->

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
                    <div class="fs-3 fw-bold text-dark">تیتر اخبار</div>
                    <!--end::نام-->
                    <!--begin::توضیحات-->
                    <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">
                        لیست اخبار تاییدشده برای تیتر زدن
                    </p>
                    <!--end::توضیحات-->
                    <!--begin::Info-->
                    <div class="d-flex flex-wrap mb-5 justify-center">
                        <!--begin::Due-->
                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                            <div class="fs-6 text-gray-800 fw-bold">123</div>
                            <div class="fw-semibold text-gray-400">در انتظار تیتر</div>
                        </div>
                        <!--end::Due-->
                        <!--begin::بودجه-->
                        <div class="border border-danger border-dashed rounded min-w-125px py-3 px-4 mb-3">
                            <div class="fs-6 text-gray-800 fw-bold">3</div>
                            <div class="fw-semibold text-gray-400">درانتظار بررسی تیتر</div>
                        </div>
                        <!--end::بودجه-->
                         <!--begin::Due-->
                         <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                            <div class="fs-6 text-gray-800 fw-bold">123</div>
                            <div class="fw-semibold text-gray-400">تایید تیتر</div>
                        </div>
                        <!--end::Due-->
                        <!--begin::بودجه-->
                        <div class="border border-danger border-dashed rounded min-w-125px py-3 px-4 mb-3">
                            <div class="fs-6 text-gray-800 fw-bold">3</div>
                            <div class="fw-semibold text-gray-400">عدم تایید تیتر و درانتظار تیترمجدد</div>
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
                <div class="fs-3 fw-bold text-dark">بازنویسی ها</div>
                <!--end::نام-->
                <!--begin::توضیحات-->
                <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">
                    لیست اخبار تایید و تکمیل شده برای بازنویسی
                </p>
                <!--end::توضیحات-->
                <!--begin::Info-->
                <div class="d-flex flex-wrap mb-5 justify-center">
                    
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold"><?php echo e($approvedReviewNewsCount); ?></div>
                        <div class="fw-semibold text-gray-400">تاییدشده</div>
                    </div>
                    <div class="border border-danger border-dashed rounded min-w-125px py-3 px-4 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold"><?php echo e($waitingForAssignReviewNewsCount); ?></div>
                        <div class="fw-semibold text-gray-400">در انتظار ارجاع به بازنویس</div>
                    </div>
                    <div class="border border-danger border-dashed rounded min-w-125px py-3 px-4 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold"><?php echo e($waitingForReviewNewsCount); ?></div>
                        <div class="fw-semibold text-gray-400">در انتظار بازنویسی</div>
                    </div>
                    <div class="border border-danger border-dashed rounded min-w-125px py-3 px-4 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold"><?php echo e($waitingForCheckingReviewNewsCount); ?></div>
                        <div class="fw-semibold text-gray-400">در انتظار بررسی بازنویسی</div>
                    </div>
                    <div class="border border-danger border-dashed rounded min-w-125px py-3 px-4 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold"><?php echo e($rejectedReviewNewsCount); ?></div>
                        <div class="fw-semibold text-gray-400">ردشده و درانتظار بازنویسی مجدد</div>
                    </div>
                </div>
                <!--end::Info-->
                <!--begin::پردازش-->
                <div class=" mb-5" >
                    <a target="_blank" href="<?php echo e(route('reviewNews')); ?>" class="btn btn-primary  w-full" style="width: 100%">مشاهده</a>
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
                <div class="fs-3 fw-bold text-dark">اخبار نهایی</div>
                <!--end::نام-->
                <!--begin::توضیحات-->
                <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">
                    لیست نهایی و تکمیل شده اخبار
                </p>
                <!--end::توضیحات-->
                <!--begin::Info-->
                <div class="d-flex flex-wrap mb-5 justify-center">
                    <!--begin::Due-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">123</div>
                        <div class="fw-semibold text-gray-400">منتشرشده</div>
                    </div>
                    <!--end::Due-->
                    <!--begin::بودجه-->
                    <div class="border border-danger border-dashed rounded min-w-125px py-3 px-4 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">3</div>
                        <div class="fw-semibold text-gray-400">درانتظار انتشار</div>
                    </div>
                    <!--end::بودجه-->
                     <!--begin::Due-->
                     <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">123</div>
                        <div class="fw-semibold text-gray-400">عدم انتشار</div>
                    </div>
                    <!--end::Due-->
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
                   رصدهای من
                </div>
                <!--end::نام-->
                <!--begin::توضیحات-->
                <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">
                 لیست اخبار رصدشده من 

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
                <div class="fs-3 fw-bold text-dark">تیترهای من</div>
                <!--end::نام-->
                <!--begin::توضیحات-->
                <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">
                    لیست اخبار تیتر زده شده توسط من
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
                <div class="fs-3 fw-bold text-dark">بازنویسی های من</div>
                <!--end::نام-->
                <!--begin::توضیحات-->
                <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">
                   لیست اخبار ارجاع شده به من برای بازنویسی
                </p>
                <!--end::توضیحات-->
                <!--begin::Info-->
                <div class="d-flex flex-wrap mb-5 justify-center">
                    <!--begin::Due-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">123</div>
                        <div class="fw-semibold text-gray-400">تاییدشده</div>
                    </div>
                    <!--end::Due-->
                    <!--begin::بودجه-->
                    <div class="border border-danger border-dashed rounded min-w-125px py-3 px-4 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">3</div>
                        <div class="fw-semibold text-gray-400">ردشده و درانتظار بازنویسی مجدد</div>
                    </div>
                    <div class="border border-danger border-dashed rounded min-w-125px py-3 px-4 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">3</div>
                        <div class="fw-semibold text-gray-400">در انتظار بازنویسی</div>
                    </div>
                    <div class="border border-danger border-dashed rounded min-w-125px py-3 px-4 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">3</div>
                        <div class="fw-semibold text-gray-400">در انتظار بررسی بازنویسی</div>
                    </div>
                    <!--end::بودجه-->
                </div>
                <!--end::Info-->
                <!--begin::پردازش-->
                <div class=" mb-5" >
                    <a target="_blank" href="<?php echo e(route('reviewNews')); ?>" class="btn btn-primary  w-full" style="width: 100%">مشاهده</a>
                </div>
                <!--end::پردازش-->
            
            </div>
            <!--end:: کارت body-->
        </div>
        <!--end::کارت-->
    </div>
    <!--end::Col-->
    
</div>
<?php /**PATH D:\B\work\Asou\main asou react\asoon\resources\views/livewire/manage-news/news-menu-component.blade.php ENDPATH**/ ?>