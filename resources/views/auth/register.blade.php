@extends('auth.layout')

@section('content')

    <div class="row justify-content-center h-100 align-items-center">
        <div class="col-xl-5 col-md-6">
            <div class="mini-logo text-center my-4">
                <a href="{!! route('home') !!}"
                ><img src="{!! asset('front/images/logo.png') !!}" alt=""
                    /></a>
                <h4 class="card-title mt-3">Create your account to {!! strtoupper(env('app_name'))  !!}</h4>
            </div>
            <div class="auth-form card">
                <div class="card-body">
                    <form method="post" name="myform" class="signin_validate row g-3">
                        @csrf
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Name" name="first_name">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control" placeholder="Email"
                                   name="email">
                        </div>
                        <div class="col-12">
                            <input type="tel" class="form-control" placeholder="Phone"
                                   name="phone">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control" placeholder="Password"
                                   name="password">
                        </div>
                        <div class="col-12">
                            <div class="form-check form-switch">
                                <input class="form-check-input" name="checkbox" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">
                                    I certify that I am 18 years of age or older, and agree to the <a
                                        href="#" class="text-primary">User Agreement</a> and <a href="#"
                                                                                                class="text-primary">Privacy Policy</a>.
                                </label>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block">Create account</button>
                        </div>
                    </form>
                    <div class="text-center">
                        <p class="mt-3 mb-0"> <a class="text-primary" href="{!! route('auth.signin') !!}">Sign in</a> to your
                            account</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
