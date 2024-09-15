<?php
class R_Requerimiento_Evaluacion_model extends CI_Model {
	
	function guardar_evaluacion($datos){
		$this->db->insert('r_requerimiento_evaluacion',$datos);
	}

}
?>