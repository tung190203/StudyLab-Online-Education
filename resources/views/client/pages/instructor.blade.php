@extends('index')
@section('content')
@include('client.layouts.menu')
<section class="hero-wrap hero-wrap-2" style="background-image: url('./assets/images/bg_2.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="/">Trang chủ <i class="fa fa-chevron-right"></i></a></span> <span>Giảng viên <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">Giảng viên được chứng nhận</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch">
        <div class="staff">
          <div class="img-wrap d-flex align-items-stretch">
            <div class="img align-self-stretch" style="background-image: url(./assets/images/teacher-1.jpg);"></div>
          </div>
          <div class="text pt-3">
            <h3><a href="/instructor-details">Bianca Wilson</a></h3>
            <span class="position mb-2">Business</span>
            <div class="faded">
              <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
              <ul class="ftco-social text-center">
                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-google"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch">
        <div class="staff">
          <div class="img-wrap d-flex align-items-stretch">
            <div class="img align-self-stretch" style="background-image: url(./assets/images/teacher-2.jpg);"></div>
          </div>
          <div class="text pt-3">
            <h3><a href="/instructor-details">Mitch Parker</a></h3>
            <span class="position mb-2">Programmer</span>
            <div class="faded">
              <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
              <ul class="ftco-social text-center">
                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-google"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch">
        <div class="staff">
          <div class="img-wrap d-flex align-items-stretch">
            <div class="img align-self-stretch" style="background-image: url(./assets/images/teacher-3.jpg);"></div>
          </div>
          <div class="text pt-3">
            <h3><a href="/instructor-details">Stella Smith</a></h3>
            <span class="position mb-2">Developer</span>
            <div class="faded">
              <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
              <ul class="ftco-social text-center">
                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-google"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch">
        <div class="staff">
          <div class="img-wrap d-flex align-items-stretch">
            <div class="img align-self-stretch" style="background-image: url(./assets/images/teacher-4.jpg);"></div>
          </div>
          <div class="text pt-3">
            <h3><a href="/instructor-details">Monshe Henderson</a></h3>
            <span class="position mb-2">Graphic</span>
            <div class="faded">
              <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
              <ul class="ftco-social text-center">
                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-google"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <li><a href="#">&lt;</a></li>
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&gt;</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection