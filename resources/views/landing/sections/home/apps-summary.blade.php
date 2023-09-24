<section class="section section-no-border section-angled bg-light pb-0" style="margin-top: 30px !important; margin-bottom: 10px; padding-bottom: 0px !important;">
	<div class="container pb-0 mb-0">
		<div class="row align-items-center mb-1 text-center text-lg-left">

			<div class="col-12 d-block d-lg-none">				
				<h2 class="font-weight-bold text-9 mb-0" style="letter-spacing: 2px;">Apps Summary</h2>
				<p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4">SHORT DESCRIPTION</span></p>
				@if($datamain)
				<p class="mb-0">{{$datamain -> summary_desc}}</p>	
				@else
				<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>	
				@endif
			</div>

			<div class="col-lg-5 col-md-12 col-sm-12 text-center d-block d-lg-none">		
				<div class="p-5 mt-lg-5 mb-1">
					<div class="strong-shadow rounded strong-shadow-top-right">
						<img src="{{ asset('assets/landing/assets/img/header-item.png') }}" class="img-fluid border border-width-10 border-color-light rounded box-shadow-3 lazy-load-loaded" alt="">
					</div>
				</div>
			</div>
			<div class="col-lg-7 col-md-12 col-sm-12">
				<div class="d-none d-lg-block">				
					<h2 class="font-weight-bold text-9 mb-0" style="letter-spacing: 2px;">Apps Summary</h2>
					<p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4">SHORT DESCRIPTION</span></p>
					@if($datamain)
					<p class="mb-4">{{$datamain -> summary_desc}}</p>	
					@else
					<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>	
					@endif
				</div>

			@if(count($datasummary) > 0)
				@foreach ($datasummary as $item)
				<div class="d-flex justify-content-lg-start justify-content-center align-items-start border border-top-0 border-right-0 border-left-0 pb-3 mb-3">
					<i class="fa fa-check text-white bg-primary rounded-circle box-shadow-4 mr-3" style="font-size: 10px !important; padding: 6px !important; margin-top: 2px !important;"></i>
					<p class="mb-0"><b class="text-color-dark">{{$item->benefits_title}}</b>{{$item->benefits_description}}</p>
				</div>
				@endforeach
			@else
				<div class="d-flex justify-content-lg-start justify-content-center align-items-start border border-top-0 border-right-0 border-left-0 pb-3 mb-3">
					<i class="fa fa-check text-white bg-primary rounded-circle box-shadow-4 mr-3" style="font-size: 10px !important; padding: 6px !important; margin-top: 2px !important;"></i>
					<p class="mb-0"><b class="text-color-dark">Benefit #1</b> lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>

				<div class="d-flex justify-content-lg-start justify-content-center align-items-start border border-top-0 border-right-0 border-left-0 pb-3 mb-3">
					<i class="fa fa-check text-white bg-primary rounded-circle box-shadow-4 mr-3" style="font-size: 10px !important; padding: 6px !important; margin-top: 2px !important;"></i>
					<p class="mb-0"><b class="text-color-dark">Benefit #2</b> lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div><div class="d-flex justify-content-lg-start justify-content-center align-items-start border border-top-0 border-right-0 border-left-0 pb-3 mb-3">
					<i class="fa fa-check text-white bg-primary rounded-circle box-shadow-4 mr-3" style="font-size: 10px !important; padding: 6px !important; margin-top: 2px !important;"></i>
					<p class="mb-0"><b class="text-color-dark">Benefit #3</b> lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			@endif

			</div>
			<div class="col-lg-5 col-md-12 col-sm-12 text-center d-none d-lg-block">		
				<div class=" p-5 mt-5">
					<div class="strong-shadow rounded strong-shadow-top-right">
						<img src="{{ asset('assets/landing/assets/img/header-item.png') }}" class="img-fluid border border-width-10 border-color-light rounded box-shadow-3 lazy-load-loaded" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>					
</section>
