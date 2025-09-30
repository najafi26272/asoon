<?php $__env->startPush('css'); ?>

    <link rel="stylesheet" href="<?php echo e(asset("assets/css/persian-datepicker.min.css")); ?>"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />





    <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/custom/datepicker/flatpickr.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/custom/datepicker/pickr-themes.css")); ?>">


<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <!--begin::Container-->
            <div class="container-xxl" id="kt_content_container">
                <a href="#" class="btn btn-primary er fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#kt_modal_new_jalase">ایجاد جلسه</a>
                <!--begin::Modal - جلسه های جدید-->
                <div class="modal fade" id="kt_modal_new_jalase" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Form-->
                            <form class="form" action="#" id="kt_modal_new_jalase_form">
                                <!--begin::Modal header-->
                                <div class="modal-header" id="kt_modal_new_jalase_header">
                                    <!--begin::Modal title-->
                                    <h2>ایجاد جلسه</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                        <i class="ki-duotone ki-cross fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body py-10 px-lg-17">
                                    <!--begin::Scroll-->
                                    <div class="scroll-y me-n7 pe-7" id="kt_modal_new_jalase_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header" data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <!--begin::Tags-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">عنوان جلسه</span>
                                                <span class="ms-1" data-bs-toggle="tooltip" title="نام جلسه">
										<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
                                            </label>
                                            <!--end::Tags-->
                                            <input type="text" class="form-control form-control-solid" placeholder="عنوان" name="target_title" />
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="row g-9 mb-8">
                                            <!--begin::Col-->
                                            <div class="col-md-6 fv-row">
                                                <!--begin::Input group-->
                                                <div class="d-flex flex-column mb-8 fv-row">
                                                    <!--begin::Tags-->
                                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                        <span class="required"> حاضرین</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip" title="افراد حاضر در جلسه را انتخاب کنید.">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                                    </label>
                                                    <!--end::Tags-->
                                                    <select class="form-select form-select-solid" id="user-present" data-placeholder="افراد حاضر در جلسه را انتخاب کنید." multiple>
                                                            <option> محمدی</option>
                                                            <option>عسگری </option>
                                                            <option>حسینی</option>
                                                            <option>فردوسی</option>
                                                            <option>مظاهری </option>
                                                    </select>

                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--begin::Col-->
                                            <div class="col-md-6 fv-row">
                                                <!--begin::Input group-->
                                                <div class="d-flex flex-column mb-8 fv-row">
                                                    <!--begin::Tags-->
                                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                        <span class="required"> غائبین</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip" title="افراد غائب در جلسه را انتخاب کنید.">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span>
                                                    </label>
                                                    <!--end::Tags-->
                                                    <select class="form-select form-select-solid" id="user-absent" data-placeholder="افراد غائب در جلسه را انتخاب کنید." multiple>
                                                        <option> محمدی</option>
                                                        <option>عسگری </option>
                                                        <option>حسینی</option>
                                                        <option>فردوسی</option>
                                                        <option>مظاهری </option>
                                                    </select>
                                                </div>
                                                <!--end::Input group-->
                                            </div>

                                        </div>
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-8">
                                            <div class="mb-8 fv-row">
                                                <label class="required fs-6 fw-semibold mb-2">زمان جلسه</label>
                                                <!--begin::Input-->
                                                <div class="position-relative d-flex align-items-center">

                                                    <!--begin::تاریخpicker-->


                                                    <input type="text" class="form-control form-control-solid" name="date" placeholder="زمان و تاریخ باهم" id="flatpickr-datetime">
                                                    <!--end::تاریخpicker-->
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-8">
                                            <label class="fs-6 fw-semibold mb-2">توضیحات</label>
                                            <textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="توضیحات  "></textarea>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-8">
                                            <label class="fs-6 fw-semibold mb-2">مدعوین</label>
                                            <textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="مدعوین  "></textarea>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-8">
                                            <label class="fs-6 fw-semibold mb-2">دسته بندی پروژه</label>
                                            <select class="form-select form-select-solid" id="category" data-placeholder="دسته بندی پروژه" multiple>
                                                <option> عصر زنان</option>
                                                <option>جهان بانو </option>
                                                <option>سپید</option>
                                            </select>
                                        </div>
                                        <!--end::Input group-->





                                    </div>
                                    <!--end::Scroll-->
                                </div>
                                <!--end::Modal body-->
                                <!--begin::Modal footer-->
                                <div class="modal-footer flex-center">
                                    <!--begin::Button-->
                                    <button type="reset" id="kt_modal_new_jalase_cancel" class="btn btn-light me-3">لغو</button>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="submit" id="kt_modal_new_jalase_submit" class="btn btn-primary">
                                        <span class="indicator-label">ثبت</span>
                                        <span class="indicator-progress">لطفا صبر کنید...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <!--end::Button-->
                                </div>
                                <!--end::Modal footer-->
                            </form>
                            <!--end::Form-->
                        </div>
                    </div>
                </div>
                <!--end::Modal - جلسه  جدید-->
            <!--end::Container-->
        </div>
        <!--end::Content-->
    </div>



<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

            <script>
                $( '#user-present' ).select2( {

                    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
                    placeholder: $( this ).data( 'placeholder' ),
                    closeOnSelect: false,
                } );
                $( '#user-absent' ).select2( {

                    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
                    placeholder: $( this ).data( 'placeholder' ),
                    closeOnSelect: false,
                } );
                $( '#category' ).select2( {

                    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
                    placeholder: $( this ).data( 'placeholder' ),
                    closeOnSelect: false,
                } );
            </script>
    <script src="<?php echo e(asset("assets/js/custom/utilities/modals/new-target.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/js/custom/utilities/modals/users-search.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/js/persian-date.min.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/js/persian-datepicker.min.js")); ?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



            <script src="<?php echo e(asset("assets/plugins/custom/datepicker/jdate.js")); ?>"></script>
            <script src="<?php echo e(asset("assets/plugins/custom/datepicker/flatpickr-jdate.js")); ?>"></script>
            <script src="<?php echo e(asset("assets/plugins/custom/datepicker/fa-jdate.js")); ?>"></script>
            <script src="<?php echo e(asset("assets/plugins/custom/datepicker/pickr.js")); ?>"></script>
            <script src="<?php echo e(asset("assets/plugins/custom/datepicker/forms-pickers.js")); ?>"></script>
    <?php $__env->stopPush(); ?>


<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel\asuojalasat\resources\views/admin/pages/forms2.blade.php ENDPATH**/ ?>