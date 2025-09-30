<?php $__env->startPush('css'); ?>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<style>
    .select2-container .select2-selection--single{
        height:100% !important;
    }
</style>
<?php $__env->stopPush(); ?>
<div class="card mb-5 mb-xl-10 ">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">مدیریت پروژه ها</span>
        </h3>
            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                 data-bs-original-title="Click to add a user" data-kt-initialized="1">
                
            <!--[if BLOCK]><![endif]--><?php if(Auth::user()->level == 'admin' || Auth::user()->id == 20): ?>
                <div wire:ignore style="margin-left: 5px; height:100% !important;">
                    <select  wire:model="selectedUser" id="selectedUserProject" class="select-filter form-select form-select-solid "  style="height:100% !important;" tabindex="-1" aria-hidden="true" data-kt-initialized="1"  data-placeholder="فیلتر کاربران" data-hide-search="true" data-close-on-select="false">
                        <option value="all">تمام کاربران</option>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($user->id); ?>"><?php echo e($user->name .' '.$user->family); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                    </select>
                </div>
            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
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
                <!--[if BLOCK]><![endif]--><?php if(\Illuminate\Support\Facades\Auth::user()->accesses->project_access): ?>
                <a href="#" class="btn btn-sm btn-light btn-active-primary"  data-bs-toggle="modal" data-bs-target="#kt_modal_new_project">
                    <i class="ki-duotone ki-plus fs-2"></i>پروژه جدید</a>
                <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->

            </div>
    </div>
    <!--end::Header-->
    <div class="card-body py-3 text-right" style="align-items: center;">
        <!--begin::Table container-->
        <div class="table-responsive">

            <!--[if BLOCK]><![endif]--><?php if(count($items) == 0): ?>

                <div class="py-10 text-center">
                    <img src="<?php echo e(asset("assets/media/svg/illustrations/easy/1.svg")); ?>" class=" w-200px" alt="">
                    <p class="m-5">در حال حاضر پروژه ای که  شما در آن حضور داشته باشید ثبت نشده است.</p>
                </div>

            <?php else: ?>
                <!--begin::Table-->
                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                    <tr class="fw-bold text-muted">
                        <th class="min-w-200px">عنوان</th>
                        <th class="min-w-150px">تاریخ شروع</th>
                        <th class="min-w-150px">میزان پیشرفت</th>
                        <th class="min-w-100px text-end">عملیات</th>
                    </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                    <?php ($i = -1); ?>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php ($i++); ?>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#">
                                            <p class="text-dark fw-bold text-hover-primary fs-6"> <?php echo e($item->title); ?></p>
                                        </a>

                                        <span class="text-muted fw-semibold text-muted d-block fs-7">
                                       <?php echo e($item->category->title); ?>

                                    </span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-dark fw-bold text-hover-primary d-block fs-6">
                                    <?php echo e(verta($item->start_date)->format('Y/m/d')); ?>

                                </p>
                            </td>
                            <td class="text-end">
                                <div class="d-flex flex-column w-100 me-2">

                                    <div class="d-flex flex-stack mb-2">
                                        <span class="text-muted me-2 fs-7 fw-bold"><?php echo e(round($item->percent)); ?>%</span>
                                    </div>
                                    <div class="progress h-6px w-100">
                                        <div class="progress-bar <?php if($item->percent > 1 && $item->percent < 40): ?> bg-warning <?php elseif($item->percent > 39 && $item->percent < 80): ?> bg-primary <?php elseif($item->percent > 79 && $item->percent < 101): ?>  bg-success <?php endif; ?> " role="progressbar" style="width:<?php echo e($item->percent); ?>%"
                                             aria-valuenow="<?php echo e($item->percent); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-end flex-shrink-0">
                                     <a href="projects/chats/<?php echo e($item->id); ?>" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 cursor-pointer">
                                        <span class="ms-1" data-bs-toggle="tooltip" title="گفتگو">
                                        <i class=" fa fa-commenting fs-2">
                                             
                                        </i>
                                       </span>
                                    </a>
                                    <a href="projects/tasks/<?php echo e($item->id); ?>" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 cursor-pointer">
                                    <span class="ms-1" data-bs-toggle="tooltip" title=" وظایف">
										<i class="ki-duotone ki-switch fs-2 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
                                    </a>
                                    <!--[if BLOCK]><![endif]--><?php if(\Illuminate\Support\Facades\Auth::user()->accesses->project_access): ?>
                                    <a href="projects/edit/<?php echo e($item->id); ?>" class="cursor-pointer btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 cursor-pointer">
                                    <span class="ms-1" data-bs-toggle="tooltip" title="ویرایش">
										<i class="ki-duotone ki-pencil fs-2 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
                                    </a>
                                    <a wire:click="delete(<?php echo e($item->id); ?>)" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm cursor-pointer">
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
                                    
                                   
                                   
                                    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->

                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
            <!--[if BLOCK]><![endif]--><?php if(count($items) != 0): ?>
                <div class="custom-paginate clearfix" style="margin-top: 10px;margin-right:10px">
                    <?php echo e($items->links()); ?>

                </div>
            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
</div>
<?php $__env->startPush('scripts'); ?>
    <script>
        $('#searching').on('keyup', function (e) {
            let data = $(this).val();
            window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('search', data);
        });
        $('#selectedUserProject').on('change', function (e) {
            let data = $(this).val();
            window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('selectedUser', data);
        });
        $(document).ready(function() {
            $('.select-filter').select2({
                height:'100%'
            });
        });
    </script>
<?php $__env->stopPush(); ?><?php /**PATH /home/asougrou/core/resources/views/livewire/manage-projects/project-list-component.blade.php ENDPATH**/ ?>