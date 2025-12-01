
@push("style")
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/47.0.0/ckeditor5.css" />
    
@endpush

<div class="card mb-5 mb-xl-10">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">لیست بازنویسی های من </span>
        </h3>
            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                 data-bs-original-title="Click to add a user" data-kt-initialized="1">
                 <div wire:ignore style="margin-left: 5px; height:100% !important;">
                    <select id="selectedPriority" class="select-filter form-select form-select-solid "  style="height:100% !important;" tabindex="-1" aria-hidden="true" data-kt-initialized="1"  data-placeholder="فیلتر اولویت" data-hide-search="true" data-close-on-select="false">
                        <option value="all">همه اولویت ها</option>
                            <option value="low">کم</option>
                            <option value="medium">متوسط</option>
                            <option value="high">زیاد</option>       
                    </select>
                </div> 
                <div wire:ignore style="margin-left: 5px; height:100% !important;">
                    <select id="selectedStatus" class="select-filter form-select form-select-solid "  style="height:100% !important;" tabindex="-1" aria-hidden="true" data-kt-initialized="1"  data-placeholder="فیلتر کاربران" data-hide-search="true" data-close-on-select="false">
                        <option value="all">همه وضعیت ها</option>
                        <option value="8">در انتظار بازنویسی</option>
                        <option value="9">درانتظار بررسی</option>
                        <option value="11">تاییدشده</option>
                        <option value="10">ردشده</option>
                    </select>
                </div>  
               <!--end::Menu-->
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
                    <p class="m-5">در حال حاضر بازنویسی  برای شما ثبت نشده است.</p>
                </div>
            @else
                <!--begin::Table-->
                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                    <tr class="fw-bold text-muted">
                        <th class="min-w-200px">
                            عنوان
                        </th>
                        <th class="min-w-150px">
                            لینک  
                        </th>  
                        <th class="min-w-100px">
                            تاریخ ثبت خبر  
                        </th>                      
                        <th class="min-w-100px">
                            وضعیت خبر
                        </th>   
                        <th class="min-w-100px">
                            وضعیت بازنویسی
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
                                @if($item->priority)
                                    <span class="ms-1" data-bs-toggle="tooltip"
                                        @if($item->priority == "high") title="اولویت زیاد"
                                        @elseif($item->priority == "low") title="اولویت کم"
                                        @elseif($item->priority == "medium") title="اولویت متوسط" @endif>
                                        <i class="fa fa-flag   @if($item->priority == "high") text-danger @elseif($item->priority == "low") text-warning  @elseif($item->priority == "medium") text-primary @endif "></i>
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                @endif
                                {{$item->title}}
                            </td>
                            <td class="">
                                <a target="_blank" href={{$item->link}}> 
                                    {{Str::limit($item->link, 10)}}
                                </a>    
                            </td>
                            <td>
                                <p class="text-dark fw-bold text-hover-primary d-block fs-6">
                                    {{$item->created_at? verta($item->created_at)->format('Y/m/d'): ''}}
                                </p>
                            </td>
                            <td>
                                <div class="badge badge-light-primary">{{ $item->step->stepDefinition->title }}</div>                                    
                            </td>
                            <td>
                                @if($item->step->stepDefinition->id == 7)
                                    <div class="badge badge-light-warning"> در انتظار بازنویسی</div>
                                @else
                                    @if($item->editNews->status == "waiting")
                                        <div class="badge badge-light-warning">در انتظار بازنویسی</div>
                                    @elseif($item->editNews->status == "progressing")
                                        <div class="badge badge-light-warning">در انتظار بررسی بازنویسی</div>
                                    @elseif($item->editNews->status == "accept")
                                        <div class="badge badge-light-success">تایید شده</div>
                                    @elseif($item->editNews->status == "reject")
                                        <div class="badge badge-light-danger">رد شده</div>
                                    @endif
                                @endif
                            </td>
                            <td class="text-end">
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-bg-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-category fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </button>
                                    <!--begin::Menu 3-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                        <!--begin::Heading-->
                                            @if($status != "accept")
                                            <div class="menu-item px-3">
                                                <a wire:click="update({{$item->id}})" class="menu-link flex-stack px-3">ویرایش بازنویسی
                                                <span class="ms-2" data-bs-toggle="tooltip" title="ویرایش محتوای بازنویسی">
                                                    <i class="ki-duotone ki-pencil fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                                </a>
                                            </div>
                                            @endif
                                            <div class="menu-item px-3">
                                                <a wire:click="reviewHistory({{$item->id}})" class="menu-link flex-stack px-3">تاریخچه بازنویسی ها
                                                <span class="ms-2" data-bs-toggle="tooltip" title="تاریخچه بازنویسی های رد شده">
                                                    <i class="ki-duotone ki-information fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                                </a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a wire:click="details({{$item->id}})" class="menu-link flex-stack px-3">جزییات
                                                <span class="ms-2" data-bs-toggle="tooltip" title="نمایش جزییات خبر">
                                                    <i class="ki-duotone ki-eye fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                                </a>
                                            </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            @endif

            @if(count($items))
                <div class="custom-paginate clearfix" style="margin-top: 10px;margin-right:10px">
                    {{ $items->links() }}
                </div>
            @endif
        </div>
        <!--end::Table container-->
    </div>
</div>
@push('scripts')
    <script>
        $('#searching').on('keyup', function (e) {
            let data = $(this).val();
            @this.set('char', data);
        });
        $('#selectedStatus, #selectedPriority').on('change', function() {
            let data = $(this).val();
            @this.set($(this).attr('id') === 'selectedPriority' ? 'selectedPriority' : 'selectedStatus', data);
        });
        $(document).ready(function() {
            $('.select-filter').select2({
                height:'100%'
            });
        });
    </script>
@endpush