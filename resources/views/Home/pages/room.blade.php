@extends('home')
@section('room_content')
<div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-7">
        <h2 class="heading" data-aos="fade-up">Rooms &amp; Suites</h2>
        <p data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
      </div>
    </div>
    <div class="row">
        @foreach ($loai_phongs as $key => $value )
      <div class="col-md-6 col-lg-4" data-aos="fade-up">
        <a href="/phong/{{$value->maLoaiPhong}}" class="room">
          <figure class="img-wrap">
            <img src="/images-ks/phong/{{$value->hinhAnh}}" alt="Free website template" class="img-fluid mb-3" height="350px" width="350px">
          </figure>
          <div class="p-3 text-center room-info">
            <h2>{{$value->loaiPhong}}</h2>
        </div>
        </a>
      </div>
      @endforeach
    </div>
  </div
@endsection
