<!doctype HTML>
<html>
<head>
	<title>menampilkan hasil data buku</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="proses-input-mahasiswa.php" method="POST">
					<div class="form-group">
						<label for="kode_buku">Kode Buku</label>
						<input type="number" name="kode_buku" class="form-control">
					</div>

	
	<div class="form-group">
		<label for="judul_buku">Judul_Buku</label>
		<input type="text" name="judul_buku" class="form-control">
	</div>

	<div class="form-group">
		<label for="pengarang">Pengarang</label>
	<input type="text" name="pengarang" class="form-control">
	</div>

	<div class="form-group">
		<label for="penerbit">Penerbit</label>
		<input type="text" name="penerbit" class="form-control">
	</div>

		<div class="form-group">
		<label for="jumlah_halaman">Jumlah Halaman</label>
		<input type="number" name="jumlah_halaman" class="form-control">
	</div>

		<div class="form-group">
		<label for="tahun_terbit">Tahun Terbit</label>
		<input type="number" name="tahun_terbit" class="form-control">
	</div>

		<div class="form-group">
		<label for="jenis_buku">Jenis Buku</label>
		<input type="text" name="jenis_buku" class="form-control">
	</div>

<input type="submit" name="kirim" value="simpan" class="btn btn-info">
<input type="reset" name="kirim" value="kosongkan" class="btn btn-danger">
</form>

<script src="bootstrap/js/jQuery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</div>
</div>
</div>
</body>
</html>