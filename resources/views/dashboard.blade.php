@extends('master')
@section('content')
    <div class="clearfix"></div>
    <div class="parallax" data-background="{{asset('images/house1.jpg')}}" data-color="#36383e"
         data-color-opacity="0.45" data-img-width="2500" data-img-height="1600">
        <div class="parallax-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-search-container">
                            <h2>Tìm ngôi nhà mơ ước của bạn</h2>
                            <form class="main-search-form" method="get" action="{{ route('houses.search') }}">
                            @csrf
                                <div class="search-type">
                                    <label class="active"><input class="first-tab" name="tab" checked="checked" type="radio" value="0">Tìm kiếm</label>
                                </div>
                                <div class="main-search-box">
                                    <div class="main-search-input larger-input">
                                        <input type="text" name="keyword" class="ico-01" value="{{ request()->get('keyword') }}"/>
                                        <button type="submit" class="button">Search</button>
                                    </div>
                                </div>
                                <div class="select-input">
                                    <input type="text" placeholder="Max Price" data-unit="VND">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="headline margin-bottom-25 margin-top-65">Danh sách nhà cho thuê</h3>
            </div>
            <div class="col-md-12">
                <div class="carousel">
                @foreach($houses as $house)
                        <div class="carousel-item">
                            <div class="listing-item">
                                <a href="{{route('houses.showDetail', $house->id)}}" class="listing-img-container">
                                    <div class="listing-img-content">
                                        <span class="listing-price">{{ number_format($house->pricePerDay) }} / ngày</span>
                                        <span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
                                        <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                                    </div>
                                    <div class="listing-carousel">
                                        <div>
                                            <img src=" {{ ($house->image) ? asset('storage/' . $house->image) : asset('images/blog-post-01.jpg')}}" alt=""></div>
                                        @foreach($house->images as $img)
                                            <div><img src="{{asset('/' . $img->image)}}" alt=""></div>
                                        @endforeach
                                    </div>
                                </a>
                                <div class="listing-content">
                                    <div class="listing-title">
                                        <h4>
                                            <a href="{{ route('houses.showDetail', $house->id) }}">{{ Str::limit($house->name, 20) }}</a>
                                        </h4>
                                        <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps"><i class="fa fa-map-marker"></i>{{ $house->address }}</a>
                                    </div>
                                    <ul class="listing-features">
                                        <li> Diện tích <span>{{$house->area}} m<sup>2</sup></span></li>
                                        <li>Phòng ngủ <span>{{ $house->numberOfBedroom }}</span></li>
                                        <li>Phòng tắm <span>{{ $house->numberOfBathroom }}</span></li>
                                    </ul>
                                    <div class="listing-footer">
                                        <a href="#"><i class="fa fa-user"></i> {{ $house->user->name }}</a>
                                        <span><i class="fa fa-calendar-o"></i> {{ $house->created_at->diffForHumans() }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection


