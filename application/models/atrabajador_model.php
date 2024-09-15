<?php
class atrabajador_model extends CI_Model {                
	function listar(){
		$this->db->SELECT('*');	
		$this->db->From('trabajador');
		$query = $this->db->get();
		return $query->result();
									}

	 function ingresar($data){
		$this->db->insert('trabajador',$data);
		return $this->db->insert_id(); 
							 }

	function ingresar_trabajador($data2){
		$this->db->insert('trabajador',$data2); 
										}
									  
}

