<?php
session_start();
include "koneksi.php";
?>
<?php

$id_pelanggan= $_POST['id_pelanggan'];
$nama_pelanggan= $_POST['nama_pelanggan'];
$kode_barang= $_POST['kode_barang'];
$nama_barang= $_POST['nama_barang'];
$tahun_barang= $_POST['tahun_barang'];
$alamat= $_POST['alamat'];
$tenor= $_POST['tenor'];

include "koneksi.php";

$simpan=$koneksi->query("insert into datakendaraan (id_pelanggan,nama_pelanggan,kode_barang,nama_barang,tahun_barang,alamat,tenor)
						values('$id_pelanggan', '$nama_pelanggan', '$kode_barang', '$nama_barang', '$tahun_barang', '$alamat', '$tenor')");

if($simpan==true){

	header("location:data-kendaraan.php?pesan=inputberhasil");
} else{
	echo "Erorrr";
}

?>