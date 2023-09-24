@extends('dashboard.admin')

@section('content')
<!--begin::Stepper-->
<div class="stepper bg-white pt-10 pb-10 stepper-pills stepper-column d-flex flex-column flex-lg-row align-items-center justify-content-evenly" id="kt_stepper_example_clickable">
    <!--begin::Nav-->
    <div class="stepper-nav align-items-start flex-wrap mb-10">
        <!--begin::Step 1-->
        <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav" data-kt-stepper-action="step">
            <!--begin::Wrapper-->
            <div class="stepper-wrapper d-flex align-items-center">
                <!--begin::Icon-->
                <div class="stepper-icon w-40px h-40px">
                    <i class="stepper-check fas fa-check"></i>
                    <span class="stepper-number">1</span>
                </div>
                <!--end::Icon-->
    
                <!--begin::Label-->
                <div class="stepper-label">
                    <h3 class="stepper-title">                  
                        Beranda - Top Page Text
                    </h3>
    
                    <div class="stepper-desc">
                        Click to Add
                    </div>
                </div>
                <!--end::Label-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Step 1-->
    
        <!--begin::Step 2-->
        <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav" data-kt-stepper-action="step">
            <!--begin::Wrapper-->
            <div class="stepper-wrapper d-flex align-items-center">
                 <!--begin::Icon-->
                <div class="stepper-icon w-40px h-40px">
                    <i class="stepper-check fas fa-check"></i>
                    <span class="stepper-number">2</span>
                </div>
                <!--begin::Icon-->
    
                <!--begin::Label-->
                <div class="stepper-label">
                    <h3 class="stepper-title">
                        Beranda - Apps Description
                    </h3>
    
                    <div class="stepper-desc">
                        Click to Add
                    </div>
                </div>
                <!--end::Label-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Step 2-->
    
        <!--begin::Step 3-->
        <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav" data-kt-stepper-action="step">
           <!--begin::Wrapper-->
            <div class="stepper-wrapper d-flex align-items-center">
                <!--begin::Icon-->
                <div class="stepper-icon w-40px h-40px">
                    <i class="stepper-check fas fa-check"></i>
                    <span class="stepper-number">3</span>
                </div>
                <!--begin::Icon-->
    
                <!--begin::Label-->
                <div class="stepper-label">
                    <h3 class="stepper-title">                      
                        Beranda - Summary Description
                    </h3>
    
                    <div class="stepper-desc">
                        Click to Add
                    </div>
                </div>
                <!--end::Label-->
            </div>
            <!--end::Wrapper-->
    
        </div>
        <!--end::Step 3-->
    
    </div>
    <!--end::Nav-->
    
        <!--begin::Form-->
        <form class="form w-lg-650px " action="{{route('beranda.store_main')}}" method="POST" id="kt_stepper_example_basic_form">
            <!--begin::Group-->
            @csrf
            <div class="mb-5">
                <!--begin::Step 1-->
                <div class="flex-column current" data-kt-stepper-element="content">
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label">Top Page Text</label>
                        <!--end::Label-->
    
                        <!--begin::Input-->
                        <textarea type="text" id="" maxlength="60" class="limitedForm form-control form-control-solid" name="top_page_text" placeholder="" value=""></textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
    
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label">Top Page Subtext</label>
                        <!--end::Label-->
    
                        <!--begin::Input-->
                        <textarea type="text" id="" maxlength="120" class="limitedForm form-control form-control-solid" name="top_page_subtext" placeholder="" value=""></textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
    
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label">Top Page Description</label>
                        <!--end::Label-->
    
                        <!--begin::Input-->
                        <textarea type="text" id="" maxlength="240" class="limitedForm form-control form-control-solid" name="top_page_desc" placeholder="" value=""></textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--begin::Step 1-->
    
                <!--begin::Step 1-->
                <div class="flex-column" data-kt-stepper-element="content">
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label">Apps Description</label>
                        <!--end::Label-->
    
                        <!--begin::Input-->
                        <textarea type="text" id="" maxlength="240" class="limitedForm form-control form-control-solid" name="apps_desc" placeholder="" value=""></textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
    
                </div>
                <!--begin::Step 1-->
    
                <!--begin::Step 1-->
                <div class="flex-column" data-kt-stepper-element="content">
    
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label">
                            Summary Description
                        </label>
                        <!--end::Label-->
    
                        <!--begin::Input-->
                        <textarea type="text" id="" maxlength="240" class="limitedForm form-control form-control-solid" name="summary_desc" placeholder="" value=""></textarea>
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
                    <a href="{{route('beranda.main')}}" class="btn btn-light btn-active-light-danger">
                        Cancel
                    </a>
                    <button type="button" class="btn btn-light btn-active-light-primary" data-kt-stepper-action="previous">
                        Back
                    </button>
                </div>
                <!--end::Wrapper-->
    
                <!--begin::Wrapper-->
                <div>
                    <button type="submit" class="btn btn-primary" data-kt-stepper-action="submit">
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
