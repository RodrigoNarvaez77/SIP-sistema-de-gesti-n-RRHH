<?php
class capacitaciones_model extends CI_Model {
	function capacitaciones(){
		$this->db->SELECT('*');	
		$this->db->From('capacitaciones');
		$query = $this->db->get();
		return $query->result();
									}
			  
	function listar_capacitaciones(){
		$this->db->SELECT('*');	
		$this->db->From('capacitaciones');
		$query = $this->db->get();
		return $query->result();
									}
	function ingresar($data){
		$this->db->insert('capacitaciones',$data); 
							 }

	function eliminar($id){
		$this->db->where('id',$id);
		$this->db->delete('capacitaciones'); 
	}

	function actualizar_capacitaciones($id,$data){
        $this->db->where('id',$id);
        $this->db->update('capacitaciones',$data); 
        return $this->db->insert_id();
    										 }

    function get_capacitaciones($id){
		$this->db->select("*");
		$this->db->from("capacitaciones");
		$this->db->where("capacitaciones.id",$id);
		$query = $this->db->get();
		return $query->result();
							  }
			  

}