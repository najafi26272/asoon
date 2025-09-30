<div class="card mb-5 mb-xl-10">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">لیست کاربران</span>
        </h3>
        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
             data-bs-original-title="Click to add a user" data-kt-initialized="1">
            <a href="<?php echo e(route("createUser")); ?>" class="btn btn-sm btn-light btn-active-primary">
                <i class="ki-duotone ki-plus fs-2"></i>کاربر جدید</a>
        </div>
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


                    <th class="min-w-50px">ID</th>
                    <th class="min-w-150px">نام</th>
                    <th class="min-w-150px">نام کاربری</th>
                    <th class="min-w-150px">توضیح</th>
                    <th class="min-w-50px">وضعیت</th>
                    <th class="min-w-100px  text-end">عملیات</th>

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
                                    <p class="text-dark fw-bold text-hover-primary fs-6"><?php echo e($item->id); ?></p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-dark fw-bold text-hover-primary d-block fs-6">
                                <?php echo e($item->name); ?> <?php echo e($item->family); ?>

                            </p>
                        </td>
                        <td>
                            <div class="d-flex flex-column w-100 me-2">
                                <p class="text-dark fw-bold text-hover-primary fs-6"><?php echo e($item->username); ?></p>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column w-100 me-2">
                                <?php echo e($item->description); ?>

                            </div>

                        </td>
                        <td>

                            <!--[if BLOCK]><![endif]--><?php if($item->status =="active"): ?>
                                <a wire:click="changeStatus(<?php echo e($item->id); ?>)" class="text-success cursor-pointer">
                                    <div class="badge badge-light-success">فعال</div>
                                </a>

                            <?php else: ?>
                                <a wire:click="changeStatus(<?php echo e($item->id); ?>)" class="text-danger cursor-pointer">
                                    <div class="badge badge-light-danger">غیرفعال</div>
                                </a>

                            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                        </td>
                        <td>
                            <div class="d-flex justify-content-end flex-shrink-0">
                                <a wire:click="changeAccess(<?php echo e($item->id); ?>)"
                                   class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">

                                     <span class="ms-1" data-bs-toggle="tooltip" title="دسترسی ها">
										 <i class="ki-duotone ki-lock-2 fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
									</span>


                                </a>
                                <a href="/admin/users/edit/<?php echo e($item->id); ?>"
                                   class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <i class="ki-duotone ki-pencil fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </a>
                                <a wire:click="delete(<?php echo e($item->id); ?>)"
                                   class="cursor-pointer btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                    <i class="ki-duotone ki-trash fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
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
    </div>
    <!--begin::Body-->
</div>






<?php /**PATH E:\Laravel\asuojalasat\resources\views/livewire/manage-user/users-list-component.blade.php ENDPATH**/ ?>