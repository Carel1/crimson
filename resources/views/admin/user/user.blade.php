@extends('layout/app')

@section('title','Data User')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data User</h3>
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
                Table With Data User
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="table1">
                    <thead>
                        <tr>
                            <th>No. </th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        @foreach($data as $dt)
                        <tr>
                            <td>{{$no}}. </td>
                            <td>{{$dt->name}}</td>
                            <td>{{$dt->email}}</td>
                            <td><span class="badge bg-primary">{{$dt->level}}</span></td>
                            <td align="center">
                                <form method="GET" action="{{ route('delete_user', $dt->id) }}">
                                    @csrf
                                    <a href="" data-bs-toggle="modal"
                                    data-bs-target="#edit{{$dt->id}}" class="btn btn-sm rounded-pill btn-success">
                                    <i class="dripicons dripicons-document-edit"></i></a>
                                    <button type="submit" class="btn btn-sm btn-danger rounded-pill pilih" data-toggle="tooltip" title='Delete'><i class="dripicons dripicons-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @include('admin/user/update')
                        <?php $no++ ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
@endsection