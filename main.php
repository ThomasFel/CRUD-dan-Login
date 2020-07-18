<?php
	session_start();
	if (empty ($_SESSION['id_login'])) {
		?>
			<script>
				alert("Anda harus login terlebih dahulu");
				window.location = "index.php";
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
						<link href="css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
						<link href="css/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
						<link href="css/dist/css/sb-admin-2.css" rel="stylesheet">
						<link href="css/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
						<link href="css/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
						<link href="css/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
						<link href="font/style.css" rel="stylesheet" type="text/css">
				</head>
				<body>
				<div class="loader">
				<div id="page-wrapper" style="margin:0px 0px 0px 0px">
					<div class="row">
						<div class="col-lg-12">
							<h1 class="page-header kg_blank_space">Database
							<a href="logout.php" style="float:right; margin:20px 0px 0px 0px; font-size:15px" class="kg_blank_space"> <i class="fa fa-sign-out fa-fw"></i> Logout </a> </h1>
						</div>
					</div>
						<center style="margin-top: 40px">
						<h2 class="d3_streetism">Siswa Kelas XII-4 SMA Negeri 1 Bojonegoro
						</center>
						<div class="panel-body" style="margin-top: 60px">
							<div class="table-responsive">
								<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead class="kautiva" style="background:#337ab7; color:#fff">
										<tr>
											<th style="width:220px; font-size: 15px" > Nama Lengkap </th>
											<th style="width:110px; font-size: 15px"> Nomor Induk </th>
											<th style="width:110px; font-size: 15px"> NISN </th>
											<th style="width:220px; font-size: 15px"> Alamat </th>
											<th style="width:110px; font-size: 15px"> Agama </th>
											<th style="width:160px; font-size: 15px"> Sekolah Asal </th>
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
										<?php
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
				</div>
				</div>
				<script src="css/vendor/jquery/jquery.min.js"></script>
				<script src="css/vendor/bootstrap/js/bootstrap.min.js"></script>
				<script src="css/vendor/metisMenu/metisMenu.min.js"></script>
				<script src="css/dist/js/sb-admin-2.js"></script>
				<script src="css/vendor/datatables/js/jquery.dataTables.min.js"></script>
    			<script src="css/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    			<script src="css/vendor/datatables-responsive/dataTables.responsive.js"></script>
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