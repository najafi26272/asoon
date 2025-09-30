<div class="card mb-5 mb-xl-10">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">ویرایش گزارش کار</span>
        </h3>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Form-->
        <form wire:submit.prevent="submit" class="form" method="POST">

            <!--begin::Input group-->
            <div class="d-flex flex-column mb-8 fv-row">
                <!--begin::Tags-->
                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                    <span class="required">توضیحات</span>
                </label>
                <!--end::Tags-->
                <textarea wire:model="description" class="form-control form-control-solid" rows="3"
                                      name="description" placeholder="توضیحات"></textarea>
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

            <!--begin::Input group-->
            <div class="d-flex flex-column mb-8">
                <div class="mb-8 fv-row">
                    <label class="required fs-6 fw-semibold mb-2">تاریخ</label>
                    <!--begin::Input-->
                    <div wire:ignore class="position-relative d-flex align-items-center">

                        <!--begin::تاریخpicker-->
                        
                        
                        <input wire:model="selectedDate" value="<?php echo e($selectedDate); ?>" type="text" class="form-control form-control-solid"
                               placeholder="YYYY/MM/DD" id="flatpickr-project-start">
                        <!--end::تاریخpicker-->
                    </div>
                    <!--end::Input-->
                </div>
            </div>
            <!--begin::Input group-->
            <div class="d-flex flex-column mb-8">
                <label class="required fs-6 fw-semibold mb-2">مدت زمان انجام به دقیقه</label>
               <input wire:model="time" type="text" class="form-control form-control-solid"
                                           placeholder="مدت زمان انجام به دقیقه" autofocus="false"
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
          
            <!--begin::Button-->
            <button type="submit" class="btn btn-primary">
                <span class="indicator-label">ثبت</span>
                <span wire:loading class="indicator-progress">لطفا صبر کنید...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <!--end::Button-->
        </form>
        <!--end::Form-->
    </div>
    <!--begin::Body-->
</div>


<?php $__env->startPush('scripts'); ?>
    <script>
        $('#editSelectedMembers').select2({

            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
        });
        $('#editSelectedManager').select2({

            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
        });
        $('#editSelectedProjectCategory').select2({
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
        });

        $('#editSelectedProjectCategory').on('change', function (e) {
            let data = $(this).val();
        window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('selectedProjectCategory', data);
        });
        $('#editSelectedMembers').on('change', function (e) {
            let data = $(this).val();
        window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('selectedMembers', data);
        });
        $('#editSelectedManager').on('change', function (e) {
            let data = $(this).val();
        window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('selectedManager', data);
        });

    </script>
<?php $__env->stopPush(); ?>



<?php /**PATH /home/asougrou/core/resources/views/livewire/manage-reports/edit-report-component.blade.php ENDPATH**/ ?>