<div class="row">
    <div class="col-6">
        <div class="card mb-5 mb-xl-10">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">بخش های اصلی </span>
                </h3>
            </div>
            <!--end::Header-->


            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                <div class="table-responsive">


                    <!--begin::Table-->
                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                        <!--begin::Table head-->
                        <thead>
                        <tr class="fw-bold text-muted">

                            <th class="min-w-200px">
                                عنوان
                            </th>

                            <th class="min-w-100px text-end">
                                عملیات
                            </th>
                        </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                        @foreach($items as $item)
                        <tr>
                            <td>
                                <p class="text-dark fw-bold text-hover-primary d-block fs-6">
                                    {{$item->title}}
                                </p>
                            </td>

                            <td>

                                <div class="d-flex justify-content-end flex-shrink-0">
                                    <a wire:click="update({{$item->id}})"
                                       class="cursor-pointer btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">

                                    <span class="ms-1" data-bs-toggle="tooltip" title="ویرایش">
										<i class="ki-duotone ki-pencil fs-2 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
                                    </a>
                                    <a wire:click="delete({{$item->id}})"
                                       class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm cursor-pointer">
                                        {{--                                   --}}
                                        {{--                                    <span class="ms-1" data-bs-toggle="tooltip" title="ویرایش">--}}
                                        {{--										<i class="ki-duotone ki-trash fs-2 text-gray-500 fs-6">--}}
                                        {{--											<span class="path1"></span>--}}
                                        {{--											<span class="path2"></span>--}}
                                        {{--											<span class="path3"></span>--}}
                                        {{--										</i>--}}
                                        {{--									</span>--}}
                                        <span class="ms-1" data-bs-toggle="tooltip" title="حذف">
                                    <i class="ki-duotone ki-trash fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                   </span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                      
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->

                </div>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->
        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">ثبت بخش جدید</span>
                </h3>
                <form class="form w-100" wire:submit.prevent="submit" method="POST" >
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
                    {{--                                    <span class="w-125px text-gray-500 fw-semibold fs-7">یا با عنوان</span>--}}
                    {{--                                </div>--}}
                    <!--end::Separator-->
                    <!--begin::Input group=-->
                    <div class="fv-row mb-8">
                        <!--begin::عنوان-->
                        <input type="text" placeholder="عنوان" wire:model="title" autocomplete="off" class="form-control bg-transparent" />
                        <!--end::عنوان-->
                        @error('title')
                        <span class="text-danger">
                             {{$message}}
                        </span>
                        @enderror

                    </div>


                    <!--begin::ثبت button-->
                    <div class="d-grid mb-10">
                        <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                            <!--begin::Indicator label-->
                            <span class="indicator-label">ثبت</span>
                            <!--end::Indicator label-->
                            <!--begin::Indicator progress-->
                            <span wire:loading class="indicator-progress">لطفا صبر کنید...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            <!--end::Indicator progress-->
                        </button>
                    </div>
                    <!--end::ثبت button-->

                </form>

            </div>
        </div>
    </div>
</div>


