<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Home extends CI_Controller {
	public $requerimiento;
	public function __construct()
   	{
    	parent::__construct();
    	$this->load->library('session');
		if ($this->session->userdata('logged') == FALSE)
			redirect('/usuarios/login/index', 'refresh');
		elseif($this->session->userdata('tipo') == 1)
			$this->menu = $this->load->view('layout2.0/menus/menu_admin','',TRUE);
		elseif($this->session->userdata('tipo') == 3 && $this->session->userdata('subtipo') == 3)
			$this->menu = $this->load->view('layout2.0/menus/menu_est','',TRUE);
		elseif($this->session->userdata('tipo') == 3 && $this->session->userdata('subtipo') == 1)
			$this->menu = $this->load->view('layout2.0/menus/menu_mandante','',TRUE);
		elseif($this->session->userdata('tipo') == 5)
			$this->menu = $this->load->view('layout2.0/menus/menu_sip','',TRUE);
		else
			redirect('/usuarios/login/index', 'refresh');
   	}


   	
	function index(){
		$this->load->model("Usuarios_model");
		$this->load->library("session");

		if($this->session->userdata('tipo') == 5 && $this->session->userdata('subtipo') == 105)
			$unidad_de_negocio = 'Unidad de Negocio: TTCU Talcahuano';
		elseif($this->session->userdata('tipo') == 5 && $this->session->userdata('subtipo') == 106)
			$unidad_de_negocio = 'Unidad de Negocio: TTCU Temuco';
		elseif($this->session->userdata('tipo') == 5 && $this->session->userdata('subtipo') == 107)
			$unidad_de_negocio = 'Unidad de Negocio: TTCU Chillan';
		elseif($this->session->userdata('tipo') == 5 && $this->session->userdata('subtipo') == 108)
			$unidad_de_negocio = 'Unidad de Negocio: Servicios TTCU';
		elseif($this->session->userdata('tipo') == 5 && $this->session->userdata('subtipo') == 110)
			$unidad_de_negocio = 'Unidad de Negocio: Administrativo TTCU';

		$base = array(
			'head_titulo' => "Sistema EST",
			'titulo' => "Empresa: TCCU S.A.",
				'subtitulo' => $unidad_de_negocio,
			'side_bar' => true,
			'js' => array('plugins/bootstrap-progressbar/bootstrap-progressbar.min.js','plugins/nvd3/lib/d3.v3.js','plugins/nvd3/nv.d3.min.js','plugins/nvd3/src/models/historicalBar.js','plugins/nvd3/src/models/historicalBarChart.js','plugins/nvd3/src/models/stackedArea.js','plugins/nvd3/src/models/stackedAreaChart.js','plugins/jquery.sparkline/jquery.sparkline.js','plugins/easy-pie-chart/dist/jquery.easypiechart.min.js', 'js/index.js'),
			'css' => array('plugins/nvd3/nv.d3.min.css'),
			'lugar' => array(array('url' => '', 'txt' => 'Inicio') ),
			'menu' => $this->menu
		);

		$pagina = "";

		$base['cuerpo'] = $this->load->view('home/home',$pagina,TRUE);
		$this->load->view('layout2.0/layout',$base);
	}

}
?>