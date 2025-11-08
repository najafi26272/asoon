<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset("assets/admin/assets/vendor/libs/bootstrap-select/bootstrap-select.css")); ?>">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">

    <?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('manage-news.review-news.review-list-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3432314918-0', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('manage-news.review-news.review-details-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3432314918-1', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('manage-news.review-news.edit-review-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3432314918-2', $__slots ?? [], get_defined_vars());

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



<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>

    <script>
        document.addEventListener('$_review_details', event => {
            $("#kt_modal_review_details").modal('show');
        });

        document.addEventListener('$_review_editable', event => {
            $("#kt_modal_edit_review").modal('show');
        });

        document.addEventListener('review_edited', event => {
            $("#kt_modal_edit_review").modal('hide');
        });
        

        $(document).ready(function() {
            
        });
    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project\asou\asoon\resources\views/admin/pages/news/review/review-news-list.blade.php ENDPATH**/ ?>