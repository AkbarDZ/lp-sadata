@extends('dashboard.admin')

@section('content')


<form action="{{ route('harga.update_general', $general->id) }}" method="POST">
    @csrf
    @method('PUT')
    <!-- Ini digunakan untuk menentukan metode PUT -->

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
                            <h3 class="fw-bolder m-0">Input General</h3>
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
                                    for="guidelines">General</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-14 fv-row">
                                    <input type="text" id="guidelines" name="guidelines"
                                        value="{{ $general->guidelines }}"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="Input Name Brand" required />
                                </div>
                                <!--end::Col-->
                            </div>

                            {{-- basic --}}
                            <div class="form-group" id="kt_modal_new_address">
                                <label class="col-lg-2 col-form-label required fw-bold fs-6" for="statusbasic">Status
                                    Basic</label>
                                <select id="statusbasic" name="statusbasic" data-control="select2"
                                    data-dropdown-parent="#kt_modal_new_address" data-placeholder="Basic"
                                    class="form-select form-select-solid" required>
                                    <option value="aktif" {{ $general->statusbasic === 'aktif' ? 'selected' : '' }}>
                                        Aktif</option>
                                    <option value="nonaktif"
                                        {{ $general->statusbasic === 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                                </select>
                            </div>

                            {{-- advance --}}
                            <div class="form-group" id="kt_modal_new_address">
                                <label class="col-lg-2 col-form-label required fw-bold fs-6" for="statusadvance">Status
                                    Advance</label>
                                <select id="statusadvance" name="statusadvance" data-control="select2"
                                    data-dropdown-parent="#kt_modal_new_address" data-placeholder="Advance"
                                    class="form-select form-select-solid" required>
                                    <option value="aktif" {{ $general->statusadvance === 'aktif' ? 'selected' : '' }}>
                                        Aktif</option>
                                    <option value="nonaktif"
                                        {{ $general->statusadvance === 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                                </select>
                            </div>

                            {{-- expert --}}
                            <div class="form-group" id="kt_modal_new_address">
                                <label class="col-lg-2 col-form-label required fw-bold fs-6" for="statusexpert">Status
                                    Expert</label>
                                <select id="statusexpert" name="statusexpert" data-control="select2"
                                    data-dropdown-parent="#kt_modal_new_address" data-placeholder="Expert"
                                    class="form-select form-select-solid" required>
                                    <option value="aktif" {{ $general->statusexpert === 'aktif' ? 'selected' : '' }}>
                                        Aktif</option>
                                    <option value="nonaktif"
                                        {{ $general->statusexpert === 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
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