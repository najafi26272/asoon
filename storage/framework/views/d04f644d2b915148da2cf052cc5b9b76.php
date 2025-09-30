<div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">
    <!--begin::Form-->
    <form class="form w-100" wire:submit.prevent="submit" method="POST" >
        <!--begin::Heading-->
        <div class="text-center mb-11">
            <!--begin::Title-->
            <h1 class="text-dark fw-bolder mb-3">ورود</h1>
            <!--end::Title-->
            <!--begin::Subtitle-->
            <div class="text-gray-500 fw-semibold fs-6">نام کاربری و رمز عبور خود را وارد کنید.</div>
            <!--end::Subtitle=-->
        </div>
        <!--begin::Heading-->
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
            <!--begin::نام کاربری-->
            <input type="text" placeholder="نام کاربری" wire:model="data.username" autocomplete="off" class="form-control bg-transparent" />
            <!--end::نام کاربری-->
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['data.username'];
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
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->

        </div>
        <!--end::Input group=-->
        <div class="fv-row mb-3">
            <!--begin::password-->
            <input type="password" wire:model="data.password" placeholder="کلمه عبور" autocomplete="off" class="form-control bg-transparent" />
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['data.password'];
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
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->

            <!--end::password-->
        </div>
        <!--end::Input group=-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
            <div></div>
            <!--begin::Link-->
            <a href="<?php echo e(route("contact")); ?>" class="link-primary">فراموشی رمز</a>
            <!--end::Link-->
        </div>
        <!--end::Wrapper-->
        <!--begin::ثبت button-->
        <div class="d-grid mb-10">
            <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                <!--begin::Indicator label-->
                <span class="indicator-label">ورود</span>
                <!--end::Indicator label-->
                <!--begin::Indicator progress-->
                <span wire:loading class="indicator-progress">لطفا صبر کنید...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                <!--end::Indicator progress-->
            </button>
        </div>
        <!--end::ثبت button-->
        <p class="text-danger text-center"><?php echo e($errorMessage); ?></p>


        <!--begin::ثبت نام-->
        <div class="text-gray-500 text-center fw-semibold fs-6">آیا نمیتوانید وارد شوید؟
            <a href="<?php echo e(route("contact")); ?>" class="link-primary">تماس با پشتیبانی</a></div>
        <!--end::ثبت نام-->

    </form>
    <!--end::Form-->
</div>

<?php /**PATH /home/asougrou/core/resources/views/livewire/manage-login/login-component.blade.php ENDPATH**/ ?>