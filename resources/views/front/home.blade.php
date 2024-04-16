<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Discover the new era of finance with {!! config('app_name') !!}!</title>
    <!-- Favicon icon -->
    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="{!! asset('front/images/logo.png') !!}"
    />
    <!-- Custom Stylesheet -->

    <link rel="stylesheet" href="{!! asset('front/css/style.css') !!}" />
    <link rel="stylesheet" href="{!! asset('front/css/custom.css') !!}" />
</head>

<body>
<div id="preloader"><i>.</i><i>.</i><i>.</i></div>

<div id="main-wrapper">
    <div class="header landing">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <nav class="navbar">
                        <div class="brand-logo">
                            <a href="{!! route('home') !!}">
                                <img src="{!! asset('front/images/logo.png') !!}" alt="">
                                <span>BEST-COIN</span>
                            </a>
                        </div>
                        @if(is_null(auth()->user()))
                            <a href="{!! route('auth.signin') !!}" class="btn btn-success">Sign in</a>
                        @else
                            <a href="{!! route('back.dashboard') !!}">
                                @if(is_null(auth()->user()->logo))
                                    <img src="{{asset('front/images/logo.png')}}" alt="avatar"  class="align-self-center pull-right img-50 blur-up lazyloaded">
                                @else
                                    <img src="{{ asset("storage/".auth()->user()->photo) }}" alt="avatar"  class="align-self-center pull-right img-50 blur-up lazyloaded">

                                @endif
                            </a>


                        @endif

                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="intro" id="intro" data-scroll-index="0">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-6 col-md-6">
                    <div class="intro-content pb-5">
                        <h1><span class="text-uppercase">{!! config('app.name') !!}</span> - Crypto Exchange Plateform</h1>
                        <p>Dive into the exciting world of cryptocurrencies with <span class="text-success">{!! env('app_name') !!}</span>, your one-stop shop for buying, selling and trading a variety of digital currencies. Whether you are a beginner
                            investor or a seasoned trader, our user-friendly and secure platform gives you the tools and resources you need to thrive in this ever-changing world.. </p>
                        <div class="intro-btn">
                            <a href="{!! route('auth.register') !!}" class="btn btn-primary">Get Started</a>
                            <a href="{!! route('back.dashboard') !!}" class="btn btn-outline-primary">Browse Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-md-6 py-md-5">
                    <div class="intro-demo_img">
                        <img src="{!! asset('front/images/trade_front.jpg') !!}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Last Transactions</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped responsive-table">
                                    <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Coin Name</th>
                                        <th>Wallet</th>
                                        <th>Amount</th>
                                        <th>Quantity</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($transactions as $transaction)
                                        <tr>
                                            <td>
                                                @if($transaction->type_trade==\App\Models\Trading::TRADE_SELL)
                                                    <span class="danger-arrow">
                                     <i class="icofont-arrow-down"></i>
                                    Sold
                                   </span>
                                                @elseif($transaction->type_trade==\App\Models\Trading::TRADE_BUY)
                                                    <span class="success-arrow">
                                     <i class="icofont-arrow-up"></i>
                                    Buy
                                   </span>
                                                @else
                                                    <span class="danger-arrow">
                                     <i class="icofont-arrow-right"></i>
                                    Transfer
                                   </span>
                                                @endif
                                            </td>

                                            <td class="coin-name">
                                                <i class="cc {!! $transaction->crypto->symbol !!}"></i> {!! $transaction->crypto->name !!}
                                            </td>
                                            <td>Using - Address {!! \App\Helpers\Helper::getWalletHome($transaction->crypto->id,$transaction->user_id)->address !!}</td>
                                            <td class="text-danger">{!! $transaction->amount !!} FCFA</td>
                                            <td>{!! $transaction->quantity !!}</td>
                                            <td>{!! \Illuminate\Support\Carbon::parse($transaction->created_at)->ago() !!}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>
    <div class="share">
        <i class="icofont-share"></i>
    </div>
    <div class="one">
        <a target="_blank" href="https://web.facebook.com/profile.php?id=100088212671848"><i class="icofont icofont-facebook"></i></a>
    </div>
    <div class="two">
        <i class="icofont icofont-twitter"></i>
    </div>
    <div class="three">
        <a target="_blank" href="https://wa.me/242064449019"><i class="icofont icofont-whatsapp"></i></a>
    </div>
</div>


<script src="{!! asset('front/vendor/jquery/jquery.min.js') !!}"></script>
<script src="{!! asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

<script src="{!! asset('front/js/scripts.js') !!}"></script>
<script>
    $(function(){
        var flag=0;

        $('.share').on('click',function(){
            if(flag == 0)
            {
                $(this).siblings('.one').animate({
                    // top:'440px',
                    bottom: '280px',
                    right:'7px',
                },200);

                $(this).siblings('.two').delay(200).animate({
                    // top:'480px',
                    bottom: '220px',
                    right:'8%'
                },200);

                $(this).siblings('.three').delay(300).animate({
                    bottom: '120px',
                    right:'7px'
                },200);

                $('.one i,.two i, .three i').delay(500).fadeIn(200);
                flag = 1;
            }


            else{
                $('.one, .two, .three').animate({
                    bottom: '30px',
                    right:'7px'
                },200);

                $('.one i,.two i, .three i').delay(500).fadeOut(200);
                flag = 0;
            }
        });
    });
</script>
</body>
</html>

