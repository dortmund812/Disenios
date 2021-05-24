<?php session_start();
require_once '../../config/config.php';
require_once '../../config/funciones.php';
require_once '../../config/clases/conexion.php';
require_once '../../config/clases/objetos/objSistema.php';

$con = new conexion();
$conexion = $con->conexion();

if (!$conexion) {
	header('Location: '.RUTA.'config/error/500');
	die();
}

// VALIDAR SESION Y USUARIO
if (!empty($_SESSION)) {
	if ($_SESSION['estado']=='Activo' && $_SESSION['rol']!='Visualizador' && $_SESSION['entidad'] == ENTIDAD) {
		$obj = new objetos();
		$notificaciones = $obj->notificacion($_SESSION['usuario']);
		$enlaces = $obj->enlace($_SESSION['usuario']);

		require_once '../../views/modulos/modulo.view.php';
	} else {
		header('Location: '.RUTA.'config/error/403');
		die();
	}
} else {
	header('Location: '.RUTA.'config/direccion');
	die();
}