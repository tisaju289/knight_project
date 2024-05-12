@extends('auth.layouts.authApp')
@section('title', 'Password Reset Option')

@section('content')


    <div class="auth-page-content">
        <div class="container">
            
            {{-- @include('auth.partials.logoSection') --}}
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-7 col-xl-6">
                    <div class="card mt-4">

                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">Chose Password Reset Option</h5>
                                {{-- <p class="text-muted">Sign in to continue.</p> --}}
                            </div>
                            <div class="p-2 mt-4">
                                <form action="https://themesbrand.com/velzon/html/default/index.html">

                                    <div class="d-grid gap-2">
                                        <a href="{{ asset('password-reset-mobile') }}" class="btn btn-primary">Password reset with mobile</a>
                                        <a href="{{ asset('password-reset-email') }}" class="btn btn-primary">Password reset with email</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                    <div class="mt-4 text-center">
                        <p class="mb-0 text-white">Wait, I remember my password... <a href="{{ asset('signin') }}"
                                class="fw-semibold text-warning text-decoration-underline"> Click here </a> </p>
                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

@endsection
