<div class="card mb-4">
    <h5 class="card-header">قسمت جدید</h5>
    <div class="card-body">
        <form wire:submit.prevent="submit" method="POST" type="multipart">
            <div>
                <label for="defaultFormControlInput" class="form-label">عنوان</label>
                <input wire:model.debounce.1500="title" type="text" class="form-control"
                       placeholder="عنوان را وارد کنید">
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
            <div wire:ignore>
                <label for="selectpickerBasic" class="form-label">سرویس ها</label>
                <select id="selectedService" class="selectpicker w-100" data-style="btn-default">
                    <option value="" disabled selected>موردی انتخاب نشده است</option>
                    @foreach($services as $service)
                        <option value="{{$service->id}}">{{$service->title}}</option>
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

@push('scripts')
    <script>
        $('#selectedService').on('change', function (e) {
            let data = $(this).val();
        @this.set('selectedService', data);
        });

    </script>
@endpush
