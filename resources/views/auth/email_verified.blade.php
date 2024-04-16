@extends('auth.layout')

@section('content')

    <div class="row justify-content-center h-100 align-items-center">
        <div class="verification section-padding">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-xl-5 col-md-6">
                        <div class="mini-logo text-center my-4">
                            <a href="{!! route('home') !!}"><img src="{!! asset('front/images/logo.png') !!}" alt=""></a>
                            <h4 class="card-title mt-3">Verify your Email</h4>
                        </div>
                        <div class="auth-form card">
                            <div class="card-body">
                                <form action="#" class="identity-upload">
                                    <div class="identity-content">
                                        <span class="icon"><i class="icofont-email"></i></span>
                                        <p>We sent verification email to <strong
                                                class="text-dark">{!! $user->email !!}</strong>. Click the link inside to
                                            get started!</p>
                                        <a href="{!! route('back.dashboard') !!}">Go to Dashboard</a>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <a href="{!! route('auth.signin') !!}">Email didn't arrive?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
