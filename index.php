<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Login </title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="stylesheet" href="login/css/reset.min.css">
		<link rel='stylesheet prefetch' href='login/css/font1.css'>
		<link rel='stylesheet prefetch' href='login/css/font2.css'>
		<link rel='stylesheet prefetch' href='login/css/font-awesome.min.css'>
		<link rel="stylesheet" href="login/css/style.css">
		<link href="font/style.css" rel="stylesheet" type="text/css">
		<link rel="icon" type="image/png" href="backend/benar2.png">
	</head>
		<body>
			<div class="container">
				<div class="info">
					<h1 class="aero_matics">Login</h1>
				</div>
			</div>
			<div class="form">
				<div class="thumbnail">
					<img src="backend/benar1.png"/>
				</div>
				  <form class="login-form" method="POST" action="login.php">
					<input type="text" placeholder="Masukkan Username" name="username" required="required" class="arsenal">
					</input>
					<span class="focus-input"></span>
					<input type="password" placeholder="Masukkan Password" name="password" required="required" value="" class="arsenal"> </input>
					<button class="arsenal">Login</button>
				  </form>
			</div>
			<script src='login/js/jquery.min.js'></script>
			<script src="login/js/index.js"></script>
		</body>
</html>