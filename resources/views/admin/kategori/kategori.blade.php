@extends('layout/app')

@section('title','Data Kategori')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Kategori Produk</h3>
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
                Table With Data Kategori
                <button type="button" style="float: right;" class="btn btn-sm btn-outline-primary block" data-bs-toggle="modal"
                data-bs-target="#default">
                Tambah Data
            </button>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="table1">
                <thead>
                    <tr>
                        <th>No. </th>
                        <th>Nama Kategori</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    @foreach($data as $dt)
                    <tr>
                        <td>{{$no}}. </td>
                        <td>{{$dt->nama_kategori}}</td>
                        <td align="center">

                         <form method="GET" action="{{ route('deletekategori', $dt->id_kategori) }}">
                            @csrf
                            <a href="" data-bs-toggle="modal"
                            data-bs-target="#edit{{$dt->id_kategori}}" class="btn btn-sm rounded-pill btn-success">
                            <i class="dripicons dripicons-document-edit"></i></a>
                            <button type="submit" class="btn btn-sm btn-danger rounded-pill show_confirm" data-toggle="tooltip" title='Delete'><i class="dripicons dripicons-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @include('admin/kategori/update')
                <?php $no++ ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</section>
</div>
@include('admin/kategori/tambah')
@endsection