    <!--search area-->
    <div class="search-input">
        <div class="search-close">
            <i class="icofont-close-circled"></i>
        </div>
        <form>
            <input type="text" name="text" placeholder="Search Heare">
            <button class="search-btn" type="submit">
                <i class="icofont-search-2"></i>
            </button>
        </form>
    </div>
    <!-- search area -->

    <!-- Mobile Menu Start Here -->
    <div class="mobile-menu transparent-header">
        <nav class="mobile-header">
            <div class="header-logo" style="display: flex; align-items: center;">
                <a href="{{ url('Home') }}"><img src="{{ url('/') }}/assets-web2/assets/images/logo/6.png"
                        alt="logo" style="width:100%; height:30px; object-fit:contain"></a>
                <p style="position: relative; margin-left: 10px; margin-top:20px; color:#064635; font-weight:bolder">
                    MangroVista</p>
            </div>
            <div class="header-bar">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
        <nav class="mobile-menu">
            <div class="mobile-menu-area">
                <div class="mobile-menu-area-inner">
                    <ul class="lab-ul">
                        <li class="active">
                            <a href="{{ url('Home') }}">Beranda</a>
                        </li>
                        <li>
                            <a href="{{ url('About') }}">Tentang Kami</a>
                        </li>
                        <li class="{{ request()->is('Katalog-Pohon') ? 'active2' : '' }}">
                            <a href="{{ url('Katalog-Pohon') }}">Katalog Pohon</a>
                        </li>
                        <li class="{{ request()->is('Event*', 'Penanaman') ? 'active2' : '' }}">
                            <a>Projek</a>
                            <ul class="lab-ul">
                                {{-- <li class="{{ request()->is('Katalog-Pohon') ? 'active2' : '' }}">
                                    <a href="{{ url('Katalog-Pohon') }}">Katalog Pohon</a>
                                </li> --}}
                                <li class="{{ request()->is('Event*') ? 'active2' : '' }}">
                                    <a href="{{ url('Event') }}">Event</a>
                                </li>
                                <li class="{{ request()->is('Penanaman') ? 'active2' : '' }}">
                                    <a href="{{ url('Penanaman') }}">Penanaman</a>
                                </li>
                            </ul>
                        </li>
                        {{-- <li>
                            <a href="{{url('Informasi')}}">Informasi</a>
                        </li>
                        <li>
                            <a href="{{url('Event')}}">Event</a>
                        </li>
                        <li>
                           <a href="{{url('Tanam')}}">Penanaman</a>
                        </li> --}}
                        <li>
                            <a href="{{ url('GIS') }}">Peta </a>
                        </li>
                        <li><a href="{{ url('Kontak') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Mobile Menu Ending Here -->

    <!-- desktop menu start here -->
    <header class="header-section">
        <div class="header-top bg-theme">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-12 col-12" style="margin-bottom: -25px">
                        {{-- <div class="ht-left">
                            <ul class="lab-ul d-flex flex-wrap justify-content-start" >
                                <li class="d-flex flex-wrap align-items-center">
                                    <div class="ht-add-thumb mr-2">
                                        <img src="{{ url('/') }}/assets-web2/assets/images/logo/02.png"
                                            alt="address" style="height:100%; width:200px; object-fit:contain">
                                    </div>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="ht-right">
                            <ul class="lab-ul d-flex flex-wrap justify-content-start">
                                <li class="d-flex flex-wrap align-items-center">
                                    <div class="ht-add-thumb mr-2">
                                        <img src="{{ url('/') }}/assets-web2/assets/images/logo/logo-white.png"
                                            alt="address" style="height:25px; width:40px; object-fit:contain">
                                    </div>
                                    <div class="ht-add-content" style="font-size:10px;">
                                        <span
                                            style="color:white; font-size:15px; font-weight:initial">MangroVista</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="ht-left">
                            <ul class="lab-ul d-flex flex-wrap justify-content-end">
                                <li class="d-flex flex-wrap align-items-center">
                                    <div class="ht-add-thumb mr-2">
                                        <img src="{{ url('/') }}/assets-web2/assets/images/header/01.png"
                                            alt="address" style="height:25px; width:40px; object-fit:contain">
                                    </div>
                                    <div class="ht-add-content" style="font-size:10px;">
                                        <span style="color:white">Ketapang</span>
                                        <span class="d-block text-bold" style="color:white">Kalimantan Barat</span>
                                    </div>
                                </li>
                                <li class="d-flex flex-wrap align-items-center">
                                    <div class="ht-add-thumb mr-2">
                                        <img src="{{ url('/') }}/assets-web2/assets/images/header/02.png"
                                            alt="email" style="height:25px; width:40px; object-fit:contain">
                                    </div>
                                    <div class="ht-add-content" style="font-size:10px;">
                                        <span style="color:white">Send Mail </span>
                                        <span class="d-block text-bold" style="color:white"><a
                                                href="mailto:mangrovista@gmail.com"
                                                style="color:white">mangrovista@gmail.com</a> </span>
                                    </div>
                                </li>
                                <li class="d-flex flex-wrap align-items-center">
                                    <div class="ht-add-thumb mr-2">
                                        <img src="{{ url('/') }}/assets-web2/assets/images/header/03.png"
                                            alt="call" style="height:25px; width:40px; object-fit:contain">
                                    </div>
                                    <div class="ht-add-content" style="font-size:10px;">
                                        <span style="color:white">Make Call </span>
                                        <span class="d-block text-bold" style="color:white">+62-1234-4567-890</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- </div> --}}
                </div>
            </div>
        </div>
        <div class="header-bottom" style="border-bottom:2px solid #064635">
            <div class="header-area">
                <div class="container">
                    <div class="primary-menu">
                        <div class="main-area w-100">
                            <div class="main-menu d-flex flex-wrap align-items-center justify-content-between w-100">
                                <div class="logo">
                                    <div style="display: flex; align-items: center;">
                                        <a href="{{ url('Home') }}">
                                            <img src="{{ url('/') }}/assets-web2/assets/images/logo/6.png"
                                                alt="logo" style="height: 30px; width: 100%; object-fit: contain">
                                        </a>
                                        <a href="{{ url('Home') }}">
                                            <p
                                                style="position: relative; margin-left: 10px; margin-top:20px; color:#064635; font-weight:bolder">
                                                MangroVista</p>
                                        </a>
                                    </div>

                                </div>
                                <ul class="lab-ul" style="margin-right:-400px">
                                    <li class="{{ request()->is('Home') ? 'active2' : '' }}">
                                        <a href="{{ url('Home') }}"
                                            style="color: #064635; font-size:13px">Beranda</a>
                                    </li>
                                    <li class="{{ request()->is('Katalog-Pohon*') ? 'active2' : '' }}">
                                        <a href="{{ url('Katalog-Pohon') }}"
                                            style="color: #064635; font-size:13px">Katalog Pohon</a>
                                    </li>
                                    <li class="{{ request()->is('Event*') ? 'active2' : '' }}">
                                        <a href="{{ url('Event') }}"
                                            style="color: #064635; font-size:13px">Event</a>
                                    </li>
                                    <li class="{{ request()->is('Penanaman*') ? 'active2' : '' }}">
                                        <a href="{{ url('Penanaman') }}"
                                            style="color: #064635; font-size:13px">Penanaman</a>
                                    </li>
                                    {{-- <li
                                        class="{{ request()->is('Projek', 'Event*', 'Penanaman*') ? 'active2' : '' }}">
                                        <a style="color: #064635; font-size:13px">Projek</a>
                                        <ul class="lab-ul">
                                            <li class="{{ request()->is('Event*') ? 'active2' : '' }}">
                                                <a href="{{ url('Event') }}" style="font-size:13px">Event</a>
                                            </li>
                                            <li class="{{ request()->is('Penanaman') ? 'active2' : '' }}">
                                                <a href="{{ url('Penanaman') }}" style="font-size:13px">Penanaman</a>
                                            </li>
                                        </ul>
                                    </li> --}}
                                    <li class="{{ request()->is('GIS') ? 'active2' : '' }}">
                                        <a href="{{ url('GIS') }}" style="color: #064635; font-size:13px">Peta
                                            </a>
                                    </li>

                                </ul>
                                @if (Auth::check())
                                    @if (Auth::user()->role == 'admin')
                                        <a href="{{ url('Admin/Dashboard') }}" class="profile-btn">
                                            {{-- <i class="icofont-user"></i> --}}
                                            <div class="profile-img-wrapper">
                                                @if (Auth::user()->foto_profil)
                                                    <img src="{{ asset(auth()->user()->foto_profil) }}"
                                                        class="img-radius" alt="User-Profile-Image">
                                                @else
                                                    <i class="fa-light fa-user"></i>
                                                @endif
                                            </div>
                                        </a>
                                    @else
                                        <a href="{{ url('Profil') }}" class="profile-btn">
                                            <div class="profile-img-wrapper">
                                                @if (Auth::user()->foto_profil)
                                                    <img src="{{ asset(auth()->user()->foto_profil) }}"
                                                        class="img-radius" alt="User-Profile-Image" style="object-fit:cover">
                                                @else
                                                   <img src="{{ asset('/assets-web2/assets/images/user.png') }}"
                                                        class="img-radius" alt="User-Profile-Image" >
                                                @endif
                                            </div>
                                        </a>
                                    @endif
                                @else
                                    <a href="{{ url('Login') }}" class="btn btn-sm login-btn">Masuk</a>

                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <style>
        .lab-ul li.active2 a {
            border-bottom: 2px solid #064635;
        }


        .login-btn {
            color: #064635 !important;
            font-size: 13px;
            font-weight: bolder;
            transition: background-color 0.3s, color 0.3s;
            display: inline-block;
            text-decoration: none;
            padding: 5px 10px;
            border: 1px solid #064635;
        }

        .profile-btn {
            color: #064635 !important;
            font-size: 13px;
            font-weight: bolder;
            transition: background-color 0.3s, color 0.3s;
            display: inline-block;
            text-decoration: none;
            padding: 1px 1px;
            border: 1px solid #064635;
            border-radius: 75%
        }

        .profile-img-wrapper {
            overflow: hidden;
            border-radius: 50%;
            height: 38px;
            width: 38px;
        }

        .profile-btn:hover,
        .login-btn:hover {
            background-color: #064635;
            color: white !important;
        }
    </style>
