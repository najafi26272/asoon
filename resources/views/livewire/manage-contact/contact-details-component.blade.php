<!--begin::Modal - وظیفه های جدید-->
<div wire:ignore.self class="modal fade" id="kt_modal_contact_details" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_edit_task_header">
                    <!--begin::Modal title-->
                    <h2>جزییات پیام</h2>
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
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_edit_task_scroll" data-kt-scroll="true"
                         data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                         data-kt-scroll-dependencies="#kt_modal_edit_address_header"
                         data-kt-scroll-wrappers="#kt_modal_edit_address_scroll" data-kt-scroll-offset="300px">
                        
                        <div class="table-responsive">
                            <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                                <tr>
                                    <th>عنوان</th>
                                    <th> {{$title}}</th>
                                </tr>
                                <tr>
                                    <th>متن</th>
                                    <th>{{$message}}</th>
                                </tr>
                                <tr>
                                    <th>تاریخ</th>
                                    <th> {{$createdDate}}</th>
                                </tr>
                                <tr>
                                    <th>شماره تماس</th>
                                    <th>{{$mobile}}</th>
                                </tr>
                            </table>
                        </div>
                        
                 
                    </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Modal body-->
            <!--end::Form-->
        </div>
    </div>
</div>
<!--end::Modal - وظیفه  جدید-->

