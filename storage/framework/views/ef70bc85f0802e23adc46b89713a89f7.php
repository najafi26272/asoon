<!--begin::Modal - کاربر های جدید-->
<div wire:ignore.self class="modal fade" id="kt_modal_delete_user" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-450px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" id="kt_modal_delete_user_header">
                <!--begin::Modal title-->
                <h2>حذف کاربر</h2>
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
                <p>توجه! آیا از حذف آیتم مورد نظر اطمینان دارید؟</p>
            </div>
            <!--end::Modal body-->
            <!--begin::Modal footer-->
            <div class="modal-footer flex-center">
                <!--begin::Button-->
                <button type="button" data-bs-dismiss="modal"  class="btn btn-light me-3">لغو</button>
                <!--end::Button-->
                <!--begin::Button-->
                <button type="button" wire:click="delete()" class="btn btn-danger">
                    <span class="indicator-label">حذف</span>
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
<?php /**PATH E:\Laravel\asuojalasat\resources\views/livewire/manage-user/delete-user-component.blade.php ENDPATH**/ ?>