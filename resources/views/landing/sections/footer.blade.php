<footer id="footer" class="" style="margin-top: 0px;">
	<div class="container py-5">					
		<div class="row">
			<div class="col-lg-3 col-md-12 d-flex justify-content-start mb-5 mb-lg-0" style="padding-left: 5px;">
				<a href="{{ url('/') }}" class="logo pr-0 pr-lg-3">
					<img alt="Sadata" src="{{ asset('assets/templates/media/logos/sadata-black.png') }}" height="33">
				</a>
			</div>
			<div class="col-md-4 col-lg-3 mb-3 mb-lg-0" style="margin-top: 6px;">
				<p style="font-weight: 600; margin-bottom: 20px; font-size: 1rem; color: #212529;">Fitur</p>
				<p style="font-size: 0.9rem; color: #212956; margin-bottom: 8px;">
					<a href="javascript:void(0);">Employee Management</a>
				</p>
				<p style="font-size: 0.9rem; color: #212956; margin-bottom: 8px;">
					<a href="javascript:void(0);">Attendance</a>
				</p>
				<p style="font-size: 0.9rem; color: #212956; margin-bottom: 8px;">
					<a href="javascript:void(0);">Payroll</a>
				</p>
				<p style="font-size: 0.9rem; color: #212956; margin-bottom: 8px;">
					<a href="javascript:void(0);">Sales Reporting</a>
				</p>
				<p style="font-size: 0.9rem; color: #212956; margin-bottom: 8px;">
					<a href="javascript:void(0);">Mobile Apps</a>
				</p>
			</div>
			
			<div class="col-md-4 col-lg-3 mb-3 mb-lg-0" style="margin-top: 6px;">
				<p style="font-weight: 600; margin-bottom: 20px; font-size: 1rem; color: #212529;">Resource</p>
				<p style="font-size: 0.9rem; color: #212956; margin-bottom: 8px;">
					<a href="javascript:void(0);">Bantuan</a>
				</p>
				<p style="font-size: 0.9rem; color: #212956; margin-bottom: 8px;">
					<a href="javascript:void(0);">Kebijakan Privasi</a>
				</p>
				<p style="font-size: 0.9rem; color: #212956; margin-bottom: 8px;">
					<a href="javascript:void(0);">Syarat & Ketentuan</a>
				</p>
				
			</div>

			<div class="col-md-4 col-lg-3 mb-3 mb-lg-0" style="margin-top: 6px;">
				<p style="font-weight: 600; margin-bottom: 20px; font-size: 1rem; color: #212529;">Perusahaan</p>
				<p style="font-size: 0.9rem; color: #212956; margin-bottom: 8px;">
					<a href="javascript:void(0);">Profil Perusahaan</a>
				</p>
				<p style="font-size: 0.9rem; color: #212956; margin-bottom: 8px;">
					<a href="javascript:void(0);">Klien Kami</a>
				</p>
				<p style="font-size: 0.9rem; color: #212956; margin-bottom: 8px;">
					<a href="javascript:void(0);">Hubungi Kami</a>
				</p>
				
			</div>
			
		</div>

		<div class="row mt-4">
			<div class="col-lg-3">
			</div>
			<div class="col-lg-9">
				<div class="row">
					<div class="col-lg-2"><span style="font-weight: 600; margin-bottom: 20px; font-size: 1rem; color: #212529;">Alamat</span></div>
					<div class="col-lg-10">
						<span style="font-size: 0.9rem; color: #777;">
							Jl. Radin Inten II No. 62D, Duren Sawit, East Jakarta City, Jakarta 13440
						</span>
					</div>
				</div>
				<div class="row mt-1">
					<div class="col-lg-2"><span style="font-weight: 600; margin-bottom: 20px; font-size: 1rem; color: #212529;">Phone</span></div>
					<div class="col-lg-10">
						<span style="font-size: 0.9rem; color: #777;">
							021-22086179
						</span>
					</div>
				</div>
				<div class="row mt-1">
					<div class="col-lg-2"><span style="font-weight: 600; margin-bottom: 20px; font-size: 1rem; color: #212529;">Email</span></div>
					<div class="col-lg-10">
						<span style="font-size: 0.9rem; color: #777;">
							<a href="mailto:mail@example.com">info@sada.id</a>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-copyright footer-copyright-style-2">
		<div class="container">
			<div class="row py-4">
				{{-- <div class="col-lg-2 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
					<a href="index.html" class="logo pr-0 pr-lg-3">
						<img alt="Porto Website Template" width="180" height="50" src="{{ asset('assets/img/logo-white.png') }}" class="opacity-5" height="33">
					</a>
				</div> --}}
				<div class="col-lg-8 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0 text-center">
					<p>© Copyright {{ \Carbon\Carbon::now()->year }} PT Teknologi Sada Indonesia</p>
				</div>
				<div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
					<nav id="sub-menu">
						<ul class="footer-social-icons social-icons social-icons-clean ml-3">
							<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
							<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
							<li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
							<li class="social-icons-youtube"><a href="http://www.youtube.com/" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</footer>
