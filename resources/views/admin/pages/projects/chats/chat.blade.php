@extends('admin.layout.main')

@push('css')
    {{--    دیت پیکر جدید--}}
    <link rel="stylesheet" href="{{asset("assets/plugins/custom/datepicker/flatpickr.css")}}">
    <link rel="stylesheet" href="{{asset("assets/plugins/custom/datepicker/pickr-themes.css")}}">
@endpush

@section('content')
            <div class="d-flex flex-column flex-lg-row">
                               <!--SideBar-->
                                   <div class="flex-column flex-lg-row-auto w-100 w-lg-300px w-xl-400px mb-10 mb-lg-0">
                        									<!--begin::مخاطبین-->
                        									<div class="card card-flush">
                        										<!--begin::کارت header-->
                        										<div class="card-header pt-7" id="kt_chat_contacts_header">
                        											<!--begin::Form-->
                        											<form class="w-100 position-relative" autocomplete="off">
                        												<!--begin::Icon-->
                        												<i class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                        													<span class="path1"></span>
                        													<span class="path2"></span>
                        												</i>
                        												<!--end::Icon-->
                        												<!--begin::Input-->
                        												<input type="text" class="form-control form-control-solid px-13" name="search" value="" placeholder="جستجو ...">
                        												<!--end::Input-->
                        											</form>
                        											<!--end::Form-->
                        										</div>
                        										<!--end::کارت header-->
                        										<!--begin::کارت body-->
                        										<div class="card-body pt-5" id="kt_chat_contacts_body">
                        											<!--begin::لیست-->
                        											<div class="scroll-y me-n5 pe-5 h-200px h-lg-auto" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_toolbar, #kt_app_toolbar, #kt_footer, #kt_app_footer, #kt_chat_contacts_header" data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_contacts_body" data-kt-scroll-offset="5px" style="max-height: 167px;">
                        												<!--begin::user-->
                        												<div class="d-flex flex-stack py-4">
                        													<!--begin::Details---->
                        													<div class="d-flex align-items-center">
                        														<!--begin::Avatar-->
                        														<div class="symbol symbol-45px symbol-circle">
                        															<span class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">M</span>
                        														</div>
                        														<!--end::Avatar-->
                        														<!--begin::Details---->
                        														<div class="ms-5">
                        															<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">میلاد مرادی</a>
                        															<div class="fw-semibold text-muted">melody@altbox.com</div>
                        														</div>
                        														<!--end::Details---->
                        													</div>
                        													<!--end::Details---->
                        													<!--begin::Lat seen-->
                        													<div class="d-flex flex-column align-items-end ms-2">
                        														<span class="text-muted fs-7 mb-1">1 روز</span>
                        													</div>
                        													<!--end::Lat seen-->
                        												</div>
                        												<!--end::user-->
                        												<!--begin::Separator-->
                        												<div class="separator separator-dashed d-none"></div>
                        												<!--end::Separator-->
                        												<!--begin::user-->
                        												<div class="d-flex flex-stack py-4">
                        													<!--begin::Details---->
                        													<div class="d-flex align-items-center">
                        														<!--begin::Avatar-->
                        														<div class="symbol symbol-45px symbol-circle">
                        															<img alt="Pic" src="assets/media/avatars/300-1.jpg">
                        														</div>
                        														<!--end::Avatar-->
                        														<!--begin::Details---->
                        														<div class="ms-5">
                        															<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">جلالی</a>
                        															<div class="fw-semibold text-muted">max@kt.com</div>
                        														</div>
                        														<!--end::Details---->
                        													</div>
                        													<!--end::Details---->
                        													<!--begin::Lat seen-->
                        													<div class="d-flex flex-column align-items-end ms-2">
                        														<span class="text-muted fs-7 mb-1">2 weeks</span>
                        													</div>
                        													<!--end::Lat seen-->
                        												</div>
                        												<!--end::user-->
                        												<!--begin::Separator-->
                        												<div class="separator separator-dashed d-none"></div>
                        												<!--end::Separator-->
                        												<!--begin::user-->
                        												<div class="d-flex flex-stack py-4">
                        													<!--begin::Details---->
                        													<div class="d-flex align-items-center">
                        														<!--begin::Avatar-->
                        														<div class="symbol symbol-45px symbol-circle">
                        															<img alt="Pic" src="assets/media/avatars/300-5.jpg">
                        															<div class="symbol-badge bg-success start-100 top-100 border-4 h-8px w-8px ms-n2 mt-n2"></div>
                        														</div>
                        														<!--end::Avatar-->
                        														<!--begin::Details---->
                        														<div class="ms-5">
                        															<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">محسن برومند</a>
                        															<div class="fw-semibold text-muted">sean@dellito.com</div>
                        														</div>
                        														<!--end::Details---->
                        													</div>
                        													<!--end::Details---->
                        													<!--begin::Lat seen-->
                        													<div class="d-flex flex-column align-items-end ms-2">
                        														<span class="text-muted fs-7 mb-1">5 ساعت</span>
                        													</div>
                        													<!--end::Lat seen-->
                        												</div>
                        												<!--end::user-->
                        												<!--begin::Separator-->
                        												<div class="separator separator-dashed d-none"></div>
                        												<!--end::Separator-->
                        												<!--begin::user-->
                        												<div class="d-flex flex-stack py-4">
                        													<!--begin::Details---->
                        													<div class="d-flex align-items-center">
                        														<!--begin::Avatar-->
                        														<div class="symbol symbol-45px symbol-circle">
                        															<img alt="Pic" src="assets/media/avatars/300-25.jpg">
                        														</div>
                        														<!--end::Avatar-->
                        														<!--begin::Details---->
                        														<div class="ms-5">
                        															<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">رضا علی ابادی</a>
                        															<div class="fw-semibold text-muted">brian@exchange.com</div>
                        														</div>
                        														<!--end::Details---->
                        													</div>
                        													<!--end::Details---->
                        													<!--begin::Lat seen-->
                        													<div class="d-flex flex-column align-items-end ms-2">
                        														<span class="text-muted fs-7 mb-1">1 روز</span>
                        														<span class="badge badge-sm badge-circle badge-light-danger">5</span>
                        													</div>
                        													<!--end::Lat seen-->
                        												</div>
                        												<!--end::user-->
                        												<!--begin::Separator-->
                        												<div class="separator separator-dashed d-none"></div>
                        												<!--end::Separator-->
                        												<!--begin::user-->
                        												<div class="d-flex flex-stack py-4">
                        													<!--begin::Details---->
                        													<div class="d-flex align-items-center">
                        														<!--begin::Avatar-->
                        														<div class="symbol symbol-45px symbol-circle">
                        															<span class="symbol-label bg-light-warning text-warning fs-6 fw-bolder">C</span>
                        															<div class="symbol-badge bg-success start-100 top-100 border-4 h-8px w-8px ms-n2 mt-n2"></div>
                        														</div>
                        														<!--end::Avatar-->
                        														<!--begin::Details---->
                        														<div class="ms-5">
                        															<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">میکائیل کرمانی</a>
                        															<div class="fw-semibold text-muted">mik@pex.com</div>
                        														</div>
                        														<!--end::Details---->
                        													</div>
                        													<!--end::Details---->
                        													<!--begin::Lat seen-->
                        													<div class="d-flex flex-column align-items-end ms-2">
                        														<span class="text-muted fs-7 mb-1">20 hrs</span>
                        														<span class="badge badge-sm badge-circle badge-light-success">6</span>
                        													</div>
                        													<!--end::Lat seen-->
                        												</div>
                        												<!--end::user-->
                        												<!--begin::Separator-->
                        												<div class="separator separator-dashed d-none"></div>
                        												<!--end::Separator-->
                        												<!--begin::user-->
                        												<div class="d-flex flex-stack py-4">
                        													<!--begin::Details---->
                        													<div class="d-flex align-items-center">
                        														<!--begin::Avatar-->
                        														<div class="symbol symbol-45px symbol-circle">
                        															<img alt="Pic" src="assets/media/avatars/300-9.jpg">
                        														</div>
                        														<!--end::Avatar-->
                        														<!--begin::Details---->
                        														<div class="ms-5">
                        															<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">محمد رصایی</a>
                        															<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                        														</div>
                        														<!--end::Details---->
                        													</div>
                        													<!--end::Details---->
                        													<!--begin::Lat seen-->
                        													<div class="d-flex flex-column align-items-end ms-2">
                        														<span class="text-muted fs-7 mb-1">5 ساعت</span>
                        														<span class="badge badge-sm badge-circle badge-light-danger">5</span>
                        													</div>
                        													<!--end::Lat seen-->
                        												</div>
                        												<!--end::user-->
                        												<!--begin::Separator-->
                        												<div class="separator separator-dashed d-none"></div>
                        												<!--end::Separator-->
                        												<!--begin::user-->
                        												<div class="d-flex flex-stack py-4">
                        													<!--begin::Details---->
                        													<div class="d-flex align-items-center">
                        														<!--begin::Avatar-->
                        														<div class="symbol symbol-45px symbol-circle">
                        															<span class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">O</span>
                        														</div>
                        														<!--end::Avatar-->
                        														<!--begin::Details---->
                        														<div class="ms-5">
                        															<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">امید وحیدی</a>
                        															<div class="fw-semibold text-muted">olivia@corpmail.com</div>
                        														</div>
                        														<!--end::Details---->
                        													</div>
                        													<!--end::Details---->
                        													<!--begin::Lat seen-->
                        													<div class="d-flex flex-column align-items-end ms-2">
                        														<span class="text-muted fs-7 mb-1">5 ساعت</span>
                        													</div>
                        													<!--end::Lat seen-->
                        												</div>
                        												<!--end::user-->
                        												<!--begin::Separator-->
                        												<div class="separator separator-dashed d-none"></div>
                        												<!--end::Separator-->
                        												<!--begin::user-->
                        												<div class="d-flex flex-stack py-4">
                        													<!--begin::Details---->
                        													<div class="d-flex align-items-center">
                        														<!--begin::Avatar-->
                        														<div class="symbol symbol-45px symbol-circle">
                        															<span class="symbol-label bg-light-primary text-primary fs-6 fw-bolder">N</span>
                        														</div>
                        														<!--end::Avatar-->
                        														<!--begin::Details---->
                        														<div class="ms-5">
                        															<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">محسن برومند</a>
                        															<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                        														</div>
                        														<!--end::Details---->
                        													</div>
                        													<!--end::Details---->
                        													<!--begin::Lat seen-->
                        													<div class="d-flex flex-column align-items-end ms-2">
                        														<span class="text-muted fs-7 mb-1">20 hrs</span>
                        													</div>
                        													<!--end::Lat seen-->
                        												</div>
                        												<!--end::user-->
                        												<!--begin::Separator-->
                        												<div class="separator separator-dashed d-none"></div>
                        												<!--end::Separator-->
                        												<!--begin::user-->
                        												<div class="d-flex flex-stack py-4">
                        													<!--begin::Details---->
                        													<div class="d-flex align-items-center">
                        														<!--begin::Avatar-->
                        														<div class="symbol symbol-45px symbol-circle">
                        															<img alt="Pic" src="assets/media/avatars/300-23.jpg">
                        														</div>
                        														<!--end::Avatar-->
                        														<!--begin::Details---->
                        														<div class="ms-5">
                        															<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">علی کاربر</a>
                        															<div class="fw-semibold text-muted">dam@consilting.com</div>
                        														</div>
                        														<!--end::Details---->
                        													</div>
                        													<!--end::Details---->
                        													<!--begin::Lat seen-->
                        													<div class="d-flex flex-column align-items-end ms-2">
                        														<span class="text-muted fs-7 mb-1">20 hrs</span>
                        													</div>
                        													<!--end::Lat seen-->
                        												</div>
                        												<!--end::user-->
                        												<!--begin::Separator-->
                        												<div class="separator separator-dashed d-none"></div>
                        												<!--end::Separator-->
                        												<!--begin::user-->
                        												<div class="d-flex flex-stack py-4">
                        													<!--begin::Details---->
                        													<div class="d-flex align-items-center">
                        														<!--begin::Avatar-->
                        														<div class="symbol symbol-45px symbol-circle">
                        															<span class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">E</span>
                        														</div>
                        														<!--end::Avatar-->
                        														<!--begin::Details---->
                        														<div class="ms-5">
                        															<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">الهام بارانی</a>
                        															<div class="fw-semibold text-muted">emma@intenso.com</div>
                        														</div>
                        														<!--end::Details---->
                        													</div>
                        													<!--end::Details---->
                        													<!--begin::Lat seen-->
                        													<div class="d-flex flex-column align-items-end ms-2">
                        														<span class="text-muted fs-7 mb-1">2 weeks</span>
                        														<span class="badge badge-sm badge-circle badge-light-danger">5</span>
                        													</div>
                        													<!--end::Lat seen-->
                        												</div>
                        												<!--end::user-->
                        											</div>
                        											<!--end::لیست-->
                        										</div>
                        										<!--end::کارت body-->
                        									</div>
                        									<!--end::مخاطبین-->
                        								</div>
                        		<!--EndSidebar-->
                        		
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
														<img alt="Pic" src="assets/media/avatars/300-5.jpg">
													</div>
													<!--end::Avatar-->
													<!--begin::Avatar-->
													<div class="symbol symbol-35px symbol-circle">
														<img alt="Pic" src="assets/media/avatars/300-25.jpg">
													</div>
													<!--end::Avatar-->
													<!--begin::Avatar-->
													<div class="symbol symbol-35px symbol-circle">
														<span class="symbol-label bg-light-warning text-warning 40px">C</span>
													</div>
													<!--end::Avatar-->
													<!--begin::Avatar-->
													<div class="symbol symbol-35px symbol-circle">
														<img alt="Pic" src="assets/media/avatars/300-9.jpg">
													</div>
													<!--end::Avatar-->
													<!--begin::Avatar-->
													<div class="symbol symbol-35px symbol-circle">
														<span class="symbol-label bg-light-danger text-danger 40px">O</span>
													</div>
													<!--end::Avatar-->
													<!--begin::Avatar-->
													<div class="symbol symbol-35px symbol-circle">
														<span class="symbol-label bg-light-primary text-primary 40px">N</span>
													</div>
													<!--end::Avatar-->
													<!--begin::Avatar-->
													<div class="symbol symbol-35px symbol-circle">
														<img alt="Pic" src="assets/media/avatars/300-23.jpg">
													</div>
													<!--end::Avatar-->
													<!--begin::همه users-->
													<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
														<span class="symbol-label fs-8 fw-bold" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-original-title="نمایش بیشتر users" data-kt-initialized="1">+42</span>
													</a>
													<!--end::همه users-->
												</div>
												<!--end::users-->
											</div>
											<!--end::Title-->
											<!--begin::کارت toolbar-->
											<div class="card-toolbar">
												<!--begin::Menu-->
												<div class="me-n3">
													<button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
														<i class="ki-duotone ki-dots-square fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>
													</button>
													<!--begin::Menu 3-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">
														<!--begin::Heading-->
														<div class="menu-item px-3">
															<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">مخاطبین</div>
														</div>
														<!--end::Heading-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">افزودن مخاطب</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">دعوت مخاطبین
															<span class="ms-2" data-bs-toggle="tooltip" aria-label="برای ارسال دعوت نامه یک ایمیل تماس مشخص کنید" data-bs-original-title="برای ارسال دعوت نامه یک ایمیل تماس مشخص کنید" data-kt-initialized="1">
																<i class="ki-duotone ki-information fs-7">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span></a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
															<a href="#" class="menu-link px-3">
																<span class="menu-title">گروه ها</span>
																<span class="menu-arrow"></span>
															</a>
															<!--begin::Menu sub-->
															<div class="menu-sub menu-sub-dropdown w-175px py-4">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="بزودی" data-kt-initialized="1">ساختن گروه</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="بزودی" data-kt-initialized="1">دعوت کاربران</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="بزودی" data-kt-initialized="1">تنظیمات</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu sub-->
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3 my-1">
															<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="بزودی" data-kt-initialized="1">تنظیمات</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu 3-->
												</div>
												<!--end::Menu-->
											</div>
											<!--end::کارت toolbar-->
										</div>
										<!--end::کارت header-->
										<!--begin::کارت body-->
										<div class="card-body" id="kt_chat_messenger_body">
											<!--begin::پیام ها-->
											<div class="scroll-y me-n5 pe-5 h-300px h-lg-auto" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_app_toolbar, #kt_toolbar, #kt_footer, #kt_app_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer" data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_messenger_body" data-kt-scroll-offset="5px" style="max-height: 19px;">
												<!--begin::پیام(in)-->
												<div class="d-flex justify-content-start mb-10">
													<!--begin::Wrapper-->
													<div class="d-flex flex-column align-items-start">
														<!--begin::user-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-25.jpg">
															</div>
															<!--end::Avatar-->
															<!--begin::Details---->
															<div class="ms-3">
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">رضا علی ابادی</a>
																<span class="text-muted fs-7 mb-1">دو دقیقه پیش</span>
															</div>
															<!--end::Details---->
														</div>
														<!--end::user-->
														<!--begin::Text-->
														<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">چقدر احتمال دارد که شرکت ما را به دوستان و خانواده خود پیشنهاد دهید </div>
														<!--end::Text-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::پیام(in)-->
												<!--begin::پیام(out)-->
												<div class="d-flex justify-content-end mb-10">
													<!--begin::Wrapper-->
													<div class="d-flex flex-column align-items-end">
														<!--begin::user-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Details---->
															<div class="me-3">
																<span class="text-muted fs-7 mb-1">5دقیقه پیش</span>
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">شما</a>
															</div>
															<!--end::Details---->
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-1.jpg">
															</div>
															<!--end::Avatar-->
														</div>
														<!--end::user-->
														<!--begin::Text-->
														<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">سلام ، ما فقط در حال نوشتن هستیم تا به شما اطلاع دهیم که در مخزن گیت هاب مشترک شده اید.</div>
														<!--end::Text-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::پیام(out)-->
												<!--begin::پیام(in)-->
												<div class="d-flex justify-content-start mb-10">
													<!--begin::Wrapper-->
													<div class="d-flex flex-column align-items-start">
														<!--begin::user-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-25.jpg">
															</div>
															<!--end::Avatar-->
															<!--begin::Details---->
															<div class="ms-3">
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">رضا علی ابادی</a>
																<span class="text-muted fs-7 mb-1">یکساعت پیش</span>
															</div>
															<!--end::Details---->
														</div>
														<!--end::user-->
														<!--begin::Text-->
														<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">بله فهمیدم</div>
														<!--end::Text-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::پیام(in)-->
												<!--begin::پیام(out)-->
												<div class="d-flex justify-content-end mb-10">
													<!--begin::Wrapper-->
													<div class="d-flex flex-column align-items-end">
														<!--begin::user-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Details---->
															<div class="me-3">
																<span class="text-muted fs-7 mb-1">2 ساعت</span>
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">شما</a>
															</div>
															<!--end::Details---->
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-1.jpg">
															</div>
															<!--end::Avatar-->
														</div>
														<!--end::user-->
														<!--begin::Text-->
														<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">شما برای همه موارد اعلان دریافت خواهید کرد ، درخواستها را بکشید!</div>
														<!--end::Text-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::پیام(out)-->
												<!--begin::پیام(in)-->
												<div class="d-flex justify-content-start mb-10">
													<!--begin::Wrapper-->
													<div class="d-flex flex-column align-items-start">
														<!--begin::user-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-25.jpg">
															</div>
															<!--end::Avatar-->
															<!--begin::Details---->
															<div class="ms-3">
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">رضا علی ابادی</a>
																<span class="text-muted fs-7 mb-1">3 ساعت</span>
															</div>
															<!--end::Details---->
														</div>
														<!--end::user-->
														<!--begin::Text-->
														<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">شما می توانید با کلیک بر روی اینجا فوراً این مخزن را تماشا کنید:
														<a href="https://keenthemes.com">satrasweb.ir</a></div>
														<!--end::Text-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::پیام(in)-->
												<!--begin::پیام(out)-->
												<div class="d-flex justify-content-end mb-10">
													<!--begin::Wrapper-->
													<div class="d-flex flex-column align-items-end">
														<!--begin::user-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Details---->
															<div class="me-3">
																<span class="text-muted fs-7 mb-1">4 ساعت</span>
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">شما</a>
															</div>
															<!--end::Details---->
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-1.jpg">
															</div>
															<!--end::Avatar-->
														</div>
														<!--end::user-->
														<!--begin::Text-->
														<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">بیشتر دوره های بازرگانی خریداری شده در طول این فروش!</div>
														<!--end::Text-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::پیام(out)-->
												<!--begin::پیام(in)-->
												<div class="d-flex justify-content-start mb-10">
													<!--begin::Wrapper-->
													<div class="d-flex flex-column align-items-start">
														<!--begin::user-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-25.jpg">
															</div>
															<!--end::Avatar-->
															<!--begin::Details---->
															<div class="ms-3">
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">رضا علی ابادی</a>
																<span class="text-muted fs-7 mb-1">5 ساعت</span>
															</div>
															<!--end::Details---->
														</div>
														<!--end::user-->
														<!--begin::Text-->
														<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">شرکت BBQ برای جشن گرفتن دستاوردها و اهداف سه ماهه آخر. غذا و نوشیدنی ارائه شده است</div>
														<!--end::Text-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::پیام(in)-->
												<!--begin::پیام(template for out)-->
												<div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
													<!--begin::Wrapper-->
													<div class="d-flex flex-column align-items-end">
														<!--begin::user-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Details---->
															<div class="me-3">
																<span class="text-muted fs-7 mb-1">فقط</span>
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">شما</a>
															</div>
															<!--end::Details---->
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-1.jpg">
															</div>
															<!--end::Avatar-->
														</div>
														<!--end::user-->
														<!--begin::Text-->
														<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text"></div>
														<!--end::Text-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::پیام(template for out)-->
												<!--begin::پیام(template for in)-->
												<div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
													<!--begin::Wrapper-->
													<div class="d-flex flex-column align-items-start">
														<!--begin::user-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Avatar-->
															<div class="symbol symbol-35px symbol-circle">
																<img alt="Pic" src="assets/media/avatars/300-25.jpg">
															</div>
															<!--end::Avatar-->
															<!--begin::Details---->
															<div class="ms-3">
																<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">رضا علی ابادی</a>
																<span class="text-muted fs-7 mb-1">فقط</span>
															</div>
															<!--end::Details---->
														</div>
														<!--end::user-->
														<!--begin::Text-->
														<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Right before vacation season we have the next Bigمعامله for you.</div>
														<!--end::Text-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::پیام(template for in)-->
											</div>
											<!--end::پیام ها-->
										</div>
										<!--end::کارت body-->
										<!--begin::کارت footer-->
										<div class="card-footer pt-4" id="kt_chat_messenger_footer">
											<!--begin::Input-->
											<textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="نوشتن پیام"></textarea>
											<!--end::Input-->
											<!--begin:Toolbar-->
											<div class="d-flex flex-stack">
												<!--begin::Actions-->
												<div class="d-flex align-items-center me-2">
													<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" aria-label="بزودی" data-bs-original-title="بزودی" data-kt-initialized="1">
														<i class="ki-duotone ki-paper-clip fs-3"></i>
													</button>
													<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" aria-label="بزودی" data-bs-original-title="بزودی" data-kt-initialized="1">
														<i class="ki-duotone ki-exit-up fs-3">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</button>
												</div>
												<!--end::Actions-->
												<!--begin::ارسال-->
												<button class="btn btn-primary" type="button" data-kt-element="send">ارسال</button>
												<!--end::ارسال-->
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::کارت footer-->
									</div>
									<!--end::Messenger-->
								</div>
								
			</div>
								
           
@endsection

@push('scripts')
    
    {{--دیت پیکر جدید--}}
    <script src="{{asset("assets/plugins/custom/datepicker/jdate.js")}}"></script>
    <script src="{{asset("assets/plugins/custom/datepicker/flatpickr-jdate.js")}}"></script>
    <script src="{{asset("assets/plugins/custom/datepicker/fa-jdate.js")}}"></script>
    <script src="{{asset("assets/plugins/custom/datepicker/pickr.js")}}"></script>
    <script src="{{asset("assets/plugins/custom/datepicker/forms-pickers.js")}}"></script>
@endpush

