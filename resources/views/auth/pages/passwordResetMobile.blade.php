@extends('auth.layouts.authApp')
@section('title', 'Password Reset Mobile')

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
                                <h5 class="text-primary">Forgot Password?</h5>
                                <p class="text-muted">Reset password with mobile</p>

                                <lord-icon src="https://cdn.lordicon.com/rhvddzym.json" trigger="loop"
                                    colors="primary:#00000" class="avatar-xl"></lord-icon>

                            </div>

                            <div class="alert border-0 alert-warning text-center mb-2 mx-2" role="alert">
                                Enter your mobile number and instructions will be sent to you!
                            </div>
                            <div class="p-2">
                                <form>
                                    <div class="mb-4">
                                        <label class="form-label">Mobile</label>
                                        <input type="mobile" class="form-control" id="mobile" placeholder="Enter Mobile">
                                    </div>

                                    <div class="text-center mt-4">
                                        <button class="btn btn-dark w-100" type="submit">Send Reset Code</button>
                                    </div>
                                </form><!-- end form -->
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
