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
        <div class="lg-form" style="height: auto;">
            <form class="login-form" wire:submit.prevent='store' action="">
                <h2 class="hd">Đăng ký</h2>
                <span class="hd-sub">Đăng ký với Email</span>
                <input type="text" wire:model='name' id="name" placeholder="Tên của bạn">
                
                <input type="email" wire:model='email' id="email" placeholder="Email tài khoản">
              
                <input type="password" wire:model='password' id="password" placeholder="Mật khẩu">
               
                <input type="password" wire:model='re_password' id="re_password" placeholder="Nhập lại mật khẩu">
               
                <div class="button">
                    <div class="c-box">
                        <a class="center fg-pass" href="{{route('login')}}">
                            Đăng nhập
                        </a>
                    </div>
                    <button class="login-btn" style="cursor: pointer">Tạo tài khoản</button>
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
                <div class="acp">
                    <span>Bằng việc tạo tài khoản bạn đã đồng ý với <a href="">Thỏa thuận người dùng</a> và <a
                            href="">Chính sách bảo mật</a> của KPI Tracker</span>
                </div>
            </form>
        </div>
    </div>
    
</body>

</html>
