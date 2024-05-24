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

    <link rel="stylesheet" href="{{ url('/') }}/assets-sig/assets/css/Control.FullScreen.css" />

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
                        {{-- <ul class="navbar-nav ml-auto">

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

                        </ul> --}}
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
        <section id="ts-hero" class=" mb-0">
            <!--Fullscreen mode-->
            <div class="ts-full-screen d-flex">
                <!-- MAP
            =========================================================================================================-->
                <div class="ts-map w-100 ts-z-index__1 ">
                    <div id="map" style="height: 83vh; width:100%; " class="ts-z-index__1"></div>
                </div>
                <!-- RESULTS
            =========================================================================================================-->
                <div class="ts-results__vertical ts-results__grid ts-shadow__sm w-100 h-100 scrollbar-inner bg-white ts-z-index__2">
                    <!-- FORM
                    =====================================================================================================-->
                    <section class="ts-form__grid " data-bg-color="#f6f6f6">
                        <form class="ts-form ts-box mb-0">
                            <div class="form-row">
                                <!--Keyword-->
                                <div class="col-md-9">
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" 
                                            placeholder="Address, City or ZIP">
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-primary w-100" id="search-btn">Search</button>
                                </div>
                                <!--Category-->
                            </div>
                            <div class="ts-center__vertical justify-content-between">
                            </div>
                            <!--Hidden Form-->
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
                                        <h6 class="mb-3">Pilih Berdasarkan Event</h6>

                                        <div class="ts-column"
                                            style="max-height: 180px; overflow-x: hidden; max-width: 100%;">
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
                                            <button onclick="resetMap()" class="bt btn-sm"
                                                style="background-color: #064635; color: white;">Tampilkan Kembali
                                                Semua
                                                Marker Event</button>
                                        </div>
                                        <!--end ts-column-count-3-->

                                    </div>
                                    <!--end #features-checkboxes-->

                                </div>
                                <!--end Padding-->
                            <!--end more-options-collapse-->
                        </form>
                        <!--end ts-form-->
                    </section>
                    <!--end ts-form__grid-->

                    <!-- TITLE and CONTROLS
                    =====================================================================================================-->


                    <!-- RESULTS
                    =====================================================================================================-->
                    <section>
                        <div class="ts-results-wrapper"></div>
                    </section>

                </div>
            </div>
        </section>
    </div>
    <!--end page-->

    <script src="{{ url('/') }}/assets-sig/assets/js/jquery-3.3.1.min.js"></script>
    <script src="{{ url('/') }}/assets-sig/assets/js/popper.min.js"></script>
    <script src="{{ url('/') }}/assets-sig/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ url('/') }}/assets-sig/assets/js/owl.carousel.min.js"></script>
    <script src="{{ url('/') }}/assets-sig/assets/js/dragscroll.js"></script>
    <script src="{{ url('/') }}/assets-sig/assets/js/jquery.scrollbar.min.js"></script>
    <script src="{{ url('/') }}/assets-sig/assets/js/leaflet.js"></script>
    <script src="{{ url('/') }}/assets-sig/assets/js/leaflet.markercluster.js"></script>
    <script src="{{ url('/') }}/assets-sig/assets/js/custom.js"></script>
    <script src="{{ url('/') }}/assets-sig/assets/js/map-leaflet.js"></script>
    <script src="{{ url('/') }}/assets-sig/assets/js/Control.FullScreen.js"></script>

</body>

</html>
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
        map = new L.Map('map', {
            fullscreenControl: true,
            fullscreenControlOptions: {
                position: 'topleft',
            }
        }).setView([-1.790597, 110.410990], 8);

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
