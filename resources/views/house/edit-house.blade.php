@extends('master')
@section('content')
    <div id="titlebar" class="submit-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="submit-page">
                            <form action="{{ route('properties.update') }}" method="post"  enctype="multipart/form-data">
                            @csrf
                                <h3> Sửa </h3>
                                <div class="submit-section">
                                    <input type="hidden" name="id" value="{{$house->id}}">
                                    <div class="form">
                                        <h5>Tên nhà <i class="tip" data-tip-content="Tên bài đăng thể hiện khái quát ngôi nhà của bạn"></i></h5>
                                        <input class="search-field" name="name" type="text" value="{{$house->name}}"/>
                                    </div>
                                    <div class="row with-forms">
                                        <div class="col-md-4">
                                            <h5>Trạng thái thuê</h5>
                                            <select name="status" class="chosen-select-no-single">
                                                <option value="{{ \App\Http\Controllers\StatusConst::LEASE }}">Cho thuê</option>
                                                <option value="{{ \App\Http\Controllers\StatusConst::UN_LEASE }}">Không cho thuê
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <h5>Diện tích nhà </h5>
                                                <input type="text" name="area" value=" {{$house->area}}">
                                        </div>
                                        <div class="col-md-4">
                                            <h5>Loại nhà</h5>
                                            <select name="category_id" class="chosen-select-no-single">
                                                @foreach($categories as $category)
                                                    <option @if($house ->category_id == $category->id) selected
                                                            @endif
                                                            value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row with-forms">
                                        <div class="col-md-4">
                                            <h5>Giá thuê/ngày <i class="tip" data-tip-content="Hãy đưa ra một mức giá hợp lí, sau đó có thể thỏa thuận lại với người thuê sau"></i></h5>
                                            <div class="select-input disabled-first-option">
                                                <input name="pricePerDay" type="text" data-unit="VNĐ" value="{{$house->pricePerDay}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <h5>Số phòng ngủ</h5>
                                            <select name="numberOfBedroom" class="chosen-select-no-single">
                                                <option>{{$house->numberOfBedroom}}</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <h5>Số phòng tắm</h5>
                                            <select name="numberOfBathroom" class="chosen-select-no-single">
                                                <option>{{$house->numberOfBathroom}}</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <h3>Vị trí</h3>
                                <div class="row with-forms">
                                    <div class="col-md-12">
                                        <h5>Địa chỉ</h5>
                                        <input name="address" type="text" value="{{$house->address}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả chung </label>
                                    <label for=""></label>
                                    <textarea class="form-control" name="desc" cols="30"
                                              rows="10">{{$house->desc}}</textarea>
                                </div>
                                <h3>Hình ảnh</h3>
                                <div class="row with-forms">
                                    <div class="col-md-12">
                                        <input name="file" type="file"  id="image_thumbnail" value="{{$house->image}}">
                                    </div>
                                    <div class="col-md-3">
                                        @foreach ($house->images as $img)
                                                <img src="{{ asset('storage/' . $img->image) }}" alt="">
                                        @endforeach
                                    </div>
                                    <div class="col-md-12">
                                        <a id="new_image" class="button" style="float: right">Thêm ảnh</a>
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button type="submit" class="button preview margin-top-5">Sửa<i
                                            class="fa fa-arrow-circle-right"></i></button>
                                    <button class="button border fw margin-top-10"
                                            onclick="window.history.go(-1); return false">Quay lại
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
