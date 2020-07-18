<?php
$con = mysqli_connect ("localhost", "root", "", "tugas");
mysqli_select_db ($con, "tugas");

$id = $_GET['id'];

$delete= mysqli_query($con, "delete from siswa where id_siswa = '$id'");
if ($delete) {
	?>
		<script>
			alert("Data Telah Dihapus");
			window.location = "main.php";
		</script>
	<?php
}
else {
	?>
		<script>
			alert("Gagal Menghapus");
			window.location = "main.php";
		</script>
	<?php
}
?>