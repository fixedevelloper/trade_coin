@extends('auth.layout')

@section('content')

    <div class="row justify-content-center h-100 align-items-center">
        <div class="col-xl-5 col-md-6">
            <div class="mini-logo text-center my-4">
                <a href="{!! route('home') !!}"
                ><img src="{!! asset('front/images/logo.png') !!}" alt=""
                    /></a>
                <h4 class="card-title mt-3">Sign in to {!! strtoupper(env('app_name'))  !!}</h4>
            </div>
            <div class="auth-form card">
                <div class="card-body">
                    <form class="signin_validate row g-3" method="POST">
                        @csrf
                        <div class="col-12">
                            <input
                                type="email"
                                class="form-control"
                                placeholder="hello@example.com"
                                name="email"
                            />
                        </div>
                        <div class="col-12">
                            <input
                                type="password"
                                class="form-control"
                                placeholder="Password"
                                name="password"
                            />
                        </div>
                        <div class="col-6">
                            <div class="form-check form-switch">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    id="flexSwitchCheckDefault"
                                />
                                <label
                                    class="form-check-label"
                                    for="flexSwitchCheckDefault"
                                >Remember me</label
                                >
                            </div>
                        </div>
                        <div class="col-6 text-end">
                            <a href="reset.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block">
                                Sign in
                            </button>
                        </div>
                    </form>
                    <p class="mt-3 mb-0">
                        Don't have an account?
                        <a class="text-primary" href="{!! route('auth.register') !!}">Sign up</a>
                    </p>
                </div>
            </div>
            <div class="privacy-link">
                <a href="signup.html">Have an issue with 2-factor authentication?</a
                >
                <br/>
                <a href="signup.html">Privacy Policy</a>
            </div>
        </div>
    </div>

@endsection
