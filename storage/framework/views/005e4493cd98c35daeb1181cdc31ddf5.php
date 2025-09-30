<?php $__env->startPush('css'); ?>
    
    <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/custom/datepicker/flatpickr.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/custom/datepicker/pickr-themes.css")); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('manage-chat.management-chat-list-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1037857977-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>

        document.addEventListener('project_created', event => {
            $("#kt_modal_new_project").modal('hide');
        });

        document.addEventListener('show-delete-project-modal', event => {
            $("#kt_modal_delete_project").modal('show');
        }) ;

        document.addEventListener('$_project_editable', event => {
            $("#kt_modal_edit_project").modal('show');
        });
        document.addEventListener('project-deleted', event => {
            $("#kt_modal_delete_project").modal('hide');
        });

        document.addEventListener('project-edited', event => {
            $("#kt_modal_edit_project").modal('hide');
        });

    </script>

    
    <script src="<?php echo e(asset("assets/plugins/custom/datepicker/jdate.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/plugins/custom/datepicker/flatpickr-jdate.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/plugins/custom/datepicker/fa-jdate.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/plugins/custom/datepicker/pickr.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/plugins/custom/datepicker/forms-pickers.js")); ?>"></script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/asougrou/core/resources/views/admin/pages/chats/chat-list.blade.php ENDPATH**/ ?>