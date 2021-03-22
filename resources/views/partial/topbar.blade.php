<div id="top-bar">
    <div class="container">
        <div class="left-side">
            <ul class="top-bar-menu">
                <li>
                    <div class="top-bar-dropdown">
                        <span>Tùy chọn</span>
                        <ul class="options">
                            <li><div class="arrow"></div></li>
                            <li><a href="#">Đăng nhập</a></li>
                            <li><a href="#">Đăng ký</a></li>
                            <li><a href="#">Đổi mật khẩu</a></li>
                            <li><a href="#">Cập nhật thông tin tài khoản</a></li>
                        </ul>
                    </div>
                </li>
            @if(empty( \Illuminate\Support\Facades\Auth::user()->phone))
                @else
                    <li>
                        <i class="fa fa-phone"></i>{{ \Illuminate\Support\Facades\Auth::user()->phone }}
                    </li>
                @endif
                @if(empty( \Illuminate\Support\Facades\Auth::user()->email))
                @else
                    <li>
                        <i class="im-icon-Voicemail"></i>{{ \Illuminate\Support\Facades\Auth::user()->email }}
                    </li>
                @endif
            </ul>
        </div>
        <div class="right-side">
            <ul class="social-icons">
                <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                <li><a class="pinterest" href="#"><i class="icon-pinterest"></i></a></li>
            </ul>
        </div>
    </div>
</div>
