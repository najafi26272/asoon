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
                        
                         @if(count($values) == 0)
                         <div class="py-10 text-center">
                             <img src="{{asset("assets/media/svg/illustrations/easy/2.svg")}}" class=" w-200px"
                                 alt="">
                             <p class="m-5">در حال حاضر اطلاعاتی برای نمایش وجود ندارد.</p>
                         </div>
                        @else
                         <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 ">
                            <thead>
                                <tr class="fw-bold text-muted bg-light">
                                    <th class="ps-4  rounded-start">تیتر پیشنهادی</th>
                                    <th> تاریخ</th>
                                    <th class="ps-4  rounded-end">دلیل رد شدن</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($values as $value)
                                <tr>
                                    <td >{{$value->title}}</td>
                                    <td>{{verta($value->updated_at)->format('Y/m/d')}}</td>
                                    <td>{{$value->description}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Modal body-->
        </div>
    </div>
</div>