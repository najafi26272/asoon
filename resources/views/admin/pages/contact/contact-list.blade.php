@extends('admin.layout.main')

@push('css')
    {{--    دیت پیکر جدید--}}
    <link rel="stylesheet" href="{{asset("assets/plugins/custom/datepicker/flatpickr.css")}}">
    <link rel="stylesheet" href="{{asset("assets/plugins/custom/datepicker/pickr-themes.css")}}">
@endpush

@section('content')
            <livewire:manage-contact.contact-list-component/>
            <livewire:manage-contact.contact-details-component/>
@endsection

@push('scripts')
    <script>
        document.addEventListener('$_contact_details', event => {
            $("#kt_modal_contact_details").modal('show');
        });
    </script>
@endpush

