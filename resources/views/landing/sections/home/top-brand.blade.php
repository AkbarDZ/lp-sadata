<div class="container app-hero  app-hero-home d-none d-lg-flex" id="home" {{-- style="background-image: url('http://sadata-web-ui.test/assets/landing/img/top-brand-01.png') !important; background-size: cover !important;" --}}>

	{{-- <div class="d-flex align-items-stretch justify-content-between mb-4">
		<div>
			<div style="margin-top: 50px !important;">
				<h1 class="mb-4 mb-md-0 mb-xl-3"><strong>Patrol Guard</strong> <br> the best patrol system apps</h1>
			</div>
			<div>
				<p class="text-4 mb-5 mb-md-2">Assist you in managing your patrol system, supported with ease to use and integrated mobile apps.</p>
			</div>
			<div style="margin-bottom: 50px !important;">
				<a data-hash data-hash-offset="95" href="#pricing" class="btn btn-primary btn-outline btn-rounded font-weight-semibold text-4 btn-px-5 btn-py-2" style="border-radius: 10px;">GET STARTED NOW</a>
			</div>
		</div>
		<div>
			<img src="{{ asset('assets/landing/img/top-brand-01.png') }}" width="70%" class="img-fluid lazy-load-loaded" alt="" style="position: absolute;
    top: 0;
    right: auto;
    bottom: 0;
    max-width: 100%;
    height: 100%; left: 45%; overflow-clip-margin: content-box;overflow: clip;" />
		</div> --}}
		{{-- <div class="col-lg-6">
			<div class="py-6">
				<h1 class="mb-4 mb-md-0 mb-xl-3"><strong>Patrol Guard</strong> <br> the best patrol system apps</h1>
			</div>
			<div>
				<p class="text-4 mb-5 mb-md-2">Assist you in managing your patrol system, supported with ease to use and integrated mobile apps.</p>
			</div>
			<div>
				<a data-hash data-hash-offset="95" href="#pricing" class="btn btn-primary btn-outline btn-rounded font-weight-semibold text-4 btn-px-5 btn-py-2" style="border-radius: 10px;">GET STARTED NOW</a>
			</div>
		</div>
		<div class="col-lg-6 text-center mr-0">
			<img src="{{ asset('assets/landing/img/top-brand-01.png') }}" class="position-relative img-fluid lazy-load-loaded" alt="" style="top: 0; right: 0;" />

			
		</div> --}}

		{{-- <img src="{{ asset('assets/landing/img/top-brand-01.png') }}" width="70%" class="img-fluid lazy-load-loaded" alt="" style="top: 0; right: 0;" /> --}}

	{{-- </div> --}}

	<div class="app-hero-wrapper d-flex justify-content-center align-items-stretch py-5 py-lg-20 me-lg-n20">
		<!--begin::Hero container-->
		{{-- <div class="d-flex flex-column justify-content-center py-5 py-lg-10 ">
			<!--begin::Title-->
			<h1 class="text-dark fs-3x fw-bolder letter-spacing">
				The World’s #1
			</h1>
			<!--end::Title-->

			<!--begin::Subtitle-->
			<h3 class="d-flex text-dark fs-2hx fw-bold letter-spacing">
				Dashboard 	
				<span class="ms-3 d-inline-flex position-relative">
					<span class="px-1">Since 2013</span>
					<img class="w-100 position-absolute bottom-0 mb-n2" src="/metronic/assets/media/misc/hero-home-title-underline.svg" alt="">
				</span>
			</h3>
			<!--end::Subtitle-->

			<!--begin::Description-->
			<p class="text-gray-600 fs-4 lh-2 fw-semibold py-5 py-lg-8">
				A single core framework and long term tool built<br>
				on top of Bootstrap 5 for delivering limitless highly<br>
				customized projects
			</p>
			<!--end::Description-->

			
		</div> --}}
		<!--end::Hero container-->
	@if($datamain)
		<div class="d-flex flex-column top-brand-text-container">
			<div class="top-brand-height">
				<div class="d-flex">
					<h1 class="mb-4 mb-md-0"><strong style="font-size: 48px !important; letter-spacing: 2px;">{{$datamain-> top_page_text}}</strong></h1>
				</div>
				<div class="d-flex">
					<h1 class="mb-4 mb-md-0 mb-xl-2">{{$datamain-> top_page_subtext}}</h1>
				</div>
				<div class="mb-4 mt-4">
					<div style="max-width: 400px; text-align:justify" class="text-4 d-flex flex-wrap mb-0">{{$datamain-> top_page_desc}}</div>

				</div>
				<div class="mb-lg-0 mb-8">
					<a data-hash data-hash-offset="95" href="#pricing" class="btn btn-primary btn-outline btn-rounded font-weight-semibold text-4 btn-px-5 btn-py-2" style="border-radius: 10px; margin-top: 20px;">Pelajari lebih lanjut <i class="fa fa-arrow-circle-right" style="margin-left: 3px; font-size: 14px !important;"></i></a>
				</div>
			</div>
		</div>
	@else
		<div class="d-flex flex-column top-brand-text-container">
			<div class="top-brand-height">
				<div class="d-flex">
					<h1 class="mb-4 mb-md-0"><strong style="font-size: 48px !important; letter-spacing: 2px;">Lorem.</strong></h1>
				</div>
				<div class="d-flex">
					<h1 class="mb-4 mb-md-0 mb-xl-2">Lorem, ipsum dolor.</h1>
				</div>
				<div class="mb-4 mt-4">
					<div style="max-width: 400px; text-align:justify" class="text-4 d-flex flex-wrap mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, dolore!</div>

				</div>
				<div class="mb-lg-0 mb-8">
					<a data-hash data-hash-offset="95" href="#pricing" class="btn btn-primary btn-outline btn-rounded font-weight-semibold text-4 btn-px-5 btn-py-2" style="border-radius: 10px; margin-top: 20px;">Pelajari lebih lanjut <i class="fa fa-arrow-circle-right" style="margin-left: 3px; font-size: 14px !important;"></i></a>
				</div>
			</div>
		</div>
	@endif

		{{-- <img src="https://keenthemes.com/metronic/assets/media/misc/hero-visuals.png" class="app-hero-img" alt=""> --}}
		<img src="{{ asset('assets/landing/img/top-brand-01.png') }}" class="app-hero-img" alt="">
	</div>
	
</div>

<div class="container pt-4 d-lg-none d-block text-center">
	<img src="{{ asset('assets/landing/img/top-brand-02.png') }}" width="70%" alt="">	
</div>

<div class="container position-relative pt-2 pb-4 d-lg-none d-flex" id="home">
	<div class="row">
			
	@if($datamain)
		<div class="col-lg-12 text-center ">
			<h1 class="mb-2 mb-md-0"><strong style="font-size: 48px !important; letter-spacing: 2px;">{{$datamain-> top_page_text}}</strong></h1>
		</div>
		<div class="col-lg-12 text-center ">
			<h1 class="mb-2 mb-md-0 mb-xl-2">{{$datamain-> top_page_subtext}}</h1>
		</div>
		<div class="col-lg-12 text-center mb-4 mt-4">
			<div class="text-4 mb-0">{{$datamain-> top_page_desc}}</div>
		</div>
		<div class="col-lg-12 text-center mb-lg-0 mb-8">
			<a data-hash data-hash-offset="95" href="#pricing" class="btn btn-primary btn-outline btn-rounded font-weight-semibold text-4 btn-px-5 btn-py-2" style="border-radius: 10px; margin-top: 20px;">Pelajari lebih lanjut <i class="fa fa-arrow-circle-right" style="margin-left: 3px; font-size: 14px !important;"></i></a>
		</div>
	@else
		<div class="col-lg-12 text-center ">
			<h1 class="mb-2 mb-md-0"><strong style="font-size: 48px !important; letter-spacing: 2px;">Lorem.</strong></h1>
		</div>
		<div class="col-lg-12 text-center ">
			<h1 class="mb-2 mb-md-0 mb-xl-2">Lorem, ipsum dolor.</h1>
		</div>
		<div class="col-lg-12 text-center mb-4 mt-4">
			<div style="text-align: justify" class="text-4 mb-0">Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi illum harum dicta blanditiis ad!</div>
		</div>
		<div class="col-lg-12 text-center mb-lg-0 mb-8">
			<a data-hash data-hash-offset="95" href="#pricing" class="btn btn-primary btn-outline btn-rounded font-weight-semibold text-4 btn-px-5 btn-py-2" style="border-radius: 10px; margin-top: 20px;">Pelajari lebih lanjut <i class="fa fa-arrow-circle-right" style="margin-left: 3px; font-size: 14px !important;"></i></a>
		</div>
	@endif						
	</div>

</div>


