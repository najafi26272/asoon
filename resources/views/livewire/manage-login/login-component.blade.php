<div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">
    <!--begin::Form-->
    <form class="form w-100" wire:submit.prevent="submit" method="POST" >
        <!--begin::Heading-->
        <div class="text-center mb-11">
            <!--begin::Title-->
            <h1 class="text-dark fw-bolder mb-3">ورود</h1>
            <!--end::Title-->
            <!--begin::Subtitle-->
            <div class="text-gray-500 fw-semibold fs-6">نام کاربری و رمز عبور خود را وارد کنید.</div>
            <!--end::Subtitle=-->
        </div>
        <!--begin::Heading-->
        <!--begin::Login options-->
        <div class="row g-3 mb-9">
            <!--begin::Col-->
            {{--                                    <div class="col-md-6">--}}
            {{--                                        <!--begin::گوگل link=-->--}}
            {{--                                        <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">--}}
            {{--                                            <img alt="Logo" src="{{asset("assets/media/svg/brand-logos/google-icon.svg")}}" class="h-15px me-3" />ورود از طریق گوگل</a>--}}
            {{--                                        <!--end::گوگل link=-->--}}
            {{--                                    </div>--}}
            <!--end::Col-->
            <!--begin::Col-->
            {{--                                    <div class="col-md-6">--}}
            {{--                                        <!--begin::گوگل link=-->--}}
            {{--                                        <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">--}}
            {{--                                            <img alt="Logo" src="{{asset("assets/media/svg/brand-logos/apple-black.svg")}}" class="theme-light-show h-15px me-3" />--}}
            {{--                                            <img alt="Logo" src="{{asset("assets/media/svg/brand-logos/apple-black-dark.svg")}}" class="theme-dark-show h-15px me-3" />با اپلیکیشن وارد شوید</a>--}}
            {{--                                        <!--end::گوگل link=-->--}}
            {{--                                    </div>--}}
            <!--end::Col-->
        </div>
        <!--end::Login options-->
        <!--begin::Separator-->
        {{--                                <div class="separator separator-content my-14">--}}
        {{--                                    <span class="w-125px text-gray-500 fw-semibold fs-7">یا با نام کاربری</span>--}}
        {{--                                </div>--}}
        <!--end::Separator-->
        <!--begin::Input group=-->
        <div class="fv-row mb-8">
            <!--begin::نام کاربری-->
            <input type="text" placeholder="نام کاربری" wire:model="data.username" autocomplete="off" class="form-control bg-transparent" />
            <!--end::نام کاربری-->
            @error('data.username')
            <span class="text-danger">
                 {{$message}}
            </span>
            @enderror

        </div>
        <!--end::Input group=-->
        <div class="fv-row mb-3">
            <!--begin::password-->
            <input type="password" wire:model="data.password" placeholder="کلمه عبور" autocomplete="off" class="form-control bg-transparent" />
            @error('data.password')
            <span class="text-danger">
                 {{$message}}
            </span>
            @enderror

            <!--end::password-->
        </div>
        <!--end::Input group=-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
            <div></div>
            <!--begin::Link-->
            <a href="{{route("contact")}}" class="link-primary">فراموشی رمز</a>
            <!--end::Link-->
        </div>
        <!--end::Wrapper-->
        <!--begin::ثبت button-->
        <div class="d-grid mb-10">
            <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                <!--begin::Indicator label-->
                <span class="indicator-label">ورود</span>
                <!--end::Indicator label-->
                <!--begin::Indicator progress-->
                <span wire:loading class="indicator-progress">لطفا صبر کنید...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                <!--end::Indicator progress-->
            </button>
        </div>
        <!--end::ثبت button-->
        <p class="text-danger text-center">{{$errorMessage}}</p>


        <!--begin::ثبت نام-->
        <div class="text-gray-500 text-center fw-semibold fs-6">آیا نمیتوانید وارد شوید؟
            <a href="{{route("contact")}}" class="link-primary">تماس با پشتیبانی</a></div>
        <!--end::ثبت نام-->

    </form>
    <!--end::Form-->
</div>

