<?php
class Especialidad_perfil_model extends CI_Model {
	 
	  function especialidad($id)
    {
        $this->db->SELECT('*');
        $this->db->From('especialidad');
        $this->db->where("id", $id);
        $query = $this->db->get();
        return $query->row();
    }

     function listar_especialidad()
    {
        $this->db->SELECT('*'); 
        $this->db->From('especialidad');
        $query = $this->db->get();
        return $query->result();
                                    }
}