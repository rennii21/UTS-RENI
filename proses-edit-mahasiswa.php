<?php

include "koneksi.php";

$kode_buku=$_POST['kode_buku'];
$judul_buku=$_POST['judul_buku'];
$pengarang=$_POST['pengarang'];
$penerbit=$_POST['penerbit'];
$jumlah_halaman=$_POST['jumlah_halaman'];
$tahun_terbit=$_POST['tahun_terbit'];
$jenis_buku=$_POST['jenis_buku'];


$ubah=$koneksi->query("update buku set kode_buku='$kode_buku', judul_buku='$judul_buku', pengarang='$pengarang', penerbit='$penerbit', jumlah_halaman='$jumlah_halaman', tahun_terbit='$tahun_terbit', jenis_buku='$jenis_buku' where kode_buku='$id'");

if($ubah==true){

	header("location:tampil-mahasiswa2.php?pesan=editBerhasil");
} else{

	echo "error";
}

?>