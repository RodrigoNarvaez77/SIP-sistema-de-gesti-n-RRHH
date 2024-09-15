<?php
class Profesiones_model extends CI_Model {
function listar(){
		$this->db->SELECT('*');	
		$this->db->From('especialidad');
		$query = $this->db->get();
		return $query->result();
									}

	function ingresar($data){
		$this->db->insert('especialidad',$data); 
							 }

	function eliminar($id){
		$this->db->where('id',$id);
		$this->db->delete('especialidad'); 
	}

	function actualizar_profesiones($id,$data){
        $this->db->where('id',$id);
        $this->db->update('especialidad',$data); 
        return $this->db->insert_id();
    										 }

    function get_profesiones($id){
		$this->db->select("*");
		$this->db->from("especialidad");
		$this->db->where("especialidad.id",$id);
		$query = $this->db->get();
		return $query->result();
							  }
							  

}