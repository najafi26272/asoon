<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card mb-5 mb-xl-10 ">


        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">مدیریت پروژه ها</span>
            </h3>
        </div>
        <!--end::Header-->
        <div class="card-body py-3 text-center" style="align-items: center;">

            <img style="margin-top: -50px;" width="400" src="<?php echo e(asset("assets/coming-soon/1.gif")); ?>">

            <h2 style="color: #99a1b7;">در حال ساخت...</h2>
            <br>
            <br>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<?php $__env->stopPush(); ?>


<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel\asuojalasat\resources\views/admin/pages/projects/project-list.blade.php ENDPATH**/ ?>