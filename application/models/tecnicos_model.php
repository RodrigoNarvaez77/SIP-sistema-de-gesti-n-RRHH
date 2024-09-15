<?php
class Tecnicos_model extends CI_Model {
	
	function tecnicos($id_tecnicos){ 
		$this->db->SELECT('*');	
		$this->db->From('tecnicos');
		$this->db->where("id",$id_tecnicos);
		$query = $this->db->get();
		return $query->row();
	}

	function estadotecnico(){
		$this->db->SELECT('*');	
		$this->db->From('tecnicos');
		$query = $this->db->get();
		return $query->result();
}

function estadotecnico_1(){
		$this->db->select('*');
		$this->db->from('tecnicos');
		$query = $this->db->get();
		if($query->num_rows()>0){
		foreach($query->result()as $row)
		$arrDatos[htmlspecialchars($row->id, ENT_QUOTES)]=htmlspecialchars($row->nombre, ENT_QUOTES);
		$query->free_result();
		return $arrDatos;
						  }
	 	}	

	

	
}