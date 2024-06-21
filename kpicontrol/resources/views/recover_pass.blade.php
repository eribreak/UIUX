<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>KPI Control</title>
</head>

<body>
    <div id="content" class="center" style="background-image: url({{ asset('img/background.jpg') }})">
        <div class="lg-form">
            <form class="login-form">
                <h2 class="hd">Lấy lại mật khẩu</h2>
                <span class="hd-sub">Nhập email của bạn</span>
                <input type="email"  id="email" placeholder="Địa chỉ Email">
               
                <div class="button">
                    <a href="{{ route('login') }}" class="fg-pass center">Đăng nhập</a>
                    <button style="cursor: pointer" class="login-btn">Lấy mật khẩu </button>
                </div>
                <div class="or center"><span>hoặc</span></div>
                <div class="center" style="flex-direction: column;">
                    <div class="n-login center">
                        <img src="{{ asset('img/gg.svg') }}" alt="">
                        <a href="">
                            Tiếp tục với Google
                        </a>
                    </div>
                    <div class="n-login center">
                        <img src="{{ asset('img/icons8-home.svg') }}" alt="">
                        <a href="{{route('home')}}">
                            Quay lại trang chủ
                        </a>
                    </div>
                </div>
                <div class="regis">
                    <span class="center">Bạn chưa có tài khoản</span>
                    <a href="{{ route('register') }}" class="regis-button">ĐĂNG KÝ</a>
                </div>
            </form>
        </div>
       
    </div>
    
</body>

</html>
