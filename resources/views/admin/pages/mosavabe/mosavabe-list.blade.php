@extends('admin.layout.main')

@push('css')
    {{--    دیت پیکر جدید--}}
    <link rel="stylesheet" href="{{asset("assets/plugins/custom/datepicker/flatpickr.css")}}">
    <link rel="stylesheet" href="{{asset("assets/plugins/custom/datepicker/pickr-themes.css")}}">


@endpush

@section('content')
    <livewire:manage-mosavabe.mosavabe-list-component/>

    <!--begin::Modal - create mosavabe-->
    <livewire:manage-mosavabe.create-mosavabe-component/>
    <!--end::Modal - -->
    <!--begin::Modal - create mosavabe-->
    <livewire:manage-mosavabe.delete-mosavabe-component/>
    <!--end::Modal - -->

    <!--begin::Modal - create mosavabe-->
    <livewire:manage-mosavabe.edit-mosavabe-component/>
    <!--end::Modal - -->
@endsection

@push('scripts')
<script>
  
        
    document.addEventListener('mosavabe_created', event => {
        $("#kt_modal_new_mosavabe").modal('hide');
    });

    document.addEventListener('show-delete-mosavabe-modal', event => {
        $("#kt_modal_delete_mosavabe").modal('show');
    }) ;

    document.addEventListener('show-mosavabe_edit-modal', event => {
        $("#kt_modal_edit_mosavabe").modal('show');
    });
    document.addEventListener('mosavabe_created', event => {
        $("#kt_modal_edit_mosavabe").modal('hide');
    });
    document.addEventListener('mosavabe-deleted', event => {
        $("#kt_modal_delete_mosavabe").modal('hide');
    });
</script>

{{--دیت پیکر جدید--}}
<script src="{{asset("assets/plugins/custom/datepicker/jdate.js")}}"></script>
<script src="{{asset("assets/plugins/custom/datepicker/flatpickr-jdate.js")}}"></script>
<script src="{{asset("assets/plugins/custom/datepicker/fa-jdate.js")}}"></script>
<script src="{{asset("assets/plugins/custom/datepicker/pickr.js")}}"></script>
<script src="{{asset("assets/plugins/custom/datepicker/forms-pickers.js")}}"></script>


@endpush

