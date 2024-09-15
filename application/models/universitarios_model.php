<?php
class Universitarios_model extends CI_Model {
	function universitario($id_universitario){ 
		$this->db->SELECT('*');	
		$this->db->From('universitario');
		$this->db->where("id",$id_universitario);
		$query = $this->db->get();
		return $query->row();
	}
									
	function listar_universidad(){
		$this->db->SELECT('*');	
		$this->db->From('universitario');
		$query = $this->db->get();
		return $query->result();
}

	function estadouniversidad(){
		$this->db->select('*');
		$this->db->from('universitario');
		$query = $this->db->get();
		if($query->num_rows()>0){
		foreach($query->result()as $row)
		$arrDatos[htmlspecialchars($row->id, ENT_QUOTES)]=htmlspecialchars($row->nombre, ENT_QUOTES);
		$query->free_result();
		return $arrDatos;
						  }
	 	}	
	
}