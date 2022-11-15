<?php
session_start();
include "koneksi.php";

$sql=$koneksi->query("SELECT * FROM user WHERE username= '$username' and password='$password'");
$row= $sql->fetch_assoc();
$result= $sql->num_rows;
if ($result==TRUE)
{
	$_SESSION['user_id']=$row['id'];
	$_SESSION['username']=$row['username'];
	header("location:proses-edit.php");
} else {
	echo"<script>alert('Anda Harus Login Terlebih Dahulu !!');document.location.href='login.php';</script>";
}
?>
<?php

$nim=$_POST['nim'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$id=$_POST['mahasiswa_id'];

include "koneksi.php";

$ubah=$koneksi->query("update mahasiswa set nim='$nim',nama='$nama',jenis_kelamin='$jenis_kelamin',alamat='$alamat' where mahasiswa_id='$id'");

if($ubah==true){

	header("location:tampil-mahasiswa.php?pesan=editberhasil");
} else{
	echo "Eror";
}

?>