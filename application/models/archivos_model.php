<?php
class ingreso_model extends CI_Model {
	function listar(){
		$query = $this->db->get('archivos');
		return $query->result();
	}
	
	function get($id){
		$this->db->where('id',$id);
		$query = $this->db->get('archivos');
		return $query->row();
	}
	
	function get_archivo($id_usuario,$id_archivo){
		$this->db->where('id_usuarios',$id_usuario);
		$this->db->where('id_tipoarchivo',$id_archivo);
		$query = $this->db->get('archivos');
		return $query->result();
	}

	
	function editar($id,$data){
		$this->db->where('id', $id);
		$this->db->update('archivos', $data); 
	}
	
	function ingresar($data){
		$this->db->insert('archivos',$data); 
	}
	function eliminar($id){
		$this->db->delete('archivos', array('id' => $id)); 
	}
}