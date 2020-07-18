<?php
	session_start();
	unset($_SESSION['id_login']);
	session_destroy();
	header('location:index.php');
?>