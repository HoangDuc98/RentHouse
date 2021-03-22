@extends('master')
@section('content')
    <div class="box-background-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="boxIn-background-1">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">Tên phòng thuê</th>
                                    <th scope="col">Chủ nhà</th>
                                    <th scope="col">SĐT chủ nhà</th>
                                    <th scope="col">Ngày đặt phòng</th>
                                    <th scope="col">Ngày trả phòng</th>
                                    <th scope="col">Tổng giá tiền</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($houses as $house)
                                    <tr>
                                        <td scope="col">{{ $house->house_name }}</td>
                                        <td scope="col">{{ $house->name }}</td>
                                        <td scope="col">{{ $house->phone }}</td>
                                        <td scope="col">{{ $house->checkIn }}</td>
                                        <td scope="col">{{ $house->checkOut }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">Bạn chưa thuê nhà nào!</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
