<?php
class personal_model extends CI_Model {                
	function listar(){
		$this->db->SELECT('*');	
		$this->db->From('trabajador');
		$this->db->order_by("id desc");
		$query = $this->db->get();
		return $query->result();
	}
	

	function editar_trabajador($id){
		$this->db->SELECT('*');	
		$this->db->From('trabajador');
		$this->db->where("trabajador.id",$id);
		$query = $this->db->get();
		return $query->result();
	}

	function get_detalles_trabajador($id){
		$this->db->select('*');
		$this->db->from('perfil_cargo');
		//$this->db->join('perfil_cargo','trabajador.perfil_de_cargo = perfil_cargo.id','left');
		$this->db->where('perfil_cargo.id', $id);
		if ($query->num_rows() > 0) {
			return $query->row();
		}else{
			return 0;
		}
	}

	function get_listar($id)
	{
		$this->db->select("*");
		$this->db->From('trabajador');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result();
	}

	function get_trabajador($id){
		$this->db->select("*");
		$this->db->From('trabajador');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
	}

	function guardar_perfil($data,$id_trabajador)
	{
		$this->db->where('id',$id_trabajador);
		$this->db->update('trabajador', $data);

	}   


	function actualizar_trabajador($id,$data){
		$this->db->where('id',$id);
		$this->db->update('trabajador',$data); 
		return $this->db->insert_id();
	}

	function eliminar($id){
		$this->db->where('id',$id);
		$this->db->delete('trabajador');
	}

}

