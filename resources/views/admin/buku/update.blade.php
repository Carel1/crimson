<div class="modal fade text-left" id="edit{{$dt->id_buku}}" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Update Data buku</h5>
                <button type="button" class="close rounded-pill"
                data-bs-dismiss="modal" aria-label="Close">
                <i data-feather="x"></i>
            </button>
        </div>
        <form method="post" action="{{route('updatebuku',$dt->id_buku)}}" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="form-group">
                            <label>Nama buku</label>
                            <input type="text" required="" class="form-control" value="{{$dt->judul_buku}}" name="judul_buku">
                        </div>  
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group">
                            <label>Kategori buku</label>
                            <select class="form-control" required="" name="kategori_id">
                                @foreach($kategori as $js)
                                <option <?php if($js->id_kategori==$dt->kategori_id){echo "selected";} ?> value="{{$js->id_kategori}}">{{$js->nama_kategori}}</option>
                                @endforeach
                            </select>
                        </div>  
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group">
                            <label>Penulis</label>
                            <input type="text" class="form-control" required="" value="{{$dt->penulis}}" name="penulis">
                        </div>  
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="number" min="1" required="" value="{{$dt->tahun}}" class="form-control" name="tahun">
                        </div>  
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group">
                            <label>Gambar Barang</label>
                            <input type="file" required="" class="form-control" name="gambar">
                        </div>  
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <button class="btn btn-primary ml-1">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Accept</span>
                </button>
            </div>
        </form>
    </div>
</div>
</div>