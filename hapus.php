<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index1.php");
} 

?>
<?php

$id=$_GET['id_pelanggan'];
include "koneksi.php";

$hapus=$koneksi->query("delete from datakendaraan where id_pelanggan='$id'");

if($hapus==true){

		header("location:tampil-data-kendaraan.php?pesan=hapusBerhasil");
}else {
	echo"error";
}



?>
