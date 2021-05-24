<?php session_start();
require_once 'config/config.php';
require_once 'config/funciones.php';
require_once 'config/clases/conexion.php';

$con = new conexion();
$conexion = $con->conexion();
if (!$conexion) {
	header('Location: '.RUTA.'config/error/500');
	die();
}
if (!empty($_SESSION) && $_SESSION['entidad']==ENTIDAD) {
	header('Location: '.RUTA.'config/direccion');
	die();
}

require_once 'views/sistema/index.view.php';