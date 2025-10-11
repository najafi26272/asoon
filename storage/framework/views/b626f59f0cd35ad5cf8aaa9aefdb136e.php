<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('manage-user.users-list-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3522007012-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

    <!--begin::Modal - delete user-->
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('manage-user.delete-user-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3522007012-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <!--end::Modal - -->

    <!--begin::Modal - delete user-->
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('manage-user.user-access-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3522007012-2', $__slots ?? [], get_defined_vars());

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
        document.addEventListener('show-delete-user-modal', event => {
            $("#kt_modal_delete_user").modal('show');
        });
        document.addEventListener('user-deleted', event => {
            $("#kt_modal_delete_user").modal('hide');
        });
         document.addEventListener('show-user-access-modal', event => {
                    $("#kt_modal_access_user").modal('show');
         });
        document.addEventListener('user_access_changed', event => {
            $("#kt_modal_access_user").modal('hide');
        });

    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project\asou\asoon\resources\views/admin/pages/user/users-list.blade.php ENDPATH**/ ?>