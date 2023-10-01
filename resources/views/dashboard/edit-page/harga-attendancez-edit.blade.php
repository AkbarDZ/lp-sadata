@extends('dashboard.admin')

@section('content')
<form method="POST" action="{{ route('harga.update_attendance', $attendance->id) }}"
    id="kt_account_profile_details_form" class="form">
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
                                <select class="form-control" id="category" name="category" required>
                                    <option value="Level" {{ $attendance->category === 'Level' ? 'selected' : '' }}>
                                        Level</option>
                                    <option value="Itinerary"
                                        {{ $attendance->category === 'Itinerary' ? 'selected' : '' }}>Itinerary</option>
                                    <option value="Permittance"
                                        {{ $attendance->category === 'Permittance' ? 'selected' : '' }}>Permittance
                                    </option>
                                    <option value="Create Location"
                                        {{ $attendance->category === 'Create Location' ? 'selected' : '' }}>Create
                                        Location</option>
                                    <option value="Plan" {{ $attendance->category === 'Plan' ? 'selected' : '' }}>Plan
                                    </option>
                                    <option value="Attendance Tracking"
                                        {{ $attendance->category === 'Attendance Tracking' ? 'selected' : '' }}>
                                        Attendance Tracking</option>
                                    <option value="new_category"
                                        {{ $attendance->category === 'new_category' ? 'selected' : '' }}>Masukkan Baru
                                    </option>
                                </select>
                            </div>

                            <div class="form-group" id="newCategoryInput"
                                style="{{ $attendance->category === 'new_category' ? 'display: block;' : 'display: none;' }}">
                                <label for="new_category">Kategori Baru</label>
                                <input type="text" class="form-control" id="new_category" name="new_category"
                                    value="{{ $attendance->category === 'new_category' ? $attendance->new_category : '' }}">
                            </div>

                            {{-- basicc --}}
                            <div class="form-group" id="kt_modal_new_address">
                                <label class="col-lg-2 col-form-label required fw-bold fs-6" for="statusbasicc">Status
                                    Basic</label>
                                <select class="form-control" id="statusbasicc" name="statusbasicc" required>
                                    <option value="aktif" {{ $attendance->statusbasicc === 'aktif' ? 'selected' : '' }}>
                                        Aktif</option>
                                    <option value="nonaktif"
                                        {{ $attendance->statusbasicc === 'nonaktif' ? 'selected' : '' }}>Nonaktif
                                    </option>
                                </select>
                            </div>

                            {{-- advancee --}}
                            <div class="form-group" id="kt_modal_new_address">
                                <label class="col-lg-2 col-form-label required fw-bold fs-6" for="statusadvancee">Status
                                    Advance</label>
                                <select class="form-control" id="statusadvancee" name="statusadvancee" required>
                                    <option value="aktif"
                                        {{ $attendance->statusadvancee === 'aktif' ? 'selected' : '' }}>Aktif</option>
                                    <option value="nonaktif"
                                        {{ $attendance->statusadvancee === 'nonaktif' ? 'selected' : '' }}>Nonaktif
                                    </option>
                                </select>
                            </div>

                            {{-- expertt --}}
                            <div class="form-group" id="kt_modal_new_address">
                                <label class="col-lg-2 col-form-label required fw-bold fs-6" for="statusexpertt">Status
                                    Expert</label>
                                <select class="form-control" id="statusexpertt" name="statusexpertt" required>
                                    <option value="aktif"
                                        {{ $attendance->statusexpertt === 'aktif' ? 'selected' : '' }}>Aktif</option>
                                    <option value="nonaktif"
                                        {{ $attendance->statusexpertt === 'nonaktif' ? 'selected' : '' }}>Nonaktif
                                    </option>
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