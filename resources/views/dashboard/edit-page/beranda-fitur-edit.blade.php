@extends('dashboard.admin')

@section('content')
<!--begin::Stepper-->
<div class="stepper bg-white pt-10 pb-10 stepper-column d-flex flex-column flex-lg-row align-items-center justify-content-evenly" id="kt_stepper_example_clickable">
  
        <!--begin::Form-->
        <form class="form w-lg-750px " action="{{ route('beranda.update_fitur', ['id' => $datafitur->id]) }}" method="POST" enctype="multipart/form-data" id="kt_stepper_example_basic_form">
            <!--begin::Group-->
            @csrf
            @method('PUT')
            <div class="mb-5">
                <!--begin::Step 1-->
                <div class="flex-column current" data-kt-stepper-element="content">
                    <div class="fv-row mb-10">
                        <h3>Beranda - Fitur Edit</h3>
                    </div>

                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label">Points Title</label>
                        <!--end::Label-->
    
                        <!--begin::Input-->
                        <textarea type="text" id="kt_docs_maxlength_toptext" maxlength="45" class="form-control form-control-solid" name="points_title" placeholder="">{{$datafitur->points_title}}</textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
    
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label">Points Description</label>
                        <!--end::Label-->
    
                        <!--begin::Input-->
                        <textarea type="text" id="kt_docs_maxlength_subtext" maxlength="145" class="form-control form-control-solid" name="points_description" placeholder="">{{$datafitur->points_description}}</textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group for updating image-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label">Points Image</label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="file" class="form-control form-control-solid" name="image" id="image">
                        <!--end::Input-->
                    </div>
                    <!--end::Input group for updating image-->

                    <div class="fv-row mb-10">
                        @if ($datafitur->image_path)
                            <img id="imagePreview" src="{{ asset('storage/' . $datafitur->image_path) }}" alt="Preview" style="max-width: 100px; max-height: 100px; display: block;">
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
                    <a href="{{route('beranda.fitur')}}" class="btn btn-light btn-active-light-danger">
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
