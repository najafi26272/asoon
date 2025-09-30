

<!--begin::Modal - مصوبه های جدید-->
<div wire:ignore.self class="modal fade" id="kt_modal_edit_mosavabe" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form wire:submit.prevent="submit" class="form" method="POST" id="kt_modal_edit_mosavabe_form">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_edit_mosavabe_header">
                    <!--begin::Modal title-->
                    <h2>ویرایش مصوبه</h2>
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
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_edit_mosavabe_scroll" data-kt-scroll="true"
                         data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                         data-kt-scroll-dependencies="#kt_modal_new_address_header"
                         data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2 required">توضیحات</label>
                            <textarea wire:model="description" class="form-control form-control-solid" rows="3"
                                      name="description" placeholder="توضیحات  "></textarea>

                            @error('description')
                            <div id="defaultFormControlHelp" class="form-text text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <!--end::Input group-->


                        <div class="f-flex flex-column mb-8">

                            <label class="required fs-6 fw-semibold mb-2">شخص مسئول </label>
                              <select id="selectedUser" class="form-select form-select-solid" data-control="select2" wire:model="selectedUser" data-hide-search="true" data-placeholder="یک مورد را انتخاب کنید" name="selectedUser">
                                <option value=""> موردی انتخاب نشده است...</option>
                              @foreach($users as $user)
                                    <option @if($selectedUser == $user->id) selected @endif value="{{$user->id}}"> {{$user->name}} {{$user->family}}</option>
                                @endforeach

                            </select>

                            @error('selectedUser')
                            <div id="defaultFormControlHelp" class="form-text text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8">
                            <div class="mb-8 fv-row">
                                <label class="fs-6 fw-semibold mb-2">تاریخ سررسید </label>
                                <!--begin::Input-->
                                <div class="position-relative d-flex align-items-center">

                                    <!--begin::تاریخpicker-->
                                    {{--                                                    <input  type="text" class="form-control form-control-solid"  placeholder="زمان و تاریخ باهم" />--}}
                                    {{--                                                 <input class="form-control form-control-solid ps-12" placeholder="انتخاب یک تاریخ" name="due_date" data-jdp/>--}}
                                    <input  wire:model="selectedDate" value="{{$selectedDate}}" type="text" class="form-control form-control-solid" placeholder="تاریخ و ساعت" id="flatepicker-edit-mosavabe">
                                    <!--end::تاریخpicker-->
                                </div>
                                <!--end::Input-->
                            </div>
                        </div>
                        <!--end::Input group-->

                        <div class="f-flex flex-column mb-8">

                            <label class="required fs-6 fw-semibold mb-2">اولویت </label>
                             <select id="priority" class="form-select form-select-solid" data-control="select2"
                                    wire:model="priority" data-hide-search="true"
                                    data-placeholder="یک مورد را انتخاب کنید" name="priority">
                                <option class="text-primary" @if($selectedPriority=='normal') selected @endif value="normal"> معمولی</option>
                                <option class="text-warning"  @if($selectedPriority=='low') selected @endif value="low">کم</option>
                                <option class="text-danger"  @if($selectedPriority=='much') selected @endif value="much">فوری</option>
                            </select>
                            @error('priority')
                            <div id="defaultFormControlHelp" class="form-text text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

{{--                        <div class="row mb-0">--}}
{{--                            <!--begin::Tags-->--}}
{{--                            <label class="col-lg-4 col-form-label fw-semibold fs-6">اطلاع رسانی از طریق پیامک</label>--}}
{{--                            <!--begin::Tags-->--}}
{{--                            <!--begin::Tags-->--}}
{{--                            <div class="col-lg-8 d-flex align-items-center">--}}
{{--                                <div class="form-check form-check-solid form-switch form-check-custom fv-row">--}}
{{--                                    <input wire:model="sms" class="form-check-input w-45px h-30px"--}}
{{--                                           type="checkbox">--}}
{{--                                    <label class="form-check-label" for="allowmarketing"></label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!--begin::Tags-->--}}
{{--                        </div>--}}

                    </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Modal body-->
                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    <!--begin::Button-->
                    <button type="button" data-bs-dismiss="modal" class="btn btn-light me-3">لغو</button>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" class="btn btn-primary">
                        <span class="indicator-label">ثبت</span>
                        <span wire:loading class="indicator-progress">لطفا صبر کنید...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>
<!--end::Modal - مصوبه  جدید-->


@push('scripts')
    <script>



        $('#selectedUser').on('change', function (e) {
            let data = $(this).val();
        @this.set('selectedUser', data);
        });

        $('#priority').on('change', function (e) {
            let data = $(this).val();
        @this.set('priority', data);
        });

    </script>
@endpush

