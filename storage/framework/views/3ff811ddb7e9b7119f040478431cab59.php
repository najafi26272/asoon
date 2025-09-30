

<?php $__env->startPush('css'); ?>
    
    <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/custom/datepicker/flatpickr.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/custom/datepicker/pickr-themes.css")); ?>">

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
 <div class="card">
     
    <div class="card-body">
        
   
   <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                    <tr class="fw-bold text-muted">
                        <th class="">
                         نام کاربری
                        </th>
                        <th class="">
                            تاریخ 
                        </th>
                       
                       
                        <th class="">
                            دانلود
                        </th>
                    </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                 
                        <tr>
                            <td class="">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                       هاشمیان
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-dark fw-bold text-hover-primary d-block fs-6">
                                   بهمن1402
                                </p>
                            </td>
                           
                          
                            <td>
                                <div class="d-flex  flex-shrink-0">
                                    <button class="btn btn-primary">
                                        
                                        <i class="fa fa-download"></i>
                                        دانلود
                                    </button>
                                </div>
                            </td>
                        </tr>
                  
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
               
            </div>
            <!--end::Table container-->
</div>
 </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    

    <script src="<?php echo e(asset("assets/plugins/custom/datepicker/jdate.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/plugins/custom/datepicker/flatpickr-jdate.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/plugins/custom/datepicker/fa-jdate.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/plugins/custom/datepicker/pickr.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/plugins/custom/datepicker/forms-pickers.js")); ?>"></script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/asougrou/core/resources/views/admin/pages/forms/list_report_download.blade.php ENDPATH**/ ?>