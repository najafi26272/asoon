
<?php $__env->startPush("style"); ?>
<link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/47.0.0/ckeditor5.css" />

<?php $__env->stopPush(); ?>

<div class="card mb-5 mb-xl-10">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <!--begin::Nav group-->
        <div class="d-flex flex-column" style="width: 100%">
           <div class="nav-group nav-group-outline mx-auto mb-3" data-kt-buttons="true">
               <button 
                   class="btn btn-color-gray-600 btn-active btn-active-secondary px-6 py-3 me-2 <?php if($activeTab === 'web'): ?> active <?php endif; ?>" 
                   wire:click="setActiveTab('web')"
                   data-kt-plan="web">
                   سایت
               </button>
               <button 
                   class="btn btn-color-gray-600 btn-active btn-active-secondary px-6 py-3 <?php if($activeTab === 'socialMedia'): ?> active <?php endif; ?>" 
                   wire:click="setActiveTab('socialMedia')"
                   data-kt-plan="socialMedia">
                   شبکه های اجتماعی
               </button>
           </div>
        </div>
       <!--end::Nav group-->

        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">لیست تیترهای من </span>
        </h3>
            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                 data-bs-original-title="Click to add a user" data-kt-initialized="1">
                <!--begin::Menu-->
                <a  href="#"  class="btn me-2 btn-flex btn-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-filter fs-6 text-light me-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                       
                    </i>
                   فیلتر
               </a>
               <!--begin::Menu 1-->
               <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b77cca6eb7e">
                   <!--begin::Header-->
                   <div class="px-7 py-5">
                       <div class="fs-5 text-dark fw-bold">فیلتر تنظیمات</div>
                   </div>
                   <!--end::Header-->
                   <!--begin::Menu separator-->
                   <div class="separator border-gray-200"></div>
                   <!--end::Menu separator-->
                   <!--begin::Form-->
                   <div class="px-7 py-5">
                       <!--begin::Input group-->
                       <div class="mb-10">
                           <!--begin::Tags-->
                           <label class="form-label fw-semibold">وضعیت:</label>
                           <!--end::Tags-->
                           <!--begin::Input-->
                           <div>
                               <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="انتخاب گزینه" data-dropdown-parent="#kt_menu_64b77cca6eb7e" data-allow-clear="true">
                                   <option></option>
                                   <option value="1">تایید شده</option>
                                   <option value="2">در انتظار</option>
                                   <option value="2">در حال پردازش</option>
                                   <option value="2">رد شد</option>
                               </select>
                           </div>
                           <!--end::Input-->
                       </div>
                       <!--end::Input group-->
                      
                       <!--begin::Actions-->
                       <div class="d-flex justify-content-end">
                           <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">ریست</button>
                           <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">تایید</button>
                       </div>
                       <!--end::Actions-->
                   </div>
                   <!--end::Form-->
               </div>
               <!--end::Menu 1-->
               <!--end::Menu-->
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
            </div>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--[if BLOCK]><![endif]--><?php if(count($items) == 0): ?>
                <div class="py-10 text-center">
                    <img src="<?php echo e(asset("assets/media/svg/illustrations/easy/2.svg")); ?>" class=" w-200px"
                         alt="">
                    <p class="m-5">در حال حاضر تیتر  برای شما ثبت نشده است.</p>
                </div>
            <?php else: ?>
                <!--begin::Table-->
                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                    <tr class="fw-bold text-muted">
                        <th class="min-w-150px">
                            عنوان خبر
                        </th>
                        <th class="min-w-150px">
                            تیتر پیشنهادی من  
                        </th>  
                        <th class="min-w-100px">
                            تاریخ ثبت خبر  
                        </th>                      
                        <th class="min-w-100px">
                            وضعیت خبر
                        </th>   
                        <th class="min-w-100px">
                            وضعیت تیتر
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
                                <?php
                                $title = $activeTab === 'web' ? ($item->latestWebTitle ?? null) : ($item->latestSocialTitle ?? null);
                                $myTitle =  $title?->title;
                                ?>
                                <?php echo e($myTitle); ?>

                            </td>
                            <td>
                                <p class="text-dark fw-bold text-hover-primary d-block fs-6">
                                    <?php echo e($item->created_at? verta($item->created_at)->format('Y/m/d'): ''); ?>

                                </p>
                            </td>
                            <td>
                                <div class="badge badge-light-info"><?php echo e($item->step->stepDefinition->title); ?></div>                                    
                            </td>
                                
                            <?php
                                $title = $activeTab === 'web' ? ($item->latestWebTitle ?? null) : ($item->latestSocialTitle ?? null);
                                $status = $title?->status;
                                $label  = match ($title?->status) {
                                    'accept'     => 'تایید شده',
                                    'waiting'    => 'در انتظار تیتر',
                                    'progressing'=> 'در انتظار بررسی تیتر',
                                    default      => 'رد شده',
                                };
                            ?>
                            <td>
                                <div class="badge badge-light-primary"><?php echo e($label ?? ''); ?></div>
                            </td>
                            <td class="text-end">
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-bg-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-category fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </button>
                                    <!--begin::Menu 3-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                        <!--begin::Heading-->
                                            <div class="menu-item px-3">
                                                <a wire:click="titleHistory(<?php echo e($item->id); ?>)" class="menu-link flex-stack px-3">تاریخچه تیترها
                                                <span class="ms-2" data-bs-toggle="tooltip" title="تاریخچه تیترهای رد شده">
                                                    <i class="ki-duotone ki-information fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                                </a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a wire:click="details(<?php echo e($item->id); ?>)" class="menu-link flex-stack px-3">جزییات
                                                <span class="ms-2" data-bs-toggle="tooltip" title="نمایش جزییات خبر">
                                                    <i class="ki-duotone ki-eye fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                                </a>
                                            </div>
                                            <!--[if BLOCK]><![endif]--><?php if($status != "accept"): ?>
                                            <div class="menu-item px-3">
                                                <a wire:click="update(<?php echo e($title?->id); ?>)" class="menu-link flex-stack px-3">ویرایش خبر
                                                <span class="ms-2" data-bs-toggle="tooltip" title="ویرایش اطلاعات خبر">
                                                    <i class="ki-duotone ki-pencil fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                                </a>
                                            </div>
                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            <?php if(count($items)): ?>
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
</div>

<?php $__env->startPush('scripts'); ?>
    <script>
        $('#searching').on('keyup', function (e) {
            let data = $(this).val();
            window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('char', data);
        });
    </script>

<?php $__env->stopPush(); ?><?php /**PATH D:\B\work\Asou\main asou react\asoon\resources\views/livewire/manage-news/news-title/title-list-component.blade.php ENDPATH**/ ?>