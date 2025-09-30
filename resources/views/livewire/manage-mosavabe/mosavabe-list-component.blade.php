<div class="card mb-5 mb-xl-10">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">مصوبات {{$jalase->title}}</span>
        </h3>
        @if(\Illuminate\Support\Facades\Auth::user()->accesses->meetings_access)
            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                 data-bs-original-title="Click to add a user" data-kt-initialized="1">
                <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal"
                   data-bs-target="#kt_modal_new_mosavabe">
                    <i class="ki-duotone ki-plus fs-2"></i>مصوبه جدید</a>
            </div>
        @endif
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

                    <th class="min-w-200px">
                        مصوبه
                    </th>
                    <th class="min-w-150px">
                        تاریخ سر رسید
                    </th>
                    <th class="min-w-150px">
                        شخص مربوطه
                    </th>
                    <th class="min-w-150px">
                        وضعیت
                    </th>
                    @if(\Illuminate\Support\Facades\Auth::user()->accesses->meetings_access)

                    <th class="min-w-100px text-end">
                        عملیات
                    </th>
                    @endif
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

                                    <span class="ms-1" data-bs-toggle="tooltip"
                                          @if($item->sms_status == 1) title="اس ام اس یادآور ارسال شده است."
                                          @else title="اس ام اس یادآور ارسال نشده است." @endif>
										<i class="fa fa-envelope  @if($item->sms_status == 1) text-primary @else text-gray-500  @endif ">
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


                                        {{$item->description}} </p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-dark fw-bold text-hover-primary d-block fs-6">
                                {{$item->end_date? verta($item->end_date)->format('Y/m/d'): ''}}
                            </p>
                        </td>
                        <td>
                            <div class="d-flex flex-column w-100 me-2">
                                <p class="text-dark fw-bold text-hover-primary fs-6">{{$item->user->name}} {{$item->user->family}}</p>
                            </div>
                        </td>
                        <td>
                            @if($item->status == "waiting")
                                <div class="badge badge-light-warning"> در انتظار</div>
                            @elseif($item->status == "progressing")

                                <div class="badge badge-light-primary">درحال انجام</div>

                            @elseif($item->status == "finished")
                                <div class="badge badge-light-success">انجام شده</div>
                            @endif
                        </td>
                        @if(\Illuminate\Support\Facades\Auth::user()->accesses->meetings_access)

                            <td>
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
                            </td>
                        @endif

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


{{--<div>--}}

{{--    <div class="card-header border-bottom">--}}
{{--        <h5 class="card-title" style="margin-bottom: -40px;">مصوبات {{$mosavabe->title}}</h5>--}}
{{--        <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">--}}
{{--            <div class="col-md-4 user_role"></div>--}}
{{--            <div class="col-md-4 user_plan"></div>--}}
{{--            <div class="col-md-4 user_status"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="card-datatable table-responsive">--}}
{{--        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">--}}
{{--            <div class="row mx-2" style="padding: 15px 0px;">--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="row">--}}
{{--                        <button class="dt-button col-6 add-new btn btn-primary"--}}
{{--                                aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas"--}}
{{--                                data-bs-target="#offcanvasAddUser">--}}
{{--                                <span class="d-none d-lg-inline-block">افزودن مصوبه جدید</span></button>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <div--}}
{{--                        class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0">--}}
{{--                        <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input type="search"--}}
{{--                                                                                                    wire:model="char"--}}
{{--                                                                                                    class="form-control"--}}
{{--                                                                                                    placeholder="جستجو ..."--}}
{{--                                                                                                    aria-controls="DataTables_Table_0"></label>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <table class="datatables-users table border-top dataTable no-footer dtr-column" id="DataTables_Table_0"--}}
{{--                   role="grid" aria-describedby="DataTables_Table_0_info">--}}
{{--                <thead>--}}
{{--                <tr role="row">--}}
{{--                    <th>--}}
{{--                        توضیح--}}
{{--                    </th>--}}
{{--                    <th>--}}
{{--                        تاریخ سر رسید--}}
{{--                    </th>--}}
{{--                    <th>--}}
{{--                        شخص مربوطه--}}
{{--                    </th>--}}
{{--                    <th>--}}
{{--                        وضعیت--}}
{{--                    </th>--}}
{{--                    <th>--}}
{{--                        عملیات--}}
{{--                    </th>--}}

{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}

{{--                @if(count($items) == 0)--}}
{{--                    <tr class="odd">--}}
{{--                        <td valign="top" colspan="7" class="dataTables_empty">در حال حاضر برای این جلسه مصوبه ای ثبت--}}
{{--                            نشده است.--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                @else--}}
{{--                    @foreach($items as $item)--}}
{{--                        <tr class="odd">--}}
{{--                            <td>{{$item->description}}</td>--}}
{{--                            <td style="font-size: 10px">{{verta($item->end_date)->format('H:i Y/m/d')}}</td>--}}
{{--                            <td>{{$item->user->name}} {{$item->user->family}}</td>--}}
{{--                            <td>--}}
{{--                                @if($item->status == "waiting")--}}
{{--                                    <span class="badge bg-label-warning me-1">--}}
{{--                                        در انتظار--}}
{{--                                </span>--}}
{{--                                @elseif($item->status == "progressing")--}}

{{--                                    <span class="badge bg-label-primary me-1">--}}
{{--                                         درحال انجام--}}

{{--                                </span>--}}

{{--                                @elseif($item->status == "finished")--}}
{{--                                    <span class="badge bg-label-success me-1">--}}
{{--                                    انجام شده--}}
{{--                                </span>--}}

{{--                                @endif--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <div class="dropdown">--}}
{{--                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"--}}
{{--                                            data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                                        <i class="bx bx-dots-vertical-rounded"></i>--}}
{{--                                    </button>--}}
{{--                                    <div class="dropdown-menu" style="">--}}
{{--                                        <button aria-controls="DataTables_Table_0" type="button"--}}
{{--                                                data-bs-toggle="offcanvas"--}}
{{--                                                data-bs-target="#offcanvasEditMosavabe"--}}
{{--                                                class="dropdown-item cursor-pointer" wire:click="update({{$item->id}})">--}}
{{--                                            <i class="bx bx-edit-alt me-1"></i>--}}
{{--                                            ویرایش--}}
{{--                                        </button>--}}
{{--                                        <a class="dropdown-item cursor-pointer" wire:click="delete({{$item->id}})"><i--}}
{{--                                                class="bx bx-trash me-1"></i> حذف</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
{{--                @endif--}}

{{--                </tbody>--}}
{{--            </table>--}}
{{--            @if(count($items) != 0)--}}
{{--                <div class="row mx-2" style="padding: 15px 0px;">--}}
{{--                    <div class="col-sm-12 col-md-6">--}}
{{--                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">نمایش--}}
{{--                            {{$items->currentPage()}} تا {{$pageNumber}} از {{$items->total()}} ردیف--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-12 col-md-6">--}}
{{--                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">--}}
{{--                            <ul class="pagination">--}}
{{--                                <li class="paginate_button page-item previous disabled"--}}
{{--                                    id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0"--}}
{{--                                                                        data-dt-idx="0" class="page-link">قبلی</a>--}}
{{--                                </li>--}}
{{--                                <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a--}}
{{--                                        href="#" aria-controls="DataTables_Table_0" data-dt-idx="1"--}}
{{--                                        class="page-link">بعدی</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
