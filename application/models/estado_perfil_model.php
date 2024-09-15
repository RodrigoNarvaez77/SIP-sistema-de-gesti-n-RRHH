<?php
class Estado_perfil_model extends CI_Model {
	  function estado($id)
    {
        $this->db->SELECT('*');
        $this->db->From('estado');
        $this->db->where("id", $id);
        $query = $this->db->get();
        return $query->row();
    }

     function listar_escolaridad(){
        $this->db->SELECT('*'); 
        $this->db->From('estado');
        $query = $this->db->get();
        return $query->result();
                                    }

        function listar_estado(){
        $this->db->SELECT('*'); 
        $this->db->From('estado');
        $query = $this->db->get();
        return $query->result();
    }
	
}