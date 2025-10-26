
@push("style")
<link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/47.0.0/ckeditor5.css" />

@endpush
<div class="card mb-5 mb-xl-10">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">
                @if($pathIsAddInfo)
                لیست اخبار تاییدشده
                @elseif($pathIsTitle)
                لیست اخبار در مرحله تیترزدن
                @elseif($pathIsFinal)
                لیست اخبار نهایی
                @else
                لیست اخبار رصدشده
                @endif
            </span>
        </h3>
            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                 data-bs-original-title="Click to add a user" data-kt-initialized="1">
               
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
             
                @if(!$pathIsAddInfo && !$pathIsTitle && !$pathIsFinal && count($items))
                <a class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_new_news">
                        <i class="ki-duotone ki-plus fs-2"></i>رصد جدید</a>
                @endif
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
                    <p class="m-5">در حال حاضر رصدی  برای شما ثبت نشده است.</p>
                    @if(!$pathIsAddInfo && !$pathIsTitle && !$pathIsFinal)
                    <a class="btn btn-sm btn-primary me-2" data-bs-toggle="modal"
                       data-bs-target="#kt_modal_new_news">رصد جدید
                        <i class="fa fa-plus"></i>
                    </a>
                    @endif
                </div>
            @else
                <!--begin::Table-->
                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                    <tr class="fw-bold text-muted ">
                        @if(!$pathIsTitle && !$pathIsFinal)
                        <th class="min-w-50px">
                            <input type="checkbox" id="selectAll" wire:model="selectAll" class="form-check-input">
                        </th>
                        @endif
                        <th class="min-w-200px">
                            عنوان
                        </th>
                        @if($pathIsTitle)
                            <th class="min-w-150px">
                                تیتر پیشنهادی
                            </th>
                        @else
                            <th class="min-w-150px">
                                لینک  
                            </th>  
                            <th class="min-w-100px">
                                تاریخ ثبت  
                            </th>       
                        @endif
                                       
                        <th class="min-w-100px">
                            وضعیت
                        </th>   
                        <th class="min-w-100px ">
                            عملیات
                        </th>                  
                    </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                    @foreach($items as $item)
                        <tr>
                            @if(!$pathIsTitle && !$pathIsFinal)
                            <td>
                                <input 
                                type="checkbox" 
                                wire:model="selectedIds" 
                                value="{{ $item->id }}" 
                                class="form-check-input item-checkbox"
                            >
                            </td>
                            @endif
                            <td class="">
                                {{$item->title}}
                            </td>
                            @if($pathIsTitle)
                                <td>{{ Str::limit($item->latestWebTitle, 50) }}</td>
                            @else
                                <td>{{ Str::limit($item->link, 30) }}</td>
                                
                                <td>
                                    <p class="text-dark fw-bold text-hover-primary d-block fs-6">
                                        {{$item->created_at? verta($item->created_at)->format('Y/m/d'): ''}}
                                    </p>
                                </td>
                            @endif

                            @if($pathIsFinal && $item->step->stepDefinition->id == 11)
                            <td class="text-start">
                            <div class="dropdown d-inline-block">
                                <button class="btn btn-sm btn-light dropdown-toggle" type="button" id="quickSelectDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                  درانتظار انتشار
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="quickSelectDropdown">
                                  <li>
                                    <a class="dropdown-item" href="#" wire:click.prevent="changeStatus({{$item->id}},12)">
                                      منتشرشده
                                    </a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="#" wire:click.prevent="changeStatus({{$item->id}},13)">
                                      عدم انتشار
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                            @else
                            <td>
                                <div class="badge badge-light-primary">{{ $item->step->stepDefinition->title }}</div>                                    
                            </td>
                            @endif

                            <td>
                                <div class="d-flex justify-content-start flex-shrink-0">

                                    <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_add_title_news"
                                        class="cursor-pointer btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <span class="ms-1" data-bs-toggle="tooltip" title="افزودن تیتر">
                                        <i class="ki-duotone ki-switch fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                    </a>
                                    @if($item->step->stepDefinition->id == 3)
                                    <a wire:click="addInfo({{$item->id}})" data-bs-toggle="modal" data-bs-target="#kt_modal_add_info"
                                        class="cursor-pointer btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <span class="ms-1" data-bs-toggle="tooltip" title="افزودن اطلاعات">
                                        <i class="ki-duotone ki-switch fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                    </a>
                                    @endif
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
                <!-- Action Buttons -->
                <div class="d-flex justify-content-start mt-5">
                    {{-- برای تایید و رد اولیه --}}
                    @if(!$pathIsTitle && !$pathIsFinal)
                        @unless ($pathIsAddInfo)
                            <button wire:click="approveSelected" class="btn btn-success me-3"
                                @if(count($selectedIds) == 0) disabled @endif >
                                تأیید انتخاب‌ها
                            </button>
                        @endunless
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#rejectModal"
                            @if(count($selectedIds) == 0) disabled @endif >
                            رد انتخاب‌ها
                        </button>
                    @endif

                    {{-- برای تایید و رد تیتر --}}
                    @if($pathIsTitle)
                        <button wire:click="approveSelectedTitrs" class="btn btn-success me-3"
                            @if(count($selectedIds) == 0) disabled @endif >
                                تأیید انتخاب‌ها
                        </button>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#rejectTitrModal"
                            @if(count($selectedIds) == 0) disabled @endif >
                            رد انتخاب‌ها
                        </button>
                    @endif
                </div>
            @endif
            
            @if(count($items))
                <div class="custom-paginate clearfix" style="margin-top: 10px;margin-right:10px">
                    {{ $items->links() }}
                </div>
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

    <!-- Reject Modal -->
    <div class="modal fade" id="rejectModal" tabindex="-1" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">رد موارد انتخاب شده</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <textarea 
                        wire:model="rejectDescription"
                        class="form-control"
                        rows="4"
                        placeholder="در صورت نیاز دلیل رد کردن را وارد کنید..."
                    ></textarea>
                    @error('rejectDescription') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="modal-footer">
                    <button 
                        wire:click="rejectSelected"
                        class="btn btn-danger"
                    >
                        تأیید رد
                    </button>
                </div>
            </div>
        </div>
    </div>

        <!-- Reject Titr Modal -->
        <div class="modal fade" id="rejectTitrModal" tabindex="-1" wire:ignore.self>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">رد موارد انتخاب شده</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <textarea 
                            wire:model="rejectDescription"
                            class="form-control"
                            rows="4"
                            placeholder="در صورت نیاز دلیل رد کردن را وارد کنید..."
                        ></textarea>
                        @error('rejectDescription') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="modal-footer">
                        <button 
                            wire:click="rejectSelectedTitrs"
                            class="btn btn-danger"
                        >
                            تأیید رد
                        </button>
                    </div>
                </div>
            </div>
        </div>


    <div wire:ignore.self class="modal fade" id="kt_modal_add_title_news" tabindex="-1" aria-hidden="true">
        <!-- Modal Dialog -->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!-- Modal Content -->
            <div class="modal-content">
                <!-- Form Start -->
                    <!-- Modal Header -->
                    <div class="modal-header" id="kt_modal_new_mosavabe_header">
                        <h2>افزودن تیتر</h2>
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <i class="ki-duotone ki-cross fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </div>
                    </div>
                    <!-- Modal Body -->
                    <div class="modal-body py-10 px-lg-17">
                        <div class="scroll-y me-n7 pe-7" id="kt_modal_new_mosavabe_scroll" data-kt-scroll="true"
                             data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                             data-kt-scroll-dependencies="#kt_modal_new_address_header"
                             data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
    
                           
                                <!--begin::Input group-->
                            <div class="row g-9 mb-8">
                                <!--begin::Col-->
                                <div class="col-12 fv-row">
                                    <!--begin::Input group-->
                                    <div wire:ignore class="d-flex flex-column mb-8 fv-row">
                                        <!--begin::Tags-->
                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class=""> تیتر خبر</span>
                                            <span class="ms-1" data-bs-toggle="tooltip"
                                                  title="تیتر مناسب با خبر را بنویسید">
                                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                        </label>
                                        <!--end::Tags-->
                                       <input type="text" class="form-control"/>
                                    </div>
                                </div>
                                
                            </div>
                           
                        </div>
                    </div>
    
                    <!--end::Modal body-->
                    <!--begin::Modal footer-->
                    <div class="modal-footer flex-center">
                        <!--begin::Button-->
                        <button type="button" data-bs-dismiss="modal" class="btn btn-light me-3">لغو</button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button wire:click="addInfo" class="btn btn-primary">
                            <span class="indicator-label">ثبت</span>
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--end::Modal footer-->
            </div>
        </div>
    </div>
    
</div>


@push('scripts')
    <script>
        // مدیریت انتخاب تمامی آیتم‌ها
        $('#selectAll').on('change', function() {
            const isChecked = $(this).prop('checked');
            $('.item-checkbox').prop('checked', isChecked);
            const ids = $('.item-checkbox:checked').map((i, el) => el.value).get();
            @this.set('selectedIds', ids);
        });

        // مدیریت تغییرات تک تک آیتم‌ها
        $(document).on('change', '.item-checkbox', function() {
            const allChecked = $('.item-checkbox:checked').length === $('.item-checkbox').length;
            $('#selectAll').prop('checked', allChecked);
            const ids = $('.item-checkbox:checked').map((i, el) => el.value).get();
            @this.set('selectedIds', ids);
        });
    
        $('#searching').on('keyup', function (e) {
            let data = $(this).val();
            @this.set('char', data);
        });

    </script>

{{-- textEditor --}}
<script src="{{asset("assets/plugins/custom/tinymce/tinymce.bundle.js")}}"></script>

<script>
    // start textEditor
    var options = {selector: "#editor", height : "480"};

    if ( KTThemeMode.getMode() === "dark" ) {
        options["skin"] = "oxide-dark";
        options["content_css"] = "dark";
    }

    tinymce.init({
        selector: "#editor",
        height : "480",
        toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | link code',    plugins : "advlist autolink link image lists charmap print preview",
        menubar: false 
    });
    // end textEditor
</script>

@endpush