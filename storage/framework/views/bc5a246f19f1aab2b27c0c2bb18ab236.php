<!--begin::Modal - وظیفه های جدید-->
<div wire:ignore.self class="modal fade" id="kt_modal_change-status_task" tabindex="-1" aria-hidden="true">
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
                                <select id="selectedTaskStatus" class="form-select form-select-solid" data-control="select2"
                                        wire:model="priority" data-hide-search="true"
                                        data-placeholder="یک مورد را انتخاب کنید" name="selectedTaskStatus">
                                    <option <?php if($selectedTaskStatus == "waiting"): ?> selected <?php endif; ?> value="waiting">انجام نشده</option>
                                    <option <?php if($selectedTaskStatus == "progressing"): ?> selected <?php endif; ?> value="progressing">در حال انجام</option>
                                    <option <?php if($selectedTaskStatus == "finished"): ?> selected <?php endif; ?> value="finished">انجام شده</option>
                                </select>
                                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['selectedTaskStatus'];
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

                            <!--[if BLOCK]><![endif]--><?php if($selectedTaskStatus == "finished"): ?>

                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-10 fv-row">
                                    <!--begin::Tags-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="">مدت زمان انجام به دقیقه</span>
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
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
                                </div>
                                <!--end::Input group-->

                                <div class="row mb-0">
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

                                <!--begin::Input group-->















                                <!--end::Input group-->
                            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->


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



<?php $__env->startPush('scripts'); ?>
    <script>

        $('#selectedTaskStatus').on('change', function (e) {
            let data = $(this).val();
        window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('selectedTaskStatus', data);
        });


    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH E:\Laravel\asuojalasat\resources\views/livewire/manage-task/change-task-status-component.blade.php ENDPATH**/ ?>