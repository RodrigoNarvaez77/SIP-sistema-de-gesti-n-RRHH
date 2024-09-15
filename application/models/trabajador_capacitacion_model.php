<?php
class Trabajador_capacitacion_model extends CI_Model {
	function consultar_cap_trabajador($id_cap, $id_trabajador){
		$this->db->select('id');
		$this->db->from('trabajador_capacitacion');
		$this->db->where('id_capacitacion', $id_cap);
		$this->db->where('id_trabajador', $id_trabajador);

		$query = $this->db->get();
		if($query->num_rows > 0){
			return 1;
		}else{
			return NULL;
		}

	}
	
	function eliminar_todos_cap_trabajador($id_perfil){
		$this->db->where('id_trabajador',$id_perfil);
		$this->db->delete('trabajador_capacitacion'); 
	}

	 function capacitaciones($variable_id)
    {
        $this->db->SELECT('*');
        $this->db->From('trabajador_capacitacion');
        $this->db->where('id_trabajador',$variable_id);
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

    function capacitaciones_comparar_trabajador($id)
    {
        $this->db->SELECT('id_capacitacion');
        $this->db->From('trabajador_capacitacion');
        $this->db->where("id", $id);
        $query = $this->db->get();
        return $query->row();
    }

	function guardar_trabajador_cap($datos){
		$this->db->insert('trabajador_capacitacion',$datos); 
	}

									  
	 function actualizar_desactivo_trabajador($data2, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('trabajador_capacitacion', $data2);
    }
    
    function actualizar_estado_activo_trabajador($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('trabajador_capacitacion', $data);
    }
}