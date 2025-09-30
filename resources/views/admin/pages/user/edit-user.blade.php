@extends('admin.layout.main')
@push('css')
    <link rel="stylesheet" href="{{asset("assets/admin/assets/vendor/libs/bootstrap-select/bootstrap-select.css")}}">

@endpush
@section('content')


        <livewire:manage-user.edit-user-component/>


@endsection



@push('scripts')
    <script src="{{asset("assets/admin/assets/vendor/libs/bootstrap-select/bootstrap-select.js")}}"></script>
@endpush
