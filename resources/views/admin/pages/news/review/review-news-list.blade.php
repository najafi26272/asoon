@extends('admin.layout.main')

@push('css')
    <link rel="stylesheet" href="{{asset("assets/admin/assets/vendor/libs/bootstrap-select/bootstrap-select.css")}}">
@endpush

@section('content')
    <livewire:manage-review.review-list-component/>
    {{-- <livewire:manage-news.create-news-component/> --}}
    <livewire:manage-review.edit-review-component/>
@endsection

@push('scripts')
<script src="{{asset("assets/plugins/custom/datepicker/jdate.js")}}"></script>
<script src="{{asset("assets/plugins/custom/datepicker/flatpickr-jdate.js")}}"></script>
<script src="{{asset("assets/plugins/custom/datepicker/fa-jdate.js")}}"></script>
<script src="{{asset("assets/plugins/custom/datepicker/pickr.js")}}"></script>
<script src="{{asset("assets/plugins/custom/datepicker/forms-pickers.js")}}"></script>
<script src="{{asset("assets/admin/assets/vendor/libs/bootstrap-select/bootstrap-select.js")}}"></script>

    <script>
        document.addEventListener('$_review_editable', event => {
            $("#kt_modal_edit_review").modal('show');
        });

        document.addEventListener('review_edited', event => {
            $("#kt_modal_edit_review").modal('hide');
        });
    </script>
@endpush

