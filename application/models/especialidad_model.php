<?php
class Especialidad_model extends CI_Model {
	
	function especialidad($id_especialidad){
		
		$this->db->SELECT('*');	
		$this->db->From('especialidad');
		$this->db->where("id",$id_especialidad);
		$query = $this->db->get();
		return $query->row();
	}

function listar_especialidad(){
		$this->db->SELECT('*');	
		$this->db->From('especialidad');
		$query = $this->db->get();
		return $query->result();
}

function estadoespecialidad(){
		$this->db->select('*');
		$this->db->from('especialidad');
		$query = $this->db->get();
		if($query->num_rows()>0){
		foreach($query->result()as $row)
		$arrDatos[htmlspecialchars($row->id, ENT_QUOTES)]=htmlspecialchars($row->nombre, ENT_QUOTES);
		$query->free_result();
		return $arrDatos;
						  }
	 	}	



}