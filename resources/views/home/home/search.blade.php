@extends('home/app')

@section('title', 'Search Buku')

@section('content')
    <!-- ======= Hero Section ======= -->
    <main id="main">
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title">
                    <h2>Details Search</h2>
                </div>

                <div class="row portfolio-container">

                    @foreach ($data as $dt)
                        <div class="col-lg-3 portfolio-item filter-web">
                            <div class="portfolio">
                                <img src="{{ asset('buku') }}/{{ $dt->gambar }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>{{ $dt->judul_buku }}</h4>
                                    <!-- <p></p> -->
                                    <div class="portfolio-links">
                                        <a href="{{ asset('buku') }}/{{ $dt->gambar }}" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                        <a href="{{ route('cek_buku', $dt->id_buku) }}" title="More Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Contact Section ======= -->
        <!-- End Contact Section -->

    </main><!-- End #main -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- ======= Footer ======= -->
@endsection
