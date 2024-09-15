<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class capacitaciones extends CI_Controller {
	//public $requerimiento;
	
	public function __construct()
   	{
    	parent::__construct();
   	}

	function index(){
		$this->load->model("capacitaciones_model");


		$base = array(
			'head_titulo' => "Sistema SIP - Capacitaciones",
			'titulo' => "Capacitaciones",
			'subtitulo' => '',
			'js' => array('js/si_validaciones.js'),
			'side_bar' => true,
			'menu' => $this -> load -> view('layout2.0/menus/menu_sip','',TRUE)
					  );
		
		$pagina['capacitaciones'] = $this->capacitaciones_model->listar_capacitaciones();
		$base['cuerpo'] = $this -> load -> view('sip/capacitaciones/gestion',$pagina,TRUE);
		$this -> load -> view('layout2.0./layout',$base);
					}

	function guardar_capacitacion(){
		$this->load->model("capacitaciones_model");
		$data = array(
			'id' => $_POST['id'],
			'nombre' => $_POST['nombre']
					 );
		$this->capacitaciones_model->ingresar($data);		
		redirect('sip/capacitaciones', 'refresh');
							}
							 
	function actualizar_capacitaciones(){
		$this->load->model("capacitaciones_model");
			$id = $_POST['id'];
			$data = array(
			'nombre' => $_POST['nombre']
   			    		 );
		$this->capacitaciones_model->actualizar_capacitaciones($id,$data);
		redirect('sip/capacitaciones', 'refresh');			
								 }

	function modal_editar($id){
		$this->load->model("capacitaciones_model");
		$pagina['datos_capacitaciones']= $this->capacitaciones_model->get_capacitaciones($id);
		$this->load->view('sip/capacitaciones/modal_editar_capacitaciones', $pagina);
							  }

	 function eliminar($id)
    {
        $this->load->model("capacitaciones_model");
        $this->capacitaciones_model->eliminar($id);
        echo "<script>alert('Registro Eliminado')</script>";
        redirect('sip/capacitaciones', 'refresh');
    }			
		 }

?>