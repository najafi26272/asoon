@extends('admin.layout.main')

@push('css')

@endpush

@section('content')
    <livewire:manage-user.users-list-component/>

    <!--begin::Modal - delete user-->
    <livewire:manage-user.delete-user-component/>
    <!--end::Modal - -->

    <!--begin::Modal - delete user-->
    <livewire:manage-user.user-access-component/>
    <!--end::Modal - -->
@endsection

@push('scripts')
    <script>
        document.addEventListener('show-delete-user-modal', event => {
            $("#kt_modal_delete_user").modal('show');
        });
        document.addEventListener('user-deleted', event => {
            $("#kt_modal_delete_user").modal('hide');
        });
         document.addEventListener('show-user-access-modal', event => {
                    $("#kt_modal_access_user").modal('show');
         });
        document.addEventListener('user_access_changed', event => {
            $("#kt_modal_access_user").modal('hide');
        });

    </script>
@endpush

