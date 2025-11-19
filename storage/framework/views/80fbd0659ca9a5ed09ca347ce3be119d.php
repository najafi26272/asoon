

<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset("assets/admin/assets/vendor/libs/bootstrap-select/bootstrap-select.css")); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('manage-news.news-title.title-list-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3078220210-0', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('manage-news.news-title.title-details-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3078220210-1', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('manage-news.news-title.edit-title-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3078220210-2', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('manage-news.news-title.my-title-history-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3078220210-3', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset("assets/plugins/custom/datepicker/jdate.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/custom/datepicker/flatpickr-jdate.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/custom/datepicker/fa-jdate.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/custom/datepicker/pickr.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/custom/datepicker/forms-pickers.js")); ?>"></script>
<script src="<?php echo e(asset("assets/admin/assets/vendor/libs/bootstrap-select/bootstrap-select.js")); ?>"></script>

    <script>
        document.addEventListener('$_title_details', event => {
            $("#kt_modal_title_details").modal('show');
        });

        document.addEventListener('$_my_title_history', event => {
            $("#kt_modal_my_title_history").modal('show');
        });

        document.addEventListener('$_title_editable', event => {
            $("#kt_modal_edit_title").modal('show');
        });

        document.addEventListener('title_edited', event => {
            $("#kt_modal_edit_title").modal('hide');
        });
    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\B\work\Asou\main asou react\asoon\resources\views/admin/pages/news/title/news-title-list.blade.php ENDPATH**/ ?>