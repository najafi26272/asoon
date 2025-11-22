<!-- Content Modal -->
<div class="modal fade" id="kt_modal_edit_content" tabindex="-1" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> محتوای بازنویسی شده </h5>
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
                        ></textarea>
                    </div>
                </div>               
                <div class="mt-5 notice rounded border-primary border border-dashed min-w-lg-600px p-6">
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
                    
                    {{-- Conditional Section for Description Input --}}
                    @if (!$status)
                    <div class="row">
                        <div class="col-12 mb-4 fv-row">
                            <input type="text" wire:model='description' class="form-control form-control-sm min-w-100px mt-1" id="reasonInput" placeholder="دلیل  ویرایش مجدد" />
                        </div>
                    </div>
                    @endif

                    {{-- Conditional Section for Rating --}}
                    @if ($status)
                    @if($editRate)
                    <div class="row">
                        <div class="col-2 d-flex flex-column justify-content-center mb-4 fv-row">
                            <label>امتیاز فعلی: </label>
                        </div>
                        <div class="rating justify-content-end" style="display: contents">
                            @for($i = 1; $i <= 5; $i++)
                            <div class="rating-label {{ $i <= ($editRate ?? 0) ? 'checked' : '' }}">
                                <i class="ki-duotone ki-star fs-6"></i>
                            </div>
                            @endfor
                        </div>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-3 d-flex flex-column justify-content-center mb-4 fv-row">
                            @if($editRate)<label>امتیازدهی مجدد: </label> @else <label>امتیازدهی: </label> @endif
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
                    @endif
                </div>
            </div>
            <div class="modal-footer">
                <button wire:click="editContent" class="btn btn-danger">
                    ثبت
                </button>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>

        $('#acceptOrReject').on('change', function (e) {
            let data = $(this).is(':checked');
            @this.set('status', data);
        });
    </script>
   
@endpush