@extends('home')
@section('room_content')
<link rel="stylesheet" href="/home-assets/sogo-master/css-booking/style.css">
<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                    @php
                    $message = Session::get('message');
                        if('message'){
                            echo'<span class="text-alert" style="color: #28c76f;font-size: 15px;align-self: center;">'.$message.'</span>';
                            Session::put('message',null);
                        }
                @endphp
                    <form action="/save-khach-hang" method="post">
                        @csrf
                        <div class="row no-margin">
                            @foreach ($maDP as $key => $value)

                            <div class="col-sm-6" >
                                <div class="form-group">
                                    <span class="form-label">Mã đặt phòng</span>
                                    <input class="form-control" type="hidden" value="{{$value->maDatPhong}}"  name="maDatPhong">
                                </div>

                            </div>
                            @endforeach

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="form-label">Họ và tên</span>
                                    <input class="form-control" type="text" required name="tenKH">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="form-label">Ngày sinh</span>
                                    <input class="form-control" type="date" required name="ngaySinh">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="form-label">Địa chỉ</span>
                            <input class="form-control" type="text" placeholder="Nhập địa chỉ" name="diaChi">
                        </div>
                        <div class="form-group">
                            <span class="form-label">Số điện thoại</span>
                            <input class="form-control" type="number" placeholder="Nhập số điện thoại" name="dienThoai">
                        </div>



                        <div class="form-group">
                            <span class="form-label">Email</span>
                            <input class="form-control" type="email" placeholder="Nhập email" name="email" required>
                        </div>
                        <div class="form-group">
                            <span class="form-label">CMND</span>
                            <input class="form-control" type="number" placeholder="Nhập CMND" name="CMND">
                        </div>
                        <div class="form-btn">
                            <button class="submit-btn">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
