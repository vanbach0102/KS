@extends('home')
@section('room_content')
<link rel="stylesheet" href="/home-assets/sogo-master/css-booking/style.css">
<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                    <form action="/save-dat-phong" method="post">
                        @csrf
                        <div class="form-group">
                            @foreach ($Phongs as $key => $value)
                            <span class="form-label">Mã Phòng</span>
                            <input class="form-control" type="hidden" name="maPhong" value="{{$value->maPhong}}">
                            @endforeach
                        </div>
                        <div class="row no-margin">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="form-label">Check In</span>
                                    <input class="form-control" type="date" required name="checkIn">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="form-label">Check Out</span>
                                    <input class="form-control" type="date" required name="checkOut">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="form-label">Số lượng</span>
                            <input class="form-control" type="text" placeholder="Nhập số lượng người" name="soLuong">
                        </div>
                        <div class="form-group">
                            <span class="form-label">Tiền cọc</span>
                            <input class="form-control" type="number" placeholder="Nhập số tiền" name="tienCoc">
                        </div>

                        <div class="form-btn">
                            <button type="submit" class="btn btn-dark">Lưu</button>
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </div>
</div>

@endsection
