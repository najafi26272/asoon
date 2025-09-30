@extends('admin.layout.main')

@push('css')
    {{--    دیت پیکر جدید--}}
    <link rel="stylesheet" href="{{asset("assets/plugins/custom/datepicker/flatpickr.css")}}">
    <link rel="stylesheet" href="{{asset("assets/plugins/custom/datepicker/pickr-themes.css")}}">

@endpush

@section('content')
 <div class="card">
     
    <div class="card-body">
        
   
   <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                    <tr class="fw-bold text-muted">
                        <th class="">
                         نام کاربری
                        </th>
                        <th class="">
                            تاریخ 
                        </th>
                       
                       
                        <th class="">
                            دانلود
                        </th>
                    </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                 
                        <tr>
                            <td class="">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                       هاشمیان
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-dark fw-bold text-hover-primary d-block fs-6">
                                   بهمن1402
                                </p>
                            </td>
                           
                          
                            <td>
                                <div class="d-flex  flex-shrink-0">
                                    <button class="btn btn-primary">
                                        
                                        <i class="fa fa-download"></i>
                                        دانلود
                                    </button>
                                </div>
                            </td>
                        </tr>
                  
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
               
            </div>
            <!--end::Table container-->
</div>
 </div>
@endsection

@push('scripts')
    {{--دیت پیکر جدید--}}

    <script src="{{asset("assets/plugins/custom/datepicker/jdate.js")}}"></script>
    <script src="{{asset("assets/plugins/custom/datepicker/flatpickr-jdate.js")}}"></script>
    <script src="{{asset("assets/plugins/custom/datepicker/fa-jdate.js")}}"></script>
    <script src="{{asset("assets/plugins/custom/datepicker/pickr.js")}}"></script>
    <script src="{{asset("assets/plugins/custom/datepicker/forms-pickers.js")}}"></script>

@endpush
