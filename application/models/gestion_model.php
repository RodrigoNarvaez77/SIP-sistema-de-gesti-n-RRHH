<?php
class gestion_model extends CI_Model {
			  
	function listar(){
		$this->db->SELECT('*');	
		$this->db->From('dependencia');
		$query = $this->db->get();
		return $query->result();
									}

	function dependencia($id)
	{
		$this->db->SELECT('*');	
		$this->db->From('dependencia');
		 $this->db->where("id", $id);
		$query = $this->db->get();
		return $query->row();
	}
									
	function ingresar($data){
		$this->db->insert('dependencia',$data); 
							 }

	function eliminar($id){
		$this->db->where('id',$id);
		$this->db->delete('dependencia'); 
	}

	function actualizar_dependencia($id,$data){
        $this->db->where('id',$id);
        $this->db->update('dependencia',$data); 
        return $this->db->insert_id();
    										 }

    function get_dependencia($id){
		$this->db->select("*");
		$this->db->from("dependencia");
		$this->db->where("dependencia.id",$id);
		$query = $this->db->get();
		return $query->result();
							  }
			  

}