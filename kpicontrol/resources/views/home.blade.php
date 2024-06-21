@extends('layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{asset('css/home-res.css')}}">
    <div id="home-content">
        <div id="left-content">
            <div id="welcome">
                <div id="welcome-text">
                    <span>Chào mừng trở lại,</span><br>
                    <span>Mèo con</span>
                </div>
                <div id="img-welcome">
                    <img src="{{ asset('img/group-193@2x.png') }}" alt="">
                </div>
            </div>
            <div class="list-kpi-day">
                <div class="owl-carousel">
                    <div class="kpi-day-item">
                        <div class="kpi-name center">
                            <span>Ăn ngủ</span>
                        </div>
                        <div class="num-quest center">
                            <span>15 nhiệm vụ | 20%</span>
                        </div>
                        <div class="progess-bar">

                        </div>
                        <div class="deadline center">
                            <span class="start">14/04/2024 - 06/05/2024</span>
                        </div>
                    </div>
                    <div class="kpi-day-item">
                        <div class="kpi-name center">
                            <span>Báo cáo đồ án</span>
                        </div>
                        <div class="num-quest center">
                            <span>15 nhiệm vụ | 20%</span>
                        </div>
                        <div class="progess-bar">

                        </div>
                        <div class="deadline center">
                            <span class="start">14/04/2024 - 06/05/2024</span>
                        </div>
                    </div>
                    <div class="kpi-day-item">
                        <div class="kpi-name center">
                            <span>Luyện tiếng Nhật hàng ngày</span>
                        </div>
                        <div class="num-quest center">
                            <span>15 nhiệm vụ | 20%</span>
                        </div>
                        <div class="progess-bar">

                        </div>
                        <div class="deadline center">
                            <span class="start">14/04/2024 - 06/05/2024</span>
                        </div>
                    </div>
                    <div class="kpi-day-item">
                        <div class="kpi-name center">
                            <span>Đi chơi với bạn</span>
                        </div>
                        <div class="num-quest center">
                            <span>15 nhiệm vụ | 20%</span>
                        </div>
                        <div class="progess-bar">

                        </div>
                        <div class="deadline center">
                            <span class="start">14/04/2024 - 06/05/2024</span>
                        </div>
                    </div>
                    <div class="kpi-day-item">
                        <div class="kpi-name center">
                            <span>Đi chơi </span>
                        </div>
                        <div class="num-quest center">
                            <span>15 nhiệm vụ | 20%</span>
                        </div>
                        <div class="progess-bar">

                        </div>
                        <div class="deadline center">
                            <span class="start">14/04/2024 - 06/05/2024</span>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div id="calendar-day">
                <h2>Lịch của tôi</h2>
                <div id="calendar-content">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
        <div id="right-content">
            <div id="day-work">
                <div class="day-work-title">
                    Công việc hôm nay
                </div>
                <div class="day-work-item">
                    <span>07:00</span><br>
                    <span>Học tiếng Nhật bài 05</span>
                </div>
                <div class="day-work-item">
                    <span>07:00</span><br>
                    <span>Học tiếng Nhật bài 05</span>
                </div>
                <div class="day-work-item">
                    <span>07:00</span><br>
                    <span>Học tiếng Nhật bài 05</span>
                </div>
                <div class="day-work-item">
                    <span>07:00</span><br>
                    <span>Học tiếng Nhật bài 05</span>
                </div>
                <div class="day-work-item">
                    <span>07:00</span><br>
                    <span>Học tiếng Nhật bài 05</span>
                </div>
                <div class="day-work-item">
                    <span>07:00</span><br>
                    <span>Học tiếng Nhật bài 05</span>
                </div>
                <div class="day-work-item">
                    <span>07:00</span><br>
                    <span>Học tiếng Nhật bài 05</span>
                </div>
                <div class="day-work-item">
                    <span>07:00</span><br>
                    <span>Học tiếng Nhật bài 05</span>
                </div>
           
            </div>
        </div>
    </div>
    <script src="{{ asset('js/home.js') }}"></script>
@endsection
