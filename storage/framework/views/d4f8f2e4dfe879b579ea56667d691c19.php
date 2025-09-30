<div class="card mb-5 mb-xl-10">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">ویرایش جلسه</span>
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
                    <span class="required">عنوان جلسه</span>
                    <span class="ms-1" data-bs-toggle="tooltip" title="برای جلسه یک عنوان تعریف کنید.">
										<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
                </label>
                <!--end::Tags-->
                <input wire:model="title" type="text" class="form-control form-control-solid"
                       placeholder="عنوان جلسه را وارد کنید."/>
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

            <div wire:ignore.selfe class="d-flex flex-column mb-8">
                <label class="fs-6 fw-semibold mb-2">بخش مربوطه</label>
                <select class="form-select form-select-solid" id="editSelectedJalaseCategory"
                        data-placeholder="بخش مربوطه" multiple>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $jalaseCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php if( in_array($jc->id, $o ) ): ?> selected
                                <?php endif; ?> value="<?php echo e($jc->id); ?>"><?php echo e($jc->title); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                </select>
            </div>
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['selectedJalaseCategory'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div style="    margin-top: -20px;
                                margin-bottom: 20px;" id="defaultFormControlHelp" class="form-text text-danger">
                <?php echo e($message); ?>

            </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->

            <!--begin::Input group-->
            <div class="row g-9 mb-8">
                <!--begin::Col-->
                <div class="col-md-6 fv-row">
                    <!--begin::Input group-->
                    <div wire:ignore.selfe class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Tags-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required"> حاضرین</span>
                            <span class="ms-1" data-bs-toggle="tooltip"
                                  title="افراد حاضر در جلسه را انتخاب کنید.">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                        </label>
                        <!--end::Tags-->
                        <select class="form-select form-select-solid" id="editSelectedHazerin"
                                data-placeholder="افراد حاضر در جلسه را انتخاب کنید." multiple>

                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php if(in_array($user->id, $selectedHazerin)): ?> selected
                                        <?php endif; ?>  value="<?php echo e($user->id); ?>"> <?php echo e($user->name); ?> <?php echo e($user->family); ?></option>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->

                        </select>

                    </div>
                    <!--end::Input group-->
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['selectedHazerin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div style="margin-top: -20px;" id="defaultFormControlHelp"
                         class="form-text text-danger">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
                </div>
                <!--begin::Col-->
                <div class="col-md-6 fv-row">
                    <!--begin::Input group-->
                    <div wire:ignore.selfe class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Tags-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class=""> غائبین</span>
                            <span class="ms-1" data-bs-toggle="tooltip"
                                  title="افراد غائب در جلسه را انتخاب کنید.">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span>
                        </label>
                        <!--end::Tags-->
                        <select class="form-select form-select-solid" id="editSelectedGhayebin"
                                data-placeholder="افراد غائب در جلسه را انتخاب کنید." multiple>
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php if(in_array($user->id, $selectedGhayebin)): ?> selected
                                        <?php endif; ?>  value="<?php echo e($user->id); ?>"> <?php echo e($user->name); ?> <?php echo e($user->family); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                        </select>
                    </div>
                    <!--end::Input group-->
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['selectedGhayebin'];
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
            <!--begin::Input group-->
            <div class="d-flex flex-column mb-8">
                <div class="mb-8 fv-row">
                    <label class="required fs-6 fw-semibold mb-2">زمان جلسه</label>
                    <!--begin::Input-->
                    <div wire:ignore class="position-relative d-flex align-items-center">

                        <!--begin::تاریخpicker-->
                        
                        
                        <input wire:model="selectedDate" value="<?php echo e($selectedDate); ?>" type="text" class="form-control form-control-solid"
                               placeholder="YYYY/MM/DD - HH:MM" id="flatpickr-datetime">
                        <!--end::تاریخpicker-->
                    </div>
                    <!--end::Input-->
                </div>
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="d-flex flex-column mb-8">
                <label class="fs-6 fw-semibold mb-2">توضیحات</label>
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
            <!--begin::Input group-->
            <div class="d-flex flex-column mb-8">


                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                    <span class=""> مدعوین</span>
                    <span class="ms-1" data-bs-toggle="tooltip"
                          title="نام افرادی که کارمند ثابت نیستند و به جلسه دعوت شده اند را وارد کنید.">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                </label>

                <textarea wire:model="invited" class="form-control form-control-solid" rows="3"
                          name="invited" placeholder="مدعوین  "></textarea>

                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['invited'];
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
            <!--end::Scroll-->
          
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
        $('#editSelectedHazerin').select2({

            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
        });
        $('#editSelectedGhayebin').select2({

            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
        });
        $('#editSelectedJalaseCategory').select2({

            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
        });


        $('#editSelectedJalaseCategory').on('change', function (e) {
            let data = $(this).val();
        window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('selectedJalaseCategory', data);
        });
        $('#editSelectedHazerin').on('change', function (e) {
            let data = $(this).val();
        window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('selectedHazerin', data);
        });
        $('#editSelectedGhayebin').on('change', function (e) {
            let data = $(this).val();
        window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('selectedGhayebin', data);
        });

    </script>
<?php $__env->stopPush(); ?>



<?php /**PATH /home/asougrou/core/resources/views/livewire/manage-jalase/edit-jalase-component.blade.php ENDPATH**/ ?>