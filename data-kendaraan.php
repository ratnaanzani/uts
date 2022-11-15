<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DATA KENDARAAN</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/plugins/datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
	<link href="bootstrap/plugins/datatable/style.css" rel="stylesheet">
</head>
<body>
	<style>
		body{
		background-repeat:no-repeat;
		background-size:cover;
		background-color:#f9dfdf;
}
	.navbar-inverse{
		background-color:#27605a;
		font-family:cursive;
		font-size:18px;

	}

		ul.nav-pills {
					top: 200px;
					position: fixed;
			}
		div.col-sm-8 div {
					height: 500px;
					font-size: 18px;
					padding: 30px;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">	
		<h3>Data Kendaraan</h3>
<?php

if(@$_GET['pesan']=="inputberhasil"){

?>
		<div class="alert alert-success">
					Penyimpanan Berhasil!
			</div>
<?php
}
?>
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="list">					
			<table id="data-table" class="table table-bordered table-striped table-hover js-basic-example">
				<thead>
					<tr>
					<th></th>
					<th>ID PELANGAAN</th>
					<th>NAMA PELANGGAN</th>
					<th>KODE BARANG</th>
					<th>NAMA BARANG</th>
					<th>TAHUN BARANG</th>
					<th>ALAMAT</th>
					<th>TENOR</th>
					<th>
	
					<a href ="tambah.php">
						<center><button type="add" name="btnAdd" class="btn btn-info">
							<span class=" glyphicon glyphicon-plus-sign"></span>Add
						</button></a></center></th>
					</tr>
				</thead>
				
			<?php
			include "koneksi.php";
			$sql=$koneksi->query("select * from datakendaraan order by id_pelanggan ASC");

			while($row= $sql->fetch_assoc()){
			?>
					
			<td>
				<td><?php echo $row['id_pelanggan']?></td>
				<td><?php echo $row['nama_pelanggan']?> </td>
				<td><?php echo $row['kode_barang']?></td>
				<td><?php echo $row['nama_barang']?></td>
				<td><?php echo $row['tahun_barang']?> </td>
				<td><?php echo $row['alamat']?></td>
				<td><?php echo $row['tenor']?></td>
				<td>

				<center><a href ="hapus.php? id_pelanggan=<?php echo $row ['id_pelanggan']?>" onclick="return confirm('apakah kamu yakin  menghapus data ini?')">
				<button type="trash" name="btndrop" class="btn btn-xs btn-danger">
				<span class="glyphicon glyphicon-trash"></span>Hapus</button>

				<a href="edit.php? id_pelanggan=<?php echo $row['id_pelanggan']?>"
				<button type="trash" name="btnedit" class="btn btn-xs btn-warning">
				<span class="glyphicon glyphicon-edit"></span>- Edit</button></a></a></td>
			</tr></center>

<?php
}
?>	
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>
<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/plugins/datatable/jquery.dataTables.js"></script>
<script src="bootstrap/plugins/datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="bootstrap/plugins/datatable/extensions/tables/jquery-datatable.js"></script>
<script src="bootstrap/plugins/datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="bootstrap/plugins/datatable/extensions/export/buttons.flash.min.js"></script>
<script src="bootstrap/plugins/datatable/extensions/export/jszip.min.js"></script>
<script src="bootstrap/plugins/datatable/extensions/export/pdfmake.min.js"></script>
<script src="bootstrap/plugins/datatable/extensions/export/vfs_fonts.js"></script>
<script src="bootstrap/plugins/datatable/extensions/export/buttons.html5.min.js"></script>
<script src="bootstrap/plugins/datatable/extensions/export/buttons.print.min.js"></script>
</body>
</html>