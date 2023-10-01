<!-- Edit.blade.php -->
@extends('dashboard.admin')

@section('content')
<form method="POST" action="{{ route('harga.update', $basic->id) }}">
    @csrf
    @method('PUT')
    <!-- Menggunakan metode PUT untuk pembaruan -->

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
                            <h3 class="fw-bolder m-0">Edit Title</h3>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--begin::Card header-->
                    <!--begin::Content-->
                    <div id="kt_account_settings_profile_details" class="collapse show">
                        <!--begin::Form-->
                        <form id="kt_account_profile_details_form" class="form">
                            <!--begin::Card body-->
                            <div class="card-body border-top p-9">
                                <!--begin::Input group-->

                                <!--end::Input group-->
                                <!--begin::Input group-->

                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="colum mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-1 col-form-label required fw-bold fs-6" for="judulbasic">Basic
                                        Title</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-14 fv-row">
                                        <textarea type="text" name="judulbasic" id="judulbasic"
                                            class="form-control form-control-lg form-control-solid"
                                            placeholder="Input Title" required
                                            maxlength="255">{{ $basic->judulbasic }}</textarea>
                                    </div>
                                    <!--end::Col-->
                                </div>

                                {{-- advance --}}
                                <div class="colum mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 col-form-label required fw-bold fs-6"
                                        for="juduladvance">Advance Title</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-14 fv-row">
                                        <textarea type="text" name="juduladvance" id="juduladvance"
                                            class="form-control form-control-lg form-control-solid"
                                            placeholder="Input Title" required
                                            maxlength="255">{{ $basic->juduladvance }}</textarea>
                                    </div>
                                    <!--end::Col-->
                                </div>

                                {{-- expert --}}
                                <div class="colum mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 col-form-label required fw-bold fs-6"
                                        for="judulexpert">Expert Title</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-14 fv-row">
                                        <textarea type="text" name="judulexpert" id="judulexpert"
                                            class="form-control form-control-lg form-control-solid"
                                            placeholder="Input Title" required
                                            maxlength="255">{{ $basic->judulexpert }}</textarea>
                                    </div>
                                    <!--end::Col-->
                                </div>
                            </div>
                            <!--end::Card body-->
                            <!--begin::Actions-->
                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <button type="reset"
                                    class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                <button type="submit" class="btn btn-primary"
                                    id="kt_account_profile_details_submit">Save Changes</button>
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