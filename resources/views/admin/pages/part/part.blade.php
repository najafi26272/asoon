@extends('admin.layout.main')
@push('css')
    <link rel="stylesheet" href="{{asset("assets/admin/assets/vendor/libs/bootstrap-select/bootstrap-select.css")}}">

@endpush
@section('content')
            <h5 class="py-3 breadcrumb-wrapper mb-4">
                <span class="text-muted fw-light">مدیریت سرویس ها </span>
            </h5>

            <div class="row">
               <div class="col-md-6">
                   <livewire:manage-part.part-list-component/>
               </div>
               <div class="col-md-6">
                   <livewire:manage-part.create-part-component/>
               </div>
            </div>

            <div class="modal fade" id="modal-edit-part" tabindex="-1" aria-labelledby="modal-edit-part">
                <livewire:manage-part.edit-part-component/>
            </div>

            <div class="modal fade" id="modal-delete-part" tabindex="-1" aria-labelledby="modal-delete-part">
                <livewire:manage-part.delete-part-component/>
            </div>


@endsection

@push('scripts')
    <script>

        document.addEventListener('show-update-part-modal', event => {
            $("#modal-edit-part").modal('show');
        })
        document.addEventListener('show-delete-part-modal', event => {
            $("#modal-delete-part").modal('show');
        })
        window.addEventListener('part-deleted' , event =>{
            $("#modal-delete-part").modal('hide');
        });
        document.addEventListener('part-edited', event => {
            $("#modal-edit-part").modal('hide');
        })

    </script>
    <script src="{{asset("assets/admin/assets/vendor/libs/bootstrap-select/bootstrap-select.js")}}"></script>

@endpush
