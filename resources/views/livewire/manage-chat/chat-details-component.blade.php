<div class="card mb-5 mb-xl-10">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">جزییات چت</span>
        </h3>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Form-->
                    @if(count($chat->messages))
                    @foreach($chat->messages as $msg)

                        @if($msg->role =="support")

                            <!--begin::پیام(in)-->
                            <div class="d-flex justify-content-start mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-start">
                                    <!--begin::user-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            @if($chat->department == "technical")
                                                <img alt="Pic" src="{{asset("assets/media/avatars/support.jpg")}}">
                                            @else
                                                <img alt="Pic" src="{{asset("assets/media/avatars/manager.jpg")}}">
                                            @endif

                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details---->
                                        <div class="ms-3">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">
                                                {{$chat->department == 'technical' ? 'پشتیبان فنی': 'مدیریت'}}
                                            </a>
                                            <span class="text-muted fs-7 mb-1">{{\Morilog\Jalali\Jalalian::forge($msg->created_at)->ago()}}</span>
                                        </div>
                                        <!--end::Details---->
                                    </div>
                                    <!--end::user-->
                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                         data-kt-element="message-text">{{$msg->message}} </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::پیام(in)-->
                        @elseif($msg->role =="user")
                            <!--begin::پیام(out)-->
                            <div class="d-flex justify-content-end mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-end">
                                    <!--begin::user-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Details---->
                                        <div class="me-3">
                                            <span class="text-muted fs-7 mb-1">
                                                {{\Morilog\Jalali\Jalalian::forge($msg->created_at)->ago()}}
                                            </span>
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">{{$chat->user->name}} {{$chat->user->family}}</a>
                                        </div>
                                        <!--end::Details---->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic"
                                                 src="@if(\Illuminate\Support\Facades\Auth::user()->avatar) {{asset("storage/images/users/avatar")}}/{{\Illuminate\Support\Facades\Auth::user()->avatar}} @else {{asset("assets/media/avatars/blank.png")}} @endif">
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::user-->
                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                         data-kt-element="message-text">{{$msg->message}}</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::پیام(out)-->

                        @endif

                    @endforeach
                @else
                    <div class="text-center">
                        <img width="200" src="{{asset("assets/img/inbox.png")}}">
                        <p class="mt-5" style="color: #499eb1">پیامی یافت نشد.</p>
                    </div>
                @endif

        <div class="card-footer pt-4">
            <!--begin::Input-->
            <textarea wire:model="message" class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
                      placeholder="نوشتن پیام"></textarea>
                      @error('message')
                            <div id="defaultFormControlHelp" class="form-text text-danger">
                                {{ $message }}
                            </div>
                    @enderror
            <!--end::Input-->
            <!--begin:Toolbar-->
            <div class="d-flex flex-stack">
                <!--begin::Actions-->
                <div class="d-flex align-items-center me-2">
                </div>
                <!--end::Actions-->
                <!--begin::ارسال-->
                <button wire:click="sendMessage()" class="btn btn-primary" type="button" data-kt-element="send">ارسال</button>
                <!--end::ارسال-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Form-->
    </div>
    <!--begin::Body-->
</div>


