<?php $__env->startPush('css'); ?>
    
    <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/custom/datepicker/flatpickr.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/custom/datepicker/pickr-themes.css")); ?>">


<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('manage-projects.manage-tasks.task-list-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1020571979-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

    <!--begin::Modal - create task-->
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('manage-projects.manage-tasks.create-task-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1020571979-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <!--end::Modal - -->

    <!--begin::Modal - delete task-->
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('manage-projects.manage-tasks.delete-task-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1020571979-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <!--end::Modal - -->

    <!--begin::Modal - edit task-->
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('manage-projects.manage-tasks.edit-task-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1020571979-3', $__slots ?? [], get_defined_vars());

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


    document.addEventListener('projectTask_created', event => {
        $("#kt_modal_new_projectTask").modal('hide');
    });

    document.addEventListener('show-delete-projectTask-modal', event => {
        $("#kt_modal_delete_projectTask").modal('show');
    });

    document.addEventListener('show-projectTask_edit-modal', event => {
        $("#kt_modal_edit_projectTask").modal('show');
    });
    document.addEventListener('projectTask_created', event => {
        $("#kt_modal_edit_projectTask").modal('hide');
    });
    document.addEventListener('projectTask-deleted', event => {
        $("#kt_modal_delete_projectTask").modal('hide');
    });
</script>


<script src="<?php echo e(asset("assets/plugins/custom/datepicker/jdate.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/custom/datepicker/flatpickr-jdate.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/custom/datepicker/fa-jdate.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/custom/datepicker/pickr.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/custom/datepicker/forms-pickers.js")); ?>"></script>


<?php $__env->stopPush(); ?>


<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\B\work\Asou\main asou react\asoon\resources\views/admin/pages/projects/tasks/tasks-list.blade.php ENDPATH**/ ?>