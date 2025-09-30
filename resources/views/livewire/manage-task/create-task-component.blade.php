<!--begin::Modal - وظیفه های جدید-->
<div wire:ignore.self class="modal fade" id="kt_modal_new_task" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form wire:submit.prevent="submit" class="form" method="POST" id="kt_modal_new_task_form">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_new_task_header">
                    <!--begin::Modal title-->
                    <h2>ایجاد وظیفه</h2>
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
                <div class="modal-body py-10 px-lg-17">
                    <!--begin::Scroll-->
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_new_task_scroll" data-kt-scroll="true"
                         data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                         data-kt-scroll-dependencies="#kt_modal_new_address_header"
                         data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2 required">عنوان</label>
                            <input type="text" wire:model="title" class="form-control form-control-solid"
                                      name="title" placeholder="عنوان  ">

                            @error('title')
                            <div id="defaultFormControlHelp" class="form-text text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2 ">توضیحات</label>
                            <textarea wire:model="description" class="form-control form-control-solid" rows="3"
                                      name="description" placeholder="توضیحات  "></textarea>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8">
                            <div class="mb-8 fv-row">
                                <label class="fs-6 fw-semibold mb-2">تاریخ سررسید </label>
                                <!--begin::Input-->
                                <div wire:ignore class="position-relative d-flex align-items-center">

                                    <!--begin::تاریخpicker-->
                                    {{--                                                    <input  type="text" class="form-control form-control-solid"  placeholder="زمان و تاریخ باهم" />--}}
                                    {{--                                                 <input class="form-control form-control-solid ps-12" placeholder="انتخاب یک تاریخ" name="due_date" data-jdp/>--}}
                                    <input  wire:model="selectedDate" type="text" class="form-control form-control-solid" placeholder="تاریخ و ساعت" id="flatpickr-datetime">
                                    <!--end::تاریخpicker-->
                                </div>
                                <!--end::Input-->
                                @error('selectedDate')
                                <div id="defaultFormControlHelp" class="form-text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <!--end::Input group-->
                        <div class="f-flex flex-column mb-8">

                            <label class="required fs-6 fw-semibold mb-2">اولویت </label>
                            <select id="priority" class="form-select form-select-solid" data-control="select2"
                                    wire:model="priority" data-hide-search="true"
                                    data-placeholder="یک مورد را انتخاب کنید" name="priority">
                                <option selected value="normal">معمولی</option>
                                <option value="low">کم</option>
                                <option value="much">فوری</option>
                            </select>
                            @error('priority')
                            <div id="defaultFormControlHelp" class="form-text text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="row mb-0">
                            <!--begin::Tags-->
                            <label class="col-lg-5 col-form-label fw-semibold fs-6">یادآوری یک ساعت قبل از سر رسید</label>
                            <!--begin::Tags-->
                            <!--begin::Tags-->
                            <div class="col-lg-5 d-flex align-items-center">
                                <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                    <input wire:model="sms" class="form-check-input w-45px h-30px"
                                           type="checkbox">
                                    <label class="form-check-label" for="allowmarketing"></label>
                                </div>
                            </div>
                            <!--begin::Tags-->
                        </div>
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
                        <span class="indicator-label">ثبت</span>
                        <span wire:loading class="indicator-progress">لطفا صبر کنید...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>
<!--end::Modal - وظیفه  جدید-->


@push('scripts')
    <script>

        $('#priority').on('change', function (e) {
            let data = $(this).val();
        @this.set('priority', data);
        });

        $('#date').on('change', function (e) {
            let data = $(this).val();
        @this.set('date', document.getElementById('textbox_id').value);
        });

    </script>
@endpush

