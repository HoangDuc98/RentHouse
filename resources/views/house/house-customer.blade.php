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
                                    <th scope="col">Tên phòng cho thuê</th>
                                    <th scope="col">Người thuê</th>
                                    <th scope="col">Ngày đặt phòng</th>
                                    <th scope="col">Ngày trả phòng</th>
                                    <th scope="col">Tổng giá tiền</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($results as $result)
                                    <tr>
                                        <td scope="col">{{ $result->name }}</td>
                                        <td scope="col">{{ $result->user_rent }}</td>

                                        <td scope="col">{{ \Carbon\Carbon::parse($result->checkIn)->format('d/m/Y')}}</td>
                                        <td scope="col">{{ \Carbon\Carbon::parse($result->checkOut)->format('d/m/Y')}}</td>
                                        <td scope="col"><b>{{ number_format($result->totalPrice,0,",",".") }}</b> VNĐ
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
