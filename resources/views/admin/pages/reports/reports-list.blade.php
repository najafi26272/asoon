@extends('admin.layout.main')

@push('css')
    {{--    دیت پیکر جدید--}}
    <link rel="stylesheet" href="{{asset("assets/plugins/custom/datepicker/flatpickr.css")}}">
    <link rel="stylesheet" href="{{asset("assets/plugins/custom/datepicker/pickr-themes.css")}}">

@endpush

@section('content')
    <livewire:manage-reports.reports-list-component/>
     <!--begin::Modal - create task-->
    <livewire:manage-reports.create-report-component/>
     <!--begin::Modal - delete task-->
    <livewire:manage-reports.delete-report-component/>
    <!--end::Modal - -->
@endsection

@push('scripts')
    <script>
        document.addEventListener('report_created', event => {
            $("#kt_modal_new_report").modal('hide');
        });

        document.addEventListener('show-delete-report-modal', event => {
            $("#kt_modal_delete_report").modal('show');
        });
        document.addEventListener('report-deleted', event => {
            $("#kt_modal_delete_report").modal('hide');
        });
        
        document.addEventListener('reportDownload_created', event => {
            $("#kt_modal_report").modal('hide');
        });
    </script>
    {{--دیت پیکر جدید--}}
    <script src="{{asset("assets/plugins/custom/datepicker/jdate.js")}}"></script>
    <script src="{{asset("assets/plugins/custom/datepicker/flatpickr-jdate.js")}}"></script>
    <script src="{{asset("assets/plugins/custom/datepicker/fa-jdate.js")}}"></script>
    <script src="{{asset("assets/plugins/custom/datepicker/pickr.js")}}"></script>
    <script src="{{asset("assets/plugins/custom/datepicker/forms-pickers.js")}}"></script>

@endpush
