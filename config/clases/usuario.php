<?php 
class usuario {
	// VALIDAR USUARIO
	public function validaUsuario($datos, $conexion){
		$statement = $conexion->prepare('SELECT password FROM usuario WHERE correo = :correo');
		$statement->execute(array(':correo' => $datos[0]));
		$resultado = $statement->fetch()[0];
		return password_verify($datos[1], $resultado);
	}
	// DATOS USAURIO CODIGO
	public function datosUsuarioCodigo($codigo){
		$con = new conexion();
		$conexion = $con->conexion();
		$statement = $conexion->prepare("SELECT a.img, a.nombre, b.rol FROM usuario a JOIN rol b ON a.rol = b.id WHERE CONCAT(a.codigo, a.identificacion) = :codigo");
		$statement->execute(array(':codigo'=>decriptData($codigo)));
		return $statement->fetch();
	}
	// DATOS SESION
	public function datosSesion($datos){
		$con = new conexion();
		$conexion = $con->conexion();
		$validar = self::validaUsuario($datos, $conexion);
		if ($validar) {
			$statement = $conexion->prepare("SELECT a.codigo, a.identificacion, b.rol, c.estado FROM usuario a JOIN rol b ON a.rol = b.id JOIN estado c ON a.estado = c.id WHERE a.correo=:correo");
			$statement->execute(array(':correo'=>limpiarDatos($datos[0])));
			return $statement->fetch();
		} else {
			return false;
		}
	}
	// VER USUARIO
	// INSERTAR USUARIO
	public function insertUsuario($datos){
		$con = new conexion();
		$conexion = $con->conexion();
		$statement = $conexion->prepare("INSERT INTO usuario (codigo, nombre, correo, password, tid, identificacion, rol, estado) VALUES(:codigo, :nombre, :correo, :password, :tid, :identificacion, :rol, :estado)");
		$statement->execute(array(':codigo'));
		// ':password' => password_hash($datos[], PASSWORD_DEFAULT);
	}
	// MODIFICAR USUARIO
	// ELIMINAR USUARIO
}