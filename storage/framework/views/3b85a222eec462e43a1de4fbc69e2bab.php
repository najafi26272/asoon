   <!-- Content Modal -->
   <div class="modal fade" id="kt_modal_edit_content" tabindex="-1" wire:ignore.self >
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> 
                    محتوای بازنویسی شده
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                    <textarea 
                        id="editor_content"
                        
                        wire:model="edited_content"
                        class="form-control w-100"
                        rows="4"
                        value=<?php echo e($edited_content); ?>

                    ></textarea>
                    
                    </div>

                </div>
               
                <div class="  mt-5 notice  rounded border-primary border border-dashed min-w-lg-600px p-6">
                    <div class="row">
                        <div class="col-2 d-flex justify-content-center flex-column mb-4 fv-row">
                            <label>وضعیت: </label>
                        </div>
                        <div class="col-2 d-flex flex-column justify-content-center mb-4 fv-row">
                            <div class="form-check form-check-solid form-switch form-check-success fv-row">
                                <input wire:model='status' class="form-check-input w-45px h-30px" type="checkbox" id="accept" >
                                <label class="form-check-label" for="accept">تایید</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12 mb-4 fv-row">
                            <input type="text" wire:model='description' value="<?php echo e($description); ?>" class="form-control form-control-sm min-w-100px mt-1" id="reasonInput" placeholder="دلیل  ویرایش مجدد" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 d-flex flex-column justify-content-center mb-4 fv-row">
                            <label>امتیازدهی: </label>
                        </div>
                        <div class="review-rating col-lg-10 col-sm-12 mb-4 ">
                            <input type="radio" wire:model="review_rating" id="star10" name="review-rating" value="5" />
                            <label class="review-star" for="star10" title="Awesome" aria-hidden="true"></label>
                            <input type="radio" wire:model="review_rating"  id="star9" name="review-rating" value="4" />
                            <label class="review-star" for="star9" title="Great" aria-hidden="true"></label>
                            <input type="radio" wire:model="review_rating"  id="star8" name="review-rating" value="3" />
                            <label class="review-star" for="star8" title="Very good" aria-hidden="true"></label>
                            <input type="radio" wire:model="review_rating" id="star7" name="review-rating" value="2" />
                            <label class="review-star" for="star7" title="Good" aria-hidden="true"></label>
                            <input type="radio" wire:model="review_rating" id="star6" name="review-rating" value="1" />
                            <label class="review-star" for="star6" title="Bad" aria-hidden="true"></label>
                        </div>
                    </div>
                    
                </div>
   
            </div>
            <div class="modal-footer">
                <button 
                    wire:click="editContent"
                    class="btn btn-danger">
                    ثبت
                </button>
            </div>
        </div>
    </div>
</div><?php /**PATH D:\project\asou\asoon\resources\views/livewire/manage-news/monitoring-news/edit-content-component.blade.php ENDPATH**/ ?>