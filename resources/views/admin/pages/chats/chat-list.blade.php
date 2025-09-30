@extends('admin.layout.main')

@push('css')
    {{--    دیت پیکر جدید--}}
    <link rel="stylesheet" href="{{asset("assets/plugins/custom/datepicker/flatpickr.css")}}">
    <link rel="stylesheet" href="{{asset("assets/plugins/custom/datepicker/pickr-themes.css")}}">
@endpush

@section('content')
            <livewire:manage-chat.management-chat-list-component/>
@endsection

@push('scripts')
    <script>

        document.addEventListener('project_created', event => {
            $("#kt_modal_new_project").modal('hide');
        });

        document.addEventListener('show-delete-project-modal', event => {
            $("#kt_modal_delete_project").modal('show');
        }) ;

        document.addEventListener('$_project_editable', event => {
            $("#kt_modal_edit_project").modal('show');
        });
        document.addEventListener('project-deleted', event => {
            $("#kt_modal_delete_project").modal('hide');
        });

        document.addEventListener('project-edited', event => {
            $("#kt_modal_edit_project").modal('hide');
        });

    </script>

    {{--دیت پیکر جدید--}}
    <script src="{{asset("assets/plugins/custom/datepicker/jdate.js")}}"></script>
    <script src="{{asset("assets/plugins/custom/datepicker/flatpickr-jdate.js")}}"></script>
    <script src="{{asset("assets/plugins/custom/datepicker/fa-jdate.js")}}"></script>
    <script src="{{asset("assets/plugins/custom/datepicker/pickr.js")}}"></script>
    <script src="{{asset("assets/plugins/custom/datepicker/forms-pickers.js")}}"></script>
@endpush

