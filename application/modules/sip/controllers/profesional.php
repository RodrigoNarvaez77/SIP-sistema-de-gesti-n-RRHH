<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class profesional extends CI_Controller {
	//public $requerimiento;
	
	public function __construct()
   	{
    	parent::__construct();
   	}

	function index(){
		$this->load->model("certificados_profesional_model");

		$base = array(
			'head_titulo' => "Sistema RRHH - Estudios Profesionales",
			'titulo' => "Estudios Profesionales",
			'subtitulo' => '',
			'js' => array('js/si_validaciones.js'),
			'side_bar' => true,
			'menu' => $this->load->view('layout2.0/menus/menu_sip','',TRUE)
		);
		
		$pagina['certificado_profesional'] = $this->certificados_profesional_model->listar();
		$base['cuerpo'] = $this -> load -> view('sip/profesional/gestion',$pagina,TRUE);
		$this -> load -> view('layout2.0./layout',$base);
	}

	function guardar_profesional(){
		$this->load->model("certificados_profesional_model");
		$data = array(
			'id' => $_POST['id'],
			'nombre' => $_POST['nombre']
					 );
		$this->certificados_profesional_model->ingresar($data);		
		redirect('sip/profesional', 'refresh');
	}
							 
	function actualizar_profesional(){
		$this->load->model("certificados_profesional_model");
			$id = $_POST['id'];
			$data = array(
			'nombre' => $_POST['nombre']
   			    		 );
		$this->certificados_profesional_model->actualizar_certificado($id,$data);
		redirect('sip/profesional', 'refresh');			
								 }

	function modal_editar($id){
		$this->load->model("certificados_profesional_model");
			$pagina['datos_profesional']= $this->certificados_profesional_model->get_certificados($id);
		$this->load->view('sip/profesional/modal_editar_profesional', $pagina);
							  }
	
	 function eliminar($id)
    {
        $this->load->model("certificados_profesional_model");
        $this->certificados_profesional_model->eliminar($id);
        echo "<script>alert('Registro Eliminado')</script>";
        redirect('sip/profesional', 'refresh');
    }
		
									
}

?>