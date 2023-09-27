@if ($fitur)
<section class="section section-no-border section-angled bg-light pb-0 pt-2">
    <div class="container container-feature pb-0 mb-0">
        <div class="row align-items-center mb-5 text-center text-lg-left">

            <div class="col-lg-10 text-center offset-lg-1 pb-lg-5 pb-4 justify-content-start">
                <h2 class="font-weight-bold text-9 mb-3" style="letter-spacing: 0px;">{{ $fitur->fitur_section_2->title_2 }}
                </h2>
                {{-- <h1 class="mb-4 mb-md-0"><strong style="font-size: 36px !important; letter-spacing: 2px;">SADATA</strong></h1> --}}
                <p class="mb-0">{{ $fitur->fitur_section_2->description_2 }}
            </div>


            <div class="col-lg-5 col-md-12 col-sm-12 text-center d-block d-lg-none">
                <div class="pb-1 mb-1">
                    <div class="">
                        <img src="{{ asset('assets/landing/assets/img/header-item-2.png') }}" width="80%"
                            class="img-fluid lazy-load-loaded" alt="">
                    </div>
                </div>
            </div>

            <div class="row mt-4">

                <div class="col-lg-5 col-md-12 col-sm-12 text-center d-none d-lg-block">
                    <div class="">
                        <div class="">
                            <img src="{{ asset('assets/landing/assets/img/header-item-2.png') }}" width="80%"
                                class="img-fluid lazy-load-loaded" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="d-none d-lg-block pb-2">
                        <h2 class="font-weight-bold text-8 mb-3" style="letter-spacing: 0px;">
                            {{ $fitur->fitur_section_2->subtitle_2 }}</h2>
                        {{-- <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4">SHORT DESCRIPTION</span></p> --}}
                        {{-- <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>	 --}}
                    </div>


                    <div class="d-flex justify-content-lg-start justify-content-center align-items-start  mb-3">
                        <i class="fa fa-check text-white bg-primary rounded-circle box-shadow-4 mr-3"
                            style="font-size: 10px !important; padding: 6px !important; margin-top: 2px !important;"></i>
                        <p class="mb-0"><b class="text-color-dark">Benefit #1</b> {{ $fitur->fitur_section_2->section2_1 }}</p>
                    </div>

                    <div class="d-flex justify-content-lg-start justify-content-center align-items-start  mb-3">
                        <i class="fa fa-check text-white bg-primary rounded-circle box-shadow-4 mr-3"
                            style="font-size: 10px !important; padding: 6px !important; margin-top: 2px !important;"></i>
                        <p class="mb-0"><b class="text-color-dark">Benefit #2</b> {{ $fitur->fitur_section_2->section2_2 }}</p>
                    </div>
                    <div class="d-flex justify-content-lg-start justify-content-center align-items-start  mb-3">
                        <i class="fa fa-check text-white bg-primary rounded-circle box-shadow-4 mr-3"
                            style="font-size: 10px !important; padding: 6px !important; margin-top: 2px !important;"></i>
                        <p class="mb-0"><b class="text-color-dark">Benefit #3</b> {{ $fitur->fitur_section_2->section2_3 }}</p>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>


<section class="section section-no-border section-angled bg-light pb-0 pt-2"
    style="background-image: url('{{ asset('assets/landing/assets/img//feature-back2.png') }}'); background-size: 100%; background-repeat: no-repeat; background-position: top;">
    <div class="container container-feature pb-0 mb-0">
        <div class="row align-items-center mb-5 text-center text-lg-left">

            <div class="col-lg-10 text-center offset-lg-1 mt-5 pt-lg-5 pt-0 pb-lg-5 pb-4 justify-content-start">
                <h2 class="font-weight-bold text-9 mb-3" style="letter-spacing: 0px;">{{ $fitur->fitur_section_3->title_3 }}
                </h2>
                {{-- <h1 class="mb-4 mb-md-0"><strong style="font-size: 36px !important; letter-spacing: 2px;">SADATA</strong></h1> --}}
                <p class="mb-0">{{ $fitur->fitur_section_3->description_3 }}</p>
            </div>

            <div class="col-lg-5 col-md-12 col-sm-12 text-center d-block d-lg-none">
                <div class="pb-1 mb-1">
                    <div class="">
                        <img src="{{ asset('assets/landing/assets/img/header-item.png') }}" width="80%"
                            class="img-fluid lazy-load-loaded" alt="">
                    </div>
                </div>
            </div>

            <div class="row mt-4">

                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="d-none d-lg-block pb-2">
                        <h2 class="font-weight-bold text-8 mb-3" style="letter-spacing: 0px;">
                            {{ $fitur->fitur_section_3->subtitle_3 }}</h2>
                        {{-- <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4">SHORT DESCRIPTION</span></p> --}}
                        {{-- <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>	 --}}
                    </div>


                    <table>
                        <td>

                        </td>
                    </table>
                    <div class="d-flex justify-content-lg-start justify-content-center align-items-start  mb-3">
                        <i class="fa fa-check text-white bg-primary rounded-circle box-shadow-4 mr-3"
                            style="font-size: 10px !important; padding: 6px !important; margin-top: 2px !important;"></i>
                        <p class="mb-0"><b class="text-color-dark"> {{ $fitur->fitur_section_3->section3_1 }}</b></p>
                    </div>

                    <div class="d-flex justify-content-lg-start justify-content-center align-items-start  mb-3">
                        <i class="fa fa-check text-white bg-primary rounded-circle box-shadow-4 mr-3"
                            style="font-size: 10px !important; padding: 6px !important; margin-top: 2px !important;"></i>
                        <p class="mb-0"><b class="text-color-dark"> {{ $fitur->fitur_section_3->section3_1 }}</b></p>
                    </div>
                    <div class="d-flex justify-content-lg-start justify-content-center align-items-start  mb-3">
                        <i class="fa fa-check text-white bg-primary rounded-circle box-shadow-4 mr-3"
                            style="font-size: 10px !important; padding: 6px !important; margin-top: 2px !important;"></i>
                        <p class="mb-0"><b class="text-color-dark"> {{ $fitur->fitur_section_3->section3_1 }}</b></p>
                    </div>

                </div>

                <div class="col-lg-5 col-md-12 col-sm-12 text-center d-none d-lg-block">
                    <div class="">
                        <div class="">
                            <img src="{{ asset('assets/landing/assets/img/header-item.png') }}" width="80%"
                                class="img-fluid lazy-load-loaded" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endif
