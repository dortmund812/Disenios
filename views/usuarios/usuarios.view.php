<!DOCTYPE html>
<html lang="es">
<head>
	<!-- META -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- LINK -->
	<link rel="stylesheet" href="<?php echo RUTA; ?>css/SI/sistema/fuentes.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="<?php echo RUTA; ?>css/SI/sistema/sistema.css">
	<link rel="stylesheet" href="<?php echo RUTA; ?>css/SI/sistema/datatablescard.css">
	<!-- TITULO -->
	<title><?php echo TITULO; ?> - Usuarios</title>
</head>
<body>
	<style>
		/* =================================== VARIABLES =================================== */
		:root {
			--color-menu: #1e2635;
			--color-menu-dos: #475a6d;
			--color-menu-fuente: #fff;
		}
		/* ======================================= BODY ======================================= */
		body {
			margin: 0;
			padding: 0;
			background: #f1f1f1;
		}
		/* ================================== CONTAINER ================================== */
		.container {
			width: 100%;
			min-height: 100vh;
			padding: 1rem;
			box-sizing: border-box;
		}

		/* ================================= USER MODAL ================================= */
		.user-modal{
			position: fixed;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			width: 95%;
			height: 95%;
			background: #fff;
			padding: 10px;
			border: 2px solid var(--color-menu);
			border-radius: 5px;
			box-sizing: border-box;
			overflow: auto;
			z-index: 1000;
		}
		.contInfo{
			border: 2px solid var(--color-menu);
			border-radius: 5px;
			padding: 1.2rem 10px;
			margin-bottom: 1.2rem;
			position: relative;
		}
		.contInfo .titleContInfo{
			background: #fff;
			color: #1c1c1c;
			font-size: 1.2rem;
			margin: 0;
			padding: 0 5px;
			position: absolute;
			top: -.7rem;
			left: 1rem;
		}
		.contInfo form .input-group{
			display: flex;
			flex-wrap: wrap;
		}
		.contInfo form .input-form{
			position: relative;
			margin-top: 1.2rem;
			font-size: 1.2rem;
			margin-right: .7rem;
			box-sizing: border-box;
		}
		.contInfo form .input-form .input-form-reg{
			height: 1.2rem;
			border: none;
			background: none;
			border-bottom: 1px solid #1c1c1c;
			outline: none;
		}
		.contInfo form .input-form .lbl-inp-reg{
			position: absolute;
			bottom: 0px;
			left: 0px;
			transition: .5s ease;
		}
		.contInfo form .input-form .lbl-inp-reg.active-lbl{
			transform: translate(0, -18px);
		}
	</style>
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
	<!-- CONTENIDO -->
	<div class="container" id="container">
		<table id="datatable" class="datatable">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Rol</th>
					<th>C.C.</th>
					<th>Estado</th>
					<th>Fecha</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>12354264542</td>
					<td>Jena Chandler</td>
					<td>Administrador</td>
					<td>358244</td>
					<td>Inactivo</td>
					<td>29/03/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Audra X. Bowers</td>
					<td>Usuario</td>
					<td>755480</td>
					<td>Bloqueado</td>
					<td>23/08/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Alden G. Fischer</td>
					<td>Administrador</td>
					<td>541170</td>
					<td>Bloqueado</td>
					<td>22/11/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Myles Collier</td>
					<td>Usuario</td>
					<td>453758</td>
					<td>Bloqueado</td>
					<td>07/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Britanni Davenport</td>
					<td>Usuario</td>
					<td>172400</td>
					<td>Inactivo</td>
					<td>11/09/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Uriel Browning</td>
					<td>Administrador</td>
					<td>351991</td>
					<td>Bloqueado</td>
					<td>11/12/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Chandler M. Sanders</td>
					<td>Cliente</td>
					<td>556605</td>
					<td>Activo</td>
					<td>28/06/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Lacota W. Livingston</td>
					<td>Administrador</td>
					<td>291915</td>
					<td>Inactivo</td>
					<td>25/01/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Kuame A. Romero</td>
					<td>Usuario</td>
					<td>66442</td>
					<td>Activo</td>
					<td>03/07/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Kiayada Carlson</td>
					<td>Usuario</td>
					<td>873415</td>
					<td>Activo</td>
					<td>27/11/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Tyrone Noel</td>
					<td>Cliente</td>
					<td>879127</td>
					<td>Inactivo</td>
					<td>03/02/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Marvin Miranda</td>
					<td>Cliente</td>
					<td>51946</td>
					<td>Inactivo</td>
					<td>10/04/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Adara H. Walker</td>
					<td>Cliente</td>
					<td>22169</td>
					<td>Bloqueado</td>
					<td>08/12/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Sigourney H. Moses</td>
					<td>Administrador</td>
					<td>624078</td>
					<td>Bloqueado</td>
					<td>01/01/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Gabriel Turner</td>
					<td>Usuario</td>
					<td>999365</td>
					<td>Inactivo</td>
					<td>02/09/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Miranda Sweeney</td>
					<td>Usuario</td>
					<td>123688</td>
					<td>Bloqueado</td>
					<td>14/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Kimberly D. Quinn</td>
					<td>Usuario</td>
					<td>57068</td>
					<td>Activo</td>
					<td>06/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Simone W. Harper</td>
					<td>Usuario</td>
					<td>222693</td>
					<td>Bloqueado</td>
					<td>20/11/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Imogene Goodwin</td>
					<td>Usuario</td>
					<td>116054</td>
					<td>Activo</td>
					<td>19/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Jena Chandler</td>
					<td>Administrador</td>
					<td>358244</td>
					<td>Inactivo</td>
					<td>29/03/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Audra X. Bowers</td>
					<td>Usuario</td>
					<td>755480</td>
					<td>Bloqueado</td>
					<td>23/08/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Alden G. Fischer</td>
					<td>Administrador</td>
					<td>541170</td>
					<td>Bloqueado</td>
					<td>22/11/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Myles Collier</td>
					<td>Usuario</td>
					<td>453758</td>
					<td>Bloqueado</td>
					<td>07/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Britanni Davenport</td>
					<td>Usuario</td>
					<td>172400</td>
					<td>Inactivo</td>
					<td>11/09/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Uriel Browning</td>
					<td>Administrador</td>
					<td>351991</td>
					<td>Bloqueado</td>
					<td>11/12/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Chandler M. Sanders</td>
					<td>Cliente</td>
					<td>556605</td>
					<td>Activo</td>
					<td>28/06/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Lacota W. Livingston</td>
					<td>Administrador</td>
					<td>291915</td>
					<td>Inactivo</td>
					<td>25/01/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Kuame A. Romero</td>
					<td>Usuario</td>
					<td>66442</td>
					<td>Activo</td>
					<td>03/07/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Kiayada Carlson</td>
					<td>Usuario</td>
					<td>873415</td>
					<td>Activo</td>
					<td>27/11/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Tyrone Noel</td>
					<td>Cliente</td>
					<td>879127</td>
					<td>Inactivo</td>
					<td>03/02/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Marvin Miranda</td>
					<td>Cliente</td>
					<td>51946</td>
					<td>Inactivo</td>
					<td>10/04/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Adara H. Walker</td>
					<td>Cliente</td>
					<td>22169</td>
					<td>Bloqueado</td>
					<td>08/12/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Sigourney H. Moses</td>
					<td>Administrador</td>
					<td>624078</td>
					<td>Bloqueado</td>
					<td>01/01/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Gabriel Turner</td>
					<td>Usuario</td>
					<td>999365</td>
					<td>Inactivo</td>
					<td>02/09/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Miranda Sweeney</td>
					<td>Usuario</td>
					<td>123688</td>
					<td>Bloqueado</td>
					<td>14/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Kimberly D. Quinn</td>
					<td>Usuario</td>
					<td>57068</td>
					<td>Activo</td>
					<td>06/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Simone W. Harper</td>
					<td>Usuario</td>
					<td>222693</td>
					<td>Bloqueado</td>
					<td>20/11/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Imogene Goodwin</td>
					<td>Usuario</td>
					<td>116054</td>
					<td>Activo</td>
					<td>19/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Jena Chandler</td>
					<td>Administrador</td>
					<td>358244</td>
					<td>Inactivo</td>
					<td>29/03/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Audra X. Bowers</td>
					<td>Usuario</td>
					<td>755480</td>
					<td>Bloqueado</td>
					<td>23/08/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Alden G. Fischer</td>
					<td>Administrador</td>
					<td>541170</td>
					<td>Bloqueado</td>
					<td>22/11/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Myles Collier</td>
					<td>Usuario</td>
					<td>453758</td>
					<td>Bloqueado</td>
					<td>07/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Britanni Davenport</td>
					<td>Usuario</td>
					<td>172400</td>
					<td>Inactivo</td>
					<td>11/09/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Uriel Browning</td>
					<td>Administrador</td>
					<td>351991</td>
					<td>Bloqueado</td>
					<td>11/12/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Chandler M. Sanders</td>
					<td>Cliente</td>
					<td>556605</td>
					<td>Activo</td>
					<td>28/06/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Lacota W. Livingston</td>
					<td>Administrador</td>
					<td>291915</td>
					<td>Inactivo</td>
					<td>25/01/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Kuame A. Romero</td>
					<td>Usuario</td>
					<td>66442</td>
					<td>Activo</td>
					<td>03/07/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Kiayada Carlson</td>
					<td>Usuario</td>
					<td>873415</td>
					<td>Activo</td>
					<td>27/11/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Tyrone Noel</td>
					<td>Cliente</td>
					<td>879127</td>
					<td>Inactivo</td>
					<td>03/02/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Marvin Miranda</td>
					<td>Cliente</td>
					<td>51946</td>
					<td>Inactivo</td>
					<td>10/04/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Adara H. Walker</td>
					<td>Cliente</td>
					<td>22169</td>
					<td>Bloqueado</td>
					<td>08/12/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Sigourney H. Moses</td>
					<td>Administrador</td>
					<td>624078</td>
					<td>Bloqueado</td>
					<td>01/01/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Gabriel Turner</td>
					<td>Usuario</td>
					<td>999365</td>
					<td>Inactivo</td>
					<td>02/09/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Miranda Sweeney</td>
					<td>Usuario</td>
					<td>123688</td>
					<td>Bloqueado</td>
					<td>14/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Kimberly D. Quinn</td>
					<td>Usuario</td>
					<td>57068</td>
					<td>Activo</td>
					<td>06/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Simone W. Harper</td>
					<td>Usuario</td>
					<td>222693</td>
					<td>Bloqueado</td>
					<td>20/11/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Imogene Goodwin</td>
					<td>Usuario</td>
					<td>116054</td>
					<td>Activo</td>
					<td>19/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Jena Chandler</td>
					<td>Administrador</td>
					<td>358244</td>
					<td>Inactivo</td>
					<td>29/03/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Audra X. Bowers</td>
					<td>Usuario</td>
					<td>755480</td>
					<td>Bloqueado</td>
					<td>23/08/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Alden G. Fischer</td>
					<td>Administrador</td>
					<td>541170</td>
					<td>Bloqueado</td>
					<td>22/11/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Myles Collier</td>
					<td>Usuario</td>
					<td>453758</td>
					<td>Bloqueado</td>
					<td>07/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Britanni Davenport</td>
					<td>Usuario</td>
					<td>172400</td>
					<td>Inactivo</td>
					<td>11/09/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Uriel Browning</td>
					<td>Administrador</td>
					<td>351991</td>
					<td>Bloqueado</td>
					<td>11/12/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Chandler M. Sanders</td>
					<td>Cliente</td>
					<td>556605</td>
					<td>Activo</td>
					<td>28/06/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Lacota W. Livingston</td>
					<td>Administrador</td>
					<td>291915</td>
					<td>Inactivo</td>
					<td>25/01/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Kuame A. Romero</td>
					<td>Usuario</td>
					<td>66442</td>
					<td>Activo</td>
					<td>03/07/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Kiayada Carlson</td>
					<td>Usuario</td>
					<td>873415</td>
					<td>Activo</td>
					<td>27/11/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Tyrone Noel</td>
					<td>Cliente</td>
					<td>879127</td>
					<td>Inactivo</td>
					<td>03/02/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Marvin Miranda</td>
					<td>Cliente</td>
					<td>51946</td>
					<td>Inactivo</td>
					<td>10/04/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Adara H. Walker</td>
					<td>Cliente</td>
					<td>22169</td>
					<td>Bloqueado</td>
					<td>08/12/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Sigourney H. Moses</td>
					<td>Administrador</td>
					<td>624078</td>
					<td>Bloqueado</td>
					<td>01/01/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Gabriel Turner</td>
					<td>Usuario</td>
					<td>999365</td>
					<td>Inactivo</td>
					<td>02/09/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Miranda Sweeney</td>
					<td>Usuario</td>
					<td>123688</td>
					<td>Bloqueado</td>
					<td>14/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Kimberly D. Quinn</td>
					<td>Usuario</td>
					<td>57068</td>
					<td>Activo</td>
					<td>06/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Simone W. Harper</td>
					<td>Usuario</td>
					<td>222693</td>
					<td>Bloqueado</td>
					<td>20/11/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Imogene Goodwin</td>
					<td>Usuario</td>
					<td>116054</td>
					<td>Activo</td>
					<td>19/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Jena Chandler</td>
					<td>Administrador</td>
					<td>358244</td>
					<td>Inactivo</td>
					<td>29/03/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Audra X. Bowers</td>
					<td>Usuario</td>
					<td>755480</td>
					<td>Bloqueado</td>
					<td>23/08/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Alden G. Fischer</td>
					<td>Administrador</td>
					<td>541170</td>
					<td>Bloqueado</td>
					<td>22/11/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Myles Collier</td>
					<td>Usuario</td>
					<td>453758</td>
					<td>Bloqueado</td>
					<td>07/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Britanni Davenport</td>
					<td>Usuario</td>
					<td>172400</td>
					<td>Inactivo</td>
					<td>11/09/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Uriel Browning</td>
					<td>Administrador</td>
					<td>351991</td>
					<td>Bloqueado</td>
					<td>11/12/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Chandler M. Sanders</td>
					<td>Cliente</td>
					<td>556605</td>
					<td>Activo</td>
					<td>28/06/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Lacota W. Livingston</td>
					<td>Administrador</td>
					<td>291915</td>
					<td>Inactivo</td>
					<td>25/01/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Kuame A. Romero</td>
					<td>Usuario</td>
					<td>66442</td>
					<td>Activo</td>
					<td>03/07/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Kiayada Carlson</td>
					<td>Usuario</td>
					<td>873415</td>
					<td>Activo</td>
					<td>27/11/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Tyrone Noel</td>
					<td>Cliente</td>
					<td>879127</td>
					<td>Inactivo</td>
					<td>03/02/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Marvin Miranda</td>
					<td>Cliente</td>
					<td>51946</td>
					<td>Inactivo</td>
					<td>10/04/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Adara H. Walker</td>
					<td>Cliente</td>
					<td>22169</td>
					<td>Bloqueado</td>
					<td>08/12/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Sigourney H. Moses</td>
					<td>Administrador</td>
					<td>624078</td>
					<td>Bloqueado</td>
					<td>01/01/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Gabriel Turner</td>
					<td>Usuario</td>
					<td>999365</td>
					<td>Inactivo</td>
					<td>02/09/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Miranda Sweeney</td>
					<td>Usuario</td>
					<td>123688</td>
					<td>Bloqueado</td>
					<td>14/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Kimberly D. Quinn</td>
					<td>Usuario</td>
					<td>57068</td>
					<td>Activo</td>
					<td>06/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Simone W. Harper</td>
					<td>Usuario</td>
					<td>222693</td>
					<td>Bloqueado</td>
					<td>20/11/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Imogene Goodwin</td>
					<td>Usuario</td>
					<td>116054</td>
					<td>Activo</td>
					<td>19/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Jena Chandler</td>
					<td>Administrador</td>
					<td>358244</td>
					<td>Inactivo</td>
					<td>29/03/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Audra X. Bowers</td>
					<td>Usuario</td>
					<td>755480</td>
					<td>Bloqueado</td>
					<td>23/08/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Alden G. Fischer</td>
					<td>Administrador</td>
					<td>541170</td>
					<td>Bloqueado</td>
					<td>22/11/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Myles Collier</td>
					<td>Usuario</td>
					<td>453758</td>
					<td>Bloqueado</td>
					<td>07/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Britanni Davenport</td>
					<td>Usuario</td>
					<td>172400</td>
					<td>Inactivo</td>
					<td>11/09/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Uriel Browning</td>
					<td>Administrador</td>
					<td>351991</td>
					<td>Bloqueado</td>
					<td>11/12/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Chandler M. Sanders</td>
					<td>Cliente</td>
					<td>556605</td>
					<td>Activo</td>
					<td>28/06/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Lacota W. Livingston</td>
					<td>Administrador</td>
					<td>291915</td>
					<td>Inactivo</td>
					<td>25/01/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Kuame A. Romero</td>
					<td>Usuario</td>
					<td>66442</td>
					<td>Activo</td>
					<td>03/07/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Kiayada Carlson</td>
					<td>Usuario</td>
					<td>873415</td>
					<td>Activo</td>
					<td>27/11/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Tyrone Noel</td>
					<td>Cliente</td>
					<td>879127</td>
					<td>Inactivo</td>
					<td>03/02/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Marvin Miranda</td>
					<td>Cliente</td>
					<td>51946</td>
					<td>Inactivo</td>
					<td>10/04/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Adara H. Walker</td>
					<td>Cliente</td>
					<td>22169</td>
					<td>Bloqueado</td>
					<td>08/12/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Sigourney H. Moses</td>
					<td>Administrador</td>
					<td>624078</td>
					<td>Bloqueado</td>
					<td>01/01/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Gabriel Turner</td>
					<td>Usuario</td>
					<td>999365</td>
					<td>Inactivo</td>
					<td>02/09/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Miranda Sweeney</td>
					<td>Usuario</td>
					<td>123688</td>
					<td>Bloqueado</td>
					<td>14/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Kimberly D. Quinn</td>
					<td>Usuario</td>
					<td>57068</td>
					<td>Activo</td>
					<td>06/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Simone W. Harper</td>
					<td>Usuario</td>
					<td>222693</td>
					<td>Bloqueado</td>
					<td>20/11/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Imogene Goodwin</td>
					<td>Usuario</td>
					<td>116054</td>
					<td>Activo</td>
					<td>19/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Jena Chandler</td>
					<td>Administrador</td>
					<td>358244</td>
					<td>Inactivo</td>
					<td>29/03/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Audra X. Bowers</td>
					<td>Usuario</td>
					<td>755480</td>
					<td>Bloqueado</td>
					<td>23/08/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Alden G. Fischer</td>
					<td>Administrador</td>
					<td>541170</td>
					<td>Bloqueado</td>
					<td>22/11/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Myles Collier</td>
					<td>Usuario</td>
					<td>453758</td>
					<td>Bloqueado</td>
					<td>07/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Britanni Davenport</td>
					<td>Usuario</td>
					<td>172400</td>
					<td>Inactivo</td>
					<td>11/09/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Uriel Browning</td>
					<td>Administrador</td>
					<td>351991</td>
					<td>Bloqueado</td>
					<td>11/12/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Chandler M. Sanders</td>
					<td>Cliente</td>
					<td>556605</td>
					<td>Activo</td>
					<td>28/06/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Lacota W. Livingston</td>
					<td>Administrador</td>
					<td>291915</td>
					<td>Inactivo</td>
					<td>25/01/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Kuame A. Romero</td>
					<td>Usuario</td>
					<td>66442</td>
					<td>Activo</td>
					<td>03/07/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Kiayada Carlson</td>
					<td>Usuario</td>
					<td>873415</td>
					<td>Activo</td>
					<td>27/11/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Tyrone Noel</td>
					<td>Cliente</td>
					<td>879127</td>
					<td>Inactivo</td>
					<td>03/02/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Marvin Miranda</td>
					<td>Cliente</td>
					<td>51946</td>
					<td>Inactivo</td>
					<td>10/04/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Adara H. Walker</td>
					<td>Cliente</td>
					<td>22169</td>
					<td>Bloqueado</td>
					<td>08/12/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Sigourney H. Moses</td>
					<td>Administrador</td>
					<td>624078</td>
					<td>Bloqueado</td>
					<td>01/01/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Gabriel Turner</td>
					<td>Usuario</td>
					<td>999365</td>
					<td>Inactivo</td>
					<td>02/09/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Miranda Sweeney</td>
					<td>Usuario</td>
					<td>123688</td>
					<td>Bloqueado</td>
					<td>14/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Kimberly D. Quinn</td>
					<td>Usuario</td>
					<td>57068</td>
					<td>Activo</td>
					<td>06/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Simone W. Harper</td>
					<td>Usuario</td>
					<td>222693</td>
					<td>Bloqueado</td>
					<td>20/11/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Imogene Goodwin</td>
					<td>Usuario</td>
					<td>116054</td>
					<td>Activo</td>
					<td>19/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Jena Chandler</td>
					<td>Administrador</td>
					<td>358244</td>
					<td>Inactivo</td>
					<td>29/03/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Audra X. Bowers</td>
					<td>Usuario</td>
					<td>755480</td>
					<td>Bloqueado</td>
					<td>23/08/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Alden G. Fischer</td>
					<td>Administrador</td>
					<td>541170</td>
					<td>Bloqueado</td>
					<td>22/11/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Myles Collier</td>
					<td>Usuario</td>
					<td>453758</td>
					<td>Bloqueado</td>
					<td>07/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Britanni Davenport</td>
					<td>Usuario</td>
					<td>172400</td>
					<td>Inactivo</td>
					<td>11/09/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Uriel Browning</td>
					<td>Administrador</td>
					<td>351991</td>
					<td>Bloqueado</td>
					<td>11/12/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Chandler M. Sanders</td>
					<td>Cliente</td>
					<td>556605</td>
					<td>Activo</td>
					<td>28/06/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Lacota W. Livingston</td>
					<td>Administrador</td>
					<td>291915</td>
					<td>Inactivo</td>
					<td>25/01/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Kuame A. Romero</td>
					<td>Usuario</td>
					<td>66442</td>
					<td>Activo</td>
					<td>03/07/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Kiayada Carlson</td>
					<td>Usuario</td>
					<td>873415</td>
					<td>Activo</td>
					<td>27/11/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Tyrone Noel</td>
					<td>Cliente</td>
					<td>879127</td>
					<td>Inactivo</td>
					<td>03/02/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Marvin Miranda</td>
					<td>Cliente</td>
					<td>51946</td>
					<td>Inactivo</td>
					<td>10/04/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Adara H. Walker</td>
					<td>Cliente</td>
					<td>22169</td>
					<td>Bloqueado</td>
					<td>08/12/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Sigourney H. Moses</td>
					<td>Administrador</td>
					<td>624078</td>
					<td>Bloqueado</td>
					<td>01/01/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Gabriel Turner</td>
					<td>Usuario</td>
					<td>999365</td>
					<td>Inactivo</td>
					<td>02/09/2021</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Miranda Sweeney</td>
					<td>Usuario</td>
					<td>123688</td>
					<td>Bloqueado</td>
					<td>14/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Kimberly D. Quinn</td>
					<td>Usuario</td>
					<td>57068</td>
					<td>Activo</td>
					<td>06/04/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Simone W. Harper</td>
					<td>Usuario</td>
					<td>222693</td>
					<td>Bloqueado</td>
					<td>20/11/2020</td>
				</tr>
				<tr>
					<td>12354264542</td>
					<td>Imogene Goodwin</td>
					<td>Usuario</td>
					<td>116054</td>
					<td>Activo</td>
					<td>19/04/2020</td>
				</tr>
			</tbody>
		</table>
		<!-- USER MODAL -->
		<div class="user-modal">
			<!-- CONTENEDOR INFO -->
			<div class="contInfo">
				<h4 class="titleContInfo">Personal</h4>
				<form action="" method="POST">
					<div class="input-group">
						<div class="input-form">
							<label for="nombre" class="lbl-inp-reg">Nombre</label>
							<input type="text" class="input-form-reg" name="nombre" id="nombre" autocomplete="off">
						</div>

						<div class="input-form">
							<label for="apellido" class="lbl-inp-reg">Apellido</label>
							<input type="text" class="input-form-reg" name="apellido" id="apellido" autocomplete="off">
						</div>
					</div>


				</form>
			</div>
			<!-- CONTENEDOR INFO -->
			<div class="contInfo">
				<h4 class="titleContInfo">Sistema</h4>
				<form action="" method="POST">
					Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Unde qui fuga assumenda aspernatur cumque asperiores rerum voluptatibus facere, ratione omnis, voluptatum ea repudiandae necessitatibus eum quisquam, tempore labore totam ab libero est iure veniam atque tenetur. Quibusdam recusandae voluptatum reprehenderit impedit explicabo est neque dignissimos distinctio, laborum! Odit itaque, iure ab. Nisi, animi dignissimos. Deleniti debitis sapiente explicabo soluta ullam id dicta voluptatum eius culpa nobis nesciunt exercitationem illo ipsa omnis fuga nisi numquam ratione dignissimos repudiandae dolor beatae aut, ab. Nulla consequatur atque reprehenderit ex odio fugit odit quos magnam libero, excepturi labore sunt aliquam voluptatum minima ullam et incidunt laboriosam a non officiis repellendus sequi vitae blanditiis delectus. Temporibus nemo iure ad, fugit? Ullam vero tempore possimus sapiente accusamus cupiditate, eum inventore dolores, fuga repudiandae veritatis iure temporibus quae quasi ipsam neque accusantium sequi est. Sequi est possimus consectetur voluptatibus doloribus aspernatur tempora totam vel, sapiente aliquid perspiciatis architecto quod vero dolorem, placeat repellat explicabo repellendus in? Excepturi distinctio aliquam ab vero sequi exercitationem laudantium tenetur obcaecati, placeat labore perferendis dolorum nostrum earum cupiditate quas iusto id facere. Commodi recusandae quas similique vero iusto accusamus, laboriosam quae, quo repudiandae sint possimus non necessitatibus? Id possimus blanditiis, ipsa doloribus?
				</form>
			</div>
			<!-- CONTENEDOR INFO -->
			<div class="contInfo">
				<h4 class="titleContInfo">Permisos</h4>
				<form action="" method="POST">
					Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Eligendi pariatur architecto, maiores voluptatem fuga, vero obcaecati, velit dolore quaerat animi similique, laboriosam reiciendis vitae quos? Asperiores, quidem? Assumenda, quia sint, pariatur hic molestiae sunt dicta nemo corporis ducimus dolore nulla totam eligendi consequuntur magni neque, ullam. Tempore placeat a excepturi, maiores veniam pariatur eum quam laborum libero quibusdam cum doloribus voluptate, aspernatur numquam nemo sed, dolorem esse? Neque sunt accusamus magni nemo voluptate, numquam nesciunt, optio illo ad laudantium, hic et non. Iusto qui atque quo alias excepturi, tempore voluptas odit velit, sequi, maiores quae rerum! Impedit odio, consequuntur porro nobis labore fugit ad. Quis quam quo neque esse accusantium adipisci reiciendis veniam perferendis, corrupti nesciunt sint, commodi delectus impedit cum numquam iusto, aliquid repellat quaerat dolores? Veniam, praesentium neque architecto. Ducimus tempora saepe, in reiciendis ullam dolorem eveniet itaque quisquam nobis deleniti autem, quia quas. Quaerat possimus id, deleniti, molestiae quasi nobis. Voluptates molestias dolorum, et excepturi itaque fuga repellendus qui vitae sunt accusamus, tenetur quibusdam placeat, minima debitis voluptas reprehenderit. Ratione unde explicabo ab eius molestias fugiat quo! Porro, explicabo vitae rerum odio voluptate laboriosam provident accusantium nostrum ea nihil error corrupti, praesentium asperiores, unde quaerat obcaecati sapiente.
				</form>
			</div>
		</div>
	</div>

	<script src="<?php echo RUTA; ?>js/Bootstrap/jquery-3.2.1.min.js"></script>
	<script src="<?php echo RUTA; ?>js/SI/sistema/datatablescard.js"></script>
	<script src="<?php echo RUTA; ?>js/SI/usuarios/usuarios.js"></script>
	<script>
		$(document).ready(function(){
			$('.input-form-reg').on('focus', function(){
				$('label[for="'+$(this).attr('id')+'"]').addClass('active-lbl');
			});
			$('.input-form-reg').on('blur', function(){
				if($(this).val() == ''){
					$('label[for="'+$(this).attr('id')+'"]').removeClass('active-lbl');
				}
			});
		});
	</script>
</body>
</html>