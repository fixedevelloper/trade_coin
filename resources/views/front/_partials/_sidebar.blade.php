<div class="sidebar">
    <div class="brand-logo">
        <a href="{!! route('back.dashboard') !!}"><img src="./images/logo.png" alt="" /> </a>
    </div>
    <div class="menu">
        <ul>
            <li class="{{request()->routeIs('back.dashboard')?'active':''}}">
                <a
                    href="{!! route('back.dashboard') !!}"
                    data-toggle="tooltip"
                    data-placement="right"
                    title="Home"
                >
                    <span><i class="icofont-ui-home"></i></span>
                </a>
            </li>
            <li class="{{request()->routeIs('back.trade')?'active':''}}">
                <a
                    href="{!! route('back.trade') !!}"
                    data-toggle="tooltip"
                    data-placement="right"
                    title="Trade"
                >
                    <span><i class="icofont-stack-exchange"></i></span>
                </a>
            </li>
            <li class="{{request()->routeIs('back.wallet')?'active':''}}">
                <a
                    href="{!! route('back.wallet') !!}"
                    data-toggle="tooltip"
                    data-placement="right"
                    title="Wallet"
                >
                    <span><i class="icofont-wallet"></i></span>
                </a>
            </li>
            <li class="{{request()->routeIs('back.price')?'active':''}}">
                <a
                    href="{!! route('back.price') !!}"
                    data-toggle="tooltip"
                    data-placement="right"
                    title="Price"
                >
                    <span><i class="icofont-price"></i></span>
                </a>
            </li>
            <li class="{{request()->routeIs('back.setting-profil')?'active':''}}">
                <a
                    href="{!! route('back.setting-profil') !!}"
                    data-toggle="tooltip"
                    data-placement="right"
                    title="Settings"
                >
                    <span><i class="icofont-settings"></i></span>
                </a>
            </li>
            <li class="logout">
                <a
                    href="{!! route('back.dashboard') !!}"
                    data-toggle="tooltip"
                    data-placement="right"
                    title="Signout"
                >
                    <span><i class="icofont-power"></i></span>
                </a>
            </li>
        </ul>

        <p class="copyright">&#169; <a href="#">Agensic Solution</a></p>
    </div>
</div>
