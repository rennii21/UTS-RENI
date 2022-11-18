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
				<form action="proses-edit-mahasiswa.php" method="POST">
					<?php 
						$id=$_GET['id'];
					include "koneksi.php";
					$tampil=$koneksi->query("select * from buku where kode_buku='$id'");
					$row=$tampil->fetch_assoc();
					?>
					<div class="form-group">
						<label for="kode_buku">Kode Buku</label>
						<input type="number" name="kode_buku" value="<?php echo $row['kode_buku']?>" class="form-control">
					</div>

	
	<div class="form-group">
		<label for="judul_buku">Judul_Buku</label>
		<input type="text" name="judul_buku" value="<?php echo $row['judul_buku']?>" class="form-control">
	</div>

	<div class="form-group">
		<label for="pengarang">Pengarang</label>
	<input type="text" name="pengarang" value="<?php echo $row['pengarang']?>" class="form-control">
	</div>

	<div class="form-group">
		<label for="penerbit">Penerbit</label>
		<input type="text" name="penerbit" value="<?php echo $row['penerbit']?>" class="form-control">
	</div>

		<div class="form-group">
		<label for="jumlah_halaman">Jumlah Halaman</label>
		<input type="number" name="jumlah_halaman" value="<?php echo $row['jumlah_halaman']?>" class="form-control">
	</div>

		<div class="form-group">
		<label for="tahun_terbit">Tahun Terbit</label>
		<input type="number" name="tahun_terbit" value="<?php echo $row['tahun_terbit']?>" class="form-control">
	</div>

		<div class="form-group">
		<label for="jenis_buku">Jenis Buku</label>
		<input type="text" name="jenis_buku" value="<?php echo $row['jenis_buku']?>" class="form-control">
	</div>

<input type="submit" name="kirim" value="ubah" class="btn btn-info">
<input type="reset" name="kirim" value="kosongkan" class="btn btn-danger">
</form>

<script src="bootstrap/js/jQuery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</div>
</div>
</div>
</body>
</html>