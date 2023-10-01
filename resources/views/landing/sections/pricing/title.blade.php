<section class="bg-color-light border-0 m-0 pb-0 mt-5" {{-- style="background-image: url('{{ asset('assets/landing/img/landing/half_circle.png') }}'); background-size: 100%; background-repeat: no-repeat; background-position: top;" --}}>	
	<div class="container pt-3">
		<div class="row mb-0 counters">
			
			<div class="col-lg-10 text-center offset-lg-1 justify-content-start">
				@foreach($pricings as $pricing)
				<h2 class="font-weight-bold text-9 mb-0" style="letter-spacing: 1px;">
					
					{{ $pricing->pricing_title }}
					
				</h2>
				<p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4">
					{{ $pricing->pricing_deskripsi }}
				</p>
				<p class="mb-0" >{{ $pricing->pricing_isi }}</p>
				@endforeach
			</div>
				{{-- <h1 class="mb-4 mb-md-0"><strong style="font-size: 36px !important; letter-spacing: 2px;">SADATA</strong></h1> --}}
				
			
			</div>
							
		</div>						
	</div>
</section>