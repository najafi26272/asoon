<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset("assets/admin/assets/vendor/libs/bootstrap-select/bootstrap-select.css")); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('manage-news.monitoring-news.news-list-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3349914660-0', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('manage-news.monitoring-news.create-news-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3349914660-1', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('manage-news.monitoring-news.delete-news-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3349914660-2', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('manage-news.monitoring-news.edit-news-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3349914660-3', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('manage-news.monitoring-news.add-info-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3349914660-4', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('manage-news.monitoring-news.add-editor-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3349914660-5', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('manage-news.monitoring-news.news-details-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3349914660-6', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('manage-news.monitoring-news.review-history-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3349914660-7', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('manage-news.monitoring-news.edit-content-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3349914660-8', $__slots ?? [], get_defined_vars());

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
        document.addEventListener('$_news_details', event => {
            $("#kt_modal_news_details").modal('show');
        });

        document.addEventListener('$_review_history', event => {
            $("#kt_modal_review_history").modal('show');
        });

        document.addEventListener('$_content_editable', event => {
            $("#kt_modal_edit_content").modal('show');
        });
        document.addEventListener('content-edited', event => {
            $("#kt_modal_edit_content").modal('hide');
        });
        
        document.addEventListener('show-delete-news-modal', event => {
            $("#kt_modal_delete_news").modal('show');
        });

        document.addEventListener('show-add-info-news-modal', event => {
            $("#kt_modal_add-info-news").modal('show');
        });

        document.addEventListener('info-added', event => {
            $("#kt_modal_add-info-news").modal('hide');
        });

        document.addEventListener('show-add-editor-news-modal', event => {
            $("#kt_modal_add-editor-news").modal('show');
        });

        document.addEventListener('editor-added', event => {
            $("#kt_modal_add-editor-news").modal('hide');
        });
        
        document.addEventListener('$_news_editable', event => {
            $("#kt_modal_edit_news").modal('show');
        });

        document.addEventListener('news_created', event => {
            $("#kt_modal_new_news").modal('hide');
            $("#kt_modal_edit_news").modal('hide');
        });

        document.addEventListener('news-deleted', event => {
            $("#kt_modal_delete_news").modal('hide');
        });

        document.addEventListener('news-rejected', event => {
            $("#rejectModal").modal('hide');
        });
        document.addEventListener('newsTitle-rejected', event => {
            $("#rejectTitrModal").modal('hide');
            $("#kt_modal_reject_title").modal('hide');
        });
    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project\asou\asoon\resources\views/admin/pages/news/monitoring/monitoring-news-list.blade.php ENDPATH**/ ?>