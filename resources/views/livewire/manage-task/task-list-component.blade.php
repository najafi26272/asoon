@push('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<style>
    .select2-container .select2-selection--single{
        height:100% !important;
    }
</style>
@endpush

<div class="card mb-5 mb-xl-10">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">وظیفه ها </span>
        </h3>
            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                 data-bs-original-title="Click to add a user" data-kt-initialized="1">
                @if(Auth::user()->accesses->task_access)
                <div wire:ignore style="margin-left: 5px; height:100% !important;">
                    <select wire:model="selectedUser" id="selectedUserJalase" class="select-filter form-select form-select-solid "  style="height:100% !important;" tabindex="-1" aria-hidden="true" data-kt-initialized="1"  data-placeholder="فیلتر کاربران" data-hide-search="true" data-close-on-select="false">
                        <option value="all">تمام کاربران</option>
                        @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->name .' '.$user->family}}</option>
                        @endforeach
                    </select>
                </div>
                @endif
                 <!--begin::جستجو-->
            <div id="kt_header_search" class="header-search d-flex align-items-center w-lg-250px me-3" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="lg" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
                
                <!--begin::Fیاm(use d-none d-lg-block classes for responsive search)-->
                <div wire:ignore data-kt-search-element="form" class="searching-div d-block d-lg-block w-100 position-relative mb-2 mb-lg-0" autocomplete="true">
                    <!--end::Hidden input-->
                    <!--begin::Icon-->
                    <i class="ki-duotone ki-magnifier fs-2 text-gray-700 position-absolute top-50 translate-middle-y ms-4">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <!--end::Icon-->
                    <!--begin::Input-->
                    <input type="text" id="searching" class="searching-input form-control bg-transparent ps-13 fs-7 " style="border-radius:0.3rem;padding-top: calc(0.55rem + 1px);padding-top: calc(0.55rem + 1px);" name="search" placeholder="جستجوی عنوان" data-kt-search-element="input" />
                    <!--end::Input-->
                    <!--begin::Spinner-->
                    <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
						<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
					</span>
                    <!--end::Spinner-->
                    <!--begin::ریست-->
                    <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
						<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
							<span class="path1"></span>
							<span class="path2"></span>
						</i>
					</span>
                    <!--end::ریست-->
                </div>
                <!--end::Form-->
            </div>
             
            @if(count($items) != 0)
                <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal"
                   data-bs-target="#kt_modal_new_task">
                    <i class="ki-duotone ki-plus fs-2"></i>وظیفه جدید</a>
            @endif
            
  <!--      <div class="card-toolbar" data-select2-id="select2-filter-task">-->
			<!--begin::Menu-->
		<!--	<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">-->
		<!--		<i class="ki-duotone ki-category fs-6">-->
		<!--			<span class="path1"></span>-->
		<!--			<span class="path2"></span>-->
		<!--			<span class="path3"></span>-->
		<!--			<span class="path4"></span>-->
		<!--		</i>-->
		<!--	</button>-->
			<!--begin::Menu 1-->
		<!--	<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b77cd249bae" style="" data-select2-id="select2-filter-task">-->
				<!--begin::Header-->
		<!--		<div class="px-7 py-5">-->
		<!--			<div class="fs-5 text-dark fw-bold">فیلتر </div>-->
		<!--		</div>-->
				<!--end::Header-->
				<!--begin::Menu separator-->
		<!--		<div class="separator border-gray-200"></div>-->
				<!--end::Menu separator-->
				<!--begin::Form-->
		<!--		<div class="px-7 py-5" data-select2-id="select2-data-135-hy36">-->
					<!--begin::Input group-->
		<!--			<div class="mb-10" data-select2-id="select2-data-134-i8ra">-->
						<!--begin::Tags-->
		<!--				<label class="form-label fw-semibold">وضعیت:</label>-->
						<!--end::Tags-->
						<!--begin::Input-->
		<!--				<div data-select2-id="select2-data-133-b5ld">-->
		<!--					<select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-placeholder="انتخاب گزینه"  data-control="select2"  tabindex="-1" aria-hidden="true" data-kt-initialized="1">-->
		<!--						<option value="1" >تایید شده</option>-->
		<!--						<option value="2" >در انتظار</option>-->
		<!--						<option value="2">در حال پردازش</option>-->
		<!--						<option value="2" >رد شد</option>-->
		<!--					</select>-->
							
		<!--				<select class="select-filter-task form-select form-select-solid " multiple=""  name="state">-->
  <!--                        <option >انجام شده</option>-->
  <!--                          <option>در حال انجام</option>-->
  <!--                      </select>-->
							
		<!--				</div>-->
						<!--end::Input-->
		<!--			</div>-->
					<!--end::Input group-->
					<!--begin::Input group-->
		<!--			<div class="mb-10">-->
						<!--begin::Tags-->
		<!--				<label class="form-label fw-semibold">نوع عضویت:</label>-->
						<!--end::Tags-->
						<!--begin::تنظیمات-->
		<!--				<div class="d-flex">-->
							<!--begin::تنظیمات-->
		<!--					<label class="form-check form-check-sm form-check-custom form-check-solid me-5">-->
		<!--						<input class="form-check-input" type="checkbox" value="1">-->
		<!--						<span class="form-check-label">نویسنده</span>-->
		<!--					</label>-->
							<!--end::تنظیمات-->
							<!--begin::تنظیمات-->
		<!--					<label class="form-check form-check-sm form-check-custom form-check-solid">-->
		<!--						<input class="form-check-input" type="checkbox" value="2" checked="checked">-->
		<!--						<span class="form-check-label">مشتری</span>-->
		<!--					</label>-->
							<!--end::تنظیمات-->
		<!--				</div>-->
						<!--end::تنظیمات-->
		<!--			</div>-->
					<!--end::Input group-->
					<!--begin::Input group-->
		<!--			<div class="mb-10">-->
						<!--begin::Tags-->
		<!--				<label class="form-label fw-semibold">اعلان ها:</label>-->
						<!--end::Tags-->
						<!--begin::Switch-->
		<!--				<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">-->
		<!--					<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">-->
		<!--					<label class="form-check-label">فعال</label>-->
		<!--				</div>-->
						<!--end::Switch-->
		<!--			</div>-->
					<!--end::Input group-->
					<!--begin::Actions-->
		<!--			<div class="d-flex justify-content-end">-->
		<!--				<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">ریست</button>-->
		<!--				<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">تایید</button>-->
		<!--			</div>-->
					<!--end::Actions-->
		<!--		</div>-->
				<!--end::Form-->
		<!--	</div>-->
			<!--end::Menu 1-->
			<!--end::Menu-->
		<!--</div>-->

            </div>
    </div>
    <!--end::Header-->


    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">


            @if(count($items) == 0)
                <div class="py-10 text-center">
                    <img src="{{asset("assets/media/svg/illustrations/easy/2.svg")}}" class=" w-200px"
                         alt="">
                    {{--                    <img src="{{asset("assets/media/svg/illustrations/easy/2-dark.svg")}}"--}}
                    {{--                         class="theme-dark-show w-200px" alt="">--}}
                    <p class="m-5">در حال حاضر وظیفه ای برای شما ثبت نشده است.</p>
                    <a class="btn btn-sm btn-primary me-2" data-bs-toggle="modal"
                       data-bs-target="#kt_modal_new_task">وظیفه جدید
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
            @else

                <!--begin::Table-->
                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                    <tr class="fw-bold text-muted">

                        <th class="min-w-200px">
                            وظیفه
                        </th>
                        <th class="min-w-150px">
                            تاریخ سر رسید
                        </th>
                        @if(\Illuminate\Support\Facades\Auth::user()->accesses->task_access)
                            <th class="min-w-150px">
                                شخص مربوطه
                            </th>
                        @endif

                        <th class="min-w-150px">
                            وضعیت
                        </th>
                        <th class="min-w-100px text-end">
                            عملیات
                        </th>
                    </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td class="">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                        <p class="text-dark fw-bold fs-6">
                                            @if($item->mosavabe_id != 0)<span class="ms-1" data-bs-toggle="tooltip"
                                                  title="وظیفه ثبت شده از طریق مصوبه" >
                                        <i class="fa fa-users text-new-green"></i>
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                                </i>
									 </span>@endif
									 
									 @if($item->project_id != 0)<span class="ms-1" data-bs-toggle="tooltip"
                                                  title="وظیفه ثبت شده از طریق پروژه" >
                                        <i class="fa fa-layer-group text-new-green"></i>
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                                </i>
									 </span>@endif
									 
                                         <span class="ms-1" data-bs-toggle="tooltip"
                                               @if($item->sms_status == 1) title="اس ام اس یادآور فعال شده است."
                                               @else title="اس ام اس یادآور فعال نشده است." @endif>
										<i class="fa fa-bell  @if($item->sms_status == 1) text-warning @else text-gray-500  @endif ">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>

                                            <span class="ms-1" data-bs-toggle="tooltip"
                                                  @if($item->priority == "much") title="اولویت زیاد"
                                                  @elseif($item->priority == "low") title="اولویت کم"
                                                  @elseif($item->priority == "normal") title="اولویت متوسط" @endif>
                                        <i class="fa fa-flag   @if($item->priority == "much") text-danger @elseif($item->priority == "low") text-warning  @elseif($item->priority == "normal") text-primary @endif "></i>
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                                </i>
									 </span>
                                            {{$item->task}} </p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-dark fw-bold text-hover-primary d-block fs-6">
                                    {{$item->end_date? verta($item->end_date)->format('Y/m/d'): ''}}
                                </p>
                            </td>
                            @if(\Illuminate\Support\Facades\Auth::user()->accesses->task_access)
                                <td>
                                    <div class="d-flex flex-column w-100 me-2">
                                        <p class="text-dark fw-bold text-hover-primary fs-6">{{$item->user->name}} {{$item->user->family}}</p>
                                    </div>
                                </td>
                            @endif
                            <td>

                                <a class="cursor-pointer" wire:click="changeStatus({{$item->id}})">
                                    @if($item->status == "waiting")
                                        <div class="badge badge-light-warning"> در انتظار</div>
                                    @elseif($item->status == "progressing")

                                        <div class="badge badge-light-primary">درحال انجام</div>

                                    @elseif($item->status == "finished")
                                        <div class="badge badge-light-success">انجام شده</div>
                                    @endif
                                </a>

                            </td>
                            <td>

                                @if($item->mosavabe_id != 0)
                                <div class="d-flex justify-content-end flex-shrink-0">
                                        <a wire:click="showMessage()"
                                           class="cursor-pointer btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">

                                    <span class="ms-1" data-bs-toggle="tooltip" title="ویرایش">
										<i class="ki-duotone ki-pencil fs-2 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
                                        </a>
                                        <a wire:click="showMessage()"
                                           class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm cursor-pointer">
                                            {{--                                   --}}
                                            {{--                                    <span class="ms-1" data-bs-toggle="tooltip" title="ویرایش">--}}
                                            {{--										<i class="ki-duotone ki-trash fs-2 text-gray-500 fs-6">--}}
                                            {{--											<span class="path1"></span>--}}
                                            {{--											<span class="path2"></span>--}}
                                            {{--											<span class="path3"></span>--}}
                                            {{--										</i>--}}
                                            {{--									</span>--}}
                                            <span class="ms-1" data-bs-toggle="tooltip" title="حذف">
                                    <i class="ki-duotone ki-trash fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                   </span>
                                        </a>
                                    </div>
                                    
                                @elseif($item->project_id != 0) 
                                    <div class="d-flex justify-content-end flex-shrink-0">
                                        <a wire:click="showProjectTaskMessage()"
                                           class="cursor-pointer btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">

                                    <span class="ms-1" data-bs-toggle="tooltip" title="ویرایش">
										<i class="ki-duotone ki-pencil fs-2 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
                                        </a>
                                        <a wire:click="showProjectTaskMessage()"
                                           class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm cursor-pointer">
                                            {{--                                   --}}
                                            {{--                                    <span class="ms-1" data-bs-toggle="tooltip" title="ویرایش">--}}
                                            {{--										<i class="ki-duotone ki-trash fs-2 text-gray-500 fs-6">--}}
                                            {{--											<span class="path1"></span>--}}
                                            {{--											<span class="path2"></span>--}}
                                            {{--											<span class="path3"></span>--}}
                                            {{--										</i>--}}
                                            {{--									</span>--}}
                                            <span class="ms-1" data-bs-toggle="tooltip" title="حذف">
                                    <i class="ki-duotone ki-trash fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                   </span>
                                        </a>
                                    </div>
                                @else
                                    
                                    <div class="d-flex justify-content-end flex-shrink-0">
                                        <a wire:click="update({{$item->id}})"
                                           class="cursor-pointer btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">

                                    <span class="ms-1" data-bs-toggle="tooltip" title="ویرایش">
										<i class="ki-duotone ki-pencil fs-2 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
                                        </a>
                                        <a wire:click="delete({{$item->id}})"
                                           class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm cursor-pointer">
                                            {{--                                   --}}
                                            {{--                                    <span class="ms-1" data-bs-toggle="tooltip" title="ویرایش">--}}
                                            {{--										<i class="ki-duotone ki-trash fs-2 text-gray-500 fs-6">--}}
                                            {{--											<span class="path1"></span>--}}
                                            {{--											<span class="path2"></span>--}}
                                            {{--											<span class="path3"></span>--}}
                                            {{--										</i>--}}
                                            {{--									</span>--}}
                                            <span class="ms-1" data-bs-toggle="tooltip" title="حذف">
                                    <i class="ki-duotone ki-trash fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                   </span>
                                        </a>
                                    </div>

                                @endif

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
                @if(count($items) != 0)
                <div class="custom-paginate clearfix" style="margin-top: 10px;margin-right:10px">
                    {{$items->links()}}
                </div>
                @endif

                
                

            @endif
            
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
    <style>
        .text-new-green{
            color:#3da5a5 !important;
        }
    </style>
</div>

@push('scripts')
    <script>
        // $(document).ready(function() {
        // $('.check').change(function() {
        //     if(this.checked) {
        //         const cc=  $(this).parent().parent();
        //         $('#tb_2').append(cc);
        //     } else {
        //         $('#tb_2 tr:last').remove();
        //     }
        // });
        // });




        $('#searching').on('keyup', function (e) {
            let data = $(this).val();
            @this.set('search', data);
        });
        
        // // In your Javascript (external .js resource or <script> tag)
        // $(document).ready(function() {
        //     $('.select-filter-task').select2();
        // });
        
        $('#selectedUserJalase').on('change', function (e) {
            let data = $(this).val();
            @this.set('selectedUser', data);
        });
        $(document).ready(function() {
            $('.select-filter').select2({
                height:'100%'
            });
        });
    </script>
@endpush


