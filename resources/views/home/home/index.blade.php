@extends('home/app')

@section('title', 'Buku Home')

@section('content')
    <!-- ======= Hero Section ======= -->
    <!-- End Hero -->

    <main id="main">
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title">
                    <h2>Buku</h2>
                    <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
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

                                        <button type="button" class="btn btn-secondary btn-sm"
                                            onclick="myfunction()">Pinjam</button>
                                        <button type="button" class="btn btn-secondary btn-sm"><a
                                                href="{{ route('cek_buku', $dt->id_buku) }}">Detail</a></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Portfolio Section -->
        <script type="text/javascript">
            function myfunction() {
                Toastify({
                    text: "Buku Berhasil Dipinjam",
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: "center",
                    backgroundColor: "#4fbe87",
                }).showToast();
            }
        </script>
        <!-- ======= Contact Section ======= -->
        <!-- End Contact Section -->

    </main><!-- End #main -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- ======= Footer ======= -->
@endsection
