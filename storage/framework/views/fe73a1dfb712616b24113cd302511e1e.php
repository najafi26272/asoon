<div class="card mb-5 mb-xl-10">
    <!--begin::Body-->
    <div class="card-body py-3">

        <!--[if BLOCK]><![endif]--><?php if(count($items) == 0): ?>
            <div class="py-10 text-center">
                <img src="<?php echo e(asset("assets/media/svg/illustrations/easy/1.svg")); ?>" class=" w-200px" alt="">
                <p class="m-5">دیتایی وجود ندارد.</p>
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
                            نام کاربری
                        </th>
                        <th class="min-w-150px">
                            تاریخ 
                        </th>
                        <th class="min-w-100px">
                            دانلود
                        </th>
                    </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!--[if BLOCK]><![endif]--><?php if(Storage::exists('public/files/reports/' . $item->file)): ?>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                        <?php echo e($item->user->name); ?> <?php echo e($item->user->family); ?></p>
                                </div>
                            </td>
                            <td>
                                <p class="text-dark fw-bold text-hover-primary d-block fs-6">
                                    <?php echo e(Verta::instance($item->related_month)->format('%B %Y')); ?>


                                </p>
                            </td>
                            <td>
                               <div class="d-flex  flex-shrink-0">
                                    <a href="<?php echo e(asset('storage/files/reports/' . $item->file)); ?>" class="btn btn-primary">
                                        <i class="fa fa-download"></i>
                                         دانلود
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
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



<?php /**PATH /home/asougrou/core/resources/views/livewire/manage-reports/reportDownload-list-component.blade.php ENDPATH**/ ?>