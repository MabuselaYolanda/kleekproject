
<body class="menu-position-side menu-side-left full-screen with-content-panel">
<div class="all-wrapper with-side-panel solid-bg-all">
    <div class="layout-w">
        <!--------------------
        START - Mobile Menu
        -------------------->
        <div class="menu-mobile menu-activated-on-click color-scheme-dark">
            <div class="mm-logo-buttons-w">
                <a class="mm-logo" href="{{ route('dashboard') }}"><img src="img/logo.png"><span>Kleek</span></a>
                <div class="mm-buttons">
                    <div class="content-panel-open">
                        <div class="os-icon os-icon-grid-circles"></div>
                    </div>
                    <div class="mobile-menu-trigger">
                        <div class="os-icon os-icon-hamburger-menu-1"></div>
                    </div>
                </div>
            </div>
            <div class="menu-and-user">
                <div class="logged-user-w">
                    <div class="avatar-w">
                        <img alt="" src="{{ $profile->avatar }}">
                    </div>
                    <div class="logged-user-info-w">
                        <div class="logged-user-name">
                            {{ Auth::user()->name .' '. Auth::user()->surname }}
                        </div>
                        <div class="logged-user-role">
                            {{ Auth::user()->role }} Account
                        </div>
                    </div>
                </div>
                <!--------------------
                START - Mobile Menu List
                -------------------->
                <ul class="main-menu">
                    <li class="has-sub-menu">
                        <a href="{{ route('dashboard') }}">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layout"></div>
                            </div>
                            <span>Analytics</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="index.html">Overview</a>
                            </li>
                            <li>
                                <a href="apps_crypto.html">Businesses</a>
                            </li>
                            <li>
                                <a href="apps_support_dashboard.html">Hiring Report</a>
                            </li>
                            <li>
                                <a href="apps_projects.html">Sales Report</a>
                            </li>
                        </ul>
                    </li>
                </ul>
        </div>
        </div>
        <!--------------------
        END - Mobile Menu
        --------------------><!--------------------
        START - Main Menu
        -------------------->
        <div class="menu-w color-scheme-dark color-style-bright menu-position-side menu-side-left menu-layout-mini sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">
            <div class="logo-w">
                <a class="logo" href="{{ route('dashboard') }}">
                    <div class="logo-element"></div>
                    <div class="logo-label">
                        Kleek
                    </div>
                </a>
            </div>
            <div class="logged-user-w avatar-inline">
                <div class="logged-user-i">
                    <div class="avatar-w">
                        <img alt="" src="{{ $profile->avatar }}">
                    </div>
                    <div class="logged-user-info-w">
                        <div class="logged-user-name">
                            {{ Auth::user()->name .' '. Auth::user()->surname }}
                        </div>
                        <div class="logged-user-role">
                            {{ Auth::user()->role }} Account
                        </div>
                    </div>
                    <div class="logged-user-toggler-arrow">
                        <div class="os-icon os-icon-chevron-down"></div>
                    </div>
                    <div class="logged-user-menu color-style-bright">
                        <div class="logged-user-avatar-info">
                            <div class="avatar-w">
                                <img alt="" src="{{ $profile->avatar }}">
                            </div>
                            <div class="logged-user-info-w">
                                <div class="logged-user-name">
                                    {{ Auth::user()->name .' '. Auth::user()->surname }}
                                </div>
                                <div class="logged-user-role">
                                    {{ Auth::user()->role }} Account
                                </div>
                            </div>
                        </div>
                        <div class="bg-icon">
                            <i class="os-icon os-icon-wallet-loaded"></i>
                        </div>
                        <ul>
                            <li>
                                <a href="apps_email.html"><i class="os-icon os-icon-mail-01"></i><span>Incoming Mail</span></a>
                            </li>
                            <li>
                                <a href="users_profile_big.html"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a>
                            </li>
                            <li>
                                <a href="users_profile_small.html"><i class="os-icon os-icon-coins-4"></i><span>Billing Details</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="os-icon os-icon-others-43"></i><span>Notifications</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <h1 class="menu-page-header">
                Page Header
            </h1>
            <ul class="main-menu">
                <li class="sub-header">
                    <span>Layouts</span>
                </li>
                <li class="selected has-sub-menu">
                    <a href="index.html">
                        <div class="icon-w">
                            <div class="os-icon os-icon-layout"></div>
                        </div>
                        <span>Dashboard</span></a>
                    <div class="sub-menu-w">
                        <div class="sub-menu-header">
                            Analytics
                        </div>
                        <div class="sub-menu-icon">
                            <i class="os-icon os-icon-layout"></i>
                        </div>
                        <div class="sub-menu-i">
                            <ul class="sub-menu">
                                <li>
                                    <a href="index.html">Overview</a>
                                </li>
                                <li>
                                    <a href="apps_crypto.html">Businesses</a>
                                </li>
                                <li>
                                    <a href="apps_support_dashboard.html">Hiring Report</a>
                                </li>
                                <li>
                                    <a href="apps_projects.html">Sales Report</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="content-w">
            <div class="top-bar color-scheme-bright">
                <div class="top-menu-controls">
                    <div class="logged-user-w">
                        <div class="logged-user-i">
                            <div class="avatar-w">
                                <img alt="" src="{{ $profile->avatar }}">
                            </div>
                            <div class="logged-user-menu color-style-bright">
                                <div class="logged-user-avatar-info">
                                    <div class="avatar-w">
                                        <img alt="" src="{{ $profile->avatar }}">
                                    </div>
                                    <div class="logged-user-info-w">
                                        <div class="logged-user-name">
                                            {{ Auth::user()->name .' '. Auth::user()->surname }}
                                        </div>
                                        <div class="logged-user-role">
                                            {{ Auth::user()->role }} Account
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-icon">
                                    <i class="os-icon os-icon-wallet-loaded"></i>
                                </div>
                                <ul>
                                    <li>
                                        <a href="apps_email.html"><i class="os-icon os-icon-mail-01"></i><span>Incoming Mail</span></a>
                                    </li>
                                    <li>
                                        <a href="users_profile_big.html"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a>
                                    </li>
                                    <li>
                                        <a href="users_profile_small.html"><i class="os-icon os-icon-coins-4"></i><span>Billing Details</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="os-icon os-icon-others-43"></i><span>Notifications</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
