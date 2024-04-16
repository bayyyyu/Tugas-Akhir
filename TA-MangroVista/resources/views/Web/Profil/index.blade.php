<x-web.app-webNoSlider>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        h1 {
            font-size: 5.25vmin;
            text-align: center;
            color: white;
        }

        p {
            font-size: max(10pt, 2.5vmin);
            line-height: 1.4;
            color: #0e390e;
            margin-bottom: 1.5rem;
        }

        .text-contents {
            margin-bottom: 0;
        }

        .wraps {
            display: flex;
            flex-wrap: nowrap;
            justify-content: space-between;
            /* width: 85vmin; */
            width: 100%;
            /* max-width: 100vw; */
            height: 15em;
            border: 3px solid #064635;
            position: relative;
            overflow: hidden;
            border-radius: 15px
        }

        .overlays {
            position: relative;
            display: flex;
            width: 100%;
            height: 100%;
            padding: 1rem .75rem;
            background: rgba(6, 70, 53, 0.5);
            /* Gunakan rgba untuk membuat latar belakang transparan */
            backdrop-filter: blur(5px);
            /* Gunakan backdrop-filter untuk membuat blur */
            -webkit-backdrop-filter: blur(5px);
            transition: none;
            z-index: 1;
        }

        .overlay-contents {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 15vmin;
            height: 100%;
            padding: .5rem 0 0 .5rem;
            border-left: 3px solid #064635;
            /* border-image:
                linear-gradient(to bottom,
                    #AEA724 5%,
                    forestgreen 35% 65%,
                    #AEA724 95%) 0 0 0 100%; */
            transition: .3s ease-in-out .2s;
            z-index: 1;
        }

        .button-border {
            background-color: #064635;
            border: 1px solid white;
            border-radius: 7px;
            margin-right: -10px;
            margin-bottom: 10px
                /* border-image: linear-gradient(to bottom, #AEA724 5%, forestgreen 35% 65%, #AEA724 95%);
            border-image-slice: 1; */
        }

        .image-contents {
            position: absolute;
            top: 20px;
            right: 10px;
            width: 15vmin;
            height: 100%;
            /* background-image: url("https://assets.codepen.io/4787486/trees.png"); */
            background-size: cover;
            transition: .3s ease-in-out;
            /* border: 1px solid green; */
        }

        .blue-rectangle {
            display: inline-flex;
            background-color: #75B1F2;
            padding: 5px;
            border-radius: 5px;
            width: 12vw;
            max-width: 100vw;
            height: 20px;
        }

        @media only screen and (max-width: 768px) {
            .blue-rectangle {
                width: 40vw;
            }
        }

        .dots {
            position: absolute;
            bottom: 1rem;
            right: 2rem;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            width: 55px;
            height: 4vmin;
            transition: .3s ease-in-out .3s;
        }

        .dot {
            width: 14px;
            height: 14px;
            background: yellow;
            border: 1px solid indigo;
            border-radius: 50%;
            transition: .3s ease-in-out .3s;
        }

        .text {
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            padding: 3vmin;
            background: #fff;
            box-shadow: inset 1px 1px 15px 0 rgba(0 0 0 / .4);
            overflow-y: scroll;

            /* white-space: pre-line; */
        }

        .text p {
            white-space: pre-line;
            /* Menambahkan properti ini */
            overflow-wrap: break-word;
            /* Atur agar teks mematahkan kata-kata saat mencapai batas container */
        }

        .text::-webkit-scrollbar {
            width: 5px;
            /* lebar scrollbar */
        }

        .text::-webkit-scrollbar-thumb {
            background-color: #064635;
            /* warna thumb scrollbar */
            border-radius: 6px;
            /* membuat ujung thumb menjadi melengkung */
        }

        .text::-webkit-scrollbar-track {
            background-color: transparent;
            /* warna track scrollbar */
        }

        .label-peran {
            color: #0e390e;
            font-weight: bolder
        }


        /* .wraps:hover .overlays {
            transform: translateX(-100vmin);
        } */

        .overlays.active {
            transform: translateX(-100vmin);
            transition: transform 0.4s ease-in-out;
        }

        /* .wraps:hover .image-contents {
            width: 30vmin;
        }

        .wraps:hover .overlay-contents {
            border: none;

        } */

        .dots:hover {
            transform: translateX(1rem);
        }

        /* .wraps:hover .dots .dot {
            background: white;
        } */


        /* Animations and timing delays */
        .animate {
            animation-duration: 0.7s;
            animation-timing-function: cubic-bezier(.26, .53, .74, 1.48);
            animation-fill-mode: backwards;
        }

        /* Pop In */
        .pop {
            animation-name: pop;
        }

        @keyframes pop {
            0% {
                opacity: 0;
                transform: scale(0.5, 0.5);
            }

            100% {
                opacity: 1;
                transform: scale(1, 1);
            }
        }

        /* Slide In */
        .slide {
            animation-name: slide;
        }

        @keyframes slide {
            0% {
                opacity: 0;
                transform: translate(4em, 0);
            }

            100% {
                opacity: 1;
                transform: translate(0, 0);
            }
        }

        /* Slide Left */
        .slide-left {
            animation-name: slide-left;
        }

        @keyframes slide-left {
            0% {
                opacity: 0;
                transform: translate(-40px, 0);
            }

            100% {
                opacity: 1;
                transform: translate(0, 0);
            }
        }

        .slide-up {
            animation-name: slide-up;
        }

        @keyframes slide-up {
            0% {
                opacity: 0;
                transform: translateY(3em);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .delay-1 {
            animation-delay: 0.3s;
        }

        .delay-2 {
            animation-delay: 0.6s;
        }

        .delay-3 {
            animation-delay: 0.9s;
        }

        .delay-4 {
            animation-delay: 1.2s;
        }

        .delay-5 {
            animation-delay: 1.5s;
        }

        .delay-6 {
            animation-delay: 1.8s;
        }

        .delay-7 {
            animation-delay: 2.1s;
        }

        .delay-8 {
            animation-delay: 2.4s;
        }


        .container-read {
            max-width: 1100px;
            margin: 0 auto;
            margin-top: 10px;
        }

        .faq-tab {
            overflow-x: auto;
            white-space: nowrap;

        }

        .nav-tabs {
            display: flex;
            flex-direction: column;
            margin-top: 10px;
            border: none;
            font-size: 15px;
            margin-top: -20px;
        }

        .nav-link {
            display: block;
            padding: 10px 15px;
            /* Adjust padding as needed */
            color: #a3a3a3;
            text-decoration: none;
            font-weight: inherit;
            cursor: pointer;
        }

        .nav-link:hover {
            background-color: transparent;
            border: none;
        }

        .nav-tab.active-nav .nav-link {
            background-color: #f5faf8;
            border-radius: 10px;
            display: block;
            padding: 10px 15px;
            color: #018d58;
        }

        .tab-content {
            overflow-x: auto visible;
            white-space: nowrap;

        }

        .tab-pane {

            display: flex;
            flex-direction: column;
            margin-top: 10px;
            border: none;
            font-size: 15px;
            margin-top: -20px;
        }

        @media screen and (max-width: 768px) {
            .faq-tab {
                overflow-x: visible;
                height: 70px;
                margin-top: 40px;
            }

            .nav-tabs {
                flex-direction: row;
                overflow-x: auto;
                white-space: nowrap;
            }

            .nav-link {
                display: inline-block;
                margin-right: 10px;
                margin-bottom: 5px;
            }

            .tab-content {
                overflow-x: auto;
            }

            .tab-pane {
                display: inline-flex;
            }

            .lab-item {
                margin-bottom: 20px;
                /* Tambahkan margin bawah untuk jarak antar lab-item */
            }

            .lab-inner {
                display: flex;
                align-items: center;
            }

            .st-thumb {
                width: 100px;
                /* Sesuaikan lebar gambar */
                height: 60px;
                /* Sesuaikan tinggi gambar */
                margin-right: 10px;
                /* Tambahkan margin kanan untuk jarak antara gambar dan teks */
            }

            .st-content {
                flex: 1;
                /* Bagikan sisa ruang untuk teks */
            }

            .st-content h6 {
                margin-bottom: 5px;
                /* Tambahkan margin bawah untuk jarak antara teks */
                font-size: 14px;
                /* Sesuaikan ukuran teks */
            }



        }
    </style>
    <div class="container">
        <div class="faq-section mt-5" style="margin-bottom: 40px; ">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="faq-tab">
                            <div class="nav-tabs">
                                <div class="nav-tab active-nav" id="dashboard-tab" role="button"
                                    onclick="changeTab('dashboard')">
                                    <span class="nav-link "><i class="icofont-home"></i> Dashboard</span>
                                </div>
                                <div class="nav-tab" id="Partisipasi-tab" role="button"
                                    onclick="changeTab('Partisipasi')">
                                    <span class="nav-link"><i class="icofont-under-construction-alt"></i> Partisipasi
                                        Event</span>
                                </div>
                                <div class="nav-tab" id="pengajuan-tab" role="button" onclick="changeTab('pengajuan')">
                                    <span class="nav-link"><i class="icofont-data"></i> Pengajuan Event</span>
                                </div>
                                <div class="nav-tab" id="peran-tab" role="button" onclick="changeTab('peran')">
                                    <span class="nav-link"><i class="icofont-contact-add"></i> Ambil Peran</span>
                                </div>
                                <div class="nav-tab" id="pengaturan-tab" role="button"
                                    onclick="changeTab('pengaturan')">
                                    <span class="nav-link"><i class="icofont-gears"></i> Pengaturan akun</span>
                                </div>
                                <div class="nav-tab" id="keluar-tab" role="button" data-toggle="modal"
                                    data-target="#exampleModal">
                                    <span class="nav-link"><i class="icofont-sign-out"></i> Keluar</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content faq-content" id="tab-content">
                            <div class="tab-pane fade show tab-content-item mt-1" id="dashboard-content">
                                <h6>Ringkasan Akun</h6>
                                <p style="font-size:15px">Ringkasan peran, partisipasi event & pengajuan event</p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="lab-item service-item"
                                            style="background-color: #F5FAF8; height: 150px;">
                                            <div class="lab-inner p-4 mb-4 text-left">
                                                <div class="service-top d-flex align-items-center mb-4">
                                                    <div class="st-thumb mr-3">
                                                        <img src="{{ url('/') }}/assets-web2/assets/images/dashboard/3.png"
                                                            alt="dashboard image">
                                                    </div>
                                                    <div class="st-content mt-2">
                                                        <a href="#">
                                                            <h6 style="font-size: 15px">Informasi Peran:</h6>
                                                            @if (auth()->check())
                                                                <!-- Check if user is authenticated -->
                                                                @if (auth()->user()->role === 'pengguna')
                                                                    <h6> Pengguna </h6>
                                                                @elseif(auth()->user()->role === 'penyelenggara')
                                                                    <h6> Penyelenggara </h6>
                                                                @endif
                                                            @endif
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="lab-item service-item"
                                            style="background-color: #F5FAF8; height: 150px;">
                                            <div class="lab-inner p-4 mb-4 text-left">
                                                <div class="service-top d-flex align-items-center mb-4">
                                                    <div class="st-thumb mr-3">
                                                        <img src="{{ url('/') }}/assets-web2/assets/images/dashboard/1.png"
                                                            alt="dashboard image">
                                                    </div>
                                                    <div class="st-content mt-2">
                                                        <a href="#">
                                                            <h6 style="font-size: 15px">Partisipasi Event: </h6>
                                                            <h6>0</h6>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="lab-item service-item"
                                            style="background-color: #F5FAF8; height: 150px;">
                                            <div class="lab-inner p-4 mb-4 text-left">
                                                <div class="service-top d-flex align-items-center mb-4">
                                                    <div class="st-thumb mr-3">
                                                        <img src="{{ url('/') }}/assets-web2/assets/images/dashboard/2.png"
                                                            alt="dashboard image">
                                                    </div>
                                                    <div class="st-content mt-2">
                                                        <a href="#">
                                                            <h6 style="font-size: 15px">Pengajuan Event: </h6>
                                                            <h6>2</h6>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tambahkan konten untuk tab lainnya di sini -->
                            <div class="tab-content-item" id="Partisipasi-content" style="display:none;">
                                <!-- Konten untuk tab Partisipasi -->
                            </div>
                            <div class="tab-content-item" id="pengajuan-content" style="display:none;">
                                <!-- Konten untuk tab Pengajuan -->
                            </div>

                            <!-- Konten untuk tab Peran -->
                            <div class="tab-content-item" id="peran-content" style="display:none;">
                               
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            @if (!is_null($list_role_request) && count($list_role_request) > 0)
                                                @foreach ($list_role_request as $role_request)
                                                    <div class="col-md-6 mb-2">
                                                        <div class="wraps ">
                                                            <div class="overlays">
                                                                <div class="overlay-contents animate">
                                                                    <div class="blue-rectangle animate slide">
                                                                        <p
                                                                            style="color: white; font-weight: bolder; margin-top:-5px">
                                                                            {{ $role_request->status_request }}
                                                                        </p>
                                                                    </div>
                                                                    <p class="animate slide "
                                                                        style="color: white; margin-bottom: -0.2rem;">
                                                                        Diajukan Pada:
                                                                        <br>
                                                                        {{ \Carbon\Carbon::parse($role_request->created_at)->translatedFormat('d F Y') }}
                                                                    </p>
                                                                </div>
                                                                <div class="image-contents animate slide ">
                                                                    <img src="{{ url('/') }}/assets-web2/assets/images/peran/wait.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="dots animate">
                                                                    <div class="btn btn-sm button-transform animate slide-up mt-3 button-border"
                                                                        onclick="toggleTransform(this)">
                                                                        <span
                                                                            style="color: white; font-size:10px">Lihat
                                                                            Detail
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text">

                                                                <p
                                                                    style="text-align: center; justify-content:center; font-weight:bolder;">
                                                                    <span> Data Pengajuan Pengambilan Peran <a
                                                                            href="" class="btn btn-sm"
                                                                            style="display: inline-block"><i
                                                                                class="icofont-edit"></i></a> </span>

                                                                </p>
                                                                <hr style="margin-top: -20px">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <span class="label-peran"
                                                                                    class="label-peran">Nama
                                                                                    Lengkap</span>
                                                                                <p>{{ $role_request->nama_lengkap }}</p>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <span class="label-peran">Email</span>
                                                                                <p>{{ $role_request->email }}</p>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <span class="label-peran">No.
                                                                                    Telpon</span>
                                                                                <p>+62 {{ $role_request->no_telpon }}
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <span class="label-peran">Ambil Peran
                                                                                    Sebagai</span>
                                                                                <p>{{ $role_request->request_role }}</p>
                                                                            </div>
                                                                        </div>
                                                                        <hr style="margin-top: -15px">
                                                                        <div class="col-md-12"
                                                                            style="text-align: center">
                                                                            <span class="label-peran">Alamat
                                                                                Lengkap</span>
                                                                            <p>{!! $role_request->alamat !!}</p>
                                                                        </div>
                                                                        <hr style="margin-top: -15px">
                                                                        <div class="col-md-12"
                                                                            style="text-align: center">
                                                                            <span class="label-peran">Pengalaman
                                                                                Terkait</span>
                                                                            <p>{!! $role_request->pengalaman !!}</p>
                                                                        </div>
                                                                        <hr style="margin-top: -15px">
                                                                        <div class="col-md-12"
                                                                            style="text-align: center">
                                                                            <span class="label-peran">Alasan Mengambil
                                                                                Peran</span>
                                                                            <p>{!! $role_request->alasan !!}</p>
                                                                        </div>
                                                                        <hr style="margin-top: -15px">
                                                                        <div class="col-md-12"
                                                                            style="text-align: center">
                                                                            <span class="label-peran">Rencana
                                                                                Acara</span>
                                                                            <p>{!! $role_request->rencana_acara !!}</p>
                                                                        </div>
                                                                        <hr style="margin-top: -15px">
                                                                    </div>
                                                                    <div class="col-md-12 " style="margin-top: 20px;">
                                                                        <div class="btn btn-sm "
                                                                            onclick="restoreOverlay()"
                                                                            style="border: 1px solid #064635; border radius:5px">
                                                                            <p
                                                                                style="color: #064635; margin-bottom:0; margin-top:-20px">
                                                                                Tutup</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="col-md-12"
                                                    style="display: flex; justify-content: center; align-items: center; height: 60vh;">
                                                    <div
                                                        style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                                                        <img src="{{ url('/') }}/assets-web2/assets/images/peran/sad.png"
                                                            style="width: 100px; height: 100px;" class="mb-3">
                                                        <p>Opss!! Nampaknya kamu belum ada mengajukan pengambilan peran.</p>
                                                        <a href="{{url('Ambil-Peran')}}" class="btn btn-md button-transform button-border" style="color: white; font-size:15px" >Ajukan Sekarang</a>
                                                    </div>
                                                </div>


                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Konten untuk tab Pengaturan Akun -->
                            <div class="tab-content-item " id="pengaturan-content" style="display:none;">
                                <h6>Data Diri</h6>
                                <div class="row">
                                    <form id="uploadForm" action="{{ url('Profil', Auth::user()) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="col-md-12">
                                            @if (Auth::user()->foto_profil)
                                                <img src="{{ asset(auth()->user()->foto_profil) }}"
                                                    class="img-radius mt-2" alt="User-Profile-Image"
                                                    style="height: 70px; width:70px; object-fit:cover;  border:1px solid #018d58; border-radius:75%">
                                            @else
                                                <img src="{{ asset('/assets-web2/assets/images/user.png') }}"
                                                    class="img-radius mt-2" alt="User-Profile-Image"
                                                    style="height: 70px; width: 70px; object-fit:cover; border:1px solid #018d58; border-radius:75%">
                                            @endif

                                            <label for="upload-photo" class="btn btn-sm la-btn mt-3 ml-3"
                                                style="">Unggah Foto Profil
                                            </label>
                                            <input type="file" id="upload-photo" accept=".jpg, .png, .jpeg"
                                                style="display: none;" name="foto_profil">
                                        </div>
                                        <button type="submit" id="btnSubmit" style="display: none;"></button>
                                    </form>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mt-4">
                                            <form action="{{ url('Profil', Auth::user()) }}" method="POST"
                                                class="comment-form" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="control-label"
                                                                style="color:black; font-size:13px">Nama Lengkap<span
                                                                    style="color: red">*</span></label>
                                                            <input type="text" class="form-control"
                                                                name="nama_lengkap" style="height:30px"
                                                                value="{{ Auth::user()->nama_lengkap ?? '' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="control-label"
                                                                style="color:black; font-size:13px">Username<span
                                                                    style="color: red">*</span></label>
                                                            <input type="text" class="form-control"
                                                                name="username" style="height:30px"
                                                                value="{{ Auth::user()->username ?? '' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="control-label"
                                                                style="color:black; font-size:13px">Email<span
                                                                    style="color: red">*</span></label>
                                                            <input type="text" class="form-control"
                                                                name="email"style="height:30px"
                                                                value="{{ Auth::user()->email ?? '' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="control-label"
                                                                style="color:black; font-size:13px">No. Telpon
                                                                Aktif/WhatsApp<span style="color: red">*</span></label>
                                                            <input type="text" class="form-control"
                                                                name="no_hp"style="height:30px"
                                                                value="{{ Auth::user()->no_hp ?? '' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="control-label"
                                                                style="color:black; font-size:13px">Tanggal Lahir<span
                                                                    style="color: red">*</span></label>
                                                            <input type="date" class="form-control"
                                                                name="tgl_lahir" style="height:30px"
                                                                value="{{ Auth::user()->tgl_lahir ?? '' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="" class="control-label"
                                                                style="color:black; font-size:13px">Jenis Kelamin<span
                                                                    style="color: red">*</span></label>
                                                            <select name="jenis_kelamin" class="form-control"
                                                                style="height:30px">
                                                                <option value="">-- Pilih Jenis Kelamin --
                                                                </option>
                                                                <option value="Laki-laki"
                                                                    {{ (Auth::user()->jenis_kelamin ?? '') == 'Laki-laki' ? 'selected' : '' }}>
                                                                    Laki-Laki</option>
                                                                <option value="Perempuan"
                                                                    {{ (Auth::user()->jenis_kelamin ?? '') == 'Perempuan' ? 'selected' : '' }}>
                                                                    Perempuan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="" class="control-label"
                                                                style="color:black; font-size:13px">Alamat</label>
                                                            <input type="text" class="form-control" name="alamat"
                                                                style="height:30px"
                                                                value="{{ Auth::user()->alamat ?? '' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="" class="control-label"
                                                                style="color:black; font-size:13px">Komunitas/Instansi/Universitas</label>
                                                            <input type="text" class="form-control"
                                                                name="komunitas" style="height:30px"
                                                                value="{{ Auth::user()->komunitas ?? '' }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="la-btn float-right">
                                                    Simpan Perubahan
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Keluar-->
    <x-button.keluar />
    <!-- Modal Keluar-->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Preview Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body d-flex justify-content-center align-items-center ">
                    <div id="image-container">
                        <img id="preview-image"
                            style="height: 200px; width:200px; object-fit:cover; border-radius:50%" src="#"
                            alt="Preview">
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="btnChooseAgain" type="button" class="btn btn-sm btn-secondary" style="float: left"
                        onclick="chooseAgain()">Pilih Ulang</button>
                    <button type="button" class="btn btn-sm btn-secondary"
                        onclick="document.getElementById('btnSubmit').click()">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function changeTab(tabId) {
            var tabs = document.querySelectorAll('.nav-tab');
            tabs.forEach(tab => {
                tab.classList.remove('active-nav');
            });

            var contents = document.querySelectorAll('.tab-content-item');
            contents.forEach(content => {
                content.style.display = 'none';
            });

            var selectedTab = document.getElementById(tabId + '-tab');
            selectedTab.classList.add('active-nav');

            var selectedContent = document.getElementById(tabId + '-content');
            selectedContent.style.display = 'block';

            // Memeriksa apakah tab yang dipilih adalah 'keluar', 
            // jika ya, tampilkan modal
            if (tabId === 'keluar') {
                $('#exampleModal').modal('show');
            }
        }
        changeTab('dashboard');

        document.getElementById('upload-photo').addEventListener('change', function() {
            console.log('Change event triggered');
            var reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('preview-image').setAttribute('src', e.target.result);
                $('#exampleModalCenter').modal('show'); // Show the modal
            }

            reader.readAsDataURL(this.files[0]);
        });


        function chooseAgain() {
            // Menghapus nilai input file
            var uploadPhoto = document.getElementById('upload-photo');
            uploadPhoto.value = null;

            // Membuka kembali dialog pemilihan file
            uploadPhoto.click();
        }

        function toggleTransform(button) {
            var overlays = button.closest('.overlays');
            overlays.classList.toggle('active');
        }

        function restoreOverlay() {
            var overlays = document.querySelectorAll('.overlays');
            overlays.forEach(overlay => {
                overlay.classList.remove('active');
            });
        }
    </script>

</x-web.app-webNoSlider>
