<div wire:ignore.self class="modal fade" id="kt_modal_edit_review" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <form wire:submit.prevent="submit" class="form" method="POST" id="kt_modal_new_review_form">
                <div class="modal-header" id="kt_modal_new_mosavabe_header">
                    <h2>افزودن بازبینی</h2>
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>
                <div class="modal-body py-10 px-lg-17">
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">متن بازنویسی</span>
                        </label>
                        <textarea wire:model="edited_content" id="editor" class="form-control form-control-solid" placeholder="متن بازنویسی"></textarea>
                        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['edited_content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="form-text text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                    </div>
                </div>
                <div class="modal-footer flex-center">
                    <button type="button" data-bs-dismiss="modal" class="btn btn-light me-3">لغو</button>
                    <button type="submit" class="btn btn-primary" id="submit-btn">
                        <span class="indicator-label">ثبت</span>
                        <span wire:loading class="indicator-progress">
                            لطفا صبر کنید...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>

<script src="<?php echo e(asset('assets/plugins/custom/tinymce/tinymce.bundle.js')); ?>"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Function to initialize TinyMCE
        function initTinyMCE(content = '') {
            tinymce.init({
                selector: "#editor",
                height: 480,
                toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | link code',
                plugins: "advlist autolink link image lists charmap print preview",
                menubar: false,
                setup: function (editor) {
                    editor.on('change', function () {
                        editor.save();
                    });
                    editor.setContent(content); // Set initial content from Livewire
                }
            });
        }

        // Function to remove TinyMCE
        function removeTinyMCE() {
            var editor = tinymce.get('editor');
            if (editor) {
                editor.remove();
            }
        }

        // Initialize TinyMCE when the modal is opened
        $('#kt_modal_edit_review').on('shown.bs.modal', function () {
            removeTinyMCE(); // Remove any existing instance
            initTinyMCE(<?php echo json_encode($edited_content, 15, 512) ?>);   // Initialize new instance with content from Livewire
        });

        // Remove TinyMCE when modal is closed
        $('#kt_modal_edit_review').on('hidden.bs.modal', function () {
            removeTinyMCE();
        });

        // Capture the editor's content on form submit
        document.getElementById('submit-btn').addEventListener('click', function (e) {
            let content = tinymce.get('editor').getContent();
            window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('edited_content', content); // Set the Livewire property
        });
    });
</script>
<?php $__env->stopPush(); ?><?php /**PATH D:\B\work\Asou\main asou react\asoon\resources\views/livewire/manage-news/review-news/edit-review-component.blade.php ENDPATH**/ ?>