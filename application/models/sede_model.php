<?php
class sede_model extends CI_Model {
			  
	function listar(){
		$this->db->SELECT('*');	
		$this->db->From('sede');
		$query = $this->db->get();
		return $query->result();
									}

	function sede($id)
    {
        $this->db->SELECT('*');
        $this->db->From('sede');
        $this->db->where("id", $id);
        $query = $this->db->get();
        return $query->row();
    }

    function sede_uno($id_sede){ 
        $this->db->SELECT('*'); 
        $this->db->From('sede');
        $this->db->where("id",$id_sede);
        $query = $this->db->get();
        return $query->row();
    }

	function ingresar($data){
		$this->db->insert('sede',$data); 
							 }

	function eliminar($id){
		$this->db->where('id',$id);
		$this->db->delete('sede'); 
	}

	function actualizar_sede($id,$data){
        $this->db->where('id',$id);
        $this->db->update('sede',$data); 
        return $this->db->insert_id();
    										 }

    function get_area($id){
		$this->db->select("*");
		$this->db->from("sede");
		$this->db->where("sede.id",$id);
		$query = $this->db->get();
		return $query->result();
							  }

}