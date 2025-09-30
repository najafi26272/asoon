 <!--begin::Modal - ساختن پروژه-->
 <div wire:ignore.self class="modal fade" id="kt_modal_new_project" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content modal-rounded">
					<!--begin::Modal header-->
					<div class="modal-header">
						<!--begin::Modal title-->
						<h2>ایجاد پروژه</h2>
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
                    <div class="modal-body py-1 px-lg-1">
						<!--begin::Stepper-->
						<div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_project_stepper">
							<!--begin::Container-->
							<div class="container">

								<!--begin::Form-->
					<form wire:submit.prevent="submit" method="POST" class="form mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate" id="kt_modal_create_project_form">
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
                                   placeholder="عنوان پروژه را وارد کنید." autofocus="false"/>

                        </div>
                        @error('title')
                            <div id="defaultFormControlHelp" class="form-text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                        <!--end::Input group-->

                        <div wire:ignore class="d-flex flex-column mb-8 fv-row">
                                    <!--begin::Tags-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">بخش مربوطه</span>
                                        <span class="ms-1" data-bs-toggle="tooltip"
                                              title=" بخش مربوطه را انتخاب کنید.">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span>
                                    </label>
                                    <!--end::Tags-->
                                    <select class="form-select form-select-solid" id="selectedProjectCategory"
                                            data-placeholder="بخش مربوطه" >
                                            <option value="">بخش مربوطه را انتخاب کنید.</option>
                                        @foreach($projectCategories as $projectCategory)
                                            <option value="{{$projectCategory->id}}">{{$projectCategory->title}}</option>
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
                        <div class="d-flex flex-column mb-8">
                            <div class="mb-8 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">تاریخ شروع پروژه</label>
                                <!--begin::Input-->
                                <div wire:ignore class="position-relative d-flex align-items-center">
                                    <!--begin::تاریخpicker-->
                                    <input wire:model="selectedStartDate" type="text" class="form-control form-control-solid"
                                           placeholder="تاریخ " id="flatpickr-project-start">
                                    <!--end::تاریخpicker-->
                                </div>
                                <!--end::Input-->
                            </div>
                        </div>
                         @error('selectedStartDate')
                            <div id="defaultFormControlHelp" class="form-text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="d-flex flex-column mb-8">
                            <div class="mb-8 fv-row">
                                <label class="fs-6 fw-semibold mb-2">تاریخ سررسید پروژه</label>
                                <!--begin::Input-->
                                <div wire:ignore class="position-relative d-flex align-items-center">
                                    <!--begin::تاریخpicker-->
                                    <input wire:model="selectedDeadline" type="text" class="form-control form-control-solid"
                                           placeholder="تاریخ " id="flatpickr-project-deadline">
                                    <!--end::تاریخpicker-->
                                </div>
                                <!--end::Input-->
                            </div>
                        </div>
                        <!--end::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Input group-->
                                <div wire:ignore class="d-flex flex-column mb-8 fv-row">
                                    <!--begin::Tags-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">مسئول</span>
                                        <span class="ms-1" data-bs-toggle="tooltip"
                                              title=" مسئول پروژه را انتخاب کنید.">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span>
                                    </label>
                                    <!--end::Tags-->
                                    <select class="form-select form-select-solid" id="selectedManagers"
                                            data-placeholder="مسئول پروژه" >
                                            <option value="">مسئول پروژه را انتخاب کنید.</option>
                                        @foreach($users as $user)
                                            <option value="{{$user->id}}"> {{$user->name}} {{$user->family}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!--end::Input group-->
                                @error('selectedManagers')
                                <div id="defaultFormControlHelp" class="form-text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6 fv-row">
                                <!--begin::Input group-->
                                <div wire:ignore class="d-flex flex-column mb-8 fv-row">
                                    <!--begin::Tags-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">اعضا</span>
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
                                    <select class="form-select form-select-solid" id="selectedMembers"
                                            data-placeholder="اعضای پروژه" multiple>
                                        @foreach($users as $user)
                                            <option value="{{$user->id}}"> {{$user->name}} {{$user->family}}</option>
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
							<!--begin::Container-->
						</div>
						<!--end::Stepper-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - ساختن پروژه-->

@push('scripts')
    <script>
        $('#selectedManagers').select2({
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
        });

        $('#selectedMembers').select2({
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
        });

        $('#selectedProjectCategory').select2({
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
        });


        $('#selectedProjectCategory').on('change', function (e) {
            let data = $(this).val();
        @this.set('selectedProjectCategory', data);
        });
        $('#selectedManagers').on('change', function (e) {
            let data = $(this).val();
        @this.set('selectedManagers', data);
        });
        $('#selectedMembers').on('change', function (e) {
            let data = $(this).val();
        @this.set('selectedMembers', data);
        });
        $('#date').on('change', function (e) {
            let data = $(this).val();
        @this.set('date', document.getElementById('textbox_id').value);
        });

    </script>
@endpush
