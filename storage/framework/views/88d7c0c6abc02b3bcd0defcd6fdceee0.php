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
                    <!--begin::Scroll-->
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_new_mosavabe_scroll" data-kt-scroll="true"
                         data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                         data-kt-scroll-dependencies="#kt_modal_new_address_header"
                         data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
                        
                        
                         <table class="table  table-row-dashed ">
                            <tbody>
                                <tr>
                                    <td >متن بازنویسی</td>
                                    <td><?php echo e($edited_content); ?></td>
                                </tr>
                                <tr>
                                    <td >عنوان</td>
                                    <td><?php echo e($title); ?></td>
                                </tr>
                                <tr>
                                    <td>لینک</td>
                                    <td><?php echo e($link); ?></td>
                                </tr>
                                <tr>
                                    <td >اهداف</td>
                                    <td><?php echo e($goals); ?></td>
                                </tr>
                                <tr>
                                    <td>موضوع</td>
                                    <td><?php echo e($topic); ?></td>
                                </tr>
                                <tr>
                                    <td>خلاصه</td>
                                    <td><?php echo e($summary); ?></td>
                                </tr>
                                <tr>
                                    <td>امتیاز خبر</td>
                                    <td>
                                        <div class="rating justify-content-end">
                                            <!--[if BLOCK]><![endif]--><?php for($i = 1; $i <= 5; $i++): ?>
                                                <div class="rating-label <?php echo e($i <= ($newsRate ?? 0) ? 'checked' : ''); ?>">
                                                    <i class="ki-duotone ki-star fs-6"></i>
                                                </div>
                                            <?php endfor; ?><!--[if ENDBLOCK]><![endif]-->
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>امتیاز بازنویسی</td>
                                    <td>
                                        <div class="rating justify-content-end">
                                            <!--[if BLOCK]><![endif]--><?php for($i = 1; $i <= 5; $i++): ?>
                                                <div class="rating-label <?php echo e($i <= ($editRate ?? 0) ? 'checked' : ''); ?>">
                                                    <i class="ki-duotone ki-star fs-6"></i>
                                                </div>
                                            <?php endfor; ?><!--[if ENDBLOCK]><![endif]-->
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--end::Scroll-->
                </div>
        </div>
    </div>
</div><?php /**PATH D:\B\work\Asou\main asou react\asoon\resources\views/livewire/manage-news/review-news/review-details-component.blade.php ENDPATH**/ ?>