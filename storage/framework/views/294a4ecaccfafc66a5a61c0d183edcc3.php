<div class="card mb-5 mb-xl-10">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">گزارش کارها </span>
            
        </h3>

        <div class="card-toolbar">
            <a href="#" class="btn btn-sm btn-bg-light btn-active-color-primary me-3">
                <i class="fa fa-upload"></i>
                بارگزاری خروجی کار</a>
            <a href="#" class="btn btn-sm btn-primary me-3">
                <i class="fa fa-file-excel"></i>
                دانلود فایل اکسل</a>
        </div>

    </div>
    <!--end::Header-->


    <!--begin::Body-->
    <div class="card-body py-3">


        <!--[if BLOCK]><![endif]--><?php if(count($items) == 0): ?>
            <div class="py-10 text-center">
                <img src="<?php echo e(asset("assets/media/svg/illustrations/easy/1.svg")); ?>" class=" w-200px" alt="">
                
                <p class="m-5">شما در حال حاضر هیچ گزارش کاری ثبت نکرده اید.</p>
            </div>
        <?php else: ?>


        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                <tr class="fw-bold text-muted">

                    <th class="min-w-200px">
                        گزارش کار
                    </th>
                    <th class="min-w-150px">
                        تاریخ پایان
                    </th>
                    <th class="min-w-150px">
                        شخص مربوطه
                    </th>
                    <th class="min-w-150px">
                        مدت انجام
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
                        <td class="">
                            <div class="d-flex align-items-center">
                                <div class="d-flex justify-content-start flex-column">
                                    <p class="text-dark fw-bold text-hover-primary fs-6">
                                        <?php echo e($item->task); ?> </p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-dark fw-bold text-hover-primary d-block fs-6">
                                <?php echo e(verta($item->end_date)->format('Y/m/d')); ?>

                            </p>
                        </td>
                        <td>
                            <div class="d-flex flex-column w-100 me-2">
                                <p class="text-dark fw-bold text-hover-primary fs-6"><?php echo e($item->user->name); ?> <?php echo e($item->user->family); ?></p>
                            </div>
                        </td>
                        <td>
                            <p class="text-dark fw-bold text-hover-primary d-block fs-6">
                                <?php echo e($item->time); ?> دقیقه
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
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
            <!--[if BLOCK]><![endif]--><?php if(count($items) != 0): ?>
                <div class="custom-paginate clearfix" style="margin-top: 10px;margin-right:10px">
                    <?php echo e($items->links('pagination::bootstrap-4')); ?>

                </div>
            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
        </div>
        <!--end::Table container-->

        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
            <!--[if BLOCK]><![endif]--><?php if(count($items) != 0): ?>
                <div class="custom-paginate clearfix" style="margin-top: 10px;margin-right:10px">
                    <?php echo e($items->links('pagination::bootstrap-4')); ?>

                </div>
            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
    </div>
    <!--begin::Body-->
</div>


<?php /**PATH E:\Laravel\asuojalasat\resources\views/livewire/manage-reports/reports-list-component.blade.php ENDPATH**/ ?>