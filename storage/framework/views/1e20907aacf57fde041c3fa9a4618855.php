<?php $__env->startPush('css'); ?>
    
    <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/custom/datepicker/flatpickr.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/custom/datepicker/pickr-themes.css")); ?>">


<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('manage-mosavabe.mosavabe-list-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-74871552-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

    <!--begin::Modal - create mosavabe-->
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('manage-mosavabe.create-mosavabe-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-74871552-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <!--end::Modal - -->
    <!--begin::Modal - create mosavabe-->
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('manage-mosavabe.delete-mosavabe-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-74871552-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <!--end::Modal - -->

    <!--begin::Modal - create mosavabe-->
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('manage-mosavabe.edit-mosavabe-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-74871552-3', $__slots ?? [], get_defined_vars());

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
  
        
    document.addEventListener('mosavabe_created', event => {
        $("#kt_modal_new_mosavabe").modal('hide');
    });

    document.addEventListener('show-delete-mosavabe-modal', event => {
        $("#kt_modal_delete_mosavabe").modal('show');
    }) ;

    document.addEventListener('show-mosavabe_edit-modal', event => {
        $("#kt_modal_edit_mosavabe").modal('show');
    });
    document.addEventListener('mosavabe_created', event => {
        $("#kt_modal_edit_mosavabe").modal('hide');
    });
    document.addEventListener('mosavabe-deleted', event => {
        $("#kt_modal_delete_mosavabe").modal('hide');
    });
</script>


<script src="<?php echo e(asset("assets/plugins/custom/datepicker/jdate.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/custom/datepicker/flatpickr-jdate.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/custom/datepicker/fa-jdate.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/custom/datepicker/pickr.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/custom/datepicker/forms-pickers.js")); ?>"></script>


<?php $__env->stopPush(); ?>


<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/asougrou/core/resources/views/admin/pages/mosavabe/mosavabe-list.blade.php ENDPATH**/ ?>