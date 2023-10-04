@extends('dashboard.admin')

@section('content')
<form method="POST" action="{{ route('fitur.update', ['id' => $fitur->id]) }}" enctype="multipart/form-data">

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
                            <h3 class="fw-bolder m-0">Feature - Main Edit</h3>
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
                                    <label class="col-lg-1 col-form-label fw-bold fs-6" for="feature_name">Title</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-14 fv-row">
                                        <textarea type="text" maxlength="255"
                                            class="form-control form-control-solid limitedForm" name="feature_name"
                                        >{{ $fitur->feature_name }}</textarea>
                                    </div>
                                    <!--end::Col-->
                                </div>

                                <div class="colum mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 col-form-label fw-bold fs-6" for="description">
                                        Description</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-14 fv-row">
                                        <textarea type="text" maxlength="180"
                                            class="form-control form-control-solid limitedForm"
                                            name="description">{{ $fitur->description }}</textarea>
                                    </div>
                                    <!--end::Col-->
                                </div>

                                <div class="fv-row mb-10 d-none">
                                    <!--begin::Label-->
                                    <!--end::Label-->
                
                                    <!--begin::Input-->
                                    <textarea name="section2_id" class="form-control">{{ $fitur->section2_id }}</textarea>
                                    <!--end::Input-->
                                </div>

                                <div class="fv-row mb-10 d-none">
                                    <!--begin::Label-->
                                    <!--end::Label-->
                
                                    <!--begin::Input-->
                                    <textarea name="section3_id" class="form-control">{{ $fitur->section3_id }}</textarea>
                                    <!--end::Input-->
                                </div>

                                <div class="fv-row mb-10 d-none">
                                    <!--begin::Label-->
                                    <!--end::Label-->
                
                                    <!--begin::Input-->
                                    <textarea name="section4_id" class="form-control">{{ $fitur->section4_id }}</textarea>
                                    <!--end::Input-->
                                </div>

                                <div class="colum mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-2 col-form-label fw-bold fs-6" for="image">Feature Image</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-14 fv-row mb-10">
                                        <input type="file" class="form-control form-control-solid" name="image" id="image">
                                    </div>
                                    <div class="fv-row">
                                        @if ($fitur->feature_image_path)
                                            <img id="imagePreview" src="{{ asset('storage/' . $fitur->feature_image_path) }}" alt="Preview" style="max-width: 100px; max-height: 100px; display: block;">
                                        @else
                                            <img id="imagePreview" src="#" alt="Preview" style="max-width: 100px; max-height: 100px; display: none;">
                                        @endif
                                    </div>
                                    <!--end::Col-->
                                </div>

                            </div>
                            <!--end::Card body-->
                            <!--begin::Actions-->
                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <a href="{{route('fitur.main')}}" class="btn btn-light btn-active-light-danger me-2">
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

<script>
    $(document).ready(function () {
        $('#image').on('change', function () {
            var input = this;
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imagePreview').attr('src', e.target.result);
                $('#imagePreview').show();
            };

            reader.readAsDataURL(input.files[0]);
        });
    });

</script>

@endsection
