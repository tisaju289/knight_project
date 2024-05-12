@extends('auth.layouts.authApp')
@section('title', 'Logout')

@section('content')


    <div class="auth-page-content">
        <div class="container">
            
            {{-- @include('auth.partials.logoSection') --}}
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-7 col-xl-6">
                    <div class="card mt-4">
                        <div class="card-body p-4 text-center">
                            <lord-icon src="https://cdn.lordicon.com/hzomhqxz.json" trigger="loop"
                                colors="primary:#405189,secondary:#08a88a" style="width:180px;height:180px"></lord-icon>

                            <div class="mt-4 pt-2">
                                <h5>You are Logged Out</h5>
                                <p class="text-muted">Thank you for using <span class="fw-semibold">velzon</span> admin
                                    template</p>
                                <div class="mt-4">
                                    <a href="{{ asset('signin') }}" class="btn btn-success w-100">Sign In</a>
                                </div>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

@endsection
