<div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
    <div class="modal-content p-3 p-md-5">
        <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="text-center mb-4">
                <p>ویرایش قسمت</p>
            </div>
            <form wire:submit.prevent="submit" method="POST" type="multipart">
                <div>
                    <label for="defaultFormControlInput" class="form-label">عنوان</label>
                    <input wire:model.debounce.1500="title" type="text" class="form-control" placeholder="عنوان را وارد کنید">
                    @error('title')
                    <div id="defaultFormControlHelp" class="form-text text-danger">
                        {{ $message }}
                    </div>
                    @enderror

                </div>
                <div>
                    <label for="defaultFormControlInput" class="form-label">نام</label>
                    <input wire:model.debounce.1500="name" type="text" class="form-control"
                           placeholder="نام به انگلیسی را وارد کنید">
                    @error('name')
                    <div id="defaultFormControlHelp" class="form-text text-danger">
                        {{ $message }}
                    </div>
                    @enderror

                </div>
                <div>
                    <label for="selectpickerBasic" class="form-label">سرویس ها</label>
                    <select wire:model.lazy="selectedService" name="selectedService" id="selectedService" class="select-style w-100" data-style="btn-default">
                        <option value="" disabled selected>موردی انتخاب نشده است</option>
                        @foreach($services as $service)
                            <option value="{{$service->id}}" @if($service->id == $selectedService) selected @endif>{{$service->title}}</option>
                        @endforeach
                    </select>
                </div>
                @error('selectedService')
                <div id="defaultFormControlHelp" class="form-text text-danger">
                    {{ $message }}
                </div>
                @enderror
                <div style="margin-top: 20px">
                    <button type="submit" class="btn btn-primary">ثبت</button>
                </div>
            </form>

        </div>
    </div>
</div>

@push('scripts')
    <script>
        $('#selectedService2').on('change', function (e) {
            let data = $(this).val();
        @this.set('selectedService', data, true);
        });

    </script>
@endpush
