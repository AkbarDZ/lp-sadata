@extends('dashboard.admin')

@section('content')
<!--begin::Stepper-->
<div class="stepper bg-white pt-10 pb-10 stepper-column d-flex flex-column flex-lg-row align-items-center justify-content-evenly" id="kt_stepper_example_clickable">
  
        <!--begin::Form-->
        <form class="form w-lg-750px " action="" method="POST" enctype="multipart/form-data" id="kt_stepper_example_basic_form">
            <!--begin::Group-->
            @csrf
            @method('PUT')
            <div class="mb-5">
                <!--begin::Step 1-->
                <div class="flex-column current" data-kt-stepper-element="content">
                    <div class="fv-row mb-10">
                        <h3>Beranda - Feature Section 4 Edit</h3>
                    </div>

                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label">Title: Max (255 Character)</label>
                        <!--end::Label-->
    
                        <!--begin::Input-->
                        <input type="text" name="title_4" class="form-control" value="{{ $section4->title_4 }}">
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
    
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label">Description: Max (255 Character)</label>
                        <!--end::Label-->
    
                        <!--begin::Input-->
                        <textarea name="description_4" class="form-control">{{ $section4->description_4 }}</textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label">Title Card 1: Maks (255 Character)</label>
                        <!--end::Label-->
    
                        <!--begin::Input-->
                        <textarea name="titlecard_4_1" class="form-control">{{ $section4->titlecard_4_1 }}</textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label">Description Card 1: Maks (255 Character)</label>
                        <!--end::Label-->
    
                        <!--begin::Input-->
                        <textarea name="descriptioncard_4_1" class="form-control">{{ $section4->descriptioncard_4_1 }}</textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label">Title Card 2: Maks (255 Character)</label>
                        <!--end::Label-->
    
                        <!--begin::Input-->
                        <textarea name="titlecard_4_2" class="form-control">{{ $section4->titlecard_4_2 }}</textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label">Description Card 2: Maks (255 Character)</label>
                        <!--end::Label-->
    
                        <!--begin::Input-->
                        <textarea name="descriptioncard_4_2" class="form-control">{{ $section4->descriptioncard_4_2 }}</textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label">Title Card 3: Maks (255 Character)</label>
                        <!--end::Label-->
    
                        <!--begin::Input-->
                        <textarea name="titlecard_4_3" class="form-control">{{ $section4->titlecard_4_3 }}</textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label">Description Card 3: Maks (255 Character)</label>
                        <!--end::Label-->
    
                        <!--begin::Input-->
                        <textarea name="descriptioncard_4_3" class="form-control">{{ $section4->descriptioncard_4_3 }}</textarea>
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
                    <a href="{{route('fitur.section4')}}" class="btn btn-light btn-active-light-danger">
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
