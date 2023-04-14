@extends('home')
@section('room_content')
<div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-7">
        <h2 class="heading" data-aos="fade-up">Rooms &amp; Suites</h2>
        <p data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
      </div>
    </div>
    <section class="py-5 bg-light">
        <div class="container">
    @foreach ($phongs as $key => $value)
          <div class="row align-items-center">
            <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">

              <img src="/images-ks/phong/{{$value->hinhAnhPhong}}" alt="Image" class="img-fluid rounded" width="1000px" height="500px">
            </div>
            <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
              <h2 class="heading">Phòng số:{{$value->soPhong}}</h2>
              <p class="mb-3">Giá phòng: {{$value->giaPhong .' '.'VND'}}</p>
              <p class="mb-3">{{$value->status == 0 ? 'Chưa đặt' : 'Đã đặt'}}</p>
              <p><a href="/thong-tin-dat-phong/{{$value->maPhong}}" class="btn btn-primary text-white py-2 mr-3">Book now</a> </p>
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
