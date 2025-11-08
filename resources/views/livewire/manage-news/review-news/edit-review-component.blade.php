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
                        <textarea  wire:model.defer="edited_content" id="summernote" class="form-control form-control-solid" placeholder="متن بازنویسی"></textarea>
                        @error('edited_content')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer flex-center">
                    <button type="button" data-bs-dismiss="modal" class="btn btn-light me-3">لغو</button>
                    <button type="submit" class="btn btn-primary">
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
