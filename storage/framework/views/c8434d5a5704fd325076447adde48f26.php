<div class="card mb-5 mb-xl-10">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">جلسات ثبت شده</span>
        </h3>

        <!--[if BLOCK]><![endif]--><?php if(\Illuminate\Support\Facades\Auth::user()->accesses->meetings_access): ?>
            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                 data-bs-original-title="Click to add a user" data-kt-initialized="1">
                <a href="#" class="btn btn-sm btn-light btn-active-primary"  data-bs-toggle="modal" data-bs-target="#kt_modal_new_jalase">
                    <i class="ki-duotone ki-plus fs-2"></i>جلسه جدید</a>
            </div>
        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->

    </div>
    <!--end::Header-->



    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">

            <!--[if BLOCK]><![endif]--><?php if(count($items) == 0): ?>
            <div class="py-10 text-center">
                <img src="<?php echo e(asset("assets/media/svg/illustrations/easy/1.svg")); ?>" class=" w-200px" alt="">

                <p class="m-5">در حال حاضر جلسه ای که شما در آن حضور داشته باشید ثبت نشده است.</p>
            </div>
            <?php else: ?>
            <!--begin::Table-->
            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                <tr class="fw-bold text-muted">
                    <th class="min-w-200px">عنوان</th>
                    <th class="min-w-150px">تاریخ</th>
                    <th class="min-w-150px">میزان پیشرفت</th>
                    <th class="min-w-100px text-end">عملیات</th>
                </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="d-flex justify-content-start flex-column">
                                    <p class="text-dark fw-bold text-hover-primary fs-6"><?php echo e($item->title); ?></p>
                                    <span class="text-muted fw-semibold text-muted d-block fs-7">
                                        <?php ($i = 0); ?>
                                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $item->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($cat->title); ?>

                                            <?php ($i++); ?>
                                            <!--[if BLOCK]><![endif]--><?php if($i < count($item->categories)): ?>، <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                                    </span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-dark fw-bold text-hover-primary d-block fs-6">
                                <?php echo e(verta($item->date)->format('Y/m/d')); ?>

                            </p>
                            <span class="text-muted fw-semibold text-muted d-block fs-7">
                                <?php echo e(verta($item->date)->format('H:i')); ?>

                            </span>
                        </td>
                        <td class="text-end">
                            <div class="d-flex flex-column w-100 me-2">

                                    <div class="d-flex flex-stack mb-2">
                                        <span class="text-muted me-2 fs-7 fw-bold"><?php echo e($item->percent); ?>%</span>
                                    </div>
                                    <div class="progress h-6px w-100">
                                        <div class="progress-bar <?php if($item->percent > 1 && $item->percent < 40): ?> bg-warning <?php elseif($item->percent > 39 && $item->percent < 80): ?> bg-primary <?php elseif($item->percent > 79 && $item->percent < 101): ?>  bg-success <?php endif; ?> " role="progressbar" style="width:<?php echo e($item->percent); ?>%"
                                             aria-valuenow="<?php echo e($item->percent); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex justify-content-end flex-shrink-0">
                                <a href="/admin/mosavabat/<?php echo e($item->id); ?>" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">




                                    <span class="ms-1" data-bs-toggle="tooltip" title="مصوبات جلسه">
										<i class="ki-duotone ki-switch fs-2 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
                                </a>
                                <!--[if BLOCK]><![endif]--><?php if(\Illuminate\Support\Facades\Auth::user()->accesses->meetings_access): ?>
                                <a href="meetings/edit/<?php echo e($item->id); ?>" class="cursor-pointer btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">

                                    <span class="ms-1" data-bs-toggle="tooltip" title="ویرایش">
										<i class="ki-duotone ki-pencil fs-2 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
                                </a>
                                <a wire:click="delete(<?php echo e($item->id); ?>)" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm cursor-pointer">

                                    
                                    
                                    
                                    
                                    
                                    
                                    
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
                                <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
            <!--[if BLOCK]><![endif]--><?php if(count($items) != 0): ?>
                <div class="custom-paginate clearfix" style="margin-top: 10px;margin-right:10px">
                    <?php echo e($items->links('pagination::bootstrap-4')); ?>

                </div>
            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
</div>



<?php /**PATH E:\Laravel\asuojalasat\resources\views/livewire/manage-jalase/jalase-list-component.blade.php ENDPATH**/ ?>