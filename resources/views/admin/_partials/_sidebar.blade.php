<!-- Page Sidebar Start-->
<div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
        <div class="logo-wrapper">
            <a href="{{route('admin.bc_dashboard')}}">
                <img class="d-none d-lg-block blur-up lazyloaded"
                     src="{{asset('front/images/logo.png')}}" alt="">
            </a>
        </div>
    </div>
    <div class="sidebar custom-scrollbar">
        <a href="javascript:void(0)" class="sidebar-back d-lg-none d-block"><i class="fa fa-times"
                                                                               aria-hidden="true"></i></a>
        <div class="sidebar-user">
            @if(is_null(auth()->user()->photo))
                <img src="{{asset('front/images/admin.jpg')}}" alt="avatar" class="img-60">
            @else
                <img src="{{ asset("storage/".auth()->user()->photo) }}" alt="avatar" class="img-60">

            @endif
            <div>
                <h6 class="f-14">{{auth()->user()->first_name}}</h6>
                <p></p>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a class="sidebar-header" href="{{route('admin.bc_dashboard')}}">
                    <i data-feather="home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a class="sidebar-header" href="{{route('admin.bc_countries')}}">
                    <i data-feather="globe"></i>
                    <span>Countries</span>
                </a>
            </li>
            <li>
                <a class="sidebar-header" href="{{route('admin.bc_countries')}}">
                    <i data-feather="trade"></i>
                    <span>All Trades</span>
                </a>
            </li>
            <li>
                <a class="sidebar-header" href="{{route('admin.bc_countries')}}">
                    <i data-feather="user"></i>
                    <span>Users</span>
                </a>
            </li>
            <li>
                <a class="sidebar-header" href="{{route('auth.sign_out')}}">
                    <i data-feather="log-in"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- Page Sidebar Ends-->
