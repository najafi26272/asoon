<?php $__env->startPush('css'); ?>
    
    <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/custom/datepicker/flatpickr.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/custom/datepicker/pickr-themes.css")); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('manage-projects.project-list-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1144748434-0', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('manage-projects.create-project-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1144748434-1', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('manage-projects.delete-project-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1144748434-2', $__slots ?? [], get_defined_vars());

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
        // $('#users').select2({
        //     width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        //     placeholder: $(this).data('placeholder'),
        //     closeOnSelect: false,
        //     });
        //     $('#users_2').select2({

        //     width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        //     placeholder: $(this).data('placeholder'),
        //     closeOnSelect: false,
        // });

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


<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/asougrou/core/resources/views/admin/pages/projects/project-list.blade.php ENDPATH**/ ?>