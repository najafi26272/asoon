<div class="card mb-5 mb-xl-10">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">لیست کاربران</span>
        </h3>
        <div class="card-toolbar " data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
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
                    <input type="text" id="searching" class="searching-input form-control bg-transparent ps-13 fs-7 " style="border-radius:0.3rem;padding-top: calc(0.55rem + 1px);padding-top: calc(0.55rem + 1px);" name="search" placeholder="جستجو کاربران" data-kt-search-element="input" />
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

            <!--end::جستجو-->   
            <a href="{{route("createUser")}}" class="btn btn-sm btn-light btn-active-primary">
                <i class="ki-duotone ki-plus fs-2"></i>کاربر جدید</a>
                
             
        </div>
    </div>
    <!--end::Header-->


    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">

            <!--begin::Table-->
            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                <tr class="fw-bold text-muted">
                    <th class="min-w-50px">ID</th>
                    <th class="min-w-150px">نام</th>
                    <th class="min-w-150px">نام کاربری</th>
                    <th class="min-w-150px">توضیح</th>
                    <th class="min-w-50px">وضعیت</th>
                    <th class="min-w-100px  text-end">عملیات</th>

                </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                @foreach($items as $item)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="d-flex justify-content-start flex-column">
                                    <p class="text-dark fw-bold text-hover-primary fs-6">{{$item->id}}</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-dark fw-bold text-hover-primary d-block fs-6">
                                {{$item->name}} {{$item->family}}
                            </p>
                        </td>
                        <td>
                            <div class="d-flex flex-column w-100 me-2">
                                <p class="text-dark fw-bold text-hover-primary fs-6">{{$item->username}}</p>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column w-100 me-2">
                                {{$item->description}}
                            </div>

                        </td>
                        <td>

                            @if($item->status =="active")
                                <a wire:click="changeStatus({{$item->id}})" class="text-success cursor-pointer">
                                    <div class="badge badge-light-success">فعال</div>
                                </a>

                            @else
                                <a wire:click="changeStatus({{$item->id}})" class="text-danger cursor-pointer">
                                    <div class="badge badge-light-danger">غیرفعال</div>
                                </a>

                            @endif
                        </td>
                        <td>
                            <div class="d-flex justify-content-end flex-shrink-0">
                                <a wire:click="changeAccess({{$item->id}})"
                                   class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">

                                     <span class="ms-1" data-bs-toggle="tooltip" title="دسترسی ها">
										 <i class="ki-duotone ki-lock-2 fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
									</span>


                                </a>
                                <a href="/admin/users/edit/{{$item->id}}"
                                   class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <i class="ki-duotone ki-pencil fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </a>
                                <a wire:click="delete({{$item->id}})"
                                   class="cursor-pointer btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                    <i class="ki-duotone ki-trash fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </a>

                            </div>
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
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
</div>

@push('scripts')
    <script>
        $('#searching').on('keyup', function (e) {
            let data = $(this).val();
            @this.set('search', data);
        });
    </script>
@endpush





