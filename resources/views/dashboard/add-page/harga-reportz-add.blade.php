@extends('dashboard.admin')

@section('content')

<form method="POST" action="{{ route('harga.store_report') }}">
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
                            <h3 class="fw-bolder m-0">Input Report</h3>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--begin::Card header-->
                    <!--begin::Content-->
                    <div id="kt_account_settings_profile_details" class="collapse show">
                        <!--begin::Form-->

                        <!--begin::Card body-->
                        <div class="card-body border-top p-9">
  
                            <div class="colum mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-1 col-form-label required fw-bold fs-6"
                                    for="sales_id">Report</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-14 fv-row">
                                    <input type="text" name="sales_id" id="sales_id" placeholder="Masukan Report"
                                        class="form-control form-control-lg form-control-solid" required />

                                </div>
                                <!--end::Col-->
                            </div>

                            {{-- basic --}}
                            <div class="form-group" id="kt_modal_new_address">
                                <label class="col-lg-2 col-form-label required fw-bold fs-6"
                                    for="statusreport_basic">Status Basic</label>
                                <select id="statusreport_basic" name="statusreport_basic" data-control="select2"
                                    data-dropdown-parent="#kt_modal_new_address" data-placeholder="Status Basic"
                                    class="form-select form-select-solid" required>
                                    <option value="aktif">Aktif</option>
                                    <option value="nonaktif">Nonaktif</option>
                                </select>
                            </div>

                            {{-- advance --}}
                            <div class="form-group" id="kt_modal_new_address">
                                <label class="col-lg-2 col-form-label required fw-bold fs-6"
                                    for="statusreport_advance">Status Advance</label>
                                <select id="statusrepor_advancet" name="statusreport_advance" data-control="select2"
                                    data-dropdown-parent="#kt_modal_new_address" data-placeholder="Status Advance"
                                    class="form-select form-select-solid" required>
                                    <option value="aktif">Aktif</option>
                                    <option value="nonaktif">Nonaktif</option>
                                </select>
                            </div>

                            {{-- expert --}}
                            <div class="form-group" id="kt_modal_new_address">
                                <label class="col-lg-2 col-form-label required fw-bold fs-6"
                                    for="statusreport_expert">Status Expert</label>
                                <select id="statusreport_expert" name="statusreport_expert" data-control="select2"
                                    data-dropdown-parent="#kt_modal_new_address" data-placeholder="Status Expert"
                                    class="form-select form-select-solid" required>
                                    <option value="aktif">Aktif</option>
                                    <option value="nonaktif">Nonaktif</option>
                                </select>
                            </div>


                        </div>
                        <!--end::Card body-->
                        <!--begin::Actions-->
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save
                                Changes</button>
                        </div>
                        <!--end::Actions-->

                        <!--end::Form-->
                    </div>
                    <!--end::Content-->
                </div>
            </div>
        </div>
    </div>
</form>




@endsection