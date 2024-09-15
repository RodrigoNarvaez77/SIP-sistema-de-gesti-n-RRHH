<?php
class Tecnicos_perfil_model extends CI_Model {
	
	function tecnicos($id)
    {
        $this->db->SELECT('*');
        $this->db->From('tecnicos');
        $this->db->where("id", $id);
        $query = $this->db->get();
        return $query->row();
    }

     function listar_tecnicos(){
        $this->db->SELECT('*'); 
        $this->db->From('tecnicos');
        $query = $this->db->get();
        return $query->result();
                                    }
    

}