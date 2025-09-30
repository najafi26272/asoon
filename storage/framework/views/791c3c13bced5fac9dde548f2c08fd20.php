<?php $__env->startSection('content'); ?>

    <!--begin::Page bg image-->
    <style>body {
            background-image: url('assets/media/auth/bg10.jpeg');
        }

        [data-bs-theme="dark"] body {
            background-image: url('assets/media/auth/bg10-dark.jpeg');
        }</style>
    <!--end::Page bg image-->
    <!--begin::احراز هویت - ورود -->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::کناری-->
        <div class="d-flex flex-lg-row-fluid">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
                <!--begin::Image-->
                <img class="mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20"
                     src="<?php echo e(asset("assets/media/auth/agency.png")); ?>" alt="">
                
                
                <!--end::Image-->
                <!--begin::Title-->
                <h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">سامانه اداری آسو</h1>
                <!--end::Title-->
                <!--begin::Text-->
                
                
                
                
                
                
                
                <!--end::Text-->
            </div>
            <!--end::Content-->
        </div>
        <!--begin::کناری-->
        <!--begin::Body-->
        <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
            <!--begin::Wrapper-->
            <div class="bg-body d-flex flex-column flex-center rounded-4 w-md-600px p-10">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">
                        <div class="text-center mb-11">
                            <!--begin::Title-->
                            <h1 class="text-dark fw-bolder mb-3">درباره ی ما</h1>
                            <!--end::Title-->
                            <!--begin::Subtitle-->

                            <!--end::Subtitle=-->
                        </div>
                        متن درباره ما
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Footer-->
                    <div class="d-flex flex-stack">
                        <!--begin::زبانs-->
                        <div class="me-10">

                        </div>
                        <!--end::زبانs-->
                        <!--begin::Links-->
                        <div class="d-flex fw-semibold text-primary fs-base gap-5">
                            <a href="<?php echo e(route("login")); ?>">ورود</a>
                            <a href="<?php echo e(route("contact")); ?>">تماس با ما</a>
                            <a href="<?php echo e(route("help")); ?>">راهنما</a>
                        </div>
                        <!--end::Links-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::احراز هویت - ورود-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/asougrou/core/resources/views/admin/pages/about.blade.php ENDPATH**/ ?>