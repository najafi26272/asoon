<div>
    <div class="row gy-5 mb-20 g-xl-10">
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::مخلوط Widget 14-->
            <div class="card card-xxl-stretch mb-5 mb-xl-10 theme-dark-bg-body" style="background-color: #CBD4F4">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column mb-7">
                        <!--begin::Title-->
                        <a target="_blank" href="<?php echo e(route('monitoringNews')); ?>" class="text-dark text-hover-primary fw-bold fs-3">اخبار رصدشده</a>
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
                                    <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($approvedMonitoringNewsCount); ?></div>
                                    <div class="fs-7 text-gray-600 fw-bold">تاییدشده</div>
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
                                    <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($rejectedMonitoringNewsCount); ?></div>
                                    <div class="fs-7 text-gray-600 fw-bold">رد شده</div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-12">
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
                                    <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($waitingForApproveMonitoringNewsCount); ?></div>
                                    <div class="fs-7 text-gray-600 fw-bold">درانتظار بررسی</div>
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
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::مخلوط Widget 14-->
            <div class="card card-xxl-stretch mb-5 mb-xl-10 theme-dark-bg-body" style="background-color: #F7D9E3">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column mb-7">
                        <!--begin::Title-->
                        <a target="_blank" href="<?php echo e(route('addInfoNews')); ?>" class="text-dark text-hover-primary fw-bold fs-3">افزودن اطلاعات</a>
                        <!--end::Title-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Row-->
                    <div class="row g-0">
                         <!--begin::Col-->
                         <div class="col-12">
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
                                    <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($waitingForAddInfoNewsCount); ?></div>
                                    <div class="fs-7 text-gray-600 fw-bold">در انتظار افزودن اطلاعات</div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-12">
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
                                    <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($addedInfoNewsCount); ?></div>
                                    <div class="fs-7 text-gray-600 fw-bold">اطلاعات ثبت شده</div>
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
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::مخلوط Widget 14-->
            <div class="card card-xxl-stretch mb-5 mb-xl-10 theme-dark-bg-body" style="background-color: #CBF0F4">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column mb-7">
                        <!--begin::Title-->
                        <a target="_blank" href="<?php echo e(route('newsTitle')); ?>" class="text-dark text-hover-primary fw-bold fs-3">تیتر اخبار</a>
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
                                    <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($waitingForTitrsCount); ?></div>
                                    <div class="fs-9 text-gray-600 fw-bold">درانتظار تیتر</div>
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
                                    <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($waitingForApproveTitrsCount); ?></div>
                                    <div class="fs-9 text-gray-600 fw-bold">در انتظار بررسی</div>
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
                                    <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($approvedTitrsCount); ?></div>
                                    <div class="fs-9 text-gray-600 fw-bold">تاییدشده</div>
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
                                    <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($rejectedTitrsCount); ?></div>
                                    <div class="fs-9 text-gray-600 fw-bold">رد شده</div>
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
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::مخلوط Widget 14-->
            <div class="card card-xxl-stretch mb-5 mb-xl-10 theme-dark-bg-body" style="background-color: #F7D9E3">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column mb-7">
                        <!--begin::Title-->
                        <a target="_blank" href="<?php echo e(route('reviewNews')); ?>" class="text-dark text-hover-primary fw-bold fs-3">بازنویسی ها</a>
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
                                    <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($approvedReviewNewsCount); ?></div>
                                    <div class="fs-9 text-gray-600 fw-bold">تاییدشده</div>
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
                                    <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($waitingForAssignReviewNewsCount); ?></div>
                                    <div class="fs-9 text-gray-600 fw-bold">در انتظار ارجاع</div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-9 me-2">
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
                                    <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($waitingForReviewNewsCount); ?></div>
                                    <div class="fs-9 text-gray-600 fw-bold">درانتظار بازنویسی</div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-9 me-2">
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
                                    <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($waitingForCheckingReviewNewsCount); ?></div>
                                    <div class="fs-9 text-gray-600 fw-bold">درانتظار بررسی</div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Col-->
                         <!--begin::Col-->
                         <div class="col-12">
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
                                    <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($rejectedReviewNewsCount); ?></div>
                                    <div class="fs-9 text-gray-600 fw-bold">رد شده و انتظار بازنویسی مجدد</div>
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
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::مخلوط Widget 14-->
            <div class="card card-xxl-stretch mb-5 mb-xl-10 theme-dark-bg-body" style="background-color: #CBF0F4">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column mb-7">
                        <!--begin::Title-->
                        <a target="_blank" href="<?php echo e(route('finalNews')); ?>" class="text-dark text-hover-primary fw-bold fs-3">اخبار نهایی</a>
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
                                    <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($publishedCount); ?></div>
                                    <div class="fs-9 text-gray-600 fw-bold">منتشر شده</div>
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
                                    <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($waitingForPublishedCount); ?></div>
                                    <div class="fs-9 text-gray-600 fw-bold">در انتظار انتشار</div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-12">
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
                                    <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($notPublishedCount); ?></div>
                                    <div class="fs-7 text-gray-600 fw-bold">عدم انتشار</div>
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
    <div class="row gy-5 g-xl-10">
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::مخلوط Widget 14-->
            <div class="card card-xxl-stretch mb-5 mb-xl-10 theme-dark-bg-body" style="background-color: #CBD4F4">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column mb-7">
                        <!--begin::Title-->
                        <a target="_blank" href="<?php echo e(route('myMonitoringNews')); ?>" class="text-dark text-hover-primary fw-bold fs-3">رصدهای من</a>
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
                                    <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($approvedMyMonitoringNewsCount); ?></div>
                                    <div class="fs-7 text-gray-600 fw-bold">تاییدشده</div>
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
                                    <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($rejectedMyMonitoringNewsCount); ?></div>
                                    <div class="fs-7 text-gray-600 fw-bold">ردشده</div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-12">
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
                                    <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($waitingForApproveMyMonitoringNewsCount); ?></div>
                                    <div class="fs-7 text-gray-600 fw-bold">درانتظار بررسی</div>
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
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::مخلوط Widget 14-->
            <div class="card card-xxl-stretch mb-5 mb-xl-10 theme-dark-bg-body" style="background-color: #F7D9E3">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column mb-7">
                        <!--begin::Title-->
                        <a target="_blank" href="<?php echo e(route('newsMyTitle')); ?>" class="text-dark text-hover-primary fw-bold fs-3">تیترهای من</a>
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
                                    <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($waitingForMyTitrsCount); ?></div>
                                    <div class="fs-9 text-gray-600 fw-bold">در انتظار تیتر</div>
                                </div>
                                <!--end::Title-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-9 me-2">
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
                                    <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($waitingForApproveMyTitrsCount); ?></div>
                                    <div class="fs-9 text-gray-600 fw-bold">درانتظار بررسی</div>
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
                                        <i class="ki-duotone ki-abstract-42 fs-1 text-dark">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div>
                                    <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($approvedMyTitrsCount); ?></div>
                                    <div class="fs-9 text-gray-600 fw-bold">تاییدشده</div>
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
                                    <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($rejectedMyTitrsCount); ?></div>
                                    <div class="fs-9 text-gray-600 fw-bold">ردشده</div>
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
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::مخلوط Widget 14-->
            <div class="card card-xxl-stretch mb-5 mb-xl-10 theme-dark-bg-body" style="background-color: #CBF0F4">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column mb-7">
                        <!--begin::Title-->
                        <a target="_blank" href="<?php echo e(route('myReviewNews')); ?>" class="text-dark text-hover-primary fw-bold fs-3">بازنویسی های من</a>
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
                                    <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($waitingForMyReviewNewsCount); ?></div>
                                    <div class="fs-9 text-gray-600 fw-bold">درانتظار بازنویسی</div>
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
                                    <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($waitingForCheckingMyReviewNewsCount); ?></div>
                                    <div class="fs-9 text-gray-600 fw-bold">در انتظار بررسی</div>
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
                                    <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($approvedMyReviewNewsCount); ?></div>
                                    <div class="fs-9 text-gray-600 fw-bold">تاییدشده</div>
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
                                    <div class="fs-5 text-dark fw-bold lh-1"><?php echo e($rejectedMyReviewNewsCount); ?></div>
                                    <div class="fs-9 text-gray-600 fw-bold">رد شده</div>
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
</div><?php /**PATH D:\B\work\Asou\main asou react\asoon\resources\views/livewire/manage-news/news-menu-component.blade.php ENDPATH**/ ?>