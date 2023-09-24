<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.2.0
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <title>SADATA</title>
    <meta charset="utf-8">
    <meta name="description" content="
            The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, 
            Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony &amp; Laravel versions. 
            Grab your copy now and get life-time updates for free.
        ">
    <meta name="keywords" content="
            metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, 
            Node.js, Flask, Symfony &amp; Laravel starter kits, admin themes, web design, figma, web development, free templates, 
            free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, 
            bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon
        ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:title" content="
            Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, 
            Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme &amp; Template
        ">
    <meta property="og:url" content="https://keenthemes.com/metronic">
    <meta property="og:site_name" content="Keenthemes | Metronic">
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8">
    <link rel="shortcut icon" href="{{ asset('/metronic8/demo8/assets/media/logos/sadataLogo.png') }}">

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700">
    <!--end::Fonts-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!--Font awesome-->

    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('/metronic8/demo8/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css">
    <!--end::Vendor Stylesheets-->


    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('/metronic8/demo8/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('/metronic8/demo8/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css">
</head>

<body id="kt_body" class="aside-enabled">
    {{-- <link href="{{ asset('/metronic8/demo8/assets/css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css">
    --}}
    <link href="{{ asset('/metronic8/demo8/assets/css/edit.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/metronic8/demo8/assets/css/custom.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/metronic8/demo8/assets/css/dropdown.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/metronic8/demo8/assets/css/style.bundle.css.map') }}" rel="stylesheet" type="text/css">
    <!--end::Global Stylesheets Bundle-->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css"
        integrity="sha512-vebUliqxrVkBy3gucMhClmyQP9On/HAWQdKDXRaAlb/FKuTbxkjPKUyqVOxAcGwFDka79eTF+YXwfke1h3/wfg=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

    <!--Begin::Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
    </script>
    <!--End::Google Tag Manager -->

    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>

    <!--end::Head-->

    <!--begin::Body-->


    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--Begin::Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!--End::Google Tag Manager (noscript) -->

    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            <div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside"
                data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
                data-kt-drawer-toggle="#kt_aside_mobile_toggle">
                <!--begin::Aside menu-->
                <div class="aside-menu flex-column-fluid">
                    <!--begin::Aside Menu-->
                    <div class="hover-scroll-overlay-y px-2 my-5 my-lg-5" id="kt_aside_menu_wrapper"
                        data-kt-scroll="true" data-kt-scroll-height="auto"
                        data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}"
                        data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
                        <!--begin::Menu-->
                        <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                            id="#kt_aside_menu" data-kt-menu="true">

                            <div class="separator mx-1 my-2"></div>

                            {{-- dashboard menu --}}
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                        <span>
                                            <i class="fa-solid fa-chart-pie fs-4"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Dashboards</span>
                                </a>
                            </div>

                            {{-- log activity --}}
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                        <span>
                                            <i class="fa-solid fa-book fs-4"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Log Activity</span>
                                </a>
                            </div>

                            <div class="separator mx-1 my-2"></div>

                            <div class="menu-item">
                                <div class="menu-content pt-8 pb-2">
                                    <span class="menu-section text-muted text-uppercase fs-5 ls-1">ITINERARY</span>
                                </div>
                            </div>

                            {{-- Manage Itinerary --}}
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                        <span>
                                            <i class="fa-solid fa-calendar-days fs-4"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Manage Itinerary</span>
                                </a>
                            </div>

                            {{-- Upload Itinerary --}}
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                        <span>
                                            <i class="fa-solid fa-calendar-plus fs-4"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Upload Itinerary</span>
                                </a>
                            </div>

                            {{-- Approval --}}
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="fa-solid fa-calendar-check fs-4"></i>
                                    </span>
                                    <span class="menu-title">Approval(s)</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/lists.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Sakit/Izin/Cuti/Off</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/statistics.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Out Itinerary</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Store Location Update</span>
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <div class="menu-item">
                                <div class="menu-content pt-8 pb-2">
                                    <span class="menu-section text-muted text-uppercase fs-5 ls-1">MASTER DATA</span>
                                </div>
                            </div>

                            {{-- Employee --}}
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="fa fa-user fs-4"></i>
                                    </span>
                                    <span class="menu-title">Employee(s)</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Employee</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Employee Resign</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Employee Turn Over</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Employee Team</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            {{-- Store --}}
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="fa fa-building fs-4"></i>
                                    </span>
                                    <span class="menu-title">Store(s)</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Region</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Cabang</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Sub Area</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Channel</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Account</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Timezone</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Store</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Upload Store</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Store Coverage</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            {{-- Product --}}
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="fa fa-cube fs-4"></i>
                                    </span>
                                    <span class="menu-title">Product(s)</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Brand</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Category</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Segment</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Group</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Package</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Product</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Product Package</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Upload Product</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Product Price</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Product Price Limit</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Product Stock</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">OOS Product Focus</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Must SKU Listing</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            {{-- Competitor --}}
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="fa fa-building fs-4"></i>
                                    </span>
                                    <span class="menu-title">Competitor</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Brand</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Product</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            {{-- Type --}}
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="fa fa fa-external-link fs-4"></i>
                                    </span>
                                    <span class="menu-title">Type</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Promo</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Display GT</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Group Promo</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Rental</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Regular Display</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">POSM</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Additional</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">OOS</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Klasifikasi</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            {{-- Display Share --}}
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="fa fa fa-bookmark fs-4"></i>
                                    </span>
                                    <span class="menu-title">Display Share</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Own VS Competitor</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Minimum Tier</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Position</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Guidance</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            {{-- Gimmick --}}
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                        <span>
                                            <i class="fa-solid fa-cubes fs-4"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Gimmick</span>
                                </a>
                            </div>

                            {{-- Principle Promo --}}
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                        <span>
                                            <i class="fa-solid fa-bullhorn fs-4"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Principle Promo</span>
                                </a>
                            </div>

                            {{-- Rental --}}
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                        <span>
                                            <i class="fa-solid fa-tags fs-4"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Rental</span>
                                </a>
                            </div>

                            {{-- Config Sales --}}
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="fa fa-shopping-cart fs-4"></i>
                                    </span>
                                    <span class="menu-title">Config Sales</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Target Offtake</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Upload Sell In</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Sales Print Out</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            {{-- POSM --}}
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                        <span>
                                            <i class="fa-solid fa-tags fs-4"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">POSM</span>
                                </a>
                            </div>

                            {{-- Guidelines --}}
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                        <span>
                                            <i class="fa-solid fa-book fs-4"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Guidelines</span>
                                </a>
                            </div>

                            {{-- Dynamic Survey --}}
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="fa fa fa-cogs fs-4"></i>
                                    </span>
                                    <span class="menu-title">Dynamic Survey</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Survey</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Type Survey</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Questionnaire</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <div class="menu-content pt-8 pb-2">
                                    <span class="menu-section text-muted text-uppercase fs-5 ls-1">REPORT</span>
                                </div>
                            </div>

                            {{-- Attendance --}}
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                        <span>
                                            <i class="fa-solid fa-calendar-check fs-4"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Attendance</span>
                                </a>
                            </div>

                            {{-- Sell Out --}}
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                        <span>
                                            <i class="fa-solid fa-shopping-cart fs-4"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Sell Out</span>
                                </a>
                            </div>

                            {{-- Sales --}}
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                        <span>
                                            <i class="fa-solid fa-shopping-cart fs-4"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Sales</span>
                                </a>
                            </div>

                            {{-- Stock --}}
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                        <span>
                                            <i class="fa-solid fa-cubes fs-4"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Stock</span>
                                </a>
                            </div>

                            {{-- OOS --}}
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                        <span>
                                            <i class="fa-solid fa-cubes fs-4"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">OOS</span>
                                </a>
                            </div>

                            {{-- Expired Date --}}
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                        <span>
                                            <i class="fa-solid fa-calendar fs-4"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Expired Date</span>
                                </a>
                            </div>

                            {{-- Activity(s) --}}
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="fa fa-cogs fs-4"></i>
                                    </span>
                                    <span class="menu-title">Activity(s)</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-check-square fs-7"></i>
                                            </span>
                                            <span class="menu-title">Promo Tracking</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-calendar-days fs-7"></i>
                                            </span>
                                            <span class="menu-title">Competitor Activity</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            {{-- Display(s) --}}
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="fa fa-desktop fs-4"></i>
                                    </span>
                                    <span class="menu-title">Display(s)</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa fa-line-chart fs-7"></i>
                                            </span>
                                            <span class="menu-title">Reguler Display</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-share-square fs-7"></i>
                                            </span>
                                            <span class="menu-title">Rental Display</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            {{-- Price Principal --}}
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                        <span>
                                            <i class="fa-solid fa-dollar fs-4"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Price Principal</span>
                                </a>
                            </div>

                            {{-- Delete Report --}}
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                        <span>
                                            <i class="fa-solid fa-trash fs-4"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Delete Report</span>
                                </a>
                            </div>

                            <div class="menu-item">
                                <div class="menu-content pt-8 pb-2">
                                    <span class="menu-section text-muted text-uppercase fs-5 ls-1">SUMMARY</span>
                                </div>
                            </div>

                            {{-- Attendance --}}
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                        <span>
                                            <i class="fa-solid fa-calendar-days fs-4"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Attendance</span>
                                </a>
                            </div>

                            {{-- Achievement --}}
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                        <span>
                                            <i class="fa-solid fa-sitemap fs-4"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Achievement</span>
                                </a>
                            </div>

                            <div class="menu-item">
                                <div class="menu-content pt-8 pb-2">
                                    <span class="menu-section text-muted text-uppercase fs-5 ls-1">EXPORT</span>
                                </div>
                            </div>

                            {{-- Download Export --}}
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                        <span>
                                            <i class="fa-solid fa-cloud-download fs-4"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Download Export</span>
                                </a>
                            </div>

                            <div class="menu-item">
                                <div class="menu-content pt-8 pb-2">
                                    <span class="menu-section text-muted text-uppercase fs-5 ls-1">SETTINGS</span>
                                </div>
                            </div>

                            {{-- User --}}
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                        <span>
                                            <i class="fa-solid fa-user-group fs-4"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">User</span>
                                </a>
                            </div>

                            {{-- Lock Management --}}
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                        <span>
                                            <i class="fa-solid fa-map fs-4"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Lock Management</span>
                                </a>
                            </div>

                            {{-- Profile --}}
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                        <span>
                                            <i class="fa-solid fa-cog fs-4"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Profile</span>
                                </a>
                            </div>

                            <div class="menu-item">
                                <div class="menu-content pt-8 pb-2">
                                    <span class="menu-section text-muted text-uppercase fs-5 ls-1">CUSTOM</span>
                                </div>
                            </div>

                            {{-- Custom --}}
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="fa fa-jet-fighter fs-4"></i>
                                    </span>
                                    <span class="menu-title">Custom</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Master Customer (Dynamic)</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Customer</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Schedule</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Report Sampling V2 (Dynamic)</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Master Price Principal (Dynamic)</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Report Request Display (Dynamic)</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/widgets/charts.html">
                                            <span class="menu-bullet">
                                                <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                            </span>
                                            <span class="menu-title">Request Sampling</span>
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <div class="separator mx-1 my-4"></div>

                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Aside Menu-->
                </div>
                <!--end::Aside menu-->
            </div>
            <!--end::Aside-->

            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" style="" class="header  align-items-stretch">
                    <!--begin::Brand-->
                    <div class="header-brand">
                        <!--begin::Logo-->
                        <a href="#">
                            <img src="{{ asset('/metronic8/demo8/assets/media/logos/sadata.png') }}" alt="" class=""
                                style="height: 34px">
                        </a>
                        <!--end::Logo-->
                        <!--begin::Aside minimize-->
                        <div id="kt_aside_toggle"
                            class="btn btn-icon w-auto px-0 btn-active-color-primary aside-minimize"
                            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                            data-kt-toggle-name="aside-minimize">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr092.svg-->
                            <span class="svg-icon svg-icon-1 me-n1 minimize-default">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.3" x="8.5" y="11" width="12" height="2" rx="1" fill="black"></rect>
                                    <path
                                        d="M10.3687 11.6927L12.1244 10.2297C12.5946 9.83785 12.6268 9.12683 12.194 8.69401C11.8043 8.3043 11.1784 8.28591 10.7664 8.65206L7.84084 11.2526C7.39332 11.6504 7.39332 12.3496 7.84084 12.7474L10.7664 15.3479C11.1784 15.7141 11.8043 15.6957 12.194 15.306C12.6268 14.8732 12.5946 14.1621 12.1244 13.7703L10.3687 12.3073C10.1768 12.1474 10.1768 11.8526 10.3687 11.6927Z"
                                        fill="black"></path>
                                    <path opacity="0.5"
                                        d="M16 5V6C16 6.55228 15.5523 7 15 7C14.4477 7 14 6.55228 14 6C14 5.44772 13.5523 5 13 5H6C5.44771 5 5 5.44772 5 6V18C5 18.5523 5.44771 19 6 19H13C13.5523 19 14 18.5523 14 18C14 17.4477 14.4477 17 15 17C15.5523 17 16 17.4477 16 18V19C16 20.1046 15.1046 21 14 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3H14C15.1046 3 16 3.89543 16 5Z"
                                        fill="black"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr076.svg-->
                            <span class="svg-icon svg-icon-1 minimize-active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.3" width="12" height="2" rx="1"
                                        transform="matrix(-1 0 0 1 15.5 11)" fill="black"></rect>
                                    <path
                                        d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z"
                                        fill="black"></path>
                                    <path
                                        d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z"
                                        fill="#C4C4C4"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Aside minimize-->
                        <!--begin::Aside toggle-->
                        <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
                            <div class="btn btn-icon btn-active-color-primary w-30px h-30px"
                                id="kt_aside_mobile_toggle">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                            fill="black"></path>
                                        <path opacity="0.3"
                                            d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                            fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Aside toggle-->
                    </div>
                    <!--end::Brand-->
                    <!--begin::Toolbar-->
                    <div class="toolbar d-flex align-items-stretch">
                        <!--begin::Toolbar container-->
                        <div
                            class="container-fluid py-6 py-lg-0 d-flex flex-column flex-lg-row align-items-lg-stretch justify-content-lg-between">
                            <!--begin::Page title-->
                            <div class="page-title d-flex justify-content-center flex-column me-5">
                                <!--begin::Title-->
                                <h1 class="d-flex flex-column text-dark fw-bolder fs-3 mb-0">Dashboard</h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 pt-1">
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                        <a href="../../demo8/dist/index.html"
                                            class="text-muted text-hover-primary">Home</a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">Product</li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-dark">Add Product</li>
                                    <!--end::Item-->
                                </ul>
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Page title-->
                            <!--begin::Action group-->
                            <div class="d-flex align-items-stretch overflow-auto pt-3 pt-lg-0">


                                <!--begin::Action wrapper-->
                                <div class="d-flex align-items-center">

                                    <!--begin::Actions-->
                                    <div class="d-flex">


                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Action wrapper-->
                                <!--begin::Theme mode-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Theme mode docs-->

                                    <img src="{{ asset('/metronic8/demo8/assets/media/avatars/profiles.png') }}" alt=""
                                        class="" style="height: 36px" data-kt-menu-trigger="click"
                                        data-kt-menu-placement="bottom-end">
                                    <!--end::Theme mode docs-->

                                    <div class="menu menu-sub menu-sub-dropdown w-120px w-md-120px" data-kt-menu="true"
                                        id="kt_menu_61cf1e2d94494">
                                        <!--begin::Header-->
                                        <div class="px-2 py-2">

                                            <div class="menu-item">
                                                <a class="menu-link" href="#">
                                                    <span class="menu-icon">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                                        <span>
                                                            <i class="fa-solid fa-arrow-right-from-bracket fs-4"></i>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="fs-5 text-dark fw-bold"
                                                        style="cursor: pointer">LogOut</span>
                                                </a>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Menu separator-->
                                        <div class="separator border-gray-200"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Form-->

                                        <!--end::Form-->
                                    </div>
                                </div>

                                <!--end::Theme mode-->
                            </div>
                            <!--end::Action group-->
                        </div>
                        <!--end::Toolbar container-->
                    </div>
                    <!--end::Toolbar-->
                    <!--end::Toolbar-->
                </div>

                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid " id="kt_content">
                    <!--begin::Post-->
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <!--begin::Container-->
                        <div id="kt_content_container" class=" container-xxl ">
                            <!--begin::Stepper-->
                            <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid gap-10"
                                id="kt_create_account_stepper">
                                <!--begin::Aside-->
                                <div
                                    class="card d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px w-xxl-400px">
                                    <!--begin::Wrapper-->
                                    <div class="card-body px-6 px-lg-10 px-xxl-15 py-20">
                                        <!--begin::Nav-->
                                        <div class="stepper-nav">
                                            <!--begin::Step 1-->
                                            <div class="stepper-item current" data-kt-stepper-element="nav">
                                                <!--begin::Line-->
                                                <div class="stepper-line w-40px"></div>
                                                <!--end::Line-->
                                                <!--begin::Icon-->
                                                <div class="stepper-icon w-40px h-40px">
                                                    <i class="stepper-check fas fa-check"></i>
                                                    <span class="stepper-number">1</span>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Label-->
                                                <div class="stepper-label">
                                                    <h3 class="stepper-title">Product</h3>
                                                    <div class="stepper-desc fw-bold">Setup Your Product Details</div>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Step 1-->
                                            <!--begin::Step 2-->
                                            <div class="stepper-item" data-kt-stepper-element="nav">
                                                <!--begin::Line-->
                                                <div class="stepper-line w-40px"></div>
                                                <!--end::Line-->
                                                <!--begin::Icon-->
                                                <div class="stepper-icon w-40px h-40px">
                                                    <i class="stepper-check fas fa-check"></i>
                                                    <span class="stepper-number">2</span>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Label-->
                                                <div class="stepper-label">
                                                    <h3 class="stepper-title">Brand</h3>
                                                    <div class="stepper-desc fw-bold">Setup Your Brand Details</div>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Step 2-->
                                            <!--begin::Step 3-->
                                            <div class="stepper-item" data-kt-stepper-element="nav">
                                                <!--begin::Line-->
                                                <div class="stepper-line w-40px"></div>
                                                <!--end::Line-->
                                                <!--begin::Icon-->
                                                <div class="stepper-icon w-40px h-40px">
                                                    <i class="stepper-check fas fa-check"></i>
                                                    <span class="stepper-number">3</span>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Label-->
                                                <div class="stepper-label">
                                                    <h3 class="stepper-title">Category</h3>
                                                    <div class="stepper-desc fw-bold">Setup Your Category Details</div>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Step 3-->
                                            <!--begin::Step 4-->
                                            <div class="stepper-item" data-kt-stepper-element="nav">
                                                <!--begin::Line-->
                                                <div class="stepper-line w-40px"></div>
                                                <!--end::Line-->
                                                <!--begin::Icon-->
                                                <div class="stepper-icon w-40px h-40px">
                                                    <i class="stepper-check fas fa-check"></i>
                                                    <span class="stepper-number">4</span>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Label-->
                                                <div class="stepper-label">
                                                    <h3 class="stepper-title">Packaging</h3>
                                                    <div class="stepper-desc fw-bold">Setup Your Packaging Details
                                                    </div>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Step 4-->
                                            <!--begin::Step 5-->
                                            <div class="stepper-item" data-kt-stepper-element="nav">
                                                <!--begin::Line-->
                                                <div class="stepper-line w-40px"></div>
                                                <!--end::Line-->
                                                <!--begin::Icon-->
                                                <div class="stepper-icon w-40px h-40px">
                                                    <i class="stepper-check fas fa-check"></i>
                                                    <span class="stepper-number">5</span>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Label-->
                                                <div class="stepper-label">
                                                    <h3 class="stepper-title">Completed</h3>
                                                    <div class="stepper-desc fw-bold">Woah, we are here</div>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Step 5-->
                                        </div>
                                        <!--end::Nav-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--begin::Aside-->

                                <!--begin::Content-->
                                <div class="card d-flex flex-row-fluid flex-center">
                                    <!--begin::Form-->
                                    <form class="card-body py-20 w-100 mw-xl-700px px-9" novalidate="novalidate"
                                        id="kt_create_account_form">
                                        <!--begin::Step 1-->
                                        <div class="current" data-kt-stepper-element="content">
                                            <!--begin::Wrapper-->
                                            <div class="w-100">
                                                <!--begin::Heading-->
                                                <div class="pb-10 pb-lg-15">
                                                    <!--begin::Title-->
                                                    <!--begin::Title-->
                                                    <h2 class="fw-bolder d-flex align-items-center text-dark">Choose
                                                        Product
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="tooltip"
                                                            title="Billing is issued based on your selected account type"></i>
                                                    </h2>
                                                    <!--end::Title-->
                                                    <!--begin::Notice-->
                                                    <div class="text-muted fw-bold fs-6">If you need more info, please
                                                        check out
                                                        <a href="#" class="link-primary fw-bolder">Help
                                                            Page</a>.
                                                    </div>
                                                    <!--end::Notice-->
                                                    <!--end::Title-->


                                                </div>
                                                <!--end::Heading-->

                                                <!--begin::Input group-->
                                                <div class="fv-row">
                                                    <!--begin::Row-->
                                                    <div class="row">
                                                        <!--begin::Col-->

                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-5">
                                                            <!--begin::Label-->
                                                            <label class="form-label required fw-bolder">Nama
                                                                Product</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text"
                                                                class="form-control form-control-lg form-control-solid"
                                                                name="product_name" placeholder="" value="">
                                                            <!--end::Input-->
                                                        </div>

                                                        {{-- SAP NAME --}}

                                                        <div class="fv-row mb-5">
                                                            <!--begin::Label-->
                                                            <label class="form-label  fw-bolder">SAP Name</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text"
                                                                class="form-control form-control-lg form-control-solid"
                                                                name="" placeholder="" value="">

                                                        </div>
                                                        {{-- END SAP NAME --}}

                                                        <!--begin::Input group-->
                                                        <div class="row mb-5">
                                                            <!--begin::Col-->
                                                            <div class="col-md-6 fv-row">
                                                                <!--begin::Label-->
                                                                <label
                                                                    class="required fs-5 fw-bold mb-2 fw-bolder">Code</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="text"
                                                                    class="form-control form-control-lg form-control-solid"
                                                                    name="code" placeholder="" value="">
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Col-->
                                                            <!--begin::Col-->
                                                            <div class="col-md-6 fv-row">
                                                                <!--end::Label-->
                                                                <label class="form-label  fw-bolder">SAP Code</label>
                                                                <!--end::Label-->
                                                                <!--end::Input-->
                                                                <input type="text"
                                                                    class="form-control form-control-lg form-control-solid"
                                                                    name="" placeholder="" value="" style="width: 106%">
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Input group-->

                                                        <div class="row mb-5">
                                                            <!--end::Label-->
                                                            <label class="required fs-5 fw-bold mb-5 fw-bolder ">Photo
                                                                Product</label>
                                                            <!--end::Label-->
                                                            <div class="col-lg-8">
                                                                <!--begin::Image input-->
                                                                <div class="image-input image-input-outline"
                                                                    data-kt-image-input="true"
                                                                    style="background-image: url('/metronic8/demo8/assets/media/svg/files/blank-image.svg')">
                                                                    <!--begin::Preview existing avatar-->
                                                                    <div class="image-input-wrapper w-125px h-125px"
                                                                        style="background-image: url('/metronic8/demo8/assets/media/svg/files/blank-image.svg')">

                                                                    </div>
                                                                    <!--end::Preview existing avatar-->
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                        data-kt-image-input-action="change"
                                                                        data-bs-toggle="tooltip" title="Change product">
                                                                        <i class="bi bi-pencil-fill fs-7"></i>
                                                                        <!--begin::Inputs-->
                                                                        <input type="file" name="avatar"
                                                                            accept=".png, .jpg, .jpeg">
                                                                        <input type="hidden" name="avatar_remove">
                                                                        <!--end::Inputs-->
                                                                    </label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Cancel-->
                                                                    <span
                                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                        data-kt-image-input-action="cancel"
                                                                        data-bs-toggle="tooltip" title="Cancel product">
                                                                        <i class="bi bi-x fs-2"></i>
                                                                    </span>
                                                                    <!--end::Cancel-->
                                                                    <!--begin::Remove-->
                                                                    <span
                                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                        data-kt-image-input-action="remove"
                                                                        data-bs-toggle="tooltip" title="Remove product">
                                                                        <i class="bi bi-x fs-2"></i>
                                                                    </span>
                                                                    <!--end::Remove-->
                                                                </div>
                                                                <!--end::Image input-->
                                                                <!--begin::Hint-->
                                                                <div class="form-text">Allowed file types: png, jpg,
                                                                    jpeg.</div>
                                                                <!--end::Hint-->
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Step 1-->

                                        <!--begin::Step 2-->
                                        <div data-kt-stepper-element="content">
                                            <!--begin::Wrapper-->
                                            <div class="w-100">
                                                <!--begin::Heading-->
                                                <div class="pb-10 pb-lg-15">
                                                    <!--begin::Title-->
                                                    <!--begin::Title-->
                                                    <h2 class="fw-bolder d-flex align-items-center text-dark">Choose
                                                        Brand
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="tooltip"
                                                            title="Billing is issued based on your selected account type"></i>
                                                    </h2>
                                                    <!--end::Title-->
                                                    <!--begin::Notice-->
                                                    <div class="text-muted fw-bold fs-6">If you need more info, please
                                                        check out
                                                        <a href="#" class="link-primary fw-bolder">Help
                                                            Page</a>.
                                                    </div>
                                                    <!--end::Notice-->
                                                    <!--end::Title-->


                                                </div>
                                                <!--end::Heading-->

                                                <!--begin::Input group-->
                                                <div class="fv-row mb-5">
                                                    <!--begin::Label-->
                                                    <label class="form-label required fw-bolder">Variant</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text"
                                                        class="form-control form-control-lg form-control-solid"
                                                        name="variant_name" placeholder="" value="">
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <div class="fv-row mb-5">
                                                    <!--begin::Label-->
                                                    <label class="form-label required fw-bolder">Classification</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text"
                                                        class="form-control form-control-lg form-control-solid"
                                                        name="classifacition_name" placeholder="" value="">
                                                    <!--end::Input-->
                                                </div>
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-5">
                                                    <!--begin::Label-->
                                                    <label class="form-label required fw-bolder">realese</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text"
                                                        class="form-control form-control-lg form-control-solid"
                                                        name="realese_name" placeholder="" value="">
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Step 2-->

                                        <!--begin::Step 3-->
                                        <div data-kt-stepper-element="content">
                                            <!--begin::Wrapper-->
                                            <div class="w-100">
                                                <!--begin::Heading-->
                                                <div class="pb-10 pb-lg-15">
                                                    <!--begin::Title-->
                                                    <!--begin::Title-->
                                                    <h2 class="fw-bolder d-flex align-items-center text-dark">Choose
                                                        Category
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="tooltip"
                                                            title="Billing is issued based on your selected account type"></i>
                                                    </h2>
                                                    <!--end::Title-->
                                                    <!--begin::Notice-->
                                                    <div class="text-muted fw-bold fs-6">If you need more info, please
                                                        check out
                                                        <a href="#" class="link-primary fw-bolder">Help
                                                            Page</a>.
                                                    </div>
                                                    <!--end::Notice-->
                                                    <!--end::Title-->


                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-5">
                                                    <!--begin::Label-->
                                                    <label class="form-label required fw-bolder">Origin</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <select name="origin"
                                                        class="form-select form-select-lg form-select-solid"
                                                        data-control="select2" data-placeholder="Select data"
                                                        data-allow-clear="true" data-hide-search="true">
                                                        <option></option>
                                                        <option value="1">S Corporation</option>
                                                        <option value="1">C Corporation</option>
                                                        <option value="2">Sole Proprietorship</option>
                                                        <option value="3">Non-profit</option>
                                                        <option value="4">Limited Liability</option>
                                                        <option value="5">General Partnership</option>
                                                    </select>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-5">
                                                    <!--begin::Label-->
                                                    <label class="form-label required fw-bolder">Group</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <select name="group"
                                                        class="form-select form-select-lg form-select-solid"
                                                        data-control="select2" data-placeholder="Select data"
                                                        data-allow-clear="true" data-hide-search="true">
                                                        <option></option>
                                                        <option value="1">S Corporation</option>
                                                        <option value="1">C Corporation</option>
                                                        <option value="2">Sole Proprietorship</option>
                                                        <option value="3">Non-profit</option>
                                                        <option value="4">Limited Liability</option>
                                                        <option value="5">General Partnership</option>
                                                    </select>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-5">
                                                    <!--begin::Label-->
                                                    <label class="form-label required fw-bolder">Size</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <select name="size" class="form-select form-select-solid"
                                                        data-control="select2" data-placeholder="Select an option">
                                                        <option></option>
                                                        <option value="1">Size 1</option>
                                                        <option value="2">Size 2</option>
                                                        <option value="2">Size 3</option>
                                                        <option value="2">Size 4</option>
                                                    </select>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-5">
                                                    <!--begin::Label-->
                                                    <label class="form-label required fw-bolder">Hierarchy</label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <select name="hierarchy" class="form-select form-select-solid"
                                                        data-control="select2" data-placeholder="Select an option">
                                                        <option></option>
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                        <option value="2">Option 3</option>
                                                        <option value="2">Option 4</option>
                                                    </select>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Wrapper-->

                                        </div>
                                        <!--end::Step 3-->

                                        <!--begin::Step 4-->
                                        <div data-kt-stepper-element="content">
                                            <!--begin::Wrapper-->
                                            <div class="w-100">
                                                <!--begin::Heading-->
                                                <div class="pb-10 pb-lg-15">
                                                    <!--begin::Title-->
                                                    <!--begin::Title-->
                                                    <h2 class="fw-bolder d-flex align-items-center text-dark">Choose
                                                        Packaging
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="tooltip"
                                                            title="Billing is issued based on your selected account type"></i>
                                                    </h2>
                                                    <!--end::Title-->
                                                    <!--begin::Notice-->
                                                    <div class="text-muted fw-bold fs-6">If you need more info, please
                                                        check out
                                                        <a href="#" class="link-primary fw-bolder">Help
                                                            Page</a>.
                                                    </div>
                                                    <!--end::Notice-->
                                                    <!--end::Title-->


                                                </div>
                                                <!--end::Heading-->


                                                <!--begin::Input group-->
                                                <div class="d-flex flex-column mb-5 fv-row">
                                                    <!--begin::Label-->
                                                    <label
                                                        class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                        <span class="required fw-bolder">Packaging</span>


                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Specify a card holder's name">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span></i></span> </label>
                                                    <!--end::Label-->

                                                    <input type="text" class="form-control form-control-solid"
                                                        placeholder="" name="packaging" value="">
                                                </div>
                                                <!--begin::Input group-->
                                                <div class="d-flex flex-column mb-5 fv-row">
                                                    <!--begin::Label-->
                                                    <label
                                                        class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                        <span class="required fw-bolder">Package Content</span>


                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Specify a card holder's name">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span></i></span> </label>
                                                    <!--end::Label-->

                                                    <input type="text" class="form-control form-control-solid"
                                                        placeholder="" name="packaging_content" value="">
                                                </div>
                                                <!--end::Input group-->

                                                <!--begin::Input group-->
                                                <div class="d-flex flex-column mb-5 fv-row">
                                                    <!--begin::Label-->
                                                    <label
                                                        class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                        <span class="required fw-bolder">Grammage</span>


                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Specify a card holder's name">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span></i></span> </label>
                                                    <!--end::Label-->

                                                    <input type="text" class="form-control form-control-solid"
                                                        placeholder="" name="grammage" value="">
                                                </div>
                                                <!--end::Input group-->


                                                <!--end::Input group-->



                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Step 4-->

                                        <!--begin::Step 5-->
                                        <div data-kt-stepper-element="content">


                                            <!--begin::Wrapper-->
                                            <div class="w-100">
                                                <!--begin::Heading-->
                                                <div class="pb-8 pb-lg-10">
                                                    <!--begin::Title-->
                                                    <h2 class="fw-bold text-dark">Your Are Done!</h2>
                                                    <!--end::Title-->

                                                    <!--begin::Notice-->
                                                    <div class="text-muted fw-semibold fs-6">
                                                        If you need more info, please
                                                        .
                                                    </div>
                                                    <!--end::Notice-->
                                                </div>
                                                <!--end::Heading-->

                                                <!--begin::Body-->
                                                <div class="mb-0">
                                                    <!--begin::Text-->
                                                    <div class="fs-6 text-gray-600 mb-5">
                                                        Writing headlines for blog posts is as much an art as it is a
                                                        science
                                                        and probably warrants its own post, but for all advise is with
                                                        what
                                                        works for your great &amp; amazing audience.
                                                    </div>
                                                    <!--end::Text-->

                                                    <!--begin::Alert-->

                                                    <!--begin::Notice-->
                                                    <div
                                                        class="notice d-flex bg-light-warning rounded border-warning border border-dashed  p-6">
                                                        <!--begin::Icon-->
                                                        <i class="ki-duotone ki-information fs-2tx text-warning me-4"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span></i>
                                                        <!--end::Icon-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex flex-stack flex-grow-1 ">
                                                            <!--begin::Content-->
                                                            <div class=" fw-semibold">
                                                                <h4 class="text-gray-900 fw-bold">We need your
                                                                    attention!</h4>

                                                                <div class="fs-6 text-gray-700 ">To start using great
                                                                    tools, please, <a
                                                                        href="/metronic8/demo8/../demo8/utilities/wizards/vertical.html"
                                                                        class="fw-bold">Create Team Platform</a></div>
                                                            </div>
                                                            <!--end::Content-->

                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Notice-->
                                                    <!--end::Alert-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Wrapper-->

                                        </div>
                                        <!--end::Step 5-->

                                        <!--begin::Actions-->
                                        <div class="d-flex flex-stack pt-10">
                                            <div class="mr-2">
                                                <button type="button" class="btn btn-lg btn-light-primary me-3"
                                                    data-kt-stepper-action="previous">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                                    <span class="svg-icon svg-icon-4 me-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="6" y="11" width="13" height="2"
                                                                rx="1" fill="black"></rect>
                                                            <path
                                                                d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
                                                                fill="black"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->Back</button>
                                            </div>

                                            <!--begin::Wrapper-->
                                            <div>
                                                <button type="button" class="btn btn-lg btn-primary me-3"
                                                    data-kt-stepper-action="submit">
                                                    <span class="indicator-label">
                                                        Submit
                                                        <i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </span>
                                                    <span class="indicator-progress">
                                                        Please wait... <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                    </span>
                                                </button>

                                                <button type="button" class="btn btn-lg btn-primary"
                                                    data-kt-stepper-action="next">
                                                    Continue
                                                    <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="18" y="13" width="13" height="2"
                                                                rx="1" transform="rotate(-180 18 13)" fill="black">
                                                            </rect>
                                                            <path
                                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                fill="black"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Stepper-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Post-->
                </div>
                <!--end::Content-->
                {{-- FOOTER --}}
                <div class="footer py-6 d-flex flex-lg-column " id="kt_footer">
                    <!--begin::Container-->
                    <div
                        class=" container-fluid  d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">2023©</span>
                            <a href="" target="_blank" class="text-gray-800 text-hover-primary">Sadata</a>
                        </div>
                        <!--end::Copyright-->
                    </div>
                    <!--end::Container-->
                </div>
                {{-- END FOOTER --}}
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->


    <!--end::Timeline items-->

    <!--end::Content-->

    <!--end::Body-->






    <!--begin::Javascript-->
    <script>
        var hostUrl = "/metronic8/demo8/assets/";
    </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('/metronic8/demo8/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('/metronic8/demo8/assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('/metronic8/demo8/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('/metronic8/demo8/assets/js/custom/utilities/modals/create-account.js') }}"></script>
    <script src="{{ asset('/metronic8/demo8/assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('/metronic8/demo8/assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('/metronic8/demo8/assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('/metronic8/demo8/assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->





</body>
<!--end::Body-->

</html>