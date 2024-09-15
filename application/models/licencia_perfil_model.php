<?php
class Licencia_perfil_model extends CI_Model {
	  function licencia($id)
    {
        $this->db->SELECT('*');
        $this->db->From('licencia_conducir');
        $this->db->where("id", $id);
        $query = $this->db->get();
        return $query->row();
    }

     function listar_licencia(){
        $this->db->SELECT('*'); 
        $this->db->From('licencia_conducir');
        $query = $this->db->get();
        return $query->result();
                                    }

    function listar_licencia_1(){
        $this->db->select('*');
        $this->db->from('licencia_conducir');
        $query = $this->db->get();
        if($query->num_rows()>0){
        foreach($query->result()as $row)
        $arrDatos[htmlspecialchars($row->id, ENT_QUOTES)]=htmlspecialchars($row->nombre, ENT_QUOTES);
        $query->free_result();
        return $arrDatos;
                          }
        }   
	
}