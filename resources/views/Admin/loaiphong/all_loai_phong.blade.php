@extends('admin_layout')
@section('admin_content')
<div class="row" id="basic-table">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><b>DANH SÁCH LOẠI PHÒNG</b></h4>
        </div>
        <div class="table-responsive">
            @php
            $message = Session::get('message');
                if('message'){
                    echo'<span class="text-alert">'.$message.'</span>';
                    Session::put('message',null);
                }
        @endphp
          <table class="table">
            <thead>
              <tr>
                <th class="text-center"><b>Loại Phòng</b></th>
                <th class="text-center"><b>Tình trạng</b></th>
                <th class="text-center"><b>Ảnh</b></th>
                <th class="text-center"><b>Hành động</b></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($all_loaiphong as $key => $value )
              <tr >
                <td class="text-center" >{{ $value->loaiPhong}}</td>
                <td class="text-center">
                    <?php if($value->tinhTrang == 0){
                    ?>
                    <a class="btn btn-danger" href="/set-loai-phong/{{$value->maLoaiPhong}}">Ẩn</a>
                    <?php
                }else{
                    ?>
                    <a class="btn btn-success" href="/unset-loai-phong/{{$value->maLoaiPhong}}">Hiển thị</a>
            <?php
            }
                ?>
                </td>
                <td class="text-center"><img src="/images-ks/phong/{{$value->hinhAnh}}"width= "100px"></td>'
                <td class="text-center">
                    <a class="active styling-edit"  href="/edit-loai-phong/{{$value->maLoaiPhong}}">
                        <i class="fa fa-pencil-square-o fa-2x text-success text-center"></i></a>
                    <a class="active styling-delete" onclick="return confirm('Bạn có chắc chắn muốn xóa')"  href="/delete-loai-phong/{{$value->maLoaiPhong}}">
                        <i class="fa fa-times text-danger fa-2x text-center"></i></a>
                </td>
            </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
