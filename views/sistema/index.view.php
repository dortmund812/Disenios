<!DOCTYPE html>
<html lang="es">
<head>
	<!-- META -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- LINK -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="<?php echo RUTA; ?>css/SI/sistema/sistema.css">
	<link rel="stylesheet" href="<?php echo RUTA; ?>css/SI/sistema/index.css">
	<!-- TITULO -->
	<title><?php echo ENTIDAD; ?> - Login</title>
</head>
<body>
	<!-- LOADER -->
	<div class="preloader active" id="preloader">
		<div class="loader">
			<div class="lineLoad bar1"></div>
			<div class="lineLoad bar2"></div>
			<div class="lineLoad bar3"></div>
			<div class="lineLoad bar4"></div>
			<div class="lineLoad bar5"></div>
			<div class="lineLoad bar6"></div>
			<div class="lineLoad bar7"></div>
			<div class="lineLoad bar8"></div>
		</div>
	</div>
	<img class="wave" src="img/index/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/index/bg.svg">
		</div>
		<div class="login-container">
			<form action="" id="form">
				<img class="avatar" src="img/index/avatar.svg">
				<h2>Welcome</h2>
				<!-- CORREO -->
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div>
						<h5>Username</h5>
						<input type="text" class="input" required="true" autocomplete="off">
					</div>
				</div>
				<!-- PASSWORD -->
				<div class="input-div two">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div>
						<h5>Password</h5>
						<input type="password" class="input" required="true" autocomplete="off">
					</div>
				</div>
				<input type="submit" class="btn" value="Login" id="login">
				<a href="#">¿Olvidaste la contraseña?</a>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="js/Bootstrap/jquery-3.2.1.min.js"></script>
	<script src="js/SI/sistema/index.js"></script>
</body>
</html>