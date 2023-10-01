@extends('dashboard.admin')

@section('content')
<form method="POST" action="{{ route('harga.store_attendance') }}" id="kt_account_profile_details_form" class="form">
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
                            <h3 class="fw-bolder m-0">Input Attendance</h3>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--begin::Card header-->
                    <!--begin::Content-->
                    <div id="kt_account_settings_profile_details" class="collapse show">

                        <div class="card-body border-top p-9">
                            <div class="form-group" id="kt_modal_new_address">
                                <label for="category"
                                    class="col-lg-1 col-form-label required fw-bold fs-6">Category</label>
                                <select class="form-control" id="category" name="category"
                                    data-dropdown-parent="#kt_modal_new_address" data-placeholder="Status"
                                    class="form-select form-select-solid" required>
                                    <option value="" selected disabled>Pilih Kategori atau Masukkan Baru</option>
                                    <option value="Level">Level</option>
                                    <option value="Itinerary">Itinerary</option>
                                    <option value="Permittance">Permittance</option>
                                    <option value="Create Location">Create Location</option>
                                    <option value="Plan">Plan</option>
                                    <option value="Attendance Tracking">Attendance Tracking</option>
                                    <option value="new_category">Masukkan Baru</option>
                                </select>
                            </div>

                            <div class="form-group" id="newCategoryInput" style="display: none;">
                                <label for="new_category" class="col-lg-2 col-form-label required fw-bold fs-6">Kategori
                                    Baru</label>
                                <input type="text" class="form-control form-control-lg form-control-solid"
                                    placeholder="Category New" id="new_category" name="new_category">
                            </div>

                            {{-- basicc --}}
                            <div class="form-group" id="kt_modal_new_address">
                                <label class="col-lg-2 col-form-label required fw-bold fs-6" for="statusbasicc">Status
                                    Basic</label>
                                <select name="statusbasicc" id="statusbasicc" data-control="select2"
                                    data-dropdown-parent="#kt_modal_new_address" data-placeholder="Status Basic"
                                    class="form-select form-select-solid" required>
                                    <option value="" disabled selected>Pilih Status</option>
                                    <option value="aktif">Aktif</option>
                                    <option value="nonaktif">Nonaktif</option>
                                </select>
                            </div>

                            {{-- advancee --}}
                            <div class="form-group" id="kt_modal_new_address">
                                <label class="col-lg-2 col-form-label required fw-bold fs-6" for="statusadvancee">Status
                                    Advance</label>
                                <select name="statusadvancee" id="statusadvancee" data-control="select2"
                                    data-dropdown-parent="#kt_modal_new_address" data-placeholder="Status Advance"
                                    class="form-select form-select-solid" required>
                                    <option value="" disabled selected>Pilih Status</option>
                                    <option value="aktif">Aktif</option>
                                    <option value="nonaktif">Nonaktif</option>
                                </select>
                            </div>

                            {{-- expertt --}}
                            <div class="form-group" id="kt_modal_new_address">
                                <label class="col-lg-2 col-form-label required fw-bold fs-6" for="statusexpertt">Status
                                    Expert</label>
                                <select name="statusexpertt" id="statusexpertt" data-control="select2"
                                    data-dropdown-parent="#kt_modal_new_address" data-placeholder="Status Expert"
                                    class="form-select form-select-solid" required>
                                    <option value="" disabled selected>Pilih Status</option>
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


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const categorySelect = document.getElementById("category");
        const newCategoryInput = document.getElementById("newCategoryInput");

        categorySelect.addEventListener("change", function () {
            const selectedOption = categorySelect.value;
            if (selectedOption === "new_category") {
                // Jika "Masukkan Baru" dipilih, tampilkan input untuk kategori baru
                newCategoryInput.style.display = "block";
            } else {
                // Jika opsi lain dipilih, sembunyikan input untuk kategori baru
                newCategoryInput.style.display = "none";
            }
        });
    });
</script>


@endsection