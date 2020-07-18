<?php
	$con = mysqli_connect ("localhost", "root", "", "tugas");
	mysqli_select_db ($con, "tugas");
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$role = $_POST['role'];

	$masuk = mysqli_query ($con, "insert into login(username, password, role) values('$username', '$password', '$role')");
	
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