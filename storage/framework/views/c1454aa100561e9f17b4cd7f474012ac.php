<!DOCTYPE html>

<html direction="rtl" dir="rtl" style="direction: rtl" >
<!--begin::Head-->

<!-- Mirrored from metronictheme.job100.ir/rtl/metronic8/demo3/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Dec 2023 15:21:47 GMT -->
<head><base #href=""/>
    <title>
        <?php echo $__env->yieldContent('title','سامانه اداری آسو'); ?>
    </title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, حالت تیره, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="مترونیک - پنل ادمین بوت استراپ Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, روبی روی ریل, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin داشبورد Theme & Template" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="سامانه | آسو" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="<?php echo e(asset("assets/img/fav.png")); ?>" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/cssfamily=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="<?php echo e(asset("assets/plugins/custom/fullcalendar/fullcalendar.bundle.css")); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset("assets/plugins/custom/datatables/datatables.bundle.css")); ?>" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="<?php echo e(asset("assets/plugins/global/plugins.bundle.rtl.css")); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset("assets/css/style.bundle.rtl.css")); ?>" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!--end::Global Stylesheets Bundle-->
    <script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?> <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

    <?php echo $__env->yieldPushContent('css'); ?>

    <style>

        .rating, .review-rating {
            border: none;
            float: right;
            direction: ltr;
            justify-content: flex-end;
        }

        .rating > label, .review-rating > label{
            color: #90a0a3;
            float: right;
        }

        .rating > label:before , .review-rating > label:before {
            margin: 5px;
            font-size: 20px;
            font-family: FontAwesome;
            content: "\f005";
            display: inline-block;
        }

        .rating > input , .review-rating > input{
            display: none;
        }

        .rating > input:checked ~ label,
        .rating:not(:checked) > label:hover,
        .rating:not(:checked) > label:hover ~ label ,  
        .review-rating > input:checked ~ label,
        .review-rating:not(:checked) > label:hover,
        .review-rating:not(:checked) > label:hover ~ label 
        {
            color: #f79426;
        }
        
        .rating > input:checked + label:hover,
        .rating > input:checked ~ label:hover,
        .rating > label:hover ~ input:checked ~ label,
        .rating > input:checked ~ label:hover ~ label,
        .review-rating > input:checked + label:hover,
        .review-rating > input:checked ~ label:hover,
        .review-rating > label:hover ~ input:checked ~ label,
        .review-rating > input:checked ~ label:hover ~ label {
            color: #fece31;
        }


    </style>

  

</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed">
<!--begin::Theme mode setup on page load-->
<script>var defaultThemeMode = "light"; var thememode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { thememode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getitem("data-bs-theme") !== null ) { thememode = localStorage.getitem("data-bs-theme"); } else { thememode = defaultThemeMode; } } if (thememode === "system") { thememode = window.matchMedia("(prefers-color-scheme: dark)").matches  "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", thememode); }</script>
<!--end::Theme mode setup on page load-->
<!--begin::اصلی-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::کناری-->

        <?php echo $__env->make('admin.parts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--end::کناری-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" >

            <!--begin::Header-->
            <?php echo $__env->make('admin.parts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--end::Header-->

            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <div class="container-xxl" id="kt_content_container">
                <!--begin::Container-->
                <?php echo $__env->yieldContent("content"); ?>
                <!--end::Container-->
                </div>
            </div>
            <!--end::Content-->


            <!--begin::Footer-->
            <?php echo $__env->make('admin.parts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->

    </div>
    <!--end::Page-->
</div>
<!--end::Root-->
<!--begin::کشوs-->
<!--begin::فعالیتها drawer-->
<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '350px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
    <div class="card shadow-none border-0 rounded-0">
        <!--begin::Header-->
        <div class="card-header" id="kt_activities_header">
            <h3 class="card-title fw-bold text-dark">پروژه ها</h3>
            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </button>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body position-relative" id="kt_activities_body">
            <!--begin::Content-->
            <div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">


                <p>
                    در حال حاضر پروژه ای برای شما ثبت نشده است.

                </p>


                <!--begin::timeline items-->






























































































































































































































































































































































































































































































































































                <!--end::timeline items-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Body-->
        <!--begin::Footer-->
        <div class="card-footer py-5 text-center" id="kt_activities_footer">
            <a href="#" class="btn btn-bg-body text-primary">نمایش تمام پروژه ها
                <i class="ki-duotone ki-arrow-left fs-3 text-primary">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i></a>
        </div>
        <!--end::Footer-->
    </div>
</div>
<!--end::فعالیتها drawer-->
<!--begin::چت drawer-->

<?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('manage-chat.chat-list-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2797911750-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
<!--end::چت drawer-->


<!--end::اصلی-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>
<!--end::Scrolltop-->

<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="<?php echo e(asset("assets/plugins/global/plugins.bundle.js")); ?>"></script>
<script src="<?php echo e(asset("assets/js/scripts.bundle.js")); ?>"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="<?php echo e(asset("assets/plugins/custom/fullcalendar/fullcalendar.bundle.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/custom/datatables/datatables.bundle.js")); ?>"></script>
<!--end::Vendors Javascript-->
<!--begin::سفارشی Javascript(used for this page only)-->
<script src="<?php echo e(asset("assets/js/widgets.bundle.js")); ?>"></script>
<script src="<?php echo e(asset("assets/js/custom/widgets.js")); ?>"></script>
<script src="<?php echo e(asset("assets/js/custom/apps/chat/chat.js")); ?>"></script>
<script src="<?php echo e(asset("assets/js/custom/utilities/modals/users-search.js")); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!--end::سفارشی Javascript-->
<!--end::Javascript-->

<script>
    window.addEventListener('$_alert_message',  event => {
        Swal.fire({
            title: 'پیام موفقیت!',
            text:  event.detail[0].message,
            icon: 'success',
            customClass: {
                confirmButton: 'btn btn-primary'
            },
            confirmButtonText: 'متوجه شدم',
            buttonsStyling: false
        });
    })

    window.addEventListener('$_success_full_message',  event => {
        Swal.fire({
            title: 'پیام موفقیت!',
            text: 'درخواست شما با موفقیت انجام شد!',
            icon: 'success',
            customClass: {
                confirmButton: 'btn btn-primary'
            },
            confirmButtonText: 'متوجه شدم',
            buttonsStyling: false
        });
    })

    window.addEventListener('$_success_full_message_report',  event => {
        Swal.fire({
            title: 'پیام موفقیت!',
            text: 'فایل با موفقیت بارگزاری شد!',
            icon: 'success',
            customClass: {
                confirmButton: 'btn btn-primary'
            },
            confirmButtonText: 'متوجه شدم',
            buttonsStyling: false
        });
    })

    window.addEventListener('$_success_full_message_project',  event => {
        Swal.fire({
            title: 'پیام موفقیت!',
            text: 'پروژه با موفقیت ثبت شد!',
            icon: 'success',
            customClass: {
                confirmButton: 'btn btn-primary'
            },
            confirmButtonText: 'متوجه شدم',
            buttonsStyling: false
        });
    })

     // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.select-filter').select2({
            });
        });
</script>

<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
<!--end::Body-->

<!-- Mirrored from metronictheme.job100.ir/rtl/metronic8/demo3/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Dec 2023 15:23:06 GMT -->
</html>
<?php /**PATH D:\project\asou\asoon\resources\views/admin/layout/main.blade.php ENDPATH**/ ?>