<?php
class Version_model extends CI_Model {
	
	 function listar_version($id)
    {
        $this->db->select("*");
        $this->db->From('version');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }

	
}