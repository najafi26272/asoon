
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
               
                  <!--begin::Menu-->
                  <a  href="#"  class="btn me-2 btn-flex btn-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-filter fs-6 text-light me-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                       
                    </i>
                   فیلتر
               </a>
               <!--begin::Menu 1-->
               <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b77cca6eb7e">
                   <!--begin::Header-->
                   <div class="px-7 py-5">
                       <div class="fs-5 text-dark fw-bold">فیلتر تنظیمات</div>
                   </div>
                   <!--end::Header-->
                   <!--begin::Menu separator-->
                   <div class="separator border-gray-200"></div>
                   <!--end::Menu separator-->
                   <!--begin::Form-->
                   <div class="px-7 py-5">
                       <!--begin::Input group-->
                       <div class="mb-10">
                           <!--begin::Tags-->
                           <label class="form-label fw-semibold">وضعیت:</label>
                           <!--end::Tags-->
                           <!--begin::Input-->
                           <div>
                               <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="انتخاب گزینه" data-dropdown-parent="#kt_menu_64b77cca6eb7e" data-allow-clear="true">
                                   <option></option>
                                   <option value="1">تایید شده</option>
                                   <option value="2">در انتظار</option>
                                   <option value="2">در حال پردازش</option>
                                   <option value="2">رد شد</option>
                               </select>
                           </div>
                           <!--end::Input-->
                       </div>
                       <!--end::Input group-->
                      
                       <!--begin::Actions-->
                       <div class="d-flex justify-content-end">
                           <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">ریست</button>
                           <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">تایید</button>
                       </div>
                       <!--end::Actions-->
                   </div>
                   <!--end::Form-->
               </div>
               <!--end::Menu 1-->
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
                            {{$item->title}}
                            </td>
                            <td class="">
                                <a href= {{$item->link}}>
                                    لینک رصد
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
                            <td>
                                
                                <div class="d-flex justify-content-end flex-shrink-0">
                                    <a wire:click="details({{$item->id}})"
                                        class="cursor-pointer btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                     <span class="ms-1" data-bs-toggle="tooltip" title="جزییات">
                                         <i class="ki-duotone ki-eye fs-2 text-gray-500 fs-6">
                                             <span class="path1"></span>
                                             <span class="path2"></span>
                                             <span class="path3"></span>
                                         </i>
                                     </span>
                                     </a>
                                     @if($item->editNews->status != "accept")
                                     
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
                                     @endif
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
    <!--begin::Body-->
    <style>
        .text-new-green{
            color:#3da5a5 !important;
        }
    </style>
</div>
@push('scripts')
    <script>
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