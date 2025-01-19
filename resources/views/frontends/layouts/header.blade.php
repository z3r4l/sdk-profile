<header id="xb-header-area" class="header-area is-sticky">
    <div class="header-top_wrap">
        <div class="container">
            <div class="header-top ul_li_between">
                <div class="xb-help_desk">
                    <img src="{{ asset('frontends/assets/img/icon/hero_top-icon.png') }}" alt="">
                    <p>Bantuan : <span>(0778) 458432</span></p>
                </div>
                <div class="xb-info">
                    <ul class="ul_li align-items-end">
                        <li>Informasi Untuk :</li>
                        <li><a href="#!">Murid</a></li>
                        <li><a href="#!">Alumni</a></li>
                        <li><a href="#!">Research</a></li>
                        <li><a href="#!">Komunitas</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="xb-header">
        <div class="container">
            <div class="header__wrap ul_li_between">
                <div class="header-logo">
                    <a href="index.html"><img src="{{ asset('frontends/logo_sdk.png') }}" alt="Logo SD Kartini II" width="80" height="80"></a>
                    <a href="index.html"><img src="{{ asset('frontends/logo_ykb.png') }}" alt="Logo SD Kartini II" width="80" height="80"></a>
                </div>
                <div class="main-menu__wrap ul_li navbar navbar-expand-lg">
                    <nav class="main-menu collapse navbar-collapse">
                        <ul>
                            <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                <a href="{{ route('home') }}">Beranda</a>
                            </li>
                            <li class="{{ request()->routeIs('profile') ? 'active' : '' }}">
                                <a href="{{ route('profile') }}">Profil</a>
                            </li>
                            {{-- <li>
                                <a href="admission.html">Fasilitas</a>
                            </li> --}}
                            <li class="{{ request()->routeIs('activity') ? 'active' : '' }}">
                                <a href="{{ route('activity') }}">Kegiatan</a>
                            </li>
                            <li class="{{ request()->routeIs('announcement') ? 'active' : '' }}">
                                <a href="{{ route('announcement') }}">Pengumuman</a>
                            </li>
                            <li>
                                <a href="contact.html">Perpustakaan</a>
                            </li>
                            <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                <a href="{{ route('contact') }}">Kontak</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="xb-header-wrap">
                        <div class="xb-header-menu">
                            <div class="xb-header-menu-scroll">
                                <div class="xb-menu-close xb-hide-xl xb-close"></div>
                                <div class="xb-logo-mobile xb-hide-xl">
                                    <a href="index.html" rel="home"><img src="{{ asset('frontends/logo_sdk.png') }}" alt="Logo SD Kartini II"></a>
                                </div>
                                {{-- <div class="xb-header-mobile-search xb-hide-xl">
                                    <form role="search" action="#">
                                        <input type="text" placeholder="Search..." name="s" class="search-field">
                                        <button class="search-submit" type="submit"><i
                                                class="far fa-search"></i></button>
                                    </form>
                                </div> --}}
                                <nav class="xb-header-nav">
                                    <ul class="xb-menu-primary clearfix">
                                        <li class="menu-item {{ request()->routeIs('home') ? 'active' : '' }}">
                                            <a href="{{ route('home') }}">Beranda</a>
                                        </li>
                                        <li class="menu-item {{ request()->routeIs('profile') ? 'active' : '' }}">
                                            <a href="{{ route('profile') }}">Profil</a>
                                        </li>
                                        <li class="menu-item {{ request()->routeIs('activity') ? 'active' : '' }}">
                                            <a href="{{ route('activity') }}">Kegiatan</a>
                                        </li>
                                        <li class="menu-item {{ request()->routeIs('announcement') ? 'active' : '' }}">
                                            <a href="{{ route('announcement') }}">Pengumuman</a>
                                        </li>
                                        <li>
                                            <a href="Perpustakaan.html">Perpustakaan</a>
                                        </li>
                                        <li class="menu-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                                            <a href="{{ route('contact') }}">Kontak</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="xb-header-menu-backdrop"></div>
                    </div>
                </div>
                <div class="header-right ul_li">
                    {{-- <a class="header-search header-search-btn" href="javascript:void(0);">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5 3.75H15" stroke="#170006" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M10.5 6H12.75" stroke="#170006" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M15.75 8.625C15.75 12.5625 12.5625 15.75 8.625 15.75C4.6875 15.75 1.5 12.5625 1.5 8.625C1.5 4.6875 4.6875 1.5 8.625 1.5"
                                stroke="#170006" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16.5 16.5L15 15" stroke="#170006" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        Search
                    </a> --}}
                    <div class="language_dropdown dropdown">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="flag">
                                <img src="{{ asset('frontends/assets/img/icon/flag_indonesia.webp') }}" alt="USA">
                            </span>
                            <span class="name">Indonesia</span>
                        </button>
              
                    </div>
                </div>
                <div class="header-bar-mobile side-menu d-lg-none">
                    <a class="xb-nav-mobile" href="javascript:void(0);"><i class="fal fa-bars"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>