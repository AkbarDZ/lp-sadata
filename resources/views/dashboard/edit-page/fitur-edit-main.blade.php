@extends('dashboard.admin')

@section('content')
<!--begin::Stepper-->
<div class="stepper bg-white pt-10 pb-10 stepper-column d-flex flex-column flex-lg-row align-items-center justify-content-evenly" id="kt_stepper_example_clickable">
  
        <!--begin::Form-->
        <form class="form w-lg-750px " action="{{ route('fitur.update', ['id' => $fitur->id]) }}" method="POST" enctype="multipart/form-data" id="kt_stepper_example_basic_form">
            <!--begin::Group-->
            @csrf
            @method('PUT')
            <div class="mb-5">
                <!--begin::Step 1-->
                <div class="flex-column current" data-kt-stepper-element="content">
                    <div class="fv-row mb-10">
                        <h3>Beranda - Feature Main Edit</h3>
                    </div>

                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label">Title: Max (255 Character)</label>
                        <!--end::Label-->
    
                        <!--begin::Input-->
                        <input type="text" name="feature_name" class="form-control" value="{{ $fitur->feature_name }}">
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
    
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label">Description: Max (255 Character)</label>
                        <!--end::Label-->
    
                        <!--begin::Input-->
                        <textarea name="description" class="form-control">{{ $fitur->description }}</textarea>                        
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-10 d-none">
                        <!--begin::Label-->
                        <label class="form-label">Description: Max (255 Character)</label>
                        <!--end::Label-->
    
                        <!--begin::Input-->
                        <textarea name="section2_id" class="form-control">{{ $fitur->section2_id }}</textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-10 d-none">
                        <!--begin::Label-->
                        <label class="form-label">Description: Max (255 Character)</label>
                        <!--end::Label-->
    
                        <!--begin::Input-->
                        <textarea name="section3_id" class="form-control">{{ $fitur->section3_id }}</textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-10 d-none">
                        <!--begin::Label-->
                        <label class="form-label">Description: Max (255 Character)</label>
                        <!--end::Label-->
    
                        <!--begin::Input-->
                        <textarea name="section4_id" class="form-control">{{ $fitur->section4_id }}</textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group for updating image-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label">Feature Image</label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="file" class="form-control form-control-solid" name="image" id="image">
                        <!--end::Input-->
                    </div>
                    <!--end::Input group for updating image-->

                    <div class="fv-row mb-10">
                        @if ($fitur->feature_image_path)
                            <img id="imagePreview" src="{{ asset('storage/' . $fitur->feature_image_path) }}" alt="Preview" style="max-width: 100px; max-height: 100px; display: block;">
                        @else
                            <img id="imagePreview" src="#" alt="Preview" style="max-width: 100px; max-height: 100px; display: none;">
                        @endif
                    </div>

                    <div class="alert alert-danger alert-dismissible" id="imageError" style="display: none;">
                        Gambar harus memiliki ukuran 512x512 piksel.
                    </div>
                </div>
                <!--begin::Step 1-->
            </div>
            <!--end::Group-->
    
            <!--begin::Actions-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="me-2">
                    <a href="{{route('fitur.main')}}" class="btn btn-light btn-active-light-danger">
                        Cancel
                    </a>
                    <button type="button" class="btn btn-light btn-active-light-primary" data-kt-stepper-action="previous">
                        Back
                    </button>
                </div>
                <!--end::Wrapper-->
    
                <!--begin::Wrapper-->
                <div>
                    <button type="submit" class="btn btn-primary">
                        <span class="indicator-label">
                            Submit
                        </span>
                        <span class="indicator-progress">
                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Actions-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Stepper-->
@endsection
