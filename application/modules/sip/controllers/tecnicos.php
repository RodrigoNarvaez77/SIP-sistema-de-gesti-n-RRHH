<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class tecnicos extends CI_Controller {
	//public $requerimiento;
	
	public function __construct()
   	{
    	parent::__construct();
   	}

	function index(){
		$this->load->model("certificados_model");

		$base = array(
			'head_titulo' => "Sistema RRHH - Estudios Tecnicos",
			'titulo' => "Estudios Tecnicos",
			'subtitulo' => '',
			'js' => array('js/si_validaciones.js'),
			'side_bar' => true,
			'menu' => $this->load->view('layout2.0/menus/menu_sip','',TRUE)
		);
		
		$pagina['certificado_tecnico'] = $this->certificados_model->listar();
		$base['cuerpo'] = $this -> load -> view('sip/tecnicos/gestion',$pagina,TRUE);
		$this -> load -> view('layout2.0./layout',$base);
	}

	function guardar_tecnico(){
		$this->load->model("certificados_model");
		$data = array(
			'id' => $_POST['id'],
			'nombre' => $_POST['nombre']
					 );
		$this->certificados_model->ingresar($data);		
		redirect('sip/tecnicos', 'refresh');
	}
							 
	function actualizar_tecnicos(){
		$this->load->model("certificados_model");
			$id = $_POST['id'];
			$data = array(
			'nombre' => $_POST['nombre']
   			    		 );
		$this->certificados_model->actualizar_certificado($id,$data);
		redirect('sip/tecnicos', 'refresh');			
								 }

	function modal_editar($id){
		$this->load->model("certificados_model");
			$pagina['datos_titulo']= $this->certificados_model->get_certificados($id);
		$this->load->view('sip/tecnicos/modal_editar_tecnicos', $pagina);
							  }
	

	function eliminar($id)
    {
        $this->load->model("certificados_model");
        $this->certificados_model->eliminar($id);
        echo "<script>alert('Registro Eliminado')</script>";
        redirect('sip/tecnicos', 'refresh');
    }
		
									
}

?>