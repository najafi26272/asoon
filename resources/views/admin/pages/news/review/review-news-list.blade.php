@extends('admin.layout.main')

@push('css')
    <link rel="stylesheet" href="{{asset("assets/admin/assets/vendor/libs/bootstrap-select/bootstrap-select.css")}}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">

    @endpush

@section('content')

    <livewire:manage-news.review-news.review-list-component/>
    <livewire:manage-news.review-news.review-details-component/>
    <livewire:manage-news.review-news.edit-review-component/>
    <livewire:manage-news.review-news.my-review-history-component/>
@endsection

@push('scripts')
<script src="{{asset("assets/plugins/custom/datepicker/jdate.js")}}"></script>
<script src="{{asset("assets/plugins/custom/datepicker/flatpickr-jdate.js")}}"></script>
<script src="{{asset("assets/plugins/custom/datepicker/fa-jdate.js")}}"></script>
<script src="{{asset("assets/plugins/custom/datepicker/pickr.js")}}"></script>
<script src="{{asset("assets/plugins/custom/datepicker/forms-pickers.js")}}"></script>
<script src="{{asset("assets/admin/assets/vendor/libs/bootstrap-select/bootstrap-select.js")}}"></script>

{{-- textEditor --}}

<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>

    <script>
        document.addEventListener('$_review_details', event => {
            $("#kt_modal_review_details").modal('show');
        });

        document.addEventListener('$_my_review_history', event => {
            $("#kt_modal_my_review_history").modal('show');
        });

        document.addEventListener('$_review_editable', event => {
            $("#kt_modal_edit_review").modal('show');
        });

        document.addEventListener('review_edited', event => {
            $("#kt_modal_edit_review").modal('hide');
        });
        

        $(document).ready(function() {
            
        });
    </script>
@endpush

