@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="submit-page">
                    <h2><i class="fa fa-plus-circle"></i> Đăng nhà cho thuê</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="submit-page">
                                <div class="notification notice large margin-bottom-55">
                                    <h4>Bạn có nhà muốn cho thuê?</h4>
                                    <p>Vui lòng điền đầy đủ thông tin về ngôi nhà của bạn để mọi người có được thông tin cần thiết</p>
                                </div>
                                <form action="{{ route('house.addhouse') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <h3>Thông tin nhà</h3>
                                    <div class="submit-section">
                                        <div class="form">
                                            <h5>Tên bài đăng <i class="tip" data-tip-content="Tên bài đăng thể hiện khái quát ngôi nhà của bạn"></i></h5>
                                            <input class="search-field" name="name" type="text" value=""/>
                                            @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="row with-forms">
                                            <div class="col-md-4">
                                                <h5>Trạng thái thuê</h5>
                                                <select name="status" class="chosen-select-no-single">
                                                    <option value="{{ \App\Http\Controllers\StatusConst::LEASE }}">Cho thuê</option>
                                                    <option value="{{ \App\Http\Controllers\StatusConst::UN_LEASE }}">Không cho thuê</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <h5>Loại nhà</h5>
                                                <select name="category_id" class="chosen-select-no-single">
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <h5>Diện tích nhà</h5>
                                                <input type="text" name="area">
                                            </div>
                                        </div>
                                        <div class="row with-forms">
                                            <div class="col-md-4">
                                                <h5>Giá thuê/ngày <i class="tip" data-tip-content="Hãy đưa ra một mức giá hợp lí, sau đó có thể thỏa thuận lại với người thuê sau"></i></h5>
                                                <div class="select-input disabled-first-option">
                                                    <input name="pricePerDay" type="text" data-unit="VNĐ">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <h5>Số phòng ngủ</h5>
                                                <select name="numberOfBedroom" class="chosen-select-no-single">
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
                                            <input name="address" type="text">
                                            @error('address')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả chung </label>
                                        <label for=""></label>
                                        <textarea class="form-control" name="desc" cols="30" rows="10"></textarea>
                                    </div>
                                    <h3>Hình ảnh</h3>
                                    <div>
                                        <div class="col-md-12">
                                            <input name="image" type="file" id="image_thumbnail">
                                        </div>
                                        <div class="col-md-12">
                                            <a id="new_image" class="button" style="float: right">Thêm ảnh</a>
                                        </div>
                                    </div>
                                    <div class="submit-section">
                                        <button type="submit" class="button preview margin-top-5">Đăng
                                            <i class="fa fa-arrow-circle-right"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

