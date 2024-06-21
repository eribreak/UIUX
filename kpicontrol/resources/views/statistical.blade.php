@extends('layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/statistical.css') }}">
    <link rel="stylesheet" href="{{asset('css/statistical-res.css')}}">
    <div id="statistical-content">
        <div id="statistical-overview">
            <div id="statistical-title" class="center">
                <span>Thống kê</span>
            </div>
            <div id="select-time">
                <label for="">Chọn thời gian:</label>
                <input type="date" value="2024-12-20">
            </div>
            <div id="statistical-chart" class="center">
                <div class="chart-content">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <div id="list-kpi-statistical">
                <div id="list-kpi-statistical-title">
                    <span>Danh sách KPI</span>
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
                                <span>Chuẩn bị bài tập lớn</span>
                            </div>
                            <div class="bot-content-kpi">
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
                </div>
            </div>
        </div>
        @include('statistical-detail')
    </div>
    <script src="{{ asset('js/statistical.js') }}"></script>
@endsection
