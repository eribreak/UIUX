@extends('layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/manage.css') }}">
    <link rel="stylesheet" href="{{asset('css/manage-res.css')}}">
    <div id="manage-content">
        <div id="manage-content-overview">
            <div id="manage-title">
                <h2>Quản lý KPI</h2>
            </div>
          
            <div id="kpi-overview">
                <div class="overview-item">
                    <div class="overview-icon">
                        <span><i class="fa-solid fa-globe"></i></span>
                    </div>
                    <div class="overview-content">
                        <span>30</span><br>
                        <span>Tổng KPI</span>
                    </div>
                </div>
                <div class="overview-item">
                    <div class="overview-icon">
                        <span><i class="fa-solid fa-person-running"></i></span>
                    </div>
                    <div class="overview-content">
                        <span>30</span><br>
                        <span> Đang thực hiện</span>
                    </div>
                </div>
                <div class="overview-item">
                    <div class="overview-icon">
                        <span><i class="fa-solid fa-bug"></i></span>
                    </div>
                    <div class="overview-content">
                        <span>30</span><br>
                        <span>Chưa giải quyết</span>
                    </div>
                </div>
                <div class="overview-item">
                    <div class="overview-icon">
                        <span><i class="fa-regular fa-thumbs-up"></i></span>
                    </div>
                    <div class="overview-content">
                        <span>30</span><br>
                        <span>Hoàn thành</span>
                    </div>
                </div>
            </div>
            <div id="list-kpi">
                <div class="list-kpi-title">
                    <span>Danh sách KPI</span>
                </div>
                <div id="list-kpi-content">
                    <div class="kpi-item">
                        <div class="card">
                            <div class="header">
                                <span class="title">Thi đỗ N2 T7 2024</span>
                            </div>
                            <p class="desc">Đạt điểm cao và thi đỗ N2 vào tháng 7 năm nay</p>
                            <ul class="lists">
                                <li class="list">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Học mimikara oboeru </span>
                                </li>
                                <li class="list">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>1000 từ mỗi tuần</span>
                                </li>
                                <li class="list">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>1 bài nghe mỗi ngày</span>
                                </li>
                                <li class="list">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>1 bài đọc mỗi ngày</span>
                                </li>
                            </ul>
                            <button type="button" class="action">Xem chi tiết</button>
                        </div>
                    </div>
                    <div class="kpi-item">
                        <div class="card">
                            <div class="header">
                                <span class="title">Thi đỗ N2 T7 2024</span>
                            </div>
                            <p class="desc">Đạt điểm cao và thi đỗ N2 vào tháng 7 năm nay</p>
                            <ul class="lists">
                                <li class="list">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Học mimikara oboeru </span>
                                </li>
                                <li class="list">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>1000 từ mỗi tuần</span>
                                </li>
                                <li class="list">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>1 bài nghe mỗi ngày</span>
                                </li>
                                <li class="list">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>1 bài đọc mỗi ngày</span>
                                </li>
                            </ul>
                            <button type="button" class="action">Xem chi tiết</button>
                        </div>
                    </div>
                    <div class="kpi-item">
                        <div class="card">
                            <div class="header">
                                <span class="title">Thi đỗ N2 T7 2024</span>
                            </div>
                            <p class="desc">Đạt điểm cao và thi đỗ N2 vào tháng 7 năm nay</p>
                            <ul class="lists">
                                <li class="list">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Học mimikara oboeru </span>
                                </li>
                                <li class="list">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>1000 từ mỗi tuần</span>
                                </li>
                                <li class="list">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>1 bài nghe mỗi ngày</span>
                                </li>
                                <li class="list">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>1 bài đọc mỗi ngày</span>
                                </li>
                            </ul>
                            <button type="button" class="action">Xem chi tiết</button>
                        </div>
                    </div>
                    <div class="kpi-item">
                        <div class="card">
                            <div class="header">
                                <span class="title">Thi đỗ N2 T7 2024</span>
                            </div>
                            <p class="desc">Đạt điểm cao và thi đỗ N2 vào tháng 7 năm nay</p>
                            <ul class="lists">
                                <li class="list">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Học mimikara oboeru </span>
                                </li>
                                <li class="list">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>1000 từ mỗi tuần</span>
                                </li>
                                <li class="list">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>1 bài nghe mỗi ngày</span>
                                </li>
                                <li class="list">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>1 bài đọc mỗi ngày</span>
                                </li>
                            </ul>
                            <button type="button" class="action">Xem chi tiết</button>
                        </div>
                    </div>
                    <div class="kpi-item">
                        <div class="card">
                            <div class="header">
                                <span class="title">Thi đỗ N2 T7 2024</span>
                            </div>
                            <p class="desc">Đạt điểm cao và thi đỗ N2 vào tháng 7 năm nay</p>
                            <ul class="lists">
                                <li class="list">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Học mimikara oboeru </span>
                                </li>
                                <li class="list">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>1000 từ mỗi tuần</span>
                                </li>
                                <li class="list">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>1 bài nghe mỗi ngày</span>
                                </li>
                                <li class="list">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>1 bài đọc mỗi ngày</span>
                                </li>
                            </ul>
                            <button type="button" class="action">Xem chi tiết</button>
                        </div>
                    </div>
                    <div class="kpi-item">
                        <div class="card">
                            <div class="header">
                                <span class="title">Thi đỗ N2 T7 2024</span>
                            </div>
                            <p class="desc">Đạt điểm cao và thi đỗ N2 vào tháng 7 năm nay</p>
                            <ul class="lists">
                                <li class="list">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Học mimikara oboeru </span>
                                </li>
                                <li class="list">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>1000 từ mỗi tuần</span>
                                </li>
                                <li class="list">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>1 bài nghe mỗi ngày</span>
                                </li>
                                <li class="list">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>1 bài đọc mỗi ngày</span>
                                </li>
                            </ul>
                            <button type="button" class="action">Xem chi tiết</button>
                        </div>
                    </div>

                </div>

            </div>
            <div id="navigate">
                <div class="paginate">
                    <div class="pre move"><a href=""><i class="fa-solid fa-angle-left"></i>
                            <span>Previous</span></a></div>
                    <div class="page page-active"><a href="">1</a></div>
                    <div class="page"><a href="">2</a></div>
                    <div class="page"><a href="">3</a></div>
                    <div class="page"><a href="">4</a></div>
                    <div class="next move"><a href=""><span>Next</span> <i
                                class="fa-solid fa-angle-right"></i></a></div>
                </div>
            </div>
        </div>
        @include('manage-detail')
    </div>
    <script src="{{ asset('js/manage.js') }}"></script>
@endsection
