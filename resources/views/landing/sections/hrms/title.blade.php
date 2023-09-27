<section class="bg-color-light border-0 m-0 pb-0 mt-5" style="background-image: url('{{ asset('assets/landing/assets/img//feature-top.png') }}'); background-size: 100%; background-repeat: no-repeat; background-position: top;">	
	<div class="container pt-3">
		<div class="row mb-0 pb-lg-3 counters">
			
			<div class="col-lg-10 text-center offset-lg-1 pb-5 justify-content-start">
				<h2 class="font-weight-bold text-9 mb-0" style="letter-spacing: 1px;">{{ $fitur->feature_name }}</h2>
				{{-- <h1 class="mb-4 mb-md-0"><strong style="font-size: 36px !important; letter-spacing: 2px;">SADATA</strong></h1> --}}
				<p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4">SHORT DESCRIPTION</p>
				<p class="mb-0" >{{ $fitur->description }}
			</div>
			<div class="row text-center py-3 mb-5">
				<div class="col-lg-12 d-flex justify-content-center">
					<img alt="" src="{{ asset('assets/landing/assets/img/dashboard.png') }}" width="65%" class=" rounded">

					<img alt="" src="{{ asset('assets/landing/assets/img/new-feature-01.png') }}" width="16%" class="ml-2">
				</div>
			</div>							
		</div>						
	</div>
</section>