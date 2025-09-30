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
    <!--end::Global Stylesheets Bundle-->
    <script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

    <?php echo $__env->yieldPushContent('css'); ?>



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
       
        <!--begin::Wrapper-->
        <div class=" d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <div class="container-xxl" id="kt_content_container">
                <!--begin::Container-->
                <div class="card">
                    <div class="card-header border-1 pt-5 m-auto">
                         <h3 class="fs-2hx text-dark mb-6 text-center">
                        راهنمای استفاده از سامانه
                    </h3>
                    </div>
                   
                    <div class="card-body">
                        <p class="text-right fs-5 text-muted fw-semibold">
                            بخش مدیریت جلسات 
جلسه ها را افرادی میتوانند ثبت کنند که از طرف مدیر یت مجوز دسترسی به این بخش برای آنها صادر شده باشد.
برای هر جلسه اطلاعاتی از قبیل، عنوان، حاضرین، غایبین، مدعوین، بخش مربوطه(جهان بانو، عصر زنان و ...)، توضیحات و زمان جلسه ثبت می شود. 
می توان برای هر جلسه مصوباتی ثبت کرد که هر مصوبه دارای اطلاعاتی از قبیل، توضیحات، فرد مسئول، تاریخ سر رسید،  وضعیت(انجام نشده، انجام شده، در حال انجام) و اولویت(زیاد، کم، معمولی) می باشد.
با توجه به وضعیت مصوباتی که در جلسات ثبت شده است می توان میزان پیشرفت هر جلسه را به درصد محاسبه کرد. 

                            
                        </p>
                    </div>
                </div>
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
<!--end::سفارشی Javascript-->
<!--end::Javascript-->

<script>
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
</script>

<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
<!--end::Body-->

<!-- Mirrored from metronictheme.job100.ir/rtl/metronic8/demo3/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Dec 2023 15:23:06 GMT -->
</html>
<?php /**PATH /home/asougrou/core/resources/views/admin/pages/forms/information.blade.php ENDPATH**/ ?>