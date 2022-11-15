<!doctype HTML>
<html>
<head>
	<title>INPUT KENDARAAN</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<center><h3> <b>Input Data Kendaran</b></h3></center>
				<br>
				<form action="proses-tambah.php" method="POST">
					<div class="form-group">
						<label for="id_pelanggan">id_pelanggan</label>
						<input type="number" name="id_pelanggan" class="form-control">
					</div>

					<div class="form-group">
						<label for="nama_pelanggan">nama_pelanggan</label>
						<input type="text" name="nama_pelanggan" class="form-control">
					</div>
	
					<div class="form-group">
						<label for="kode_barang">kode_barang</label>
						<input name="kode_barang" class="form-control">
					</div>

					<div class="form-group">
						<label for="nama_barang">nama_barang</label>
						<input name="nama_barang" class="form-control">
					</div>
					<div class="form-group">
						<label for="tahun_barang">tahun_barang</label>
						<input type="number" name="tahun_barang" class="form-control">
					</div>	
					<div class="form-group">
						<label for="alamat">alamat</label>
						<textarea name="alamat" class="form-control">
						</textarea>
					</div>
					<div class="form-group">
						<label for="tenor">tenor</label>
						<input type="number" name="tenor" class="form-control">
					</div>

					<input type="submit" name="kirim" value="Simpan" class="btn btn-info">
					<input type="reset" name="kosongkan" value="kosongkan" class="btn btn-danger">

		<script src="bootstrap/js/jQuery.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>