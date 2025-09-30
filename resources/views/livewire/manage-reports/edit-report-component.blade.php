<div class="card mb-5 mb-xl-10">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">ویرایش گزارش کار</span>
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
                    <span class="required">توضیحات</span>
                </label>
                <!--end::Tags-->
                <textarea wire:model="description" class="form-control form-control-solid" rows="3"
                                      name="description" placeholder="توضیحات"></textarea>
                @error('description')
                <div id="defaultFormControlHelp" class="form-text text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="d-flex flex-column mb-8">
                <div class="mb-8 fv-row">
                    <label class="required fs-6 fw-semibold mb-2">تاریخ</label>
                    <!--begin::Input-->
                    <div wire:ignore class="position-relative d-flex align-items-center">

                        <!--begin::تاریخpicker-->
                        {{--                                                    <input  type="text" class="form-control form-control-solid"  placeholder="زمان و تاریخ باهم" />--}}
                        {{--                                                 <input class="form-control form-control-solid ps-12" placeholder="انتخاب یک تاریخ" name="due_date" data-jdp/>--}}
                        <input wire:model="selectedDate" value="{{$selectedDate}}" type="text" class="form-control form-control-solid"
                               placeholder="YYYY/MM/DD" id="flatpickr-project-start">
                        <!--end::تاریخpicker-->
                    </div>
                    <!--end::Input-->
                </div>
            </div>
            <!--begin::Input group-->
            <div class="d-flex flex-column mb-8">
                <label class="required fs-6 fw-semibold mb-2">مدت زمان انجام به دقیقه</label>
               <input wire:model="time" type="text" class="form-control form-control-solid"
                                           placeholder="مدت زمان انجام به دقیقه" autofocus="false"
                @error('time')
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



