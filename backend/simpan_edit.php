<?php
	$con = mysqli_connect ("localhost", "root", "", "tugas");
	mysqli_select_db ($con, "tugas");
	
	$nama = $_POST['nama'];
	$id = $_POST['id_siswa'];
	$nomor_induk = $_POST['nomor_induk'];
	$nisn =$_POST['nisn'];
	$alamat = $_POST['alamat'];
	$agama = $_POST['agama'];
	$sekolah = $_POST['sekolah'];
	
	//JIKA UBAH DATA
	$edit = mysqli_query ($con, "update siswa set nama = '$nama', nomor_induk = '$nomor_induk', nisn = '$nisn', alamat = '$alamat', agama = '$agama', sekolah = '$sekolah' where id_siswa = '$id'"); 
	if ($edit) {
		?>
			<script>
				alert("Edit Berhasil");
				window.location = "main.php";
			</script>
		<?php
	}
	else {
		echo mysqli_error();
	}
?>