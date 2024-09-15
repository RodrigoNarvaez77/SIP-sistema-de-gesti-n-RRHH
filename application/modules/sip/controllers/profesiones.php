<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class profesiones extends CI_Controller {
	//public $requerimiento;
	
	public function __construct()
   	{
    	parent::__construct();
   	}

	function index(){
		$this->load->model("profesiones_model");


		$base = array(
			'head_titulo' => "Sistema RRHH - Profesiones",
			'titulo' => "Modulo Especialidades",
			'subtitulo' => '',
			'js' => array('js/si_validaciones.js'),
			'side_bar' => true,
			'menu' => $this -> load -> view('layout2.0/menus/menu_sip','',TRUE)
					  );
		
		$pagina['profesiones'] = $this->profesiones_model->listar();
		$base['cuerpo'] = $this -> load -> view('sip/profesion/gestion',$pagina,TRUE);
		$this -> load -> view('layout2.0./layout',$base);
					}

	function guardar_profesion(){
		$this->load->model("profesiones_model");
		$data = array(
			'id' => $_POST['id'],
			'nombre' => $_POST['nombre']
					 );
		$this->profesiones_model->ingresar($data);		
		redirect('sip/profesiones', 'refresh');
							}
							 
	function actualizar_especialidad(){
		$this->load->model("profesiones_model");
			$id = $_POST['id'];
			$data = array(
			'nombre' => $_POST['nombre']
   			    		 );
		$this->profesiones_model->actualizar_profesiones($id,$data);
		redirect('sip/profesiones', 'refresh');			
								 }

	function modal_editar($id){
		$this->load->model("profesiones_model");
		$pagina['datos_profesiones']= $this->profesiones_model->get_profesiones($id);
		$this->load->view('sip/profesion/modal_editar_profesion', $pagina);
							  }
		

	function eliminar($id)
    {
        $this->load->model("profesiones_model");
        $this->profesiones_model->eliminar($id);
        echo "<script>alert('Registro Eliminado')</script>";
        redirect('sip/profesiones', 'refresh');
    }			
		 }

?>