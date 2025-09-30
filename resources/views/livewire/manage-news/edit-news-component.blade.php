<div>
    <form wire:submit.prevent="submit" method="POST" id="create-post" autocomplete="off">
        <div class="row">
            <div class="col-md-8">
                <div class="card p-3">
                    <div>
                        <label for="defaultFormControlInput" class="form-label">تیتر اصلی</label>
                        <input type="text" class="form-control"
                               wire:model.debounce.1500="data.title"
                               placeholder="تیتر اصلی را وارد کنید">
                        @error('data.title')
                        <div id="defaultFormControlHelp" class="form-text text-danger">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>
                    <div class="m-t-15">
                        <label for="defaultFormControlInput" class="form-label">رو تیتر</label>
                        <input type="text" class="form-control"
                               wire:model.debounce.1500="data.topTitle"
                               placeholder="رو تیتر را وارد کنید">
                        @error('data.topTitle')
                        <div id="defaultFormControlHelp" class="form-text text-danger">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>
                    <div class="m-t-15">
                        <label for="shortTitle" class="form-label">تیتر کوتاه</label>
                        <input id="shortTitle" type="text" class="form-control"
                               wire:model.debounce.1500="data.shortTitle"
                               placeholder="تیتر کوتاه را وارد کنید">
                        @error('data.shortTitle')
                        <div id="defaultFormControlHelp" class="form-text text-danger">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>
                    <!-- Full Editor -->
                    <div class="m-t-15" wire:ignore>
                        <label for="full-editor" class="form-label">متن خبر</label>
                        <div id="full-editor">

                        </div>
                    </div>
                    <!-- /Full Editor -->
                    @error('data.content')
                    <div id="defaultFormControlHelp" class="form-text text-danger">
                        {{ $message }}
                    </div>
                    @enderror

                    <div class="m-t-15" wire:ignore>
                        <label for="selectedSource" class="form-label">منبع</label>
                        <select id="selectedSource" class="select-style w-100" data-style="btn-default">
                            <option value="" disabled selected>موردی انتخاب نشده است</option>
                            @foreach($data['sources'] as $source)
                                <option value="{{$source['id']}}"
                                        @if($data['selectedSource'] == $source['id']) selected @endif> {{$source['title']}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('data.selectedSource')
                    <div id="defaultFormControlHelp" class="form-text text-danger">
                        {{ $message }}
                    </div>
                    @enderror

                    <div class="m-t-15" wire:ignore>
                        <label for="selectedAuthor" class="form-label">نویسنده</label>
                        <select id="selectedAuthor" class="select-style w-100" data-style="btn-default">
                            <option value="" disabled selected>موردی انتخاب نشده است</option>
                            @foreach($data['authors'] as $author)
                                <option value="{{$author['id']}}"
                                        @if($data['selectedAuthor'] == $author['id']) selected @endif>{{$author['name']}} {{$author['family']}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('data.selectedAuthor')
                    <div id="defaultFormControlHelp" class="form-text text-danger">
                        {{ $message }}
                    </div>
                    @enderror

                    <div wire:ignore class="m-t-15">
                        <label for="flatpickr-datetime" class="form-label">تاریخ انتشار</label>
                        <input wire:model="data.publishedDate" type="text" value="{{$data['publishedDate']}}"
                               class="form-control"
                               placeholder="YYYY/MM/DD - HH:MM"
                               id="flatpickr-datetime">
                    </div>

                    <div class="mb-3 m-t-15">
                        <label for="formFile" class="form-label">تصویر جدید نمایه</label>
                        <br>
                        <input type="file" wire:model.debounce.1500="data.newImage" id="img" style="display:none;"/>
                        <label for="img" class="choose-image-btn cursor-pointer">انتخاب عکس</label>
                        <span>
                           @if(gettype($data['newImage']) != "string" && $data['newImage'])
                                {{$data['newImage']->getOriginalName()}}
                            @else
                                فایل عکسی انتخاب نشده است.
                            @endif
                        </span>
                        @error('data.newImage')
                        <div id="defaultFormControlHelp" class="form-text text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                        @if(gettype($data['newImage']) != "string" && $data['newImage'])
                            <img width="100" class="rounded" src="{{$data['newImage']->temporaryUrl()}}">
                        @elseif($data['image'])
                            <img width="100" class="rounded" src="{{asset("storage/images/news")}}/{{$data['image']}}">
                        @else
                            <img width="100" class="rounded"
                                 src="{{asset("assets/admin/img/no-picture-available.jpg")}}">
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">عکس جدید گوشه لید</label>
                        <br>
                        <input type="file" wire:model.debounce.1500="data.newLeadImage" id="img2"
                               style="display:none;"/>
                        <label for="img2" class="choose-image-btn cursor-pointer">انتخاب عکس</label>
                        <span>
                            @if(gettype($data['newLeadImage']) != "string" && $data['newLeadImage'])
                                {{$data['newLeadImage']->getOriginalName()}}
                            @else
                                فایل عکسی انتخاب نشده است.
                            @endif
                        </span>
                        @error('newLeadImage')
                        <div id="defaultFormControlHelp" class="form-text text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                        @if(gettype($data['newLeadImage']) != "string" && $data['newLeadImage'])
                            <img width="100" class="rounded" src="{{$data['newLeadImage']->temporaryUrl()}}">
                        @elseif($data['leadImage'])
                            <img width="100" class="rounded"
                                 src="{{asset("storage/images/news/lead")}}/{{$data['leadImage']}}">
                        @else
                            <img width="100" class="rounded"
                                 src="{{asset("assets/admin/img/no-picture-available.jpg")}}">
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3">
                    @if($editStatusAccess)
                        <div>
                            <label for="selectpickerBasic" class="form-label">وضعیت</label>
                            <select id="selectedStatus" class="select-style w-100" data-style="btn-default">
                                @foreach($data['statuses'] as $status)
                                    @if($status['id'] == 2 &&  !$publishAccess)
                                    @else
                                        <option value="{{$status['id']}}"
                                                @if($data['selectedStatus'] == $status['id']) selected @endif>{{$status['title']}}</option>
                                    @endif

                                @endforeach
                            </select>
                        </div>
                    @endif
                    <div class="m-t-15" wire:ignore>
                        <label for="TagifyCustomListSuggestion" class="form-label">برچسب ها</label>
                        <input id="TagifyCustomListSuggestion" class="form-control"
                               value="{{implode( ",",$data['selectedTags'])}}"
                               placeholder="انتخاب برچسب">
                    </div>
                    <div class="m-t-15">
                        <label for="selectedService" class="form-label">سرویس</label>
                        <select id="selectedService" class="select-style w-100" data-style="btn-default">
                            @foreach($data['services'] as $service)
                                <option value="{{$service['id']}}"
                                        @if($data['selectedService'] == $service['id']) selected @endif>{{$service['title']}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('data.selectedService')
                    <div id="defaultFormControlHelp" class="form-text text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="m-t-15">
                        <label for="selectedSubject" class="form-label">موضوع</label>
                        <select id="selectedSubject" class="select-style w-100" data-style="btn-default">
                            <option value="" disabled @if($data['selectedSubject'] == null ) selected @endif>موردی
                                انتخاب نشده است
                            </option>
                            @foreach($subjects as $subject)
                                <option value="{{$subject->id}}"
                                        @if($data['selectedSubject'] ==$subject->id ) selected @endif>{{$subject->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('data.selectedSubject')
                    <div id="defaultFormControlHelp" class="form-text text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="m-t-15">
                        <label for="selectedPart" class="form-label">قسمت</label>
                        <select id="selectedPart" class="select-style w-100" data-style="btn-default">
                            <option value="" disabled @if($data['selectedPart'] == null) selected @endif>موردی انتخاب
                                نشده است
                            </option>
                            @foreach($parts as $part)
                                <option value="{{$part->id}}"
                                        @if($data['selectedPart'] == $part->id) selected @endif>{{$part->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('data.selectedPart')
                    <div id="defaultFormControlHelp" class="form-text text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="m-t-15">
                        <label for="defaultFormControlInput" class="form-label">توضیحات</label>
                        <textarea wire:model.debounce.1500="data.description" rows="3" class="form-control"
                                  placeholder="توضیحات را وارد کنید"></textarea>
                        @error('description')
                        <div id="defaultFormControlHelp" class="form-text text-danger">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>
                    <div class="m-t-15">
                        <label for="defaultFormControlInput" class="form-label">لید(خلاصه)</label>
                        <textarea wire:model.debounce.1500="data.lead" rows="3" class="form-control"
                                  placeholder="لید(خلاصه) را وارد کنید"></textarea>
                        @error('data.lead')
                        <div id="defaultFormControlHelp" class="form-text text-danger">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>

                    <div class="m-t-15">
                        <label class="switch switch-square">
                            <input wire:model.debounce.1500="data.teletypeStatus" type="checkbox" class="switch-input">
                            <span class="switch-toggle-slider">
                              <span class="switch-on"></span>
                              <span class="switch-off"></span>
                            </span>
                            <span class="switch-label">ارسال به تله تایپ</span>
                        </label>
                    </div>
                    <div class="m-t-15">
                        <label class="switch switch-square">
                            <input wire:model.debounce.1500="data.commentFormDisplayStatus" type="checkbox"
                                   class="switch-input">
                            <span class="switch-toggle-slider">
                              <span class="switch-on"></span>
                              <span class="switch-off"></span>
                            </span>
                            <span class="switch-label">نمایش نظرات منتشر شده کاربران</span>
                        </label>
                    </div>
                    <div class="m-t-15">
                        <label class="switch switch-square">
                            <input wire:model.debounce.1500="data.commentDisplayStatus" type="checkbox"
                                   class="switch-input">
                            <span class="switch-toggle-slider">
                              <span class="switch-on"></span>
                              <span class="switch-off"></span>
                            </span>
                            <span class="switch-label">نمایش فرم ثبت نظر برای این خبر</span>
                        </label>
                    </div>
                    <div class="m-t-15">
                        <label class="switch switch-square">
                            <input wire:model.debounce.1500="data.editableStatus" type="checkbox" class="switch-input">
                            <span class="switch-toggle-slider">
                              <span class="switch-on"></span>
                              <span class="switch-off"></span>
                            </span>
                            <span class="switch-label">ویرایش خبر پس از ارسال</span>
                        </label>
                    </div>

                    <div class="row" style="margin-top: 20px">
                        <div class=" col-4">
                            <button wire:loading.attr="disabled" type="submit" class="btn btn-primary">ثبت</button>
                        </div>
                        <div class="col-6" wire:loading>
                            <div class="loader"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@push('scripts')

    <script>

        $(document).ready(function () {
            window.fullEditor.pasteHTML(@this.data.content)
        });


        $('#selectedStatus').on('change', function (e) {
            let data = $(this).val();
        @this.set('data.selectedStatus', data);
        });
        $('#selectedService').on('change', function (e) {
            let data = $(this).val();
        @this.set('data.selectedService', data);
        });

        $('#selectedPart').on('change', function (e) {
            let data = $(this).val();
        @this.set('data.selectedPart', data);
        });
        $('#selectedSubject').on('change', function (e) {
            let data = $(this).val();
        @this.set('data.selectedSubject', data);
        });
        $('#selectedSource').on('change', function (e) {
            let data = $(this).val();
        @this.set('data.selectedSource', data);
        });
        $('#selectedAuthor').on('change', function (e) {
            let data = $(this).val();
        @this.set('data.selectedAuthor', data);
        });

        $('#TagifyCustomListSuggestion').on('change', function (e) {
            let data = $(this).val();
            let array = JSON.parse(data);
            let d = [];
            for (i in array) {
                d.push(array[i]['value'])
            }
        @this.set('data.selectedTags', d);
        });

    </script>
@endpush

