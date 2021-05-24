<?php session_start();
require_once '../../../config/config.php';
require_once '../../../config/funciones.php';
require_once '../../../config/clases/conexion.php';
require_once '../../../config/clases/usuario.php';

$conexion = new conexion();
if(!$conexion->conexion()){
	header('Location: '.RUTA.'config/error/500');
	die();
}
$salida = false;
$usuario = new usuario();
if (isset($_POST['datos'])) {
	$datosUsuario = $usuario->datosSesion($_POST['datos']);
	if (!empty($datosUsuario)) {
		$_SESSION['usuario'] = encripData($datosUsuario[0].$datosUsuario[1]);
		$_SESSION['rol'] = $datosUsuario[2];
		$_SESSION['estado'] = $datosUsuario[3];
		$_SESSION['entidad'] = ENTIDAD;
		$salida = true;
	} else {
		$salida = false;
	}
} else {
	$salida = false;
}
echo $salida;