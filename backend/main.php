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
					<title> Database Siswa Kelas XII-4 SMA Negeri 1 Bojonegoro </title>
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
						<link href="../css/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
						<link href="../css/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
						<link href="../font/style.css" rel="stylesheet" type="text/css">
				</head>
				<body>
				<div class="loader">
				<div id="page-wrapper" style="margin:0px 0px 0px 0px">
					<div class="row">
						<div class="col-lg-12">
							<h1 class="page-header kg_blank_space">Input Data
							<a href="../logout.php" style="float:right; margin:20px 0px 0px 0px; font-size:15px" class="kg_blank_space"> <i class="fa fa-sign-out fa-fw"></i> Logout </a> </h1>
						</div>
					</div>
					<button type="button" class="btn btn-success btn-lg kg_blank_space" data-toggle="modal" data-target="#myModal">Tambah Data Siswa Baru</button>
					<button style="margin-left: 10px" type="button" class="btn btn-success btn-lg kg_blank_space" data-toggle="modal" data-target="#myModal2">Tambah Data Akun Admin/User Baru</button>
						<center style="margin-top: 40px">
						<h2 class="d3_streetism">Database Siswa Kelas XII-4 SMA Negeri 1 Bojonegoro
						</center>
						<div class="panel-body" style="margin-top: 60px">
							<div class="table-responsive">
								<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead class="kautiva" style="background:#337ab7;color:#fff">
										<tr>
											<th style="width:220px; font-size: 15px" > Nama Lengkap </th>
											<th style="width:110px; font-size: 15px"> Nomor Induk </th>
											<th style="width:110px; font-size: 15px"> NISN </th>
											<th style="width:220px; font-size: 15px"> Alamat </th>
											<th style="width:110px; font-size: 15px"> Agama </th>
											<th style="width:160px; font-size: 15px"> Sekolah Asal </th>
											<th style="width:110px; font-size: 15px"> Tindakan </th>
									</thead>
									<tbody class="kautiva">
										<?php
											$con = mysqli_connect ("localhost", "root", "", "tugas");
											mysqli_select_db ($con, "tugas");
											
											$siswa = mysqli_query($con, "select * from siswa");
											while ($a_siswa = mysqli_fetch_array ($siswa)) {
										?>
										<tr>
											<td style="text-align:justify; font-size: 15px"> <?php echo $a_siswa['nama'] ?> </td>
											<td style="text-align:justify; font-size: 15px"> <?php echo $a_siswa['nomor_induk'] ?> </td>
											<td style="text-align:justify; font-size: 15px"> <?php echo $a_siswa['nisn'] ?> </td>
											<td style="text-align:justify; font-size: 15px"> <?php echo $a_siswa['alamat'] ?> </td>
											<td style="text-align:justify; font-size: 15px"> <?php echo $a_siswa['agama'] ?> </td>
											<td style="text-align:justify; font-size: 15px"> <?php echo $a_siswa['sekolah'] ?> </td>
											<td>
											<button onclick="window.location='edit.php?id=<?php echo $a_siswa['id_siswa']?>'" type="button" class="btn btn-success btn-circle"> <i class="fa fa-edit"></i> </button>
											<button onclick="javascript:var e=confirm('Yakin ingin hapus?');if (e == true) window.location='hapus.php?id=<?php echo $a_siswa['id_siswa']?>';else return false" type="button" class="btn btn-danger btn-circle"> <i class="fa fa-trash"></i> </button>
											</td>
										<?php
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog" style="width:1000px">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h3 class="modal-title kg_blank_space" id="myModalLabel">Form Input Data Siswa</h3>
								</div>
								<div class="modal-body">
									<form method="POST" action="siswa.php" enctype="multipart/form-data">
											<table class="arsenal">
												<tr style="height:10px">
												<tr>
													<td style="width:150px; font-size: 15px"> Nama Lengkap </td>
													<td style="width:10px; font-size: 15px"> : </td>
													<td>
													<input class="form-control" name="nama" placeholder="Masukkan nama lengkap" required="required" style="width:700px; font-size: 15px"> </input>
													</td>
												</tr>
												<tr style="height:10px">
												</tr>
												<tr>
													<td style="width:150px; font-size: 15px"> Nomor Induk </td>
													<td style="width:10px; font-size: 15px"> : </td>
													<td>
												<input class="form-control" name="nomor_induk" placeholder="Masukkan nomor induk" required="required" style="width:700px; font-size: 15px"> </input>
													</td>
												</tr>
												<tr style="height:10px">
												</tr>
												<tr>
													<td style="width:150px; font-size: 15px"> NISN </td>
													<td style="width:10px; font-size: 15px"> : </td>
													<td>
												<input class="form-control" name="nisn" placeholder="Masukkan NISN" required="required" style="width:700px; font-size: 15px"> </input>
													</td>
												</tr>
												<tr style="height:10px">
												</tr>
												<tr>
													<td style="width:150px; font-size: 15px"> Alamat </td>
													<td style="width:10px; font-size: 15px"> : </td>
													<td>
													<textarea style="height:100px;resize:none" class="form-control" name="alamat" rows="3" required="required" style="width:700px; font-size: 15px"></textarea>
													</td>
												</tr>
												<tr style="height:10px">
												</tr>
												<tr>
													<td style="width:150px; font-size: 15px"> Agama </td>
													<td style="width:10px; font-size: 15px"> : </td>
													<td>
													<input class="form-control" name="agama" placeholder="Masukkan agama" required="required" style="width:700px; font-size: 15px"> </input>
													</td>
												</tr>
												<tr style="height:10px">
												</tr>
												<tr>
													<td style="width:150px; font-size: 15px"> Sekolah Asal </td>
													<td style="width:10px; font-size: 15px"> : </td>
													<td>
													<input class="form-control" name="sekolah" placeholder="Masukkan sekolah asal" required="required" style="width:700px; font-size: 15px"> </input>
													</td>
												</tr>
												<tr style="height:30px">
												</tr>
												<tr>
													<td>
													<button type="submit" class="btn btn-default" style="font-size: 15px">Simpan</button>
													</td>
												</tr>
											</table>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog" style="width:1000px">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h3 class="modal-title kg_blank_space" id="myModalLabel">Form Input Data Akun Admin/User</h3>
								</div>
								<div class="modal-body">
									<form method="POST" action="admin.php" enctype="multipart/form-data">
											<table class="arsenal">
												<tr style="height:10px">
												<tr>
													<td style="width:150px; font-size: 15px"> Username </td>
													<td style="width:10px; font-size: 15px"> : </td>
													<td>
													<input class="form-control" type="text" name="username" placeholder="Masukkan username" required="required" style="width:700px; font-size: 15px"> </input>
													</td>
												</tr>
												<tr style="height:10px">
												</tr>
												<tr>
													<td style="width:150px; font-size: 15px"> Password </td>
													<td style="width:10px; font-size: 15px"> : </td>
													<td>
												<input class="form-control" type="password" name="password" placeholder="Masukkan password" required="required" style="width:700px; font-size: 15px"> </input>
													</td>
												</tr>
												<tr style="height:10px">
												</tr>
												<tr>
													<td style="width:150px; font-size: 15px"> Role </td>
													<td style="width:10px; font-size: 15px"> : </td>
													<td>
														<select class="form-control" name="role" style="width:700px; font-size: 15px" required="required">
			                                                <option>Admin</option>
			                                                <option>User</option>
                                            			</select>
                                            		</td>
												</tr>
												<tr style="height:30px">
												</tr>
												<tr>
													<td>
													<button type="submit" class="btn btn-default" style="font-size: 15px">Simpan</button>
													</td>
												</tr>
											</table>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
				<script src="../css/vendor/jquery/jquery.min.js"></script>
				<script src="../css/vendor/bootstrap/js/bootstrap.min.js"></script>
				<script src="../css/vendor/metisMenu/metisMenu.min.js"></script>
				<script src="../css/dist/js/sb-admin-2.js"></script>
				<script src="../css/vendor/datatables/js/jquery.dataTables.min.js"></script>
    			<script src="../css/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    			<script src="../css/vendor/datatables-responsive/dataTables.responsive.js"></script>
    			<script>
				    $(document).ready(function() {
				        $('#dataTables-example').DataTable({
				            responsive: true
				        });
				    });
			    </script>
			</html>
		<?php
	}
?>