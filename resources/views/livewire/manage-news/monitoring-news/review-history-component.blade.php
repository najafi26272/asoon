<div wire:ignore.self class="modal fade" id="kt_modal_review_history" tabindex="-1" aria-hidden="true">
    <!-- Modal Dialog -->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!-- Modal Content -->
        <div class="modal-content">
        <!--begin::Col-->
        <div class="col-md-12 card pe-md-10 mb-10 mb-md-0">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">سایقه بازنویسی 
                    </span>
                </h3>
            </div>
            <!--begin::Accیاdion-->
            <div class="card-body">
                @if(count($values) == 0)
                    <div class="py-10 text-center">
                        <img src="{{asset("assets/media/svg/illustrations/easy/2.svg")}}" class=" w-200px"
                            alt="">
                        <p class="m-5">در حال حاضر اطلاعاتی برای نمایش وجود ندارد.</p>
                    </div>
                @else
                @php($i=0)
                    @foreach ($values as $value)
                        <!--begin::Section-->
                        <div class="m-0 ">
                            <!--begin::Heading-->
                            <div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#item.{{$i}}">
                                <!--begin::Icon-->
                                <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                    <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Title-->
                                <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">   
                                    {{verta($value->updated_at)->format('Y/m/d') . ' : '.  Str::limit($value->edited_content, 20, '...') }} 
                                </h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Body-->
                            <div id="item.{{$i}}" class="collapse fs-6 ms-1">
                                <!--begin::Text-->
                                <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                    <input  class="form-control mb-3 is-invalid" type="text" value="{{$value->description}}" disabled/>
                                    <p>
                                        {{$value->edited_content}}
                                    </p>
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Content-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed"></div>
                            <!--end::Separator-->
                        </div>
                        <!--end::Section-->
                        @php($i++)
                    @endforeach
                @endif
            </div>
            <!--end::Accیاdion-->
        </div>
        <!--end::Col-->
        </div>
    </div>
</div>