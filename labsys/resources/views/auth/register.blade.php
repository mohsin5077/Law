@extends('layouts.reglayout')

@section('content')
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="rounded p-4 p-sm-5 my-4 mx-3" style="background-color: #0c193cb7;">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="/">
                                <h3 class="text-primary">
                                    <i class="fa fa-user-edit me-2"></i>LabSys
                                </h3>
                            </a>
                            <h3>Register</h3>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="jhondoe" />
                                <label for="name">Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="name@example.com" :value="old('email')" required
                                    autocomplete="username" />
                                <label for="email">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="password" required autocomplete="new-password"
                                    class="form-control" id="password" placeholder="Password" />
                                <label for="password">Password</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input id="password_confirmation" type="password" class="form-control" type="password"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Password" />
                                <label for="password_confirmation">Confirm Password</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">
                                {{ __('Register') }}
                            </button>
                            <p class="text-center mb-0">
                                Already have an Account? <a href="{{ route('login') }}">{{ __('Already registered?') }}</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>
@endsection
