@if(session('adjenis'))
<script type="text/javascript">
	document.getElementById('top-right');
	Toastify({
		text: "Tambah Data Kategori Berhasil",
		duration: 3000,
		close:true,
		gravity:"top",
		position: "right",
		backgroundColor: "#4fbe87",
	}).showToast();
</script>
@endif
@if(session('upjenis'))
<script type="text/javascript">
	document.getElementById('top-right');
	Toastify({
		text: "Update Data Kategori Berhasil",
		duration: 3000,
		close:true,
		gravity:"top",
		position: "right",
		backgroundColor: "#4fbe87",
	}).showToast();
</script>
@endif
@if(session('deljenis'))
<script type="text/javascript">
	document.getElementById('top-right');
	Toastify({
		text: "Hapus Data Kategori Berhasil",
		duration: 3000,
		close:true,
		gravity:"top",
		position: "right",
		backgroundColor: "red",
	}).showToast();
</script>
@endif

@if(session('adlelang'))
<script type="text/javascript">
	document.getElementById('success');
	Swal.fire({
		icon: "success",
		title: "Berhasil Menambah Data",
		text: "Data Buku Berhasil di Tambahkan.",
	});
</script>
@endif
@if(session('uplelang'))
<script type="text/javascript">
	document.getElementById('top-right');
	Toastify({
		text: "Update Data Buku Berhasil",
		duration: 3000,
		close:true,
		gravity:"top",
		position: "right",
		backgroundColor: "#4fbe87",
	}).showToast();
</script>
@endif
@if(session('dellelang'))
<script type="text/javascript">
	document.getElementById('top-right');
	Toastify({
		text: "Hapus Data Buku Berhasil",
		duration: 3000,
		close:true,
		gravity:"top",
		position: "right",
		backgroundColor: "red",
	}).showToast();
</script>
@endif

@if(session('biodata'))
<script type="text/javascript">
	document.getElementById('top-right');
	Toastify({
		text: "Update Data Profil Berhasil",
		duration: 3000,
		close:true,
		gravity:"top",
		position: "right",
		backgroundColor: "#4fbe87",
	}).showToast();
</script>
@endif
@if(session('password'))
<script type="text/javascript">
	document.getElementById('top-right');
	Toastify({
		text: "Update Password Berhasil",
		duration: 3000,
		close:true,
		gravity:"top",
		position: "right",
		backgroundColor: "#4fbe87",
	}).showToast();
</script>
@endif

@if(session('lebih'))
<script type="text/javascript">
	document.getElementById('top-right');
	Toastify({
		text: "Berhasil Di tambahkan ke Keranjang",
		duration: 3000,
		close:true,
		gravity:"top",
		position: "right",
		backgroundColor: "#4fbe87",
	}).showToast();
</script>
@endif

@if(session('delcart'))
<script type="text/javascript">
	document.getElementById('top-right');
	Toastify({
		text: "Hapus Data Cart Produk Berhasil",
		duration: 3000,
		close:true,
		gravity:"top",
		position: "right",
		backgroundColor: "red",
	}).showToast();
</script>
@endif

@if(session('ulasan'))
<script type="text/javascript">
	document.getElementById('top-right');
	Toastify({
		text: "Berhasil Menambah Rating Ulasan",
		duration: 3000,
		close:true,
		gravity:"top",
		position: "right",
		backgroundColor: "#4fbe87",
	}).showToast();
</script>
@endif












@if(session('user_profil'))
<script type="text/javascript">
	document.getElementById('success');
	Swal.fire({
		icon: "success",
		title: "Berhasil Update Data",
		text: "Data Admin Berhasil di Update.",
	});
</script>
@endif
@if(session('pilih'))
<script type="text/javascript">
	document.getElementById('success');
	Swal.fire({
		icon: "success",
		title: "Berhasil Pilih Pemenang",
	});
</script>
@endif

@if(session('payment'))
<script type="text/javascript">
	document.getElementById('success');
	Swal.fire({
		icon: "success",
		title: "Berhasil Tambah Rekening",
	});
</script>
@endif
@if(session('a'))
<script type="text/javascript">
	document.getElementById('success');
	Swal.fire({
		icon: "success",
		title: "Berhasil Update Data",
	});
</script>
@endif
@if(session('deluser'))
<script type="text/javascript">
	document.getElementById('top-right');
	Toastify({
		text: "Hapus Data User Berhasil",
		duration: 3000,
		close:true,
		gravity:"top",
		position: "right",
		backgroundColor: "red",
	}).showToast();
</script>
@endif

@if(session('upuser'))
<script type="text/javascript">
	document.getElementById('top-right');
	Toastify({
		text: "Berhasil Update Data User",
		duration: 3000,
		close:true,
		gravity:"top",
		position: "right",
		backgroundColor: "#4fbe87",
	}).showToast();
</script>
@endif