<!--begin::Modal - وظیفه های جدید-->
<div wire:ignore.self class="modal fade" id="kt_modal_edit_category" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form wire:submit.prevent="submit" class="form" method="POST" id="kt_modal_edit_task_form">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_edit_task_header">
                    <!--begin::Modal title-->
                    <h2>ویرایش دسته بندی</h2>
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
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_edit_task_scroll" data-kt-scroll="true"
                         data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                         data-kt-scroll-dependencies="#kt_modal_edit_address_header"
                         data-kt-scroll-wrappers="#kt_modal_edit_address_scroll" data-kt-scroll-offset="300px">
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2 required">عنوان</label>
                              <input type="text" wire:model="title" class="form-control form-control-solid"
                                      name="title" placeholder="عنوان  ">

                            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div id="defaultFormControlHelp" class="form-text text-danger">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                        <!--end::Input group-->
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


<?php $__env->startPush('scripts'); ?>
    <script>

        $('#selectedUser').on('change', function (e) {
            let data = $(this).val();
        window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('selectedUser', data);
        });

        $('#priority').on('change', function (e) {
            let data = $(this).val();
        window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('priority', data);
        });

        $('#date').on('change', function (e) {
            let data = $(this).val();
        window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('date', document.getElementById('textbox_id').value);
        });

    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/asougrou/core/resources/views/livewire/manage-categories/edit-category-component.blade.php ENDPATH**/ ?>