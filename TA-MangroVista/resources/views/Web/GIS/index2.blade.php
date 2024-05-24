<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dastone - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('/') }}/assets-admin/assets/images/favicon.ico">

    <!-- App css -->
    <link href="{{ url('/') }}/assets-admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets-admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets-admin/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets-admin/dastone/plugins/daterangepicker/daterangepicker.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ url('/') }}/assets-admin/assets/css/app.min.css" rel="stylesheet" type="text/css" />

    <link href="{{ url('/') }}/assets-admin/dastone/plugins/leaflet/leaflet.css" rel="stylesheet">


    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.4.1/MarkerCluster.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.4.1/MarkerCluster.Default.css" />

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
</head>

<body>
    <!-- Left Sidenav -->
    <div class="left-sidenav">
        <!-- LOGO -->
        <div class="brand">
            <a href="index.html" class="logo">
                <span>
                    <img src="{{ url('/') }}/assets-admin/assets/images/logo-sm.png" alt="logo-small"
                        class="logo-sm">
                </span>
                <span>
                    <img src="{{ url('/') }}/assets-admin/assets/images/logo.png" alt="logo-large"
                        class="logo-lg logo-light">
                    <img src="{{ url('/') }}/assets-admin/assets/images/logo-dark.png" alt="logo-large"
                        class="logo-lg logo-dark">
                </span>
            </a>
        </div>
        <!--end logo-->
        <div class="menu-content h-100" data-simplebar>
            <ul class="metismenu left-sidenav-menu">
                <li class="menu-label mt-0">Main</li>
                <li>
                    <a href="{{url('Home')}}"> <i data-feather="home"
                            class="align-self-center menu-icon"></i><span>Beranda</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);"><i data-feather="grid"
                            class="align-self-center menu-icon"></i><span>Peta</span>
                    </a>
                </li>

                <li>
                    <a class="btn align-self-center menu-icon" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i data-feather="lock"
                            class="align-self-center menu-icon"></i>Filter</a>
                </li>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
                    id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title mt-0" id="offcanvasScrollingLabel">Pilih penanaman berdasarkan Event
                        </h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close">
                        </button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="col-md-12">
                            {{-- <div class="card-header" style="height: 50px">
                                <ul class="nav nav-tabs" style=" border-bottom: none;">
                                    <li class="nav-item">
                                            <a class="nav-link " id="info-tab" data-toggle="tab" href="#info"
                                                style="height:39px">Info</a>
                                        </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" id="tools-tab" data-toggle="tab" href="#tools"
                                            style="height:39px">Tools</a>
                                    </li>
                                </ul>
                            </div> --}}
                            <div class="tab-content">
                                <div id="tools" class="tab-pane fade show active" style="height: 60vh">
                                    <label for="event-checkbox" style="color:black">Pilih Penanaman
                                        Berdasarkan
                                        Event:</label>
                                    <div class="search-container">
                                        <input type="text" id="search-input" placeholder="Cari nama event..."
                                            style="width: 70%; height:30px; padding-bottom: 4px; color:black"
                                            onkeydown="handleSearch(event)">
                                        <button class="search-clear btn btn-sm"
                                            style="border-color: #064635; color: #064635; display: none;"
                                            id="clear-button">Clear</button>
                                        <button onclick="searchEvent()" class="btn btn-sm"
                                            style="background-color: #064635;color: white;">Cari</button>
                                    </div>
                                    <hr>
                                    <div style="max-height: 180px; overflow-y: auto; max-width: 600px;">
                                        @foreach ($list_event as $event)
                                            <div id="event-checkboxes">
                                                <input type="checkbox" id="event-checkbox-{{ $event->id }}"
                                                    value="{{ $event->id }}" onchange="filterMarkers()">
                                                <label for="event-checkbox-{{ $event->id }}"
                                                    style="white-space: nowrap;">{{ $event->nama_event }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                    <hr>
                                    <div class="mt-3" style="text-align: center;">
                                        <button onclick="resetMap()" class="btn"
                                            style="background-color: #064635; color: white;">Tampilkan Kembali
                                            Semua
                                            Marker Event</button>
                                    </div>
                                </div>
                                {{-- <div id="info" class="tab-pane fade"
                                            style="height: 60vh; overflow-y: auto;">
                                            <div class="tab-content">
                                                <label for="" style="color: black ">
                                                    Keterangan:
                                                </label>
                                                <hr style="margin-top:0">
                                                <img src="{{ url('/') }}/assets-web2/assets/images/icon/calendar.png"
                                                    alt="">
                                                <label for="" style="color:black">: Event</label>
                                                <br>
                                                <img src="{{ url('/') }}/assets-web2/assets/images/icon/tree.png"
                                                    alt="">
                                                <label for="" style="color:black">: Penanaman</label>
                                            </div>
                                            <div class="mt-3" style="text-align: center;">
                                                <button onclick="resetMap()" class="btn"
                                                    style="background-color: #064635; color: white;">Tampilkan Kembali
                                                    Semua Marker Event</button>
                                            </div>
                                        </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="hr-dashed hr-menu">
                <li class="menu-label my-2">Components & Extra</li>

                <li>
                    <a href="javascript: void(0);"><i data-feather="box"
                            class="align-self-center menu-icon"></i><span>UI Kit</span><span class="menu-arrow"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>UI Elements <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="ui-alerts.html">Alerts</a></li>
                                <li><a href="ui-avatar.html">Avatar</a></li>
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-badges.html">Badges</a></li>
                                <li><a href="ui-cards.html">Cards</a></li>
                                <li><a href="ui-carousels.html">Carousels</a></li>
                                <li><a href="ui-check-radio.html"><span>Check & Radio</span></a></li>
                                <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                <li><a href="ui-grids.html">Grids</a></li>
                                <li><a href="ui-images.html">Images</a></li>
                                <li><a href="ui-list.html">List</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-navs.html">Navs</a></li>
                                <li><a href="ui-navbar.html">Navbar</a></li>
                                <li><a href="ui-offcanvas.html">Offcanvas <span
                                            class="badge badge-soft-success ms-auto">New</span></a></li>
                                <li><a href="ui-paginations.html">Paginations</a></li>
                                <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                                <li><a href="ui-progress.html">Progress</a></li>
                                <li><a href="ui-spinners.html">Spinners</a></li>
                                <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
                                <li><a href="ui-toasts.html">Toasts</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                                <li><a href="ui-videos.html">Videos</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Advanced UI <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="advanced-animation.html">Animation</a></li>
                                <li><a href="advanced-clipboard.html">Clip Board</a></li>
                                <li><a href="advanced-highlight.html">Highlight</a></li>
                                <li><a href="advanced-idle-timer.html">Idle Timer</a></li>
                                <li><a href="advanced-kanban.html">Kanban</a></li>
                                <li><a href="advanced-lightbox.html">Lightbox</a></li>
                                <li><a href="advanced-nestable.html">Nestable List</a></li>
                                <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                                <li><a href="advanced-ratings.html">Ratings</a></li>
                                <li><a href="advanced-ribbons.html">Ribbons</a></li>
                                <li><a href="advanced-session.html">Session Timeout</a></li>
                                <li><a href="advanced-sweetalerts.html">Sweet Alerts</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Forms <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="forms-advanced.html">Advance Elements</a></li>
                                <li><a href="forms-elements.html">Basic Elements</a></li>
                                <li><a href="forms-editors.html">Editors</a></li>
                                <li><a href="forms-uploads.html">File Upload</a></li>
                                <li><a href="forms-repeater.html">Repeater</a></li>
                                <li><a href="forms-validation.html">Validation</a></li>
                                <li><a href="forms-wizard.html">Wizard</a></li>
                                <li><a href="forms-x-editable.html">X Editable</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Charts <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="charts-apex.html">Apex</a></li>
                                <li><a href="charts-chartjs.html">Chartjs</a></li>
                                <li><a href="charts-flot.html">Flot</a></li>
                                <li><a href="charts-morris.html">Morris</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Tables <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="tables-basic.html">Basic</a></li>
                                <li><a href="tables-datatable.html">Datatables</a></li>
                                <li><a href="tables-editable.html">Editable</a></li>
                                <li><a href="tables-responsive.html">Responsive</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Icons <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">

                                <li><a href="icons-dripicons.html">Dripicons</a></li>
                                <li><a href="icons-feather.html">Feather</a></li>
                                <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                <li><a href="icons-materialdesign.html">Material Design</a></li>
                                <li><a href="icons-themify.html">Themify</a></li>
                                <li><a href="icons-typicons.html">Typicons</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Maps <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="maps-google.html">Google Maps</a></li>
                                <li><a href="maps-leaflet.html">Leaflet Maps</a></li>
                                <li><a href="maps-vector.html">Vector Maps</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Email Template <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="email-templates-alert.html">Alert Email</a></li>
                                <li><a href="email-templates-basic.html">Basic Action Email</a></li>
                                <li><a href="email-templates-billing.html">Billing Email</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="widgets.html"><i data-feather="layers"
                            class="align-self-center menu-icon"></i><span>Widgets</span><span
                            class="badge badge-soft-success menu-arrow">New</span></a>
                </li>

                <li>
                    <a href="javascript: void(0);"><i data-feather="file-plus"
                            class="align-self-center menu-icon"></i><span>Pages</span><span class="menu-arrow"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="pages-blogs.html"><i
                                    class="ti-control-record"></i>Blogs</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages-faqs.html"><i
                                    class="ti-control-record"></i>FAQs</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages-pricing.html"><i
                                    class="ti-control-record"></i>Pricing</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages-profile.html"><i
                                    class="ti-control-record"></i>Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages-starter.html"><i
                                    class="ti-control-record"></i>Starter Page</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages-timeline.html"><i
                                    class="ti-control-record"></i>Timeline</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages-treeview.html"><i
                                    class="ti-control-record"></i>Treeview</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- end left-sidenav-->


    <div class="page-wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- Navbar -->
            <nav class="navbar-custom">
                <ul class="list-unstyled topbar-nav mb-0">
                    <li>
                        <button class="nav-link button-menu-mobile">
                            <i data-feather="menu" class="align-self-center topbar-icon"></i>
                        </button>
                    </li>
                </ul>
            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->

        <!-- Page Content-->
        {{-- <div class="page-content">
            <div class="container-fluid"> --}}
        <div id="map" style="height: 90vh; width:100%;" class="banner-style-2 position-relative ">
        </div>
        {{-- </div><!-- container -->
        </div> --}}
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->




    <!-- jQuery  -->
    <script src="{{ url('/') }}/assets-admin/assets/js/jquery.min.js"></script>
    <script src="{{ url('/') }}/assets-admin/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/') }}/assets-admin/assets/js/metismenu.min.js"></script>
    <script src="{{ url('/') }}/assets-admin/assets/js/waves.js"></script>
    <script src="{{ url('/') }}/assets-admin/assets/js/feather.min.js"></script>
    <script src="{{ url('/') }}/assets-admin/assets/js/simplebar.min.js"></script>
    <script src="{{ url('/') }}/assets-admin/assets/js/moment.js"></script>
    <script src="{{ url('/') }}/assets-admin/dastone/plugins/daterangepicker/daterangepicker.js"></script>

    <script src="{{ url('/') }}/assets-admin/dastone/plugins/leaflet/leaflet.js"></script>
    <script src="{{ url('/') }}/assets-admin/assets/pages/jquery.leaflet-map.init.js"></script>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.4.1/leaflet.markercluster.js"></script>
    <!-- App js -->
    <script src="{{ url('/') }}/assets-admin/assets/js/app.js"></script>

</body>

</html>
<style>
    .card-header {
        background-color: #F6FFF7;

    }

    /* width */
    ::-webkit-scrollbar {
        width: 5px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 10px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #064635;
        border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #064635;
    }

    .maps {
        z-index: 5;
    }
</style>
<script>
    var map;
    var eventMarkers = [];
    var tanamanMarkers = [];
    var removedEventMarkers = [];


    // Mendapatkan data marker event dan tanaman dari database
    var eventMarkersData = [];
    <?php foreach ($list_event as $event): ?>
    eventMarkersData.push({
        event_id: <?php echo $event->id; ?>,
        lat: <?php echo $event->lat; ?>,
        lng: <?php echo $event->lng; ?>,
        title: "<?php echo $event->nama_event; ?>",
    });
    <?php endforeach; ?>


    var tanamanMarkersData = [];
    <?php foreach ($list_tanaman as $tanaman): ?>
    tanamanMarkersData.push({
        id: <?php echo $tanaman->id; ?>,
        event_id: <?php echo isset($tanaman->eventPenanaman) ? $tanaman->eventPenanaman->id : 'null'; ?>,
        eventPenanaman: "<?php echo $tanaman->eventPenanaman ? $tanaman->eventPenanaman->nama_event : ''; ?>",
        lat: <?php echo $tanaman->lat; ?>,
        lng: <?php echo $tanaman->lng; ?>,
        lokasi: "<?php echo $tanaman->lokasi; ?>",
        sample: "<?php echo $tanaman->sample; ?>",
        tanggal_penanaman: "<?php echo date('d M Y', strtotime($tanaman->tanggal_penanaman)); ?>",
        jenis_mangrove: "<?php echo $tanaman->jenis_mangrove; ?>",
        jenis_tanah: "<?php echo $tanaman->jenis_tanah; ?>",
        masa_tumbuh: "<?php echo $tanaman->masa_tumbuh; ?>",
        umur_tanaman: "<?php echo $tanaman->umur_tanaman; ?>",
        foto: "<?php echo $tanaman->foto; ?>",
        deskripsi: "<?php echo $tanaman->deskripsi; ?>",
        status_penanaman: "<?php echo $tanaman->status_penanaman; ?>"
    });
    <?php endforeach; ?>

    // Custom icon untuk event
    var greenIcon = L.icon({
        iconUrl: '{{ url('/') }}/assets-web2/assets/images/icon/calendar.png',
        iconSize: [32, 35],
        iconAnchor: [16, 32]
    });

    // Custom icon untuk penanaman
    var redIcon = L.icon({
        iconUrl: '{{ url('/') }}/assets-web2/assets/images/icon/tree.png',
        iconSize: [32, 35],
        iconAnchor: [16, 32]
    });


    function initMap() {
        // Membuat peta
        map = L.map('map').setView([-1.790597, 110.410990], 8);

        // Menambahkan tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>  contributors | Bayu Pratama'
        }).addTo(map);

        // Menambahkan marker event ke peta
        eventMarkersData.forEach(function(markerData) {
            var marker = L.marker([markerData.lat, markerData.lng], {
                icon: greenIcon
            }).addTo(map);
            marker.bindTooltip(markerData.title, {
                permanent: false,
                direction: 'top',
                offset: [0, -25]

            });


            // Menyimpan event_id sebagai properti pada marker
            marker.event_id = markerData.event_id;

            // Menambahkan event listener pada marker event
            marker.on('click', function() {


                // Menyembunyikan semua marker event yang lain
                eventMarkers.forEach(function(eventMarker) {
                    if (eventMarker !== this) {
                        eventMarker.setOpacity(0);
                    }
                }, this);

                // Menghapus marker event yang saat ini ditekan
                var currentEventMarkerIndex = eventMarkers.indexOf(this);
                if (currentEventMarkerIndex > -1) {
                    var removedMarker = eventMarkers.splice(currentEventMarkerIndex, 1)[0];
                    removedEventMarkers.push(removedMarker);
                    removedMarker.removeFrom(map);
                }

                // Menyembunyikan marker tanaman yang tidak sesuai dengan event_id
                clearTanamanMarkers();
                tanamanMarkersData.forEach(function(tanamanMarkerData) {
                    if (tanamanMarkerData.event_id === this.event_id) {
                        var tanamanMarker = L.marker([tanamanMarkerData.lat, tanamanMarkerData
                            .lng
                        ], {
                            icon: redIcon
                        }).addTo(map);
                        // Mengatur offset vertikal untuk popup
                        var popupOffset = L.point(0, -tanamanMarker.options.icon.options
                            .iconSize[1] / 2);
                        tanamanMarker.bindPopup(`
                            <div class="popup-content" style="max-height: 200px; overflow-y: auto; width: 250px;">
                                <label style="color:black; font-weight:bolder; display: flex; align-items: center; justify-content: center;">
                                    Detail Penanaman
                                </label>
                                <table class="table table-sm mt-2">
                                    <tbody>
                                        <tr>
                                            <td style="width:145px">Lokasi</td>
                                            <td>${tanamanMarkerData.lokasi}</td>
                                        </tr>
                                        <tr>
                                            <td style="width:145px">Event Penanaman</td>
                                            <td>${tanamanMarkerData.eventPenanaman}</td>
                                        </tr>
                                        <tr>
                                            <td style="width:145px">Sample Penanaman</td>
                                            <td>${tanamanMarkerData.sample}</td>
                                        </tr>
                                        <tr>
                                            <td style="width:145px">Tanggal Penanaman</td>
                                            <td>${tanamanMarkerData.tanggal_penanaman}</td>
                                        </tr>
                                        <tr>
                                            <td style="width:145px">Jenis Mangrove</td>
                                            <td>${tanamanMarkerData.jenis_mangrove}</td>
                                        </tr>
                                        <tr>
                                            <td style="width:145px">Masa Pembibitan</td>
                                            <td>${tanamanMarkerData.masa_tumbuh}</td>
                                        </tr>
                                        <tr>
                                            <td style="width:145px">Umur Tanaman Saat Ditanam</td>
                                            <td>${tanamanMarkerData.umur_tanaman}</td>
                                        </tr>
                                        <tr>
                                            <td style="width:145px">Foto</td>
                                            <td><img src="${tanamanMarkerData.foto}" loading="lazy" class="img-fluid"></td>
                                        </tr>
                                    </tbody>                   
                                </table>
                                <hr>
                                <label style="color:black; font-weight:bolder; display: flex; align-items: center; justify-content: center;">
                                    Deskripsi Penanaman
                                </label>
                                <div>
                                    <p style="text-align: justify; color:black; font-size:12px; margin-right:15px">${tanamanMarkerData.deskripsi}</p>
                                </div>
                                <hr>
                            </div>
                        `, {
                            offset: popupOffset,
                        });
                        tanamanMarkers.push(tanamanMarker);
                    }
                }, this);

                // Mengarahkan peta ke marker tanaman dengan animasi zoom
                if (tanamanMarkers.length > 0) {
                    var selectedTanamanMarker = tanamanMarkers[0];
                    map.flyTo(selectedTanamanMarker.getLatLng(), 10, {
                        duration: 2, // Durasi animasi dalam detik
                        easeLinearity: 0.5
                    });
                }

            });

            eventMarkers.push(marker);
        });

        // Menambahkan tombol "Tampilkan Semua Marker Event"
        var resetButton = L.control({
            position: 'bottomright'
        });

        resetButton.onAdd = function(map) {
            var div = L.DomUtil.create('div', 'reset-button');
            div.innerHTML = '';
            return div;
        };

        resetButton.addTo(map);


    }



    function clearTanamanMarkers() {
        tanamanMarkers.forEach(function(tanamanMarker) {
            map.removeLayer(tanamanMarker);
        });
        tanamanMarkers = [];
    }


    function resetMap() {
        // Menghapus semua marker event yang telah dihapus sebelumnya
        removedEventMarkers.forEach(function(removedMarker) {
            removedMarker.addTo(map);
            eventMarkers.push(removedMarker);

        });
        removedEventMarkers = [];

        // Menampilkan kembali semua marker event
        eventMarkers.forEach(function(eventMarker) {
            eventMarker.setOpacity(1);

        });

        // Menghapus semua marker tanaman
        clearTanamanMarkers();

        // Mengembalikan tampilan peta seperti semula dengan animasi zoom in
        map.setView([-1.790597, 110.410990], 8, {
            animate: true,
            duration: 2,
        });

        // Reset checked status for checkboxes
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = false;
        });
    }

    // Event listener untuk mengubah tampilan marker berdasarkan pilihan event
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener("change", function() {
            if (checkbox.checked) {
                // Menyembunyikan semua marker event yang lain
                eventMarkers.forEach(function(eventMarker) {
                    if (eventMarker !== this) {
                        eventMarker.setOpacity(0);
                    }
                }, this);
            }
            filterMarkers();
        });
    });


    function filterMarkers() {
        var selectedEventIds = [];
        var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
        checkboxes.forEach(function(checkbox) {
            selectedEventIds.push(checkbox.value);
        });

        // Menyembunyikan semua marker tanaman
        clearTanamanMarkers();

        // Menampilkan marker tanaman yang sesuai dengan event_id yang dipilih
        tanamanMarkersData.forEach(function(tanamanMarkerData) {
            if (selectedEventIds.includes(String(tanamanMarkerData.event_id))) {
                var tanamanMarker = L.marker([tanamanMarkerData.lat, tanamanMarkerData.lng], {
                    icon: redIcon
                }).addTo(map);
                // Mengatur offset vertikal untuk popup
                var popupOffset = L.point(0, -tanamanMarker.options.icon.options.iconSize[1] / 2);
                tanamanMarker.bindPopup(
                    `
                            <div class="popup-content" style="max-height: 200px; overflow-y: auto; width: 250px;">
                                <label style="color:black; font-weight:bolder; display: flex; align-items: center; justify-content: center;">
                                    Detail Penanaman
                                </label>
                                <table class="table table-sm mt-2">
                                    <tbody>
                                        <tr>
                                            <td style="width:145px">Lokasi</td>
                                            <td>${tanamanMarkerData.lokasi}</td>
                                        </tr>
                                        <tr>
                                            <td style="width:145px">Event Penanaman</td>
                                            <td>${tanamanMarkerData.eventPenanaman}</td>
                                        </tr>
                                        <tr>
                                            <td style="width:145px">Sample Penanaman</td>
                                            <td>${tanamanMarkerData.sample}</td>
                                        </tr>
                                        <tr>
                                            <td style="width:145px">Tanggal Penanaman</td>
                                            <td>${tanamanMarkerData.tanggal_penanaman}</td>
                                        </tr>
                                        <tr>
                                            <td style="width:145px">Jenis Mangrove</td>
                                            <td>${tanamanMarkerData.jenis_mangrove}</td>
                                        </tr>
                                        <tr>
                                            <td style="width:145px">Masa Pembibitan</td>
                                            <td>${tanamanMarkerData.masa_tumbuh}</td>
                                        </tr>
                                        <tr>
                                            <td style="width:145px">Umur Tanaman Saat Ditanam</td>
                                            <td>${tanamanMarkerData.umur_tanaman}</td>
                                        </tr>
                                        <tr>
                                            <td style="width:145px">Foto</td>
                                            <td><img src="${tanamanMarkerData.foto}" loading="lazy" class="img-fluid"></td>
                                        </tr>
                                    </tbody>                   
                                </table>
                                <hr>
                                <label style="color:black; font-weight:bolder; display: flex; align-items: center; justify-content: center;">
                                    Deskripsi Penanaman
                                </label>
                                <div>
                                    <p style="text-align: justify; color:black; font-size:12px; margin-right:15px">${tanamanMarkerData.deskripsi}</p>
                                </div>
                                <hr>
                            </div>
                        `
                );
                tanamanMarkers.push(tanamanMarker);
            }
        });

        // Mengarahkan peta ke marker tanaman dengan animasi zoom
        if (tanamanMarkers.length > 0) {
            var selectedTanamanMarker = tanamanMarkers[0];
            map.flyTo(selectedTanamanMarker.getLatLng(), 10, {
                duration: 2,
                easeLinearity: 0.5
            });
        }

    }

    // Event listener untuk tombol "Clear"
    var clearButton = document.getElementById('clear-button');
    clearButton.addEventListener('click', function() {
        clearSearch();
        resetMap();
    });

    // search event
    function searchEvent() {
        var searchInput = document.getElementById("search-input").value.toLowerCase();
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        var clearButton = document.querySelector(".search-clear");
        var showClearButton = false;

        checkboxes.forEach(function(checkbox) {
            var label = checkbox.nextElementSibling;
            var eventName = label.innerText.toLowerCase();

            if (eventName.includes(searchInput)) {
                checkbox.style.display = "inline-block";
                label.style.display = "inline-block";
                showClearButton = true;
            } else {
                checkbox.style.display = "none";
                label.style.display = "none";
            }
        });

        if (showClearButton) {
            clearButton.style.display = "inline-block";
        } else {
            clearButton.style.display = "none";
        }
    }

    function clearSearch() {
        var searchInput = document.getElementById("search-input");
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        var clearButton = document.querySelector(".search-clear");

        searchInput.value = "";
        checkboxes.forEach(function(checkbox) {
            checkbox.style.display = "inline-block";
            checkbox.nextElementSibling.style.display = "inline-block";
            checkbox.checked = false;
        });

        clearButton.style.display = "none";
    }

    window.onload = initMap;

    $(document).ready(function() {
        $('.nav-link').on('click', function() {
            $('.nav-link').removeClass('active');
            $(this).addClass('active');

            // Ambil ID tab yang diklik
            var target = $(this).attr('href');

            // Sembunyikan semua konten tab
            $('.tab-pane').removeClass('show active');

            // Tampilkan konten tab yang sesuai dengan ID yang diklik
            $(target).addClass('show active');
        });
    });

    function handleSearch(event) {
        if (event.keyCode === 13) {
            searchEvent();
            event.preventDefault();
        }
    }
</script>
