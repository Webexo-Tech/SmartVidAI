@extends('layouts.auth')

@section('title')
    {{ localize('Verify') }}
@endsection

@section('contents')
    <!--login registration section start-->
    <section class="tt-login-registration min-vh-100 d-flex overflow-hidden bg-dark bg-image-hero align-items-center">
        @include('auth.inc.loginSidebar')
        <!--right bar content-->
        <div class="tt-login-registration-form-wrap max-w-30 bg-secondary-subtle p-4 p-lg-5 min-vh-100">
            <a href="{{ route('home') }}" class="navbar-brand d-flex justify-content-center mb-5 text-decoration-none">
                <img src="{{ uploadedAsset(getSetting('navbar_logo_dark')) }}" alt="logo" class="img-fluid logo-color" />
            </a>

            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ localize('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif

            <!--form login-->
            <form action="{{ route('verification.resend') }}" method="POST" id="login-form" class="mt-4 register-form">
                @csrf
                <div class="row">
                    <div class="col-12 mb-2">
                        {{ localize('Before proceeding, please check your email for a verification link.') }}</div>

                    <div class="col-12 mb-3">
                        <button type="submit" class="btn btn-primary mt-3 d-block w-100 sign-in-btn"
                            onclick="handleSubmit()"> {{ localize('Click here to request another') }}</button>
                    </div>

                </div>
            </form>
            <!--form login-->
        </div>
    </section>
    <!--login registration section end-->
@endsection



@section('scripts')
    <script>
        "use strict";

        // disable login button
        function handleSubmit() {
            $('#login-form').on('submit', function(e) {
                $('.sign-in-btn').prop('disabled', true);
            });
        }
    </script>
@endsection
