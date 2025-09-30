<div wire:ignore.self id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat"
     data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
     data-kt-drawer-width="{default:'300px', 'md': '480px'}" data-kt-drawer-direction="end"
     data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
    <!--begin::Messenger-->
    <div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
        <!--begin::کارت header-->
        <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
            <!--begin::Title-->
            <div class="card-title">
                <!--begin::user-->
                <div class="d-flex justify-content-center flex-column me-3">
                    <a class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">{{\Illuminate\Support\Facades\Auth::user()->name}} {{\Illuminate\Support\Facades\Auth::user()->family}}</a>
                    <!--begin::Info-->
                    <div class="mb-0 lh-1">
                        <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                        <span class="fs-7 fw-semibold text-muted">
                            @if($department == "technical")
                                 چت با پشتیبان فنی
                            @else
                                چت با بخش مدیریت
                            @endif
                        </span>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::user-->
            </div>
            <!--end::Title-->
            <!--begin::کارت toolbar-->
            <div class="card-toolbar">
                <!--begin::Menu-->
                <div class="me-0">
                    <button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-dots-square fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </button>
                    <!--begin::Menu 3-->
                    <div
                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                        data-kt-menu="true" style="">

                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="{{route("contact")}}" class="menu-link flex-stack px-3">پیام ناشناس به مدیر
                                <span class="ms-2" data-bs-toggle="tooltip" aria-label="پیام به مدیر به صورت ناشناس"
                                      data-bs-original-title="پیام به مدیر به صورت ناشناس" data-kt-initialized="1">
										<i class="ki-duotone ki-ghost fs-7">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span></a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">چت با بخش</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a wire:click="changeDepartment('management_part')" class="menu-link px-3">مدیریت
                                        مجموعه</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a wire:click="changeDepartment('technical')" class="menu-link px-3">بخش فنی</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu 3-->
                </div>
                <!--end::Menu-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
                    <i class="ki-duotone ki-cross-square fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::کارت toolbar-->
        </div>
        <!--end::کارت header-->
        <!--begin::کارت body-->
        <div class="card-body" id="kt_drawer_chat_messenger_body">
            <!--begin::پیام ها-->
            <div wire:ignore.self class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true"
                 data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                 data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                 data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px"
                 style="height: 8px;">

                @if(count($chat->messages))
                    @foreach($chat->messages as $msg)

                        @if($msg->role =="support")

                            <!--begin::پیام(in)-->
                            <div class="d-flex justify-content-start mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-start">
                                    <!--begin::user-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            @if($department == "technical")
                                                <img alt="Pic" src="{{asset("assets/media/avatars/support.jpg")}}">
                                            @else
                                                <img alt="Pic" src="{{asset("assets/media/avatars/manager.jpg")}}">
                                            @endif

                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details---->
                                        <div class="ms-3">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">
                                                @if($department == "technical")
                                                    پشتیبان فنی
                                                @else
                                                    مدیریت
                                                @endif


                                            </a>
                                            <span class="text-muted fs-7 mb-1">{{\Morilog\Jalali\Jalalian::forge($msg->created_at)->ago()}}</span>
                                        </div>
                                        <!--end::Details---->
                                    </div>
                                    <!--end::user-->
                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                         data-kt-element="message-text">{{$msg->message}} </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::پیام(in)-->
                        @elseif($msg->role =="user")
                            <!--begin::پیام(out)-->
                            <div class="d-flex justify-content-end mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-end">
                                    <!--begin::user-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Details---->
                                        <div class="me-3">
                                            <span class="text-muted fs-7 mb-1">
                                                {{\Morilog\Jalali\Jalalian::forge($msg->created_at)->ago()}}
                                            </span>
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">شما</a>
                                        </div>
                                        <!--end::Details---->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic"
                                                 src="@if(\Illuminate\Support\Facades\Auth::user()->avatar) {{asset("storage/images/users/avatar")}}/{{\Illuminate\Support\Facades\Auth::user()->avatar}} @else {{asset("assets/media/avatars/blank.png")}} @endif">
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::user-->
                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                         data-kt-element="message-text">{{$msg->message}}</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::پیام(out)-->

                        @endif

                    @endforeach
                @else
                    <div class="text-center">
                        <img width="200" src="{{asset("assets/img/inbox.png")}}">
                        <p class="mt-5" style="color: #499eb1">پیامی یافت نشد.</p>
                    </div>
                @endif

            </div>
            <!--end::پیام ها-->
        </div>
        <!--end::کارت body-->
        <!--begin::کارت footer-->
        <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
            <!--begin::Input-->
            <textarea wire:model="message" class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
                      placeholder="نوشتن پیام"></textarea>
            <!--end::Input-->
            <!--begin:Toolbar-->
            <div class="d-flex flex-stack">
                <!--begin::Actions-->
                <div class="d-flex align-items-center me-2">
                    {{--                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" aria-label="بزودی" data-bs-original-title="بزودی" data-kt-initialized="1">--}}
                    {{--                        <i class="ki-duotone ki-paper-clip fs-3"></i>--}}
                    {{--                    </button>--}}
                    {{--                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" aria-label="بزودی" data-bs-original-title="بزودی" data-kt-initialized="1">--}}
                    {{--                        <i class="ki-duotone ki-cloud-add fs-3">--}}
                    {{--                            <span class="path1"></span>--}}
                    {{--                            <span class="path2"></span>--}}
                    {{--                        </i>--}}
                    {{--                    </button>--}}
                </div>
                <!--end::Actions-->
                <!--begin::ارسال-->
                <button wire:click="sendMessage()" class="btn btn-primary" type="button" data-kt-element="send">ارسال</button>
                <!--end::ارسال-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::کارت footer-->
    </div>
    <!--end::Messenger-->
</div>
