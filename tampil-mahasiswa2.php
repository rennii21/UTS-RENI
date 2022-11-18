<!doctype html>
<html>
<head>
	<title>data buku</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/plugins/datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
	<link href="bootstrap/plugins/datatable/style.css" rel="stylesheet">
</head>	
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-12">
<h1> Data buku</h1>
<?php

if(@$_GET['pesan']=="inputBerhasil"){
?>

<div class="alert alert-success">
	penyimpanan berhasil
</div>

<?php

}

?>


<?php

if(@$_GET['pesan']=="hapusBerhasil"){
?>

<div class="alert alert-success">
	data berhasil dihapus!
</div>

<?php

}

?>

<?php

if(@$_GET['pesan']=="editBerhasil"){
?>

<div class="alert alert-success">
	perubahan berhasil!
</div>

<?php

}

?>

	<table id="data-table" class="table table-bordered table-striped table-hover js-basic-example">
		<thead>
		<tr>
			<td>KODE BUKU</td><td>JUDUL BUKU </td><td>PENGARANG</td><td>PENERBIT</td><td>JUMLAH HALAMAN</td><td>TAHUN TERBIT</td><td>JENIS BUKU</td>
			<th>
                <a href="input-mahasiswa2.php">
                    <button class="btn btn-info glyphicon glyphicon-plus"> </button>

                </a>
			</th>
		</tr>
		</thead>
		<tbody>
		<?php

		include"koneksi.php";
$sql=$koneksi->query("select * from buku order by kode_buku ASC");

while($row= $sql->fetch_assoc()){
	?>

	<tr>
			<td><?php echo $row['kode_buku']?></td>
			<td><?php echo $row['judul_buku']?></td>
			<td><?php echo $row['pengarang']?></td>
			<td><?php echo $row['penerbit']?></td>
			<td><?php echo $row['jumlah_halaman']?></td>
			<td><?php echo $row['tahun_terbit']?></td>
			<td><?php echo $row['jenis_buku']?></td>
			<td>

             <a href="edit-mahasiswa.php?id=<?php echo $row['kode_buku']?>" onclick="return confirm('anda yakin ingin mengubah data?')">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"> </button>

                </a>

                 <a href="hapus-mahasiswa.php?id=<?php echo $row['kode_buku']?>" onclick="return confirm('anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"> </button>

                </a>

			</td>
		</tr>

	<?php
	}
	?>

	</tbody>

	</table>
</div>
</div>
</div>

	<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/plugins/datatable/jquery.dataTables.js"></script>
<script src="bootstrap/plugins/datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="bootstrap/plugins/datatable/extensions/tables/jquery-datatable.js"></script>
	<script type="text/javascript">
		<$(document).ready(function(){
			$('#dataTables').DataTable();
		});
	</script>
	
</body>
</html>
