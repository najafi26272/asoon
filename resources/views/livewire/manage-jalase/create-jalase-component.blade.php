<!--begin::Modal - جلسه های جدید-->
<div wire:ignore.self class="modal fade" id="kt_modal_new_jalase" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form wire:submit.prevent="submit" class="form" method="POST" id="kt_modal_new_jalase_form">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_new_jalase_header">
                    <!--begin::Modal title-->
                    <h2>ایجاد جلسه</h2>
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
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_new_jalase_scroll" data-kt-scroll="true"
                         data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                         data-kt-scroll-dependencies="#kt_modal_new_address_header"
                         data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Tags-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">عنوان جلسه</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="برای جلسه یک عنوان تعریف کنید.">
										<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
                            </label>
                            <!--end::Tags-->
                            <input wire:model="title" type="text" class="form-control form-control-solid"
                                   placeholder="عنوان جلسه را وارد کنید." autofocus="false"/>
                            @error('title')
                            <div id="defaultFormControlHelp" class="form-text text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <!--end::Input group-->

                        <div wire:ignore class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2">بخش مربوطه</label>
                            <select class="form-select form-select-solid" id="selectedJalaseCategory"
                                    data-placeholder="بخش مربوطه" multiple>
                                @foreach($jalaseCategories as $jalaseCategory)
                                    <option value="{{$jalaseCategory->id}}">{{$jalaseCategory->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('selectedJalaseCategory')
                        <div style="    margin-top: -20px;
                                margin-bottom: 20px;" id="defaultFormControlHelp" class="form-text text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                        <!--begin::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Input group-->
                                <div wire:ignore class="d-flex flex-column mb-8 fv-row">
                                    <!--begin::Tags-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required"> حاضرین</span>
                                        <span class="ms-1" data-bs-toggle="tooltip"
                                              title="افراد حاضر در جلسه را انتخاب کنید.">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                    </label>
                                    <!--end::Tags-->
                                    <select class="form-select form-select-solid" id="selectedHazerin"
                                            data-placeholder="افراد حاضر در جلسه را انتخاب کنید." multiple>

                                        @foreach($users as $user)
                                            <option value="{{$user->id}}"> {{$user->name}} {{$user->family}}</option>

                                        @endforeach

                                    </select>

                                </div>
                                <!--end::Input group-->
                                @error('selectedHazerin')
                                <div style="margin-top: -20px;" id="defaultFormControlHelp"
                                     class="form-text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Input group-->
                                <div wire:ignore class="d-flex flex-column mb-8 fv-row">
                                    <!--begin::Tags-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class=""> غائبین</span>
                                        <span class="ms-1" data-bs-toggle="tooltip"
                                              title="افراد غائب در جلسه را انتخاب کنید.">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span>
                                    </label>
                                    <!--end::Tags-->
                                    <select class="form-select form-select-solid" id="selectedGhayebin"
                                            data-placeholder="افراد غائب در جلسه را انتخاب کنید." multiple>
                                        @foreach($users as $user)
                                            <option value="{{$user->id}}"> {{$user->name}} {{$user->family}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!--end::Input group-->
                                @error('selectedGhayebin')
                                <div id="defaultFormControlHelp" class="form-text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8">
                            <div class="mb-8 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">زمان جلسه</label>
                                <!--begin::Input-->
                                <div wire:ignore class="position-relative d-flex align-items-center">

                                    <!--begin::تاریخpicker-->
                                    {{--                                                    <input  type="text" class="form-control form-control-solid"  placeholder="زمان و تاریخ باهم" />--}}
                                    {{--                                                 <input class="form-control form-control-solid ps-12" placeholder="انتخاب یک تاریخ" name="due_date" data-jdp/>--}}
                                    <input wire:model="selectedDate" type="text" class="form-control form-control-solid"
                                           placeholder="تاریخ و ساعت" id="flatpickr-datetime">
                                    <!--end::تاریخpicker-->
                                </div>
                                <!--end::Input-->
                            </div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2">توضیحات</label>
                            <textarea wire:model="description" class="form-control form-control-solid" rows="3"
                                      name="description" placeholder="توضیحات  "></textarea>

                            @error('description')
                            <div id="defaultFormControlHelp" class="form-text text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8">


                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class=""> مدعوین</span>
                                <span class="ms-1" data-bs-toggle="tooltip"
                                      title="نام افرادی که کارمند ثابت نیستند و به جلسه دعوت شده اند را وارد کنید.">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                            </label>

                            <textarea wire:model="invited" class="form-control form-control-solid" rows="3"
                                      name="invited" placeholder="مدعوین  "></textarea>

                            @error('invited')
                            <div id="defaultFormControlHelp" class="form-text text-danger">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>

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
								<span class="spinner-border spinner-border-sm align-middle ms-2">

                                </span>
                        </span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>
<!--end::Modal - جلسه  جدید-->


@push('scripts')
    <script>
    
       

    
        $('#selectedHazerin').select2({

            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
        });
        $('#selectedGhayebin').select2({

            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
        });
        $('#selectedJalaseCategory').select2({

            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
        });


        $('#selectedJalaseCategory').on('change', function (e) {
            let data = $(this).val();
        @this.set('selectedJalaseCategory', data);
        });
        $('#selectedHazerin').on('change', function (e) {
            let data = $(this).val();
        @this.set('selectedHazerin', data);
        });
        $('#selectedGhayebin').on('change', function (e) {
            let data = $(this).val();
        @this.set('selectedGhayebin', data);
        });
        $('#date').on('change', function (e) {
            let data = $(this).val();
        @this.set('date', document.getElementById('textbox_id').value);
        });

    </script>
@endpush


