,<div id="kt_header" class="header mt-0 mt-lg-0 pt-lg-0" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{lg: '300px'}">
    <!--begin::Container-->
    <div class="container d-flex flex-stack flex-wrap gap-4" id="kt_header_container">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-10 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
            <!--begin::Heading-->
            <h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">سلام {{\Illuminate\Support\Facades\Auth::user()->name}}
                <small class="text-muted fs-6 fw-semibold pt-1"> {{\Illuminate\Support\Facades\Auth::user()->username}} </small></h1>
            <!--end::Heading-->
        </div>
        <!--end::Page title=-->
        <!--begin::Wrapper-->
        <div class="d-flex d-lg-none align-items-center ms-n3 me-2">
            <!--begin::کناری mobile toggle-->
            <div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
                <i class="ki-duotone ki-abstract-14 fs-1 mt-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </div>
            <!--end::کناری mobile toggle-->
            <!--begin::Logo-->
            <a href="index.html" class="d-flex align-items-center">
                <h2 class="logo theme-light-show">آسو</h2>
                <h2 class="logo theme-dark-show">آسو</h2>

            </a>
            <!--end::Logo-->
        </div>
        <!--end::Wrapper-->
        <!--begin::بالاbar-->
        <div class="d-flex align-items-center flex-shrink-0 mb-0 mb-lg-0">
           
            <!--begin::فعالیتها-->
            <!--<div class="d-flex align-items-center ms-3 ms-lg-4">-->
                <!--begin::کشو toggle-->
            <!--    <div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline w-40px h-40px" id="kt_activities_toggle">-->
            <!--        <i class="ki-duotone ki-notification-bing fs-1">-->
            <!--            <span class="path1"></span>-->
            <!--            <span class="path2"></span>-->
            <!--            <span class="path3"></span>-->
            <!--        </i>-->
            <!--    </div>-->
                <!--end::کشو toggle-->
            <!--</div>-->
            <!--end::فعالیتها-->
            <!--begin::چت-->
<?php
    $chatCount = App\Models\Chat::with('messages')
                ->whereUserId(Auth::user()->id)
                ->whereHas('messages', function ($query) {
                    $query->where('status', 'waiting')->where('role', 'support');
                })
                ->count();
?>
            <div class="d-flex align-items-center ms-3 ms-lg-4">
                <!--begin::کشو wrapper-->
                <div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline w-40px h-40px position-relative" id="kt_drawer_chat_toggle">
                    <i class="ki-duotone ki-message-text-2 fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                    </i>
                    <!--begin::Bullet-->
                    @if($chatCount > 0)<span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>@endif
                    <!--end::Bullet-->
                </div>
                <!--end::کشو wrapper-->
            </div>
            <!--end::چت-->
            <!--begin::Theme mode-->
            <div class="d-flex align-items-center ms-3 ms-lg-4">
                <!--begin::Menu toggle-->
                <a href="#" class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline w-40px h-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-night-day theme-light-show fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                        <span class="path5"></span>
                        <span class="path6"></span>
                        <span class="path7"></span>
                        <span class="path8"></span>
                        <span class="path9"></span>
                        <span class="path10"></span>
                    </i>
                    <i class="ki-duotone ki-moon theme-dark-show fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </a>
                <!--begin::Menu toggle-->
                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-night-day fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
														<span class="path5"></span>
														<span class="path6"></span>
														<span class="path7"></span>
														<span class="path8"></span>
														<span class="path9"></span>
														<span class="path10"></span>
													</i>
												</span>
                            <span class="menu-title">روشن</span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-moon fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span>
                            <span class="menu-title">تیره</span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-screen fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
													</i>
												</span>
                            <span class="menu-title">سیستم</span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Theme mode-->

        </div>
        <!--end::بالاbar-->
    </div>
    <!--end::Container-->
</div>
