<!--begin::Modal - مصوبه های جدید-->
<div wire:ignore.self class="modal fade" id="kt_modal_new_news" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form wire:submit.prevent="submit" class="form" method="POST" id="kt_modal_new_mosavabe_form">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_new_mosavabe_header">
                    <!--begin::Modal title-->
                    <h2>خبر جدید</h2>
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
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_new_mosavabe_scroll" data-kt-scroll="true"
                         data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                         data-kt-scroll-dependencies="#kt_modal_new_address_header"
                         data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Tags-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">عنوان</span>
                            </label>
                            <!--end::Tags-->
                            <input wire:model="title" type="text" class="form-control form-control-solid"
                                   placeholder="عنوان" autofocus="false"/>
                            @error('title')
                            <div id="defaultFormControlHelp" class="form-text text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Tags-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">لینک</span>
                            </label>
                            <!--end::Tags-->
                            <input wire:model="link" type="text" class="form-control form-control-solid"
                                   placeholder="لینک" autofocus="false"/>
                            @error('link')
                            <div id="defaultFormControlHelp" class="form-text text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Tags-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">اهداف</span>
                            </label>
                            <!--end::Tags-->
                            <input wire:model="goals" type="text" class="form-control form-control-solid"
                                   placeholder="اهداف" autofocus="false"/>
                            @error('goals')
                            <div id="defaultFormControlHelp" class="form-text text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Tags-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">موضوع خبر</span>
                            </label>
                            <!--end::Tags-->
                            <input wire:model="topic" type="text" class="form-control form-control-solid"
                                   placeholder="موضوع خبر" autofocus="false"/>
                            @error('topic')
                            <div id="defaultFormControlHelp" class="form-text text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Tags-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">خلاصه خبر</span>
                            </label>
                            <!--end::Tags-->
                            <textarea wire:model="summery" class="form-control form-control-solid" rows="3"
                            name="summery" placeholder="خلاصه خبر"></textarea>
                            @error('summery')
                            <div id="defaultFormControlHelp" class="form-text text-danger">
                                {{ $message }}
                            </div>
                            @enderror
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
<!--end::Modal - مصوبه  جدید-->


@push('scripts')
    <script>

        $('#selectedUser').on('change', function (e) {
            let data = $(this).val();
        @this.set('selectedUser', data);
        });

        $('#priority').on('change', function (e) {
            let data = $(this).val();
        @this.set('priority', data);
        });
        
          $('#priority').select2();
        $('#selectedUser').select2();

    </script>
@endpush

