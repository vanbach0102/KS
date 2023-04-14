@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><b>QUẢN LÝ PHÒNG </b></h4>
        </div>
        @php
            $message = Session::get('message');
                if('message'){
                    echo'<span class="text-alert" style="color: #28c76f;font-size: 15px;align-self: center;">'.$message.'</span>';
                    Session::put('message',null);
                }
        @endphp
        <div class="card-body">
          <form class="form form-horizontal" action="/save-phong" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="mb-1 row">
                  <div class="col-sm-3">
                    <label class="col-form-label"><b> Phòng số</b></label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" id="first-name" class="form-control" name="soPhong" placeholder="Nhập số phòng" />
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="mb-1 row">
                  <div class="col-sm-3">
                    <label class="col-form-label"><b>Giá phòng</b></label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" id="my-editor" class="form-control" name="giaPhong" placeholder="Nhập giá phòng" />
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="mb-1 row">
                    <div class="col-sm-3">
                        <label class="col-form-label"><b> Tình trạng </b></label>
                      </div>
                      <div class="col-sm-9">
                        <select class="form-select" name="status">
                            <option selected="">Vui lòng chọn tình trạng</option>
                            <option value="0">Chưa đặt</option>
                            <option value="1">Đã đặt</option>
                          </select>
                      </div>
                  </div>
              </div>
              <div class="col-12">
                <div class="mb-1 row">
                    <div class="col-sm-3">
                        <label class="col-form-label"><b> Loại Phòng</b></label>
                      </div>
                      <div class="col-sm-9">
                        <select class="form-select" name="theLoaiPhong">
                            <option selected="">Vui lòng chọn loại phòng</option>
                            @foreach ($loaiPhong as $key => $value)

                            <option value="{{$value->maLoaiPhong}}">{{$value->loaiPhong}}</option>

                            @endforeach

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
                    <input type="file" id="" class="form-control" name="hinhAnhPhong" placeholder="Chọn ảnh" />
                  </div>
                </div>
              </div>
              <div class="col-sm-9 offset-sm-3">
                <button type="submit" class="btn btn-primary me-1" name="add-phong">Submit</button>
                <button type="reset" class="btn btn-outline-secondary">Reset</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script>
    var options = {
        fileBrowserImageBrowerUrl: 'laravel-filemanager?type=Image',
        fileBrowserImageUplooadUrl: 'laravel-filemanager/upload?type=Images&_token=',
        filebrowserIBrowerUrl: 'laravel-filemanager?type=File',
        filebrowserUploadUrl: 'laravel-filemanager/upload?type=File&_token=',
    };
  </script>
  <script>
    CKEDITOR.replace('my-editor',options);
  </script>
@endsection

