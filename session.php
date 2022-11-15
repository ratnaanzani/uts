<?php
session_start();
if (empty($_SESSION['id_pelanggan'])){
	header("location:../data-kendaraan.php");
}
?>