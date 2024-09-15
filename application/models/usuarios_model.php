<?php
class Usuarios_model extends CI_Model {
	
	function validar($rut,$pass){
		//$this->db->select('usuarios_categoria.id AS tipo,tipo_usuarios.id AS subtipo,usuarios.rut_usuario AS rut,usuarios.id');
		$this->db->select('usuarios_categoria.id AS tipo,tipo_usuarios.id AS subtipo,usuarios.rut_usuario AS rut,usuarios.id AS id, usuarios.chat, usuarios.nombres');
		$this->db->from('usuarios');
		$this->db->join('usuarios_categoria', 'usuarios_categoria.id = usuarios.usuarios_categoria_id');
		$this->db->join('tipo_usuarios', 'tipo_usuarios.id = usuarios.id_tipo_usuarios', 'left');
		$this->db->where("rut_usuario",$rut);
		$this->db->where("clave",hash("sha512", $pass));
		//$this->db->where("activo",0);
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->row();
	}
	
	function validar2($codigo,$pass){
		$this->db->select('usuarios_categoria.id AS tipo,tipo_usuarios.id AS subtipo,usuarios.rut_usuario AS rut,usuarios.id AS id, usuarios.chat, usuarios.nombres');
		$this->db->from('usuarios');
		$this->db->join('usuarios_categoria', 'usuarios_categoria.id = usuarios.usuarios_categoria_id');
		$this->db->join('tipo_usuarios', 'tipo_usuarios.id = usuarios.id_tipo_usuarios');
		$this->db->where("codigo_ingreso",$codigo);
		$this->db->where("clave",hash("sha512", $pass));
		$query = $this->db->get();
		return $query->row();
	}
}
?>