<?php
class certificados_model extends CI_Model {
	function listar(){
		$this->db->SELECT('*');	
		$this->db->From('tecnicos');
		$query = $this->db->get();
		return $query->result();
	}

	function ingresar($data){
		$this->db->insert('tecnicos',$data); 
	}

	function listarcargo(){
		$this->db->select('*');
		$this->db->from('nombre_cargos');
		$query = $this->db->get();
		if($query->num_rows()>0){
		foreach($query->result()as $row)
		$arrDatos[htmlspecialchars($row->id, ENT_QUOTES)]=htmlspecialchars($row->nombre, ENT_QUOTES);
		$query->free_result();
		return $arrDatos;
						  }
	 							}

	function listargrupo(){
		$this->db->select('*');
		$this->db->from('grupo');
		$query = $this->db->get();
		if($query->num_rows()>0){
		foreach($query->result()as $row)
		$arrDatos[htmlspecialchars($row->id, ENT_QUOTES)]=htmlspecialchars($row->nombre_grupo, ENT_QUOTES);
		$query->free_result();
		return $arrDatos;
						  }
	 							}

	 function listarruta(){
		$this->db->select('*');
		$this->db->from('rutas');
		$query = $this->db->get();
		if($query->num_rows()>0){
		foreach($query->result()as $row)
		$arrDatos[htmlspecialchars($row->id, ENT_QUOTES)]=htmlspecialchars($row->nombre_rutas, ENT_QUOTES);
		$query->free_result();
		return $arrDatos;
							  	}
	 						  }
	 
	function eliminar($id){
		$this->db->where('id',$id);
		$this->db->delete('tecnicos'); 
	}

	function actualizar_certificado($id,$data){
        $this->db->where('id',$id);
        $this->db->update('tecnicos',$data); 
        return $this->db->insert_id();
    										 }

    function get_certificados($id){
		$this->db->select("*");
		$this->db->from("tecnicos");
		$this->db->where("tecnicos.id",$id);
		$query = $this->db->get();
		return $query->result();
							  }
							  

}