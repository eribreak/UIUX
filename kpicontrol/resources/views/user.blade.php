@extends('layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user-res.css') }}">
    <div id="user-content">
        <div id="user-content-title" class="center">
            <span>Thông tin người dùng</span>
        </div>
        <form id="user-content-detail">
            <div class="group-img-input center">
                <div class="group-img-input-content">
                    <img src="https://uythacnhapkhau.com/wp-content/uploads/2022/12/Hinh-anh-con-meo-chien-binh-1.jpg"
                        alt="">
                    <div class="bg-label center">
                        <label for="upload-file"><i class="fa-solid fa-camera"></i></label>

                    </div>
                    <input type="file" id="upload-file">
                </div>
            </div>
            <div class="group-input">
                <label for="">Họ và tên</label>
                <input type="text" value="Nguyễn Anh Vinh">
            </div>
            <div class="group-input">
                <label for="">Thông tin liên hệ</label>
                <input type="text" value="vinhtuan@gmail.com" disabled>
            </div>
            <div class="group-input">
                <label for="">Địa chỉ</label>
                <input type="text" value="Trại cá">
            </div>
            <div class="group-input">
                <label for="">SĐT</label>
                <input type="text" value="0123456789">
            </div>
            <div class="group-btn center">
                <button>Cập nhật</button>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/user.js') }}"></script>
@endsection
