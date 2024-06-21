<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('OwlCarousel2-2.3.4/dist/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('calendar-js-2.11.0/dist/calendar.js.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout-res.css') }}">
    <script src="{{ asset('calendar-js-2.11.0/dist/calendar.js') }}"></script>
    <title>KPI ເພື່ອນ</title>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{asset('js/layout.js')}}"></script>
    <script src="{{ asset('OwlCarousel2-2.3.4/dist/owl.carousel.js') }}"></script>
    <div id="wrapper">
        <div id="header">
            <div id="header-left">
                <div id="bar" class="center">
                    <span><i class="fa-solid fa-bars"></i></span>
                </div>
                <div id="icon-res" class="center">
                    <img src="{{ asset('img/removebg-1@2x.png') }}" alt="">
                    <span>KPI ເພື່ອນ</span>
                </div>
            </div>
            <div id="avatar-res" class="center">
                <img src="https://uythacnhapkhau.com/wp-content/uploads/2022/12/Hinh-anh-con-meo-chien-binh-1.jpg" alt="">
            </div>
        </div>
        <div class="bg-shadow"></div>
        <div id="sidebar-res">
            <div id="navbar">
                <div class="btn-close-nav">
                    <button><i class="fa-solid fa-x"></i></button>
                </div>
                <div class="nav-item {{ $page == 'home' ? 'nav-active' : '' }}">
                    <a href="{{ route('page', ['home']) }}">
                        <i class="fa-solid fa-house"></i> <span>Trang chủ</span>
                    </a>
                </div>
                <div class="nav-item {{ $page == 'add' ? 'nav-active' : '' }}">
                    <a href="{{ route('page', ['add']) }}">
                        <i class="fa-solid fa-square-plus"></i> <span>Thêm KPI</span>
                    </a>
                </div>
                <div class="nav-item {{ $page == 'manage' ? 'nav-active' : '' }}">
                    <a href="{{ route('page', ['manage']) }}">
                        <i class="fa-solid fa-list-check"></i> <span>Quản lý KPI</span>
                    </a>
                </div>
                <div class="nav-item {{ $page == 'statistical' ? 'nav-active' : '' }}">
                    <a href="{{ route('page', ['statistical']) }}">
                        <i class="fa-solid fa-chart-pie"></i> <span>Thống kê</span>
                    </a>
                </div>
                <div class="nav-item {{ $page == 'user' ? 'nav-active' : '' }}">
                    <a href="{{ route('page', ['user']) }}">
                        <i class="fa-solid fa-user-tie"></i><span>Người dùng</span>
                    </a>
                </div>
                <div class="nav-item {{ $page == 'setting' ? 'nav-active' : '' }}">
                    <a href="{{ route('page', ['setting']) }}">
                        <i class="fa-solid fa-gears"></i> <span>Cài đặt</span>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="{{route('login')}}"><i class="fa-solid fa-right-from-bracket"></i> <span>Đăng xuất</span></a>
                </div>
            </div>
            
        </div>
        <div id="sidebar">
            <div id="logo">
                <div id="logo-img">
                    <img src="{{ asset('img/removebg-1@2x.png') }}" alt="">
                </div>
                <div id="app_name">
                    <span>KPI ເພື່ອນ</span>
                </div>
            </div>
            <div id="avatar">
                <div class="img-avatar center">
                    <img src="https://uythacnhapkhau.com/wp-content/uploads/2022/12/Hinh-anh-con-meo-chien-binh-1.jpg"
                        alt="">
                </div>
                <div class="user-name">
                    <span>Mèo con</span>
                </div>
            </div>
            <div id="navbar">
                <div class="nav-item {{ $page == 'home' ? 'nav-active' : '' }}">
                    <a href="{{ route('page', ['home']) }}">
                        <i class="fa-solid fa-house"></i> <span>Trang chủ</span>
                    </a>
                </div>
                <div class="nav-item {{ $page == 'add' ? 'nav-active' : '' }}">
                    <a href="{{ route('page', ['add']) }}">
                        <i class="fa-solid fa-square-plus"></i> <span>Thêm KPI</span>
                    </a>
                </div>
                <div class="nav-item {{ $page == 'manage' ? 'nav-active' : '' }}">
                    <a href="{{ route('page', ['manage']) }}">
                        <i class="fa-solid fa-list-check"></i> <span>Quản lý KPI</span>
                    </a>
                </div>
                <div class="nav-item {{ $page == 'statistical' ? 'nav-active' : '' }}">
                    <a href="{{ route('page', ['statistical']) }}">
                        <i class="fa-solid fa-chart-pie"></i> <span>Thống kê</span>
                    </a>
                </div>
                <div class="nav-item {{ $page == 'user' ? 'nav-active' : '' }}">
                    <a href="{{ route('page', ['user']) }}">
                        <i class="fa-solid fa-user-tie"></i><span>Người dùng</span>
                    </a>
                </div>
                <div class="nav-item {{ $page == 'setting' ? 'nav-active' : '' }}">
                    <a href="{{ route('page', ['setting']) }}">
                        <i class="fa-solid fa-gears"></i> <span>Cài đặt</span>
                    </a>
                </div>
            </div>
            <div id="logout" class="center">
                <a href="{{route('login')}}"><i class="fa-solid fa-right-from-bracket"></i> <span>Đăng xuất</span></a>
            </div>
        </div>
        <div id="content">
            @yield('content')
        </div>
    </div>
</body>

</html>
