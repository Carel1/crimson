@if(!empty($dt->id_kategori))
<script type="text/javascript">

 $('.show_confirm').click(function(event) {
  var form =  $(this).closest("form");
          // var name = $(this).data("name");
          event.preventDefault();
          swal({
            title: `Hapus Data`,
            text: "Yakin Hapus Data Kategori?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
        });

      </script>
      @endif

      @if(!empty($dt->id_buku))
      <script type="text/javascript">

       $('.hapus_lelang').click(function(event) {
        var form =  $(this).closest("form");
          // var name = $(this).data("name");
          event.preventDefault();
          swal({
            title: `Hapus Data`,
            text: "Yakin Hapus Data Buku?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
        });

      </script>
      @endif

      @if(!empty($dt->id))
      <script type="text/javascript">

       $('.pilih').click(function(event) {
        var form =  $(this).closest("form");
          // var name = $(this).data("name");
          event.preventDefault();
          swal({
            title: `Hapus Data.`,
            text: "Hapus Data User?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
        });

      </script>
      @endif