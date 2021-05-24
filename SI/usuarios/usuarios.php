<?php session_start();
require_once '../../config/config.php';
require_once '../../config/funciones.php';
require_once '../../config/clases/conexion.php';
require_once '../../config/clases/acceso.php';
require_once '../../config/clases/objetos/objUsuario.php';

$con = new conexion();
$conexion = $con->conexion();
$url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];

if (!$conexion) {
	header('Location: '.RUTA.'config/error/500');
	die();
}

// VALIDAR SESION Y USUARIO
if (!empty($_SESSION)) {
	if ($_SESSION['estado']=='Activo' && $_SESSION['rol']!='Visualizador' && $_SESSION['entidad'] == ENTIDAD) {
		if(!empty(acceso::accessPage($_SESSION['usuario'], $url))){
			$obj = new objetos();

			require_once '../../views/usuarios/usuarios.view.php';
		} else {
			header('Location: '.RUTA.'config/error/403');
			die();
		}
	} else {
		header('Location: '.RUTA.'config/error/403');
		die();
	}
} else {
	header('Location: '.RUTA.'config/direccion');
	die();
}