@extends('front.layout')
@section('content')

            <div class="row">
                <div class="col-xxl-12">
                    <div class="page-title">
                        <h4>Fees</h4>
                    </div>
                    <div class="card h-unset">
                        <div class="card-header">
                            <div class="settings-menu">
                                <a href="{!! route('back.setting-profil') !!}">Profile</a>
                                <a href="{!! route('back.setting-application') !!}">Application</a>
                                <a href="{!! route('back.setting-security') !!}">Security</a>
                                <a href="{!! route('back.setting-activity') !!}">Activity</a>
                                <a href="{!! route('back.setting-privacy') !!}">Privacy</a>
                                <a href="{!! route('back.setting-fees') !!}">Fees</a>
                            </div>
                        </div>
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-xxl-12">
                                    <div class="card no-shadow h-unset">
                                        <div class="card-header">
                                            <h4 class="card-title">Normal User</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>Tier</th>
                                                        <th>Total Qash holding</th>
                                                        <th>30-day Trading Volume (BTC)</th>
                                                        <th>Maker Fee</th>
                                                        <th>Taker Fee</th>
                                                        <th>24h Withdrawal Limit (BTC)</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Lv 1</td>
                                                        <td>&#60; 500</td>
                                                        <td>&#60; 1000</td>
                                                        <td>&#60; 0.100%</td>
                                                        <td>&#60; 0.150%</td>
                                                        <td>500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lv 1</td>
                                                        <td>&#60; 500</td>
                                                        <td>&#60; 1000</td>
                                                        <td>&#60; 0.100%</td>
                                                        <td>&#60; 0.150%</td>
                                                        <td>500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lv 1</td>
                                                        <td>&#60; 500</td>
                                                        <td>&#60; 1000</td>
                                                        <td>&#60; 0.100%</td>
                                                        <td>&#60; 0.150%</td>
                                                        <td>500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lv 1</td>
                                                        <td>&#60; 500</td>
                                                        <td>&#60; 1000</td>
                                                        <td>&#60; 0.100%</td>
                                                        <td>&#60; 0.150%</td>
                                                        <td>500</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-12">
                                    <div class="card no-shadow h-unset">
                                        <div class="card-header">
                                            <h4 class="card-title">VIP User</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>Tier</th>
                                                        <th>Total Qash holding</th>
                                                        <th>30-day Trading Volume (BTC)</th>
                                                        <th>Maker Fee</th>
                                                        <th>Taker Fee</th>
                                                        <th>24h Withdrawal Limit (BTC)</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Lv 1</td>
                                                        <td>&#60; 500</td>
                                                        <td>&#60; 1000</td>
                                                        <td>&#60; 0.100%</td>
                                                        <td>&#60; 0.150%</td>
                                                        <td>500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lv 1</td>
                                                        <td>&#60; 500</td>
                                                        <td>&#60; 1000</td>
                                                        <td>&#60; 0.100%</td>
                                                        <td>&#60; 0.150%</td>
                                                        <td>500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lv 1</td>
                                                        <td>&#60; 500</td>
                                                        <td>&#60; 1000</td>
                                                        <td>&#60; 0.100%</td>
                                                        <td>&#60; 0.150%</td>
                                                        <td>500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lv 1</td>
                                                        <td>&#60; 500</td>
                                                        <td>&#60; 1000</td>
                                                        <td>&#60; 0.100%</td>
                                                        <td>&#60; 0.150%</td>
                                                        <td>500</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


@endsection
@push('js')
@endpush
