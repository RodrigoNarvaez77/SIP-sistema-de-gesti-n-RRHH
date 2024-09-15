<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Titulo extends CI_Controller {
	//public $requerimiento;
	
	public function __construct(){
    	parent::__construct();
    	$this->load->library('session');
    	if ($this->session->userdata('logged') == FALSE) {
    		echo "<script>alert('No puede acceder al contenido')</script>";
    		redirect('/usuarios/login/index', 'refresh');
    	} else {
    		$this->load->model("certificados_model");
    	}
   	}

	function index(){
		

		$base = array(
			'head_titulo' => "Sistema RRHH - Estudios Tecnicos",
			'titulo' => "Estudios Tecnicos",
			'subtitulo' => '',
			'side_bar' => true,
			'menu' => $this->load->view('layout2.0/menus/menu_sip','',TRUE)
		);
		
		$pagina['certificado_tecnico'] = $this->certificados_model->listar();
		$base['cuerpo'] = $this -> load -> view('sip/titulo/gestion',$pagina,TRUE);
		$this -> load -> view('layout2.0./layout',$base);
	}

	function guardar_titulo(){
		//$this->load->model("certificados_model");
		$data = array(
			'id' => $_POST['id'],
			'nombre' => $_POST['nombre']
					 );
		$this->certificados_model->ingresar($data);		
		redirect('sip/titulo', 'refresh');
	}
							 
	function actualizar_editar(){
		//$this->load->model("certificados_model");
			$id = $_POST['id'];
			$data = array(
			'nombre' => $_POST['nombre']
   			    		 );
		$this->certificados_model->actualizar_certificado($id,$data);
		redirect('sip/titulo', 'refresh');			
								 }

	function modal_editar($id){
		//$this->load->model("certificados_model");
			$pagina['datos_titulo']= $this->certificados_model->get_certificados($id);
		$this->load->view('sip/titulo/modal_editar_titulo', $pagina);
							  }
	
	
	function verificar(){
		//$this->load->model("certificados_model");
	  		if (isset($_POST['eliminar'])){
	  		echo "<script> confirm('¿Desea eliminar este registro?')</script>";
	  		foreach($_POST['seleccionar_eliminar'] as $id){
	  		$this->certificados_model->eliminar($id);
										  				  }
	  									  }
	  	echo "<script>alert('Registro Eliminado')</script>";
	  	redirect('sip/titulo', 'refresh');
						}
		
									
}

?>