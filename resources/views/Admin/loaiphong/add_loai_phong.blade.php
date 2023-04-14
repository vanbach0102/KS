@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><b>QUẢN LÝ LOẠI PHÒNG </b></h4>
        </div>
        @php
            $message = Session::get('message');
                if('message'){
                    echo'<span class="text-alert">'.$message.'</span>';
                    Session::put('message',null);
                }
        @endphp
        <div class="card-body">
          <form role="form" class="form form-horizontal" action="/save-loai-phong" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-1 row">
                      <div class="col-sm-3">
                        <label class="col-form-label"><b> Loại phòng</b></label>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" id="contact-info" class="form-control" name="loaiPhong" placeholder="Nhập loại phòng" />
                      </div>
                    </div>
                  </div>
              <div class="col-12">
                <div class="mb-1 row">
                    <div class="col-sm-3">
                        <label class="col-form-label"><b> Tình trạng </b></label>
                      </div>
                      <div class="col-sm-9">
                        <select class="form-select" name="tinhTrang">
                            <option selected="">Vui lòng chọn tình trạng</option>
                            <option value="0">Ẩn</option>
                            <option value="1">Hiện thị</option>
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
                    <input type="file" id="contact-info" class="form-control" name="hinhAnh" placeholder="Chọn ảnh" />
                  </div>
                </div>
              </div>
              <div class="col-sm-9 offset-sm-3">
                <button type="submit" class="btn btn-primary me-1" name="add-loai-phong">Submit</button>
                <button type="reset" class="btn btn-outline-secondary">Reset</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

