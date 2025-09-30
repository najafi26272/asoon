   <div class="d-flex flex-column flex-lg-row">
                        @if(Auth::user()->accesses->project_access)
                               <!--SideBar-->
                                   <div class="flex-column flex-lg-row-auto w-100 w-lg-300px w-xl-400px mb-10 mb-lg-0">
                        									<!--begin::مخاطبین-->
                        									<div class="card card-flush">
                        										<!--begin::کارت header-->
                        										<div class="card-header pt-7" id="kt_chat_contacts_header">
                        											<!--begin::Form-->
                        											<div wire:ignore class="w-100 position-relative" autocomplete="off">
                        												<!--begin::Icon-->
                        												<i class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                        													<span class="path1"></span>
                        													<span class="path2"></span>
                        												</i>
                        												<!--end::Icon-->
                        												<!--begin::Input-->
                        												<input type="text" id="searching" class="form-control form-control-solid px-13" name="search" placeholder="جستجو ...">
                        												<!--end::Input-->
                        											</div>
                        											<!--end::Form-->
                        										</div>
                        										<!--end::کارت header-->
                        										<!--begin::کارت body-->
                        										<div class="card-body pt-5" id="kt_chat_contacts_body">
                        											<!--begin::لیست-->
                        											<div class="scroll-y me-n5 pe-5 h-200px h-lg-auto" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_toolbar, #kt_app_toolbar, #kt_footer, #kt_app_footer, #kt_chat_contacts_header" data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_contacts_body" data-kt-scroll-offset="5px" style="max-height:300px ;">
                        												@foreach($users as $user)
                        													<!--begin::user-->
                            												<div class="d-flex flex-stack py-4">
                            													<!--begin::Details---->
                            													<div class="d-flex align-items-center">
                            														<!--begin::Avatar-->
                            														<div class="symbol symbol-45px symbol-circle">
                            															<span class="symbol-label bg-light-danger text-danger fs-6 fw-bolder" style="background-image: url( @if($user->avatar) {{asset("storage/images/users/avatar")}}/{{$user->avatar}} @else {{asset("assets/media/svg/avatars/blank.svg")}} @endif )"></span>
                            														</div>
                            														<!--end::Avatar-->
                            														<!--begin::Details---->
                            														<div class="ms-5">
                                                                                        <a href="#" wire:click="changeChat({{ $user->id }})" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">
                                                                                            {{ $user->name }} {{ $user->family }}
                                                                                            

                                                                                        </a>                            															
                                                                                        <div class="fw-semibold text-muted">{{$user->username}}</div>
                            														</div>
                            														<!--end::Details---->
                            													</div>
                            													<!--end::Details---->
                            													@if($user->unreadCount > 0 )
                                                                                <div class="d-flex flex-column align-items-end ms-2">
                            														<span class="badge badge-sm badge-circle badge-light-warning">{{$user->unreadCount}}</span>
                            													</div>
                            													@endif
                            												</div>
                            												<!--end::user-->
                            												<!--begin::Separator-->
                            												<div class="separator separator-dashed d-none"></div>
                            												<!--end::Separator-->
                            											
                        												@endforeach
                        											</div>
                        											<!--end::لیست-->
                        										</div>
                        										<!--end::کارت body-->
                        									</div>
                        									<!--end::مخاطبین-->
                        								</div>
                                                		<!--EndSidebar-->
                                                		@if($selectedUser)
                        
                                                		<!--Main-->
                                                		<div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
                        									<!--begin::Messenger-->
                        									<div class="card" id="kt_chat_messenger">
                        									    <!--begin::کارت header-->
                        										<div class="card-header" id="kt_chat_messenger_header">
                        											<!--begin::Title-->
                        											<div class="card-title">
                        												<!--begin::users-->
                        												<div class="symbol-group symbol-hover">
                        													<!--begin::Avatar-->
                        													<div class="symbol symbol-35px symbol-circle">
                        														<img alt="Pic" src="@if($selectedUser->avatar) {{asset("storage/images/users/avatar")}}/{{$selectedUser->avatar}} @else {{asset("assets/media/svg/avatars/blank.svg")}} @endif">
                        														<span>{{$selectedUser->name . " " .$selectedUser->family}}</span>
                        													</div>
                        													<!--end::Avatar-->
                        												</div>
                        												<!--end::users-->
                        											</div>
                        											<!--end::Title-->
                        										
                        										</div>
                        										<!--end::کارت header-->
                        										
                        										<!--begin::کارت body-->
                        										<div class="card-body" id="kt_chat_messenger_body">
                        											<!--begin::پیام ها-->
                        											<div class="scroll-y me-n5 pe-5 h-300px h-lg-auto" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_app_toolbar, #kt_toolbar, #kt_footer, #kt_app_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer" data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_messenger_body" data-kt-scroll-offset="5px" style="max-height:300px ;">
                        												@if($chat)
                        												@foreach($chat->messages as $message)
                        												@if($message->role == 'member')
                            												<!--begin::پیام(in)--->
                            												<div class="d-flex justify-content-start mb-10">
                            													<!--begin::Wrapper-->
                            													<div class="d-flex flex-column align-items-start">
                            														<!--begin::user-->
                            														<div class="d-flex align-items-center mb-2">
                            															<!--begin::Avatar-->
                            															<div class="symbol symbol-35px symbol-circle">
                            																<img alt="Pic" src="@if($selectedUser->avatar) {{asset("storage/images/users/avatar")}}/{{$selectedUser->avatar}} @else {{asset("assets/media/svg/avatars/blank.svg")}} @endif">
                            															</div>
                            															<!--end::Avatar-->
                            															<!--begin::Details---->
                            															<div class="ms-3">
                            																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">{{$selectedUser->name . " " .$selectedUser->family}}</a>
                            																<span class="text-muted fs-7 mb-1">
                        {{\Morilog\Jalali\Jalalian::forge($message->created_at)->ago()}}
                            																</span>
                            															</div>
                            															<!--end::Details---->
                            														</div>
                            														<!--end::user-->
                            														<!--begin::Text-->
                            														<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                            														    {{$message->message}}
                            														    </div>
                        
                            														<!--end::Text-->
                            													</div>
                            													<!--end::Wrapper-->
                            												</div>
                            												<!--end::پیام(in)-->
                        												@else
                        												<!--begin::پیام(out)-->
                        												<div class="d-flex justify-content-end mb-10">
                        													<!--begin::Wrapper-->
                        													<div class="d-flex flex-column align-items-end">
                        														<!--begin::user-->
                        														<div class="d-flex align-items-center mb-2">
                        															<!--begin::Details---->
                        															<div class="me-3">
                        																<span class="text-muted fs-7 mb-1">{{\Morilog\Jalali\Jalalian::forge($message->created_at)->ago()}}</span>
                        																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">شما</a>
                        															</div>
                        															<!--end::Details---->
                        															<!--begin::Avatar-->
                        															<div class="symbol symbol-35px symbol-circle">
                        																<img alt="Pic" src="@if(Auth::user()->avatar) {{asset("storage/images/users/avatar")}}/{{Auth::user()->avatar}} @else {{asset("assets/media/avatars/blank.png")}} @endif">
                        
                        															</div>
                        															<!--end::Avatar-->
                        														</div>
                        														<!--end::user-->
                        														<!--begin::Text-->
                        														<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                        														{{$message->message}}
                        														</div>
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
                        										
                        											</div>
                        											<!--end::پیام ها-->
                        										</div>
                        										<!--end::کارت body-->
                        										<!--begin::کارت footer-->
                        										<div class="card-footer pt-4" id="kt_chat_messenger_footer">
                        											<!--begin::Input-->
                        											<textarea wire:model="text" class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="نوشتن پیام"></textarea>
                        										    @error('text')
                                                                         <div id="defaultFormControlHelp" class="form-text text-danger">
                                                                             {{ $message  }}
                                                                         </div>
                                                                    @enderror
                        											
                        											<!--end::Input-->
                        											<!--begin:Toolbar-->
                        											<div class="d-flex flex-stack">
                        												<!--begin::ارسال-->
                        												<button wire:click="sendManagerMessage()" class="btn btn-primary" type="button" data-kt-element="send">ارسال</button>
                        												<!--end::ارسال-->
                        											</div>
                        											<!--end::Toolbar-->
                        										</div>
                        										<!--end::کارت footer-->
                        									</div>
                        									<!--end::Messenger-->
                        								</div>
                        								@endif

					
					
@push('scripts')
    <script>
        $('#searching').on('keyup', function (e) {
            let data = $(this).val();
            @this.set('search', data);
        });
    </script>
@endpush

                        @else

	                        <!--Main-->
                        		<div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
									<!--begin::Messenger-->
									<div class="card" id="kt_chat_messenger">
									    <!--begin::کارت header-->
										<div class="card-header" id="kt_chat_messenger_header">
											<!--begin::Title-->
											<div class="card-title">
												<!--begin::users-->
												<div class="symbol-group symbol-hover">
													<!--begin::Avatar-->
													<div class="symbol symbol-35px symbol-circle">
														<img alt="Pic" src="@if(Auth::user()->avatar) {{asset("storage/images/users/avatar")}}/{{Auth::user()->avatar}} @else {{asset("assets/media/svg/avatars/blank.svg")}} @endif">
														<span>{{Auth::user()->name . " " .Auth::user()->family}}</span>
													</div>
													<!--end::Avatar-->
												</div>
												<!--end::users-->
											</div>
											<!--end::Title-->
										
										</div>
										<!--end::کارت header-->
										
										<!--begin::کارت body-->
										<div class="card-body" id="kt_chat_messenger_body">
											<!--begin::پیام ها-->
											<div class="scroll-y me-n5 pe-5 h-300px h-lg-auto" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_app_toolbar, #kt_toolbar, #kt_footer, #kt_app_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer" data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_messenger_body" data-kt-scroll-offset="5px" style="max-height:300px ;">
												@if($chat)
												@foreach($chat->messages as $message)
												@if($message->role == 'member')
    												<!--begin::پیام(in)--->
    												<div class="d-flex justify-content-start mb-10">
    													<!--begin::Wrapper-->
    													<div class="d-flex flex-column align-items-start">
    														<!--begin::user-->
    														<div class="d-flex align-items-center mb-2">
    															<!--begin::Avatar-->
    															<div class="symbol symbol-35px symbol-circle">
    																<img alt="Pic" src="@if(Auth::user()->avatar) {{asset("storage/images/users/avatar")}}/{{Auth::user()->avatar}} @else {{asset("assets/media/svg/avatars/blank.svg")}} @endif">
    															</div>
    															<!--end::Avatar-->
    															<!--begin::Details---->
    															<div class="ms-3">
    																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">{{Auth::user()->name . " " .Auth::user()->family}}</a>
    																<span class="text-muted fs-7 mb-1">
                                                                        {{\Morilog\Jalali\Jalalian::forge($message->created_at)->ago()}}
    																</span>
    															</div>
    															<!--end::Details---->
    														</div>
    														<!--end::user-->
    														<!--begin::Text-->
    														<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
    														    {{$message->message}}
    														    </div>

    														<!--end::Text-->
    													</div>
    													<!--end::Wrapper-->
    												</div>
    												<!--end::پیام(in)-->
												@else
												<!--begin::پیام(out)-->
												<div class="d-flex justify-content-end mb-10">
													<!--begin::Wrapper-->
													<div class="d-flex flex-column align-items-end">
														<!--begin::user-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Details---->
															<div class="me-3">
																<span class="text-muted fs-7 mb-1">{{\Morilog\Jalali\Jalalian::forge($message->created_at)->ago()}}</span>
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">{{$this->project->user->name ." " .$this->project->user->family}}</a>
															</div>
															<!--end::Details---->
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="@if($this->project->user->avatar) {{asset("storage/images/users/avatar")}}/{{$this->project->user->avatar}} @else {{asset("assets/media/avatars/blank.png")}} @endif">

															</div>
															<!--end::Avatar-->
														</div>
														<!--end::user-->
														<!--begin::Text-->
														<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
														{{$message->message}}
														</div>
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
										
											</div>
											<!--end::پیام ها-->
										</div>
										<!--end::کارت body-->
										<!--begin::کارت footer-->
										<div class="card-footer pt-4" id="kt_chat_messenger_footer">
											<!--begin::Input-->
									    <textarea wire:model="text" class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="نوشتن پیام"></textarea>
										 @error('text')
                                             <div id="defaultFormControlHelp" class="form-text text-danger">
                                                 {{ $message }}
                                             </div>
                                         @enderror
											
											<!--end::Input-->
											<!--begin:Toolbar-->
											<div class="d-flex flex-stack">
												<!--begin::ارسال-->
												<button wire:click="sendMemberMessage()" class="btn btn-primary" type="button" data-kt-element="send">ارسال</button>
												<!--end::ارسال-->
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::کارت footer-->
									</div>
									<!--end::Messenger-->
								</div>

                    @endif
</div>

