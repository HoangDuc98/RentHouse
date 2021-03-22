@extends('master')
@section('content')
    <div id="titlebar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Thông tin cá nhân</h2>
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="{{route('home')}}">Trang chủ</a></li>
                            <li>Thông tin cá nhân</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="sidebar left">
                    <div class="my-account-nav-container">
                        <ul class="my-account-nav">
                            <li class="sub-nav-title">Quản lý tài khoản</li>
                            <li><a href="{{route('me.profile')}}" class="current"><i class="sl sl-icon-user"></i> Thông tin cá nhân</a></li>
                            <li><a href="my-bookmarks.html"><i class="sl sl-icon-star"></i> Danh sách nhà đã được thuê</a></li>
                        </ul>
                        <ul class="my-account-nav">
                            <li class="sub-nav-title">Quản lý danh sách</li>
                            <li><a href="{{route('me.getListHouseOfUser')}}"><i class="sl sl-icon-docs"></i> Những ngôi nhà của tôi</a></li>
                        </ul>
                        <ul class="my-account-nav">
                            <li><a href="{{route('changePassword')}}"><i class="sl sl-icon-lock"></i> Đổi mật khẩu</a></li>
                            <li><a href="{{ route('logout') }}"><i class="sl sl-icon-power"></i> Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <form action="{{route('profile.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-8 my-profile">
                            <h4 class="margin-top-0 margin-bottom-30">Thông tin cá nhân</h4>
                            <label>Name</label>
                            <input value="{{$user->name}}" name="name" type="text">
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <label>Email</label>
                            <input disabled value="{{$user->email}}" type="text">
                            <label>Phone</label>
                            <input value="{{$user->phone}}" name="phone" type="text">
                            <label>Address</label>
                            <input value="{{$user->address}}" name="address" type="text">
                            <button class="button margin-top-20 margin-bottom-20" type="submit">Lưu thông tin </button>
                        </div>
                        <div class="col-md-4">
                            <div class="edit-profile-photo">
                                <img src="{{asset('storage/' . $user->image)}}" alt="">
                                <div class="change-photo-btn">
                                    <div class="photoUpload">
                                        <span><i class="fa fa-upload"></i> Tải ảnh lên</span>
                                        <div>
                                            <input type="file" class="upload" name="image"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
