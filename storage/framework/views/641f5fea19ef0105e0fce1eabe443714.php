<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset("assets/admin/assets/vendor/libs/bootstrap-select/bootstrap-select.css")); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('manage-review.review-list-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2471014533-0', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('manage-review.edit-review-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2471014533-1', $__slots ?? [], get_defined_vars());

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
        document.addEventListener('$_review_editable', event => {
            $("#kt_modal_edit_review").modal('show');
        });

        document.addEventListener('review_edited', event => {
            $("#kt_modal_edit_review").modal('hide');
        });
    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\B\work\Asou\main asou react\asoon\resources\views/admin/pages/news/review/review-news-list.blade.php ENDPATH**/ ?>