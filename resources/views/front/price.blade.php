@extends('front.layout')
@section('content')
    <div class="row">
        @foreach($cryptos as $crypto)
        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
            <div class="price-widget" style="background-color: {!! $crypto->color !!}">
                <a href="{!! route('back.price_detail',['id'=>$crypto->id]) !!}">
                    <div class="price-content">
                        <div class="icon-title">
                            <i class="cc {!! $crypto->symbol !!}-alt"></i>
                            <span>{!! $crypto->name !!}</span>
                        </div>
                        <h5>$ {!! $crypto->price !!}</h5>
                    </div>
                    <div id="chart{!! $crypto->id !!}"></div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
@endsection
@push('js')
    <script src="{!! asset("front/vendor/apexchart/apexcharts.min.js") !!}"></script>
    <script src="{!! asset("front/js/plugins/apex-price.js") !!}"></script>
@endpush
