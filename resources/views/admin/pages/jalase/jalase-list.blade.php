@extends('admin.layout.main')

@push('css')
    {{--    دیت پیکر جدید--}}
    <link rel="stylesheet" href="{{asset("assets/plugins/custom/datepicker/flatpickr.css")}}">
    <link rel="stylesheet" href="{{asset("assets/plugins/custom/datepicker/pickr-themes.css")}}">




@endpush

@section('content')
            <livewire:manage-jalase.jalase-list-component/>

            <!--begin::Modal - create meeting-->
            <livewire:manage-jalase.create-jalase-component/>
            <!--end::Modal - -->

            <!--begin::Modal - delete meeting-->
            <livewire:manage-jalase.delete-jalase-component/>
            <!--end::Modal - -->
@endsection

@push('scripts')
    <script>
        document.addEventListener('jalase_created', event => {
            $("#kt_modal_new_jalase").modal('hide');
        });

        document.addEventListener('show-delete-jalase-modal', event => {
            $("#kt_modal_delete_jalase").modal('show');
        }) ;

        document.addEventListener('$_jalase_editable', event => {
            $("#kt_modal_edit_jalase").modal('show');
        });
        document.addEventListener('jalase-deleted', event => {
            $("#kt_modal_delete_jalase").modal('hide');
        });

        document.addEventListener('jalase-edited', event => {
            $("#kt_modal_edit_jalase").modal('hide');
        });

    </script>

    {{--دیت پیکر جدید--}}
    <script src="{{asset("assets/plugins/custom/datepicker/jdate.js")}}"></script>
    <script src="{{asset("assets/plugins/custom/datepicker/flatpickr-jdate.js")}}"></script>
    <script src="{{asset("assets/plugins/custom/datepicker/fa-jdate.js")}}"></script>
    <script src="{{asset("assets/plugins/custom/datepicker/pickr.js")}}"></script>
    <script src="{{asset("assets/plugins/custom/datepicker/forms-pickers.js")}}"></script>

@endpush

