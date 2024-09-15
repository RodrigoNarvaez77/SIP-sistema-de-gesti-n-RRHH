<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class area extends CI_Controller {
	//public $requerimiento;
	
	public function __construct()
   	{
    	parent::__construct();
   	}

	function index(){
		$this->load->model("area_model");

		$base = array(
			'head_titulo' => "Sistema RRHH -Area",
			'titulo' => "Area",
			'subtitulo' => '',
			'js' => array('js/si_validaciones.js'),
			'side_bar' => true,
			'menu' => $this->load->view('layout2.0/menus/menu_sip','',TRUE)
		);
		
		$pagina['areas'] = $this->area_model->listar();
		$base['cuerpo'] = $this -> load -> view('sip/area/gestion',$pagina,TRUE);
		$this -> load -> view('layout2.0./layout',$base);
	}

	function guardar_area(){
		$this->load->model("area_model");
		$data = array(
			'id' => $_POST['id'],
			'nombre' => $_POST['nombre']
					 );
		$this->area_model->ingresar($data);		
		redirect('sip/area', 'refresh');
	}
							 
	function actualizar_area(){
		$this->load->model("area_model");
			$id = $_POST['id'];
			$data = array(
			'nombre' => $_POST['nombre']
   			    		 );
		$this->area_model->actualizar_area($id,$data);
		redirect('sip/area', 'refresh');			
								 }

	function modal_editar($id){
		$this->load->model("area_model");
			$pagina['area']= $this->area_model->get_area($id);
		$this->load->view('sip/area/modal_editar_area', $pagina);
							  }
	

	function eliminar($id)
    {
        $this->load->model("area_model");
        $this->area_model->eliminar($id);
        echo "<script>alert('Registro Eliminado')</script>";
        redirect('sip/area', 'refresh');
    }
		
									
}

?>