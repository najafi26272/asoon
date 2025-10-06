

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('manage-news.news-list-component', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-925457730-0', $__slots ?? [], get_defined_vars());

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
        document.addEventListener('show-delete-news-modal', event => {
            $("#kt_modal_delete_news").modal('show');
        }) ;

        document.addEventListener('$_news_editable', event => {
            $("#kt_modal_edit_news").modal('show');
        });

        document.addEventListener('news_created', event => {
            $("#kt_modal_edit_news").modal('hide');
        });

        document.addEventListener('news-deleted', event => {
            $("#kt_modal_delete_news").modal('hide');
        });
    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\B\work\Asou\main asou react\asoon\resources\views/admin/pages/news/news-list.blade.php ENDPATH**/ ?>