<!--begin::Row-->
<div class="row gy-5 g-xl-10">
    <!--begin::Col-->
    <div class="col-xl-4">
        <!--begin::مخلوط Widget 13-->
        <div class="card card-xl-stretch mb-xl-10 theme-dark-bg-body" style="background-color: #F7D9E3">
            <!--begin::Body-->
            <div class="card-body d-flex flex-column">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column flex-grow-1">
                    <!--begin::Title-->
                    <a href="#" class="text-dark text-hover-primary fw-bold fs-3">جلسات</a>
                    <!--end::Title-->
                    <div style="padding-top: 24px; padding-bottom: 24px">
                        <i class="ki-duotone ki-abstract-24 fs-3hx text-dark">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i></div>
                </div>
                <!--end::Wrapper-->
                <!--begin::Stats-->
                <div class="pt-5">
                    <!--begin::Symbol-->
                    <span class="text-dark fw-bold fs-2x lh-0">تعداد</span>
                    <!--end::Symbol-->
                    <!--begin::شماره کارت-->
                    <span class="text-dark fw-bold fs-3x me-2 lh-0"><?php echo e($jalaseCount); ?></span>
                    <!--end::شماره کارت-->
                    <!--begin::Text-->
                    <span class="text-dark fw-bold fs-6 lh-0">جلسه در کل</span>
                    <!--end::Text-->
                </div>
                <!--end::Stats-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::مخلوط Widget 13-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-4">
        <!--begin::مخلوط Widget 14-->
        <div class="card card-xxl-stretch mb-xl-10 theme-dark-bg-body" style="background-color: #CBF0F4">
            <!--begin::Body-->
            <div class="card-body d-flex flex-column">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column flex-grow-1">
                    <!--begin::Title-->
                    <a href="#" class="text-dark text-hover-primary fw-bold fs-3">پروژه ها</a>
                    <!--end::Title-->
                    <!--begin::Chart-->
                    
                    <div style="padding-top: 24px; padding-bottom: 24px">
                        <i class="ki-duotone ki-abstract-26 fs-3hx text-dark">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i></div>
                    <!--end::Chart-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Stats-->
                <div class="pt-5">
                    <span class="text-dark fw-bold fs-2x lh-0">تعداد</span>
                    <!--begin::شماره کارت-->
                    <span class="text-dark fw-bold fs-3x me-2 lh-0"><?php echo e($projectCount); ?></span>
                    <!--end::شماره کارت-->
                    <!--begin::Text-->
                    <span class="text-dark fw-bold fs-6 lh-0">پروژه در کل</span>
                    <!--end::Text-->
                </div>
                <!--end::Stats-->
            </div>
        </div>
        <!--end::مخلوط Widget 14-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-4">
        <!--begin::مخلوط Widget 14-->
        <div class="card card-xxl-stretch mb-5 mb-xl-10 theme-dark-bg-body" style="background-color: #CBD4F4">
            <!--begin::Body-->
            <div class="card-body d-flex flex-column">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column mb-7">
                    <!--begin::Title-->
                    <a href="#" class="text-dark text-hover-primary fw-bold fs-3">وظایف</a>
                    <!--end::Title-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Row-->
                <div class="row g-0">
                    <!--begin::Col-->
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-9 me-2">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-3">
                                <div class="symbol-label bg-light">
                                    <i class="ki-duotone ki-abstract-42 fs-1 text-dark">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div>
                                <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($tasksCount); ?></div>
                                <div class="fs-7 text-gray-600 fw-bold">کل</div>
                            </div>
                            <!--end::Title-->
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-9 ms-2">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-3">
                                <div class="symbol-label bg-light">
                                    <i class="ki-duotone ki-abstract-45 fs-1 text-dark">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div>
                                <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($finishedTasksCount); ?></div>
                                <div class="fs-7 text-gray-600 fw-bold">انجام شده</div>
                            </div>
                            <!--end::Title-->
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-6">
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-3">
                                <div class="symbol-label bg-light">
                                    <i class="ki-duotone ki-abstract-21 fs-1 text-dark">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div>
                                <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($progressingTasksCount); ?></div>
                                <div class="fs-9 text-gray-600 fw-bold">در حال انجام</div>
                            </div>
                            <!--end::Title-->
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-6">
                        <div class="d-flex align-items-center ms-2">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-3">
                                <div class="symbol-label bg-light">
                                    <i class="ki-duotone ki-abstract-44 fs-1 text-dark">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div>
                                <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($waitungTasksCount); ?></div>
                                <div class="fs-8 text-gray-600 fw-bold">انجام نشده</div>
                            </div>
                            <!--end::Title-->
                        </div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
        </div>
        <!--end::مخلوط Widget 14-->
    </div>
    <!--end::Col-->
</div>
<!--end::Row-->
<?php /**PATH E:\Laravel\asuojalasat\resources\views/livewire/manage-dashboard/analytics-component.blade.php ENDPATH**/ ?>