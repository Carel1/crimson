@extends('layout/app')

@section('title','Data Buku')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Buku</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                Table With Data Buku
                <button type="button" style="float: right;" class="btn btn-sm btn-outline-primary block" data-bs-toggle="modal"
                data-bs-target="#default">
                Tambah Data
            </button>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>No. </th>
                        <th>Judul Buku</th>
                        <th>Kategori</th>
                        <th>Penulis</th>
                        <th>Tahun</th>
                        <th>Gambar Buku</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    @foreach($data as $dt)
                    
                    <tr>
                        <td>{{$no}}. </td>
                        <td>{{$dt->judul_buku}}</td>
                        <td>{{$dt->nama_kategori}}</td>
                        <td>{{$dt->penulis}}</td>
                        <td>{{$dt->tahun}}</td>
                        <td align="center">
                            <img src="{{asset('buku')}}/{{$dt->gambar}}" width="70">
                        </td>
                        <td align="center">
                            <form method="GET" action="{{route('deletebuku',$dt->id_buku)}}">
                                <a href="" data-bs-toggle="modal"
                                data-bs-target="#edit{{$dt->id_buku}}" class="btn btn-sm rounded-pill btn-success">
                                <i class="dripicons dripicons-document-edit"></i></a>
                                <a href="" data-toggle="tooltip" class="btn btn-sm rounded-pill btn-danger hapus_lelang">
                                    <i class="dripicons dripicons-trash"></i>
                                </a>
                            </form>
                        </td>
                    </tr>
                    @include('admin/buku/update')
                    <?php $no++ ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</section>
</div>
@include('admin/buku/tambah')
@endsection