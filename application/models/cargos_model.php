<?php
class Cargos_model extends CI_Model {
	  function get_cargo($id)
    {
        $this->db->select("*");
        $this->db->select('cargos.id as id_cargo');
        $this->db->from("cargos");
        $this->db->where("cargos.id", $id);
        $query = $this->db->get();
        return $query->result();
    }
	
}