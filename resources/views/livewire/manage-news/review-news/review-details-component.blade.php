<div wire:ignore.self class="modal fade" id="kt_modal_review_details" tabindex="-1" aria-hidden="true">
    <!-- Modal Dialog -->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!-- Modal Content -->
        <div class="modal-content">
            <!-- Form Start -->
                <!-- Modal Header -->
                <div class="modal-header" id="kt_modal_new_mosavabe_header">
                    <h2>جزییات</h2>
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>
                <!-- Modal Body -->
                <div class="modal-body py-10 px-lg-17">
                    <!--begin::Scroll-->
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_new_mosavabe_scroll" data-kt-scroll="true"
                         data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                         data-kt-scroll-dependencies="#kt_modal_new_address_header"
                         data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
                        
                        
                         <table class="table  table-row-dashed ">
                            <tbody>
                                <tr>
                                    <td >متن بازنویسی</td>
                                    <td>{!! $edited_content !!}</td>
                                </tr>
                                <tr>
                                    <td >عنوان</td>
                                    <td>{{$title}}</td>
                                </tr>
                                <tr>
                                    <td>لینک</td>
                                    <td>{{$link}}</td>
                                </tr>
                                <tr>
                                    <td >اهداف</td>
                                    <td>{{$goals}}</td>
                                </tr>
                                <tr>
                                    <td>موضوع</td>
                                    <td>{{$topic}}</td>
                                </tr>
                                <tr>
                                    <td>خلاصه</td>
                                    <td>{{$summary}}</td>
                                </tr>
                                <tr>
                                    <td>نیاز به کاور</td>
                                    <td>
                                        <div class="form-check form-check-solid form-switch form-check-success fv-row">
                                            <input wire:model='need_cover' class="form-check-input w-45px h-30px" type="checkbox" disabled>
                                            <label for="accept">{{$need_cover==1 ? 'دارد' : 'ندارد'}}</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>امتیاز خبر</td>
                                    <td>
                                        <div class="rating justify-content-end">
                                            @for($i = 1; $i <= 5; $i++)
                                                <div class="rating-label {{ $i <= ($newsRate ?? 0) ? 'checked' : '' }}">
                                                    <i class="ki-duotone ki-star fs-6"></i>
                                                </div>
                                            @endfor
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>امتیاز بازنویسی</td>
                                    <td>
                                        <div class="rating justify-content-end">
                                            @for($i = 1; $i <= 5; $i++)
                                                <div class="rating-label {{ $i <= ($editRate ?? 0) ? 'checked' : '' }}">
                                                    <i class="ki-duotone ki-star fs-6"></i>
                                                </div>
                                            @endfor
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--end::Scroll-->
                </div>
        </div>
    </div>
</div>