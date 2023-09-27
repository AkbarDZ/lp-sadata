@extends('dashboard.admin')

@section('content')
<!--begin::Stepper-->
<div class="stepper bg-white pt-10 pb-10 stepper-column d-flex flex-column flex-lg-row align-items-center justify-content-evenly" id="kt_stepper_example_clickable">
  
        <!--begin::Form-->
        <form class="form w-lg-750px " action="{{ route('fitur.update2', ['id' => $section2->id]) }}" method="POST" enctype="multipart/form-data" id="kt_stepper_example_basic_form">
            <!--begin::Group-->
            @csrf
            @method('PUT')
            <div class="mb-5">
                <!--begin::Step 1-->
                <div class="flex-column current" data-kt-stepper-element="content">
                    <div class="fv-row mb-10">
                        <h3>Beranda - Feature Section 2 Edit</h3>
                    </div>

                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label">Title: Max (255 Character)</label>
                        <!--end::Label-->
    
                        <!--begin::Input-->
                        <input type="text" name="title_2" class="form-control" value="{{ $section2->title_2 }}">
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
    
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label">Description: Max (255 Character)</label>
                        <!--end::Label-->
    
                        <!--begin::Input-->
                        <textarea name="description_2" class="form-control">{{ $section2->description_2 }}</textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label">Subtitle: Max (255 Character)</label>
                        <!--end::Label-->
    
                        <!--begin::Input-->
                        <textarea name="subtitle_2" class="form-control">{{ $section2->subtitle_2 }}</textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label">Section2_1: Max (255 Character)</label>
                        <!--end::Label-->
    
                        <!--begin::Input-->
                        <textarea name="section2_1" class="form-control">{{ $section2->section2_1 }}</textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label">Section2_2: Max (255 Character)</label>
                        <!--end::Label-->
    
                        <!--begin::Input-->
                        <textarea name="section2_2" class="form-control">{{ $section2->section2_2 }}</textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label">Section2_3: Max (255 Character)</label>
                        <!--end::Label-->
    
                        <!--begin::Input-->
                        <textarea name="section2_3" class="form-control">{{ $section2->section2_3 }}</textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                </div>
                <!--begin::Step 1-->
            </div>
            <!--end::Group-->
    
            <!--begin::Actions-->
            <div class="d-flex flex-stack">
                <!--begin::Wrapper-->
                <div class="me-2">
                    <a href="{{route('fitur.section2')}}" class="btn btn-light btn-active-light-danger">
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
