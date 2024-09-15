<?php
class Estado_model extends CI_Model {
	
	function estado($id_estado){
		$this->db->SELECT('*');	
		$this->db->From('estado');
		$this->db->where("id",$id_estado);
		$query = $this->db->get();
		return $query->row();
}

		 function listar_estado(){
		$this->db->SELECT('*');	
		$this->db->From('estado');
		$query = $this->db->get();
		return $query->result();
}
	 	function estadolista(){
		$this->db->select('*');
		$this->db->from('estado');
		$query = $this->db->get();
		if($query->num_rows()>0){
		foreach($query->result()as $row)
		$arrDatos[htmlspecialchars($row->id, ENT_QUOTES)]=htmlspecialchars($row->estado, ENT_QUOTES);
		$query->free_result();
		return $arrDatos;
						  }
	 	}	
									
}