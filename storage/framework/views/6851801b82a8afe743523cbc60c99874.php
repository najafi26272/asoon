

<!--begin::Modal - مصوبه های جدید-->
<div wire:ignore.self class="modal fade" id="kt_modal_edit_mosavabe" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form wire:submit.prevent="submit" class="form" method="POST" id="kt_modal_edit_mosavabe_form">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_edit_mosavabe_header">
                    <!--begin::Modal title-->
                    <h2>ویرایش مصوبه</h2>
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
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_edit_mosavabe_scroll" data-kt-scroll="true"
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
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                        <!--end::Input group-->


                        <div class="f-flex flex-column mb-8">

                            <label class="required fs-6 fw-semibold mb-2">شخص مسئول </label>
                              <select id="selectedUser" class="form-select form-select-solid" data-control="select2" wire:model="selectedUser" data-hide-search="true" data-placeholder="یک مورد را انتخاب کنید" name="selectedUser">
                                <option value=""> موردی انتخاب نشده است...</option>
                              <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php if($selectedUser == $user->id): ?> selected <?php endif; ?> value="<?php echo e($user->id); ?>"> <?php echo e($user->name); ?> <?php echo e($user->family); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->

                            </select>

                            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['selectedUser'];
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

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8">
                            <div class="mb-8 fv-row">
                                <label class="fs-6 fw-semibold mb-2">تاریخ سررسید </label>
                                <!--begin::Input-->
                                <div class="position-relative d-flex align-items-center">

                                    <!--begin::تاریخpicker-->
                                    
                                    
                                    <input  wire:model="selectedDate" value="<?php echo e($selectedDate); ?>" type="text" class="form-control form-control-solid" placeholder="تاریخ و ساعت" id="flatepicker-edit-mosavabe">
                                    <!--end::تاریخpicker-->
                                </div>
                                <!--end::Input-->
                            </div>
                        </div>
                        <!--end::Input group-->

                        <div class="f-flex flex-column mb-8">

                            <label class="required fs-6 fw-semibold mb-2">اولویت </label>
                             <select id="priority" class="form-select form-select-solid" data-control="select2"
                                    wire:model="priority" data-hide-search="true"
                                    data-placeholder="یک مورد را انتخاب کنید" name="priority">
                                <option class="text-primary" <?php if($selectedPriority=='normal'): ?> selected <?php endif; ?> value="normal"> معمولی</option>
                                <option class="text-warning"  <?php if($selectedPriority=='low'): ?> selected <?php endif; ?> value="low">کم</option>
                                <option class="text-danger"  <?php if($selectedPriority=='much'): ?> selected <?php endif; ?> value="much">فوری</option>
                            </select>
                            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['priority'];
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

    </script>
<?php $__env->stopPush(); ?>

<?php /**PATH /home/asougrou/core/resources/views/livewire/manage-mosavabe/edit-mosavabe-component.blade.php ENDPATH**/ ?>