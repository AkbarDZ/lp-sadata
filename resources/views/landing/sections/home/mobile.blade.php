

				{{-- <div class="landing-curve landing-dark-color">
					<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
				</div> --}}

				<div class="container" id="mobile-support">
					<div class="row mb-4 pb-lg-2 counters pt-lg-5">
						<div class="col-lg-10 text-center offset-lg-1">
							<h2 class="font-weight-bold text-9 mb-0" style="letter-spacing: 1px;">Mobile Apps</h2>
										<p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4">SHORT DESCRIPTION</span></p>
							{{-- <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> --}}
						</div>						
					</div>
				</div>
				
				
				<div class="landing-curve landing-dark-color" style="position: relative;">
					{{-- <svg style="background: #1E2D7D;" viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg> --}}
				{{-- 	<svg style="background: #1E2D7D; color: #FFF;" viewBox="15 13 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 40.3476 586.282 40.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg> --}}
					<svg style="color: white; background: #002146; position: relative; top: 0; display: block;" viewBox="15 12 1470 58" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 50.3476 586.282 50.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
					{{-- <svg style="color: #002146; position: relative; top: 0; display: block;" viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg> --}}
				</div>
				
				<section class="border-0 m-0 position-relative overflow-visible pt-0 py-4" style="background: #002146;">
				
				
					<div class="container">
					@if (count($datamobile) > 0)
					@foreach ($datamobile as $key => $item)
						@if ($key === 0)
							<div class="row justify-content-center d-none d-lg-block" style="margin-top: 80px !important;"></div>
						@endif
						@if ($key % 2 == 0)
							<div class="row pb-5 justify-content-center">
								<div class="col-lg-5 text-center pb-3">
									{{-- <img src="{{ asset('assets/landing/assets/img/feature-01.png') }}" width="70%" alt class="img-fluid lazy-load-loaded d-lg-inline d-none" style="position: relative; top: -30% !important;" /> --}}
									<img src="{{ asset('assets/landing/sections/home/mobile/hp 1 revisi.png') }}" class="lazy-load-loaded d-lg-inline d-none img-mobile-a"/>
				
									{{-- <img src="{{ asset('assets/landing/sections/home/mobile/lingkaran 1.png') }}" style="width: 90%; position: absolute;" class="img-fluid lazy-load-loaded d-lg-inline d-none"> --}}
				
									{{-- <img src="{{ asset('assets/landing/sections/home/mobile/dot 2.png') }}" style="width: 40%; position: absolute; left: 30%;" class="img-fluid lazy-load-loaded d-lg-inline d-none"> --}}
				
								</div>
								<div class="col-10 col-lg-5 text-center text-lg-left mt-lg-5 mt-3">
									{{-- <div class="d-none d-lg-flex" style="margin-top: 75px;"></div> --}}
				
									<h2 class="custom-bar _left font-weight-semibold" style="color: white; letter-spacing: 2px;">{{$item -> mobiles_title}}</h2>
				
									<img src="{{ asset('assets/landing/sections/home/mobile/hp 1 revisi.png') }}" alt class="img-fluid lazy-load-loaded pt-0 pb-4 d-inline d-lg-none img-mobile-c"/>
				
									<p class="mb-5" style="color: #cecece;">{{$item -> mobiles_description}}</p>
									<a href="#download" data-hash data-hash-offset="95" class="btn btn-modern btn-rounded btn-primary mb-4 mb-lg-2 pr-4 pl-4">Documentation</a>
								</div>
								<div class="col-lg-2"></div>
							</div>	
						@else
							<div class="row justify-content-center pb-5">
								<div class="col-md-10 col-lg-5 order-2 order-lg-1 text-center text-lg-right" style="margin-left: 30px;">
									<h2 class="custom-bar _left font-weight-semibold" style="color: white; letter-spacing: 2px;">{{$item -> mobiles_title}}</h2>
				
									<img src="{{ asset('assets/landing/sections/home/mobile/hp 2.png') }}" alt class="img-fluid lazy-load-loaded pt-0 pb-4 d-inline d-lg-none img-mobile-c"/>
				
									<p class="mb-5" style="color: #cecece;">{{$item -> mobiles_description}}</p>
									<a href="#download" data-hash data-hash-offset="95" class="btn btn-modern btn-rounded btn-primary mb-2 pr-4 pl-4">Documentation</a>
								</div>
								<div class="col-lg-5 order-1 order-lg-2 text-center pb-3">
									<img src="{{ asset('assets/landing/sections/home/mobile/hp 2.png') }}" class=" lazy-load-loaded d-lg-inline d-none img-mobile-b" />
								</div>
								<div class="col-lg-1"></div>
				
							</div>
						@endif
				
						@if ($key < count($datamobile) - 1)
							<div class="row justify-content-center d-none d-lg-block" style="margin-bottom: 100px !important;"></div>
							@endif
				
						@if ($key === count($datamobile) - 1)
							<div class="row justify-content-center d-none d-lg-block" style="margin-bottom: 80px !important;"></div>
						@endif
					@endforeach
					@else
						<div class="row pb-3 justify-content-center">
							<div class="col-lg-5 text-center pb-3">
								{{-- <img src="{{ asset('assets/landing/assets/img/feature-01.png') }}" width="70%" alt class="img-fluid lazy-load-loaded d-lg-inline d-none" style="position: relative; top: -30% !important;" /> --}}
								<img src="{{ asset('assets/landing/sections/home/mobile/hp 1 revisi.png') }}" class="lazy-load-loaded d-lg-inline d-none img-mobile-a"/>
				
								{{-- <img src="{{ asset('assets/landing/sections/home/mobile/lingkaran 1.png') }}" style="width: 90%; position: absolute;" class="img-fluid lazy-load-loaded d-lg-inline d-none"> --}}
				
								{{-- <img src="{{ asset('assets/landing/sections/home/mobile/dot 2.png') }}" style="width: 40%; position: absolute; left: 30%;" class="img-fluid lazy-load-loaded d-lg-inline d-none"> --}}
				
							</div>
							<div class="col-10 col-lg-5 text-center text-lg-left mt-lg-5 mt-3">
								{{-- <div class="d-none d-lg-flex" style="margin-top: 75px;"></div> --}}
				
								<h2 class="custom-bar _left font-weight-semibold" style="color: white; letter-spacing: 2px;">Fitur Mobile #1</h2>
				
								<img src="{{ asset('assets/landing/sections/home/mobile/hp 1 revisi.png') }}" alt class="img-fluid lazy-load-loaded pt-0 pb-4 d-inline d-lg-none img-mobile-c"/>
				
								<p class="mb-5" style="color: #cecece;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								<a href="#download" data-hash data-hash-offset="95" class="btn btn-modern btn-rounded btn-primary mb-4 mb-lg-2 pr-4 pl-4">Documentation</a>
							</div>
							<div class="col-lg-2"></div>
						</div>	
				
						<div class="row justify-content-center d-none d-lg-block" style="margin-top: 80px !important;"></div>
				
						<div class="row justify-content-center pb-5 ">
							<div class="col-md-10 col-lg-5 order-2 order-lg-1 text-center text-lg-right" style="margin-left: 30px;">
								<h2 class="custom-bar _left font-weight-semibold" style="color: white; letter-spacing: 2px;">Fitur Mobile #2</h2>
				
								<img src="{{ asset('assets/landing/sections/home/mobile/hp 2.png') }}" alt class="img-fluid lazy-load-loaded pt-0 pb-4 d-inline d-lg-none img-mobile-c"/>
				
								<p class="mb-5" style="color: #cecece;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								<a href="#download" data-hash data-hash-offset="95" class="btn btn-modern btn-rounded btn-primary mb-2 pr-4 pl-4">Documentation</a>
							</div>
							<div class="col-lg-5 order-1 order-lg-2 text-center pb-3">
								<img src="{{ asset('assets/landing/sections/home/mobile/hp 2.png') }}" class=" lazy-load-loaded d-lg-inline d-none img-mobile-b" />
							</div>
							<div class="col-lg-1"></div>
				
						</div>
				
						<div class="row justify-content-center pb-3"></div>
				
					@endif
					</div>
					
				</section>
				
				<div class="landing-curve landing-dark-color" style="position: relative;">
					{{-- <svg style="background: #1E2D7D;" viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg> --}}
				{{-- 	<svg style="background: #1E2D7D; color: #FFF;" viewBox="15 13 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 40.3476 586.282 40.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg> --}}
					{{-- <svg style="color: white; background: #002146; position: relative; top: 0; display: block;" viewBox="15 12 1470 58" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 50.3476 586.282 50.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg> --}}
					<svg style="color: white; background: #002146; position: relative; top: 0; display: block;" viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
				</div>
				