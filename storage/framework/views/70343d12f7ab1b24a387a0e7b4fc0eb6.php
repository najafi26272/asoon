<?php $__env->startPush('css'); ?>
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo e(asset("assets/css/persian-datepicker.min.css")); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset("assets/admin/assets/vendor/libs/bootstrap-select/bootstrap-select.css")); ?>">
    <style>
        .img-icon {
            width: 6rem;
        }
    </style>
    <!-- Page CSS -->
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-6">
            <div class="col-12">
                <div class="card p-5 px-lg-10 py-lg-10">
                    <!--begin::Content main-->
                    <div class="">
                        <!--begin::Heading-->
                        <div class="mb-2">
                            <!--begin::Title-->
                            <h5 class="text-dark mb-6"><?php echo e($jalase->title); ?></h5>
                            <!--end::Title-->
                            <div class="separator separator-dashed"></div>

                        </div>
                        <!--end::Heading-->
                        <!--begin::Body-->

                        
                        <div>
                            <table class="table table-row-gray-300 align-middle gs-0 gy-4">
                                <tr class="">
                                    <td class="text-dark fw-bold text-hover-primary d-block fs-6">تاریخ جلسه:</td>
                                    <td><?php echo e(verta($jalase->date)->format('H:i Y/m/d')); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-dark fw-bold text-hover-primary d-block fs-6">مربوط به:</td>
                                    <td>
                                        <?php ($i = 0); ?>
                                        <?php $__currentLoopData = $jalase->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php ($i++); ?>
                                            <?php echo e($cat->title); ?>

                                            <?php if(count($jalase->categories) > $i): ?>، <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                                <tr >
                                    <td  class="text-dark fw-bold text-hover-primary d-block fs-6">توضیحات:</td>
                                    <td><?php echo e($jalase->description); ?></td>
                                </tr>
                                <tr>
                                    <td  class="text-dark fw-bold text-hover-primary d-block fs-6">حاضرین:</td>
                                    <td>
                                        <?php ($i = 0); ?>
                                        <?php $__currentLoopData = $jalase->hazerin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $haz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php ($i++); ?>
                                            <?php echo e($haz->name); ?> <?php echo e($haz->family); ?>

                                            <?php if(count($jalase->hazerin) > $i): ?>، <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td  class="text-dark fw-bold text-hover-primary d-block fs-6">غائبین:</td>
                                    <td><?php ($i = 0); ?>
                                        <?php $__currentLoopData = $jalase->ghayebin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gha): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php ($i++); ?>
                                            <?php echo e($gha->name); ?> <?php echo e($gha->family); ?>

                                            <?php if(count($jalase->hazerin) > $i): ?>، <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
                                </tr>
                                <tr>
                                    <td  class="text-dark fw-bold text-hover-primary d-block fs-6">مدعوین:</td>
                                    <td>
                                        <?php echo e($jalase->invited); ?>

                                    </td>
                                </tr>
                            </table>
                        </div>
                        

                        <!--end::Body-->
                    </div>
                    <!--end::Content main-->

                </div>
            </div>
        </div>
        <div class="col-6">

            <!--begin::کارت widget 17-->
            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <div class="card-title d-flex flex-column" style="width: 100%">
                        <!--begin::Heading-->
                        <div style="width: 100%">
                            <!--begin::Title-->
                            <h5 class=" text-dark mb-6">آمار پیشرفت کارها</h5>
                            <!--end::Title-->
                            <div class="separator separator-dashed"></div>

                        </div>
                        <!--end::Heading-->
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Header-->
                <!--begin::کارت body-->
                <div class="card-body pt-1 d-flex flex-wrap align-items-center">
                    <!--begin::Chart-->
                    <div class="d-flex flex-center me-5 pt-2">
                        <div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70"
                             data-kt-line="11"><span></span>
                        </div>
                    </div>
                    <!--end::Chart-->
                    <!--begin::برچسبs-->
                    <div class="d-flex flex-column content-justify-center flex-row-fluid">
                        <!--begin::Tags-->
                        <div class="d-flex fw-semibold align-items-center">
                            <!--begin::Bullet-->
                            <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                            <!--end::Bullet-->
                            <!--begin::Tags-->
                            <div class="text-success flex-grow-1 me-4">مصوبات انجام شده</div>
                            <!--end::Tags-->
                            <!--begin::Stats-->
                            <div class="fw-bolder text-success text-xxl-end"><?php echo e(count($jalase->mosavabat->where('status','=','finished'))); ?></div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Tags-->
                        <!--begin::Tags-->
                        <div class="d-flex fw-semibold align-items-center my-3">
                            <!--begin::Bullet-->
                            <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                            <!--end::Bullet-->
                            <!--begin::Tags-->
                            <div class="text-primary flex-grow-1 me-4">مصوبات در حال انجام</div>
                            <!--end::Tags-->
                            <!--begin::Stats-->
                            <div class="fw-bolder text-primary text-xxl-end"><?php echo e(count($jalase->mosavabat->where('status','=','progressing'))); ?></div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Tags-->
                        <!--begin::Tags-->
                        <div class="d-flex fw-semibold align-items-center">
                            <!--begin::Bullet-->
                            <div class="bullet w-8px h-3px rounded-2 me-3 bg-warning"></div>
                            <!--end::Bullet-->
                            <!--begin::Tags-->
                            <div class="text-warning flex-grow-1 me-4">مصوبات انجام نشده</div>
                            <!--end::Tags-->
                            <!--begin::Stats-->
                            <div class="fw-bolder text-warning text-xxl-end"><?php echo e(count($jalase->mosavabat->where('status','=','waiting'))); ?></div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Tags-->
                    </div>
                    <!--end::برچسبs-->
                </div>
                <!--end::کارت body-->
            </div>
            <!--end::کارت widget 17-->
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset("assets/js/custom/utilities/modals/create-mosavabe.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/js/custom/utilities/modals/create-app.js")); ?>"></script>

    
    <script src="<?php echo e(asset("assets/js/persian-date.min.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/js/persian-datepicker.min.js")); ?>"></script>

    
    <script src="<?php echo e(asset("assets/admin/assets/vendor/libs/bootstrap-select/bootstrap-select.js")); ?>"></script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/asougrou/core/resources/views/admin/pages/jalase/jalase-details.blade.php ENDPATH**/ ?>