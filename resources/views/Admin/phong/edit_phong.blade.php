@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><b>CẬP NHẬT PHÒNG </b></h4>
        </div>
        @php
            $message = Session::get('message');
                if('message'){
                    echo'<span class="text-alert" style="color: #28c76f;font-size: 15px;align-self: center;">'.$message.'</span>';
                    Session::put('message',null);
                }
        @endphp
   @foreach ($phong as $key => $value )
        <div class="card-body">
          <form class="form form-horizontal" action="/update-phong/{{$value->maPhong}}" method="post">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-1 row">
                      <div class="col-sm-3">
                        <label class="col-form-label"><b>Phòng số</b></label>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" id="contact-info" value="{{$value->soPhong}}" class="form-control" name="soPhong" />
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="mb-1 row">
                      <div class="col-sm-3">
                        <label class="col-form-label"><b>Giá Phòng</b></label>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" id="contact-info" value="{{$value->giaPhong}}" class="form-control" name="giaPhong" />
                      </div>
                    </div>
                  </div>
              <div class="col-12">
                <div class="mb-1 row">
                    <div class="col-sm-3">
                        <label class="col-form-label"><b> Loại phòng </b></label>
                      </div>
                      <div class="col-sm-9">
                        <select class="form-select" name="loaiPhong">
                            <option selected="">Vui lòng chọn loại phòng</option>
                            <option value=1 {{$value->maLoaiPhong == 1 ? 'selected' : ''}}>Phòng đơn</option>
                            <option value=2 {{$value->maLoaiPhong == 2 ? 'selected' : ''}}>Phòng đôi</option>
                            <option value=3 {{$value->maLoaiPhong == 3 ? 'selected' : ''}}>Phòng gia đình</option>
                          </select>
                      </div>
                  </div>
              </div>
              <div class="col-12">
                <div class="mb-1 row">
                  <div class="col-sm-3">
                    <label class="col-form-label"><b> Ảnh</b></label>
                  </div>
                  <div class="col-sm-9">
                    <input type="file" id="contact-info" value="{{$value->hinhAnhPhong}}" class="form-control" name="hinhAnh" placeholder="Chon ảnh" />
                    <img src="/images-ks/phong/{{$value->hinhAnhPhong}}" width="390px" height="350px" style="margin: 10px">
                  </div>
                </div>
              </div>
              <div class="col-sm-9 offset-sm-3">
                <button type="submit" class="btn btn-primary me-1" name="update-phong">Submit</button>
                <button type="reset" class="btn btn-outline-secondary">Reset</button>
              </div>
            </div>
          </form>
        </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection

