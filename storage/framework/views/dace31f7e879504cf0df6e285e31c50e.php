
<!DOCTYPE html>

<html direction="rtl" dir="rtl" style="direction: rtl" >
<!--begin::Head-->
<head><base href="../../../"/>
    <title>سامانه اداری آسو</title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners و professionals. Multi-demo, حالت تیره, RTL support و complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now و get life-time updates for free." />
    <meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:site_name" content="سامانه اداری آسو" />
    <link rel="shortcut icon" href="<?php echo e(asset("assets/img/fav.png")); ?>" />
    <!--begin::Fonts(mوatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/cssfamily=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mوatory for all pages)-->
    <link href="<?php echo e(asset("assets/plugins/global/plugins.bundle.rtl.css")); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset("assets/css/style.bundle.rtl.css")); ?>" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center">
<!--begin::Theme mode setup on page load-->
<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getآیتم("data-bs-theme") !== null ) { themeMode = localStorage.getآیتم("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches  "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
<!--end::Theme mode setup on page load-->
<!--begin::Root-->
<?php echo $__env->yieldContent('content'); ?>
<!--end::Root-->
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(mوatory for all pages)-->
<script src="<?php echo e(asset("assets/plugins/global/plugins.bundle.js")); ?>"></script>
<script src="<?php echo e(asset("assets/js/scripts.bundle.js")); ?>"></script>
<!--end::Global Javascript Bundle-->
<!--begin::سفارشی Javascript(used for this page only)-->
<script src="<?php echo e(asset("assets/js/custom/authentication/ورود/general.js")); ?>"></script>
<!--end::سفارشی Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
<?php /**PATH D:\B\work\Asou\main asou react\asoon\resources\views/admin/layout/login.blade.php ENDPATH**/ ?>