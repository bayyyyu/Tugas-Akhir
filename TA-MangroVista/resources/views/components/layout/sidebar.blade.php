{{-- <nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">Navigation</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="{{ request()->is('Admin/Dashboard') ? 'active' : '' }}">
                    <x-layout.sidebar.menu-item url="Admin/Dashboard" label="Dashboard" icon="feather icon-home" />
                </li>
                <li class="{{ request()->is('Admin/Katalog-Pohon*') ? 'active' : '' }}">
                    <x-layout.sidebar.menu-item url="Admin/Katalog-Pohon" label="Katalog Pohon" icon="fa fa-tree" />
                </li>
                <li class="{{ request()->is('Admin/Event*') ? 'active' : '' }}">
                    <x-layout.sidebar.menu-item url="Admin/Event" label="Event" icon="feather icon-calendar" />
                </li>
                <li class="{{ request()->is('Admin/Tanaman*') ? 'active' : '' }}">
                    <x-layout.sidebar.menu-item url="Admin/Tanaman" label="Penanaman" icon="fa fa-leaf" />
                </li>
                <li class="{{ request()->is('Admin/User*') ? 'active' : '' }}">
                    <x-layout.sidebar.menu-item url="Admin/User" label="User" icon="feather icon-user" />
                </li>
            </ul>

        </div>
</nav> --}}

<div class="left-sidenav">
    <!-- LOGO -->
    <div class="brand">
        <a href="{{url('Admin/Dashboard')}}" class="logo">
            <span>
                <img src="{{ url('/') }}/assets-web2/assets/images/logo/blue.png" class="logo-sm">
            </span>
            <span>
                <img src="{{ url('/') }}/assets-web2/assets/images/logo/text-black.png" alt="logo-large"
                    class="logo-lg logo-dark mt-2">
            </span>
        </a>
    </div>
    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <ul class="metismenu left-sidenav-menu">
            <li class="menu-label mt-0">Main</li>
            <hr class="hr-dashed hr-menu">
            <li class="{{ request()->is('Admin/Dashboard') ? 'active' : '' }}">
                <a href="{{url('Admin/Dashboard')}}"><i class="fa fa-home align-self-center menu-icon" aria-hidden="true"></i><span>Dashboard</span></a>
            </li>
            <li class="{{ request()->is('Admin/Katalog-Pohon*') ? 'active' : '' }}">
                <a href="{{url('Admin/Katalog-Pohon')}}"><i class="fa fa-tree align-self-center menu-icon" ></i><span>Katalog Pohon</span></a>
            </li>
            <li class="{{ request()->is('Admin/Event*') ? 'active' : '' }}">
                <a href="{{url('Admin/Event')}}"><i class="fa fa-calendar align-self-center menu-icon" ></i><span>Event</span></a>
            </li>
            <li class="{{ request()->is('Admin/Tanaman*') ? 'active' : '' }}">
                <a href="{{url('Admin/Tanaman')}}"><i class="fa fa-leaf align-self-center menu-icon" ></i><span>Penanaman</span></a>
            </li>
            <li class="{{ request()->is('Admin/User*') ? 'active' : '' }}">
                <a href="{{url('Admin/User')}}"><i class="fa fa-user align-self-center menu-icon" ></i><span>User</span></a>
            </li>

        </ul>
    </div>
</div>
