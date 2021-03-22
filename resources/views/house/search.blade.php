@extends('master')
@section('content')
    <section class="search margin-bottom-50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="search-title">Tìm kiếm</h3>
                    <div class="main-search-box no-shadow">
                        <form action="{{ route('houses.search') }}" method="GET">
                            @csrf
                            <div class="row with-forms">
                                <div class="col-md-3">
                                    <label>Trạng thái</label>
                                    <select name="tab" class="chosen-select-no-single">
                                        <option value="1" {{ (request()->tab == 1) ? 'selected' : '' }}>Cho thuê
                                        </option>
                                        <option value="2" {{ (request()->tab == 2) ? 'selected' : '' }}>Không cho thuê
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label>Loại nhà</label>
                                    <select name="tab" class="chosen-select-no-single">
                                        <option value="1" {{ (request()->category_id == 1) ? 'selected' : '' }}>Chung cư</option>
                                        <option value="2" {{ (request()->category_id == 2) ? 'selected' : '' }}>Nhà đất</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>Thành phố </label>
                                    <div class="input-address">
                                        <input type="text" name="keyword" placeholder="Thành Phố" value="{{ request()->get('keyword') }}"/>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label>Từ khóa</label>
                                    <div class="input-address">
                                        <button type="submit" class="button">Tìm Kiếm</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row fullwidth-layout">
            <div class="col-md-12">
                <div class="row margin-bottom-15">
                    <div class="col-md-6"><div class="sort-by">
                            <label>Sắp xếp theo:</label>
                            <div class="sort-by-select">
                                <select data-placeholder="Default order" class="chosen-select-no-single">
                                    <option>Đơn hàng mặc định</option>
                                    <option>Giá từ thấp đến cao</option>
                                    <option>Giá từ cao đến thấp</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="layout-switcher">
                            <a href="#" class="list"><i class="fa fa-th-list"></i></a>
                            <a href="#" class="grid"><i class="fa fa-th-large"></i></a>
                            <a href="#" class="grid-three"><i class="fa fa-th"></i></a>
                        </div>
                    </div>
                </div>
                <div class="listings-container list-layout">
                    @forelse($houses as $house)
                        <div class="listing-item">
                            <a href="" class="listing-img-container">
                                <div class="listing-badges">
                                    <span class="featured">{{$house->getCategory()}} </span>
                                    <span>{{ $house->getStatus() }}</span>
                                </div>
                                <div class="listing-img-content">
                                <span class="listing-price">{{ number_format($house->pricePerDay) }} VND
                                </span>
                                    <span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
                                    <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                                </div>
                                <div>
                                    <img src=" {{ ($house->image) ? asset('storage/' . $house->image) : asset('images/blog-post-01.jpg')}}" alt="">
                                </div>
                            </a>
                            <div class="listing-content">
                                <div class="listing-title">
                                    <h4><a href="">{{ $house->name }}</a></h4>
                                    <a href=""
                                       class="listing-address popup-gmaps">
                                        <i class="fa fa-map-marker"></i>
                                        {{ $house->address}}
                                    </a><a href="" class="details button border">Xem chi tiết</a>
                                </div>
                                <ul class="listing-details">
                                    <li>{{$house->area}} m<sup>2</sup></li>
                                    <li>{{$house->numberOfBedroom}} Phòng ngủ</li>
                                    <li>{{$house->numberOfBathroom}} Phòng tắm</li>
                                </ul>
                                <div class="listing-footer">
                                    <a href="#"><i class="fa fa-user"></i> {{ $house->user->name }}</a>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection
