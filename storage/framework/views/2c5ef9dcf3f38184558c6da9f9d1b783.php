<?php $__env->startPush('css'); ?>


<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('manage-categories.category-list-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2988701643-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('manage-categories.delete-category-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2988701643-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('manage-categories.edit-category-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2988701643-2', $__slots ?? [], get_defined_vars());

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
        document.addEventListener('show-delete-category-modal', event => {
            $("#kt_modal_delete_category").modal('show');
        }) ;

        document.addEventListener('$_category_editable', event => {
            $("#kt_modal_edit_category").modal('show');
        });

        document.addEventListener('category_created', event => {
            $("#kt_modal_edit_category").modal('hide');
        });

        document.addEventListener('category-deleted', event => {
            $("#kt_modal_delete_category").modal('hide');
        });

        
    </script>

<?php $__env->stopPush(); ?>


<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/asougrou/core/resources/views/admin/pages/categories/category-list.blade.php ENDPATH**/ ?>