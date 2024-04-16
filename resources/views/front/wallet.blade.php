@extends('front.layout')

@section('content')
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="wallet-widget card">
                        <h5>Estimated Balance</h5>
                        <h2><span class="text-primary">{!! auth()->user()->balance !!}</span> <sub>FCFA</sub></h2>
                       {{-- <p>= 0.000000 BTC</p>--}}
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="wallet-widget card">
                        <h5>Available Balance</h5>
                        <h2><span class="text-success">{!! auth()->user()->balance !!}</span> <sub>FCFA</sub></h2>
                       {{-- <p>= 0.000000 BTC</p>--}}
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="wallet-widget card">
                        <h5>Deposits</h5>
                        <a class="btn btn-outline-success mt-3" href="{!! route('back.deposit') !!}" rel="modal:open">
                            <i class="icofont-minus-circle"></i>Start</a>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="wallet-widget card">
                        <h5>Withdrawals</h5>
                        <a class="btn btn-outline-success mt-3" href="{!! route('back.withdraw') !!}" rel="modal:open">
                            <i class="icofont-minus-circle"></i>Start</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Wallet Addresses</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped responsive-table">
                                    <thead>
                                    <tr>
                                        <th>Coin Name</th>
                                        <th>Address</th>
                                        <th>QR</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($wallets as $wallet)
                                    <tr>
                                        <td>
                                            <div class="coin-name">
                                                <img src="{!! $wallet['icon'] !!}" width="22">
                                                <span>{!! $wallet['name'] !!}</span>
                                            </div>
                                        </td>
                                        <td>{!! $wallet['address'] !!}</td>
                                        <td>
                                            <img
                                                class="qr-img"
                                                src="./images/qr.svg"
                                                alt=""
                                                width="40"
                                            />
                                        </td>
                                        <td>
                                            @if(!$wallet['active'])
                                            <a class="btn btn-dark" href="{!! route('back.add_wallet',['id'=>$wallet['id']]) !!}" rel="modal:open"><i class="icofont-plus-circle"></i></a>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

             {{--   <div class="col-xxl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add FCFA to your wallet</h4>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center">
                                <form method="POST" action="{!! route('payment.collect_flutterware') !!}">
                                    @csrf
                                    <div class="col-12">
                                        <label class="form-label">Phone</label>
                                        <div class="input-group">
                                            <span class="input-group-text">237</span>
                                            <input
                                                type="text"
                                                name="phone"
                                                class="form-control"
                                                placeholder=""/>
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Amount</label>
                                        <div class="input-group">
                                            <span class="input-group-text">FCFA</span>
                                            <input
                                                id="currency_sell"
                                                type="text"
                                                name="amount"
                                                class="form-control"
                                                placeholder="EX:15000"
                                            />
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Receive Amount</label>
                                        <div class="input-group">
                                            <span class="input-group-text">FCFA</span>
                                            <input id="currency_sell"
                                                   type="text"
                                                   name="currency_amount"
                                                   class="form-control"
                                                   placeholder=""/>
                                        </div>

                                    </div>
                                    <div class="col-12 mt-3">
                                        <button
                                            type="submit"
                                            class="btn btn-primary btn-block">
                                            Start
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>--}}

                <div class="col-xxl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Withdraws</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped responsive-table">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Phone</th>
                                        <th>Name</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($withdraws as $withdraw)
                                        <tr>
                                            <td class="success-arrow">
                                                <i class="icofont-arrow-up ml-2"></i>
                                                {!! $withdraw->id !!}</td>
                                            <td>{!! $withdraw->phone !!}</td>
                                            <td>{!! $withdraw->name !!}</td>
                                            <td>{!! $withdraw->amount !!}</td>
                                            <td>{!! $withdraw->status !!}</td>

                                            <td class="success-arrow">
                                               <a class="btn btn-outline-success" href="#"><i class="icofont-eye"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Deposit</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped responsive-table">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Phone</th>
                                        <th>Name</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($deposits as $withdraw)
                                        <tr>
                                            <td class="success-arrow">
                                                <i class="icofont-arrow-up ml-2"></i>
                                                {!! $withdraw->id !!}</td>
                                            <td>{!! $withdraw->phone !!}</td>
                                            <td>{!! $withdraw->name !!}</td>
                                            <td>{!! $withdraw->amount !!}</td>
                                            <td>{!! $withdraw->status !!}</td>

                                            <td class="success-arrow">
                                                <a href="{!! route('payment.finish_transaction',['txr'=>$withdraw->reference]) !!}" class="btn btn-outline-success"><i class="icofont-arrow-right"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Withdrawals</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped responsive-table">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Type</th>
                                        <th>Amount</th>
                                        <th>Fee</th>
                                        <th>Date</th>
                                        <th>Hash</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>12345</td>
                                        <td class="coin-name">
                                            <i class="cc BTC"></i>
                                            <span>Bitcoin</span>
                                        </td>
                                        <td>0</td>
                                        <td>0.02%</td>
                                        <td>Jan 01</td>
                                        <td>#1236598745565</td>
                                        <td>Pending</td>
                                    </tr>
                                    <tr>
                                        <td>12345</td>
                                        <td class="coin-name">
                                            <i class="cc BTC"></i>
                                            <span>Bitcoin</span>
                                        </td>
                                        <td>0</td>
                                        <td>0.02%</td>
                                        <td>Jan 01</td>
                                        <td>#1236598745565</td>
                                        <td>Pending</td>
                                    </tr>
                                    <tr>
                                        <td>12345</td>
                                        <td class="coin-name">
                                            <i class="cc BTC"></i>
                                            <span>Bitcoin</span>
                                        </td>
                                        <td>0</td>
                                        <td>0.02%</td>
                                        <td>Jan 01</td>
                                        <td>#1236598745565</td>
                                        <td>Pending</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection

