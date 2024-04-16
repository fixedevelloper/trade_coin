<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{!! config('app.name') !!} - @yield('title')</title>
    <!-- Favicon icon -->
    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="./images/favicon.png"
    />
    <!-- Custom Stylesheet -->

    <link rel="stylesheet" href="{!! asset('front/css/style.css') !!}" />
    <link rel="stylesheet" href="{!! asset('front/css/custom.css') !!}" />
</head>

<body>
<div id="preloader"><i>.</i><i>.</i><i>.</i></div>

<div id="main-wrapper">
   @include('front._partials._hearder')

    @include('front._partials._sidebar')

    <div class="content-body">
        <div class="container">
            @yield('content')
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
<script src="{!! asset('front/js/jquery.modal.min.js') !!}"></script>
@stack("js")
<script src="{!! asset('front/js/scripts.js') !!}"></script>
<script>
    jQuery('.call-modal').on('click', function(event) {
        event.preventDefault();
        this.blur();
        jQuery.get(this.href, function(html) {
            jQuery(html).appendTo('body').modal({
                fadeDuration: 300,
                fadeDelay: 0.15
            });
        });
        return false;
    });
    var configs={
        routes:{
            index: "{{\Illuminate\Support\Facades\URL::to('/')}}",
            crypto_buy: "{{\Illuminate\Support\Facades\URL::route('back.crypto_buy')}}",
            crypto_sell: "{{\Illuminate\Support\Facades\URL::route('back.crypto_sell')}}",
            sell_modal: "{{\Illuminate\Support\Facades\URL::route('back.sell_modal')}}",
            buy_modal: "{{\Illuminate\Support\Facades\URL::route('back.buy_modal')}}",
        }
    }
    $(function () {
        $('#link_sell').attr('disabled',true)
        $('#link_buy').attr('disabled',true)
        $('#select_buy').change(function () {
            $('#link_buy').attr('disabled',false)
            var url=configs.routes.buy_modal
            var id=$(this).val()
            var amount=$('#input_buy').val()
            $.ajax({
                url: configs.routes.crypto_buy,
                type: "GET",
                dataType: "JSON",
                data: {
                    'id':$(this).val(),
                    'amount':$('#input_buy').val(),
                },
                success: function (data) {
                  $('#currency_buy').val(data.data.qte)
                    $('#taux').text("1FCFA ~ "+data.data.taux+" "+data.data.crypto)
                    url=url+"?id="+id+"&amount="+amount+"&quantity="+data.data.qte;

                    var a=$('#link_buy').attr('href',url)
                },
                error: function (err) {
                    alert("An error ocurred while loading data ...");
                }
            })
        })
        $('#select_sell').change(function () {
            var url=configs.routes.sell_modal
            var id=$(this).val()
            var quantity=$('#input_sell').val()
            $.ajax({
                url: configs.routes.crypto_sell,
                type: "GET",
                dataType: "JSON",
                data: {
                    'id':$(this).val(),
                    'quantity':$('#input_sell').val(),
                },
                success: function (data) {
                    $('#currency_sell').val(data.data.amount)
                    $('#taux').text("1FCFA ~ "+data.data.taux+" "+data.data.crypto)
                    url=url+"?id="+id+"&quantity="+quantity+"&currency_sell="+data.data.amount;

                    var a=$('#link_sell').attr('href',url)
                },
                error: function (err) {
                    alert("An error ocurred while loading data ...");
                }
            })
        })
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
    })
</script>
<script>
    $('#currency_sell').change(function () {
        $('#currency_receive').val($(this).val())
    })
</script>
</body>
</html>
