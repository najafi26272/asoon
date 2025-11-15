<!DOCTYPE html>

<html direction="rtl" dir="rtl" style="direction: rtl" >
<!--begin::Head-->

<!-- Mirrored from metronictheme.job100.ir/rtl/metronic8/demo3/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Dec 2023 15:21:47 GMT -->
<head><base #href=""/>
    <title>
        @yield('title','سامانه اداری آسو')
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
    <link rel="shortcut icon" href="{{asset("assets/img/fav.png")}}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/cssfamily=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{asset("assets/plugins/custom/fullcalendar/fullcalendar.bundle.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/plugins/custom/datatables/datatables.bundle.css")}}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{asset("assets/plugins/global/plugins.bundle.rtl.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/css/style.bundle.rtl.css")}}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!--end::Global Stylesheets Bundle-->
    <script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
    @livewireStyles @livewireScripts
    @stack('css')

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

        @include('admin.parts.sidebar')
        <!--end::کناری-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" >

            <!--begin::Header-->
            @include('admin.parts.header')
            <!--end::Header-->

            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <div class="container-xxl" id="kt_content_container">
                <!--begin::Container-->
                @yield("content")
                <!--end::Container-->
                </div>
            </div>
            <!--end::Content-->


            <!--begin::Footer-->
            @include('admin.parts.footer')
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
{{--                <div class="timeline">--}}
{{--                    <!--begin::timeline item-->--}}
{{--                    <div class="timeline-item">--}}
{{--                        <!--begin::timeline line-->--}}
{{--                        <div class="timeline-line w-40px"></div>--}}
{{--                        <!--end::timeline line-->--}}
{{--                        <!--begin::timeline icon-->--}}
{{--                        <div class="timeline-icon symbol symbol-circle symbol-40px me-4">--}}
{{--                            <div class="symbol-label bg-light">--}}
{{--                                <i class="ki-duotone ki-message-text-2 fs-2 text-gray-500">--}}
{{--                                    <span class="path1"></span>--}}
{{--                                    <span class="path2"></span>--}}
{{--                                    <span class="path3"></span>--}}
{{--                                </i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--end::timeline icon-->--}}
{{--                        <!--begin::timeline content-->--}}
{{--                        <div class="timeline-content mb-10 mt-n1">--}}
{{--                            <!--begin::timeline heading-->--}}
{{--                            <div class="pe-3 mb-5">--}}
{{--                                <!--begin::Title-->--}}
{{--                                <div class="fs-5 fw-semibold mb-2">در پروژه اپلیکیشن موبایل  کار جدید برای شما وجود دارد:</div>--}}
{{--                                <!--end::Title-->--}}
{{--                                <!--begin::توضیحات-->--}}
{{--                                <div class="d-flex align-items-center mt-1 fs-6">--}}
{{--                                    <!--begin::Info-->--}}
{{--                                    <div class="text-muted me-2 fs-7">اضافه شده در ساعت 4:12</div>--}}
{{--                                    <!--end::Info-->--}}
{{--                                    <!--begin::user-->--}}
{{--                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">--}}
{{--                                        <img src="{{asset("assets/media/avatars/300-14.jpg")}}" alt="img" />--}}
{{--                                    </div>--}}
{{--                                    <!--end::user-->--}}
{{--                                </div>--}}
{{--                                <!--end::توضیحات-->--}}
{{--                            </div>--}}
{{--                            <!--end::timeline heading-->--}}
{{--                            <!--begin::timeline details-->--}}
{{--                            <div class="overflow-auto pb-5">--}}
{{--                                <!--begin::Record-->--}}
{{--                                <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">--}}
{{--                                    <!--begin::Title-->--}}
{{--                                    <a href="apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">ملاقات با مشتری</a>--}}
{{--                                    <!--end::Title-->--}}
{{--                                    <!--begin::Tags-->--}}
{{--                                    <div class="min-w-175px pe-2">--}}
{{--                                        <span class="badge badge-light text-muted">طراح نرم افزار</span>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Tags-->--}}
{{--                                    <!--begin::users-->--}}
{{--                                    <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">--}}
{{--                                        <!--begin::user-->--}}
{{--                                        <div class="symbol symbol-circle symbol-25px">--}}
{{--                                            <img src="{{asset("assets/media/avatars/300-2.jpg")}}" alt="img" />--}}
{{--                                        </div>--}}
{{--                                        <!--end::user-->--}}
{{--                                        <!--begin::user-->--}}
{{--                                        <div class="symbol symbol-circle symbol-25px">--}}
{{--                                            <img src="{{asset("assets/media/avatars/300-14.jpg")}}" alt="img" />--}}
{{--                                        </div>--}}
{{--                                        <!--end::user-->--}}
{{--                                        <!--begin::user-->--}}
{{--                                        <div class="symbol symbol-circle symbol-25px">--}}
{{--                                            <div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>--}}
{{--                                        </div>--}}
{{--                                        <!--end::user-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::users-->--}}
{{--                                    <!--begin::پردازش-->--}}
{{--                                    <div class="min-w-125px pe-2">--}}
{{--                                        <span class="badge badge-light-primary">درحال پردازش</span>--}}
{{--                                    </div>--}}
{{--                                    <!--end::پردازش-->--}}
{{--                                    <!--begin::Actions-->--}}
{{--                                    <a href="apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">نمایش</a>--}}
{{--                                    <!--end::Actions-->--}}
{{--                                </div>--}}
{{--                                <!--end::Record-->--}}
{{--                                <!--begin::Record-->--}}
{{--                                <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">--}}
{{--                                    <!--begin::Title-->--}}
{{--                                    <a href="apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">آماده سازی تحویل پروژه</a>--}}
{{--                                    <!--end::Title-->--}}
{{--                                    <!--begin::Tags-->--}}
{{--                                    <div class="min-w-175px">--}}
{{--                                        <span class="badge badge-light text-muted">توسعه دهنده سیستم</span>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Tags-->--}}
{{--                                    <!--begin::users-->--}}
{{--                                    <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">--}}
{{--                                        <!--begin::user-->--}}
{{--                                        <div class="symbol symbol-circle symbol-25px">--}}
{{--                                            <img src="{{asset("assets/media/avatars/300-20.jpg")}}" alt="img" />--}}
{{--                                        </div>--}}
{{--                                        <!--end::user-->--}}
{{--                                        <!--begin::user-->--}}
{{--                                        <div class="symbol symbol-circle symbol-25px">--}}
{{--                                            <div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>--}}
{{--                                        </div>--}}
{{--                                        <!--end::user-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::users-->--}}
{{--                                    <!--begin::پردازش-->--}}
{{--                                    <div class="min-w-125px">--}}
{{--                                        <span class="badge badge-light-success">کامل شد</span>--}}
{{--                                    </div>--}}
{{--                                    <!--end::پردازش-->--}}
{{--                                    <!--begin::Actions-->--}}
{{--                                    <a href="apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">نمایش</a>--}}
{{--                                    <!--end::Actions-->--}}
{{--                                </div>--}}
{{--                                <!--end::Record-->--}}
{{--                            </div>--}}
{{--                            <!--end::timeline details-->--}}
{{--                        </div>--}}
{{--                        <!--end::timeline content-->--}}
{{--                    </div>--}}
{{--                    <!--end::timeline item-->--}}
{{--                    <!--begin::timeline item-->--}}
{{--                    <div class="timeline-item">--}}
{{--                        <!--begin::timeline line-->--}}
{{--                        <div class="timeline-line w-40px"></div>--}}
{{--                        <!--end::timeline line-->--}}
{{--                        <!--begin::timeline icon-->--}}
{{--                        <div class="timeline-icon symbol symbol-circle symbol-40px">--}}
{{--                            <div class="symbol-label bg-light">--}}
{{--                                <i class="ki-duotone ki-flag fs-2 text-gray-500">--}}
{{--                                    <span class="path1"></span>--}}
{{--                                    <span class="path2"></span>--}}
{{--                                </i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--end::timeline icon-->--}}
{{--                        <!--begin::timeline content-->--}}
{{--                        <div class="timeline-content mb-10 mt-n2">--}}
{{--                            <!--begin::timeline heading-->--}}
{{--                            <div class="overflow-auto pe-3">--}}
{{--                                <!--begin::Title-->--}}
{{--                                <div class="fs-5 fw-semibold mb-2">دعوت نامه برای ساخت طراحی های جذاب که کارگاه انسانی را بیان می کنند</div>--}}
{{--                                <!--end::Title-->--}}
{{--                                <!--begin::توضیحات-->--}}
{{--                                <div class="d-flex align-items-center mt-1 fs-6">--}}
{{--                                    <!--begin::Info-->--}}
{{--                                    <div class="text-muted me-2 fs-7">ارسال شده در ساعت 4:23</div>--}}
{{--                                    <!--end::Info-->--}}
{{--                                    <!--begin::user-->--}}
{{--                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">--}}
{{--                                        <img src="{{asset("assets/media/avatars/300-1.jpg")}}" alt="img" />--}}
{{--                                    </div>--}}
{{--                                    <!--end::user-->--}}
{{--                                </div>--}}
{{--                                <!--end::توضیحات-->--}}
{{--                            </div>--}}
{{--                            <!--end::timeline heading-->--}}
{{--                        </div>--}}
{{--                        <!--end::timeline content-->--}}
{{--                    </div>--}}
{{--                    <!--end::timeline item-->--}}
{{--                    <!--begin::timeline item-->--}}
{{--                    <div class="timeline-item">--}}
{{--                        <!--begin::timeline line-->--}}
{{--                        <div class="timeline-line w-40px"></div>--}}
{{--                        <!--end::timeline line-->--}}
{{--                        <!--begin::timeline icon-->--}}
{{--                        <div class="timeline-icon symbol symbol-circle symbol-40px">--}}
{{--                            <div class="symbol-label bg-light">--}}
{{--                                <i class="ki-duotone ki-disconnect fs-2 text-gray-500">--}}
{{--                                    <span class="path1"></span>--}}
{{--                                    <span class="path2"></span>--}}
{{--                                    <span class="path3"></span>--}}
{{--                                    <span class="path4"></span>--}}
{{--                                    <span class="path5"></span>--}}
{{--                                </i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--end::timeline icon-->--}}
{{--                        <!--begin::timeline content-->--}}
{{--                        <div class="timeline-content mb-10 mt-n1">--}}
{{--                            <!--begin::timeline heading-->--}}
{{--                            <div class="mb-5 pe-3">--}}
{{--                                <!--begin::Title-->--}}
{{--                                <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 پروژه ورودی جدید پرونده ها:</a>--}}
{{--                                <!--end::Title-->--}}
{{--                                <!--begin::توضیحات-->--}}
{{--                                <div class="d-flex align-items-center mt-1 fs-6">--}}
{{--                                    <!--begin::Info-->--}}
{{--                                    <div class="text-muted me-2 fs-7">ارسال شده در ساعت 10:30</div>--}}
{{--                                    <!--end::Info-->--}}
{{--                                    <!--begin::user-->--}}
{{--                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">--}}
{{--                                        <img src="{{asset("assets/media/avatars/300-23.jpg")}}" alt="img" />--}}
{{--                                    </div>--}}
{{--                                    <!--end::user-->--}}
{{--                                </div>--}}
{{--                                <!--end::توضیحات-->--}}
{{--                            </div>--}}
{{--                            <!--end::timeline heading-->--}}
{{--                            <!--begin::timeline details-->--}}
{{--                            <div class="overflow-auto pb-5">--}}
{{--                                <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">--}}
{{--                                    <!--begin::item-->--}}
{{--                                    <div class="d-flex flex-aligns-center pe-10 pe-lg-20">--}}
{{--                                        <!--begin::Icon-->--}}
{{--                                        <img alt="" class="w-30px me-3" src="{{asset("assets/media/svg/files/pdf.svg")}}" />--}}
{{--                                        <!--end::Icon-->--}}
{{--                                        <!--begin::Info-->--}}
{{--                                        <div class="ms-1 fw-semibold">--}}
{{--                                            <!--begin::Desc-->--}}
{{--                                            <a href="apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">دارایی، مالیه، سرمایه گذاری </a>--}}
{{--                                            <!--end::Desc-->--}}
{{--                                            <!--begin::شماره کارت-->--}}
{{--                                            <div class="text-gray-400">1.9mb</div>--}}
{{--                                            <!--end::شماره کارت-->--}}
{{--                                        </div>--}}
{{--                                        <!--begin::Info-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::item-->--}}
{{--                                    <!--begin::item-->--}}
{{--                                    <div class="d-flex flex-aligns-center pe-10 pe-lg-20">--}}
{{--                                        <!--begin::Icon-->--}}
{{--                                        <img alt="../../demo3/dist/apps/projects/project.html" class="w-30px me-3" src="{{asset("assets/media/svg/files/doc.svg")}}" />--}}
{{--                                        <!--end::Icon-->--}}
{{--                                        <!--begin::Info-->--}}
{{--                                        <div class="ms-1 fw-semibold">--}}
{{--                                            <!--begin::Desc-->--}}
{{--                                            <a href="#" class="fs-6 text-hover-primary fw-bold">مشتری نتایج تست</a>--}}
{{--                                            <!--end::Desc-->--}}
{{--                                            <!--begin::شماره کارت-->--}}
{{--                                            <div class="text-gray-400">18kb</div>--}}
{{--                                            <!--end::شماره کارت-->--}}
{{--                                        </div>--}}
{{--                                        <!--end::Info-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::item-->--}}
{{--                                    <!--begin::item-->--}}
{{--                                    <div class="d-flex flex-aligns-center">--}}
{{--                                        <!--begin::Icon-->--}}
{{--                                        <img alt="../../demo3/dist/apps/projects/project.html" class="w-30px me-3" src="{{asset("assets/media/svg/files/css.svg")}}" />--}}
{{--                                        <!--end::Icon-->--}}
{{--                                        <!--begin::Info-->--}}
{{--                                        <div class="ms-1 fw-semibold">--}}
{{--                                            <!--begin::Desc-->--}}
{{--                                            <a href="#" class="fs-6 text-hover-primary fw-bold">دارایی، مالیه، سرمایه گذاری گزارشات</a>--}}
{{--                                            <!--end::Desc-->--}}
{{--                                            <!--begin::شماره کارت-->--}}
{{--                                            <div class="text-gray-400">20mb</div>--}}
{{--                                            <!--end::شماره کارت-->--}}
{{--                                        </div>--}}
{{--                                        <!--end::Icon-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::item-->--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!--end::timeline details-->--}}
{{--                        </div>--}}
{{--                        <!--end::timeline content-->--}}
{{--                    </div>--}}
{{--                    <!--end::timeline item-->--}}
{{--                    <!--begin::timeline item-->--}}
{{--                    <div class="timeline-item">--}}
{{--                        <!--begin::timeline line-->--}}
{{--                        <div class="timeline-line w-40px"></div>--}}
{{--                        <!--end::timeline line-->--}}
{{--                        <!--begin::timeline icon-->--}}
{{--                        <div class="timeline-icon symbol symbol-circle symbol-40px">--}}
{{--                            <div class="symbol-label bg-light">--}}
{{--                                <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">--}}
{{--                                    <span class="path1"></span>--}}
{{--                                    <span class="path2"></span>--}}
{{--                                </i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--end::timeline icon-->--}}
{{--                        <!--begin::timeline content-->--}}
{{--                        <div class="timeline-content mb-10 mt-n1">--}}
{{--                            <!--begin::timeline heading-->--}}
{{--                            <div class="pe-3 mb-5">--}}
{{--                                <!--begin::Title-->--}}
{{--                                <div class="fs-5 fw-semibold mb-2">وظیفه--}}
{{--                                    <a href="#" class="text-primary fw-bold me-1">#45890</a>ادغام با--}}
{{--                                    <a href="#" class="text-primary fw-bold me-1">#45890</a>داشبورد پروژه ها:</div>--}}
{{--                                <!--end::Title-->--}}
{{--                                <!--begin::توضیحات-->--}}
{{--                                <div class="d-flex align-items-center mt-1 fs-6">--}}
{{--                                    <!--begin::Info-->--}}
{{--                                    <div class="text-muted me-2 fs-7">آغاز شده در 4:23 بعد از ظهر توسط</div>--}}
{{--                                    <!--end::Info-->--}}
{{--                                    <!--begin::user-->--}}
{{--                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">--}}
{{--                                        <img src="{{asset("assets/media/avatars/300-14.jpg")}}" alt="img" />--}}
{{--                                    </div>--}}
{{--                                    <!--end::user-->--}}
{{--                                </div>--}}
{{--                                <!--end::توضیحات-->--}}
{{--                            </div>--}}
{{--                            <!--end::timeline heading-->--}}
{{--                        </div>--}}
{{--                        <!--end::timeline content-->--}}
{{--                    </div>--}}
{{--                    <!--end::timeline item-->--}}
{{--                    <!--begin::timeline item-->--}}
{{--                    <div class="timeline-item">--}}
{{--                        <!--begin::timeline line-->--}}
{{--                        <div class="timeline-line w-40px"></div>--}}
{{--                        <!--end::timeline line-->--}}
{{--                        <!--begin::timeline icon-->--}}
{{--                        <div class="timeline-icon symbol symbol-circle symbol-40px">--}}
{{--                            <div class="symbol-label bg-light">--}}
{{--                                <i class="ki-duotone ki-pencil fs-2 text-gray-500">--}}
{{--                                    <span class="path1"></span>--}}
{{--                                    <span class="path2"></span>--}}
{{--                                </i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--end::timeline icon-->--}}
{{--                        <!--begin::timeline content-->--}}
{{--                        <div class="timeline-content mb-10 mt-n1">--}}
{{--                            <!--begin::timeline heading-->--}}
{{--                            <div class="pe-3 mb-5">--}}
{{--                                <!--begin::Title-->--}}
{{--                                <div class="fs-5 fw-semibold mb-2">3 مفهوم جدید طراحی برنامه اضافه شده است:</div>--}}
{{--                                <!--end::Title-->--}}
{{--                                <!--begin::توضیحات-->--}}
{{--                                <div class="d-flex align-items-center mt-1 fs-6">--}}
{{--                                    <!--begin::Info-->--}}
{{--                                    <div class="text-muted me-2 fs-7">ایجاد شده در 4:23 بعد از ظهر توسط</div>--}}
{{--                                    <!--end::Info-->--}}
{{--                                    <!--begin::user-->--}}
{{--                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">--}}
{{--                                        <img src="{{asset("assets/media/avatars/300-2.jpg")}}" alt="img" />--}}
{{--                                    </div>--}}
{{--                                    <!--end::user-->--}}
{{--                                </div>--}}
{{--                                <!--end::توضیحات-->--}}
{{--                            </div>--}}
{{--                            <!--end::timeline heading-->--}}
{{--                            <!--begin::timeline details-->--}}
{{--                            <div class="overflow-auto pb-5">--}}
{{--                                <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">--}}
{{--                                    <!--begin::item-->--}}
{{--                                    <div class="overlay me-10">--}}
{{--                                        <!--begin::Image-->--}}
{{--                                        <div class="overlay-wrapper">--}}
{{--                                            <img alt="img" class="rounded w-150px" src="{{asset("assets/media/stock/600x400/img-29.jpg")}}" />--}}
{{--                                        </div>--}}
{{--                                        <!--end::Image-->--}}
{{--                                        <!--begin::Link-->--}}
{{--                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">--}}
{{--                                            <a href="#" class="btn btn-sm btn-primary btn-shadow">کاوش کنید</a>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Link-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::item-->--}}
{{--                                    <!--begin::item-->--}}
{{--                                    <div class="overlay me-10">--}}
{{--                                        <!--begin::Image-->--}}
{{--                                        <div class="overlay-wrapper">--}}
{{--                                            <img alt="img" class="rounded w-150px" src="{{asset("assets/media/stock/600x400/img-31.jpg")}}" />--}}
{{--                                        </div>--}}
{{--                                        <!--end::Image-->--}}
{{--                                        <!--begin::Link-->--}}
{{--                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">--}}
{{--                                            <a href="#" class="btn btn-sm btn-primary btn-shadow">کاوش کنید</a>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Link-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::item-->--}}
{{--                                    <!--begin::item-->--}}
{{--                                    <div class="overlay">--}}
{{--                                        <!--begin::Image-->--}}
{{--                                        <div class="overlay-wrapper">--}}
{{--                                            <img alt="img" class="rounded w-150px" src="{{asset("assets/media/stock/600x400/img-40.jpg")}}" />--}}
{{--                                        </div>--}}
{{--                                        <!--end::Image-->--}}
{{--                                        <!--begin::Link-->--}}
{{--                                        <div class="overlay-layer bg-dark bg-opacity-10 rounded">--}}
{{--                                            <a href="#" class="btn btn-sm btn-primary btn-shadow">کاوش کنید</a>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Link-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::item-->--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!--end::timeline details-->--}}
{{--                        </div>--}}
{{--                        <!--end::timeline content-->--}}
{{--                    </div>--}}
{{--                    <!--end::timeline item-->--}}
{{--                    <!--begin::timeline item-->--}}
{{--                    <div class="timeline-item">--}}
{{--                        <!--begin::timeline line-->--}}
{{--                        <div class="timeline-line w-40px"></div>--}}
{{--                        <!--end::timeline line-->--}}
{{--                        <!--begin::timeline icon-->--}}
{{--                        <div class="timeline-icon symbol symbol-circle symbol-40px">--}}
{{--                            <div class="symbol-label bg-light">--}}
{{--                                <i class="ki-duotone ki-sms fs-2 text-gray-500">--}}
{{--                                    <span class="path1"></span>--}}
{{--                                    <span class="path2"></span>--}}
{{--                                </i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--end::timeline icon-->--}}
{{--                        <!--begin::timeline content-->--}}
{{--                        <div class="timeline-content mb-10 mt-n1">--}}
{{--                            <!--begin::timeline heading-->--}}
{{--                            <div class="pe-3 mb-5">--}}
{{--                                <!--begin::Title-->--}}
{{--                                <div class="fs-5 fw-semibold mb-2">کیس جدید--}}
{{--                                    <a href="#" class="text-primary fw-bold me-1">#67890</a>در پروژه چند پلتفرمی دیتابیس دیزاین به شما واگذار شده است</div>--}}
{{--                                <!--end::Title-->--}}
{{--                                <!--begin::توضیحات-->--}}
{{--                                <div class="overflow-auto pb-5">--}}
{{--                                    <!--begin::Wrapper-->--}}
{{--                                    <div class="d-flex align-items-center mt-1 fs-6">--}}
{{--                                        <!--begin::Info-->--}}
{{--                                        <div class="text-muted me-2 fs-7">اضافه شده در ساعت 4:12</div>--}}
{{--                                        <!--end::Info-->--}}
{{--                                        <!--begin::user-->--}}
{{--                                        <a href="#" class="text-primary fw-bold me-1">رضا علی ابادی</a>--}}
{{--                                        <!--end::user-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Wrapper-->--}}
{{--                                </div>--}}
{{--                                <!--end::توضیحات-->--}}
{{--                            </div>--}}
{{--                            <!--end::timeline heading-->--}}
{{--                        </div>--}}
{{--                        <!--end::timeline content-->--}}
{{--                    </div>--}}
{{--                    <!--end::timeline item-->--}}
{{--                    <!--begin::timeline item-->--}}
{{--                    <div class="timeline-item">--}}
{{--                        <!--begin::timeline line-->--}}
{{--                        <div class="timeline-line w-40px"></div>--}}
{{--                        <!--end::timeline line-->--}}
{{--                        <!--begin::timeline icon-->--}}
{{--                        <div class="timeline-icon symbol symbol-circle symbol-40px">--}}
{{--                            <div class="symbol-label bg-light">--}}
{{--                                <i class="ki-duotone ki-pencil fs-2 text-gray-500">--}}
{{--                                    <span class="path1"></span>--}}
{{--                                    <span class="path2"></span>--}}
{{--                                </i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--end::timeline icon-->--}}
{{--                        <!--begin::timeline content-->--}}
{{--                        <div class="timeline-content mb-10 mt-n1">--}}
{{--                            <!--begin::timeline heading-->--}}
{{--                            <div class="pe-3 mb-5">--}}
{{--                                <!--begin::Title-->--}}
{{--                                <div class="fs-5 fw-semibold mb-2">رسید به دست شما سفارش جدید</div>--}}
{{--                                <!--end::Title-->--}}
{{--                                <!--begin::توضیحات-->--}}
{{--                                <div class="d-flex align-items-center mt-1 fs-6">--}}
{{--                                    <!--begin::Info-->--}}
{{--                                    <div class="text-muted me-2 fs-7">در 5:05 صبح توسط</div>--}}
{{--                                    <!--end::Info-->--}}
{{--                                    <!--begin::user-->--}}
{{--                                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">--}}
{{--                                        <img src="{{asset("assets/media/avatars/300-4.jpg")}}" alt="img" />--}}
{{--                                    </div>--}}
{{--                                    <!--end::user-->--}}
{{--                                </div>--}}
{{--                                <!--end::توضیحات-->--}}
{{--                            </div>--}}
{{--                            <!--end::timeline heading-->--}}
{{--                            <!--begin::timeline details-->--}}
{{--                            <div class="overflow-auto pb-5">--}}
{{--                                <!--begin::Notice-->--}}
{{--                                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">--}}
{{--                                    <!--begin::Icon-->--}}
{{--                                    <i class="ki-duotone ki-devices-2 fs-2tx text-primary me-4">--}}
{{--                                        <span class="path1"></span>--}}
{{--                                        <span class="path2"></span>--}}
{{--                                        <span class="path3"></span>--}}
{{--                                    </i>--}}
{{--                                    <!--end::Icon-->--}}
{{--                                    <!--begin::Wrapper-->--}}
{{--                                    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">--}}
{{--                                        <!--begin::Content-->--}}
{{--                                        <div class="mb-3 mb-md-0 fw-semibold">--}}
{{--                                            <h4 class="text-gray-900 fw-bold">پردازش دیتابی کامل شد</h4>--}}
{{--                                            <div class="fs-6 text-gray-700 pe-7">وارد ادمین داشبورد شوید تا مطمئن شوید که یکپارچگی داده ها موفق است</div>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Content-->--}}
{{--                                        <!--begin::Actions-->--}}
{{--                                        <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">پردازش</a>--}}
{{--                                        <!--end::Actions-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Wrapper-->--}}
{{--                                </div>--}}
{{--                                <!--end::Notice-->--}}
{{--                            </div>--}}
{{--                            <!--end::timeline details-->--}}
{{--                        </div>--}}
{{--                        <!--end::timeline content-->--}}
{{--                    </div>--}}
{{--                    <!--end::timeline item-->--}}
{{--                    <!--begin::timeline item-->--}}
{{--                    <div class="timeline-item">--}}
{{--                        <!--begin::timeline line-->--}}
{{--                        <div class="timeline-line w-40px"></div>--}}
{{--                        <!--end::timeline line-->--}}
{{--                        <!--begin::timeline icon-->--}}
{{--                        <div class="timeline-icon symbol symbol-circle symbol-40px">--}}
{{--                            <div class="symbol-label bg-light">--}}
{{--                                <i class="ki-duotone ki-basket fs-2 text-gray-500">--}}
{{--                                    <span class="path1"></span>--}}
{{--                                    <span class="path2"></span>--}}
{{--                                    <span class="path3"></span>--}}
{{--                                    <span class="path4"></span>--}}
{{--                                </i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--end::timeline icon-->--}}
{{--                        <!--begin::timeline content-->--}}
{{--                        <div class="timeline-content mt-n1">--}}
{{--                            <!--begin::timeline heading-->--}}
{{--                            <div class="pe-3 mb-5">--}}
{{--                                <!--begin::Title-->--}}
{{--                                <div class="fs-5 fw-semibold mb-2">سفارش جدید--}}
{{--                                    <a href="#" class="text-primary fw-bold me-1">#67890</a>برای برنامه ریزی کارگاه و برآورد بودجه قرار داده شده است</div>--}}
{{--                                <!--end::Title-->--}}
{{--                                <!--begin::توضیحات-->--}}
{{--                                <div class="d-flex align-items-center mt-1 fs-6">--}}
{{--                                    <!--begin::Info-->--}}
{{--                                    <div class="text-muted me-2 fs-7">در ساعت 4:23 بعد از ظهر توسط</div>--}}
{{--                                    <!--end::Info-->--}}
{{--                                    <!--begin::user-->--}}
{{--                                    <a href="#" class="text-primary fw-bold me-1">محسن علی ابادی</a>--}}
{{--                                    <!--end::user-->--}}
{{--                                </div>--}}
{{--                                <!--end::توضیحات-->--}}
{{--                            </div>--}}
{{--                            <!--end::timeline heading-->--}}
{{--                        </div>--}}
{{--                        <!--end::timeline content-->--}}
{{--                    </div>--}}
{{--                    <!--end::timeline item-->--}}
{{--                </div>--}}
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

<livewire:manage-chat.chat-list-component/>
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
<script src="{{asset("assets/plugins/global/plugins.bundle.js")}}"></script>
<script src="{{asset("assets/js/scripts.bundle.js")}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{asset("assets/plugins/custom/fullcalendar/fullcalendar.bundle.js")}}"></script>
<script src="{{asset("assets/plugins/custom/datatables/datatables.bundle.js")}}"></script>
<!--end::Vendors Javascript-->
<!--begin::سفارشی Javascript(used for this page only)-->
<script src="{{asset("assets/js/widgets.bundle.js")}}"></script>
<script src="{{asset("assets/js/custom/widgets.js")}}"></script>
<script src="{{asset("assets/js/custom/apps/chat/chat.js")}}"></script>
<script src="{{asset("assets/js/custom/utilities/modals/users-search.js")}}"></script>
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

@stack('scripts')
</body>
<!--end::Body-->

<!-- Mirrored from metronictheme.job100.ir/rtl/metronic8/demo3/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Dec 2023 15:23:06 GMT -->
</html>
