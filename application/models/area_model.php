<?php
class area_model extends CI_Model {
			  
	function listar(){
		$this->db->SELECT('*');	
		$this->db->From('area');
		$query = $this->db->get();
		return $query->result();
									}

function area()
	{
		$this->db->SELECT('*');	
		$this->db->From('area');
		$query = $this->db->get();
		return $query->row();
	}

	function ingresar($data){
		$this->db->insert('area',$data); 
							 }

function area_uno($id_area){ 
        $this->db->SELECT('*'); 
        $this->db->From('area');
        $this->db->where("id",$id_area);
        $query = $this->db->get();
        return $query->row();
    }

	function eliminar($id){
		$this->db->where('id',$id);
		$this->db->delete('area'); 
	}

	function actualizar_area($id,$data){
        $this->db->where('id',$id);
        $this->db->update('area',$data); 
        return $this->db->insert_id();
    										 }

    function get_area($id){
		$this->db->select("*");
		$this->db->from("area");
		$this->db->where("area.id",$id);
		$query = $this->db->get();
		return $query->result();
							  }
			  

}