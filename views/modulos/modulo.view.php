<!DOCTYPE html>
<html lang="es">
<head>
	<!-- META -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- LINK -->
	<link rel="stylesheet" href="<?php echo RUTA; ?>css/Bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo RUTA; ?>css/SI/sistema/fuentes.css">
	<link rel="stylesheet" href="<?php echo RUTA; ?>css/SI/sistema/sistema.css">
	<link rel="stylesheet" href="<?php echo RUTA; ?>css/SI/modulos/modulo.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="<?php echo RUTA; ?>css/icomoonss/style.css">
	<!-- TITULO -->
	<title><?php echo TITULO; ?> - <?php echo $_SESSION['rol']; ?></title>
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
	<!-- CONTENEDOR DE NOTIFICACIONES -->
	<div class="contenedor-notif">
		<div class="contenido-notif">
			<!-- CONTENEDOR OPCIONES MENU -->
			<div class="menu-notif">
				<div class="cont-men-not">
					<!-- TITULAR NOTIFICACIONES -->
					<div class="titular-notif">
						<p class="titulo-notif-mnu">Notificaciones</p>
						<i class="fas fa-times" id="cerrar_notificaciones"></i>
					</div>
					<!-- MENU DE OPCIONES -->
					<nav class="opc-mnu">
						<!-- NOTIFICACIONES USUARIO -->
						<?php echo $notificaciones; ?>
					</nav>
					<!-- FOOTER NOTIFICACIONES -->
					<div class="foot-not">
						<i class="icon-css3"></i>
						<i class="icon-html5"></i>
						<i class="icon-javascript"></i>
						<i class="icon-adobeillustrator"></i>
						<i class="icon-bootstrap"></i>
						<i class="icon-sublimetext"></i>
						<i class="icon-php"></i>
					</div>
				</div>
			</div>
			<!-- ALERTAS -->
			<div class="seccion-notif" id="notificaciones">
				Notificaciones.
			</div>
			<!-- ALERTAS -->
			<div class="seccion-notif" id="misNotificaciones">
				Mis notificaciones.
			</div>
			<!-- ALERTAS -->
			<div class="seccion-notif" id="alertas">
				alertas.
			</div>
			<!-- ALERTAS -->
			<div class="seccion-notif" id="correos">
				correos.
			</div>
			<!-- ALERTAS -->
			<div class="seccion-notif" id="opcion">
				Opción disponible para proximas actualizaciones.
			</div>
		</div>
	</div>
	<!-- PANTALLA PRINCIPAL -->
	<div class="container-fluid">
		<div class="row cont-tot">
			<!-- MENU LATERAL -->
			<div class="barra-lateral col-12 col-sm-auto">
				<div class="toolmenu">
					<i id="toolicon"></i> <span id="tooltitle">Prueba</span>
				</div>
				<div class="cont-bar-lat">
					<!-- TITULAR -->
					<div class="titular">
						<h1></h1>
					</div>
					<!-- USUARIO LATERAL -->
					<div class="usrLat">
						<!-- IMAGEN DE USUARIO -->
						<div class="imgUstLat">
							<img src="<?php echo $accesos['imgUser']; ?>usr1.png" alt="" class="imgUsrLatInt usrImgJson">
						</div>
						<!-- DESCRIPCION USUARIO -->
						<div class="descrUser">
							<h5 class="rol-cliente">User</h5>
							<p class="nombre-usuario">User Name</p>
						</div>
					</div>
					<!-- MENU LATERAL -->
					<nav class="menu-lateral-princ">
						<!-- OPCINES ENLACES -->
						<?php echo $enlaces; ?>
					</nav>
				</div>
			</div>
			<!-- CONTENIDO PRINCIPAL -->
			<div class="contenido-central col p-0">
				<!-- BARRA SUPERIOR -->
				<div class="barra-superior">
					<!-- TOGGLE BARRA LATERAL -->
					<div class="tglBarLat">
						<i class="fas fa-angle-double-left togBarLat"></i>
						<!-- <i class="fas fa-bars togBarLat"></i> -->
					</div>
					<!-- NOTIFICACIONES -->
					<div class="notifBarSup">
						<!-- USUARIO -->
						<div class="usuario">
							<a href="#" class="useLnk">
								<span class="nombre-usuario">User Name</span>
								<span class="imagen-usuario">
									<img src="<?php echo $accesos['imgUser']; ?>usr1.png" alt="" id="usrBarSup" class="usrImgJson">
								</span>
							</a>
						</div>
						<!-- NOTIFICACIONES -->
						<div class="notBarSup">
							<i class="far fa-bell" id="notifBarSupIc"></i>
						</div>
						<!-- SALIR -->
						<div class="notBarSup">
							<a href="<?php echo RUTA; ?>config/cerrarSesion"><i class="far fa-power-off" id="homeBarSupIc"></i></a>
						</div>
					</div>
				</div>
				<!-- CONTENIDO CENTRAL -->
				<div class="contCentFrm">
					<iframe id="principal" title="principal" name="principal" class="w-100" height="100%" src="" frameborder="0"></iframe>
				</div>
			</div>
		</div>
	</div>
	<!-- SCRIPTS BOOTSTRAP -->
	<script src="<?php echo RUTA; ?>js/Bootstrap/jquery-3.2.1.min.js"></script>
	<script src="<?php echo RUTA; ?>js/Bootstrap/popper.min.js"></script>
	<script src="<?php echo RUTA; ?>js/Bootstrap/bootstrap.min.js"></script>
	<!-- SCRIPTS ADICIONALES -->
	<script src="<?php echo RUTA; ?>js/SI/modulos/modulo.js"></script>
</body>
</html>