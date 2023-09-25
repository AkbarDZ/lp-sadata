<section id="about" class="section bg-color-light border-0 m-0 pb-0 section-about">				
	<div class="container">
		<div class="row mb-0 pb-lg-3 counters">
			
			<div class="col-lg-10 text-center offset-lg-1 pb-5 justify-content-start">
				<h2 class="font-weight-bold text-9 mb-0" style="letter-spacing: 1px;">Sadata Apps</h2>
				{{-- <h1 class="mb-4 mb-md-0"><strong style="font-size: 36px !important; letter-spacing: 2px;">SADATA</strong></h1> --}}
				<p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4">APPS <span class="highlighted-word alternative-font-4 font-weight-semibold line-height-2 pb-2">DESCRIPTION</span></p>
				@if ($datamain)
				<p class="mb-0" >
					{{$datamain -> apps_desc}}
				</p>	
				@else
				<p class="mb-0" >
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>	
				@endif
			</div>
			@if (count($dataapps) >= 3)
			<div class="row text-center w-100 text-lg-left pt-3 pl-lg-5">
				@foreach ($dataapps as $item)
					<div class="col-12 col-lg-4 mb-4">
						<div class="row justify-content-center justify-content-lg-start">
							<div class="col-4">
								<img class="img-fluid mb-4 lazy-load-loaded" src="{{ asset('assets/landing/img/apple-touch-icon.png') }}" alt="">
							</div>
							<div class="col-lg-8">
								<h2 class="font-weight-bold text-4 line-height-5 mb-1">{{$item -> features_title}}</h2>
								<p class="mb-0">{{$item -> features_description}}</p>
							</div>
						</div>
					</div>	
				@endforeach	
			</div>	
			@elseif (count($dataapps) <= 2 && count($dataapps) > 0)	
			<div class="row text-center w-100 justify-content-around text-lg-left pt-3 pl-lg-5">
				@foreach ($dataapps as $item)
					<div class="col-12 col-lg-4 mb-4 mb-md-0">
						<div class="row justify-content-center justify-content-lg-start">
							<div class="col-4">
								<img class="img-fluid mb-4 lazy-load-loaded" src="{{ asset('assets/landing/img/apple-touch-icon.png') }}" alt="">
							</div>
							<div class="col-lg-8">
								<h2 class="font-weight-bold text-4 line-height-5 mb-1">{{$item -> features_title}}</h2>
								<p class="mb-0" style="text-align: justify">{{$item -> features_description}}</p>
							</div>
						</div>
					</div>	
				@endforeach	
			</div>	
			@elseif (count($dataapps) == 0)
			<div class="row text-center text-lg-left pt-3 pl-lg-5">
				@for ($i = 1; $i <= 3; $i++)
				<div class="col-12 col-lg-4 mb-4 mb-md-0">
					<div class="row justify-content-center justify-content-lg-start">
						<div class="col-4">
							<img class="img-fluid mb-4 lazy-load-loaded" src="{{ asset('assets/landing/img/apple-touch-icon.png') }}" alt="">
						</div>
						<div class="col-lg-8">
							<h2 class="font-weight-bold text-4 line-height-5 mb-1">Fitur #{{ $i }}</h2>
							<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</div>
				@endfor
			</div>
			@endif
		</div>						
	</div>
</section>