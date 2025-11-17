<!--begin::Modal - وظیفه های جدید-->
<div wire:ignore.self class="modal fade" id="kt_modal_new_report" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form wire:submit.prevent="submit" class="form" method="POST" id="kt_modal_new_task_form">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_new_task_header">
                    <!--begin::Modal title-->
                    <h2>افزودن به گزارش کار</h2>
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
                            <label class="fs-6 fw-semibold mb-2 required">توضیحات</label>
                            <textarea wire:model="description" class="form-control form-control-solid" rows="3"
                                      name="description" placeholder="توضیحات  "></textarea>

                            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['description'];
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
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8">
                            <div class="mb-8 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">تاریخ</label>
                                <!--begin::Input-->
                                <div wire:ignore class="position-relative d-flex align-items-center">

                                    <!--begin::تاریخpicker-->
                                    
                                    
                                    <input name="selectedDate" wire:model="selectedDate" type="text" class="form-control form-control-solid" placeholder="تاریخ" id="flatpickr-date">
                                    <!--end::تاریخpicker-->
                                </div>
                                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['selectedDate'];
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
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                <!--end::Input-->
                            </div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                                <div class="d-flex flex-column mb-10 fv-row">
                                    <!--begin::Tags-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">مدت زمان انجام به دقیقه</span>
                                    </label>
                                    <!--end::Tags-->
                                    <input wire:model="time" type="text" class="form-control form-control-solid"
                                           placeholder="مدت زمان انجام به دقیقه" autofocus="false"/>
                                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['time'];
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
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
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


<?php $__env->startPush('scripts'); ?>
    <script>

        $('#date').on('change', function (e) {
            let data = $(this).val();
        window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('date', document.getElementById('textbox_id').value);
        });

    </script>
<?php $__env->stopPush(); ?>

<?php /**PATH D:\project\asou\asoon\resources\views/livewire/manage-reports/create-report-component.blade.php ENDPATH**/ ?>