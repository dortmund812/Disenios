<?php 
class objetos {
	// CREAR SECCION FOLDER
	private function objSectionFolder($url, $title, $icono, $conexion){
		return '<div class="acordion" data-use="acordion" data-info="#'.$url.'">
					<div class="icon">
						<i class="fa fa-plus"></i>
					</div>
					<h5>'.$title.'</h5><i class="'.$icono.'"></i>
				</div>
				<div class="panel" id="'.$url.'">
					'.self::elementSectionFolder($url, $conexion).'
				</div>';
	}
	// CREAR ELEMENTO SECCION FOLDER
	private function objElementSectionFolder($url, $title, $img){
		return '<div class="card">
					<div class="card-title">
						<p>'.$title.'</p>
					</div>
					<div class="card-body">
						<img class="frmCard" src="'.$img.'" alt="">
					</div>
					<div class="card-footer">
						<a target="_blank" class="elementCardLink" href="'.$url.'">Ver más</a>
					</div>
				</div> ';
	}
	// VALIDAR SECCIONES FOLDER
	public function sectionFolder($data){
		$con = new conexion();
		$conexion = $con->conexion();
		$statement = $conexion->prepare("SELECT b.codigo, b.seccion, b.icono FROM usuario a JOIN sectionsfolder b ON a.acceso >= b.acceso WHERE a.estado = 1 AND CONCAT(a.codigo, a.identificacion) = :codigo");
		$statement->execute(array(':codigo'=>decriptData($data)));
		$salida = '';
		foreach ($statement->fetchAll() as $key) {
			$salida.= self::objSectionFolder($key[0],$key[1],$key[2],$conexion);
		}
		return $salida;
	}
	// VALIDAR ELEMENTOS SECCION FOLDER
	private function elementSectionFolder($data, $conexion){
		$statement = $conexion->prepare("SELECT b.url, b.titulo, b.imagen FROM sectionsfolder a INNER JOIN elementsectionfold b ON b.idsection = a.id WHERE b.estado = 1 AND a.codigo = :codigo");
		$statement->execute(array(':codigo'=>limpiarDatos($data)));
		$salida = '';
		foreach ($statement->fetchAll() as $key) {
			$salida.= self::objElementSectionFolder($key[0],$key[1],$key[2]);
		}
		return $salida;
	}
}