<div wire:ignore.self class="modal fade" id="kt_modal_edit_review" tabindex="-1" aria-hidden="true">
    <!-- Modal Dialog -->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!-- Modal Content -->
        <div class="modal-content">
            <!-- Form Start -->
            <form wire:submit.prevent="submit" class="form" method="POST" id="kt_modal_new_review_form">
                <!-- Modal Header -->
                <div class="modal-header" id="kt_modal_new_mosavabe_header">
                    <h2>افزودن بازبینی</h2>
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
                            <textarea wire:model="edited_content" class="form-control form-control-solid" rows="3"
                                      name="edited_content" placeholder="متن بازنویسی"></textarea>
                            @error('edited_content')
                                <div class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Display Title -->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>عنوان</span>
                            </label>
                            {{ $title }}
                        </div>
                        <!-- Display Link -->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>لینک</span>
                            </label>
                            {{ $link }}
                        </div>
                        <!-- Display Goals -->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>اهداف</span>
                            </label>
                            {{ $goals }}
                        </div>
                        <!-- Display Topic -->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>موضوع خبر</span>
                            </label>
                            {{ $topic }}
                        </div>
                        <!-- Display Summary -->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>خلاصه خبر</span>
                            </label>
                            {{ $summary }}
                        </div>
                    </div>
                </div>
                <!-- Modal Footer -->
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
            <!-- Form End -->
        </div>
    </div>
</div>