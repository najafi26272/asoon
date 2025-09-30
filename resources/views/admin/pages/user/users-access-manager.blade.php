@extends('admin.layout.main')

@push('css')
    <style>
        @media (min-width: 992px) {
            .modal-lg {
                max-width: 57rem;
            }
        }
    </style>
    <link rel="stylesheet" href="{{asset("assets/admin/assets/vendor/libs/select2/select2.css")}}">
    <link rel="stylesheet" href="{{asset("assets/admin/assets/vendor/libs/bootstrap-select/bootstrap-select.css")}}">

@endpush

@section('content')

    <livewire:manage-user.user-access-manager-component/>


@endsection

@push('scripts')


    <script src="{{asset("assets/admin/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js")}}"></script>
    <script src="{{asset("assets/admin/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js")}}"></script>
    <script src="{{asset("assets/admin/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js")}}"></script>

    <!-- Page JS -->

    <script src="{{asset("assets/admin/assets/vendor/libs/select2/select2.js")}}"></script>
    <script src="{{asset("assets/admin/assets/js/forms-selects.js")}}"></script>
    <script src="{{asset("assets/admin/assets/vendor/libs/bootstrap-select/bootstrap-select.js")}}"></script>


@endpush


