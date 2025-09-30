<div class="card mb-5 mb-xl-10">
    <!--begin::Body-->
    <div class="card-body py-3">

        @if(count($items) == 0)
            <div class="py-10 text-center">
                <img src="{{asset("assets/media/svg/illustrations/easy/1.svg")}}" class=" w-200px" alt="">
                <p class="m-5">دیتایی وجود ندارد.</p>
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
                            نام کاربری
                        </th>
                        <th class="min-w-150px">
                            تاریخ 
                        </th>
                        <th class="min-w-100px">
                            دانلود
                        </th>
                    </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                    @foreach($items as $item)
                        @if(Storage::exists('public/files/reports/' . $item->file))
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                        {{$item->user->name}} {{$item->user->family}}</p>
                                </div>
                            </td>
                            <td>
                                <p class="text-dark fw-bold text-hover-primary d-block fs-6">
                                    {{ Verta::instance($item->related_month)->format('%B %Y')}}

                                </p>
                            </td>
                            <td>
                               <div class="d-flex  flex-shrink-0">
                                    <a href="{{ asset('storage/files/reports/' . $item->file) }}" class="btn btn-primary">
                                        <i class="fa fa-download"></i>
                                         دانلود
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
                @if(count($items) != 0)
                    <div class="custom-paginate clearfix" style="margin-top: 10px;margin-right:10px">
                        {{$items->links('pagination::bootstrap-4')}}
                    </div>
                @endif
            </div>
            <!--end::Table container-->

        @endif
        @if(count($items) != 0)
            <div class="custom-paginate clearfix" style="margin-top: 10px;margin-right:10px">
                {{$items->links('pagination::bootstrap-4')}}
            </div>
        @endif
    </div>
    <!--begin::Body-->

</div>



