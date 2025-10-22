<div wire:ignore.self class="modal fade" id="kt_modal_add-info-news" tabindex="-1" aria-hidden="true">
    <!-- Modal Dialog -->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!-- Modal Content -->
        <div class="modal-content">
            <!-- Form Start -->
                <!-- Modal Header -->
                <div class="modal-header" id="kt_modal_new_mosavabe_header">
                    <h2>افزودن اطلاعات</h2>
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>
                <!-- Modal Body -->
                <div class="modal-body py-10 px-lg-17">
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_new_mosavabe_scroll" data-kt-scroll="true"
                         data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                         data-kt-scroll-dependencies="#kt_modal_new_address_header"
                         data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">

                       
                            <!--begin::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Input group-->
                                <div wire:ignore class="d-flex flex-column mb-8 fv-row">
                                    <!--begin::Tags-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class=""> تیتر سایت</span>
                                        <span class="ms-1" data-bs-toggle="tooltip"
                                              title="چه کسی تیتر سایت را انتخاب کند؟">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                    </label>
                                    <!--end::Tags-->
                                    <select class="form-select form-select-solid"  wire:model="selectedWebAuthor" id="selectedWebAuthor"
                                            data-placeholder=" انتخاب کنید." >

                                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $siteTitrs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siteTitr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($siteTitr->id); ?>">
                                                <?php echo e($siteTitr->name . ' '.$siteTitr->family); ?> 
                                            </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                            <option value="0"> 
                                                عدم انتشار در سایت
                                            </option>
                                    </select>

                                </div>
                            </div>
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Input group-->
                                <div wire:ignore class="d-flex flex-column mb-8 fv-row">
                                    <!--begin::Tags-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class=""> تیتر شبکه های اجتماعی</span>
                                        <span class="ms-1" data-bs-toggle="tooltip"
                                              title="چه کسی تیترهای شبکه های اجتماعی را بنویسد؟">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span>
                                    </label>
                                    <!--end::Tags-->
                                    <select class="form-select form-select-solid" wire:model="selectedSocialMediaAuthor" id="selectedSocialMediaAuthor"
                                            data-placeholder="انتخاب کنید ">

                                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $socialMediaTitrs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socialMediaTitr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($socialMediaTitr->id); ?>">
                                            <?php echo e($socialMediaTitr->name . ' '.$socialMediaTitr->family); ?> 
                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                        <option value="0"> 
                                            عدم انتشار در شبکه های اجتماعی
                                        </option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="row g-9 mb-8">
                            
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Input group-->
                                <div wire:ignore class="d-flex flex-column mb-8 fv-row">
                                    <!--begin::Tags-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class=""> اولویت</span>
                                        <span class="ms-1" data-bs-toggle="tooltip"
                                              title="این خبر چه اولویتی دارد؟ ">
                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                    </label>
                                    <!--end::Tags-->
                                    
                                    <select id="priority" class="form-select form-select-solid" wire:model="priority" data-placeholder="یک مورد را انتخاب کنید" name="priority">
                                        <option class="text-warning" value="low">کم</option>
                                        <option class="text-primary" selected value="medium">متوسط</option>
                                        <option class="text-danger" value="high">زیاد</option>
                                    </select>
                                </div>
                            </div>
                             <!--begin::Col-->
                             <div class="col-md-6 fv-row">
                                <!--begin::Input group-->
                                <div wire:ignore class="d-flex flex-column mb-8 fv-row">
                                    <!--begin::Tags-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class=""> زبان</span>
                                        <span class="ms-1" data-bs-toggle="tooltip"
                                              title="این خبر به چه زبان هایی باشد؟ ">
                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                    </label>
                                    <!--end::Tags-->
                                    <select class="form-select form-select-solid" id="selectedLanguages"
                                            data-placeholder="انتخاب کنید" multiple>
                                            <option value="fa">فارسی</option>
                                            <option value="ar">عربی</option>
                                            <option value="en">انگلیسی</option>
                                    </select>
                                </div>
                                <!--end::Input group-->
                                
                            </div>
                        </div>

                        <div class="row g-9 mb-8">
                            <div class="col-md-6 fv-row">
                                <!--begin::Input group-->
                                <div wire:ignore class="d-flex flex-column mb-8 fv-row">
                                    <!--begin::Tags-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="">نیاز به کاور</span>
                                        <span class="ms-1" data-bs-toggle="tooltip"
                                              title="این خبر به کاور نیاز دارد یا خیر؟ ">
                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                    </label>
                                    <!--end::Tags-->
                                    <div class="col-lg-8 d-flex align-items-center">
                                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                            <input wire:model="need_cover" class="form-check-input w-45px h-30px"
                                                type="checkbox" true>
                                            <label class="form-check-label" for="allowmarketing"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                         
                    </div>
                </div>

                <!--end::Modal body-->
                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    <!--begin::Button-->
                    <button type="button" data-bs-dismiss="modal" class="btn btn-light me-3">لغو</button>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button wire:click="addInfo" class="btn btn-primary">
                        <span class="indicator-label">ثبت</span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
        </div>
    </div>
</div>
<?php $__env->startPush('scripts'); ?>
    <script>
         $('#selectedLanguages').select2({
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
        });
        $('#selectedLanguages').on('change', function (e) {
            let data = $(this).val();
        window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('selectedLanguages', data);
        });
    </script>
<?php $__env->stopPush(); ?><?php /**PATH D:\project\asou\asoon\resources\views/livewire/manage-news/monitoring-news/add-info-component.blade.php ENDPATH**/ ?>