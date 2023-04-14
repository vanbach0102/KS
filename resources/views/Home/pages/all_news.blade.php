@extends('home')
@section('news_content')
<div class="container">
    <section class="py-5 bg-light">
        <div class="container">
    @foreach ($baiViet as $key => $value)
          <div class="row align-items-center">
            <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">

              <img src="/images-ks/news/{{$value->news_image}}" alt="Image" class="img-fluid rounded" width="1000px" height="500px">
            </div>
            <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
              <h2 class="heading">{{$value->news_title}}</h2>
              <p class="mb-3">{{$value->news_desc}}</p>
              <p><a href="" class="btn btn-primary text-white py-2 mr-3">Đọc thêm</a> </p>
            </div>
          </div>
    @endforeach
        </div>
      </section>
        </a>
      </div>
    </div>
  </div

@endsection
