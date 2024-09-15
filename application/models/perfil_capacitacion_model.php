<?php
class Perfil_capacitacion_model extends CI_Model {

	 function consultar_cap_perfil($id_cap, $id_perfil)
    {
        $this->db->select('id');
        $this->db->from('perfil_capacitacion');
        $this->db->where('id_capacitacion', $id_cap);
        $this->db->where('id_perfil', $id_perfil);
        
        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return 1;
        } else {
            return NULL;
        }
        
    }

     function eliminar_todos_cap_perfil($id_perfil)
    {
        //eliminar todas las capacitaciones donde id perfil igual a $id_perfil 
        $this->db->where('id_perfil', $id_perfil);
        $this->db->delete('perfil_capacitacion');
    }
    
    
    function guardar_perfil_cap($datos)
    {
        //guardar datos en perfil capacitacion
        $this->db->insert('perfil_capacitacion', $datos);
    }

     function actualizar_desactivo_perfil($data2, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('perfil_capacitacion', $data2);
    }
    
    function actualizar_estado_activo_perfil($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('perfil_capacitacion', $data);
    }
	
}