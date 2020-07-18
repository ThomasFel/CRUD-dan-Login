<?php
	$con = mysqli_connect ("localhost", "root", "", "tugas");
	mysqli_select_db ($con, "tugas");
	
	$nama = $_POST['nama'];
	$nomor_induk = $_POST['nomor_induk'];
	$nisn =$_POST['nisn'];
	$alamat = $_POST['alamat'];
	$agama = $_POST['agama'];
	$sekolah = $_POST['sekolah'];

	$masuk = mysqli_query ($con, "insert into siswa(nama, nomor_induk, nisn, alamat, agama, sekolah) values('$nama', '$nomor_induk', '$nisn', '$alamat', '$agama', '$sekolah')");
	
	if ($masuk) {
		?>
			<script>
				alert("Berhasil");
				window.location = "main.php";
			</script>
		<?php
	}
	else {
		?>
			<script>
				alert("<?php echo mysql_error(); ?>");
				window.location = "main.php";
			</script>
		<?php
	}