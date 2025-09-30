@push('css')


@endpush

<!--begin::Modal - وظیفه های جدید-->
<div wire:ignore.self class="modal fade" id="kt_modal_change-status_task" tabindex="-1" aria-hidden="true">
    <style>
        .custom-select-wrapper {
            position: relative;
            display: inline-block;
            user-select: none;
        }

        .custom-select-wrapper select {
            display: none;
        }

        .custom-select {
            position: relative;
            display: inline-block;
        }

        .custom-select-trigger {
            position: relative;
            display: block;
            width: 170px;
            padding: 0 84px 0 22px;
            font-size: 19px;
            font-weight: 300;
            color: #5f5f5f;
            line-height: 50px;
            background: #EAEAEA;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 20px;
            border: 1px solid #5f5f5f;
            transition: all 0.3s;
        }

        .custom-select-trigger:hover {
            background-color: #d9d9d9;
            transition: all 0.3s;
        }

        .custom-select-trigger:after {
            position: absolute;
            display: block;
            content: '';
            width: 10px;
            height: 10px;
            top: 50%;
            right: 25px;
            margin-top: -3px;
            border-bottom: 1px solid #5f5f5f;
            border-right: 1px solid #5f5f5f;
            transform: rotate(45deg) translateY(-50%);
            transition: all 0.4s ease-in-out;
            transform-origin: 50% 0;
        }

        .custom-select.opened .custom-select-trigger:after {
            margin-top: 3px;
            transform: rotate(-135deg) translateY(-50%);
        }

        .custom-options {
            position: absolute;
            display: block;
            top: 100%;
            left: 0;
            right: 0;
            margin: 15px 0;
            border: 1px solid #b5b5b5;
            border-radius: 4px;
            box-sizing: border-box;
            box-shadow: 0 2px 1px rgba(0, 0, 0, .07);
            background: #fff;
            transition: all 0.4s ease-in-out;
            margin-left: 20px;
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
            transform: translateY(-15px);
        }

        .custom-select.opened .custom-options {
            opacity: 1;
            visibility: visible;
            pointer-events: all;
            transform: translateY(0);
        }

        .custom-options:before {
            position: absolute;
            display: block;
            content: '';
            bottom: 100%;
            right: 25px;
            width: 7px;
            height: 7px;
            margin-bottom: -4px;
            border-top: 1px solid #b5b5b5;
            border-left: 1px solid #b5b5b5;
            background: #fff;
            transform: rotate(45deg);
            transition: all 0.4s ease-in-out;
        }

        .option-hover:before {
            background: #f9f9f9;
        }

        .custom-option {
            position: relative;
            display: block;
            padding: 0 22px;
            border-bottom: 1px solid #b5b5b5;
            font-size: 18px;
            font-weight: 600;
            color: #b5b5b5;
            line-height: 47px;
            cursor: pointer;
            transition: all 0.15s ease-in-out;
        }

        .custom-option:first-of-type {
            border-radius: 4px 4px 0 0;
        }

        .custom-option:last-of-type {
            border-bottom: 0;
            border-radius: 0 0 4px 4px;
        }

        .custom-option:hover,
        .custom-option.selection {
            background: #f2f0f0;
        }

    </style>
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-450px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" id="kt_modal_change-status_task_header">
                <!--begin::Modal title-->
                <h2>تغییر وضعیت</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body">
                <form wire:submit.prevent="submit" class="form" method="POST" id="kt_modal_new_task_form">
                    <!--begin::Modal body-->
                    <div class="modal-body">
                        
                        <!--begin::Scroll-->
                        <div class="scroll-y me-n7 pe-7" id="kt_modal_new_task_scroll" data-kt-scroll="true"
                             data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                             data-kt-scroll-dependencies="#kt_modal_new_address_header"
                             data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">

                            <div class="f-flex flex-column mb-10">
                                <label class="required fs-6 fw-semibold mb-2">وضعیت </label>
                                <select id="selectedTaskStatus" class=" custom-select sources form-control "
                                        wire:model="selectedTaskStatus" data-placeholder="یک مورد را انتخاب کنید"
                                        name="selectedTaskStatus">
                                    <option @if($selectedTaskStatus == "waiting") selected @endif value="waiting"
                                            class="select-modal">انجام نشده
                                    </option>
                                    <option @if($selectedTaskStatus == "progressing") selected
                                            @endif value="progressing" class="select-modal">در حال انجام
                                    </option>
                                    <option @if($selectedTaskStatus == "finished") selected @endif value="finished"
                                            class="select-modal">انجام شده
                                    </option>
                                </select>


                                @error('selectedTaskStatus')
                                <div id="defaultFormControlHelp" class="form-text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
                            <div class="f-flex flex-column mb-10">
                                <label class="fs-6 fw-semibold mb-2">توضیحات</label>
                                <textarea wire:model="description" class="form-control form-control-solid" rows="3"
                                          name="description" placeholder="توضیحات  "></textarea>
    
                                @error('description')
                                <div id="defaultFormControlHelp" class="form-text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-10 fv-row">
                                    <!--begin::Tags-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="">مدت زمان انجام به دقیقه</span>
                                    </label>
                                    <!--end::Tags-->
                                    <input wire:model="time" type="text" class="form-control form-control-solid"
                                           placeholder="مدت زمان انجام به دقیقه" autofocus="false"/>
                                    @error('time')
                                    <div id="defaultFormControlHelp" class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <!--end::Input group-->
                                <div class="d-flex flex-column mb-10 fv-row">
                                    <!--begin::Tags-->
                                    <label class="col-lg-8 col-form-label fw-semibold fs-6">
                                        <span class="">
                                           {{$finishedDate? 'تاریخ فعلی پایان کار: '.verta($finishedDate)->format('Y/m/d'): 'تاریخ پایان کار'}} 
                                        </span>
                                    </label>
                                    <!--end::Tags-->
                                    <div wire:ignore >
                                        <input wire:model="selectedDate" type="text" class="form-control form-control-solid" placeholder="تاریخ جدید" id="flatpickr-project-deadline">
                                    </div>
                                    @error('selectedDate')
                                    <div id="defaultFormControlHelp" class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="d-flex flex-row mb-10 fv-row">
                                    <!--begin::Tags-->
                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">درج در گزارش کار</label>
                                    <!--begin::Tags-->
                                    <!--begin::Tags-->
                                    <div class="col-lg-6 d-flex align-items-center">
                                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                            <input wire:model="reportStatus" class="form-check-input w-45px h-30px"
                                                   type="checkbox">
                                            <label class="form-check-label" for="allowmarketing"></label>
                                        </div>
                                    </div>
                                    <!--begin::Tags-->
                                </div>
                               
                                <!--end::Input group-->

                                <!--begin::Input group-->
{{--                                <div class="d-flex flex-column mb-10 fv-row">--}}
{{--                                    <!--begin::Tags-->--}}
{{--                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">--}}
{{--                                        <span class="">توضیحات</span>--}}
{{--                                    </label>--}}
{{--                                    <!--end::Tags-->--}}
{{--                                    <textarea wire:model="" type="text" class="form-control form-control-solid"--}}
{{--                                              placeholder="توضیحات" autofocus="false"></textarea>--}}
{{--                                    @error('')--}}
{{--                                    <div id="defaultFormControlHelp" class="form-text text-danger">--}}
{{--                                        {{ $message }}--}}
{{--                                    </div>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
                                <!--end::Input group-->

{{--                                <div class="d-flex flex-column mb-8">--}}
{{--                                    <label class="fs-6 fw-semibold mb-2">فایل پیوست</label>--}}
{{--                                    <input class="form-control form-control-solid btn btn-sm  me-2"--}}
{{--                                           wire:model="reportFile" name="file" type="file">--}}
{{--                                    <span class="form-text fs-6 text-muted"> 5MB / jpg, png, jpeg, pdf.</span>--}}
{{--                                    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->--}}
{{--                                </div>--}}


                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Modal body-->
                    <!--begin::Modal footer-->
                    <div class="modal-footer flex-center">
                        <!--begin::Button-->
                        <button type="button" data-bs-dismiss="modal" class="btn btn-light me-3">لغو</button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">به روز رسانی</span>
                            <span wire:loading class="indicator-progress">لطفا صبر کنید...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>


</div>



@push('scripts')
    <script>

        $('#selectedTaskStatus').on('change', function (e) {
            let data = $(this).val();
        @this.set('selectedTaskStatus', data);
        });



    </script>
@endpush
