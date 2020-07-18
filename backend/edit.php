<?php
	session_start();
	if (empty ($_SESSION['id_login'])) {
		?>
			<script>
				alert("Anda harus login terlebih dahulu");
				window.location = "../index.php";
			</script>
		<?php
	}
	else {
		?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Input Data Siswa </title>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="">
			<meta name="author" content="">
			<link href="../css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
			<link href="../css/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
			<link href="../css/dist/css/sb-admin-2.css" rel="stylesheet">
			<link href="../css/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
			<link href="font/style.css" rel="stylesheet" type="text/css">
			<link rel="icon" type="image/png" href="benar2.png">
	</head>
		<body>
			<div class="loader">
			<div id="page-wrapper" style="margin:0px 0px 0px 0px">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header kg_blank_space">Database Siswa Kelas XII-4 SMA Negeri 1 Bojonegoro
						<a href="main.php" style="float:right;margin:20px 0px 0px 0px;font-size:15px"> <i class="fa fa-home fa-fw"></i> Kembali </a> </h1>
					</div>
				</div>
				<div style="margin:0px 0px 0px 10px">
				<div class="panel panel-default" style="width:1260px;">
					<div class="panel-heading kg_blank_space">
						Edit Data Siswa
					</div>
				<form method="POST" action="simpan_edit.php" enctype="multipart/form-data">
					<div class="panel panel-body arsenal">
						<div class="row">
								<?php
									$con = mysqli_connect ("localhost", "root", "", "tugas");
									mysqli_select_db ($con, "tugas");

									$lihat = mysqli_query($con, "select * from siswa where id_siswa='$_GET[id]'");
									$a_lihat = mysqli_fetch_array ($lihat);
								?>
							<div style="float:left;margin:0px 0px 0px 30px">
								<div class="form-group">
									<label>Nama Lengkap</label>
										<input class="form-control" name="nama" value="<?php echo $a_lihat['nama']?>" style="width:300px"></input>
										<input class="form-control" type="hidden" name="id_siswa" value="<?php echo $a_lihat['id_siswa']?>"></input>
								</div>
								<div class="form-group">
									<label>Nomor Induk</label>
										<input class="form-control" name="nomor_induk" value="<?php echo $a_lihat['nomor_induk']?>" style="width:300px"></input>
								</div>
								<div class="form-group">
									<label>NISN</label>
										<input class="form-control" name="nisn" value="<?php echo $a_lihat['nisn']?>" style="width:300px"></input>
								</div>
								<div style="width:500px">
									<div class="form-group">
										<label>Alamat</label>
											<textarea class="form-control" name="alamat" rows="3"><?php echo $a_lihat['alamat']?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label>Agama</label>
										<input class="form-control" name="agama" value="<?php echo $a_lihat['agama']?>" style="width:300px"></input>
								</div>
								<div class="form-group">
									<label>Sekolah</label>
										<input class="form-control" name="sekolah" value="<?php echo $a_lihat['sekolah']?>" style="width:300px"></input>
								</div>
								<div style="margin-top: 30px">
									<button type="submit" class="btn btn-default">Simpan</button>
								</div>
							</div>
						</div>
					</div>
				</form>
				</div>
				</div>
			</div>
			</div>
			<script src="../css/vendor/jquery/jquery.min.js"></script>
			<script src="../css/vendor/bootstrap/js/bootstrap.min.js"></script>
			<script src="../css/vendor/metisMenu/metisMenu.min.js"></script>
			<script src="../css/dist/js/sb-admin-2.js"></script>
			<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
		</body>
</html>
		<?php
	}
?>