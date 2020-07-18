<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Tambah User </title>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="">
			<meta name="author" content="">
			<link rel="icon" type="image/png" href="benar2.png">
			<link href="../css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
			<link href="../css/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
			<link href="../css/dist/css/sb-admin-2.css" rel="stylesheet">
			<link href="../css/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
			<link href="font/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<h3 class="modal-title kg_blank_space" id="myModalLabel">Tambah User</h3>
		<form method="POST" action="user.php" enctype="multipart/form-data">
			<table class="arsenal">
				<tr style="height:10px">
				<tr>
					<td style="width:150px"> Nama </td>
					<td style="width:10px"> : </td>
					<td>
					<input class="form-control" name="nama" placeholder="Masukkan nama" required="required" style="width:700px;"> </input>
					</td>
				</tr>
				<tr style="height:10px">
				</tr>
				<tr>
					<td style="width:150px"> Nomor Induk </td>
					<td style="width:10px"> : </td>
					<td>
					<input class="form-control" name="nomor_induk" placeholder="Masukkan nomor induk" required="required" style="width:700px;"> </input>
					</td>
				</tr>
					<label>Kelas</label>
						<select name="kelas" class="form-control">
							<option value="X1">X1</option>
							<option value="X2">X2</option>
							<option value="X3">X3</option>
							<option value="X4">X4</option>
						</select>
				<tr>
					<td>
					<button type="submit" class="btn btn-default">Simpan</button>
					</td>
				</tr>
			</table>
		</form>
		<script src="../css/vendor/jquery/jquery.min.js"></script>
		<script src="../css/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="../css/vendor/metisMenu/metisMenu.min.js"></script>
		<script src="../css/dist/js/sb-admin-2.js"></script>
		<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
	</body>
</html>