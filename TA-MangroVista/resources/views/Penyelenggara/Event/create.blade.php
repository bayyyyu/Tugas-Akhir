<x-web.app-webNoSlider>
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="wizard.css">
    
    
    <div style="text-align: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <form action="{{ url('Pengajuan-Event') }}" method="post" class="f1"  enctype="multipart/form-data">
                        @csrf
                        <h3>Pengajuan Event</h3>
                        <p>MangroVista</p>
                        <div class="f1-steps">
                            <div class="f1-progress">
                                <div class="f1-progress-line" data-now-value="25" data-number-of-steps="4"
                                    style="width: 25%;"></div>
                            </div>
                            <div class="f1-step active">
                                <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                                <p>Data Kegiatan</p>
                            </div>
                            <div class="f1-step">
                                <div class="f1-step-icon"><i class="fa fa-home"></i></div>
                                <p>Waktu Pelaksanaan</p>
                            </div>
                            <div class="f1-step">
                                <div class="f1-step-icon"><i class="fa fa-key"></i></div>
                                <p>Data Lokasi</p>
                            </div>
                            <div class="f1-step">
                                <div class="f1-step-icon"><i class="fa fa-address-book"></i></div>
                                <p>Data Tambahan</p>
                            </div>
                        </div>
                        <!-- step 1 -->
                        <fieldset class="mb-5 mt-5">
                            <hr>
                            <div class="form-group">
                                <label>Nama Event <span style="color: red">*</span></label>
                                <input type="text" name="nama_event" placeholder="Nama Event" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi <span style="color: red">*</span></label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Foto/Thumbnail Event <span style="color: red">*</span></label>
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <input type="file" id="input-file-now" class="dropify" name="foto"/>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
                            </div>
                            <div class="f1-buttons">
                                <button type="button" class="btn btn-primary btn-next">Selanjutnya <i
                                        class="fa fa-arrow-right"></i></button>
                            </div>
                        </fieldset>
                        <!-- step 2 -->
                        <fieldset class="mb-5 mt-5">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tanggal Pelaksanaan</label>
                                        <div class="input-group mb-3">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <input type="date" class="form-control" name="tanggal_event">
                                                </div>
                                                <div class="col-md-2">
                                                     <span class="input-group-text">sampai</span>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="date" class="form-control" name="tanggal_selesai">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jam</label>
                                <input type="time" name="jam" placeholder="Alamat Rumah"
                                    class="form-control">
                            </div>
                            <div class="f1-buttons">
                                <button type="button" class="btn btn-warning btn-previous"><i
                                        class="fa fa-arrow-left"></i> Sebelumnya</button>
                                <button type="button" class="btn btn-primary btn-next">Selanjutnya <i
                                        class="fa fa-arrow-right"></i></button>
                            </div>
                        </fieldset>
                        <!-- step 3 -->
                        <fieldset class="mb-5 mt-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Latitude</label>
                                        
                                        <input type="text" class="form-control" name="lat" id="latitude">
                                      
                                        <br>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Longitude</label>
                                       
                                        <input type="text"  class="form-control" name="lng" id="longitude">
                                        <br>
                                    </div>
                                </div>
                                {{-- <div id="map"
                                    style=" z-index: 1;position: sticky;width: 80%; height: 300px;margin-left:auto;margin-right:auto" class="mb-5">
                                </div> --}}
                            </div>
                            <div class="f1-buttons">
                                <button type="button" class="btn btn-info btn-previous"><i
                                        class="fa fa-arrow-left"></i> Sebelumnya</button>
                                <button type="button" class="btn btn-primary btn-next">Selanjutnya <i
                                        class="fa fa-arrow-right"></i></button>
                            </div>
                        </fieldset>
                        <!-- step 4 -->
                        <fieldset class="mb-5 mt-5">
                            <div class="card-body">
                                <div class="repeater-custom-show-hide">
                                    <div data-repeater-list="car">
                                        <div data-repeater-item="">
                                            <div class="form-group row  d-flex align-items-end">
                                                <div class="col-sm-4">
                                                    <label class="form-label">File</label>
                                                    <input type="file" name="dokumen_tambahan" class="form-control" />
                                                </div><!--end col-->
                                                <div class="col-sm-6">
                                                    <label class="form-label">Nama Data Tambahan</label>
                                                    <input type="text" name="nama_berkas"
                                                        class="form-control" placeholder="contoh: Surat Perizinan">
                                                </div><!--end col-->

                                                <div class="col-sm-1">
                                                    <span data-repeater-delete="" class="btn" style="border: 1px solid red; color:red">
                                                        <span class="far fa-trash-alt me-1" ></span> Delete
                                                    </span>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <hr>
                                        </div><!--end /div-->
                                    </div><!--end repet-list-->

                                    <div class="form-group row mb-0">
                                        <div class="col-sm-12">
                                            <span data-repeater-create="" class="btn" style="border: 1px solid rgb(0, 119, 255); color:rgb(0, 119, 255)">
                                                <span class="fa fa-plus"></span> Tambah
                                            </span>
                                           
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div> <!--end repeter-->
                            </div><!--end card-body-->
                            <div class="f1-buttons">
                                <button type="button" class="btn btn-info btn-previous"><i
                                        class="fa fa-arrow-left"></i> Sebelumnya</button>
                                <button type="submit" class="btn btn-primary btn-submit"><i class="fa fa-save"></i>
                                    Submit</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="wizard.js"></script>
    <style>
        .f1-steps {
            overflow: hidden;
            position: relative;
            margin-top: 20px;
        }

        .f1-progress {
            position: absolute;
            top: 24px;
            left: 0;
            width: 100%;
            height: 1px;
            background: #ddd;
        }

        .f1-progress-line {
            position: absolute;
            top: 0;
            left: 0;
            height: 1px;
            background: #338056;
        }

        .f1-step {
            position: relative;
            float: left;
            width: 25%;
            padding: 0 5px;
        }

        .f1-step-icon {
            display: inline-block;
            width: 40px;
            height: 40px;
            margin-top: 4px;
            background: #ddd;
            font-size: 16px;
            color: #fff;
            line-height: 40px;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }

        .f1-step.activated .f1-step-icon {
            background: #fff;
            border: 1px solid #338056;
            color: #338056;
            line-height: 38px;
        }

        .f1-step.active .f1-step-icon {
            width: 48px;
            height: 48px;
            margin-top: 0;
            background: #338056;
            font-size: 22px;
            line-height: 48px;
        }

        .f1-step p {
            color: #ccc;
        }

        .f1-step.activated p {
            color: #338056;
        }

        .f1-step.active p {
            color: #338056;
        }

        .f1 fieldset {
            display: none;
            text-align: left;
        }

        .f1-buttons {
            text-align: right;
        }

        .f1 .input-error {
            border-color: #f35b3f;
        }

        .border-error {
            border: 1px solid #f35b3f;
        }
    </style>
    <script>
        function scroll_to_class(element_class, removed_height) {
            var scroll_to = $(element_class).offset().top - removed_height;
            if ($(window).scrollTop() != scroll_to) {
                $('html, body').stop().animate({
                    scrollTop: scroll_to
                }, 0);
            }
        }

        function bar_progress(progress_line_object, direction) {
            var number_of_steps = progress_line_object.data('number-of-steps');
            var now_value = progress_line_object.data('now-value');
            var new_value = 0;
            if (direction == 'right') {
                new_value = now_value + (100 / number_of_steps);
            } else if (direction == 'left') {
                new_value = now_value - (100 / number_of_steps);
            }
            progress_line_object.attr('style', 'width: ' + new_value + '%;').data('now-value', new_value);
        }

        $(document).ready(function() {
            // Form
            $('.f1 fieldset:first').fadeIn('slow');

            $('.f1 input[type="text"], .f1 input[type="password"], .f1 input[type="file"], .f1 input[type="time"], .f1 input[type="date"], .f1 textarea')
                .on(
                    'focus',
                    function() {
                        $(this).removeClass('input-error');
                    });

            // step selanjutnya (ketika klik tombol selanjutnya)
            $('.f1 .btn-next').on('click', function() {
                var parent_fieldset = $(this).parents('fieldset');
                var next_step = true;
                // navigation steps / progress steps
                var current_active_step = $(this).parents('.f1').find('.f1-step.active');
                var progress_line = $(this).parents('.f1').find('.f1-progress-line');

                // validasi form
                parent_fieldset.find(
                    'input[type="text"], input[type="password"], input[type="file"], input[type="date"], input[type="time"], textarea'
                ).each(
                    function() {
                        if ($(this).val() == "") {
                            $(this).addClass('input-error');
                            next_step = false;
                            if ($(this).attr('type') === 'file' || $(this).is('textarea')) {
                                $(this).closest('.card').addClass('border-error');
                            }
                        } else {
                            $(this).removeClass('input-error');
                            if ($(this).attr('type') === 'file' || $(this).is('textarea')) {
                                $(this).closest('.card').removeClass('border-error');
                            }
                        }
                    });

                if (next_step) {
                    parent_fieldset.fadeOut(400, function() {
                        // change icons
                        current_active_step.removeClass('active').addClass('activated').next()
                            .addClass('active');
                        // progress bar
                        bar_progress(progress_line, 'right');
                        // show next step
                        $(this).next().fadeIn();
                        // scroll window to beginning of the form
                        scroll_to_class($('.f1'), 20);
                    });
                }
            });

            // step sbelumnya (ketika klik tombol sebelumnya)
            $('.f1 .btn-previous').on('click', function() {
                // navigation steps / progress steps
                var current_active_step = $(this).parents('.f1').find('.f1-step.active');
                var progress_line = $(this).parents('.f1').find('.f1-progress-line');

                $(this).parents('fieldset').fadeOut(400, function() {
                    // change icons
                    current_active_step.removeClass('active').prev().removeClass('activated')
                        .addClass('active');
                    // progress bar
                    bar_progress(progress_line, 'left');
                    // show previous step
                    $(this).prev().fadeIn();
                    // scroll window to beginning of the form
                    scroll_to_class($('.f1'), 20);
                });
            });

            // submit (ketika klik tombol submit diakhir wizard)
            $('.f1').on('submit', function(e) {
                // validasi form
                $(this).find('input[type="text"], input[type="password"], textarea, input[type="file"]')
                    .each(function() {
                        if ($(this).val() == "") {
                            e.preventDefault();
                            $(this).addClass('input-error');
                        } else {
                            $(this).removeClass('input-error');
                        }
                    });
            });
        });
    </script>
</x-web.app-webNoSlider>
