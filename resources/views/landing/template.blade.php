<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	
		<title>Sadata - Lorem Ipsum Dolor Sit Amet</title>	
		<meta name="description" content="SADATA" />
		<meta name="keywords" content="SADATA, Retail, Retail Apps" />
		<meta name="author" content="PT. SADA INDONESIA">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
		<link rel="shortcut icon" href="{{asset('assets/templates/media/logos/sadata-logo.ico')}}" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

		<link rel="stylesheet" href="{{ asset('assets/landing/assets/vendor/bootstrap/css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/landing/assets/vendor/fontawesome-free/css/all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/landing/assets/vendor/animate/animate.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/landing/assets/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/landing/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/landing/assets/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/landing/assets/vendor/magnific-popup/magnific-popup.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/landing/assets/css/theme.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/landing/assets/css/theme-elements.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/landing/assets/css/custom.css') }}">
		<script src="{{ asset('assets/landing/assets/vendor/modernizr/modernizr.min.js') }}"></script>
        {{-- {!! htmlScriptTagJsApi() !!} --}}
	</head>
	<body data-target="#header" data-spy="scroll" data-offset="100">
		<div class="body">
            @include('landing.sections.header')

			<div role="main" class="main">
				@yield('content')
			</div>

            @include('landing.sections.join')
            @include('landing.sections.footer')
		</div>

		<!-- Vendor -->
		<script src="{{ asset('assets/landing/assets/vendor/jquery/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/landing/assets/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
		<script src="{{ asset('assets/landing/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
		<script src="{{ asset('assets/landing/assets/vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>
		<script src="{{ asset('assets/landing/assets/vendor/popper/umd/popper.min.js') }}"></script>
		<script src="{{ asset('assets/landing/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/landing/assets/vendor/common/common.min.js') }}"></script>
		<script src="{{ asset('assets/landing/assets/vendor/jquery.validation/jquery.validate.min.js') }}"></script>
		<script src="{{ asset('assets/landing/assets/vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
		<script src="{{ asset('assets/landing/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('assets/landing/assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('assets/landing/assets/vendor/vivus/vivus.min.js') }}"></script>
		<script src="{{ asset('assets/landing/assets/vendor/kute/kute.min.js') }}"></script>
		<script src="{{ asset('assets/landing/assets/vendor/kute/kute-svg.min.js') }}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('assets/landing/assets/js/theme.js') }}"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="{{ asset('assets/landing/assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
		<script src="{{ asset('assets/landing/assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

		<!-- Current Page Vendor and Views -->
		<script src="{{ asset('assets/landing/assets/js/views/view.contact.js') }}"></script>

		<!-- Demo -->
		<script src="{{ asset('assets/landing/assets/js/demos/demo-seo.js') }}"></script>
		
		<!-- Theme Custom -->
		<script src="{{ asset('assets/landing/assets/js/custom.js') }}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{ asset('assets/landing/assets/js/theme.init.js') }}"></script>

		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

		<!--Start of Tawk.to Script-->
		<script type="text/javascript">
		// var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		// (function(){
		// var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		// s1.async=true;
		// s1.src='https://embed.tawk.to/5e60932ec32b5c191739a9e6/default';
		// s1.charset='UTF-8';
		// s1.setAttribute('crossorigin','*');
		// s0.parentNode.insertBefore(s1,s0);
		// })();
		</script>
		<!--End of Tawk.to Script-->

        @stack('js')
	
		<script type="text/javascript">
			$('.card-click').click(function(e){
				$('.card-click').removeClass('bg-color-primary-gradient');
				$('.card-click').find('h4').removeClass('card-text-color-white');
				$('.card-click').find('p').removeClass('card-text-color-white');
				$('.card-click').find('i').removeClass('card-active-i');
				$('.card-click').find('div.col-lg-2').removeClass('card-active-col');
				$('.img-stack').removeClass('img-stack-active');			

				$(this).addClass('bg-color-primary-gradient');
				$(this).find('h4').addClass('card-text-color-white');
				$(this).find('p').addClass('card-text-color-white');
				$(this).find('i').addClass('card-active-i');
				$(this).find('div.col-lg-2').addClass('card-active-col');

				$('#'+$(this).data("img-id")).addClass('img-stack-active');
			});

			$( document ).ready(function() {
			    $('#card-1').click();
			});

			$(document).ready(function () {
				// Dapatkan URL gambar dari atribut data-image tautan pertama saat halaman dimuat
				var defaultImageUrl = $('.card-link:first').data('image');

				// Atur src gambar di atasnya dengan URL gambar default
				$('.ft-img img').attr('src', defaultImageUrl);

				$('.card-link').click(function () {
					// Dapatkan URL gambar dari atribut data-image tautan yang ditekan
					var imageUrl = $(this).data('image');

					// Ubah src gambar di atasnya dengan URL gambar yang didapatkan
					$('.ft-img img').attr('src', imageUrl);
				});
			});
		</script>
	</body>
</html>
