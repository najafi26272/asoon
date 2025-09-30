<?php $__env->startSection('content'); ?>

    <div class="card mb-5 mb-xl-10">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <div class="mb-0">
                    <!--begin::Title-->
                    <h1 class="text-dark fw-bolder mb-3">انتقادات و پیشنهادات</h1>
                    <!--end::Title-->
                    <!--begin::Subtitle-->
                    <div class="text-gray-500 fw-semibold fs-6">اطلاعات شخصی شما در این بخش ذخیره نمی شود و پیام شما به صورت ناشناس ثبت می شود.</div>
                    <!--end::Subtitle=-->
                </div>
            </h3>

        </div>

        <div class="card-body py-3">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('manage-contact.contact-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-201553422-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/asougrou/core/resources/views/admin/pages/contact.blade.php ENDPATH**/ ?>