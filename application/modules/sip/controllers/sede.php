<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class sede extends CI_Controller {
	//public $requerimiento;
	
	public function __construct()
   	{
    	parent::__construct();
   	}

	function index(){
		$this->load->model("sede_model");

		$base = array(
			'head_titulo' => "Sistema RRHH -Sede",
			'titulo' => "Sede",
			'subtitulo' => '',
			'js' => array('js/si_validaciones.js'),
			'side_bar' => true,
			'menu' => $this->load->view('layout2.0/menus/menu_sip','',TRUE)
		);
		
		$pagina['sedes'] = $this->sede_model->listar();
		$base['cuerpo'] = $this -> load -> view('sip/sede/gestion',$pagina,TRUE);
		$this -> load -> view('layout2.0./layout',$base);
	}

	function guardar_sede(){
		$this->load->model("sede_model");
		$data = array(
			'id' => $_POST['id'],
			'nombre' => $_POST['nombre']
					 );
		$this->sede_model->ingresar($data);		
		redirect('sip/sede', 'refresh');
	}
							 
	function actualizar_sede(){
		$this->load->model("sede_model");
			$id = $_POST['id'];
			$data = array(
			'nombre' => $_POST['nombre']
   			    		 );
		$this->sede_model->actualizar_sede($id,$data);
		redirect('sip/sede', 'refresh');			
								 }

	function modal_editar($id){
		$this->load->model("sede_model");
			$pagina['sede']= $this->sede_model->get_area($id);
		$this->load->view('sip/sede/modal_editar_sede', $pagina);
							  }
	

	function eliminar($id)
    {
        $this->load->model("sede_model");
        $this->sede_model->eliminar($id);
        echo "<script>alert('Registro Eliminado')</script>";
        redirect('sip/sede', 'refresh');
    }
		
									
}

?>