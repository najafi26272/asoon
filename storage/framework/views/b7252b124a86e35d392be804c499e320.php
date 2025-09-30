 <!--begin::Modal - ساختن پروژه-->
 <div wire:ignore.self class="modal fade" id="kt_modal_new_project" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content modal-rounded">
					<!--begin::Modal header-->
					<div class="modal-header">
						<!--begin::Modal title-->
						<h2>ایجاد پروژه</h2>
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
                    <div class="modal-body py-1 px-lg-1">
						<!--begin::Stepper-->
						<div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_project_stepper">
							<!--begin::Container-->
							<div class="container">

								<!--begin::Form-->
					<form wire:submit.prevent="submit" method="POST" class="form mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate" id="kt_modal_create_project_form">
						 <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Tags-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">عنوان پروژه</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="برای پروژه یک عنوان تعریف کنید.">
										<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
                            </label>
                            <!--end::Tags-->
                            <input wire:model="title" type="text" class="form-control form-control-solid"
                                   placeholder="عنوان پروژه را وارد کنید." autofocus="false"/>

                        </div>
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
                        <!--end::Input group-->

                        <div wire:ignore class="d-flex flex-column mb-8 fv-row">
                                    <!--begin::Tags-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">بخش مربوطه</span>
                                        <span class="ms-1" data-bs-toggle="tooltip"
                                              title=" بخش مربوطه را انتخاب کنید.">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span>
                                    </label>
                                    <!--end::Tags-->
                                    <select class="form-select form-select-solid" id="selectedProjectCategory"
                                            data-placeholder="بخش مربوطه" >
                                            <option value="">بخش مربوطه را انتخاب کنید.</option>
                                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $projectCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $projectCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($projectCategory->id); ?>"><?php echo e($projectCategory->title); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                                    </select>
                                </div>
                        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['selectedProjectCategory'];
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
                        <div class="d-flex flex-column mb-8">
                            <div class="mb-8 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">تاریخ شروع پروژه</label>
                                <!--begin::Input-->
                                <div wire:ignore class="position-relative d-flex align-items-center">
                                    <!--begin::تاریخpicker-->
                                    <input wire:model="selectedStartDate" type="text" class="form-control form-control-solid"
                                           placeholder="تاریخ " id="flatpickr-project-start">
                                    <!--end::تاریخpicker-->
                                </div>
                                <!--end::Input-->
                            </div>
                        </div>
                         <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['selectedStartDate'];
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
                        <div class="d-flex flex-column mb-8">
                            <div class="mb-8 fv-row">
                                <label class="fs-6 fw-semibold mb-2">تاریخ سررسید پروژه</label>
                                <!--begin::Input-->
                                <div wire:ignore class="position-relative d-flex align-items-center">
                                    <!--begin::تاریخpicker-->
                                    <input wire:model="selectedDeadline" type="text" class="form-control form-control-solid"
                                           placeholder="تاریخ " id="flatpickr-project-deadline">
                                    <!--end::تاریخpicker-->
                                </div>
                                <!--end::Input-->
                            </div>
                        </div>
                        <!--end::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Input group-->
                                <div wire:ignore class="d-flex flex-column mb-8 fv-row">
                                    <!--begin::Tags-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">مسئول</span>
                                        <span class="ms-1" data-bs-toggle="tooltip"
                                              title=" مسئول پروژه را انتخاب کنید.">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span>
                                    </label>
                                    <!--end::Tags-->
                                    <select class="form-select form-select-solid" id="selectedManagers"
                                            data-placeholder="مسئول پروژه" >
                                            <option value="">مسئول پروژه را انتخاب کنید.</option>
                                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($user->id); ?>"> <?php echo e($user->name); ?> <?php echo e($user->family); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                                    </select>
                                </div>
                                <!--end::Input group-->
                                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['selectedManagers'];
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
                            <div class="col-md-6 fv-row">
                                <!--begin::Input group-->
                                <div wire:ignore class="d-flex flex-column mb-8 fv-row">
                                    <!--begin::Tags-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">اعضا</span>
                                        <span class="ms-1" data-bs-toggle="tooltip"
                                              title="اعضای پروژه را انتخاب کنید.">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                    </label>
                                    <!--end::Tags-->
                                    <select class="form-select form-select-solid" id="selectedMembers"
                                            data-placeholder="اعضای پروژه" multiple>
                                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($user->id); ?>"> <?php echo e($user->name); ?> <?php echo e($user->family); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                                    </select>
                                </div>
                                <!--end::Input group-->
                                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['selectedMembers'];
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

                        </div>
                                  <!--begin::Modal footer-->
                                    <div class="modal-footer flex-center">
                                        <!--begin::Button-->
                                        <button type="button" data-bs-dismiss="modal" class="btn btn-light me-3">لغو</button>
                                        <!--end::Button-->
                                        <!--begin::Button-->
                                        <button type="submit" class="btn btn-primary">
                                            <span class="indicator-label">ثبت</span>
                                            <span wire:loading class="indicator-progress">لطفا صبر کنید...
                    								<span class="spinner-border spinner-border-sm align-middle ms-2">

                                                    </span>
                                            </span>
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                    <!--end::Modal footer-->
								</form>
								<!--end::Form-->
							</div>
							<!--begin::Container-->
						</div>
						<!--end::Stepper-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - ساختن پروژه-->

<?php $__env->startPush('scripts'); ?>
    <script>
        $('#selectedManagers').select2({
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
        });

        $('#selectedMembers').select2({
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
        });

        $('#selectedProjectCategory').select2({
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
        });


        $('#selectedProjectCategory').on('change', function (e) {
            let data = $(this).val();
        window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('selectedProjectCategory', data);
        });
        $('#selectedManagers').on('change', function (e) {
            let data = $(this).val();
        window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('selectedManagers', data);
        });
        $('#selectedMembers').on('change', function (e) {
            let data = $(this).val();
        window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('selectedMembers', data);
        });
        $('#date').on('change', function (e) {
            let data = $(this).val();
        window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('date', document.getElementById('textbox_id').value);
        });

    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/asougrou/core/resources/views/livewire/manage-projects/create-project-component.blade.php ENDPATH**/ ?>