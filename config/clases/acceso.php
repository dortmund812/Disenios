<?php 
class acceso {
	// VALIDAR ACCESO A PAGINA ACTUAL
	public function accessPage($user, $page){
		$con = new conexion();
		$conexion = $con->conexion();
		$statement = $conexion->prepare("SELECT b.acceso FROM usuario a JOIN permisos b ON a.acceso >= b.acceso WHERE CONCAT(a.codigo, a.identificacion) = :codigo AND b.url LIKE :pagina");
		$statement->execute(array(':codigo'=>decriptData($user), ':pagina' => "%$page"));
		return $statement->fetch();
	}
}