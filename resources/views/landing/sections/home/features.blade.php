<div class="p-relative" id="features">
    <section id="downloads" class="section section-parallax m-0" data-plugin-parallax="" data-plugin-options="{'speed': 1.5}" style="position: relative; overflow: hidden;">
	    <div class="container">
		    <div class="row justify-content-center text-center mb-lg-4 mb-3">
		    	<div class="col-lg-12">
		    		<h2 class="font-weight-bold text-9 mb-0" style="letter-spacing: 1px;">Fitur Sadata</h2>
					<p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-lg-4 mb-0">SHORT DESCRIPTION</span></p>
		    	</div>
		    </div>
		    <div class="row text-center">
		    	<div class="col-lg-12 d-lg-none d-block mb-3">
		    		<img src="{{ asset('assets/landing/assets/img/include.png') }}" width="100%" class="pr-2">
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col-lg-6 d-none d-lg-flex">
		    		<img src="{{ asset('assets/landing/assets/img/include.png') }}" width="100%" class="pr-2">
		    	</div>
		    	<div class="col-lg-1 d-none d-lg-flex">
		    	</div>
			    <div class="col-lg-5 col-12">
				    <div id="accordion" class="accordion-custom">
			            <div class="card card-selected">
		                    <a class="card-header card-link" data-toggle="collapse"
		                        href="#description1">
		                        <i class="fa fa-question-circle" style="margin-right: 3px; color: #36C097;"></i>

		                        Lorem ipsum dolor sit amet consectetur.

		                        <i class="fa fa-chevron-up card-header-icon"></i>
		                    </a>
			                <div id="description1" class="collapse show"
			                    data-parent="#accordion">
			                    <div class="card-body">
			                        <div>
			                        	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			                        </div>

			                        <div class="mt-4">
			                        	<a href="javascript:void(0);" style="color: #403FAB !important; text-decoration: none; font-weight: 600;">
			                        		Pelajari lebih lanjut <i class="fa fa-arrow-circle-right" style="margin-left: 3px; font-size: 14px !important;"></i>
			                        			
			                        	</a>
			                        </div>
			                    </div>
			                </div>
			            </div>
			            <div class="card">
		                    <a class="collapsed card-header card-link"
		                        data-toggle="collapse"
		                        href="#description2">
		                        <i class="fa fa-question-circle" style="margin-right: 3px; color: #FD7373;"></i>

		                        Lorem ipsum dolor sit amet consectetur.

		                        <i class="fa fa-chevron-up card-header-icon"></i>
		                    </a>
			                <div id="description2" class="collapse"
			                    data-parent="#accordion">
			                    <div class="card-body">
			                        <div>
			                        	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			                        </div>

			                        <div class="mt-4">
			                        	<a href="javascript:void(0);" style="color: #403FAB !important; text-decoration: none; font-weight: 600;">
			                        		Pelajari lebih lanjut <i class="fa fa-arrow-circle-right" style="margin-left: 3px; font-size: 14px !important;"></i>
			                        			
			                        	</a>
			                        </div>
			                    </div>
			                </div>
			            </div>
			            <div class="card">
		                    <a class="collapsed card-header card-link"
		                        data-toggle="collapse"
		                        href="#description3">
		                        <i class="fa fa-question-circle" style="margin-right: 3px; color: #4888E2;"></i>

		                        Lorem ipsum dolor sit amet consectetur.

		                        <i class="fa fa-chevron-up card-header-icon"></i>
		                    </a>
			                <div id="description3" class="collapse"
			                    data-parent="#accordion">
			                    <div class="card-body">
			                        <div>
			                        	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			                        </div>

			                        <div class="mt-4">
			                        	<a href="javascript:void(0);" style="color: #403FAB !important; text-decoration: none; font-weight: 600;">
			                        		Pelajari lebih lanjut <i class="fa fa-arrow-circle-right" style="margin-left: 3px; font-size: 14px !important;"></i>
			                        			
			                        	</a>
			                        </div>
			                    </div>
			                </div>
			            </div>

			            <div class="card">
		                    <a class="collapsed card-header card-link"
		                        data-toggle="collapse"
		                        href="#description4">
		                        <i class="fa fa-question-circle" style="margin-right: 3px; color: #5B40CF;"></i>

		                        Lorem ipsum dolor sit amet consectetur.

		                        <i class="fa fa-chevron-up card-header-icon"></i>
		                    </a>
			                <div id="description4" class="collapse"
			                    data-parent="#accordion">
			                    <div class="card-body">
			                        <div>
			                        	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			                        </div>

			                        <div class="mt-4">
			                        	<a href="javascript:void(0);" style="color: #403FAB !important; text-decoration: none; font-weight: 600;">
			                        		Pelajari lebih lanjut <i class="fa fa-arrow-circle-right" style="margin-left: 3px; font-size: 14px !important;"></i>
			                        			
			                        	</a>
			                        </div>
			                    </div>
			                </div>
			            </div>
			            
			        </div>

			    </div>
		    </div>
	    </div>						
    </section>

</div>

@push('js')
<script type="text/javascript">
	let currentCollapse = 'description1';

    $('#accordion').on('show.bs.collapse', function (e) {
    	// console.log('SHOW 1', $(this).find('.show')[0].id)
		console.log('SHOW 2', e.target.id)
		currentCollapse = e.target.id

    	$(this).find('.card').removeClass('card-selected');
    	let container = $('#'+e.target.id)
    	let icon = container.parent().find('.card-header-icon').first();
    	icon.removeClass('fa-chevron-down').addClass('fa-chevron-up');

    	setTimeout(function(){
    		container.parent().addClass('card-selected');
    	}, 100);
    	
	});

	$('#accordion').on('shown.bs.collapse', function () {
		// let collapsed = $(this).find('.show').first();
		// collapsed.parent().addClass('card-selected')
	});

	$('#accordion').on('hide.bs.collapse', function (e) {
		if(currentCollapse == e.target.id){
			e.stopPropagation()
			e.preventDefault()
			return
		}

		let container = $('#'+e.target.id)
    	let icon = container.parent().find('.card-header-icon').first();
    	icon.removeClass('fa-chevron-up').addClass('fa-chevron-down');
    	$(this).find('.card').removeClass('card-selected');

		// let icon = $(this).find('.fa-chevron-up').first();
		// icon.removeClass('fa-chevron-up');
		// icon.addClass('fa-chevron-down')
		// $(this).find('.card').removeClass('card-selected')
	});

	$('#accordion').on('hidden.bs.collapse', function () {
	});
</script>
@endpush
