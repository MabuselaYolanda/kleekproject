<div class="fixed-top">
    <div class="navbar-area">
        <!-- mobile menu -->
        <div class="mobile-nav">
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('welcome/assets/images/logo.png') }}" alt="logo">
            </a>
        </div>
        <!-- desktop menu -->
        <div class="main-nav main-nav-2">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('welcome/assets/images/logo.png') }}" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link">Home</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('about') }}" class="nav-link">About</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('contact') }}" class="nav-link">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
