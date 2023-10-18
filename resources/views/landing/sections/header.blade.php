@php
use App\Models\Fitur;
$fiturs = Fitur::all();
@endphp

{{-- <header id="header" class="header-transparent header-effect-shrink appear-animation" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}" data-appear-animation="fadeIn" data-appear-animation-delay="200"> --}}
<header id="header">
    <div class="header-body border-top-0 header-body-bottom-border">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ url('/') }}" class="logo pr-0 pr-lg-3">
                                <img alt="Sadata"
                                    src="{{ asset('assets/landing/sections/menu-icon/sadata-black.png') }}" height="33">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links justify-content-start order-2 order-lg-1">
                            <div
                                class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">

                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav" style="padding-top: 0px !important;">

                                        <li class="dropdown py-1 py-lg-0" style="border:none !important;">
                                            <a class="dropdown-item {{ Request::path() == '/home' ? 'active' : '' }}"
                                                data-hash data-hash-offset="95" href="{{ url('/home ') }}"
                                                style="font-size: 14px !important; font-weight: 500 !important; text-transform: none !important; letter-spacing: 0.5px !important; font-family: 'Inter', 'Poppin', sans-serif; background: transparent !important;">Beranda</a>
                                        </li>

                                        <li class="dropdown py-1 py-lg-0" style="border:none !important;">
                                            <a class="dropdown-item {{ in_array(Request::path(), ['hrms']) ? 'active' : '' }}"
                                                style="font-size: 14px !important; font-weight: 500 !important; text-transform: none !important; letter-spacing: 0.5px !important;  font-family: 'Inter', 'Poppin', sans-serif; background: transparent !important;"
                                                data-hash data-hash-offset="95" href="javascript:void(0)">Fitur</a>

                                            <!-- ... Your previous code ... -->

                                            <ul class="dropdown-menu dropdown-menu-custom"
                                                style="margin-top: -10px !important; border-radius: 6px !important; -webkit-box-shadow: 0 2px 8px 2px rgba(0,0,0,.08) !important;  left: -180px;">
                                                @php $itemCount = 0 @endphp
                                                @foreach ($fiturs as $fiturItem)
                                                {{-- Mengganti nama variabel menjadi $fiturItem --}}
                                                @if ($itemCount % 2 == 0)
                                                <div class="d-flex">
                                                    @endif

                                                    <a href="{{ route('fitur.show', $fiturItem->id) }}"
                                                        style="text-decoration:none;">
                                                        <li class="d-flex dropdown-menu-list"
                                                            style="margin-bottom: 8px;">
                                                            {{-- <div class="dropdown-menu-list-link"
                                                                style="margin-right: 12px; vertical-align: middle !important;">
                                                                <img class="menu-icon"
                                                                    src="{{ asset('storage/' . $fiturItem->feature_image_path) }}"
                                                                    style="width: 24px; height:24px">
                                                            </div>
                                                            <div>
                                                                <div class="dropdown-menu-list-link dropdown-menu-list-link-text"
                                                                    style="font-size: 14px; font-weight: 500;">
                                                                    {{ $fiturItem->feature_name }}
                                                                </div>
                                                                <div class="dropdown-menu-list-link dropdown-menu-list-link-text"
                                                                    style="font-size: 12px; font-weight: 400; line-height: 1.5 !important; color: #777777; margin-top: 5px !important;-webkit-line-clamp:2;overflow:hidden;display:-webkit-box;-webkit-box-orient:vertical;">
                                                                    {{ $fiturItem->description }}
                                                                </div>
                                                            </div> --}}
                                                            <div class="dropdown-menu-list-link" style="margin-right: 12px;" >
                                                                    <img class="svg-icon svg-icon-2x svg-icon-orange"
                                                                    src="{{ asset('storage/' . $fiturItem->feature_image_path) }}"
                                                                    style="width: 24px; height:24px">                                                  
                                                            </div>
                                                            <div>
                                                                <div class="dropdown-menu-list-link dropdown-menu-list-link-text" style="font-size: 14px; font-weight: 500; margin-right: 10px; color: #212529;">
                                                                    {{ $fiturItem->feature_name }}
                                                                </div>
                                                                <div style="font-size: 12px; font-weight: 400; line-height: 1.5 !important; color: #777777; margin-top: 4px !important;">
                                                                    {{ $fiturItem->description }}
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </a>

                                                    @php $itemCount++ @endphp
                                                    @if ($itemCount % 2 == 0 || $loop->last)
                                                </div>
                                                @endif

                                                @endforeach
                                            </ul>

                                            <!-- ... The rest of your code ... -->

                                        </li>
                                        {{-- <li>
											<a class="dropdown-menu-item" href="page_builders.html">
											   
												Page Builders
											</a>
										</li>
										<li>
											<a href="header_builder.html">
											   
												Header &amp; Footer Builders
											</a>
										</li>
										<li>
											<a href="studio.html">
											   
												Porto Studio
											</a>
										</li> --}}

                                        <li class="dropdown py-1 py-lg-0 d-none d-lg-flex"
                                            style="border:none !important;">
                                            <a class="dropdown-item {{ Request::path() == 'pricing' ? 'active' : '' }}"
                                                style="font-size: 14px !important; font-weight: 500 !important; text-transform: none !important; letter-spacing: 0.5px !important;  font-family: 'Inter', 'Poppin', sans-serif; background: transparent !important;"
                                                data-hash data-hash-offset="95" href="{{ url('pricing') }}">Harga</a>
                                        </li>
                                        <li class="dropdown py-1 py-lg-0 d-none d-lg-flex"
                                            style="border:none !important;">
                                            <a class="dropdown-item"
                                                style="font-size: 14px !important; font-weight: 500 !important; text-transform: none !important; letter-spacing: 0.5px !important;  font-family: 'Inter', 'Poppin', sans-serif; background: transparent !important;"
                                                data-hash data-hash-offset="95" href="#contact">Bantuan</a>
                                        </li>

                                        {{-- <span class="d-block d-lg-none" style="margin-bottom: 0px !important; height: auto !important; padding-bottom: 0px !important; border: none !important;"> --}}

                                        <li class="d-flex d-lg-none dropdown-menu-list-full {{ Request::path() == 'hrms' ? 'active' : '' }}"
                                            style="border: 0 !important; margin-left: -8px; margin-bottom: 8px;">
                                            <div class="dropdown-menu-list-link" style="margin-right: 12px;">
                                                {{-- {!! duotune_icon('communication/com005','svg-icon svg-icon-2x svg-icon-orange') !!} --}}
                                            </div>
                                            <div>
                                                <div class="dropdown-menu-list-link dropdown-menu-list-link-text"
                                                    style="font-size: 14px; font-weight: 500; margin-right: 10px; color: #212529;">
                                                    Manajemen Karyawan
                                                </div>
                                                <div
                                                    style="font-size: 12px; font-weight: 400; line-height: 1.5 !important; color: #777777; margin-top: 4px !important;">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                </div>
                                            </div>
                                        </li>

                                        <li class="d-flex d-lg-none dropdown-menu-list-full"
                                            style="border: 0 !important; margin-left: -8px; margin-bottom: 8px;">
                                            <div class="dropdown-menu-list-link" style="margin-right: 12px;">
                                                {{-- {!! duotune_icon('general/gen014','svg-icon svg-icon-2x svg-icon-green') !!} --}}
                                            </div>
                                            <div>
                                                <div class="dropdown-menu-list-link dropdown-menu-list-link-text"
                                                    style="font-size: 14px; font-weight: 500; margin-right: 10px; color: #212529;">
                                                    Absensi
                                                </div>
                                                <div
                                                    style="font-size: 12px; font-weight: 400; line-height: 1.5 !important; color: #777777; margin-top: 5px !important;">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                </div>

                                            </div>
                                        </li>

                                        <li class="d-flex d-lg-none dropdown-menu-list-full"
                                            style="border: 0 !important; margin-left: -8px; margin-bottom: 8px;">
                                            <div class="dropdown-menu-list-link" style="margin-right: 12px;">
                                                {{-- {!! duotune_icon('ecommerce/ecm008','svg-icon svg-icon-2x svg-icon-blue') !!} --}}
                                            </div>
                                            <div>
                                                <div class="dropdown-menu-list-link dropdown-menu-list-link-text"
                                                    style="font-size: 14px; font-weight: 500; margin-right: 10px; color: #212529;">
                                                    Payroll
                                                </div>
                                                <div
                                                    style="font-size: 12px; font-weight: 400; line-height: 1.5 !important; color: #777777; margin-top: 5px !important;">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                </div>

                                            </div>
                                        </li>

                                        <li class="d-flex d-lg-none dropdown-menu-list-full"
                                            style="border: 0 !important; margin-left: -8px; margin-bottom: 8px;">
                                            <div class="dropdown-menu-list-link" style="margin-right: 12px;">
                                                {{-- {!! duotune_icon('ecommerce/ecm001','svg-icon svg-icon-2x svg-icon-yellow') !!} --}}
                                            </div>
                                            <div>
                                                <div class="dropdown-menu-list-link dropdown-menu-list-link-text"
                                                    style="font-size: 14px; font-weight: 500; margin-right: 10px; color: #212529;">
                                                    Sales Reporting
                                                </div>
                                                <div
                                                    style="font-size: 12px; font-weight: 400; line-height: 1.5 !important; color: #777777; margin-top: 5px !important;">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                </div>

                                            </div>
                                        </li>

                                        <li class="d-flex d-lg-none dropdown-menu-list-full"
                                            style="border: 0 !important; margin-left: -8px; margin-bottom: 8px;">
                                            <div class="dropdown-menu-list-link" style="margin-right: 12px;">
                                                {{-- {!! duotune_icon('electronics/elc002','svg-icon svg-icon-2x svg-icon-red') !!} --}}
                                            </div>
                                            <div>
                                                <div class="dropdown-menu-list-link dropdown-menu-list-link-text"
                                                    style="font-size: 14px; font-weight: 500; margin-right: 10px; color: #212529;">
                                                    Mobile Apps
                                                </div>
                                                <div
                                                    style="font-size: 12px; font-weight: 400; line-height: 1.5 !important; color: #777777; margin-top: 5px !important;">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                </div>

                                            </div>
                                        </li>

                                        {{-- </span> --}}

                                        <li class="dropdown py-1 py-lg-0 d-flex d-lg-none"
                                            style="border:none !important;">
                                            <a class="dropdown-item {{ Request::path() == 'pricing' ? 'active' : '' }}"
                                                style="font-size: 14px !important; font-weight: 500 !important; text-transform: none !important; letter-spacing: 0.5px !important;  font-family: 'Inter', 'Poppin', sans-serif; background: transparent !important;"
                                                data-hash data-hash-offset="95" href="{{ url('pricing') }}">Harga</a>
                                        </li>
                                        <li class="dropdown py-1 py-lg-0 d-flex d-lg-none"
                                            style="border:none !important;">
                                            <a class="dropdown-item"
                                                style="font-size: 14px !important; font-weight: 500 !important; text-transform: none !important; letter-spacing: 0.5px !important;  font-family: 'Inter', 'Poppin', sans-serif; background: transparent !important;"
                                                data-hash data-hash-offset="95" href="#contact">Bantuan</a>
                                        </li>


                                        <div class="d-flex justify-content-start d-block d-lg-none mt-3">
                                            <a class="font-weight-semibold text-2 order-1 order-lg-2 mr-3 mr-lg-0 login-button"
                                                data-hash data-hash-offset="65"
                                                href="{{ env('APP_ADMIN_URL', env('APP_URL')) }}"
                                                style="border-radius: 5px;"><i class="fa fa-desktop"></i> <span
                                                    style="margin-left: 5px;">Masuk</span></a>
                                        </div>
                                    </ul>
                                </nav>

                            </div>

                        </div>

                        <a class="font-weight-semibold text-2 order-1 order-lg-2 mr-3 mr-lg-0 login-button d-none d-lg-block"
                            data-hash data-hash-offset="65" href="{{ env('APP_ADMIN_URL', env('APP_URL')) }}"
                            style="border-radius: 5px;"><i class="fa fa-desktop"></i> <span
                                style="margin-left: 5px;">Masuk</span></a>

                        <button class="btn d-lg-none d-block" data-toggle="collapse" data-target=".header-nav-main nav">
                            <i class="fas fa-bars" style="color: #cc0000; font-size: 24px;"></i>
                        </button>

                        {{-- <a class="font-weight-semibold text-2 order-1 order-lg-2 mr-3 mr-lg-0 login-button d-none d-lg-block" data-hash data-hash-offset="65" href="{{ env('APP_ADMIN_URL', env('APP_URL')) }}"
                        style="border-radius: 5px;"><i class="fas fa-bars" style="font-size: 24px;"></i></a> --}}


                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
