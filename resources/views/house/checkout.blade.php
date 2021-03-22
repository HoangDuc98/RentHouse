@extends('master')
@section('content')
    <div class="container">
        <h3 class="margin-top-30">Xác nhận thuê nhà</h3>
        <div class="submit-section">
            <form action="{{route('houses.confirmPost')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <h4>{{$house->name}}</h4>
                        <div class="panel-dropdown time-slots-dropdown">
                            <label for="">Ngày đặt phòng</label>
                            <input class="form-control" type="date" name="checkIn" value="{{$first}}">
                            <label for="">Ngày trả phòng</label>
                            <input class="form-control" type="date" name="checkOut" value="{{$last}}">
                            <span>Đơn giá: </span> {{number_format($house->pricePerDay)}} VND
                            <br>
                            <span>Tổng tiền: </span>{{number_format($total)}} VND
                        </div>
                    </div>
                    <div class="col-lg-12 margin-top-10">
                        <div class="col">
                            <span class="font-weight-bold">Tên người thuê: </span>{{$user->name}}
                        </div>
                        <div class="col">
                            <span class="font-weight-bold">Số điện thoại: </span>{{$user->phone}}
                        </div>
                        <div class="col">
                            <span class="font-weight-bold">Email: </span>{{$user->email}}
                        </div>
                        <input type="hidden" name="total" value="{{$total}}">
                        <input type="hidden" name="house_id" value="{{$house->id}}">
                        <input type="hidden" name="user_id" value="{{$house->user_id}}">
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
