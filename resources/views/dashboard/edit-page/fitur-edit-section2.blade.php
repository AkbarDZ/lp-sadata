@extends('dashboard.admin')

@section('content')
<form method="POST" action="{{ route('fitur.update2', ['id' => $section2->id]) }}">

    @csrf
    @method('PUT')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <div class="card mb-5 mb-xl-10">
                    <!--begin::Card header-->
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                        data-bs-target="#kt_account_profile_details" aria-expanded="true"
                        aria-controls="kt_account_profile_details">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            <h3 class="fw-bolder m-0">Feature - Section 2 Edit</h3>
                        </div>

                        <!--end::Card title-->
                    </div>

                    <div id="kt_account_settings_profile_details" class="collapse show">
                        <!--begin::Form-->
                        <form id="kt_account_profile_details_form" class="form">
                            <!--begin::Card body-->
                            <div class="card-body border-top p-9">

                                <div class="colum mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-1 col-form-label fw-bold fs-6" for="title_2">Section Title</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-14 fv-row">
                                        <textarea type="text" maxlength="255"
                                            class="form-control form-control-solid limitedForm"
                                            name="title_2">{{ $section2->title_2 }}</textarea>
                                    </div>
                                    <!--end::Col-->
                                </div>

                                <div class="colum mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 col-form-label fw-bold fs-6"
                                        for="description_2">Section Description</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-14 fv-row">
                                        <textarea type="text" maxlength="255"
                                            class="form-control form-control-solid limitedForm"
                                            name="description_2">{{ $section2->description_2 }}</textarea>
                                    </div>
                                    <!--end::Col-->
                                </div>

                                <div class="colum mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 col-form-label fw-bold fs-6"
                                        for="subtitle_2">Section Subtitle</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-14 fv-row">
                                        <textarea type="text" maxlength="255"
                                            class="form-control form-control-solid limitedForm"
                                            name="subtitle_2">{{ $section2->subtitle_2 }}</textarea>
                                    </div>
                                    <!--end::Col-->
                                </div>

                                <div class="colum mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 col-form-label fw-bold fs-6"
                                        for="section2_1">Section 2.1</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-14 fv-row">
                                        <textarea type="text" maxlength="255"
                                            class="form-control form-control-solid limitedForm"
                                            name="section2_1">{{ $section2->section2_1 }}</textarea>
                                    </div>
                                    <!--end::Col-->
                                </div>

                                <div class="colum mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 col-form-label fw-bold fs-6"
                                        for="section2_2">Section 2.2</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-14 fv-row">
                                        <textarea type="text" maxlength="255"
                                            class="form-control form-control-solid limitedForm"
                                            name="section2_2">{{ $section2->section2_2 }}</textarea>
                                    </div>
                                    <!--end::Col-->
                                </div>

                                <div class="colum mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 col-form-label fw-bold fs-6"
                                        for="section2_3">Section 2.3</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-14 fv-row">
                                        <textarea type="text" maxlength="255"
                                            class="form-control form-control-solid limitedForm"
                                            name="section2_3">{{ $section2->section2_3 }}</textarea>
                                    </div>
                                    <!--end::Col-->
                                </div>

                            </div>
                            <!--end::Card body-->
                            <!--begin::Actions-->
                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <a href="{{route('fitur.section2')}}" class="btn btn-light btn-active-light-danger me-2">
                                    Cancel
                                </a>
                                <button type="submit" class="btn btn-primary"
                                    id="kt_account_profile_details_submit">Submit</button>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Content-->
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
