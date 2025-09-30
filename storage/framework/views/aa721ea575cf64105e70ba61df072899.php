<?php $__env->startPush('css'); ?>

    <link rel="stylesheet" href="<?php echo e(asset("assets/css/persian-datepicker.min.css")); ?>"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">


        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
            <!--begin::Thumbnail settings-->
            <div class="card card-flush py-4">
                <!--begin::کارت header-->
                <div class="card-header">
                    <!--begin::کارت title-->
                    <div class="card-title">
                        <h2>تصویر شاخص</h2>
                    </div>
                    <!--end::کارت title-->
                </div>
                <!--end::کارت header-->
                <!--begin::کارت body-->
                <div class="card-body text-center pt-0">
                    <!--begin::Image input-->
                    <!--begin::Image input placeholder-->
                    <style>.image-input-placeholder { background-image: url('assets/media/svg/files/blank-image.svg'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('assets/media/svg/files/blank-image-dark.svg'); }</style>
                    <!--end::Image input placeholder-->
                    <div class="image-input image-input-outline image-input-placeholder mb-3 image-input-empty" data-kt-image-input="true">
                        <!--begin::نمایش existing avatar-->
                        <div class="image-input-wrapper w-150px h-150px" style=""></div>
                        <!--end::نمایش existing avatar-->
                        <!--begin::Tags-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="تعویض آواتار" data-bs-original-title="تعویض آواتار" data-kt-initialized="1">
                            <i class="ki-duotone ki-pencil fs-7">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <!--begin::Inputs-->
                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                            <input type="hidden" name="avatar_remove" value="0">
                            <!--end::Inputs-->
                        </label>
                        <!--end::Tags-->
                        <!--begin::انصراف-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="انصراف avatar" data-bs-original-title="انصراف avatar" data-kt-initialized="1">
													<i class="ki-duotone ki-cross fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span>
                        <!--end::انصراف-->
                        <!--begin::حذف-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="حذف آواتار" data-bs-original-title="حذف آواتار" data-kt-initialized="1">
													<i class="ki-duotone ki-cross fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span>
                        <!--end::حذف-->
                    </div>
                    <!--end::Image input-->
                    <!--begin::توضیحات-->
                    <div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
                    <!--end::توضیحات-->
                </div>
                <!--end::کارت body-->
            </div>
            <!--end::Thumbnail settings-->
            <!--begin::وضعیت-->
            <div class="card card-flush py-4" data-select2-id="select2-data-123-9ko7">
                <!--begin::کارت header-->
                <div class="card-header">
                    <!--begin::کارت title-->
                    <div class="card-title">
                        <h2>وضعیت</h2>
                    </div>
                    <!--end::کارت title-->
                    <!--begin::کارت toolbar-->
                    <div class="card-toolbar">
                        <div class="rounded-circle w-15px h-15px bg-warning" id="kt_ecommerce_add_product_status"></div>
                    </div>
                    <!--begin::کارت toolbar-->
                </div>
                <!--end::کارت header-->
                <!--begin::کارت body-->
                <div class="card-body pt-0" data-select2-id="select2-data-122-1rm4">
                    <!--begin::انتخاب2-->
                    <select class="form-select mb-2 select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="انتخاب " id="kt_ecommerce_add_product_status_select" data-select2-id="select2-data-kt_ecommerce_add_product_status_select" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                        <option data-select2-id="select2-data-125-jpxe"></option>
                        <option value="published" selected="selected" data-select2-id="select2-data-8-e3m1">منتشر شده</option>
                        <option value="ذخیره شده" data-select2-id="select2-data-126-tkor">ذخیره شده</option>
                        <option value="scheduled" data-select2-id="select2-data-127-ld9n">در انتظار</option>
                        <option value="inactive" data-select2-id="select2-data-128-3f2h">غیرفعال</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5 select2-container--below" dir="rtl" data-select2-id="select2-data-7-erhq" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select mb-2" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-kt_ecommerce_add_product_status_select-container" aria-controls="select2-kt_ecommerce_add_product_status_select-container"><span class="select2-selection__rendered" id="select2-kt_ecommerce_add_product_status_select-container" role="textbox" aria-readonly="true" title="در انتظار">در انتظار</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <!--end::انتخاب2-->
                    <!--begin::توضیحات-->
                    <div class="text-muted fs-7">وضعیت محصول را تنظیم کنید.</div>
                    <!--end::توضیحات-->
                    <!--begin::تاریخpicker-->
                    <div class="mt-10">
                        <label for="kt_ecommerce_add_product_status_datepicker" class="form-label">انتخاب publishing date and time</label>
                        <input class="form-control flatpickr-input" id="kt_ecommerce_add_product_status_datepicker" placeholder="انتخاب تاریخ &amp; time" type="text" readonly="readonly">
                    </div>
                    <!--end::تاریخpicker-->
                </div>
                <!--end::کارت body-->
            </div>
            <!--end::وضعیت-->
            <!--begin::دسته بندی & tags-->
            <div class="card card-flush py-4">
                <!--begin::کارت header-->
                <div class="card-header">
                    <!--begin::کارت title-->
                    <div class="card-title">
                        <h2>محصولات جزییات</h2>
                    </div>
                    <!--end::کارت title-->
                </div>
                <!--end::کارت header-->
                <!--begin::کارت body-->
                <div class="card-body pt-0">
                    <!--begin::Input group-->
                    <!--begin::Tags-->
                    <label class="form-label">دسته بندی ها</label>
                    <!--end::Tags-->
                    <!--begin::انتخاب2-->
                    <select class="form-select mb-2 select2-hidden-accessible" data-control="select2" data-placeholder="انتخاب " data-allow-clear="true" multiple="" data-select2-id="select2-data-9-zu47" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                        <option></option>
                        <option value="کامپیوترها">کامپیوترها</option>
                        <option value="ساعت">ساعت</option>
                        <option value="هدست">هدست</option>
                        <option value="کفش">کفش</option>
                        <option value="دوربین">دوربین</option>
                        <option value="پیراهن">پیراهن</option>
                        <option value="چراغ مطالعه">چراغ مطالعه</option>
                        <option value="کیف دستی">کیف دستی</option>
                        <option value="شراب ها">شراب ها</option>
                        <option value="Sandals">Sandals</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="rtl" data-select2-id="select2-data-10-lxu1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select mb-2" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-n90x-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-n90x-container" placeholder="انتخاب " style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <!--end::انتخاب2-->
                    <!--begin::توضیحات-->
                    <div class="text-muted fs-7 mb-7">افزودن product to a category.</div>
                    <!--end::توضیحات-->
                    <!--end::Input group-->
                    <!--begin::Button-->
                    <a href="../../demo3/dist/apps/ecommerce/catalog/add-category.html" class="btn btn-light-primary btn-sm mb-10">
                        <i class="ki-duotone ki-plus fs-2"></i>ساختن new category</a>
                    <!--end::Button-->
                    <!--begin::Input group-->
                    <!--begin::Tags-->
                    <label class="form-label d-block">برچسب ها</label>
                    <!--end::Tags-->
                    <!--begin::Input-->
                    <tags class="tagify form-control mb-2 tagify--noTags tagify--empty" tabindex="-1">
                        <span contenteditable="" tabindex="0" data-placeholder="​" aria-placeholder="" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                        ​
                    </tags><input id="kt_ecommerce_add_product_tags" name="kt_ecommerce_add_product_tags" class="form-control mb-2" value="" tabindex="-1">
                    <!--end::Input-->
                    <!--begin::توضیحات-->
                    <div class="text-muted fs-7">افزودن برچسب محصول</div>
                    <!--end::توضیحات-->
                    <!--end::Input group-->
                </div>
                <!--end::کارت body-->
            </div>
            <!--end::دسته بندی & tags-->
            <!--begin::هفتهly sales-->
            <div class="card card-flush py-4">
                <!--begin::کارت header-->
                <div class="card-header">
                    <!--begin::کارت title-->
                    <div class="card-title">
                        <h2>فروش هفتگی</h2>
                    </div>
                    <!--end::کارت title-->
                </div>
                <!--end::کارت header-->
                <!--begin::کارت body-->
                <div class="card-body pt-0">
                    <span class="text-muted">اطلاعاتی موجود نیست. پس از انتشار محصول، داده های فروش شروع به جمع آوری خواهند کرد.</span>
                </div>
                <!--end::کارت body-->
            </div>
            <!--end::هفتهly sales-->
            <!--begin::Template settings-->
            <div class="card card-flush py-4">
                <!--begin::کارت header-->
                <div class="card-header">
                    <!--begin::کارت title-->
                    <div class="card-title">
                        <h2>قالب محصول</h2>
                    </div>
                    <!--end::کارت title-->
                </div>
                <!--end::کارت header-->
                <!--begin::کارت body-->
                <div class="card-body pt-0">
                    <!--begin::انتخاب stیاe template-->
                    <label for="kt_ecommerce_add_product_stیاe_template" class="form-label">انتخاب بک قالب</label>
                    <!--end::انتخاب stیاe template-->
                    <!--begin::انتخاب2-->
                    <select class="form-select mb-2 select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="انتخاب " id="kt_ecommerce_add_product_stیاe_template" data-select2-id="select2-data-kt_ecommerce_add_product_stیاe_template" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                        <option data-select2-id="select2-data-145-42x0"></option>
                        <option value="default" selected="selected" data-select2-id="select2-data-12-xs1d">قالب پیش فرض</option>
                        <option value="electronics" data-select2-id="select2-data-146-2ur1">الکترونیک</option>
                        <option value="office" data-select2-id="select2-data-147-mp8w">اداری</option>
                        <option value="fashion" data-select2-id="select2-data-148-jdzk">فشن</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5 select2-container--above" dir="rtl" data-select2-id="select2-data-11-ue6n" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select mb-2" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-kt_ecommerce_add_product_stیاe_template-container" aria-controls="select2-kt_ecommerce_add_product_stیاe_template-container"><span class="select2-selection__rendered" id="select2-kt_ecommerce_add_product_stیاe_template-container" role="textbox" aria-readonly="true" title="قالب پیش فرض">قالب پیش فرض</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <!--end::انتخاب2-->
                    <!--begin::توضیحات-->
                    <div class="text-muted fs-7">اختصاص دادن یک الگو از موضوع فعلی شما برای تعریف نحوه نمایش یک محصول واحد.</div>
                    <!--end::توضیحات-->
                </div>
                <!--end::کارت body-->
            </div>
            <!--end::Template settings-->
        </div>









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
                                                    <input  type="text" class="form-control form-control-solid" name="date" placeholder="زمان و تاریخ باهم" />
                                                    
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


    <?php $__env->stopPush(); ?>


<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel\asuojalasat\resources\views/admin/pages/forms.blade.php ENDPATH**/ ?>