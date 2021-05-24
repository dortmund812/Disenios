<?php 
class objetos {
	// CREAR NOTIFICACION
	private function objNotificacion($name, $title, $icono){
		return '<a href="#" class="opc-mnu-not" name="'.$name.'">
					<i class="'.$icono.'"></i>
					<span>'.$title.'</span>
				</a>';
	}
	// CREAR ENLACE
	private function objEnlace($url, $title, $icono){
		return '<a href="'.$url.'" target="principal" class="menu-opcion" data-title="'.$title.'">
					<i class="'.$icono.'"></i><span>'.$title.'</span>
				</a>';
	}
	// VALIDAR NOTIFICACIONES
	public function notificacion($data){
		$con = new conexion();
		$conexion = $con->conexion();
		$statement = $conexion->prepare("SELECT b.url, b.nombre, b.icono FROM usuario a JOIN permisos b ON a.acceso >= b.acceso WHERE b.tipo = 1 AND CURDATE() >= b.effdt AND b.estado = 1 AND a.estado = 1 AND CONCAT(a.codigo, a.identificacion) = :codigo");
		$statement->execute(array(':codigo'=>decriptData($data)));
		$salida = '';
		foreach ($statement->fetchAll() as $key) {
			$salida.= self::objNotificacion($key[0],$key[1],$key[2]);
		}
		return $salida;
	}
	// VALIDAR ENLACE
	public function enlace($data){
		$con = new conexion();
		$conexion = $con->conexion();
		$statement = $conexion->prepare("SELECT b.url, b.nombre, b.icono FROM usuario a JOIN permisos b ON a.acceso >= b.acceso WHERE b.tipo = 2 AND CURDATE() >= b.effdt AND b.estado = 1 AND a.estado = 1 AND CONCAT(a.codigo, a.identificacion) = :codigo");
		$statement->execute(array(':codigo'=>decriptData($data)));
		$salida = '';
		foreach ($statement->fetchAll() as $key) {
			$salida.= self::objEnlace($key[0],$key[1],$key[2]);
		}
		return $salida;
	}
}