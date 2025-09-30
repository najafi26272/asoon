<div class="card mb-5 mb-xl-10">
    <!--begin::کارت header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
         data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <!--begin::کارت title-->
        <div class="card-title m-0">
            <h3 class="fw-bold m-0">ویرایش پروفایل </h3>
        </div>
        <!--end::کارت title-->
    </div>
    <!--begin::کارت header-->
    <!--begin::Content-->
    <div id="kt_account_settings_profile_details" class="collapse show">
        <!--begin::Form-->
        <form wire:submit.prevent="submit" id="kt_account_profile_details_form"
              class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
            <!--begin::کارت body-->
            <div class="card-body border-top p-9">
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Tags-->
                    <label class="col-lg-4 col-form-label fw-semibold fs-6">آواتار</label>
                    <!--end::Tags-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Image input-->
                        <div wire:ignore.selfe class="image-input image-input-outline" data-kt-image-input="true"
                             style="background-image: url({{asset('assets/media/svg/avatars/blank.svg')}})">
                            <!--begin::نمایش existing avatar-->
                            <div class="image-input-wrapper w-125px h-125px"
                                 style="background-image: url( @if($image) {{asset("storage/images/users/avatar")}}/{{$image}} @else {{asset("assets/media/svg/avatars/blank.svg")}} @endif       )"></div>
                            <!--end::نمایش existing avatar-->
                            <!--begin::Tags-->
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                   data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                   aria-label="تعویض آواتار" data-bs-original-title="تعویض آواتار"
                                   data-kt-initialized="1">
                                <i class="ki-duotone ki-pencil fs-7">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <!--begin::Inputs-->
                                <input type="file" wire:model="newImage" accept=".png, .jpg, .jpeg">
                                <input type="hidden" name="avatar_remove">
                                <!--end::Inputs-->
                            </label>
                            <!--end::Tags-->
                            {{--                            <!--begin::انصراف-->--}}
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                  data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                  aria-label="انصراف avatar" data-bs-original-title="انصراف avatar"
                                  data-kt-initialized="1">
															<i class="ki-duotone ki-cross fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
                            <!--end::انصراف-->
                            <!--begin::حذف-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                  data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="حذف آواتار"
                                  data-bs-original-title="حذف آواتار" data-kt-initialized="1">
															<i class="ki-duotone ki-cross fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
                            {{--                            <!--end::حذف-->--}}
                        </div>
                        <!--end::Image input-->
                        <!--begin::Hint-->
                        <div class="form-text">فرمت ها قابل قبول: png, jpg, jpeg.</div>
                        <!--end::Hint-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Tags-->
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">نام و نام خانوادگی</label>
                    <!--end::Tags-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                <input type="text" wire:model.debounce.1500="name"
                                       class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                       placeholder="نام">
                                @error('name')
                                <div id="defaultFormControlHelp" class="form-text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>

                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                <input type="text" wire:model.debounce.1500="family"
                                       class="form-control form-control-lg form-control-solid"
                                       placeholder="نام خانوادگی">
                                @error('family')
                                <div id="defaultFormControlHelp" class="form-text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>


                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Tags-->
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">نام کاربری</label>
                    <!--end::Tags-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <input type="text" wire:model.debounce.1500="username"
                               class="form-control form-control-lg form-control-solid"
                               placeholder="نام کاربری">
                        @error('username')
                        <div id="defaultFormControlHelp" class="form-text text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                        <div
                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Tags-->
                    <label class="col-lg-4 col-form-label fw-semibold fs-6">توضیحات</label>
                    <!--end::Tags-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <input type="text" wire:model.debounce.1500="description"
                               class="form-control form-control-lg form-control-solid"
                               placeholder="مثال : مسئول بخش فناوری اطلاعات">
                        @error('description')
                        <div id="defaultFormControlHelp" class="form-text text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                        <div
                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->


                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Tags-->
                    <label class="col-lg-4 col-form-label fw-semibold fs-6">شماره موبایل و ایمیل</label>
                    <!--end::Tags-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                <input type="text" wire:model.debounce.1500="mobile"
                                       class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                       placeholder="شماره موبایل">
                                @error('mobile')
                                <div id="defaultFormControlHelp" class="form-text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                <input type="text" wire:model.debounce.1500="email"
                                       class="form-control form-control-lg form-control-solid"
                                       placeholder="آدرس ایمیل">
                                @error('email')
                                <div id="defaultFormControlHelp" class="form-text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->


                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Tags-->
                    <label class="col-lg-4 col-form-label fw-semibold fs-6">کد ملی و شماره پرسنلی</label>
                    <!--end::Tags-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                <input disabled value="{{$nationalCode}}"
                                       class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                       placeholder="کدملی">
                                @error('nationalCode')
                                <div id="defaultFormControlHelp" class="form-text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                <input type="text"  disabled
                                       class="form-control form-control-lg form-control-solid"
                                       placeholder="کدکارمندی" autofocus="false" autocomplete="false">
                                @error('employeeCode')
                                <div id="defaultFormControlHelp" class="form-text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->


                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Tags-->
                    <label class=" col-lg-4 col-form-label fw-semibold fs-6">رمز عبور</label>
                    <!--end::Tags-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                <input type="password" wire:model="password"
                                       class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                       placeholder="رمز عبور">
                                @error('password')
                                <div id="defaultFormControlHelp" class="form-text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                <input type="password" wire:model="rePassword"
                                       class="form-control form-control-lg form-control-solid"
                                       placeholder="تکرار رمز عبور">
                                @error('rePassword')
                                <div id="defaultFormControlHelp" class="form-text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                {{--                <div class="row mb-6">--}}
                {{--                    <!--begin::Tags-->--}}
                {{--                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">نقش کارمندی</label>--}}
                {{--                    <!--end::Tags-->--}}
                {{--                    <!--begin::Col-->--}}
                {{--                    <div class="col-lg-8 fv-row fv-plugins-icon-container">--}}
                {{--                        <!--begin::Input-->--}}
                {{--                        <select select2="" class="form-select form-select-solid form-select-lg">--}}
                {{--                            <option value="stuff">کارمند</option>--}}
                {{--                            <option value="">سرگروه</option>--}}
                {{--                            <option value="boss">مدیر</option>--}}
                {{--                        </select>--}}
                {{--                        <!--end::Input-->--}}
                {{--                        <!--begin::Hint-->--}}
                {{--                        --}}{{--                                        <div class="form-text">میتوانید بر.</div>--}}
                {{--                        <!--end::Hint-->--}}
                {{--                        <div--}}
                {{--                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>--}}
                {{--                    </div>--}}
                {{--                    <!--end::Col-->--}}
                {{--                </div>--}}
                <!--end::Input group-->
            </div>
            <!--end::کارت body-->
            <!--begin::Actions-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                {{--                <button type="reset" class="btn btn-light btn-active-light-primary me-2">لغو</button>--}}
                <button type="submit" class="btn btn-primary">
                    <span class="indicator-label">ثبت</span>
                    <span wire:loading class="indicator-progress">لطفا صبر کنید...
								<span class="spinner-border spinner-border-sm align-middle ms-2">

                                </span>
                        </span>
                </button>
            </div>
            <!--end::Actions-->
            <input type="hidden"></form>
        <!--end::Form-->
    </div>
    <!--end::Content-->
</div>

