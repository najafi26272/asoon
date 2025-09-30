@extends('admin.layout.main')

@push('css')
    {{--    دیت پیکر جدید--}}
    <link rel="stylesheet" href="{{asset("assets/plugins/custom/datepicker/flatpickr.css")}}">
    <link rel="stylesheet" href="{{asset("assets/plugins/custom/datepicker/pickr-themes.css")}}">

@endpush

@section('content')
    <livewire:manage-task.task-list-component/>

    <!--begin::Modal - create task-->
    <livewire:manage-task.create-task-component/>
    <!--end::Modal - -->
    <!--begin::Modal - delete task-->
    <livewire:manage-task.delete-task-component/>
    <!--end::Modal - -->

    <livewire:manage-task.edit-task-component/>

    <!--begin::Modal - change status task-->
    <livewire:manage-task.change-task-status-component/>
    <!--end::Modal - -->
@endsection

@push('scripts')
    <script>
        document.addEventListener('task_created', event => {
            $("#kt_modal_new_task").modal('hide');
        });

        document.addEventListener('show-delete-task-modal', event => {
            $("#kt_modal_delete_task").modal('show');
        }) ;

        document.addEventListener('$_task_editable', event => {
            $("#kt_modal_edit_task").modal('show');
        });

        document.addEventListener('task_created', event => {
            $("#kt_modal_edit_task").modal('hide');
        });

        document.addEventListener('show-change-status-task-modal', event => {
            $("#kt_modal_change-status_task").modal('show');
        });
        document.addEventListener('task_status_changed', event => {
            $("#kt_modal_change-status_task").modal('hide');
        });
        document.addEventListener('task-deleted', event => {
            $("#kt_modal_delete_task").modal('hide');
        });

        window.addEventListener('$_mosavabeTask_uneditable_message',  event => {
            Swal.fire({
                text: 'این وظیفه از طریق مصوبات ثبت شده است. شما امکان ویرایش یا حذف آن را ندارید.',
                icon: 'warning',
                customClass: {
                    confirmButton: 'btn btn-primary'
                },
                confirmButtonText: 'متوجه شدم',
                buttonsStyling: false
            });
        })
        
        window.addEventListener('$_projectTask_uneditable_message',  event => {
            Swal.fire({
                text: 'این وظیفه از طریق پروژه ها ثبت شده است. شما امکان ویرایش یا حذف آن را ندارید.',
                icon: 'warning',
                customClass: {
                    confirmButton: 'btn btn-primary'
                },
                confirmButtonText: 'متوجه شدم',
                buttonsStyling: false
            });
        })

    </script>

    {{--دیت پیکر جدید--}}
    <script src="{{asset("assets/plugins/custom/datepicker/jdate.js")}}"></script>
    <script src="{{asset("assets/plugins/custom/datepicker/flatpickr-jdate.js")}}"></script>
    <script src="{{asset("assets/plugins/custom/datepicker/fa-jdate.js")}}"></script>
    <script src="{{asset("assets/plugins/custom/datepicker/pickr.js")}}"></script>
    <script src="{{asset("assets/plugins/custom/datepicker/forms-pickers.js")}}"></script>
@endpush

