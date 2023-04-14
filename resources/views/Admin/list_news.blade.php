@extends('admin_layout')
@section('admin_content')
<div class="row" id="basic-table">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><b>DANH SÁCH BÀI VIẾT</b></h4>
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
                <th class=""><b>Tên bài viết</b></th>
                <th class=""><b>Tóm tắt</b></th>
                <th class=""><b>Nội dung</b></th>
                <th class=""><b>Tình trạng</b></th>
                <th class=""><b>Hình ảnh</b></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($news as $key => $value )
              <tr >
                <td class="" >{{ $value->news_title}}</td>
                <td class="" >{{ $value->news_desc}}</td>
                <td class="" >{{ $value->news_content}}</td>
                <td class="">
                    @if ($value->news_status == 0)
                        Ẩn
                    @else
                        Hiển thị
                    @endif
                </td>
            </tr>
            <td class=""><img src="/images-ks/news/{{$value->news_image}}" height="100" width="100"></td>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
