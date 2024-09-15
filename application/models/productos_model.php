<?php
class Productos_model extends CI_Model {
	function listar(){
		$query = $this->db->get('productos');
		return $query->result();
	}


 function actualizar($id){
            $this->db->where('id_producto',$id);
            $this->db->update('productos'); 

    }
	
	function eliminar($id){
		$this->db->where('id_producto',$id);
		$this->db->delete('productos');
	}
	
	function get_usuario($id){
		$this->db->where("id_usuarios",$id);
		$query = $this->db->get('experiencia');
		return $query->result();
	}
	
	function editar($id,$data){
		$this->db->where('id', $id);
		$this->db->update('experiencia', $data); 
	}
	
	function ingresar($data){
		$this->db->insert('productos',$data); 
	}
	
	function borrar($id){
		$this->db->where('id', $id);
		$this->db->delete('experiencia');
	}
}