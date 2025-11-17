
<?php $__env->startPush("style"); ?>
<link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/47.0.0/ckeditor5.css" />
<style>
    .fade {
        transition: opacity 0.5s ease;
        opacity: 0;
        display: none; /* مخفی کردن اولیه */
    }
    .fade.show {
        opacity: 1;
        display: block; /* نمایش هنگام فعال شدن */
    }
</style>
<?php $__env->stopPush(); ?>
<div class="card mb-5 mb-xl-10">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <!--[if BLOCK]><![endif]--><?php if($pathIsTitle): ?>
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
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">
                <!--[if BLOCK]><![endif]--><?php if($pathIsAddInfo): ?>
                لیست اخبار تاییدشده
                <?php elseif($pathIsTitle): ?>
                لیست اخبار در مرحله تیترزدن
                <?php elseif($pathIsReview): ?>
                لیست اخبار در مرحله بازنویسی
                <?php elseif($pathIsFinal): ?>
                لیست اخبار نهایی
                <?php elseif($pathIsMyMonitoring): ?>
                لیست رصدهای من
                <?php else: ?>
                لیست اخبار رصدشده
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </span>
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
             
                <!--[if BLOCK]><![endif]--><?php if(!$pathIsAddInfo && !$pathIsTitle && !$pathIsFinal && !$pathIsReview && count($items)): ?>
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
            <!--[if BLOCK]><![endif]--><?php if(count($items) == 0): ?>
                <div class="py-10 text-center">
                    <img src="<?php echo e(asset("assets/media/svg/illustrations/easy/2.svg")); ?>" class=" w-200px"
                         alt="">
                    <p class="m-5">در حال حاضر اطلاعاتی برای نمایش وجود ندارد.</p>
                    <!--[if BLOCK]><![endif]--><?php if(!$pathIsAddInfo && !$pathIsTitle && !$pathIsFinal && !$pathIsReview): ?>
                    <a class="btn btn-sm btn-primary me-2" data-bs-toggle="modal"
                       data-bs-target="#kt_modal_new_news">رصد جدید
                        <i class="fa fa-plus"></i>
                    </a>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            <?php else: ?>
                <!--begin::Table-->
                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                    <tr class="fw-bold text-muted ">
                        <!--[if BLOCK]><![endif]--><?php if(!$pathIsFinal && !$pathIsMyMonitoring && !$pathIsReview): ?>
                        <th class="min-w-50px">
                            <input 
                                type="checkbox" 
                                id="selectAll" 
                                wire:model="selectAll" 
                                class="form-check-input"
                                data-tab="<?php echo e($activeTab); ?>"
                            >
                        </th>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        <th class="min-w-200px">
                            عنوان
                        </th>
                        <th class="">
                            امتیاز خبر
                        </th>
                        <!--[if BLOCK]><![endif]--><?php if($pathIsTitle): ?>
                            <th class="min-w-150px">
                                تیتر پیشنهادی
                            </th>
                            <th class="min-w-100px">
                                وضعیت تیتر
                            </th> 
                        <?php else: ?>
                            <th class="min-w-150px">
                                لینک  
                            </th>  
                            <th class="min-w-100px">
                                تاریخ ثبت  
                            </th>   
                            <th class="min-w-100px">
                                وضعیت
                            </th>      
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->     
                        <th class="min-w-100px ">
                            عملیات
                        </th>                  
                    </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <!--[if BLOCK]><![endif]--><?php if(!$pathIsFinal && !$pathIsMyMonitoring && !$pathIsReview): ?>
                            <td>
                                <input 
                                    type="checkbox" 
                                    wire:model="selectedIds" 
                                    value="<?php echo e($item->id); ?>" 
                                    class="form-check-input item-checkbox"
                                    data-tab="<?php echo e($activeTab); ?>" 
                                >
                            </td>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            <td class="flex">
                                <h5>
                                    <?php echo e($item->title); ?>

                                </h5>
                                
                            </td>
                            <td>
                                <div class="rating justify-content-end">
                                    <div class="rating-label">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                    <div class="rating-label">
                                        <i class="ki-duotone ki-star fs-6"></i>
                                    </div>
                                </div>
                            </td>

                            <!--[if BLOCK]><![endif]--><?php if($pathIsTitle): ?>
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
                                    <!--[if BLOCK]><![endif]--><?php if($activeTab === 'web'): ?>
                                        <span title = <?php echo e($item->latestWebTitle->title); ?>><?php echo e($item->latestWebTitle?->title ? Str::limit($item->latestWebTitle->title, 50) : '-'); ?></span>
                                    <?php else: ?>
                                        <span title = <?php echo e($item->latestSocialTitle->title); ?>><?php echo e($item->latestSocialTitle?->title ? Str::limit($item->latestSocialTitle->title, 50) : '-'); ?></span>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <!--[if BLOCK]><![endif]--><?php if(in_array($title->status, ['progressing','accept'])): ?>
                                    <a data-bs-toggle="modal" data-bs-target="#kt_modal_reject_title"
                                        class="cursor-pointer btn btn-icon btn-color-danger  btn-active-color-danger btn-sm me-1">
                                    <span class="ms-1" data-bs-toggle="tooltip" title="رد کردن تیتر">
                                        <i class="ki-duotone ki-abstract-11 fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                    </a>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </td>
                            <?php else: ?>
                                <td>
                                    <a target="_blank" href=<?php echo e($item->link); ?>> 
                                        لینک رصد
                                    </a>
                                    
                                
                                <td>
                                    <p class="text-dark fw-bold text-hover-primary d-block fs-6">
                                        <?php echo e($item->created_at? verta($item->created_at)->format('Y/m/d'): ''); ?>

                                    </p>
                                </td>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                            <!--[if BLOCK]><![endif]--><?php if($pathIsFinal && $item->step->stepDefinition->id == 11): ?>
                            <td class="text-start">
                            <div class="dropdown d-inline-block">
                                <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="quickSelectDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                  درانتظار انتشار
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="quickSelectDropdown">
                                  <li>
                                    <a class="dropdown-item" href="#" wire:click.prevent="changeStatus(<?php echo e($item->id); ?>,12)">
                                      منتشرشده
                                    </a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="#" wire:click.prevent="changeStatus(<?php echo e($item->id); ?>,13)">
                                      عدم انتشار
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                            <?php elseif($pathIsTitle): ?>
                            <td>
                                <div class="badge <?php if($label == 'رد شده'): ?> badge-light-danger <?php else: ?> badge-light-primary <?php endif; ?> "><?php echo e($label ?? ''); ?></div>
                            </td>
                            <?php else: ?>
                            <td>
                                <div class="badge badge-light-primary"><?php echo e($item->step->stepDefinition->title); ?></div>                                    
                            </td>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            <td>
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
                                        <!--[if BLOCK]><![endif]--><?php if($pathIsTitle): ?>
                                            <div class="menu-item px-3">
                                                <a data-bs-toggle="modal" data-bs-target="#kt_modal_title_history" class="menu-link flex-stack px-3">تاریخچه تیترها
                                                <span class="ms-2" data-bs-toggle="tooltip" title="تاریخچه تیترهای رد شده">
                                                    <i class="ki-duotone ki-information fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                                </a>
                                            </div>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        <!--[if BLOCK]><![endif]--><?php if($pathIsAddInfo): ?>
                                            <div class="menu-item px-3">
                                                <a wire:click="addInfo(<?php echo e($item->id); ?>)" data-bs-toggle="modal" data-bs-target="#kt_modal_add_info" class="menu-link flex-stack px-3">افزودن اطلاعات
                                                <span class="ms-2" data-bs-toggle="tooltip" title="افزودن اطلاعات لازم">
                                                    <i class="ki-duotone ki-fasten fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                                </a>
                                            </div>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        <!--[if BLOCK]><![endif]--><?php if($pathIsReview): ?>
                                            <div class="menu-item px-3">
                                                <a wire:click="editedContent(<?php echo e($item->id); ?>)" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_content" class="menu-link flex-stack px-3">محتوای بازنویسی
                                                <span class="ms-2" data-bs-toggle="tooltip" title="محتوای بازنویسی خبر و رد یا تایید بازنویسی">
                                                    <i class="ki-duotone ki-book fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                                </a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a wire:click="reviewHistory(<?php echo e($item->id); ?>)" data-bs-toggle="modal" data-bs-target="#kt_modal_review_history" class="menu-link flex-stack px-3">تاریخچه بازنویسی ها
                                                <span class="ms-2" data-bs-toggle="tooltip" title="تاریخچه بازنویسی های رد شده">
                                                    <i class="ki-duotone ki-information fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                                </a>
                                            </div>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        <!--[if BLOCK]><![endif]--><?php if($pathIsReview && in_array($item->step->stepDefinition->id, [6, 8])): ?>
                                            <div class="menu-item px-3">
                                                <a wire:click="addEditor(<?php echo e($item->id); ?>)" data-bs-toggle="modal" data-bs-target="#kt_modal_add_editor" class="menu-link flex-stack px-3">ارجاع به بازنویس
                                                <span class="ms-2" data-bs-toggle="tooltip" title="ارجاع به شخص موردنظر برای بازنویسی خبر">
                                                    <i class="ki-duotone ki-send fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                                </a>
                                            </div>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        <!--[if BLOCK]><![endif]--><?php if($pathIsMyMonitoring && $item->step->stepDefinition->id === 1): ?>
                                            <div class="menu-item px-3">
                                                <a wire:click="update(<?php echo e($item->id); ?>)" class="menu-link flex-stack px-3">ویرایش خبر
                                                <span class="ms-2" data-bs-toggle="tooltip" title="ویرایش اطلاعات خبر">
                                                    <i class="ki-duotone ki-pencil fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                                </a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a wire:click="delete(<?php echo e($item->id); ?>)" class="menu-link flex-stack px-3">حذف خبر
                                                <span class="ms-2" data-bs-toggle="tooltip" title="حذف خبر">
                                                    <i class="ki-duotone ki-abstract-11 fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                                </a>
                                            </div>
                                        <?php elseif(!$pathIsMyMonitoring && !$pathIsFinal): ?>
                                            <div class="menu-item px-3">
                                                <a wire:click="update(<?php echo e($item->id); ?>)" class="menu-link flex-stack px-3">ویرایش خبر
                                                <span class="ms-2" data-bs-toggle="tooltip" title="ویرایش اطلاعات خبر">
                                                    <i class="ki-duotone ki-pencil fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                                </a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a wire:click="delete(<?php echo e($item->id); ?>)" class="menu-link flex-stack px-3">حذف خبر
                                                <span class="ms-2" data-bs-toggle="tooltip" title="حذف خبر">
                                                    <i class="ki-duotone ki-abstract-11 fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                                </a>
                                            </div>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        <div class="menu-item px-3">
                                            <a wire:click="details(<?php echo e($item->id); ?>)" class="menu-link flex-stack px-3">جزییات خبر
                                            <span class="ms-2" data-bs-toggle="tooltip" title="نمایش جزییات خبر">
                                                <i class="ki-duotone ki-eye fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                            </a>
                                        </div>                                    
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
                <!-- Action Buttons -->
                <div class="d-flex justify-content-start mt-5">
                    
                    <!--[if BLOCK]><![endif]--><?php if(!$pathIsTitle && !$pathIsFinal && !$pathIsMyMonitoring && !$pathIsReview): ?> 
                        <!--[if BLOCK]><![endif]--><?php if (! ($pathIsAddInfo)): ?>
                            <button wire:click="approveSelected" class="btn btn-success me-3"
                                <?php if(count($selectedIds) == 0): ?> disabled <?php endif; ?> >
                                تأیید انتخاب‌ها
                            </button>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#rejectModal"
                            <?php if(count($selectedIds) == 0): ?> disabled <?php endif; ?> >
                            رد انتخاب‌ها
                        </button>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    
                    <!--[if BLOCK]><![endif]--><?php if($pathIsTitle): ?>
                    <button 
                        wire:click="approveSelectedTitrs" 
                        class="btn btn-success me-3"
                        <?php if(count($selectedIds) == 0): ?> disabled <?php endif; ?>
                    >
                        تأیید انتخاب‌ها
                    </button>

                    <button 
                        class="btn btn-danger" 
                        data-bs-toggle="modal" 
                        data-bs-target="#rejectTitrModal"
                        <?php if(count($selectedIds) == 0): ?> disabled <?php endif; ?>
                    >
                        رد انتخاب‌ها
                    </button>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
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


    <!-- Reject Modal -->
    <div class="modal fade" id="rejectModal" tabindex="-1" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">رد موارد انتخاب شده</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <textarea 
                        wire:model="rejectDescription"
                        class="form-control"
                        rows="4"
                        placeholder="در صورت نیاز دلیل رد کردن را وارد کنید..."
                    ></textarea>
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['rejectDescription'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
                <div class="modal-footer">
                    <button 
                        wire:click="rejectSelected"
                        class="btn btn-danger"
                    >
                        تأیید رد
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Reject Titr Modal -->
    <div class="modal fade" id="rejectTitrModal" tabindex="-1" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">رد تیترهای انتخاب شده</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <textarea 
                        wire:model="rejectDescription"
                        class="form-control"
                        rows="4"
                        placeholder="لطفاً دلیل رد تیترها را وارد کنید..."
                        required
                    ></textarea>
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['rejectDescription'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
                <div class="modal-footer">
                    <button 
                        wire:click="rejectSelectedTitrs"
                        class="btn btn-danger"
                    >
                        تأیید رد
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!--[if BLOCK]><![endif]--><?php if($pathIsTitle): ?>
    <!-- Reject one Titr Modal -->
    <div class="modal fade" id="kt_modal_reject_title" tabindex="-1" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">رد تیتر انتخاب شده</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <textarea 
                        wire:model="rejectDescription"
                        class="form-control"
                        rows="4"
                        placeholder="لطفاً دلیل رد تیتر انتخابی را وارد کنید..."
                        required
                    ></textarea>
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['rejectDescription'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
                <div class="modal-footer">
                    <button 
                        wire:click="rejectSelectedTitr(<?php echo e($item->id); ?>)"
                        class="btn btn-danger"
                    >
                        تأیید رد
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


    <div wire:ignore.self class="modal fade" id="kt_modal_title_history" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header" id="kt_modal_new_mosavabe_header">
                        <!--begin::Modal title-->
                        <h2> تاریخچه تیتر ها</h2>
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
                        <div class="scroll-y me-n7 pe-7" id="kt_modal_new_mosavabe_scroll" data-kt-scroll="true"
                             data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                             data-kt-scroll-dependencies="#kt_modal_new_address_header"
                             data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
                            
                            
                             <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 ">
                                <thead>
                                    <tr class="fw-bold text-muted bg-light">
                                        <th class="ps-4  rounded-start">تیتر پیشنهادی</th>
                                        <th> تاریخ</th>
                                        <th class="ps-4  rounded-end">دلیل رد شدن</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td > تیتر یک</td>
                                        <td>1404/04/04 </td>
                                        <td>طولانی بودن</td>
                                        
                                       
                                    </tr>
                                    
                                   
                                </tbody>
                            </table>
    
                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Modal body-->
                   
               
            </div>
        </div>
    </div>
</div>



<?php $__env->startPush('scripts'); ?>
    <script>
        // مدیریت انتخاب تمامی آیتم‌ها
$('#selectAll').on('change', function() {
    const isChecked = $(this).prop('checked');
    const currentTab = $(this).data('tab'); // دریافت تب فعال
    $('.item-checkbox[data-tab="' + currentTab + '"]').prop('checked', isChecked);
    const ids = $('.item-checkbox[data-tab="' + currentTab + '"]:checked').map((i, el) => el.value).get();
    window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('selectedIds', ids);
});

// مدیریت تغییرات تک تک آیتم‌ها
$(document).on('change', '.item-checkbox', function() {
    const currentTab = $(this).data('tab'); // دریافت تب فعال
    const allChecked = $('.item-checkbox[data-tab="' + currentTab + '"]:checked').length === 
                      $('.item-checkbox[data-tab="' + currentTab + '"]').length;
    $('#selectAll[data-tab="' + currentTab + '"]').prop('checked', allChecked);
    const ids = $('.item-checkbox[data-tab="' + currentTab + '"]:checked').map((i, el) => el.value).get();
    window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('selectedIds', ids);
});

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
    tinymce.init({
        selector: "#editor_content",
        height : "480",
        toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | link code',    plugins : "advlist autolink link image lists charmap print preview",
        menubar: false 
    });
    // end textEditor

    $(document).ready(function() {
        $('#accept').change(function() {
            if (!this.checked) {
                $('#reasonInput').addClass('show'); // اضافه کردن کلاس برای نمایش
            } else {
                $('#reasonInput').removeClass('show'); // حذف کلاس برای پنهان کردن
            }
        });
    });
</script>

<?php $__env->stopPush(); ?><?php /**PATH D:\B\work\Asou\main asou react\asoon\resources\views/livewire/manage-news/monitoring-news/news-list-component.blade.php ENDPATH**/ ?>