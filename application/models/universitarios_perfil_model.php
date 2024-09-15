<?php
class Universitarios_perfil_model extends CI_Model {

	 function universitario($id)
    {
        $this->db->SELECT('*');
        $this->db->From('universitario');
        $this->db->where("id", $id);
        $query = $this->db->get();
        return $query->row();
    }

     
    function listar_profesional()
    { 
    $this->db->SELECT('*'); 
        $this->db->From('universitario');
        $query = $this->db->get();
        return $query->result();
    }
	

}