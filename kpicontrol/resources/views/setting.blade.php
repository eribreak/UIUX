@extends('layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/setting.css') }}">
    <link rel="stylesheet" href="{{asset('css/setting-res.css')}}">
    <div id="setting-content">
        <div id="setting-content-overview">
            <div id="setting-content-title" class="center">
                <span>Cài đặt chung</span>
            </div>
            <div id="setting-content-detail">
                <div class="setting-content-item" data-setting="security">
                    <span><i class="fa-solid fa-shield-halved"></i></span>
                    <span>BẢO MẬT</span>
                    <span>Cập nhập mật khẩu và bảo vệ tài khoản</span>
                </div>
                <div class="setting-content-item" data-setting="general-setting">
                    <span><i class="fa-solid fa-sliders"></i></span>
                    <span>TÙY CHỌN CHUNG</span>
                    <span>Đặt ngôn ngữ, múi giờ mặc định.</span>
                </div>
                <div class="setting-content-item" data-setting="notice">
                    <span><i class="fa-solid fa-volume-low"></i></span>
                    <span>THÔNG BÁO</span>
                    <span>Chọn tùy chỉnh thông báo.</span>
                </div>
                <div class="setting-content-item" data-setting="support">
                    <span><i class="fa-solid fa-file-circle-question"></i></span>
                    <span>HỖ TRỢ</span>
                    <span>Giải đáp các thắc mắc khi sử dụng ứng dụng.</span>
                </div>
            </div>
        </div>
        @include('notice')
        @include('support')
        @include('security')
        @include('general-setting')
    </div>



    <script src="{{ asset('js/setting.js') }}"></script>
@endsection
