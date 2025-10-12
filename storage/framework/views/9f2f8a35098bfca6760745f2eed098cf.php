<div wire:ignore.self class="modal fade" id="kt_modal_review_details" tabindex="-1" aria-hidden="true">
    <!-- Modal Dialog -->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!-- Modal Content -->
        <div class="modal-content">
            <!-- Form Start -->
                <!-- Modal Header -->
                <div class="modal-header" id="kt_modal_new_mosavabe_header">
                    <h2>جزییات</h2>
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>
                <!-- Modal Body -->
                <div class="modal-body py-10 px-lg-17">
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_new_mosavabe_scroll" data-kt-scroll="true"
                         data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                         data-kt-scroll-dependencies="#kt_modal_new_address_header"
                         data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
                        <!-- Edited Content Input -->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">متن بازنویسی</span>
                            </label>
                            <?php echo e($edited_content); ?>

                        </div>
                        <!-- Display Title -->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>عنوان</span>
                            </label>
                            <?php echo e($title); ?>

                        </div>
                        <!-- Display Link -->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>لینک</span>
                            </label>
                            <?php echo e($link); ?>

                        </div>
                        <!-- Display Goals -->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>اهداف</span>
                            </label>
                            <?php echo e($goals); ?>

                        </div>
                        <!-- Display Topic -->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>موضوع خبر</span>
                            </label>
                            <?php echo e($topic); ?>

                        </div>
                        <!-- Display Summary -->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>خلاصه خبر</span>
                            </label>
                            <?php echo e($summary); ?>

                        </div>
                    </div>
                </div>
        </div>
    </div>
</div><?php /**PATH D:\B\work\Asou\main asou react\asoon\resources\views/livewire/manage-review/review-details-component.blade.php ENDPATH**/ ?>