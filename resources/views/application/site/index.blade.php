@extends('partials.welcome')

    @section('content')
        @include('partials.navbar_welcome')
        <header class="header header-bg-2">
            <div class="header-shape-2">
                <div class="header-shape-2-item">
                    <img src="{{ asset('welcome/assets/images/header-2-shape.png') }}" alt="shape">
                </div>
            </div>
            <div class="container-fluid">
                <div class="header-inner">
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <div class="header-content-2">
                                <h1>Digital Ecommerce Platform</h1>
                                <p>Platform built for businesses that want to recruit new staff on demand based on their workload</p>
                                <ul class="section-button">
                                    @guest
                                    <li>
                                        <a href="{{ route('login') }}"><button class="btn1 orange-gradient btn-with-image">
                                            <i class="flaticon-login"></i>
                                            <i class="flaticon-login"></i>
                                            Login
                                        </button></a>
                                    </li>

                                        <li>
                                            <a href="{{ route('register') }}"><button class="btn1 orange-gradient btn-with-image">
                                                    <i class="flaticon-login"></i>
                                                    <i class="flaticon-login"></i>
                                                    Register
                                                </button></a>
                                        </li>
                                    @endguest

                                        @auth
                                            <li>
                                                <a href="{{ route('dashboard') }}"><button class="btn1 orange-gradient btn-with-image">
                                                        <i class="flaticon-login"></i>
                                                        <i class="flaticon-login"></i>
                                                        Dashboard
                                                    </button></a>
                                            </li>
                                        @endauth
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <div class="header-content-2-img">
                                <img src="{{ asset('welcome/assets/images/imac.png') }}" alt="imac">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </header>


        <section class="feature-section p-tb-100">
            <div class="container">
                <div class="section-title">
                    <h2>{{ env('APP_NAME') }} Features</h2>
                </div>
                <!-- home-feature -->
                <div class="home-feature">
                    <div class="home-feature-carousel owl-carousel owl-theme">
                        <div class="item">
                            <div class="feature-carousel-content">
                                <div class="feature-carousel-thumb status-blue">
                                    <img src="{{ asset('welcome/assets/images/file.png') }}" alt="feature">
                                </div>
                                <div class="feature-carousel-details">
                                    <h3>Realtime</h3>
                                    <p>Using Advanced SSR and Websocket technology we are able to update dashboard data in realtime</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feature-carousel-content">
                                <div class="feature-carousel-thumb status-green">
                                    <img src="{{ asset('welcome/assets/images/megaphone.png') }}" alt="feature">
                                </div>
                                <div class="feature-carousel-details">
                                    <h3>Job Order Recruitment</h3>
                                    <p>With our job applicant matching system we are able to automatically match you with potential temporary workers should you receive large orders while understaffed</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feature-carousel-content">
                                <div class="feature-carousel-thumb status-orange">
                                    <img src="{{ asset('welcome/assets/images/hand.png') }}" alt="feature">
                                </div>
                                <div class="feature-carousel-details">
                                    <h3>Virtual Employee Accounts</h3>
                                    <p>With MoMo integration the platform is able to automatically payout wages to the temp workers in realtime after work completion</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feature-carousel-content">
                                <div class="feature-carousel-thumb status-orange">
                                    <img src="{{ asset('welcome/assets/images/shield.png') }}" alt="feature">
                                </div>
                                <div class="feature-carousel-details">
                                    <h3>Safe and Secure</h3>
                                    <p>With use of AES256/CBC encryption we pride ourselves in our safe and secure platform</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @stop
