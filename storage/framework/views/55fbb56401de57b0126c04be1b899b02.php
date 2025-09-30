<div class="card mb-5 mb-xl-10">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">مصوبات <?php echo e($jalase->title); ?></span>
        </h3>
        <!--[if BLOCK]><![endif]--><?php if(\Illuminate\Support\Facades\Auth::user()->accesses->meetings_access): ?>
            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                 data-bs-original-title="Click to add a user" data-kt-initialized="1">
                <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal"
                   data-bs-target="#kt_modal_new_mosavabe">
                    <i class="ki-duotone ki-plus fs-2"></i>مصوبه جدید</a>
            </div>
        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
    </div>
    <!--end::Header-->


    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                <tr class="fw-bold text-muted">

                    <th class="min-w-200px">
                        مصوبه
                    </th>
                    <th class="min-w-150px">
                        تاریخ سر رسید
                    </th>
                    <th class="min-w-150px">
                        شخص مربوطه
                    </th>
                    <th class="min-w-150px">
                        وضعیت
                    </th>
                    <!--[if BLOCK]><![endif]--><?php if(\Illuminate\Support\Facades\Auth::user()->accesses->meetings_access): ?>

                    <th class="min-w-100px text-end">
                        عملیات
                    </th>
                    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="">
                            <div class="d-flex align-items-center">
                                <div class="d-flex justify-content-start flex-column">
                                    <p class="text-dark fw-bold fs-6">

                                    <span class="ms-1" data-bs-toggle="tooltip"
                                          <?php if($item->sms_status == 1): ?> title="اس ام اس یادآور ارسال شده است."
                                          <?php else: ?> title="اس ام اس یادآور ارسال نشده است." <?php endif; ?>>
										<i class="fa fa-envelope  <?php if($item->sms_status == 1): ?> text-primary <?php else: ?> text-gray-500  <?php endif; ?> ">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>


                                        <span class="ms-1" data-bs-toggle="tooltip"
                                              <?php if($item->priority == "much"): ?> title="اولویت زیاد"
                                              <?php elseif($item->priority == "low"): ?> title="اولویت کم"
                                              <?php elseif($item->priority == "normal"): ?> title="اولویت متوسط" <?php endif; ?>>
                                            <i class="fa fa-flag   <?php if($item->priority == "much"): ?> text-danger <?php elseif($item->priority == "low"): ?> text-warning  <?php elseif($item->priority == "normal"): ?> text-primary <?php endif; ?> "></i>
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
                                            </i>
									    </span>


                                        <?php echo e($item->description); ?> </p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-dark fw-bold text-hover-primary d-block fs-6">
                                <?php echo e($item->end_date? verta($item->end_date)->format('Y/m/d'): ''); ?>

                            </p>
                        </td>
                        <td>
                            <div class="d-flex flex-column w-100 me-2">
                                <p class="text-dark fw-bold text-hover-primary fs-6"><?php echo e($item->user->name); ?> <?php echo e($item->user->family); ?></p>
                            </div>
                        </td>
                        <td>
                            <!--[if BLOCK]><![endif]--><?php if($item->status == "waiting"): ?>
                                <div class="badge badge-light-warning"> در انتظار</div>
                            <?php elseif($item->status == "progressing"): ?>

                                <div class="badge badge-light-primary">درحال انجام</div>

                            <?php elseif($item->status == "finished"): ?>
                                <div class="badge badge-light-success">انجام شده</div>
                            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                        </td>
                        <!--[if BLOCK]><![endif]--><?php if(\Illuminate\Support\Facades\Auth::user()->accesses->meetings_access): ?>

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
                        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
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














































































































































<?php /**PATH /home/asougrou/core/resources/views/livewire/manage-mosavabe/mosavabe-list-component.blade.php ENDPATH**/ ?>