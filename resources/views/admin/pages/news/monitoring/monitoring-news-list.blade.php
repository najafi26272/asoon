@extends('admin.layout.main')

@push('css')
    <link rel="stylesheet" href="{{asset("assets/admin/assets/vendor/libs/bootstrap-select/bootstrap-select.css")}}">
@endpush

@section('content')
    <livewire:manage-news.monitoring-news.news-list-component/>
    <livewire:manage-news.monitoring-news.create-news-component/>
    <livewire:manage-news.monitoring-news.delete-news-component/>
    <livewire:manage-news.monitoring-news.edit-news-component/>
    <livewire:manage-news.monitoring-news.add-info-component/>
@endsection

@push('scripts')
<script src="{{asset("assets/plugins/custom/datepicker/jdate.js")}}"></script>
<script src="{{asset("assets/plugins/custom/datepicker/flatpickr-jdate.js")}}"></script>
<script src="{{asset("assets/plugins/custom/datepicker/fa-jdate.js")}}"></script>
<script src="{{asset("assets/plugins/custom/datepicker/pickr.js")}}"></script>
<script src="{{asset("assets/plugins/custom/datepicker/forms-pickers.js")}}"></script>
<script src="{{asset("assets/admin/assets/vendor/libs/bootstrap-select/bootstrap-select.js")}}"></script>

    <script>
        
        
        document.addEventListener('show-delete-news-modal', event => {
            $("#kt_modal_delete_news").modal('show');
        });

        document.addEventListener('show-add-info-news-modal', event => {
            $("#kt_modal_add-info-news").modal('show');
        });

        document.addEventListener('info-added', event => {
            $("#kt_modal_add-info-news").modal('hide');
        });

        document.addEventListener('$_news_editable', event => {
            $("#kt_modal_edit_news").modal('show');
        });

        document.addEventListener('news_created', event => {
            $("#kt_modal_new_news").modal('hide');
            $("#kt_modal_edit_news").modal('hide');
        });

        document.addEventListener('news-deleted', event => {
            $("#kt_modal_delete_news").modal('hide');
        });

        document.addEventListener('news-rejected', event => {
            $("#rejectModal").modal('hide');
        });
    </script>
@endpush

