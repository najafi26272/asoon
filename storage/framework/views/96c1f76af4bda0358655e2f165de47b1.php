<?php $__env->startPush('css'); ?>
    
    <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/custom/datepicker/flatpickr.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/custom/datepicker/pickr-themes.css")); ?>">

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('manage-task.task-list-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1026257067-0', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('manage-task.create-task-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1026257067-1', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('manage-task.delete-task-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1026257067-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <!--end::Modal - -->

    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('manage-task.edit-task-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1026257067-3', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

    <!--begin::Modal - change status task-->
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('manage-task.change-task-status-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1026257067-4', $__slots ?? [], get_defined_vars());

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
        document.addEventListener('task_created', event => {
            $("#kt_modal_new_task").modal('hide');
        });

        document.addEventListener('show-delete-task-modal', event => {
            $("#kt_modal_delete_task").modal('show');
        }) ;

        document.addEventListener('$_task_editable', event => {
            $("#kt_modal_edit_task").modal('show');
        });

        document.addEventListener('task_created', event => {
            $("#kt_modal_edit_task").modal('hide');
        });

        document.addEventListener('show-change-status-task-modal', event => {
            $("#kt_modal_change-status_task").modal('show');
        });
        document.addEventListener('task_status_changed', event => {
            $("#kt_modal_change-status_task").modal('hide');
        });
        document.addEventListener('task-deleted', event => {
            $("#kt_modal_delete_task").modal('hide');
        });

        window.addEventListener('$_mosavabeTask_uneditable_message',  event => {
            Swal.fire({
                text: 'این وظیفه از طریق مصوبات ثبت شده است. شما امکان ویرایش یا حذف آن را ندارید.',
                icon: 'warning',
                customClass: {
                    confirmButton: 'btn btn-primary'
                },
                confirmButtonText: 'متوجه شدم',
                buttonsStyling: false
            });
        })
        
        window.addEventListener('$_projectTask_uneditable_message',  event => {
            Swal.fire({
                text: 'این وظیفه از طریق پروژه ها ثبت شده است. شما امکان ویرایش یا حذف آن را ندارید.',
                icon: 'warning',
                customClass: {
                    confirmButton: 'btn btn-primary'
                },
                confirmButtonText: 'متوجه شدم',
                buttonsStyling: false
            });
        })

    </script>

    
    <script src="<?php echo e(asset("assets/plugins/custom/datepicker/jdate.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/plugins/custom/datepicker/flatpickr-jdate.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/plugins/custom/datepicker/fa-jdate.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/plugins/custom/datepicker/pickr.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/plugins/custom/datepicker/forms-pickers.js")); ?>"></script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/asougrou/core/resources/views/admin/pages/task/task-list.blade.php ENDPATH**/ ?>