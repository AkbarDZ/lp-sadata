@extends('dashboard.admin')

@section('content')
<form method="POST" action="{{route('beranda.store_mobile')}}">

    @csrf

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
                            <h3 class="fw-bolder m-0">Beranda - Mobile Add</h3>
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
                                    <label class="col-lg-1 col-form-label fw-bold fs-6" for="mobiles_title">Mobiles
                                        Title</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-14 fv-row">
                                        <textarea type="text" maxlength="45"
                                            class="form-control form-control-solid limitedForm"
                                            name="mobiles_title"></textarea>
                                    </div>
                                    <!--end::Col-->
                                </div>

                                <div class="colum mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 col-form-label fw-bold fs-6"
                                        for="mobiles_description">Mobiles
                                        Description</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-14 fv-row">
                                        <textarea type="text" maxlength="145"
                                            class="form-control form-control-solid limitedForm"
                                            name="mobiles_description"></textarea>
                                    </div>
                                    <!--end::Col-->
                                </div>

                            </div>
                            <!--end::Card body-->
                            <!--begin::Actions-->
                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <a href="{{route('beranda.mobile')}}" class="btn btn-light btn-active-light-danger me-2">
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
