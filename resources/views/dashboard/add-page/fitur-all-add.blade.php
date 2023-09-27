@extends('dashboard.admin')

@section('content')
<div class="stepper bg-white pt-10 pb-10 stepper-pills stepper-column d-flex flex-column flex-lg-row align-items-start justify-content-evenly" id="kt_stepper_example_clickable">
    <div class="stepper-nav align-items-start flex-wrap mb-10">
        <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav" data-kt-stepper-action="step">
            <div class="stepper-wrapper d-flex align-items-center">
                <div class="stepper-icon w-40px h-40px">
                    <i class="stepper-check fas fa-check"></i>
                    <span class="stepper-number">1</span>
                </div>
                <div class="stepper-label">
                    <h3 class="stepper-title">Feature - Title</h3>
                    <div class="stepper-desc">Click to Add</div>
                </div>
            </div>
        </div>

        <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav" data-kt-stepper-action="step">
            <div class="stepper-wrapper d-flex align-items-center">
                <div class="stepper-icon w-40px h-40px">
                    <i class="stepper-check fas fa-check"></i>
                    <span class="stepper-number">2</span>
                </div>
                <div class="stepper-label">
                    <h3 class="stepper-title">Feature - Section - 2</h3>
                    <div class="stepper-desc">Click to Add</div>
                </div>
            </div>
        </div>

        <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav" data-kt-stepper-action="step">
            <div class="stepper-wrapper d-flex align-items-center">
                <div class="stepper-icon w-40px h-40px">
                    <i class="stepper-check fas fa-check"></i>
                    <span class="stepper-number">3</span>
                </div>
                <div class="stepper-label">
                    <h3 class="stepper-title">Feature - Section - 3</h3>
                    <div class="stepper-desc">Click to Add</div>
                </div>
            </div>
        </div>

        <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav" data-kt-stepper-action="step">
            <div class="stepper-wrapper d-flex align-items-center">
                <div class="stepper-icon w-40px h-40px">
                    <i class="stepper-check fas fa-check"></i>
                    <span class="stepper-number">4</span>
                </div>
                <div class="stepper-label">
                    <h3 class="stepper-title">Feature - Section - 4</h3>
                    <div class="stepper-desc">Click to Add</div>
                </div>
            </div>
        </div>
    </div>

    <form class="form w-lg-650px" action="{{route('fitur.create')}}" method="POST" enctype="multipart/form-data" id="kt_stepper_example_basic_form">
        @csrf
        <div class="mb-5">
            <div class="flex-column current" data-kt-stepper-element="content">
                <div class="fv-row mb-10">
                    <label for="feature_name">Feature Name</label>
                    <input type="text" class="form-control" name="feature_name">
                </div>

                <div class="fv-row mb-10">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>

                <div class="fv-row mb-10">
                    <input type="file" class="form-control form-control-solid" name="image" id="image">
                </div>

                <div class="fv-row mb-10">
                    <img id="imagePreview" src="#" alt="Preview" style="display: none; max-width: 100px; max-height: 100px;">
                </div>

                <div class="alert alert-danger alert-dismissible" id="imageError" style="display: none;">
                    Gambar harus memiliki ukuran 60x60 piksel.
                </div>
            </div>

            <div class="flex-column" data-kt-stepper-element="content">
                <div class="fv-row mb-10">
                    <label for="title_2">Title 2</label>
                    <input type="text" class="form-control" name="title_2">
                </div>

                <div class="fv-row mb-10">
                    <label for="description_2">Description 2</label>
                    <input type="text" class="form-control" name="description_2">
                </div>

                <div class="fv-row mb-10">
                    <label for="subtitle_2">Subtitle 2</label>
                    <input type="text" class="form-control" name="subtitle_2">
                </div>

                <div class="fv-row mb-10">
                    <label for="section2_1">Section 2.1</label>
                    <input type="text" class="form-control" name="section2_1">
                </div>

                <div class="fv-row mb-10">
                    <label for="section2_2">Section 2.2 (Optional)</label>
                    <input type="text" class="form-control" name="section2_2">
                </div>

                <div class="fv-row mb-10">
                    <label for="section2_3">Section 2.3 (Optional)</label>
                    <input type="text" class="form-control" name="section2_3">
                </div>
            </div>

            <div class="flex-column" data-kt-stepper-element="content">
                <div class="fv-row mb-10">
                    <label for="title_3">Title 3</label>
                    <input type="text" class="form-control" name="title_3">
                </div>

                <div class="fv-row mb-10">
                    <label for="description_3">Description 3</label>
                    <input type="text" class="form-control" name="description_3">
                </div>

                <div class="fv-row mb-10">
                    <label for="subtitle_3">Subtitle 3</label>
                    <input type="text" class="form-control" name="subtitle_3">
                </div>

                <div class="fv-row mb-10">
                    <label for="section3_1">Section 3.1</label>
                    <input type="text" class="form-control" name="section3_1">
                </div>

                <div class="fv-row mb-10">
                    <label for="section3_2">Section 3.2 (Opsional)</label>
                    <input type="text" class="form-control" name="section3_2">
                </div>

                <div class="fv-row mb-10">
                    <label for="section3_3">Section 3.3 (Opsional)</label>
                    <input type="text" class="form-control" name="section3_3">
                </div>
            </div>

            <div class="flex-column" data-kt-stepper-element="content">
                <div class="fv-row mb-10">
                    <label for="title_4">Title 4</label>
                    <input type="text" class="form-control" name="title_4">
                </div>

                <div class="fv-row mb-10">
                    <label for="description_4">Description 4</label>
                    <input type="text" class="form-control" name="description_4">
                </div>

                <div class="fv-row mb-10">
                    <label for="titlecard_4_1">Title Card 1</label>
                    <input type="text" class="form-control" name="titlecard_4_1">
                </div>

                <div class="fv-row mb-10">
                    <label for="descriptioncard_4_1">Description Card 1 (Optional)</label>
                    <input type="text" class="form-control" name="descriptioncard_4_1">
                </div>
                <div class="fv-row mb-10">
                    <label for="titlecard_4_2">Title Card 2</label>
                    <input type="text" class="form-control" name="titlecard_4_2">
                </div>

                <div class="fv-row mb-10">
                    <label for="descriptioncard_4_2">Description Card 2 (Optional)</label>
                    <input type="text" class="form-control" name="descriptioncard_4_2">
                </div>
                <div class="fv-row mb-10">
                    <label for="titlecard_4_3">Title Card 3</label>
                    <input type="text" class="form-control" name="titlecard_4_3">
                </div>

                <div class="fv-row mb-10">
                    <label for="descriptioncard_4_3">Description Card 3 (Opsional)</label>
                    <input type="text" class="form-control" name="descriptioncard_4_3">
                </div>

            </div>
        </div>

        <div class="d-flex flex-stack">
            <div class="me-2">
                <a href="{{route('fitur.main')}}" class="btn btn-light btn-active-light-danger">Cancel</a>
                <button type="button" class="btn btn-light btn-active-light-primary" data-kt-stepper-action="previous">Back</button>
            </div>

            <div>
                <button type="submit" class="btn btn-primary" data-kt-stepper-action="submit">
                    <span class="indicator-label">Submit</span>
                    <span class="indicator-progress">Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
