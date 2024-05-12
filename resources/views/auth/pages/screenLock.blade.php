@extends('auth.layouts.authApp')
@section('title', 'Screen Lock')

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
                                <h5 class="text-primary">Lock Screen</h5>
                                <p class="text-muted">Enter your password to unlock the screen!</p>
                            </div>
                            <div class="user-thumb text-center">
                                <img src="assets/images/users/avatar-1.jpg" class="rounded-circle img-thumbnail avatar-lg"
                                    alt="thumbnail">
                                <h5 class="font-size-15 mt-3">A Hasan Reza</h5>
                            </div>
                            <div class="p-2 mt-4">
                                <form action="{{ asset('profile') }}">
                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword">Password</label>
                                        <input type="password" class="form-control" id="userpassword"
                                            placeholder="Enter password" required>
                                    </div>
                                    <div class="mb-2 mt-4">
                                        <button class="btn btn-success w-100" type="submit">Unlock</button>
                                    </div>
                                </form><!-- end form -->

                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                    <div class="mt-4 text-center">
                        <p class="mb-0">Not you ? return <a href="auth-signin-basic.html"
                                class="fw-semibold text-primary text-decoration-underline"> Signin </a> </p>
                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

@endsection
