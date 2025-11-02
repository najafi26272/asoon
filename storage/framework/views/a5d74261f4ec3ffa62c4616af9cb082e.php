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
	<!--begin::قیمت گذاری card-->
    <div class="card" id="kt_pricing">
        <!--begin::کارت body-->
        <div class="card-body p-lg-17">
            <!--begin::برنامه ریزی ها-->
            <div class="d-flex flex-column">
                <!--begin::Heading-->
                <div class="mb-13 text-center">
                    <h1 class="fs-2hx fw-bold mb-5">برنامه را انتخاب کنید</h1>
                    <div class="text-gray-600 fw-semibold fs-5">اگر به اطلاعات بیشتری در مورد قیمت ما نیاز دارید، لطفا بررسی کنید
                    <a href="#" class="link-primary fw-bold">دستورالعمل قیمت گذاری</a>.</div>
                </div>
                <!--end::Heading-->
                <!--begin::Nav group-->
                <div class="nav-group nav-group-outline mx-auto mb-15" data-kt-buttons="true">
                    <button class="btn btn-color-gray-600 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">ماهانه</button>
                    <button class="btn btn-color-gray-600 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">سالانه</button>
                </div>
                <!--end::Nav group-->
                <!--begin::Row-->
                <div class="row g-10">
                    <!--begin::Col-->
                    <div class="col-xl-4">
                        <div class="d-flex h-100 align-items-center">
                            <!--begin::Option-->
                            <div class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10">
                                <!--begin::Heading-->
                                <div class="mb-7 text-center">
                                    <!--begin::Title-->
                                    <h1 class="text-dark mb-5 fw-bolder">استارت آپ</h1>
                                    <!--end::Title-->
                                    <!--begin::توضیحات-->
                                    <div class="text-gray-600 fw-semibold mb-5">بهینه برای تیم بیش از 10 نفر
                                    <br />و استارت آپ جدید</div>
                                    <!--end::توضیحات-->
                                    <!--begin::قیمت-->
                                    <div class="text-center">
                                        <span class="mb-2 text-primary">$</span>
                                        <span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
                                        <span class="fs-7 fw-semibold opacity-50">/
                                        <span data-kt-element="period">دوشنبه</span></span>
                                    </div>
                                    <!--end::قیمت-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::ویژگی ها-->
                                <div class="w-100 mb-10">
                                    <!--begin::item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">فعال ترین کاربران</span>
                                        <i class="ki-duotone ki-check-circle fs-1 text-success">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::item-->
                                    <!--begin::item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">حداکثر 30 ادغام پروژه</span>
                                        <i class="ki-duotone ki-check-circle fs-1 text-success">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::item-->
                                    <!--begin::item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">ماژول تجزیه و تحلیل</span>
                                        <i class="ki-duotone ki-check-circle fs-1 text-success">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::item-->
                                    <!--begin::item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">ماژول دارایی ، مالیه ، سرمایه گذاری</span>
                                        <i class="ki-duotone ki-cross-circle fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::item-->
                                    <!--begin::item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">ماژول حسابداری</span>
                                        <i class="ki-duotone ki-cross-circle fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::item-->
                                    <!--begin::item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">بستر شبکه</span>
                                        <i class="ki-duotone ki-cross-circle fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::item-->
                                    <!--begin::item-->
                                    <div class="d-flex align-items-center">
                                        <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">فضای نامحدود ابر</span>
                                        <i class="ki-duotone ki-cross-circle fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::item-->
                                </div>
                                <!--end::ویژگی ها-->
                                <!--begin::انتخاب-->
                                <a href="#" class="btn btn-sm btn-primary">انتخاب</a>
                                <!--end::انتخاب-->
                            </div>
                            <!--end::Option-->
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-4">
                        <div class="d-flex h-100 align-items-center">
                            <!--begin::Option-->
                            <div class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-20 px-10">
                                <!--begin::Heading-->
                                <div class="mb-7 text-center">
                                    <!--begin::Title-->
                                    <h1 class="text-dark mb-5 fw-bolder">پیشرفته</h1>
                                    <!--end::Title-->
                                    <!--begin::توضیحات-->
                                    <div class="text-gray-600 fw-semibold mb-5">بهینه برای تیم 100+ شش
                                    <br />شرکت الکترونیکی و رشد یافته</div>
                                    <!--end::توضیحات-->
                                    <!--begin::قیمت-->
                                    <div class="text-center">
                                        <span class="mb-2 text-primary">$</span>
                                        <span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
                                        <span class="fs-7 fw-semibold opacity-50">/
                                        <span data-kt-element="period">دوشنبه</span></span>
                                    </div>
                                    <!--end::قیمت-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::ویژگی ها-->
                                <div class="w-100 mb-10">
                                    <!--begin::item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">فعال ترین کاربران</span>
                                        <i class="ki-duotone ki-check-circle fs-1 text-success">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::item-->
                                    <!--begin::item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">حداکثر 30 ادغام پروژه</span>
                                        <i class="ki-duotone ki-check-circle fs-1 text-success">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::item-->
                                    <!--begin::item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">ماژول تجزیه و تحلیل</span>
                                        <i class="ki-duotone ki-check-circle fs-1 text-success">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::item-->
                                    <!--begin::item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">ماژول دارایی ، مالیه ، سرمایه گذاری</span>
                                        <i class="ki-duotone ki-check-circle fs-1 text-success">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::item-->
                                    <!--begin::item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">ماژول حسابداری</span>
                                        <i class="ki-duotone ki-check-circle fs-1 text-success">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::item-->
                                    <!--begin::item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">بستر شبکه</span>
                                        <i class="ki-duotone ki-cross-circle fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::item-->
                                    <!--begin::item-->
                                    <div class="d-flex align-items-center">
                                        <span class="fw-semibold fs-6 text-gray-600 flex-grow-1">فضای نامحدود ابر</span>
                                        <i class="ki-duotone ki-cross-circle fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::item-->
                                </div>
                                <!--end::ویژگی ها-->
                                <!--begin::انتخاب-->
                                <a href="#" class="btn btn-sm btn-primary">انتخاب</a>
                                <!--end::انتخاب-->
                            </div>
                            <!--end::Option-->
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-4">
                        <div class="d-flex h-100 align-items-center">
                            <!--begin::Option-->
                            <div class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10">
                                <!--begin::Heading-->
                                <div class="mb-7 text-center">
                                    <!--begin::Title-->
                                    <h1 class="text-dark mb-5 fw-bolder">شرکت، پروژه</h1>
                                    <!--end::Title-->
                                    <!--begin::توضیحات-->
                                    <div class="text-gray-600 fw-semibold mb-5">Optimal for 1000+ team
                                    <br />و بنگاه اقتصادی</div>
                                    <!--end::توضیحات-->
                                    <!--begin::قیمت-->
                                    <div class="text-center">
                                        <span class="mb-2 text-primary">$</span>
                                        <span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
                                        <span class="fs-7 fw-semibold opacity-50">/
                                        <span data-kt-element="period">دوشنبه</span></span>
                                    </div>
                                    <!--end::قیمت-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::ویژگی ها-->
                                <div class="w-100 mb-10">
                                    <!--begin::item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">فعال ترین کاربران</span>
                                        <i class="ki-duotone ki-check-circle fs-1 text-success">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::item-->
                                    <!--begin::item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">حداکثر 30 ادغام پروژه</span>
                                        <i class="ki-duotone ki-check-circle fs-1 text-success">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::item-->
                                    <!--begin::item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">ماژول تجزیه و تحلیل</span>
                                        <i class="ki-duotone ki-check-circle fs-1 text-success">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::item-->
                                    <!--begin::item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">ماژول دارایی ، مالیه ، سرمایه گذاری</span>
                                        <i class="ki-duotone ki-check-circle fs-1 text-success">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::item-->
                                    <!--begin::item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">ماژول حسابداری</span>
                                        <i class="ki-duotone ki-check-circle fs-1 text-success">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::item-->
                                    <!--begin::item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">بستر شبکه</span>
                                        <i class="ki-duotone ki-check-circle fs-1 text-success">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::item-->
                                    <!--begin::item-->
                                    <div class="d-flex align-items-center">
                                        <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">فضای نامحدود ابر</span>
                                        <i class="ki-duotone ki-check-circle fs-1 text-success">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::item-->
                                </div>
                                <!--end::ویژگی ها-->
                                <!--begin::انتخاب-->
                                <a href="#" class="btn btn-sm btn-primary">انتخاب</a>
                                <!--end::انتخاب-->
                            </div>
                            <!--end::Option-->
                        </div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::برنامه ریزی ها-->
        </div>
        <!--end::کارت body-->
    </div>
    <!--end::قیمت گذاری card-->


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