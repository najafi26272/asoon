<!-- Content Modal -->
<div wire:ignore.self class="modal fade" id="kt_modal_edit_content" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <form wire:submit.prevent="submit" class="form" method="POST" id="kt_modal_new_review_form">
                <div class="modal-header" id="kt_modal_new_mosavabe_header">
                    <h2>محتوای بازنویسی شده</h2>
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>
                <div class="modal-body py-10 px-lg-17">
                    <input type="text" value="<?php echo e($edited_content); ?>" id="current_edited_content" style="display:none;">
                    <div wire:ignore class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">متن بازنویسی</span>
                        </label>
                        <textarea id="editor" class="form-control form-control-solid" placeholder="متن بازنویسی"></textarea>
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
                    <div class="mt-5 notice rounded border-primary border border-dashed p-6 d-flex flex-column fv-row">
                        <div>
                            <div class="row">
                                <div class="col-2 d-flex justify-content-end mb-4 fv-row">
                                    <label>وضعیت: </label>
                                </div>
                                <div class="col-2 d-flex flex-column justify-content-center mb-4 fv-row">
                                    <div class="form-check form-check-solid form-switch form-check-success fv-row">
                                        <input wire:model='status' class="form-check-input w-45px h-30px" type="checkbox" id="acceptOrReject">
                                        <label class="form-check-label" for="accept">تایید</label>
                                    </div>
                                </div>
                            </div>
                            
                            <!--[if BLOCK]><![endif]--><?php if(!$status): ?>
                                <div class="row">
                                    <div class="col-12 mb-4 fv-row">
                                        <input type="text" wire:model='description' class="form-control form-control-sm min-w-100px mt-1" id="reasonInput" placeholder="دلیل  ویرایش مجدد" />
                                    </div>
                                </div>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            
                            <!--[if BLOCK]><![endif]--><?php if($status): ?>
                                <!--[if BLOCK]><![endif]--><?php if($editRate): ?>
                                    <div class="row">
                                        <div class="col-2 d-flex flex-column justify-content-center mb-4 fv-row">
                                            <label>امتیاز فعلی: </label>
                                        </div>
                                        <div class="rating justify-content-end" style="display: contents">
                                            <!--[if BLOCK]><![endif]--><?php for($i = 1; $i <= 5; $i++): ?>
                                                <div class="rating-label <?php echo e($i <= ($editRate ?? 0) ? 'checked' : ''); ?>">
                                                    <i class="ki-duotone ki-star fs-6"></i>
                                                </div>
                                            <?php endfor; ?><!--[if ENDBLOCK]><![endif]-->
                                        </div>
                                    </div>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                <div class="row">
                                    <div class="col-3 d-flex flex-column justify-content-center mb-4 fv-row">
                                        <!--[if BLOCK]><![endif]--><?php if($editRate): ?><label>امتیازدهی مجدد: </label> <?php else: ?> <label>امتیازدهی: </label> <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    </div>
                                    <div class="review-rating col-lg-9 col-sm-12 mb-4 ">
                                        <input type="radio" wire:model="review_rating" id="star10" name="review-rating" value="5" />
                                        <label class="review-star" for="star10" title="Awesome" aria-hidden="true"></label>
                                        <input type="radio" wire:model="review_rating" id="star9" name="review-rating" value="4" />
                                        <label class="review-star" for="star9" title="Great" aria-hidden="true"></label>
                                        <input type="radio" wire:model="review_rating" id="star8" name="review-rating" value="3" />
                                        <label class="review-star" for="star8" title="Very good" aria-hidden="true"></label>
                                        <input type="radio" wire:model="review_rating" id="star7" name="review-rating" value="2" />
                                        <label class="review-star" for="star7" title="Good" aria-hidden="true"></label>
                                        <input type="radio" wire:model="review_rating" id="star6" name="review-rating" value="1" />
                                        <label class="review-star" for="star6" title="Bad" aria-hidden="true"></label>
                                    </div>
                                </div>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
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
            function initTinyMCE(content = '') {
                tinymce.init({
                    selector: "#editor",
                    height: 480,
                    toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | link code',
                    plugins: "advlist autolink link image lists charmap print preview",
                    menubar: false,
                    setup: function (editor) {
                        editor.on('change', function () {
                            editor.save(); // Ensure the content is saved on change
                        });
                    },
                    init_instance_callback: function (editor) {
                        editor.setContent(content); // Set the content passed to the editor
                    },
                });
            }

            // Function to remove TinyMCE instance
            function removeTinyMCE() {
                var editor = tinymce.get('editor');
                if (editor) {
                    editor.remove();
                }
            }

            // Listen for the custom event to open the modal
            window.addEventListener('open-edit-modal', function() {
                setTimeout(function() {
                    var currentValue = window.Livewire.find('<?php echo e($_instance->getId()); ?>').edited_content; // Access the Livewire property directly
                    console.log('Current value:', currentValue); // Debugging line
                    removeTinyMCE(); // Remove any existing instance
                    initTinyMCE(currentValue); // Pass current content directly
                    $('#kt_modal_edit_content').modal('show'); // Show the modal
                }, 1); // Delay to ensure data is updated
            });

            // Remove TinyMCE when the modal is hidden
            $('#kt_modal_edit_content').on('hidden.bs.modal', function () {
                removeTinyMCE(); // Clean up to prevent memory leaks
            });

            // Capture the editor's content on form submit
            document.getElementById('submit-btn').addEventListener('click', function (e) {
                let content = tinymce.get('editor').getContent(); // Get content from TinyMCE
                window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('edited_content', content); // Update Livewire property
            });
        });
        // Update Livewire property for status
        $('#acceptOrReject').on('change', function (e) {
            let data = $(this).is(':checked');
            window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('status', data);
        });
    </script>
<?php $__env->stopPush(); ?><?php /**PATH D:\B\work\Asou\main asou react\asoon\resources\views/livewire/manage-news/monitoring-news/edit-content-component.blade.php ENDPATH**/ ?>