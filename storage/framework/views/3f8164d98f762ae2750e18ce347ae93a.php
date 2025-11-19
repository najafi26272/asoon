<!--begin::Modal - کاربر های جدید-->
<div wire:ignore.self class="modal fade" id="kt_modal_access_user" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-450px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" id="kt_modal_access_user_header">
                <!--begin::Modal title-->
                <h2>مدیریت دسترسی ها</h2>
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
                <div class="d-flex align-items-center position-relative mb-7">
                    <!--begin::Tags-->
                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                    <!--end::Tags-->
                    <!--begin::Checkbox-->
                    <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                        <input class="form-check-input" type="checkbox" wire:model.defer="userAccess">
                    </div>
                    <!--end::Checkbox-->
                    <!--begin::Details---->
                    <div class="fw-semibold">
                        <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">دسترسی به بخش کاربران</a>
                        <!--begin::Info-->



                        <!--end::Info-->
                    </div>
                    <!--end::Details---->
                </div>
                <div class="d-flex align-items-center position-relative mb-7">
                    <!--begin::Tags-->
                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                    <!--end::Tags-->
                    <!--begin::Checkbox-->
                    <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                        <input class="form-check-input" type="checkbox" wire:model.defer="meetingsAccess">
                    </div>
                    <!--end::Checkbox-->
                    <!--begin::Details---->
                    <div class="fw-semibold">
                        <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">دسترسی به تمام جلسات</a>
                        <!--begin::Info-->
                        
                        
                        
                        <!--end::Info-->
                    </div>
                    <!--end::Details---->
                </div>
                <div class="d-flex align-items-center position-relative mb-7">
                    <!--begin::Tags-->
                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                    <!--end::Tags-->
                    <!--begin::Checkbox-->
                    <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                        <input class="form-check-input" type="checkbox" wire:model.defer="taskAccess">
                    </div>
                    <!--end::Checkbox-->
                    <!--begin::Details---->
                    <div class="fw-semibold">
                        <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">دسترسی به تمام وظایف</a>
                        <!--begin::Info-->
                        
                        
                        
                        <!--end::Info-->
                    </div>
                    <!--end::Details---->
                </div>
                <div class="d-flex align-items-center position-relative mb-7">
                    <!--begin::Tags-->
                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                    <!--end::Tags-->
                    <!--begin::Checkbox-->
                    <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                        <input class="form-check-input" type="checkbox" wire:model.defer="projectAccess">
                    </div>
                    <!--end::Checkbox-->
                    <!--begin::Details---->
                    <div class="fw-semibold">
                        <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">دسترسی به تمامی پروژه ها</a>
                        <!--begin::Info-->
                        
                        
                        
                        <!--end::Info-->
                    </div>
                    <!--end::Details---->
                </div>
                <div class="d-flex align-items-center position-relative mb-7">
                    <!--begin::Tags-->
                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                    <!--end::Tags-->
                    <!--begin::Checkbox-->
                    <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                        <input class="form-check-input" type="checkbox" wire:model.defer="reportAccess">
                    </div>
                    <!--end::Checkbox-->
                    <!--begin::Details---->
                    <div class="fw-semibold">
                        <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">دسترسی به خروجی گزارش کارها</a>
                        <!--begin::Info-->
                        
                        
                        
                        <!--end::Info-->
                    </div>
                    <!--end::Details---->
                </div>

            </div>
            <!--end::Modal body-->
            <!--begin::Modal footer-->
            <div class="modal-footer flex-center">
                <!--begin::Button-->
                <button type="button" data-bs-dismiss="modal" class="btn btn-light me-3">لغو</button>
                <!--end::Button-->
                <!--begin::Button-->
                <button type="button" wire:click="update()" class="btn btn-primary">
                    <span class="indicator-label">ثبت تغییرات</span>
                    <span wire:loading class="indicator-progress">لطفا صبر کنید...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
                <!--end::Button-->
            </div>
            <!--end::Modal footer-->

        </div>
    </div>
</div>
<!--end::Modal - کاربر  جدید-->
<?php /**PATH D:\B\work\Asou\main asou react\asoon\resources\views/livewire/manage-user/user-access-component.blade.php ENDPATH**/ ?>