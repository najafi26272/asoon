<?php $__env->startSection('content'); ?>

    <div class="card mb-5 mb-xl-10">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <div class="mb-0">
                    <!--begin::Title-->
                    <h6 class="text-dark fw-bolder mb-3">فیلم آموزشی استفاده از پنل کاربران</h6>
                    <!--end::Title-->

                </div>
            </h3>

        </div>

        <div class="card-body p-11 text-center">
            <video width="500" style="border-radius: 10px;"  controls>
                <source src="https://asougroup.ir/assets/help.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/asougrou/core/resources/views/admin/pages/help.blade.php ENDPATH**/ ?>