<?php 
class conexion{
	private $servidor="localhost";
	private $usuario="root";
	private $bd="startup";
	private $password="";

	public function conexion(){
		try {
			$conexion = new PDO('mysql:host=localhost;dbname='.$this->bd,$this->usuario,$this->password);
			$conexion->exec("SET NAMES utf8");
			return $conexion;
		} catch (PDOException $e) {
			return false;
		}
	}
}