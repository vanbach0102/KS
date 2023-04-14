@extends('admin_layout')
@section('admin_content')
<div class="row" id="basic-table">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><b>DANH SÁCH DANH MỤC BÀI VIẾT</b></h4>
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
                <th class="text-center"><b>Tên danh mục bài viết</b></th>
                <th class="text-center"><b>Slug</b></th>
                <th class="text-center"><b>Mô tả</b></th>
                <th class="text-center"><b>Tình trạng</b></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($cate_news as $key => $value )
              <tr >
                <td class="text-center" >{{ $value->cate_news_name}}</td>
                <td class="text-center" >{{ $value->cate_news_slug}}</td>
                <td class="text-center" >{{ $value->cate_news_desc}}</td>
                <td class="text-center">
                    @if ($value->cate_news_status == 0)
                        Ẩn
                    @else
                        Hiển thị
                    @endif
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
