<div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">
    <!--begin::Form-->
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
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->

        </div>
        <!--end::Input group=-->
        <!--begin::Input group=-->
        <div class="fv-row mb-8">
            <!--begin::شماره تماس-->
            <input type="text" placeholder="شماره تماس (دلخواه)" wire:model="mobile" autocomplete="off" class="form-control bg-transparent" />
            <!--end::شماره تماس-->
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['mobile'];
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
            <textarea wire:model="message" placeholder="متن پیام" autocomplete="off" rows="3" class="form-control bg-transparent"></textarea>
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['message'];
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






        <!--end::Wrapper-->
        <!--begin::ثبت button-->
        <div class="d-grid mb-10 mt-10">
            <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                <!--begin::Indicator label-->
                <span class="indicator-label">ارسال پیام</span>
                <!--end::Indicator label-->
                <!--begin::Indicator progress-->
                <span wire:loading class="indicator-progress">لطفا صبر کنید...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                <!--end::Indicator progress-->
            </button>
        </div>

        <!--[if BLOCK]><![endif]--><?php if($msg): ?>
            <div class="alert-success p-2">
                <?php echo e($msg); ?>

            </div>
        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
        <!--end::ثبت button-->



        <!--begin::ثبت نام-->


        <!--end::ثبت نام-->

    </form>
    <!--end::Form-->
</div>

<?php /**PATH /home/asougrou/core/resources/views/livewire/manage-contact/contact-component.blade.php ENDPATH**/ ?>