<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="ThemeStarz">

    <!--CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/assets-sig/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets-sig/assets/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets-sig/assets/css/jquery.scrollbar.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets-sig/assets/css/leaflet.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets-sig/assets/css/style.css">

    <!-- leaflet start -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets-web2/assets/css/leaflet.defaultextent.css">
    <script src="{{ url('/') }}/assets-web2/assets/js/leaflet.defaultextent.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.js" charset="utf-8"></script>
    <!-- leaflet end -->

    <link rel="stylesheet" href="Control.FullScreen.css" />
    <script src="Control.FullScreen.js"></script>
    <title>MyHouse - Advanced Real Estate HTML Template by ThemeStarz</title>

</head>

<body>

    <!-- WRAPPER
=====================================================================================================================-->
    <div class="ts-page-wrapper ts-homepage" id="page-top">

        <!--*********************************************************************************************************-->
        <!--HEADER **************************************************************************************************-->
        <!--*********************************************************************************************************-->
        <header id="ts-header" class="fixed-top">

            <!-- SECONDARY NAVIGATION
            =============================================================================================================-->
            <nav id="ts-secondary-navigation" class="navbar p-0" style="background-color: #064635">
                <div class="container justify-content-end justify-content-sm-between">
                    <a class="navbar-brand" href="index-map-leaflet-fullscreen.html">
                        <div class="row" style="margin-bottom: -10px">
                            <img src="{{ url('/') }}/assets-web2/assets/images/logo/logo-white.png"
                                style="width: 25px; height:25px">
                            <h6 style="color: rgb(245, 244, 244)" class="mt-2 ml-2">MangroVista</h6>
                        </div>
                    </a>

                    <!--Left Side-->
                    <div class="navbar-nav d-none d-sm-block">
                        <!--Phone-->
                        <span class="mr-4">
                            <i class="fa fa-phone-square mr-1"></i>
                            +1 123 456 789
                        </span>
                        <!--Email-->
                        <a href="#">
                            <i class="fa fa-envelope mr-1"></i>
                            hello@example.com
                        </a>
                    </div>

                    <!--Right Side-->

                    <!--end navbar-nav-->
                </div>
                <!--end container-->
            </nav>

            <!--PRIMARY NAVIGATION
            =============================================================================================================-->
            <nav id="ts-primary-navigation" class="navbar navbar-expand-md navbar-light">
                <div class="container">

                    <!--Brand Logo-->
                    <a class="navbar-brand" href="index-map-leaflet-fullscreen.html">
                        <img src="{{ url('/') }}/assets-sig/assets/img/logo.png" alt="">
                    </a>

                    <!--Responsive Collapse Button-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarPrimary"
                        aria-controls="navbarPrimary" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!--Collapsing Navigation-->
                    <div class="collapse navbar-collapse" id="navbarPrimary">

                        <!--LEFT NAVIGATION MAIN LEVEL
                    =================================================================================================-->
                        <ul class="navbar-nav">

                            <!--HOME (Main level)
                        =============================================================================================-->
                            <li class="nav-item ts-has-child">

                                <!--Main level link-->
                                <a class="nav-link active" href="#">
                                    Home
                                    <span class="sr-only">(current)</span>
                                </a>

                                <!-- List (1st level) -->
                                <ul class="ts-child">

                                    <!-- MAP (1st level)
                                =====================================================================================-->
                                    <li class="nav-item ts-has-child">

                                        <a href="#" class="nav-link">Map</a>

                                        <!--List (2nd level) -->
                                        <ul class="ts-child">

                                            <!-- OPENSTREETMAP (2nd level level)
                                        =============================================================================-->
                                            <li class="nav-item ts-has-child">

                                                <a href="#" class="nav-link">OpenStreetMap</a>

                                                <!--List (3rd level) -->
                                                <ul class="ts-child">

                                                    <li class="nav-item">
                                                        <a href="index-map-leaflet-fullscreen.html"
                                                            class="nav-link">Full Screen</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="index-map-leaflet-form-bottom.html"
                                                            class="nav-link">Form Bottom</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="index-map-leaflet-half-map.html" class="nav-link">Half
                                                            Map</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="index-map-leaflet-left-results.html"
                                                            class="nav-link">Left Results</a>
                                                    </li>

                                                </ul>

                                            </li>
                                            <!--end OpenStreetMap-->

                                            <!-- MAPBOX (2nd level level)
                                        =============================================================================-->
                                            <li class="nav-item ts-has-child">

                                                <a href="#" class="nav-link">MapBox</a>

                                                <!--List (3rd level) -->
                                                <ul class="ts-child">

                                                    <li class="nav-item">
                                                        <a href="index-map-mapbox-fullscreen.html" class="nav-link">Full
                                                            Screen</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="index-map-mapbox-form-bottom.html"
                                                            class="nav-link">Form Bottom</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="index-map-mapbox-half-map.html" class="nav-link">Half
                                                            Map</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="index-map-mapbox-left-results.html"
                                                            class="nav-link">Left Results</a>
                                                    </li>

                                                </ul>

                                            </li>
                                            <!--end MapBox-->

                                            <!-- GOOGLE (2nd level level)
                                        =============================================================================-->
                                            <li class="nav-item ts-has-child">

                                                <a href="#" class="nav-link">Google</a>

                                                <!--List (3rd level) -->
                                                <ul class="ts-child">

                                                    <li class="nav-item">
                                                        <a href="index-map-google-fullscreen.html"
                                                            class="nav-link">Full Screen</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="index-map-google-form-bottom.html"
                                                            class="nav-link">Form Bottom</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="index-map-google-half-map.html" class="nav-link">Half
                                                            Map</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="index-map-google-left-results.html"
                                                            class="nav-link">Left Results</a>
                                                    </li>

                                                </ul>

                                            </li>
                                            <!--end Google-->

                                            <!-- HERE (2nd level level)
                                        =============================================================================-->
                                            <li class="nav-item ts-has-child">

                                                <a href="#" class="nav-link">Here</a>

                                                <!--List (3rd level) -->
                                                <ul class="ts-child">

                                                    <li class="nav-item">
                                                        <a href="index-map-here-fullscreen.html" class="nav-link">Full
                                                            Screen</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="index-map-here-form-bottom.html"
                                                            class="nav-link">Form Bottom</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="index-map-here-half-map.html" class="nav-link">Half
                                                            Map</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="index-map-here-left-results.html"
                                                            class="nav-link">Left Results</a>
                                                    </li>

                                                </ul>

                                            </li>
                                            <!--end Here-->

                                            <!-- BING (2nd level level)
                                        =============================================================================-->
                                            <li class="nav-item ts-has-child">

                                                <a href="#" class="nav-link">Bing</a>

                                                <!--List (3rd level) -->
                                                <ul class="ts-child">

                                                    <li class="nav-item">
                                                        <a href="index-map-bing-fullscreen.html" class="nav-link">Full
                                                            Screen</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="index-map-bing-form-bottom.html"
                                                            class="nav-link">Form Bottom</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="index-map-bing-half-map.html" class="nav-link">Half
                                                            Map</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="index-map-bing-left-results.html"
                                                            class="nav-link">Left Results</a>
                                                    </li>

                                                </ul>

                                            </li>
                                            <!--end Bing-->

                                        </ul>
                                        <!--end List (2nd level)-->

                                    </li>
                                    <!--end MAP (1st level)-->

                                    <!-- SLIDER (1st level)
                                =====================================================================================-->
                                    <li class="nav-item ts-has-child">

                                        <a href="#" class="nav-link">Slider</a>

                                        <!--List (2nd level) -->
                                        <ul class="ts-child">

                                            <li class="nav-item">
                                                <a href="index-slider.html" class="nav-link">Slider Default</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="index-slider-fullscreen.html" class="nav-link">Full
                                                    Screen</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="index-slider-form-vertical.html" class="nav-link">Vertical
                                                    Form</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="index-slider-form-horizontal.html"
                                                    class="nav-link">Horizontal Form</a>
                                            </li>

                                        </ul>
                                        <!--end List (2nd level) -->

                                    </li>
                                    <!--end SLIDER (1st level)-->

                                    <!-- IMAGE (1st level)
                                =====================================================================================-->
                                    <li class="nav-item ts-has-child">

                                        <a href="#" class="nav-link">Image</a>

                                        <!--List (2nd level) -->
                                        <ul class="ts-child">

                                            <li class="nav-item">
                                                <a href="index-image-form-horizontal-dark.html"
                                                    class="nav-link">Horizontal Form</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="index-image-form-vertical-light.html"
                                                    class="nav-link">Vertical Form</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="index-image-fullscreen.html" class="nav-link">Full Screen</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="index-video-background.html" class="nav-link">Video
                                                    Background</a>
                                            </li>

                                        </ul>
                                        <!--end List (2nd level) -->

                                    </li>
                                    <!--end SLIDER (1st level)-->

                                </ul>
                                <!--end List (1st level) -->

                            </li>
                            <!--end HOME nav-item-->

                            <!--LISTING (Main level)
                        =============================================================================================-->
                            <li class="nav-item ts-has-child">

                                <!--Main level link-->
                                <a class="nav-link" href="#">Listing</a>

                                <!-- List (1st level) -->
                                <ul class="ts-child">

                                    <!-- CATEGORY ICONS (1st level)
                                =====================================================================================-->
                                    <li class="nav-item">

                                        <a href="listing-category-icons.html" class="nav-link">Category Icons</a>

                                    </li>
                                    <!--end CATEGORY ICONS (1st level)-->

                                    <!-- GRID (1st level)
                                =====================================================================================-->
                                    <li class="nav-item ts-has-child">

                                        <a href="#" class="nav-link">Grid</a>

                                        <!--List (2nd level) -->
                                        <ul class="ts-child">

                                            <li class="nav-item">
                                                <a href="listing-grid-3-columns.html" class="nav-link">Grid 3
                                                    Columns</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="listing-grid-4-columns.html" class="nav-link">Grid 4
                                                    Columns</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="listing-grid-mixed.html" class="nav-link">Mixed</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="listing-grid-sidebar-left.html" class="nav-link">Sidebar
                                                    Left</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="listing-grid-sidebar-right.html" class="nav-link">Sidebar
                                                    Right</a>
                                            </li>

                                        </ul>
                                        <!--end List (2nd level) -->

                                    </li>
                                    <!--end GRID (1st level)-->

                                    <!-- LIST (1st level)
                                =====================================================================================-->
                                    <li class="nav-item ts-has-child">

                                        <a href="#" class="nav-link">List</a>

                                        <!--List (2nd level) -->
                                        <ul class="ts-child">

                                            <li class="nav-item">
                                                <a href="listing-list-sidebar-left.html" class="nav-link">Sidebar
                                                    Left</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="listing-list-sidebar-right.html" class="nav-link">Sidebar
                                                    Right</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="listing-list-compact-sidebar.html" class="nav-link">Compact
                                                    with Sidebar</a>
                                            </li>

                                        </ul>
                                        <!--end List (2nd level) -->

                                    </li>
                                    <!--end LIST (1st level)-->

                                    <!-- PROPERTY (1st level)
                                =====================================================================================-->
                                    <li class="nav-item ts-has-child">

                                        <a href="#" class="nav-link">Property</a>

                                        <!--List (2nd level) -->
                                        <ul class="ts-child">

                                            <li class="nav-item">
                                                <a href="detail-01.html" class="nav-link">Property Detail v1</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="detail-02.html" class="nav-link">Property Detail v2</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="detail-03.html" class="nav-link">Property Detail v3</a>
                                            </li>

                                        </ul>
                                        <!--end List (2nd level) -->

                                    </li>
                                    <!--end PROPERTY (1st level)-->

                                </ul>
                                <!--end List (1st level) -->

                            </li>
                            <!--end LISTING nav-item-->

                            <!--PAGES (Main level)
                        =============================================================================================-->
                            <li class="nav-item ts-has-child">

                                <!--Main level link-->
                                <a class="nav-link" href="#">Pages</a>

                                <!-- List (1st level) -->
                                <ul class="ts-child">

                                    <!-- AGENCY (1st level)
                                =====================================================================================-->
                                    <li class="nav-item ts-has-child">

                                        <a href="#" class="nav-link">Agency</a>

                                        <!--List (2nd level) -->
                                        <ul class="ts-child">

                                            <li class="nav-item">
                                                <a href="agencies-list.html" class="nav-link">Agencies List</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="agency-detail.html" class="nav-link">Agency Detail</a>
                                            </li>

                                        </ul>
                                        <!--end List (2nd level) -->

                                    </li>
                                    <!--end AGENCY (1st level)-->

                                    <!-- AGENTS (1st level)
                                =====================================================================================-->
                                    <li class="nav-item ts-has-child">

                                        <a href="#" class="nav-link">Agents</a>

                                        <!--List (2nd level) -->
                                        <ul class="ts-child">

                                            <li class="nav-item">
                                                <a href="agencies-list.html" class="nav-link">Agents List</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="agent-detail-01.html" class="nav-link">Agent Detail v1</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="agent-detail-02.html" class="nav-link">Agent Detail v2</a>
                                            </li>

                                        </ul>
                                        <!--end List (2nd level) -->

                                    </li>
                                    <!--end LIST (1st level)-->

                                    <!-- EDIT PROPERTY (1st level)
                                =====================================================================================-->
                                    <li class="nav-item">
                                        <a href="edit-property.html" class="nav-link">Edit Property</a>
                                    </li>
                                    <!--end EDIT PROPERTY (1st level)-->

                                    <!-- FAQ (1st level)
                                =====================================================================================-->
                                    <li class="nav-item">
                                        <a href="faq.html" class="nav-link">FAQ</a>
                                    </li>
                                    <!--end FAQ (1st level)-->

                                    <!-- LOGIN (1st level)
                                =====================================================================================-->
                                    <li class="nav-item">
                                        <a href="login.html" class="nav-link">Login</a>
                                    </li>
                                    <!--end LOGIN (1st level)-->

                                    <!-- PRICING (1st level)
                                =====================================================================================-->
                                    <li class="nav-item">
                                        <a href="pricing.html" class="nav-link">Pricing</a>
                                    </li>
                                    <!--end PRICING (1st level)-->

                                    <!-- REGISTER (1st level)
                                =====================================================================================-->
                                    <li class="nav-item">
                                        <a href="register.html" class="nav-link">Register</a>
                                    </li>
                                    <!--end REGISTER (1st level)-->

                                    <!-- SUBMIT (1st level)
                                =====================================================================================-->
                                    <li class="nav-item">
                                        <a href="submit.html" class="nav-link">Submit Property</a>
                                    </li>
                                    <!--end SUBMIT (1st level)-->

                                    <!-- SUBMIT PREVIEW (1st level)
                                =====================================================================================-->
                                    <li class="nav-item">
                                        <a href="preview.html" class="nav-link">Submit Preview</a>
                                    </li>
                                    <!--end SUBMIT PREVIEW (1st level)-->

                                    <!-- SUBMITTED (1st level)
                                =====================================================================================-->
                                    <li class="nav-item">
                                        <a href="submitted.html" class="nav-link">Submitted</a>
                                    </li>
                                    <!--end SUBMITTED(1st level)-->

                                </ul>
                                <!--end List (1st level) -->

                            </li>
                            <!--end PAGES nav-item-->

                            <!--ABOUT US (Main level)
                        =============================================================================================-->
                            <li class="nav-item">
                                <a class="nav-link" href="about-us.html">About Us</a>
                            </li>
                            <!--end ABOUT US nav-item-->

                            <!--CONTACT (Main level)
                        =============================================================================================-->
                            <li class="nav-item">
                                <a class="nav-link mr-2" href="contact.html">Contact</a>
                            </li>
                            <!--end CONTACT nav-item-->

                        </ul>
                        <!--end Left navigation main level-->

                        <!--RIGHT NAVIGATION MAIN LEVEL
                    =================================================================================================-->
                        <ul class="navbar-nav ml-auto">

                            <!--LOGIN (Main level)
                        =============================================================================================-->
                            <li class="nav-item">
                                <a class="nav-link" href="login.html">Login</a>
                            </li>

                            <!--REGISTER (Main level)
                        =============================================================================================-->
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="register.html">Register</a>
                            </li>

                            <!--SUBMIT (Main level)
                        =============================================================================================-->
                            <li class="nav-item">
                                <a class="btn btn-outline-primary btn-sm m-1 px-3" href="submit.html">
                                    <i class="fa fa-plus small mr-2"></i>
                                    Add Property
                                </a>
                            </li>

                        </ul>
                        <!--end Right navigation-->

                    </div>
                    <!--end navbar-collapse-->
                </div>
                <!--end container-->
            </nav>
            <!--end #ts-primary-navigation.navbar-->

        </header>
        <!--end Header-->

        <!-- HERO MAP
        =================================================================================================================-->
        <section id="ts-hero" class="mb-0">

            <!--Fullscreen mode-->
            <div class="ts-full-screen d-flex ">
                <!-- MAP
            =========================================================================================================-->
                <div class="ts-map w-100 ts-z-index__1 ">
                    <div id="map"  style="height: 83vh; width:100%; margin-top:110px" class="ts-z-index__1"></div>
                </div>

                <!-- RESULTS
            =========================================================================================================-->
                <div class="ts-results__vertical ts-results__grid ts-shadow__sm w-100 h-100 scrollbar-inner bg-white ts-z-index__2 mt-4">

                    <!-- FORM
                    =====================================================================================================-->
                    <section class="ts-form__grid" data-bg-color="#f6f6f6">

                        <!--Title-->
                        <h4 class="font-weight-normal ts-text-color-light">Search Filter</h4>

                        <!--Form-->
                        <form class="ts-form ts-box mb-0">
                            <div class="form-row">

                                <!--Keyword-->
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" id="keyword" name="keyword"
                                            placeholder="Address, City or ZIP">
                                    </div>
                                </div>

                                <!--Category-->
                                <div class="col-md-3">
                                    <select class="custom-select mb-3" id="type" name="category">
                                        <option value="">Type</option>
                                        <option value="1">Apartment</option>
                                        <option value="2">Villa</option>
                                        <option value="3">Land</option>
                                        <option value="4">Garage</option>
                                    </select>
                                </div>

                                <!--Status-->
                                <div class="col-md-3">
                                    <select class="custom-select mb-3" id="status" name="status">
                                        <option value="">Status</option>
                                        <option value="1">Sale</option>
                                        <option value="2">Rent</option>
                                    </select>
                                </div>

                                <!--Min Area-->
                                <div class="col-sm-3">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control border-right-0" id="min-area"
                                            placeholder="Min Area">
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-white border-left-0">m<sup>2</sup></span>
                                        </div>
                                    </div>
                                </div>

                                <!--Max Area-->
                                <div class="col-sm-3">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control border-right-0" id="max-area"
                                            placeholder="Max Area">
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-white border-left-0">m<sup>2</sup></span>
                                        </div>
                                    </div>
                                </div>

                                <!--Min Price-->
                                <div class="col-sm-3">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control border-right-0" id="min-price"
                                            placeholder="Min Price">
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-white border-left-0">$</span>
                                        </div>
                                    </div>
                                </div>

                                <!--Max Price-->
                                <div class="col-sm-3">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control border-right-0" id="max-price"
                                            placeholder="Max Price">
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-white border-left-0">$</span>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="ts-center__vertical justify-content-between">
                                <!--More Options Button-->
                                <a href="#more-options-collapse" class="collapsed" data-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="more-options-collapse">
                                    <i
                                        class="fa fa-plus-circle ts-text-color-primary mr-2 ts-visible-on-collapsed"></i>
                                    <i
                                        class="fa fa-minus-circle ts-text-color-primary mr-2 ts-visible-on-uncollapsed"></i>
                                    More Options
                                </a>

                                <!--Submit button-->
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-primary w-100"
                                        id="search-btn">Search</button>
                                </div>

                            </div>

                            <!--Hidden Form-->
                            <div class="collapse" id="more-options-collapse">

                                <!--Padding-->
                                <div class="pt-4">

                                    <!--Row-->
                                    <div class="form-row">

                                        <!--Bedrooms-->
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="search-container">
                                                    <input type="text" id="search-input"
                                                        placeholder="Cari nama event..."
                                                        style="width: 70%; height:30px; padding-bottom: 4px; color:black"
                                                        onkeydown="handleSearch(event)">
                                                    <button class="search-clear btn btn-sm"
                                                        style="border-color: #064635; color: #064635; display: none;"
                                                        id="clear-button">Clear</button>
                                                    <button onclick="searchEvent()" class="btn btn-sm"
                                                        style="background-color: #064635;color: white;">Cari</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!--end row-->

                                    <!--Checkboxes-->
                                    <div id="features-checkboxes" class="w-100">
                                        <h6 class="mb-3">Features</h6>

                                        <div class="ts-column" style="max-height: 180px; overflow-x: hidden; max-width: 100%;">
                                            <div>
                                                @foreach ($list_event as $event)
                                                    <div id="event-checkboxes">
                                                        <input type="checkbox" id="event-checkbox-{{ $event->id }}"
                                                            value="{{ $event->id }}" onchange="filterMarkers()">
                                                        <label for="event-checkbox-{{ $event->id }}"
                                                            style="white-space: nowrap;">{{ $event->nama_event }}</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="mt-3" style="text-align: center;">
                                            <button onclick="resetMap()" class="btn"
                                                style="background-color: #064635; color: white;">Tampilkan Kembali
                                                Semua
                                                Marker Event</button>
                                        </div>
                                        <!--end ts-column-count-3-->

                                    </div>
                                    <!--end #features-checkboxes-->

                                </div>
                                <!--end Padding-->
                            </div>
                            <!--end more-options-collapse-->
                        </form>
                        <!--end ts-form-->
                    </section>
                    <!--end ts-form__grid-->

                    <!-- TITLE and CONTROLS
                    =====================================================================================================-->

                    <section class="ts-center__vertical justify-content-between px-4 pt-3 pb-0">
                        <h4 class="font-weight-normal ts-text-color-light mb-0">28 Properties Found</h4>

                        <div id="display-control" class="d-none d-md-block">

                            <a href="#"
                                class="btn btn-outline-secondary active px-3 mr-2 mb-2 ts-btn-border-muted">
                                <i class="fa fa-th-large"></i>
                            </a>
                            <a href="#" class="btn btn-outline-secondary px-3 mb-2 ts-btn-border-muted">
                                <i class="fa fa-th-list"></i>
                            </a>
                        </div>

                    </section>

                    <!-- RESULTS
                    =====================================================================================================-->
                    <section id="ts-results" class="h-100">
                        <div class="ts-results-wrapper"></div>
                    </section>
                    
                </div>
                <!--end ts-results-vertical-->
            </div>
            <!--end full-screen-->
        </section>

       
    </div>
    <!--end page-->

    <script src="{{ url('/') }}/assets-sig/assets/js/jquery-3.3.1.min.js"></script>
    <script src="{{ url('/') }}/assets-sig/assets/js/popper.min.js"></script>
    <script src="{{ url('/') }}/assets-sig/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ url('/') }}/assets-sig/assets/js/owl.carousel.min.js"></script>
    <script src="{{ url('/') }}/assets-sig/assets/js/dragscroll.js"></script>
    <script src="{{ url('/') }}/assets-sig/assets/js/jquery.scrollbar.min.js"></script>
    {{-- <script src="{{ url('/') }}/assets-sig/assets/js/leaflet.js"></script>
    <script src="{{ url('/') }}/assets-sig/assets/js/leaflet.markercluster.js"></script>
    <script src="{{ url('/') }}/assets-sig/assets/js/custom.js"></script>
    <script src="{{ url('/') }}/assets-sig/assets/js/map-leaflet.js"></script> --}}
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.4.1/leaflet.markercluster.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>

