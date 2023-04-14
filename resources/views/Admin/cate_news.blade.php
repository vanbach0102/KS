@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><b>DANH MỤC BÀI VIẾT </b></h4>
        </div>
        @php
            $message = Session::get('message');
                if('message'){
                    echo'<span class="text-alert">'.$message.'</span>';
                    Session::put('message',null);
                }
        @endphp
        <div class="card-body">
          <form role="form"   class="form form-horizontal" action="/save-cate-news" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-1 row">
                      <div class="col-sm-3">
                        <label class="col-form-label"><b> Tên danh mục bài viết</b></label>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" id="title" class="form-control" onkeyup="ChangeToSlug();" name="cate_news_name" placeholder="Nhập tên danh mục bài viết" />
                      </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-1 row">
                      <div class="col-sm-3">
                        <label class="col-form-label"><b> Slug</b></label>
                      </div>
                      <div class="col-sm-9">
                        <input type="t" id="slug" class="form-control" name="cate_news_slug" placeholder="slug" />
                      </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-1 row">
                      <div class="col-sm-3">
                        <label class="col-form-label"><b> Mô tả danh mục</b></label>
                      </div>
                      <div class="col-sm-9">
                        <input style="resize: none" id="" class="form-control" name="cate_news_desc" placeholder="" />
                      </div>
                    </div>
                </div>
              <div class="col-12">
                <div class="mb-1 row">
                    <div class="col-sm-3">
                        <label class="col-form-label"><b>Tinh trang</b></label>
                      </div>
                      <div class="col-sm-9">
                        <select class="form-select" name="cate_news_status">
                            <option selected="">Vui lòng chọn tình trạng</option>
                            <option value="0">Ẩn</option>
                            <option value="1">Hiện thị</option>
                          </select>
                      </div>
                  </div>
              </div>
              <div class="col-sm-9 offset-sm-3">
                <button type="submit" class="btn btn-primary me-1" name="add_news_cate">Submit</button>
                <button type="reset" class="btn btn-outline-secondary">Reset</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script>
    function ChangeToSlug()
{
    var title, slug;

    //Lấy text từ thẻ input title
    title = document.getElementById("title").value;

    //Đổi chữ hoa thành chữ thường
    slug = title.toLowerCase();

    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    //Xóa các ký tự đặt biệt
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, " - ");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id “slug”
    document.getElementById('slug').value = slug;
}

</script>
@endsection

