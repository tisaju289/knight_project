@extends('auth.layouts.authApp')
@section('title', 'Change Password')

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
                                <h5 class="text-primary">Create new password</h5>
                                <p class="text-muted">Your new password must be different from previous used password.</p>
                            </div>

                            <div class="p-2">
                                <form action="https://themesbrand.com/velzon/html/default/auth-signin-basic.html">
                                    <div class="mb-3">
                                        <label class="form-label" for="password-input">Password</label>
                                        <div class="position-relative auth-pass-inputgroup">
                                            <input type="password" class="form-control pe-5 password-input"
                                                onpaste="return false" placeholder="Enter password" id="password-input"
                                                aria-describedby="passwordInput"
                                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                            <button
                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                type="button" id="password-addon"><i
                                                    class="ri-eye-fill align-middle"></i></button>
                                        </div>
                                        <div id="passwordInput" class="form-text">Must be at least 8 characters.</div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="confirm-password-input">Confirm Password</label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input type="password" class="form-control pe-5 password-input"
                                                onpaste="return false" placeholder="Confirm password"
                                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="confirm-password-input"
                                                required>
                                            <button
                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                type="button" id="confirm-password-input"><i
                                                    class="ri-eye-fill align-middle"></i></button>
                                        </div>
                                    </div>

                                    <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                        <h5 class="fs-13">Password must contain:</h5>
                                        <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b></p>
                                        <p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter (a-z)</p>
                                        <p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b> letter (A-Z)
                                        </p>
                                        <p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)</p>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="auth-remember-check">
                                        <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                    </div>

                                    <div class="mt-4">
                                        <button class="btn btn-success w-100" type="submit">Reset Password</button>
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
