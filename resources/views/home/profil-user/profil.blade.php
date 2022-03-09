@extends('home/app')

@section('title','Detail Produk')

@section('content')<!-- End Header -->

<main id="main">

  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Profil</h2>
      </div>

      @foreach($data as $dta)
      <div class="row">

        <div class="col-lg-4 d-flex align-items-stretch">
          <div class="info">
            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>{{$dta->email}}</p>
            </div>

            <div class="phone">
              <i class="bi bi-person"></i>
              <h4>Name:</h4>
              <p>{{$dta->name}}</p>
            </div>

          </div>

        </div>

        <div class="col-lg-4 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="{{route('lengkapi',$dta->id)}}" method="post" enctype="multipart/form-data" role="form" class="info">
            @csrf
            <div class="row">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{$dta->name}}" class="form-control" id="name">
              </div>
              <div class="form-group mt-3 mt-md-0">
                <label for="name">Email</label>
                <input type="email" class="form-control" value="{{$dta->email}}" name="email" id="email">
              </div>
            </div>
            <div class="text-center"><button type="submit" class="btn btn-success mt-2">Update</button></div>
          </form>
        </div>
       <div class="col-lg-4 mt-5 mt-lg-0 d-flex align-items-stretch">
        <form action="{{route('ganti_password',$dta->id)}}" method="post" role="form" class="info">
          @csrf
          <div class="row">
            <div class="form-group col-12">
              <label for="name">Password</label>
              <input type="password" name="password" class="form-control" id="name">
            </div>
          </div>
          <div class="text-center"><button type="submit" class="btn btn-success mt-2">Update</button></div>
        </form>
      </div>
    </div>
    @endforeach

  </div>
</section>

</main>
@endsection