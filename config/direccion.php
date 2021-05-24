<?php session_start();
require_once 'config.php';
require_once 'funciones.php';
require_once 'clases/conexion.php';

$con = new conexion();
$conexion = $con->conexion();

if (!$conexion) {
	header('Locarion: '.RUTA.'config/error/500');
	die();
}

if (!empty($_SESSION)) {
	if ($_SESSION['entidad'] == ENTIDAD) {
		if ($_SESSION['estado'] == 'Activo') {
			if ($_SESSION['rol'] != 'Visualizador') {
				header('Location: '.RUTA.'SI/modulos/modulo');
			} else {
				header('Location: '.RUTA.'SI/modulo/visualizador');
			}
		} else {
			header('Location: '.RUTA.'config/error/401');
			die();
		}
	} else {
		header('Location: '.RUTA);
		die();
	}
} else {
	header('Location: '.RUTA);
	die();
}