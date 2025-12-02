<div id="kt_aside" class="aside py-9" data-kt-drawer="true" data-kt-drawer-name="aside"
     data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
     data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
     data-kt-drawer-toggle="#kt_aside_toggle">
    <!--begin::Brand-->
    <div class="aside-logo flex-column-auto px-9 mb-9" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="/">
            <h2 class="logo theme-light-show">اتوماسیون اداری آسو</h2>
            <h2 class="logo theme-dark-show">اتوماسیون اداری آسو</h2>
        </a>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->
    <!--begin::کناری menu-->
    <div class="aside-menu flex-column-fluid ps-5 pe-3 mb-9" id="kt_aside_menu">
        <!--begin::کناری Menu-->


        <div class="w-100 hover-scroll-overlay-y d-flex pe-3" id="kt_aside_menu_wrapper" data-kt-scroll="true"
             data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
             data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
             data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu, #kt_aside_menu_wrapper" data-kt-scroll-offset="100">
            <!--begin::Menu-->
            <div class="menu menu-column menu-rounded menu-sub-indention menu-active-bg fw-semibold my-auto"
                 id="#kt_aside_menu"
                 data-kt-menu="true">
                <!--begin:Menu item-->
                <div class="menu-item  @if(Request::segment(2) == "dashboard") here active @endif menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                <span class="menu-icon">
                       <i class="ki-duotone ki-black-left fs-2"></i>
                    </span>

                    <a href="{{route('dashboard')}}" class="menu-title"
                       @if(Request::segment(2) == "dashboard") style=" font-weight: bold" @endif>
                        داشبورد
                    </a>
                    <span>
                        @if(Request::segment(2) == "dashboard")
                            <i class="fa fa-circle" style="color: #50cd89; font-size: 10px"></i>
                        @else
                            <i class="fa fa-chevron-left" style="font-size: 10px"></i>
                        @endif
                    </span>
                </span>
                    <!--end:Menu link-->

                </div>
                <!--end:Menu item-->

                @if(\Illuminate\Support\Facades\Auth::user()->level == "admin")
                    <!--begin:Menu item-->
                    <div class="menu-item  @if(Request::segment(2) == "categories") here active @endif menu-accordion">
                        <!--begin:Menu link-->
                <span class="menu-link">
                    <span class="menu-icon">
                       <i class="ki-duotone ki-black-left fs-2"></i>
                    </span>

                    <a href="{{route('categories')}}" class="menu-title"
                       @if(Request::segment(2) == "categories") style=" font-weight: bold" @endif>
                        بخش های اصلی
                    </a>
                    <span>
                        @if(Request::segment(2) == "categories")
                            <i class="fa fa-circle" style="color: #50cd89; font-size: 10px"></i>
                        @else
                            <i class="fa fa-chevron-left" style="font-size: 10px"></i>
                        @endif
                    </span>
                </span>
                        <!--end:Menu link-->
                    </div>
        
                     <!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
						<span class="menu-icon">
							<i class="ki-duotone ki-black-left fs-2"></i>
						</span>
						<span class="menu-title" @if(Request::segment(2) == "contactUs" or Request::segment(2) == "chats") style=" color: black;font-weight: bold" @endif >پشتیبانی</span>
						<span class="menu-arrow" style="overflow:unset">
						    @if(Request::segment(2) == "contactUs" or Request::segment(2) == "chats")
                                    <i class="fa fa-circle" style="color: #50cd89; font-size: 10px"></i>
                            @else
						            <i class="fa fa-chevron-left" style="font-size: 10px"></i>
                            @endif
						</span>
					</span>
					<div class="menu-sub menu-sub-accordion" kt-hidden-height="121" style="display: none; overflow: hidden;">
					    <div class="menu-item">
							<!--begin:Menu link-->
							<a class="menu-link " href="{{route('contactUs')}}">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">تماس با ما</span>
							</a>
							<!--end:Menu link-->
						</div>
						<div class="menu-item">
							<!--begin:Menu link-->
							<a class="menu-link " href="{{route('chats')}}">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">چت ها</span>
							</a>
							<!--end:Menu link-->
						</div>
					</div>
                </div>
                <!--end:Menu item-->

                @endif




                <!--begin:Menu item-->
                <div
                    class="menu-item  @if(Request::segment(2) == "meetings" ||Request::segment(2) == "mosavabat") here active @endif menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                <span class="menu-icon">
                    <i class="ki-duotone ki-black-left fs-2"></i>
                </span>
                <a href="{{route('meetings')}}" class="menu-title"
                   @if(Request::segment(2) == "meetings"||Request::segment(2) == "mosavabat") style=" font-weight: bold" @endif>جلسات</a>
                <span>
                     @if(Request::segment(2) == "meetings"||Request::segment(2) == "mosavabat")
                        <i class="fa fa-circle" style="color: #50cd89; font-size: 10px"></i>
                    @else
                        <i class="fa fa-chevron-left" style="font-size: 10px"></i>
                    @endif
                </span>
            </span>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                @if (\Illuminate\Support\Facades\Auth::user()->accesses->user_access)

                    <!--begin:Menu item-->
                    <div class="menu-item  @if(Request::segment(2) == "users" ) here active @endif menu-accordion">
                        <!--begin:Menu link-->
                        <span class="menu-link">
                <span class="menu-icon">
                    <i class="ki-duotone ki-black-left fs-2"></i>
                </span>
                <a href="{{route('users')}}" class="menu-title"
                   @if(Request::segment(2) == "users") style=" font-weight: bold" @endif>کاربران</a>
                <span>
                     @if(Request::segment(2) == "users")
                        <i class="fa fa-circle" style="color: #50cd89; font-size: 10px"></i>
                    @else
                        <i class="fa fa-chevron-left" style="font-size: 10px"></i>
                    @endif
                </span>
            </span>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                @endif

                    <!--begin:Menu item-->
                    <div class="menu-item  @if(Request::segment(2) == "projects" ) here active @endif menu-accordion">
                        <!--begin:Menu link-->
                        <span class="menu-link">
                <span class="menu-icon">
                    <i class="ki-duotone ki-black-left fs-2"></i>
                </span>
                <a href="{{route('projects')}}" class="menu-title"
                   @if(Request::segment(2) == "projects") style=" font-weight: bold" @endif>پروژه ها</a>
                <span>
                     @if(Request::segment(2) == "projects")
                        <i class="fa fa-circle" style="color: #50cd89; font-size: 10px"></i>
                    @else
                        <i class="fa fa-chevron-left" style="font-size: 10px"></i>
                    @endif
                </span>
            </span>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->




                <!--begin:Menu item-->
                <div class="menu-item  @if(Request::segment(2) == "tasks" ) here active @endif menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                <span class="menu-icon">
                    <i class="ki-duotone ki-black-left fs-2"></i>
                </span>
                <a href="{{route('tasks')}}" class="menu-title"
                   @if(Request::segment(2) == "tasks") style=" font-weight: bold" @endif>وظیفه ها</a>
                <span>
                     @if(Request::segment(2) == "tasks")
                        <i class="fa fa-circle" style="color: #50cd89; font-size: 10px"></i>
                    @else
                        <i class="fa fa-chevron-left" style="font-size: 10px"></i>
                    @endif
                </span>
            </span>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item  @if(Request::segment(2) == "reports" ) here active @endif menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                <span class="menu-icon">
                    <i class="ki-duotone ki-black-left fs-2"></i>
                </span>
                <a href="{{route('reports')}}" class="menu-title"
                   @if(Request::segment(2) == "reports") style=" font-weight: bold" @endif>گزارش کارها</a>
                <span>
                     @if(Request::segment(2) == "reports")
                        <i class="fa fa-circle" style="color: #50cd89; font-size: 10px"></i>
                    @else
                        <i class="fa fa-chevron-left" style="font-size: 10px"></i>
                    @endif
                </span>
            </span>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                @if (\Illuminate\Support\Facades\Auth::user()->accesses->management_news_access or \Illuminate\Support\Facades\Auth::user()->accesses->my_news_access)
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-black-left fs-2"></i>
                            </span>
                            <span class="menu-title" @if(Request::segment(2) == "managementNewsMenu" or Request::segment(2) == "myNewsMenu") style=" color: black;font-weight: bold" @endif >رصد اخبار</span>
                            <span class="menu-arrow" style="overflow:unset">
                                @if(Request::segment(2) == "managementNewsMenu" or Request::segment(2) == "myNewsMenu")
                                        <i class="fa fa-circle" style="color: #50cd89; font-size: 10px"></i>
                                @else
                                        <i class="fa fa-chevron-left" style="font-size: 10px"></i>
                                @endif
                            </span>
                        </span>
                        <div class="menu-sub menu-sub-accordion" kt-hidden-height="121" style="display: none; overflow: hidden;">
                            @if (\Illuminate\Support\Facades\Auth::user()->accesses->management_news_access) 
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link " href="{{route('managementNewsMenu')}}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">مدیریت رصدها</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            @endif
                            @if (\Illuminate\Support\Facades\Auth::user()->accesses->my_news_access)
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link " href="{{route('myNewsMenu')}}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">رصدهای من</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            @endif
                        </div>
                    </div>
                    <!--end:Menu item-->
                @endif
            </div>
            <!--end::Menu-->
        </div>
        <!--end::کناری Menu-->
    </div>
    <!--end::کناری menu-->
    <!--begin::Footer-->
    <div class="aside-footer flex-column-auto px-9" id="kt_aside_footer">
        <!--begin::کاربر panel-->
        <div class="d-flex flex-stack">
            <!--begin::Wrapper-->
            <div class="d-flex align-items-center">
                <!--begin::Avatar-->
                <div class="symbol symbol-circle symbol-40px">
                    <img
                        src="@if(\Illuminate\Support\Facades\Auth::user()->avatar) {{asset("storage/images/users/avatar")}}/{{\Illuminate\Support\Facades\Auth::user()->avatar}} @else {{asset("assets/media/avatars/blank.png")}} @endif"
                        alt="photo"/>
                </div>
                <!--end::Avatar-->
                <!--begin::کاربر info-->
                <div class="ms-2">
                    <!--begin::نام-->
                    <a href="#"
                       class="text-gray-800 text-hover-primary fs-6 fw-bold lh-1">{{\Illuminate\Support\Facades\Auth::user()->name  }} {{\Illuminate\Support\Facades\Auth::user()->family}}</a>
                    <!--end::نام-->
                    <!--begin::Major-->
                    <span
                        class="text-muted fw-semibold d-block fs-7 lh-1">{{\Illuminate\Support\Facades\Auth::user()->description}}</span>
                    <!--end::Major-->
                </div>
                <!--end::کاربر info-->
            </div>
            <!--end::Wrapper-->
            <!--begin::کاربر menu-->
            <div class="ms-1">
                <div class="btn btn-sm btn-icon btn-active-color-primary position-relative me-n2"
                     data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-overflow="true"
                     data-kt-menu-placement="top-end">
                    <i class="ki-duotone ki-setting-2 fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--begin::کاربر account menu-->
                <div
                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                    data-kt-menu="true">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <div class="menu-content d-flex align-items-center px-3">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px me-5">
                                <img
                                    src="@if(\Illuminate\Support\Facades\Auth::user()->avatar) {{asset("storage/images/users/avatar")}}/{{\Illuminate\Support\Facades\Auth::user()->avatar}} @else {{asset("assets/media/avatars/blank.png")}} @endif   "
                                    alt="photo"/>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::کاربرname-->
                            <div class="d-flex flex-column">
                                <div
                                    class="fw-bold d-flex align-items-center fs-5">{{\Illuminate\Support\Facades\Auth::user()->family}}
                                    {{--                                    <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">حرفه ای</span>--}}
                                </div>
                                <a href="#"
                                   class="fw-semibold text-muted text-hover-primary fs-7">{{\Illuminate\Support\Facades\Auth::user()->username}}</a>
                            </div>
                            <!--end::کاربرname-->
                        </div>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu separator-->
                    <div class="separator my-2"></div>
                    <!--end::Menu separator-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                        <a href="/admin/profile/{{\Illuminate\Support\Facades\Auth::user()->id}}"
                           class="menu-link px-5">@if(Request::segment(2) == "users" )
                                <i class="fa fa-circle text-success"
                                   style="color: #50cd89; font-size: 10px; margin-left: 5px"></i>
                            @endif پروفایل من</a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
           <!--         <div class="menu-item px-5">-->
           <!--             <a href="{{route('projects')}}" class="menu-link px-5">-->
           <!--                 <span class="menu-text">پروژه های من</span>-->
           <!--                 <span class="menu-badge">-->
											<!--	<span-->
           <!--                                         class="badge badge-light-danger badge-circle fw-bold fs-7"></span>-->
											<!--</span>-->
           <!--             </a>-->
           <!--         </div>-->
                    <!--end::Menu item-->
                    <!--begin::Menu item-->

                    <!--begin::Menu separator-->
                    <div class="separator my-2"></div>
                    <!--end::Menu separator-->

                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                        <a href="{{route('logout')}}" class="menu-link px-5">خروج</a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::کاربر account menu-->
            </div>
            <!--end::کاربر menu-->
        </div>
        <!--end::کاربر panel-->
    </div>
    <!--end::Footer-->
</div>




