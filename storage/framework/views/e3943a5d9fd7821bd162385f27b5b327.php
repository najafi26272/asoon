<div class="row">
    <div class="col-6">
        <div class="card mb-5 mb-xl-10">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">بخش های اصلی </span>
                </h3>
            </div>
            <!--end::Header-->


            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                <div class="table-responsive">


                    <!--begin::Table-->
                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                        <!--begin::Table head-->
                        <thead>
                        <tr class="fw-bold text-muted">

                            <th class="min-w-200px">
                                عنوان
                            </th>

                            <th class="min-w-100px text-end">
                                عملیات
                            </th>
                        </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <p class="text-dark fw-bold text-hover-primary d-block fs-6">
                                    <?php echo e($item->title); ?>

                                </p>
                            </td>

                            <td>

                                <div class="d-flex justify-content-end flex-shrink-0">
                                    <a wire:click="update(<?php echo e($item->id); ?>)"
                                       class="cursor-pointer btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">

                                    <span class="ms-1" data-bs-toggle="tooltip" title="ویرایش">
										<i class="ki-duotone ki-pencil fs-2 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
                                    </a>
                                    <a wire:click="delete(<?php echo e($item->id); ?>)"
                                       class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm cursor-pointer">
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        <span class="ms-1" data-bs-toggle="tooltip" title="حذف">
                                    <i class="ki-duotone ki-trash fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                   </span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                      
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->

                </div>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->
        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">ثبت بخش جدید</span>
                </h3>
                <form class="form w-100" wire:submit.prevent="submit" method="POST" >
                    <!--begin::Login options-->
                    <div class="row g-3 mb-9">
                        <!--begin::Col-->
                        
                        
                        
                        
                        
                        
                        <!--end::Col-->
                        <!--begin::Col-->
                        
                        
                        
                        
                        
                        
                        
                        <!--end::Col-->
                    </div>
                    <!--end::Login options-->
                    <!--begin::Separator-->
                    
                    
                    
                    <!--end::Separator-->
                    <!--begin::Input group=-->
                    <div class="fv-row mb-8">
                        <!--begin::عنوان-->
                        <input type="text" placeholder="عنوان" wire:model="title" autocomplete="off" class="form-control bg-transparent" />
                        <!--end::عنوان-->
                        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger">
                             <?php echo e($message); ?>

                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->

                    </div>


                    <!--begin::ثبت button-->
                    <div class="d-grid mb-10">
                        <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                            <!--begin::Indicator label-->
                            <span class="indicator-label">ثبت</span>
                            <!--end::Indicator label-->
                            <!--begin::Indicator progress-->
                            <span wire:loading class="indicator-progress">لطفا صبر کنید...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            <!--end::Indicator progress-->
                        </button>
                    </div>
                    <!--end::ثبت button-->

                </form>

            </div>
        </div>
    </div>
</div>


<?php /**PATH D:\B\work\Asou\main asou react\asoon\resources\views/livewire/manage-categories/category-list-component.blade.php ENDPATH**/ ?>