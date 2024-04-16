{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | MangroVista {{ $title }}</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="colorlib" />

    <link rel="icon" href="{{ url('/') }}/assets/files/assets/images/01.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css"
        href="{{ url('/') }}/assets/files/bower_components/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ url('/') }}/assets/files/assets/pages/waves/css/waves.min.css" type="text/css"
        media="all">

    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/files/assets/icon/feather/css/feather.css">


    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/files/assets/css/font-awesome-n.min.css">

    <link rel="stylesheet" href="{{ url('/') }}/assets/files/bower_components/chartist/css/chartist.css"
        type="text/css" media="all">

    <link rel="stylesheet" type="text/css"
        href="{{ url('/') }}/assets/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ url('/') }}/assets/files/assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ url('/') }}/assets/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">

    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/files/assets/css/widget.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/assets/css/leaflet.defaultextent.css">
    <script src="{{ url('public') }}/assets/js/leaflet.defaultextent.js"></script>

    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/files/assets/css/pages.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.js" charset="utf-8"></script>

    <link rel="stylesheet" type="text/css"
        href="{{ url('/') }}/assets/files/bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css" />
    <link rel="stylesheet" type="text/css"
        href="{{ url('/') }}/assets/files/bower_components/multiselect/css/multi-select.css" />
    <link rel="stylesheet" href="{{ url('/') }}/assets/files/bower_components/select2/css/select2.min.css" />

    <link rel="stylesheet" type="text/css"
        href="{{ url('/') }}/assets/files/bower_components/animate.css/css/animate.css">

    <link href="{{ url('/') }}/assets/files/assets/pages/jquery.filer/css/jquery.filer.css" type="text/css" rel="stylesheet" />
    <link href="{{ url('/') }}/assets/files/assets/pages/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css" />
    <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
    @stack('style')
</head>

<body>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <x-layout.header />
            <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="p-fixed users-main">
                        <div class="user-box">
                            <div class="chat-search-box">
                                <a class="back_friendlist">
                                    <i class="feather icon-x"></i>
                                </a>

                                <div class="right-icon-control">
                                    <div class="input-group input-group-button">
                                        <input type="text" id="search-friends" name="footer-email"
                                            class="form-control" placeholder="Search Friend">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary waves-effect waves-light" type="button"><i
                                                    class="feather icon-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-friend-list">
                                <div class="media userlist-box waves-effect waves-light" data-id="1"
                                    data-status="online" data-username="Josephin Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius img-radius"
                                            src="{{ url('/') }}/assets/files/assets/images/avatar-3.jpg"
                                            alt="Generic placeholder image ">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="chat-header">Josephin Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="2"
                                    data-status="online" data-username="Lary Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius"
                                            src="{{ url('/') }}/assets/files/assets/images/avatar-2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="3"
                                    data-status="online" data-username="Alice">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius"
                                            src="{{ url('/') }}/assets/files/assets/images/avatar-4.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alice</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="4"
                                    data-status="offline" data-username="Alia">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius"
                                            src="{{ url('/') }}/assets/files/assets/images/avatar-3.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-default"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min
                                                ago</small></div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="5"
                                    data-status="offline" data-username="Suzen">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius"
                                            src="{{ url('/') }}/assets/files/assets/images/avatar-2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-default"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min
                                                ago</small></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <x-layout.sidebar />

                    <div class="pcoded-content">
                        <x-utils.notif />


                        {{ $slot }}

                    </div>

                    <div id="styleSelector">
                    </div>

                </div>

            </div>
            <x-layout.footer />
        </div>
    </div>

    <script data-cfasync="false"
        src="{{ url('/') }}/assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/assets/files/bower_components/jquery/js/jquery.min.js">
    </script>
    <script type="text/javascript" src="{{ url('/') }}/assets/files/bower_components/jquery-ui/js/jquery-ui.min.js">
    </script>
    <script type="text/javascript" src="{{ url('/') }}/assets/files/bower_components/popper.js/js/popper.min.js">
    </script>
    <script type="text/javascript" src="{{ url('/') }}/assets/files/bower_components/bootstrap/js/bootstrap.min.js">
    </script>

    <script src="{{ url('/') }}/assets/files/assets/pages/waves/js/waves.min.js"></script>

    <script type="text/javascript"
        src="{{ url('/') }}/assets/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

    <script type="text/javascript" src="{{ url('/') }}/assets/files/bower_components/modernizr/js/modernizr.js">
    </script>
    <script type="text/javascript" src="{{ url('/') }}/assets/files/bower_components/modernizr/js/css-scrollbars.js">
    </script>

    <script src="{{ url('/') }}/assets/files/assets/pages/chart/float/jquery.flot.js"></script>
    <script src="{{ url('/') }}/assets/files/assets/pages/chart/float/jquery.flot.categories.js"></script>
    <script src="{{ url('/') }}/assets/files/assets/pages/chart/float/curvedLines.js"></script>
    <script src="{{ url('/') }}/assets/files/assets/pages/chart/float/jquery.flot.tooltip.min.js"></script>

    <script src="{{ url('/') }}/assets/files/bower_components/chartist/js/chartist.js"></script>

    <script src="{{ url('/') }}/assets/files/assets/pages/widget/amchart/amcharts.js"></script>
    <script src="{{ url('/') }}/assets/files/assets/pages/widget/amchart/serial.js"></script>
    <script src="{{ url('/') }}/assets/files/assets/pages/widget/amchart/light.js"></script>

    <script src="{{ url('/') }}/assets/files/assets/js/pcoded.min.js"></script>
    <script src="{{ url('/') }}/assets/files/assets/js/vertical/vertical-layout.min.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/assets/files/assets/pages/dashboard/custom-dashboard.min.js">
    </script>
    <script type="text/javascript" src="{{ url('/') }}/assets/files/assets/js/script.min.js"></script>

    <script src="{{ url('/') }}/assets/files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('/') }}/assets/files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js">
    </script>
    <script src="{{ url('/') }}/assets/files/assets/pages/data-table/js/jszip.min.js"></script>
    <script src="{{ url('/') }}/assets/files/assets/pages/data-table/js/pdfmake.min.js"></script>
    <script src="{{ url('/') }}/assets/files/assets/pages/data-table/js/vfs_fonts.js"></script>
    <script src="{{ url('/') }}/assets/files/bower_components/datatables.net-buttons/js/buttons.print.min.js">
    </script>
    <script src="{{ url('/') }}/assets/files/bower_components/datatables.net-buttons/js/buttons.html5.min.js">
    </script>
    <script src="{{ url('/') }}/assets/files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js">
    </script>
    <script
        src="{{ url('/') }}/assets/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js">
    </script>
    <script
        src="{{ url('/') }}/assets/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js">
    </script>
    <script src="{{ url('/') }}/assets/files/assets/pages/data-table/js/data-table-custom.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ url('/') }}/assets/files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/assets/files/assets/js/script.js"></script>

    <script type="text/javascript" src="{{ url('/') }}/assets/files/bower_components/select2/js/select2.full.min.js">
    </script>

    <script type="text/javascript"
        src="{{ url('/') }}/assets/files/bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>
    <script type="text/javascript"
        src="{{ url('/') }}/assets/files/bower_components/multiselect/js/jquery.multi-select.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/assets/files/assets/pages/advance-elements/select2-custom.js">
    </script>

    <script type="text/javascript" src="{{ url('/') }}/assets/files/assets/pages/dashboard/analytic-dashboard.min.js">
    </script>
    <script type="text/javascript" src="{{ url('/') }}/assets/files/assets/js/script.min.js"></script>

    <script src="{{ url('/') }}/assets/files/assets/pages/widget/amchart/amcharts.js"></script>
    <script src="{{ url('/') }}/assets/files/assets/pages/widget/amchart/gauge.js"></script>
    <script src="{{ url('/') }}/assets/files/assets/pages/widget/amchart/serial.js"></script>
    <script src="{{ url('/') }}/assets/files/assets/pages/widget/amchart/light.js"></script>
    <script src="{{ url('/') }}/assets/files/assets/pages/widget/amchart/pie.min.js"></script>
    <script src="{{ url('/') }}/assets/files/assets/pages/widget/amchart/ammap.min.js"></script>
    <script src="{{ url('/') }}/assets/files/assets/pages/widget/amchart/usaLow.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/assets/files/assets/js/animation.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>

    <script type="text/javascript" src="{{ url('/') }}/assets/files/bower_components/select2/js/select2.full.min.js"></script>

    <script type="text/javascript" src="{{ url('/') }}/assets/files/bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js">
    </script>
    <script type="text/javascript" src="{{ url('/') }}/assets/files/bower_components/multiselect/js/jquery.multi-select.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/assets/files/assets/js/jquery.quicksearch.js"></script>

    <script type="text/javascript" src="{{ url('/') }}/assets/files/assets/pages/advance-elements/select2-custom.js"></script>

    @stack('script')
</body>

</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Admin | MangroVista</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/dist/css/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/dist/css/bootstrap-icons.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace();
    </script>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('/') }}/assets-admin/assets/images/6.png">

    <!-- jvectormap -->
    <link href="{{ url('/') }}/assets-admin/dastone/plugins/jvectormap/jquery-jvectormap-2.0.2.css"
        rel="stylesheet">

    <!-- App css -->
    <link href="{{ url('/') }}/assets-admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets-admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets-admin/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets-admin/dastone/plugins/daterangepicker/daterangepicker.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ url('/') }}/assets-admin/assets/css/app.min.css" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="{{ url('/') }}/assets-admin/dastone/plugins/datatables/dataTables.bootstrap5.min.css"
        rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets-admin/dastone/plugins/datatables/buttons.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ url('/') }}/assets-admin/dastone/plugins/datatables/responsive.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/assets/css/leaflet.defaultextent.css">
    <script src="{{ url('public') }}/assets/js/leaflet.defaultextent.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <!--calendar css-->
    <link href="{{ url('/') }}/assets-admin/dastone/plugins/fullcalendar/packages/core/main.css"
        rel="stylesheet" />
    <link href="{{ url('/') }}/assets-admin/dastone/plugins/fullcalendar/packages/daygrid/main.css"
        rel="stylesheet" />
    <link href="{{ url('/') }}/assets-admin/dastone/plugins/fullcalendar/packages/bootstrap/main.css"
        rel="stylesheet" />
    <link href="{{ url('/') }}/assets-admin/dastone/plugins/fullcalendar/packages/timegrid/main.css"
        rel="stylesheet" />
    <link href="{{ url('/') }}/assets-admin/dastone/plugins/fullcalendar/packages/list/main.css"
        rel="stylesheet" />

    <link href="{{ url('/') }}/assets-admin/dastone/plugins/lightpick/lightpick.css" rel="stylesheet" />

    @stack('style')
</head>

<body class="">
    <!-- Left Sidenav -->
    <x-layout.sidebar />
    <!-- end left-sidenav-->


    <div class="page-wrapper">
        <!-- Top Bar Start -->
        <x-layout.header />
        <!-- Top Bar End -->

        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                <x-utils.notif />
                <!-- Page-Title -->
                {!! $slot !!}


            </div><!-- container -->

            <x-layout.footer />
            <!--end footer-->
        </div>
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

    <script src="{{ url('/') }}/assets-admin/dastone/plugins/apex-charts/apexcharts.min.js"></script>
    <script src="{{ url('/') }}/assets-admin/dastone/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{ url('/') }}/assets-admin/dastone/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="{{ url('/') }}/assets-admin/assets/pages/jquery.analytics_dashboard.init.js"></script>

    <!-- App js -->
    <script src="{{ url('/') }}/assets-admin/assets/js/app.js"></script>

    <!-- Required datatable js -->
    <script src="{{ url('/') }}/assets-admin/dastone/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('/') }}/assets-admin/dastone/plugins/datatables/dataTables.bootstrap5.min.js"></script>
    <!-- Buttons examples -->
    <script src="{{ url('/') }}/assets-admin/dastone/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="{{ url('/') }}/assets-admin/dastone/plugins/datatables/buttons.bootstrap5.min.js"></script>
    <script src="{{ url('/') }}/assets-admin/dastone/plugins/datatables/jszip.min.js"></script>
    <script src="{{ url('/') }}/assets-admin/dastone/plugins/datatables/pdfmake.min.js"></script>
    <script src="{{ url('/') }}/assets-admin/dastone/plugins/datatables/vfs_fonts.js"></script>
    <script src="{{ url('/') }}/assets-admin/dastone/plugins/datatables/buttons.html5.min.js"></script>
    <script src="{{ url('/') }}/assets-admin/dastone/plugins/datatables/buttons.print.min.js"></script>
    <script src="{{ url('/') }}/assets-admin/dastone/plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="{{ url('/') }}/assets-admin/dastone/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="{{ url('/') }}/assets-admin/dastone/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="{{ url('/') }}/assets-admin/assets/pages/jquery.datatable.init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src='{{ url('/') }}/assets-admin/dastone/plugins/fullcalendar/packages/core/main.js'></script>
    <script src='{{ url('/') }}/assets-admin/dastone/plugins/fullcalendar/packages/daygrid/main.js'></script>
    <script src='{{ url('/') }}/assets-admin/dastone/plugins/fullcalendar/packages/timegrid/main.js'></script>
    <script src='{{ url('/') }}/assets-admin/dastone/plugins/fullcalendar/packages/interaction/main.js'></script>
    <script src='{{ url('/') }}/assets-admin/dastone/plugins/fullcalendar/packages/list/main.js'></script>
    <script src="{{ url('/') }}/assets-admin/dastone/plugins/lightpick/lightpick.js"></script>
    <script src='{{ url('/') }}/assets-admin/assets/pages/jquery.calendar.js'></script>

    @stack('script')
</body>

</html>
