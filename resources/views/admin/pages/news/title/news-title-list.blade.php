@extends('admin.layout.main')

@push('css')
    <link rel="stylesheet" href="{{asset("assets/admin/assets/vendor/libs/bootstrap-select/bootstrap-select.css")}}">
@endpush

@section('content')
    <livewire:manage-news.news-title.title-list-component/>
    <livewire:manage-news.news-title.title-details-component/>
    <livewire:manage-news.news-title.edit-title-component/>
    <livewire:manage-news.news-title.my-title-history-component/>
@endsection

@push('scripts')
<script src="{{asset("assets/plugins/custom/datepicker/jdate.js")}}"></script>
<script src="{{asset("assets/plugins/custom/datepicker/flatpickr-jdate.js")}}"></script>
<script src="{{asset("assets/plugins/custom/datepicker/fa-jdate.js")}}"></script>
<script src="{{asset("assets/plugins/custom/datepicker/pickr.js")}}"></script>
<script src="{{asset("assets/plugins/custom/datepicker/forms-pickers.js")}}"></script>
<script src="{{asset("assets/admin/assets/vendor/libs/bootstrap-select/bootstrap-select.js")}}"></script>

    <script>
        document.addEventListener('$_title_details', event => {
            $("#kt_modal_title_details").modal('show');
        });

        document.addEventListener('$_my_title_history', event => {
            $("#kt_modal_my_title_history").modal('show');
        });

        document.addEventListener('$_title_editable', event => {
            $("#kt_modal_edit_title").modal('show');
        });

        document.addEventListener('title_edited', event => {
            $("#kt_modal_edit_title").modal('hide');
        });
    </script>
@endpush

