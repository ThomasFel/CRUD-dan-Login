<?php
	$con = mysqli_connect ("localhost", "root", "", "osis");
	mysqli_select_db ($con, "osis");
	
	$nama = $_POST['nama'];
	$nomor_induk = $_POST['nomor_induk'];
	$kelas = $_POST['kelas'];
			$tambah = mysqli_query ($con, "insert into user(nama, nomor_induk, kelas) values('$nama', '$nomor_induk', '$kelas')"); 
			if ($tambah) {
				?>
					<script>
						alert("Berhasil ditambahkan");
						window.location = "tambah.php";
					</script>
				<?php
			}
			else {
				?>
					<script>
						alert("<?php echo mysql_error(); ?>");
						window.location = "tambah.php";
					</script>
				<?php
			}
?>