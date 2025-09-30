@extends('admin.layout.main')

@section('content')

    <div class="card mb-5 mb-xl-10">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <div class="mb-0">
                    <!--begin::Title-->
                    <h1 class="text-dark fw-bolder mb-3">انتقادات و پیشنهادات</h1>
                    <!--end::Title-->
                    <!--begin::Subtitle-->
                    <div class="text-gray-500 fw-semibold fs-6">اطلاعات شخصی شما در این بخش ذخیره نمی شود و پیام شما به صورت ناشناس ثبت می شود.</div>
                    <!--end::Subtitle=-->
                </div>
            </h3>

        </div>

        <div class="card-body py-3">
            <livewire:manage-contact.contact-component/>
        </div>
    </div>

@endsection
