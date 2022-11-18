<?php
$kode_buku=$_POST['kode_buku'];
$judul_buku=$_POST['judul_buku'];
$pengarang=$_POST['pengarang'];
$penerbit=$_POST['penerbit'];
$jumlah_halaman=$_POST['jumlah_halaman'];
$tahun_terbit=$_POST['tahun_terbit'];
$jenis_buku=$_POST['jenis_buku'];




include "koneksi.php";

$simpan=$koneksi->query("insert into buku(kode_buku,judul_buku,pengarang,penerbit,jumlah_halaman,tahun_terbit,jenis_buku) 
	                     values ('$kode_buku', '$judul_buku', '$pengarang', '$penerbit', '$jumlah_halaman', '$tahun_terbit', '$jenis_buku')");

if($simpan==true){

	header("location:tampil-mahasiswa2.php?pesan=inputBerhasil");
} else{
	echo "Error";
}

?>