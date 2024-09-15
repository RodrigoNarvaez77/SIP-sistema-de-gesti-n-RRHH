<?php
class Capacitaciones_perfil_model extends CI_Model {
	 function listar_capacitaciones()
    {
        $this->db->SELECT('*');
        $this->db->From('capacitaciones');
        $query = $this->db->get();
        return $query->result();
    }


         function capacitaciones($variable_id)
    {
        $this->db->SELECT('*');
        $this->db->From('perfil_capacitacion');
        $this->db->where('id_perfil',$variable_id);
        $query = $this->db->get();
        return $query->result();
    }



     function capacitaciones_uno($id)
    {
        $this->db->SELECT('*');
        $this->db->From('capacitaciones');
        $this->db->where("id", $id);
        $query = $this->db->get();
        return $query->row();
    }

     function capacitaciones_comparar($id_cap, $id_trabajador = FALSE){
        $this->db->SELECT('id');
        $this->db->From('trabajador_capacitacion');
        $this->db->where("id_capacitacion", $id_cap);
        $this->db->where("id_trabajador", $id_trabajador);
        $query = $this->db->get();
        if($query->num_rows > 0){
            return $query->row();
        }else{
            return FALSE;
        }
    }
}