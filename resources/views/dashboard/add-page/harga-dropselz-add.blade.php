@extends('dashboard.admin')

@section('content')

<form method="POST" action="{{ route('harga.store_dropsel') }}">
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
                            <h3 class="fw-bolder m-0">Input Dropsel</h3>
                        </div>

                        <!--end::Card title-->
                    </div>

                    <!--begin::Content-->
                    <div id="kt_account_settings_profile_details" class="collapse show">
                        <!--begin::Form-->
                        <form id="kt_account_profile_details_form" class="form">
                            <!--begin::Card body-->
                            <div class="card-body border-top p-9">
 
                                <div class="colum mb-6">

                                    <div class="form-group" id="kt_modal_new_address">
                                        {{-- <label  class="col-lg-1 col-form-label required fw-bold fs-6" for="status">Brand</label> --}}
                                        <select name="sales_id" id="sales_id" data-control="select2"
                                            data-dropdown-parent="#kt_modal_new_address" data-placeholder="Report"
                                            class="form-select form-select-solid" required>
                                            @foreach($reports as $report)
                                            <option value="{{ $report->id }}"
                                                style="color: {{ $report->statusreport == 'aktif' ? 'red' : 'green' }}">
                                                {{ $report->sales_id }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!--end::Col-->
                                </div>

                                <div class="colum mb-6">

                                    <label class="col-lg-2 col-form-label required fw-bold fs-6"
                                        for="sell_id">Dropsel</label>
                                    <div class="col-lg-14 fv-row">
                                        <input type="text" name="sell_id" id="sell_id"
                                            class="form-control form-control-lg form-control-solid"
                                            placeholder="Input Dropsel" />
                                    </div>

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