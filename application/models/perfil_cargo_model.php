<?php
class Perfil_cargo_model extends CI_Model
{
    
    function listar()
    {
        $this->db->SELECT('*');
        $this->db->From('perfil_cargo');
        $this->db->where('id != 1');
        $this->db->order_by("id desc");
        $query = $this->db->get();
        return $query->result();
    }
    

     function listar_perfiles_cargo()
    {
        $this->db->SELECT('*');
        $this->db->From('perfil_cargo');
        $query = $this->db->get();
        return $query->result();
    }


     function listar_id()
    {
        $this->db->SELECT('id');
        $this->db->From('perfil_cargo');
        $query = $this->db->get();
        return $query->result();
    }

     function listar_perfiles_cargo_dos($guardar)
    {
        $this->db->SELECT('*');
        $this->db->From('perfil_cargo');
        $this->db->where('id = 101');
        $query = $this->db->get();
        return $query->result();
    }

    function perfiles_de_cargos($id_perfiles){ 
        $this->db->SELECT('*'); 
        $this->db->From('perfil_cargo');
        $this->db->where("id",$id_perfiles);
        $query = $this->db->get();
        return $query->row();
    }


    function listar_nombre()
    {
        $this->db->SELECT('*');
        $this->db->From('perfil_cargo');
        $this->db->order_by("id asc");
        $query = $this->db->get();
        return $query->result();
    }

    function ingresar($data)
    {
        $this->db->insert('perfil_cargo', $data);

    }    
    
    function get_listar($id)
    {
        $this->db->select("*");
        $this->db->From('perfil_cargo');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    function get_listar_trabajador()
    {
        $this->db->select("*");
        $this->db->From('perfil_cargo');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    
    function eliminar($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('perfil_cargo');
    }    
    
    
    function actualizar_perfil_cargo($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('perfil_cargo', $data);
        return $this->db->insert_id();
    }
    
    
}