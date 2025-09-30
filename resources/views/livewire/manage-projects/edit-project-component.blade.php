<div class="card mb-5 mb-xl-10">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">ویرایش پروژه</span>
        </h3>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Form-->
        <form wire:submit.prevent="submit" class="form" method="POST">

            <!--begin::Input group-->
            <div class="d-flex flex-column mb-8 fv-row">
                <!--begin::Tags-->
                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                    <span class="required">عنوان پروژه</span>
                    <span class="ms-1" data-bs-toggle="tooltip" title="برای پروژه یک عنوان تعریف کنید.">
										<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
                </label>
                <!--end::Tags-->
                <input wire:model="title" type="text" class="form-control form-control-solid"
                       placeholder="عنوان پروژه را وارد کنید."/>
                @error('title')
                <div id="defaultFormControlHelp" class="form-text text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <!--end::Input group-->

            <div wire:ignore.selfe class="d-flex flex-column mb-8">
                <label class="fs-6 fw-semibold mb-2">بخش مربوطه</label>
                <select class="form-select form-select-solid" id="editSelectedProjectCategory"
                        data-placeholder="بخش مربوطه">
                        @foreach($projectCategories as $projectCategory)
                        <option @if($selectedProjectCategory == $projectCategory->id ) selected @endif value="{{$projectCategory->id}}">{{$projectCategory->title}}</option>
                        @endforeach
                </select>
            </div>
            @error('selectedProjectCategory')
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
                    <div wire:ignore.selfe class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Tags-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required"> مسئول پروژه</span>
                            <span class="ms-1" data-bs-toggle="tooltip"
                                  title="مسئول پروژه را انتخاب کنید.">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                        </label>
                        <!--end::Tags-->
                        <select class="form-select form-select-solid" id="editSelectedManager"
                                data-placeholder="مسئول پروژه را انتخاب کنید." >

                            @foreach($users as $user)
                                <option @if($user->id == $selectedManager) selected
                                        @endif  value="{{$user->id}}"> {{$user->name}} {{$user->family}}</option>

                            @endforeach

                        </select>

                    </div>
                    <!--end::Input group-->
                    @error('selectedMembers')
                    <div style="margin-top: -20px;" id="defaultFormControlHelp"
                         class="form-text text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6 fv-row">
                    <!--begin::Input group-->
                    <div wire:ignore.selfe class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Tags-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required"> اعضا</span>
                            <span class="ms-1" data-bs-toggle="tooltip"
                                  title="اعضای پروژه را انتخاب کنید.">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                        </label>
                        <!--end::Tags-->
                        <select class="form-select form-select-solid" id="editSelectedMembers"
                                data-placeholder="اعضای پروژه را انتخاب کنید." multiple>

                            @foreach($users as $user)
                                <option @if(in_array($user->id, $selectedMembers)) selected
                                        @endif  value="{{$user->id}}"> {{$user->name}} {{$user->family}}</option>

                            @endforeach

                        </select>

                    </div>
                    <!--end::Input group-->
                    @error('selectedMembers')
                    <div style="margin-top: -20px;" id="defaultFormControlHelp"
                         class="form-text text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <!--begin::Col-->
               
            </div>

            <!--begin::Input group-->
            <div class="d-flex flex-column mb-8">
                <div class="mb-8 fv-row">
                    <label class="required fs-6 fw-semibold mb-2">تاریخ شروع پروژه</label>
                    <!--begin::Input-->
                    <div wire:ignore class="position-relative d-flex align-items-center">

                        <!--begin::تاریخpicker-->
                        {{--                                                    <input  type="text" class="form-control form-control-solid"  placeholder="زمان و تاریخ باهم" />--}}
                        {{--                                                 <input class="form-control form-control-solid ps-12" placeholder="انتخاب یک تاریخ" name="due_date" data-jdp/>--}}
                        <input wire:model="startDate" value="{{$startDate}}" type="text" class="form-control form-control-solid"
                               placeholder="YYYY/MM/DD" id="flatpickr-project-start">
                        <!--end::تاریخpicker-->
                    </div>
                    <!--end::Input-->
                </div>
            </div>
            <div class="d-flex flex-column mb-8">
                <div class="mb-8 fv-row">
                    <label class="fs-6 fw-semibold mb-2">تاریخ سررسید پروژه</label>
                    <!--begin::Input-->
                    <div wire:ignore class="position-relative d-flex align-items-center">

                        <input wire:model="deadline" value="{{$deadline}}" type="text" class="form-control form-control-solid"
                               placeholder="روز/ماه/سال" id="flatpickr-project-deadline">
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
          
            <!--begin::Button-->
            <button type="submit" class="btn btn-primary">
                <span class="indicator-label">ثبت</span>
                <span wire:loading class="indicator-progress">لطفا صبر کنید...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <!--end::Button-->
        </form>
        <!--end::Form-->
    </div>
    <!--begin::Body-->
</div>


@push('scripts')
    <script>
        $('#editSelectedMembers').select2({

            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
        });
        $('#editSelectedManager').select2({

            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
        });
        $('#editSelectedProjectCategory').select2({
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
        });

        $('#editSelectedProjectCategory').on('change', function (e) {
            let data = $(this).val();
        @this.set('selectedProjectCategory', data);
        });
        $('#editSelectedMembers').on('change', function (e) {
            let data = $(this).val();
        @this.set('selectedMembers', data);
        });
        $('#editSelectedManager').on('change', function (e) {
            let data = $(this).val();
        @this.set('selectedManager', data);
        });

    </script>
@endpush



