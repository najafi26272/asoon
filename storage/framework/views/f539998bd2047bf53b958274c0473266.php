
<?php $__env->startPush("style"); ?>
<link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/47.0.0/ckeditor5.css" />

<?php $__env->stopPush(); ?>
<div class="card mb-5 mb-xl-10">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">رصدها </span>
        </h3>
            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                 data-bs-original-title="Click to add a user" data-kt-initialized="1">
               
                 <!--begin::جستجو-->
            <div id="kt_header_search" class="header-search d-flex align-items-center w-lg-250px me-3" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="lg" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
                
                <!--begin::Fیاm(use d-none d-lg-block classes for responsive search)-->
                <div wire:ignore data-kt-search-element="form" class="searching-div d-block d-lg-block w-100 position-relative mb-2 mb-lg-0" autocomplete="true">
                    <!--end::Hidden input-->
                    <!--begin::Icon-->
                    <i class="ki-duotone ki-magnifier fs-2 text-gray-700 position-absolute top-50 translate-middle-y ms-4">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <!--end::Icon-->
                    <!--begin::Input-->
                    <input type="text" id="searching" class="searching-input form-control bg-transparent ps-13 fs-7 " style="border-radius:0.3rem;padding-top: calc(0.55rem + 1px);padding-top: calc(0.55rem + 1px);" name="search" placeholder="جستجوی عنوان" data-kt-search-element="input" />
                    <!--end::Input-->
                    <!--begin::Spinner-->
                    <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
						<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
					</span>
                    <!--end::Spinner-->
                    <!--begin::ریست-->
                    <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
						<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
							<span class="path1"></span>
							<span class="path2"></span>
						</i>
					</span>
                    <!--end::ریست-->
                </div>
                <!--end::Form-->
            </div>
             
            <!--[if BLOCK]><![endif]--><?php if(count($items) != 0): ?>
                <a class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal"
                   data-bs-target="#kt_modal_new_news">
                    <i class="ki-duotone ki-plus fs-2"></i>رصد جدید</a>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
          
            </div>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <?php if(count($items) == 0): ?>
                <div class="py-10 text-center">
                    <img src="<?php echo e(asset("assets/media/svg/illustrations/easy/2.svg")); ?>" class=" w-200px"
                         alt="">
                    <p class="m-5">در حال حاضر رصدی  برای شما ثبت نشده است.</p>
                    <a class="btn btn-sm btn-primary me-2" data-bs-toggle="modal"
                       data-bs-target="#kt_modal_new_news">رصد جدید
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
            <?php else: ?>
                <!--begin::Table-->
                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                    <tr class="fw-bold text-muted">
                        <th class="min-w-200px">
                            عنوان
                        </th>
                        <th class="min-w-150px">
                            لینک  
                        </th>  
                        <th class="min-w-100px">
                            تاریخ ثبت  
                        </th>                      
                        <th class="min-w-100px">
                            وضعیت
                        </th>   
                        <th class="min-w-100px text-end">
                            عملیات
                        </th>                        
                    </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="">
                            <?php echo e($item->title); ?>

                            </td>
                            <td class="">
                                <?php echo e($item->link); ?>

                            </td>
                            <td>
                                <p class="text-dark fw-bold text-hover-primary d-block fs-6">
                                    <?php echo e($item->created_at? verta($item->created_at)->format('Y/m/d'): ''); ?>

                                </p>
                            </td>
                          
                            <td>
                                <a class="cursor-pointer" >
                                    <!--[if BLOCK]><![endif]--><?php if($item->status == "waiting"): ?>
                                        <div class="badge badge-light-warning"> در انتظار</div>
                                    <?php elseif($item->status == "progressing"): ?>

                                        <div class="badge badge-light-primary">درحال انجام</div>

                                    <?php elseif($item->status == "finished"): ?>
                                        <div class="badge badge-light-success">انجام شده</div>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </a>
                            </td>
                            <td>
                                <div class="d-flex justify-content-end flex-shrink-0">
                                    <a wire:click="update(<?php echo e($item->id); ?>)"
                                       class="cursor-pointer btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">

                                    <span class="ms-1" data-bs-toggle="tooltip" title="ویرایش">
										<i class="ki-duotone ki-pencil fs-2 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
                                    </a>
                                    <a wire:click="delete(<?php echo e($item->id); ?>)"
                                       class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm cursor-pointer">
                                        <span class="ms-1" data-bs-toggle="tooltip" title="حذف">
                                    <i class="ki-duotone ki-trash fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                   </span>
                                    </a>
                                </div>
                            </td>
                          
                           
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <!--[if BLOCK]><![endif]--><?php if(count($items) != 0): ?>
                <div class="custom-paginate clearfix" style="margin-top: 10px;margin-right:10px">
                    <?php echo e($items->links()); ?>

                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
    <style>
        .text-new-green{
            color:#3da5a5 !important;
        }
    </style>



<br>
<div class="px-5">
    <h2>لیست بازبینی های من</h2>
  <!--begin::Table-->
  <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
    <!--begin::Table head-->
    <thead>
    <tr class="fw-bold text-muted">
        <th class="min-w-200px">
            عنوان
        </th>
        <th class="min-w-100px">
              لینک
        </th>
        <th class="min-w-100px">
            تاریخ ثبت  
        </th>  
        <th class="min-w-220px">
              جزئیات
        </th>                    
        <th class="min-w-100px">
            وضعیت
        </th>   
        <th class="min-w-100px text-end">
            عملیات
        </th>                        
    </tr>
    </thead>
    <!--end::Table head-->
    <!--begin::Table body-->
    <tbody>
        <tr>
            <td class="">
            عنوان رصد
            </td>
            <td class="">
              link
            </td>
            <td>
                <p class="text-dark fw-bold text-hover-primary d-block fs-6">
                    9/7/6789
                    
                </p>
            </td>
            <td>
                متن خبر
            </td>
        
            <td>
                <a class="cursor-pointer" >
                        <div class="badge badge-light-warning"> در انتظار</div>

                        <div class="badge badge-light-primary">درحال انجام</div>

                        <div class="badge badge-light-success">انجام شده</div>
                  
                </a>
            </td>
            <td>
                <div class="d-flex justify-content-end flex-shrink-0">
                    <a  data-bs-toggle="modal"
                       data-bs-target="#kt_modal_news_review"

                       class="cursor-pointer btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">

                    <span class="ms-1" data-bs-toggle="tooltip" title="ویرایش">
                        <i class="ki-duotone ki-pencil fs-2 text-gray-500 fs-6">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </span>
                    </a>

                    
                    <a 
                       class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm cursor-pointer">
                        <span class="ms-1" data-bs-toggle="tooltip" title="حذف">
                    <i class="ki-duotone ki-trash fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                        <span class="path5"></span>
                    </i>
                   </span>
                    </a>
                </div>
            </td>
          
           
        </tr>
  
    </tbody>
    <!--end::Table body-->
    </table>
    <!--end::Table-->
</div>




</div>
<?php $__env->startPush('scripts'); ?>
    <script>
        $('#searching').on('keyup', function (e) {
            let data = $(this).val();
            window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('char', data);
        });
    </script>



<script src="<?php echo e(asset("assets/plugins/custom/tinymce/tinymce.bundle.js")); ?>"></script>


<script>
    // start textEditor
    var options = {selector: "#editor", height : "480"};

    if ( KTThemeMode.getMode() === "dark" ) {
        options["skin"] = "oxide-dark";
        options["content_css"] = "dark";
    }

    tinymce.init({
        selector: "#editor",
        height : "480",
        toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | link code',    plugins : "advlist autolink link image lists charmap print preview",
        menubar: false 
    });
    // end textEditor
</script>

<?php $__env->stopPush(); ?><?php /**PATH D:\project\asou\asoon\resources\views/livewire/manage-news/news-list-component.blade.php ENDPATH**/ ?>