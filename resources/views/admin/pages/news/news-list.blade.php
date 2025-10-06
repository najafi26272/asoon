@extends('admin.layout.main')

@push('css')
@endpush

@section('content')
    <livewire:manage-news.news-list-component/>
    {{-- <livewire:manage-news.create-news-component/> --}}
    {{-- <livewire:manage-news.delete-news-component/>
    <livewire:manage-news.edit-news-component/> --}}
@endsection

@push('scripts')
    <script>
        document.addEventListener('show-delete-news-modal', event => {
            $("#kt_modal_delete_news").modal('show');
        }) ;

        document.addEventListener('$_news_editable', event => {
            $("#kt_modal_edit_news").modal('show');
        });

        document.addEventListener('news_created', event => {
            $("#kt_modal_edit_news").modal('hide');
        });

        document.addEventListener('news-deleted', event => {
            $("#kt_modal_delete_news").modal('hide');
        });
    </script>
@endpush

