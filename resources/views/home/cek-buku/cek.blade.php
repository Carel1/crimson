@extends('home/app')

@section('title','Detail Buku')

@section('content')<!-- End Header -->

<main id="main">
  <style>
  #selengkapnya {display: none;}
</style>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Buku Detail</h2>
      <ol>
        <li><a href="">Home</a></li>
        <li>Chat</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
  <div class="container">

    @foreach($data as $dt)
    <div class="row gy-4">

      <div class="col-lg-8">
        <div class="portfolio-details-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide">
              <img src="{{asset('buku')}}/{{$dt->gambar}}" alt="">
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="portfolio-info">
          <h3>Buku Informasi</h3>
          <ul>
            <li><strong>Judul Buku</strong>: {{$dt->judul_buku}}</li>
            <li><strong>Kategori</strong>: {{$dt->nama_kategori}}</li>
            <li><strong>Penulis</strong>: Rp {{$dt->penulis}}</li>
            <li><strong>Tahun</strong>: {{$dt->tahun}}</li>
          </ul>
        </div>
        <p><a href="{{asset('buku')}}/{{$dt->gambar}}" download="" class="btn btn-sm btn-success mt-2">Download</a></p>
      </div>

    </div>
    @endforeach


  </div>
</section><!-- End Portfolio Details Section -->
<!-- ======= Contact Section ======= -->

<!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="position: fixed;">
  <i class="bi bi-chat-dots-fill"></i>
</a> -->
<!-- End #main -->
@endsection