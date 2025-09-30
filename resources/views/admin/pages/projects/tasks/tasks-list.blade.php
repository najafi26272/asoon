@extends('admin.layout.main')

@push('css')
    {{--    دیت پیکر جدید--}}
    <link rel="stylesheet" href="{{asset("assets/plugins/custom/datepicker/flatpickr.css")}}">
    <link rel="stylesheet" href="{{asset("assets/plugins/custom/datepicker/pickr-themes.css")}}">


@endpush

@section('content')
    <livewire:manage-projects.manage-tasks.task-list-component/>

    <!--begin::Modal - create task-->
    <livewire:manage-projects.manage-tasks.create-task-component/>
    <!--end::Modal - -->

    <!--begin::Modal - delete task-->
    <livewire:manage-projects.manage-tasks.delete-task-component/>
    <!--end::Modal - -->

    <!--begin::Modal - edit task-->
    <livewire:manage-projects.manage-tasks.edit-task-component/>
    <!--end::Modal - -->
@endsection

@push('scripts')
<script>


    document.addEventListener('projectTask_created', event => {
        $("#kt_modal_new_projectTask").modal('hide');
    });

    document.addEventListener('show-delete-projectTask-modal', event => {
        $("#kt_modal_delete_projectTask").modal('show');
    });

    document.addEventListener('show-projectTask_edit-modal', event => {
        $("#kt_modal_edit_projectTask").modal('show');
    });
    document.addEventListener('projectTask_created', event => {
        $("#kt_modal_edit_projectTask").modal('hide');
    });
    document.addEventListener('projectTask-deleted', event => {
        $("#kt_modal_delete_projectTask").modal('hide');
    });
</script>

{{--دیت پیکر جدید--}}
<script src="{{asset("assets/plugins/custom/datepicker/jdate.js")}}"></script>
<script src="{{asset("assets/plugins/custom/datepicker/flatpickr-jdate.js")}}"></script>
<script src="{{asset("assets/plugins/custom/datepicker/fa-jdate.js")}}"></script>
<script src="{{asset("assets/plugins/custom/datepicker/pickr.js")}}"></script>
<script src="{{asset("assets/plugins/custom/datepicker/forms-pickers.js")}}"></script>


@endpush

