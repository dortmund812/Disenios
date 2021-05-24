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

$salida = '';
if (!empty($_SESSION) && $_SESSION['estado']=='Activo' && $_SESSION['entidad'] == ENTIDAD) {
	$usuario = new usuario();
	$datosUsuario = $usuario->datosUsuarioCodigo($_SESSION['usuario']);
	if (!empty($datosUsuario)) {
		$datosUsuario[0] = $accesos['imgUser'].$datosUsuario[0];
		$salida = $datosUsuario;
	} else {
		$salida = false;
	}
} else {
	$salida = false;
}
echo json_encode($salida);