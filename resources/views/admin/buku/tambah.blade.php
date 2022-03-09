<div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel1" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel1">Menambah Data buku</h5>
            <button type="button" class="close rounded-pill"
            data-bs-dismiss="modal" aria-label="Close">
            <i data-feather="x"></i>
        </button>
    </div>
    
    <div class="modal-body">
        <form method="post" action="{{route('addbuku')}}" enctype="multipart/form-data">
            @csrf
            <div class="row" id="after-add-more">
                <div class="col-xl-12">
                    <div class="form-group">
                        <label>Nama buku</label>
                        <input type="text" required="" class="form-control" name="judul_buku[]">
                    </div>  
                </div>
                <div class="col-xl-12">
                    <div class="form-group">
                        <label>Kategori buku</label>
                        <select class="form-control" required="" name="kategori_id[]">
                            @foreach($kategori as $js)
                            <option value="{{$js->id_kategori}}">{{$js->nama_kategori}}</option>
                            @endforeach
                        </select>
                    </div>  
                </div>
                <div class="col-xl-12">
                    <div class="form-group">
                        <label>Penulis</label>
                        <input type="text" required="" class="form-control" name="penulis[]">
                    </div>  
                </div>
                <div class="col-xl-12">
                    <div class="form-group">
                        <label>Tahun</label>
                        <input type="number" required="" min="1" class="form-control" name="tahun[]">
                    </div>  
                </div>
                <div class="col-xl-12">
                    <div class="form-group">
                        <label>Gambar Barang</label>
                        <input type="file" required="" class="form-control" name="gambar[]">
                    </div>  
                </div>
                <div class="col-12">
                    <button class="btn btn-sm btn-success form-control" id="add-more" type="button"><i class="dripicons dripicons-plus"></i></button>
                </div>
            </div>
            <button class="btn btn-sm btn-primary form-control mt-2">Tambah</button>
        </form>
        <div class="row" id="copy">
            <div class="row" id="control-group">
                <div class="col-xl-12">
                    <div class="form-group">
                        <label>Nama buku</label>
                        <input type="text" class="form-control" name="judul_buku[]">
                    </div>  
                </div>
                <div class="col-xl-12">
                    <div class="form-group">
                        <label>Kategori buku</label>
                        <select class="form-control" name="kategori_id[]">
                            @foreach($kategori as $js)
                            <option value="{{$js->id_kategori}}">{{$js->nama_kategori}}</option>
                            @endforeach
                        </select>
                    </div>  
                </div>
                <div class="col-xl-12">
                    <div class="form-group">
                        <label>Penulis</label>
                        <input type="text" class="form-control" name="penulis[]">
                    </div>  
                </div>
                <div class="col-xl-12">
                    <div class="form-group">
                        <label>Tahun</label>
                        <input type="number" min="1" class="form-control" name="tahun[]">
                    </div>  
                </div>
                <div class="col-xl-12">
                    <div class="form-group">
                        <label>Gambar Barang</label>
                        <input type="file" class="form-control" name="gambar[]">
                    </div>  
                </div>
                <div class="col-12">
                    <button class="btn btn-sm btn-danger form-control" id="remove" type="button"><i class="dripicons dripicons-trash"></i></button>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>