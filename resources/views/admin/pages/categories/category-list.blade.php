@extends('admin.layout.main')

@push('css')


@endpush

@section('content')
    <livewire:manage-categories.category-list-component/>
    <livewire:manage-categories.delete-category-component/>
    <livewire:manage-categories.edit-category-component/>
@endsection

@push('scripts')
    <script>
        document.addEventListener('show-delete-category-modal', event => {
            $("#kt_modal_delete_category").modal('show');
        }) ;

        document.addEventListener('$_category_editable', event => {
            $("#kt_modal_edit_category").modal('show');
        });

        document.addEventListener('category_created', event => {
            $("#kt_modal_edit_category").modal('hide');
        });

        document.addEventListener('category-deleted', event => {
            $("#kt_modal_delete_category").modal('hide');
        });

        
    </script>

@endpush

