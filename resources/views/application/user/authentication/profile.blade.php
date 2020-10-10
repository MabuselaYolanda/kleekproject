@extends('partials.app')

@section('content')
    <body class="auth-wrapper">
    <div class="all-wrapper menu-side with-pattern">
        <div class="auth-box-w">
            <div class="logo-w">
                <a href="{{ route('home') }}"><img alt="" src="{{ asset('welcome/assets/images/logo.png') }}"></a>
            </div>
            <h4 class="auth-header">
                {{ env('APP_NAME') }} Profile Creation Form
            </h4>

            <livewire:platform.users.authentication.profile>

        </div>
    </div>
    </body>
@endsection
