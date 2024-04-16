@extends('front.layout')
@section('content')
    <div class="row">
        <div class="col-xxl-8 col-xl-8">
            <div class="card">
                <div class="card-body">
                    <div class="this-coin-price">
                        <h3>
                            {!! $price->price * $price->taux !!}
                            <sub>FCFA</sub>
                        </h3>
                        <span class="text-danger"
                        >-0.2.30% <i class="icofont-arrow-down"></i
                            ></span>
                    </div>
                    <div id="btcChart"></div>
                    <div class="chart-content text-center">
                        <div class="row">
                            <div
                                class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6"
                            >
                                <div class="chart-stat">
                                    <p class="mb-1">24hr Volume</p>
                                    <h5>$1236548.325</h5>
                                </div>
                            </div>
                            <div
                                class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6"
                            >
                                <div class="chart-stat">
                                    <p class="mb-1">Market Cap</p>
                                    <h5>19B FCFA</h5>
                                </div>
                            </div>
                            <div
                                class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6"
                            >
                                <div class="chart-stat">
                                    <p class="mb-1">Circulating Supply</p>
                                    <h5>29.4M BTC</h5>
                                </div>
                            </div>
                            <div
                                class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6"
                            >
                                <div class="chart-stat">
                                    <p class="mb-1">All Time High</p>
                                    <h5>19.783.06 FCFA</h5>
                                </div>
                            </div>
                            <div
                                class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6"
                            >
                                <div class="chart-stat">
                                    <p class="mb-1">Typical hold time</p>
                                    <h5>88 days</h5>
                                </div>
                            </div>
                            <div
                                class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6"
                            >
                                <div class="chart-stat">
                                    <p class="mb-1">Trading activity</p>
                                    <h5>70% buy</h5>
                                </div>
                            </div>
                            <div
                                class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6"
                            >
                                <div class="chart-stat">
                                    <p class="mb-1">Popularity</p>
                                    <h5>#1 most held</h5>
                                </div>
                            </div>
                            <div
                                class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6"
                            >
                                <div class="chart-stat">
                                    <p class="mb-1">Popularity</p>
                                    <h5>#1 most held</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-xl-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Price correlation with</h4>
                </div>
                <div class="card-body">
                    <ul class="balance-widget">
                        <li>
                            <div class="icon-title">
                                <i class="cc BTC"></i>
                                <span
                                >{!! $price->name !!} <br />
                          <small>Moves together</small></span
                                >
                            </div>
                            <div class="text-end">
                                <h5>0.000242 FCFA</h5>
                                <span>64% </span>
                            </div>
                        </li>
                        <li>
                            <div class="icon-title">
                                <i class="cc LTC"></i>
                                <span
                                >Litecoin <br />
                          <small>Moves together</small></span
                                >
                            </div>
                            <div class="text-end">
                                <h5>0.000242 FCFA</h5>
                                <span>0.125 %</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon-title">
                                <i class="cc XRP"></i>
                                <span
                                >Ripple <br />
                          <small>Moves together</small></span
                                >
                            </div>
                            <div class="text-end">
                                <h5>0.000242 FCFA</h5>
                                <span>0.125 %</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon-title">
                                <i class="cc DASH"></i>
                                <span
                                >Dash <br />
                          <small>Moves together</small></span
                                >
                            </div>
                            <div class="text-end">
                                <h5>0.000242 FCFA</h5>
                                <span>0.125 %</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon-title">
                                <i class="cc XRP"></i>
                                <span
                                >Ripple <br />
                          <small>Moves together</small></span
                                >
                            </div>
                            <div class="text-end">
                                <h5>0.000242 FCFA</h5>
                                <span>0.125 %</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon-title">
                                <i class="cc DASH"></i>
                                <span
                                >Dash <br />
                          <small>Moves together</small></span
                                >
                            </div>
                            <div class="text-end">
                                <h5>0.000242 FCFA</h5>
                                <span>0.125 %</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon-title">
                                <i class="cc LTC"></i>
                                <span
                                >Litecoin <br />
                          <small>Moves together</small></span
                                >
                            </div>
                            <div class="text-end">
                                <h5>0.000242 FCFA</h5>
                                <span>0.125 %</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon-title">
                                <i class="cc XRP"></i>
                                <span
                                >Ripple <br />
                          <small>Moves together</small></span
                                >
                            </div>
                            <div class="text-end">
                                <h5>0.000242 FCFA</h5>
                                <span>0.125 %</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon-title">
                                <i class="cc DASH"></i>
                                <span
                                >Dash <br />
                          <small>Moves together</small></span
                                >
                            </div>
                            <div class="text-end">
                                <h5>0.000242 FCFA</h5>
                                <span>0.125 %</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="invite-content">
                        <h4>Invite a friend and get 6000FCFA</h4>
                        <p>
                            Know someone curious about crypto? You will receive up to
                            6000 FCFA when they： 1.Buy Crypto 2. Deposit 3. Finish Trading
                            Tasks <br />
                            <a href="#">Learn more</a>
                        </p>

                        <div class="copy-link">
                            <form action="#">
                                <div class="input-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        value="{!! route('join_us',['id'=>auth()->user()->unique_number]) !!}"
                                        id="myInput"
                                    />
                                    <span
                                        class="input-group-text c-pointer"
                                        onclick="myFunction()"  @if(is_null($wallet)) disabled @endif
                                    >Copy</span
                                    >
                                </div>
                            </form>
                        </div>

                        <div class="social-share-link">
                            <a href="#"
                            ><span><i class="icofont-facebook"></i></span
                                ></a>
                            <a href="#"
                            ><span><i class="icofont-twitter"></i></span
                                ></a>
                            <a href="#"
                            ><span><i class="icofont-whatsapp"></i></span
                                ></a>
                            <a href="#"
                            ><span><i class="icofont-telegram"></i></span
                                ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Deposit</h4>
                </div>
                <div class="card-body">
                    <div class="price-deposit">
                        <form action="#">
                            <label class="form-label">{!! $price->symbol !!} Deposit Address</label>
                            <div class="input-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    value="{!! is_null($wallet)?'': $wallet->address !!}"
                                />
                                <span class="input-group-text"  @if(is_null($wallet)) disabled @endif>Copy</span>
                            </div>
                        </form>
                    </div>
                    <div class="mt-4">
                        <button class="btn btn-primary btn-block"  @if(is_null($wallet)) disabled @endif>Withdraw {!! $price->symbol !!}</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Buy</h4>
                </div>
                <div class="card-body">
                    <form method="post" name="myform" class="currency_validate">
                        <label class="form-label">Buy {!! $price->symbol !!}</label>
                        <div class="input-group">
                            <input
                                type="text"
                                name="currency_amount"
                                class="form-control"
                                placeholder="{!! $price->price * $price->taux !!} {!! $price->symbol !!}"
                            />
                            <label class="input-group-text">FCFA</label>
                        </div>

                        <button
                            type="submit"
                            name="submit"
                            class="btn btn-success btn-block mt-4" @if(is_null($wallet)) disabled @endif>
                            Buy Now
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Sell</h4>
                </div>
                <div class="card-body">
                    <form method="post" name="myform" class="currency_validate">
                        <label class="form-label">Sell {!! $price->symbol !!}</label>
                        <div class="input-group">
                            <input
                                type="text"
                                name="currency_amount"
                                class="form-control"
                                placeholder="{!! $price->price * $price->taux !!} {!! $price->symbol !!}"
                            />
                            <label class="input-group-text">FCFA</label>
                        </div>

                        <button
                            type="submit"
                            name="submit"
                            class="btn btn-success btn-block mt-4" @if(is_null($wallet)) disabled @endif
                        >
                            Sell Now
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{!! asset("front/vendor/apexchart/apexcharts.min.js") !!}"></script>
    <script src="{!! asset("front/js/plugins/apex-price.js") !!}"></script>
    <script src="{!! asset("front/js/plugins/pric-btc.js") !!}"></script>
@endpush
