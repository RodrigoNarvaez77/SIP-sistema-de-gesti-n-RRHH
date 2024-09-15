<?php
class Experiencia_model extends CI_Model {

	function experiencia($id)
    {
        $this->db->SELECT('*');
        $this->db->From('experiencia');
        $this->db->where("id", $id);
        $query = $this->db->get();
        return $query->row();
    }

     function listar_experiencia()
    {
        $this->db->select('*');
        $this->db->from('experiencia');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row)
                $arrDatos[htmlspecialchars($row->id, ENT_QUOTES)] = htmlspecialchars($row->años, ENT_QUOTES);
            $query->free_result();
            return $arrDatos;
        }
    }
    
	
}