<?php $__env->startPush('css'); ?>
    
    <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/custom/datepicker/flatpickr.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/custom/datepicker/pickr-themes.css")); ?>">




<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('manage-jalase.jalase-list-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-179846096-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

            <!--begin::Modal - create meeting-->
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('manage-jalase.create-jalase-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-179846096-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <!--end::Modal - -->

            <!--begin::Modal - delete meeting-->
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('manage-jalase.delete-jalase-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-179846096-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <!--end::Modal - -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        document.addEventListener('jalase_created', event => {
            $("#kt_modal_new_jalase").modal('hide');
        });

        document.addEventListener('show-delete-jalase-modal', event => {
            $("#kt_modal_delete_jalase").modal('show');
        }) ;

        document.addEventListener('$_jalase_editable', event => {
            $("#kt_modal_edit_jalase").modal('show');
        });
        document.addEventListener('jalase-deleted', event => {
            $("#kt_modal_delete_jalase").modal('hide');
        });

        document.addEventListener('jalase-edited', event => {
            $("#kt_modal_edit_jalase").modal('hide');
        });

    </script>

    
    <script src="<?php echo e(asset("assets/plugins/custom/datepicker/jdate.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/plugins/custom/datepicker/flatpickr-jdate.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/plugins/custom/datepicker/fa-jdate.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/plugins/custom/datepicker/pickr.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/plugins/custom/datepicker/forms-pickers.js")); ?>"></script>

<?php $__env->stopPush(); ?>


<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel\asuojalasat\resources\views/admin/pages/jalase/jalase-list.blade.php ENDPATH**/ ?>