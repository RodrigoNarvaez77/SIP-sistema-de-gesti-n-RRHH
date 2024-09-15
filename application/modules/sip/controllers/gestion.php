<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class gestion extends CI_Controller {
	//public $requerimiento;
	
	public function __construct()
   	{
    	parent::__construct();
   	}

	function index(){
		$this->load->model("gestion_model");

		$base = array(
			'head_titulo' => "Sistema RRHH -Dependencia",
			'titulo' => "Gestion",
			'subtitulo' => '',
			'js' => array('js/si_validaciones.js'),
			'side_bar' => true,
			'menu' => $this->load->view('layout2.0/menus/menu_sip','',TRUE)
		);
		
		$pagina['gestion'] = $this->gestion_model->listar();
		$base['cuerpo'] = $this -> load -> view('sip/gestion/gestion',$pagina,TRUE);
		$this -> load -> view('layout2.0./layout',$base);
	}

	function guardar_gestion(){
		$this->load->model("gestion_model");
		$data = array(
			'id' => $_POST['id'],
			'nombre' => $_POST['nombre']
					 );
		$this->gestion_model->ingresar($data);		
		redirect('sip/gestion', 'refresh');
	}
							 
	function actualizar_gestion(){
		$this->load->model("gestion_model");
			$id = $_POST['id'];
			$data = array(
			'nombre' => $_POST['nombre']
   			    		 );
		$this->gestion_model->actualizar_dependencia($id,$data);
		redirect('sip/gestion', 'refresh');			
								 }

	function modal_editar($id){
		$this->load->model("gestion_model");
			$pagina['gestion']= $this->gestion_model->get_dependencia($id);
		$this->load->view('sip/gestion/modal_editar_gestion', $pagina);
							  }
	

	function eliminar($id)
    {
        $this->load->model("gestion_model");
        $this->gestion_model->eliminar($id);
        echo "<script>alert('Registro Eliminado')</script>";
        redirect('sip/gestion', 'refresh');
    }
		
									
}

?>