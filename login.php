<?php

$con = mysqli_connect ("localhost", "root", "", "tugas");
mysqli_select_db ($con, "tugas");

$username = $_POST ['username'];
$password = $_POST ['password'];
$lihat = mysqli_query ($con, "select * from login where username = '$username' and password = '$password'");
$a_lihat = mysqli_fetch_array($lihat);
$r_lihat = mysqli_num_rows($lihat);

	if ($r_lihat == 0) {
		?>
			<script>
				alert("Login Gagal");
				window.location = "index.php";
			</script>
		<?php
	}
	else {
		session_start();

		if ($a_lihat['role'] == "Admin") {
			$_SESSION['username'] = $username;
			$_SESSION['id_login'] = $a_lihat['id_login'];
		?>
			<script>
				window.location = "backend/main.php";
			</script>
		<?php
		}
		
		else if ($a_lihat['role'] == "User") {
			$_SESSION['username'] = $username;
			$_SESSION['id_login'] = $a_lihat['id_login'];
		?>
			<script>
				window.location = "main.php";
			</script>
		<?php
		}
	}
?>