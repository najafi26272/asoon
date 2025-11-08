@push('css')
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
            <span class="card-label fw-bold fs-3 mb-1">گزارش کارها </span>
            {{--            <span class="text-muted mt-1 fw-semibold fs-7">50 ساعت از اول بهمن ماه تا امروز</span>--}}
        </h3>
        <div class="card-toolbar">
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
             
        </div>
         <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                 data-bs-original-title="Click to add a user" data-kt-initialized="1">
            @if(\Illuminate\Support\Facades\Auth::user()->accesses->report_access)
                <div wire:ignore class="me-3 mb-2 w-100 w-lg-auto" >
                    <select id="selectedUserReport" class="select-filter form-select form-select-solid "     data-placeholder="فیلتر کاربران" data-hide-search="true">
                        @foreach($users as $user)
                            <option @if($user->id == Auth::user()->id) selected @endif value="{{$user->id}}">{{$user->name .' '.$user->family}}</option>
                        @endforeach
                    </select>
                </div>
            @endif
             
            

            <!--begin::Input-->
                <div wire:ignore class="range-date-item position-relative d-flex align-items-center me-3 mb-2">
                    <input wire:model="selectedDate" wire:change="changeDate()" type="text" class="form-control  form-control-solid" placeholder="فیلتر تاریخ" id="flatpickr-range">
                </div>

            <!--end::Input-->
            
            <a href="#" class="btn btn-lg btn-bg-light btn-active-color-primary me-3 mb-2" data-bs-toggle="modal"
                   data-bs-target="#kt_modal_new_report">
                    <i class="ki-duotone ki-plus fs-2"></i>افزودن به گزارش کار
                </a>
         
             <a href="{{route('reportDownload')}}" class="btn btn-lg btn-bg-light btn-active-color-primary me-3 mb-2">
                <i class="fa fa-download"></i>
                دانلود خروجی کار</a>
            <a href="#" class="btn btn-lg btn-bg-light btn-active-color-primary me-3 mb-2"data-bs-toggle="modal" data-bs-target="#kt_modal_report">
                <i class="fa fa-upload"></i>
                بارگزاری خروجی کار</a>
            <a href="#" class="btn btn-lg btn-primary me-3 mb-2" wire:click="export">
                <i class="fa fa-file-excel"></i>
                دانلود فایل اکسل</a        >
        </div>

        
    </div>
    <!--end::Header-->


    <!--begin::Body-->
    <div class="card-body py-3">

        @if(count($items) == 0)
            <div class="py-10 text-center">
                <img src="{{asset("assets/media/svg/illustrations/easy/1.svg")}}" class=" w-200px" alt="">
                {{--                <img src="{{asset("assets/media/svg/illustrations/easy/1-dark.svg")}}" class="theme-dark-show w-200px" alt="">--}}
                <p class="m-5">شما در حال حاضر هیچ گزارش کاری ثبت نکرده اید.</p>
            </div>
        @else


            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                    <tr class="fw-bold text-muted">
                        <th class="min-w-200px">
                            گزارش کار
                        </th>
                        <th class="min-w-150px">
                            تاریخ پایان
                        </th>
                        @if(\Illuminate\Support\Facades\Auth::user()->accesses->report_access)
                            <th class="min-w-150px">
                                شخص مربوطه
                            </th>  
                        @endif
                       
                        <th class="min-w-150px">
                            مدت انجام
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
                                        <p class="text-dark fw-bold text-hover-primary fs-6">
                                            {{$item->task}} </p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-dark fw-bold text-hover-primary d-block fs-6">
                                    {{verta($item->finished_date)->format('Y/m/d')}}
                                </p>
                            </td>
                            @if(\Illuminate\Support\Facades\Auth::user()->accesses->report_access)
                            <td>
                                <div class="d-flex flex-column w-100 me-2">
                                    <p class="text-dark fw-bold text-hover-primary fs-6">{{$item->user->name}} {{$item->user->family}}</p>
                                </div>
                            </td>
                            @endif
                            <td>
                                <p class="text-dark fw-bold text-hover-primary d-block fs-6">
                                    {{$item->time}} دقیقه
                                </p>

                            </td>
                            <td>
                                
                                <div class="d-flex justify-content-end flex-shrink-0">
                                     <a href="report/edit/{{$item->id}}" class="cursor-pointer btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
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
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->

        @endif
        @if(count($items) != 0)
            <div class="custom-paginate clearfix" style="margin-top: 10px;margin-right:10px">
                {{$items->links()}}
            </div>
        @endif
    </div>
    <!--begin::Body-->
    <div wire:ignore.self class="modal fade" id="kt_modal_report" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form wire:submit.prevent="storeReportFile" class="form" id="kt_modal_new_report_form">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_new_report_header">
                    <!--begin::Modal title-->
                    <h2>بارگزاری خروجی کار</h2>
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
                      <div class="row">
                          <div class="col">
                              <div class="d-flex flex-column mb-8">
                                    <label class="fs-6 fw-semibold mb-2 required">زمان</label>
                                    <select id="selectedMonth" class="form-select form-select-solid" wire:model="time" data-kt-select2="true" data-placeholder="انتخاب ماه " data-kt-subscription-table-filter="status" data-hide-search="true">
                                        @foreach($months as $key => $month)
                                            <option value="{{$key}}">{{ Verta::instance($month)->format('%B %Y')}}</option>
                                        @endforeach
                                    </select>
                                    @error('time')
                                        <div id="defaultFormControlHelp" class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                
                          </div>
                       
                      </div>
                       
                    <!--end::Input group-->
                    
                     <!--begin::Input group-->
                      <div class="row">
                          <div class="col">
                            
                              <div class="d-flex flex-column mb-8">
                                   <label class="fs-6 fw-semibold mb-2 required">فایل گزارش</label>
                                    <input class="form-control form-control-solid btn btn-sm  me-2" wire:model="reportFile" name="file" type="file">
                                   <span class="form-text fs-6 text-muted"> 50MB / فقط فرمت زیپ قابل قبول است.</span>
                                    @error('reportFile')
                                        <div id="defaultFormControlHelp" class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                               
                          </div>
                           
                      </div>
                       
                        <!--end::Input group-->
                        
                       
										
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
                        <span  wire:loading.delay.long class="indicator-progress">لطفا صبر کنید...
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


</div>


@push('scripts')
    <script>
        $('#searching').on('keyup', function (e) {
            let data = $(this).val();
            @this.set('search', data);
        });
        $('#selectedUserReport').on('change', function (e) {
            let data = $(this).val();
            @this.set('selectedUser', data);
        });
      
    </script>
@endpush

