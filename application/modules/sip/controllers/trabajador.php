<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Trabajador extends CI_Controller {
	//public $requerimiento;
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		if ($this->session->userdata('logged') == FALSE) {
			echo "<script>alert('No puede acceder al contenido')</script>";
			redirect('/usuarios/login/index', 'refresh');
		} else {
			$this->load->model("personal_model");
			$this->load->model("estado_model");
			$this->load->model("tecnicos_model");
			$this->load->model("universitarios_model");
			$this->load->model("especialidad_model");
		}
	}

	function index(){	
		$base = array(
			'head_titulo' => "Sistema SIP - Personal",
			'titulo' => "Listado de Personal",
			'subtitulo' => '',
			'side_bar' => true,
			'menu' => $this -> load -> view('layout2.0/menus/menu_sip','',TRUE),
			'js' => array('js/lista_req.js'),
			'js' => array('js/si_validaciones.js'),
			'css' =>array('plugins/DataTables/media/css/jquery.dataTables.min.css',
				'plugins/DataTables/media/css/dataTables.bootstrap.min.css',
				'plugins/DataTables/FixedColumns/css/fixedColumns.dataTables.css'
				),
			);
		$pagina['personal'] = $this->personal_model->listar();
		$pagina['estadolista']= $this->estado_model->estadolista();
		$pagina['profesionlista']= $this->tecnicos_model->estadotecnico();
		$pagina['universidadlista']= $this->universitarios_model->estadouniversidad();
		$pagina['especialidadlista']= $this->especialidad_model->estadoespecialidad();
		$base['cuerpo'] = $this -> load -> view('sip/trabajador/gestion',$pagina,TRUE);
		$this -> load -> view('layout2.0./layout',$base);
	}

	function modificar($id){
		$this->load->model("personal_model");
		$this->load->model("capacitaciones_model");
		$this->load->model("trabajador_capacitacion_model");
		$this->load->model("estado_model");
		$this->load->model("tecnicos_model");
		$this->load->model("universitarios_model");
		$this->load->model("especialidad_model");
		$this->load->model("licencia_perfil_model");
		$base = array(
			'head_titulo' => "Sistema SIP - Personal",
			'titulo' => "Listado de Personal",
			'subtitulo' => '',
			'side_bar' => true,
			'js' => array('js/lista_req.js'),
			'js' => array('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js','js/si_datepicker_fecha_nacimiento.js', 'js/si_datatable.js', 'js/si_validaciones.js', 'js/si_datepicker_asistencia.js','js/si_datepicker_fecha_nacimiento_df_1.js','js/si_datepicker_fecha_nacimiento_df_2.js','js/si_datepicker_fecha_nacimiento_df_3.js','js/si_datepicker_fecha_nacimiento_df_4.js','js/si_datepicker_fecha_nacimiento_df_5.js','js/si_datepicker_fecha_nacimiento_df_6.js','js/si_datepicker_fecha_nacimiento_df_7.js','js/si_datepicker_fecha_nacimiento_df_8.js'), 
			'css' =>array('plugins/DataTables/media/css/jquery.dataTables.min.css',
				'plugins/DataTables/media/css/dataTables.bootstrap.min.css',
				'plugins/DataTables/FixedColumns/css/fixedColumns.dataTables.css'),
			'menu' => $this -> load -> view('layout2.0/menus/menu_sip','',TRUE)
			);

$pagina = "";
$todo_el_formulario = $this->personal_model->get_trabajador($id);
$lista_aux = array();
if (!empty($todo_el_formulario)){
	foreach ($todo_el_formulario as $rm) {
		$aux = new stdClass();
		$aux->id = $rm->id;
		$aux->nombre = $rm->nombre;
		$aux->rut = $rm->rut;
		$aux->apellido_paterno = $rm->apellido_paterno;
		$aux->apellido_materno = $rm->apellido_materno;
		$aux->fecha_nacimiento = $rm->fecha_nacimiento;
		$aux->fecha_matrimonio = $rm->fecha_matrimonio;
		$aux->nacionalidad = $rm->nacionalidad;
		$aux->n_hijos = $rm->n_hijos;
		$aux->direccion = $rm->direccion;
		$aux->telefono_dp = $rm->telefono_dp;
		$aux->celular = $rm->celular;
		$aux->estado_civil = $rm->estado_civil;
		$aux->valor_plan = $rm->valor_plan;
		$aux->sueldo_depositado = $rm->sueldo_depositado;
		$aux->banco = $rm->banco;
		$aux->imagen = $rm->imagen;
		$aux->nombrec = $rm->nombrec;
		$aux->apellidos = $rm->apellidos;
		$aux->calle = $rm->calle;
		$aux->villa = $rm->villa;
		$aux->ciudad = $rm->ciudad;
		$aux->comuna = $rm->comuna;
		$aux->regionc = $rm->regionc;
		$aux->ntelefono = $rm->ntelefono;
		$aux->parentesco = $rm->parentesco;
		$aux->primer_apellido = $rm->primer_apellido;
		$aux->nombres = $rm->nombres;
		$aux->rut_familiar = $rm->rut_familiar;
		$aux->carga_familiar = $rm->carga_familiar;
		$aux->parentesco_2 = $rm->parentesco_2;
		$aux->primer_apellido_2 = $rm->primer_apellido_2;
		$aux->nombres_2 = $rm->nombres_2;
		$aux->rut_familiar_2 = $rm->rut_familiar_2;
		$aux->carga_familiar_2 = $rm->carga_familiar_2;
		$aux->parentesco_3 = $rm->parentesco_3;
		$aux->primer_apellido_3 = $rm->primer_apellido_3;
		$aux->nombres_3 = $rm->nombres_3;
		$aux->rut_familiar_3 = $rm->rut_familiar_3;
		$aux->carga_familiar_3 = $rm->carga_familiar_3;
		$aux->parentesco_4 = $rm->parentesco_4;
		$aux->primer_apellido_4 = $rm->primer_apellido_4;
		$aux->nombres_4 = $rm->nombres_4;
		$aux->rut_familiar_4 = $rm->rut_familiar_4;
		$aux->carga_familiar_4 = $rm->carga_familiar_4;
		$aux->parentesco_5 = $rm->parentesco_5;
		$aux->primer_apellido_5 = $rm->primer_apellido_5;
		$aux->nombres_5 = $rm->nombres_5;
		$aux->rut_familiar_5 = $rm->rut_familiar_5;
		$aux->carga_familiar_5 = $rm->carga_familiar_5;
		$aux->parentesco_6 = $rm->parentesco_6;
		$aux->primer_apellido_6 = $rm->primer_apellido_6;
		$aux->nombres_6 = $rm->nombres_6;
		$aux->rut_familiar_6 = $rm->rut_familiar_6;
		$aux->carga_familiar_6 = $rm->carga_familiar_6;
		$aux->parentesco_7 = $rm->parentesco_7;
		$aux->primer_apellido_7 = $rm->primer_apellido_7;
		$aux->nombres_7 = $rm->nombres_7;
		$aux->rut_familiar_7 = $rm->rut_familiar_7;
		$aux->carga_familiar_7 = $rm->carga_familiar_7;
		$aux->parentesco_8 = $rm->parentesco_8;
		$aux->primer_apellido_8 = $rm->primer_apellido_8;
		$aux->nombres_8 = $rm->nombres_8;
		$aux->rut_familiar_8 = $rm->rut_familiar_8;
		$aux->carga_familiar_8 = $rm->carga_familiar_8;
		$aux->segundo_apellido_1_df = $rm->segundo_apellido_1_df;
		$aux->sexo_df_1 = $rm->sexo_df_1;
		$aux->fecha_nacimiento_df_1 = $rm->fecha_nacimiento_df_1;
		$aux->segundo_apellido_2_df = $rm->segundo_apellido_2_df;
		$aux->sexo_df_2 = $rm->sexo_df_2;
		$aux->fecha_nacimiento_df_2 = $rm->fecha_nacimiento_df_2;
		$aux->segundo_apellido_3_df = $rm->segundo_apellido_3_df;
		$aux->sexo_df_3 = $rm->sexo_df_3;
		$aux->fecha_nacimiento_df_3 = $rm->fecha_nacimiento_df_3;
		$aux->segundo_apellido_4_df = $rm->segundo_apellido_4_df;
		$aux->sexo_df_4 = $rm->sexo_df_4;
		$aux->fecha_nacimiento_df_4 = $rm->fecha_nacimiento_df_4;
		$aux->segundo_apellido_5_df = $rm->segundo_apellido_5_df;
		$aux->sexo_df_5 = $rm->sexo_df_5;
		$aux->fecha_nacimiento_df_5 = $rm->fecha_nacimiento_df_5;
		$aux->segundo_apellido_6_df = $rm->segundo_apellido_6_df;
		$aux->sexo_df_6 = $rm->sexo_df_6;
		$aux->fecha_nacimiento_df_6 = $rm->fecha_nacimiento_df_6;
		$aux->segundo_apellido_7_df = $rm->segundo_apellido_7_df;
		$aux->sexo_df_7 = $rm->sexo_df_7;
		$aux->fecha_nacimiento_df_7 = $rm->fecha_nacimiento_df_7;
		$aux->segundo_apellido_8_df = $rm->segundo_apellido_8_df;
		$aux->sexo_df_8 = $rm->sexo_df_8;
		$aux->fecha_nacimiento_df_8 = $rm->fecha_nacimiento_df_8;
		$aux->calles = $rm->calles;
		$aux->villas = $rm->villas;
		$aux->ciudades = $rm->ciudades;
		$aux->region = $rm->region;
		$aux->n_telefono_d = $rm->n_telefono_d;
		$aux->comuna_d = $rm->comuna_d;
		$aux->vivienda_d = $rm->vivienda_d;
		$aux->establecimiento_1 = $rm->establecimiento_1;
		$aux->establecimiento_2 = $rm->establecimiento_2;
		$aux->establecimiento_3 = $rm->establecimiento_3;
		$aux->establecimiento_4 = $rm->establecimiento_4;
		$aux->establecimiento_5 = $rm->establecimiento_5;
		$aux->establecimiento_6 = $rm->establecimiento_6;
		$aux->establecimiento_7 = $rm->establecimiento_7;
		$aux->establecimiento_8 = $rm->establecimiento_8;
		$aux->establecimiento_9 = $rm->establecimiento_9;
		$aux->establecimiento_10 = $rm->establecimiento_10;
		$aux->establecimiento_11 = $rm->establecimiento_11;
		$aux->establecimiento_12 = $rm->establecimiento_12;
		$aux->establecimiento_13 = $rm->establecimiento_13;
		$aux->establecimiento_14 = $rm->establecimiento_14;
		$aux->establecimiento_15 = $rm->establecimiento_15;
		$aux->establecimiento_16 = $rm->establecimiento_16;
		$aux->establecimiento_17 = $rm->establecimiento_17;

		$get_tecnico_1 = $this->tecnicos_model->tecnicos($rm->c_tecnico_1);
		$aux->nombre_tecnico_1 = (isset($get_tecnico_1->nombre)?$get_tecnico_1->nombre:"");
		$aux->c_tecnico_1 = $rm->c_tecnico_1;

		$get_tecnico_2 = $this->tecnicos_model->tecnicos($rm->c_tecnico_2);
		$aux->nombre_tecnico_2 = (isset($get_tecnico_2->nombre)?$get_tecnico_2->nombre:"");
		$aux->c_tecnico_2 = $rm->c_tecnico_2;

		$get_tecnico_3 = $this->tecnicos_model->tecnicos($rm->c_tecnico_3);
		$aux->nombre_tecnico_3 = (isset($get_tecnico_3->nombre)?$get_tecnico_3->nombre:"");
		$aux->c_tecnico_3 = $rm->c_tecnico_3;

		$get_tecnico_4 = $this->tecnicos_model->tecnicos($rm->c_tecnico_4);
		$aux->nombre_tecnico_4 = (isset($get_tecnico_4->nombre)?$get_tecnico_4->nombre:"");
		$aux->c_tecnico_4 = $rm->c_tecnico_4;

		$get_tecnico_5 = $this->tecnicos_model->tecnicos($rm->c_tecnico_5);
		$aux->nombre_tecnico_5 = (isset($get_tecnico_5->nombre)?$get_tecnico_5->nombre:"");
		$aux->c_tecnico_5 = $rm->c_tecnico_5;

		$get_profesion_1 = $this->universitarios_model->universitario($rm->c_profesion_1);
		$aux->nombre_profesion_1 = (isset($get_profesion_1->nombre)?$get_profesion_1->nombre:"");
		$aux->c_profesion_1 = $rm->c_profesion_1;

		$get_profesion_2 = $this->universitarios_model->universitario($rm->c_profesion_2);
		$aux->nombre_profesion_2 = (isset($get_profesion_2->nombre)?$get_profesion_2->nombre:"");
		$aux->c_profesion_2 = $rm->c_profesion_2;

		$get_profesion_3 = $this->universitarios_model->universitario($rm->c_profesion_3);
		$aux->nombre_profesion_3 = (isset($get_profesion_3->nombre)?$get_profesion_3->nombre:"");
		$aux->c_profesion_3 = $rm->c_profesion_3;

		$get_profesion_4 = $this->universitarios_model->universitario($rm->c_profesion_4);
		$aux->nombre_profesion_4 = (isset($get_profesion_4->nombre)?$get_profesion_4->nombre:"");
		$aux->c_profesion_4 = $rm->c_profesion_4;

		$get_profesion_5 = $this->universitarios_model->universitario($rm->c_profesion_5);
		$aux->nombre_profesion_5 = (isset($get_profesion_5->nombre)?$get_profesion_5->nombre:"");
		$aux->c_profesion_5 = $rm->c_profesion_5;

		$get_especialidad_1 = $this->especialidad_model->especialidad($rm->c_especialidad_1);
		$aux->nombre_especialidad_1 = (isset($get_especialidad_1->nombre)?$get_especialidad_1->nombre:"");
		$aux->c_especialidad_1 = $rm->c_especialidad_1;

		$get_especialidad_2 = $this->especialidad_model->especialidad($rm->c_especialidad_2);
		$aux->nombre_especialidad_2 = (isset($get_especialidad_2->nombre)?$get_especialidad_2->nombre:"");
		$aux->c_especialidad_2 = $rm->c_especialidad_2;

		$get_especialidad_3 = $this->especialidad_model->especialidad($rm->c_especialidad_3);
		$aux->nombre_especialidad_3 = (isset($get_especialidad_3->nombre)?$get_especialidad_3->nombre:"");
		$aux->c_especialidad_3 = $rm->c_especialidad_3;

		$get_especialidad_4 = $this->especialidad_model->especialidad($rm->c_especialidad_4);
		$aux->nombre_especialidad_4 = (isset($get_especialidad_4->nombre)?$get_especialidad_4->nombre:"");
		$aux->c_especialidad_4 = $rm->c_especialidad_4;

		$get_especialidad_5 = $this->especialidad_model->especialidad($rm->c_especialidad_5);
		$aux->nombre_especialidad_5 = (isset($get_especialidad_5->nombre)?$get_especialidad_5->nombre:"");
		$aux->c_especialidad_5 = $rm->c_especialidad_5;

		$get_basico_e = $this->estado_model->estado($rm->basico_e);
		$aux->nombre_basico_e = (isset($get_basico_e->estado)?$get_basico_e->estado:"");
		$aux->basico_e = $rm->basico_e;

		$get_medios_e = $this->estado_model->estado($rm->medios_e);
		$aux->nombre_medios_e = (isset($get_medios_e->estado)?$get_medios_e->estado:"");
		$aux->medios_e = $rm->medios_e;

		$get_tecnicos_e_1 = $this->estado_model->estado($rm->tecnicos_e_1);
		$aux->nombre_tecnicos_e_1 = (isset($get_tecnicos_e_1->estado)?$get_tecnicos_e_1->estado:"");
		$aux->tecnicos_e_1 = $rm->tecnicos_e_1;

		$get_tecnicos_e_2 = $this->estado_model->estado($rm->tecnicos_e_2);
		$aux->nombre_tecnicos_e_2 = (isset($get_tecnicos_e_2->estado)?$get_tecnicos_e_2->estado:"");
		$aux->tecnicos_e_2 = $rm->tecnicos_e_2;

		$get_tecnicos_e_3 = $this->estado_model->estado($rm->tecnicos_e_3);
		$aux->nombre_tecnicos_e_3 = (isset($get_tecnicos_e_3->estado)?$get_tecnicos_e_3->estado:"");
		$aux->tecnicos_e_3 = $rm->tecnicos_e_3;

		$get_tecnicos_e_4 = $this->estado_model->estado($rm->tecnicos_e_4);
		$aux->nombre_tecnicos_e_4 = (isset($get_tecnicos_e_4->estado)?$get_tecnicos_e_4->estado:"");
		$aux->tecnicos_e_4 = $rm->tecnicos_e_4;

		$get_tecnicos_e_5 = $this->estado_model->estado($rm->tecnicos_e_5);
		$aux->nombre_tecnicos_e_5 = (isset($get_tecnicos_e_5->estado)?$get_tecnicos_e_5->estado:"");
		$aux->tecnicos_e_5 = $rm->tecnicos_e_5;

		$get_profesional_e_1 = $this->estado_model->estado($rm->profesional_e_1);
		$aux->nombre_profesional_e_1 = (isset($get_profesional_e_1->estado)?$get_profesional_e_1->estado:"");
		$aux->profesional_e_1 = $rm->profesional_e_1;

		$get_profesional_e_2 = $this->estado_model->estado($rm->profesional_e_2);
		$aux->nombre_profesional_e_2 = (isset($get_profesional_e_2->estado)?$get_profesional_e_2->estado:"");
		$aux->profesional_e_2 = $rm->profesional_e_2;

		$get_profesional_e_3 = $this->estado_model->estado($rm->profesional_e_3);
		$aux->nombre_profesional_e_3 = (isset($get_profesional_e_3->estado)?$get_profesional_e_3->estado:"");
		$aux->profesional_e_3 = $rm->profesional_e_3;

		$get_profesional_e_4 = $this->estado_model->estado($rm->profesional_e_4);
		$aux->nombre_profesional_e_4 = (isset($get_profesional_e_4->estado)?$get_profesional_e_4->estado:"");
		$aux->profesional_e_4 = $rm->profesional_e_4;

		$get_profesional_e_5 = $this->estado_model->estado($rm->profesional_e_5);
		$aux->nombre_profesional_e_5 = (isset($get_profesional_e_5->estado)?$get_profesional_e_5->estado:"");
		$aux->profesional_e_5 = $rm->profesional_e_5;

		$get_especialidad_e_1 = $this->estado_model->estado($rm->especialidad_e_1);
		$aux->nombre_especialidad_e_1 = (isset($get_especialidad_e_1->estado)?$get_especialidad_e_1->estado:"");
		$aux->especialidad_e_1 = $rm->especialidad_e_1;

		$get_especialidad_e_2 = $this->estado_model->estado($rm->especialidad_e_2);
		$aux->nombre_especialidad_e_2 = (isset($get_especialidad_e_2->estado)?$get_especialidad_e_2->estado:"");
		$aux->especialidad_e_2 = $rm->especialidad_e_2;

		$get_especialidad_e_3 = $this->estado_model->estado($rm->especialidad_e_3);
		$aux->nombre_especialidad_e_3 = (isset($get_especialidad_e_3->estado)?$get_especialidad_e_3->estado:"");
		$aux->especialidad_e_3 = $rm->especialidad_e_3;

		$get_especialidad_e_4 = $this->estado_model->estado($rm->especialidad_e_4);
		$aux->nombre_especialidad_e_4 = (isset($get_especialidad_e_4->estado)?$get_especialidad_e_4->estado:"");
		$aux->especialidad_e_4 = $rm->especialidad_e_4;

		$get_especialidad_e_5 = $this->estado_model->estado($rm->especialidad_e_5);
		$aux->nombre_especialidad_e_5 = (isset($get_especialidad_e_5->estado)?$get_especialidad_e_5->estado:"");
		$aux->especialidad_e_5 = $rm->especialidad_e_5;

		$aux->documento_1 = $rm->documento_1;
		$aux->documento_2 = $rm->documento_2;
		$aux->documento_3 = $rm->documento_3;
		$aux->documento_4 = $rm->documento_4;
		$aux->documento_5 = $rm->documento_5;
		$aux->documento_6 = $rm->documento_6;
		$aux->documento_7 = $rm->documento_7;
		$aux->documento_8 = $rm->documento_8;
		$aux->documento_9 = $rm->documento_9;
		$aux->documento_10 = $rm->documento_10;
		$aux->documento_11 = $rm->documento_11;
		$aux->documento_12 = $rm->documento_12;
		$aux->documento_13 = $rm->documento_13;
		$aux->documento_14 = $rm->documento_14;
		$aux->documento_15 = $rm->documento_15;
		$aux->documento_16 = $rm->documento_16;
		$aux->documento_17 = $rm->documento_17;

		$get_licencia_perfil_1 = $this->licencia_perfil_model->licencia($rm->licencia);
		$aux->nombre_licencia_perfil_1 = (isset($get_licencia_perfil_1->licencia) ? $get_licencia_perfil_1->nombre : "");
		$aux->licencia = $rm->licencia;

		$aux->clase = $rm->clase;
		$aux->talla_pantalon = $rm->talla_pantalon;
		$aux->talla_casaca = $rm->talla_casaca;
		$aux->talla_buzo = $rm->talla_buzo;
		$aux->talla_calzado = $rm->talla_calzado;
		$aux->situacion_militar = $rm->situacion_militar;
		$aux->texto = $rm->texto;
		array_push($lista_aux, $aux);
		unset($aux);
	}
}

$pagina             = "";
$todo_el_formulario_1 = $this->capacitaciones_model->listar_capacitaciones($id);
$lista_aux_1          = array();
if (!empty($todo_el_formulario_1)) {
	foreach ($todo_el_formulario_1 as $rm) {
		$aux         = new stdClass();
		$aux->id     = $rm->id;
		$aux->nombre = $rm->nombre;
		$aux->estado = $this->trabajador_capacitacion_model->consultar_cap_trabajador($rm->id, $id);

		array_push($lista_aux_1, $aux);
		unset($aux);
	}
}

$pagina['listado'] = $lista_aux;
$pagina['capacitaciones'] = $lista_aux_1;
$pagina['licencia_lista'] = $this->licencia_perfil_model->listar_licencia();
$pagina['editar_trabajador'] = $this->personal_model->get_trabajador($id);
$pagina['editar_texto'] = $this->personal_model->editar_trabajador($id);
$pagina['estadolista'] = $this->estado_model->listar_estado();
$pagina['tecnicolista'] = $this->tecnicos_model->estadotecnico();
$pagina['universidadlista'] = $this->universitarios_model->listar_universidad();
$pagina['especialidadlista'] = $this->especialidad_model->listar_especialidad();
$base['cuerpo'] = $this -> load -> view('sip/trabajador/editar_trabajador_gestion',$pagina,TRUE);
$this -> load -> view('layout2.0./layout',$base);

}

function buscar_detalles_trabajador($id){
	$this->load->model("personal_model");
	$consulta = $this->personal_model->get_detalles_trabajador($id);
	echo json_encode($consulta);
		//print_r($consulta);
}

function guardar_perfil($id_trabajador = false){

	$id_trabajador = $_POST['id'];
	$this->load->model("personal_model");
	$this->load->model("perfil_cargo_model");
	$data = array(
		'perfil_de_cargo' => $_POST['id_select_perfil'],
		);
	$guardar = $_POST['id_select_perfil'];
	echo $guardar;

	$this->personal_model->guardar_perfil($data,$id_trabajador);			
	redirect('sip/trabajador/agregar_perfil/' .$id_trabajador. '', 'refresh');
}

function agregar_perfil($id){
	$this->load->model("personal_model");
	$this->load->model("capacitaciones_model");
	$this->load->model("trabajador_capacitacion_model");
	$this->load->model("estado_model");
	$this->load->model("tecnicos_model");
	$this->load->model("universitarios_model");
	$this->load->model("perfil_cargo_model");
	$this->load->model("gestion_model");
	$this->load->model("area_model");
	$this->load->model("sede_model");
	$this->load->model("estado_perfil_model");
	$this->load->model("tecnicos_perfil_model");
	$this->load->model("universitarios_perfil_model");
	$this->load->model("especialidad_perfil_model");
	$this->load->model("capacitaciones_perfil_model");
	$this->load->model("especialidad_model");
	$base = array(
		'head_titulo' => "Sistema SIP - Agregar Perfil",
		'titulo' => "Agregar Perfil de Cargo",
		'subtitulo' => '',
		'side_bar' => true,
		'js' =>array('js/lista_req.js'),
		'js' =>array('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js','js/si_datepicker_fecha_nacimiento.js', 'js/si_datatable.js', 'js/si_validaciones.js', 'js/si_datepicker_asistencia.js','js/si_datepicker_fecha_nacimiento_df_1.js','js/si_datepicker_fecha_nacimiento_df_2.js','js/si_datepicker_fecha_nacimiento_df_3.js','js/si_datepicker_fecha_nacimiento_df_4.js','js/si_datepicker_fecha_nacimiento_df_5.js','js/si_datepicker_fecha_nacimiento_df_6.js','js/si_datepicker_fecha_nacimiento_df_7.js','js/si_datepicker_fecha_nacimiento_df_8.js'), 
		'css' =>array('plugins/DataTables/media/css/jquery.dataTables.min.css',
			'plugins/DataTables/media/css/dataTables.bootstrap.min.css',
			'plugins/DataTables/FixedColumns/css/fixedColumns.dataTables.css'),
		'menu' => $this -> load -> view('layout2.0/menus/menu_sip','',TRUE)
		);

$pagina = "";
$todo_el_formulario_2 = $this->personal_model->get_listar($id);
$lista_aux_2          = array();
if (!empty($todo_el_formulario_2)) {
	foreach ($todo_el_formulario_2 as $rm) {
		$aux         = new stdClass();
		$aux->id     = $rm->id;
		$aux->nombre = $rm->nombre;
		$aux->rut = $rm->rut;
		$aux->apellido_materno = $rm->apellido_materno;
		$aux->apellido_paterno = $rm->apellido_paterno;
		$aux->perfil_de_cargo = $rm->perfil_de_cargo;

		$get_basico_e = $this->estado_model->estado($rm->basico_e);
		$aux->nombre_basico_e = (isset($get_basico_e->estado)?$get_basico_e->estado:"");
		$aux->basico_e = $rm->basico_e;


		$get_medios_e = $this->estado_model->estado($rm->medios_e);
		$aux->nombre_medios_e = (isset($get_medios_e->estado)?$get_medios_e->estado:"");
		$aux->medios_e = $rm->medios_e;

		$get_tecnico_1 = $this->tecnicos_model->tecnicos($rm->c_tecnico_1);
		$aux->nombre_tecnico_1 = (isset($get_tecnico_1->nombre)?$get_tecnico_1->nombre:"");
		$aux->c_tecnico_1 = $rm->c_tecnico_1;

		$get_tecnico_2 = $this->tecnicos_model->tecnicos($rm->c_tecnico_2);
		$aux->nombre_tecnico_2 = (isset($get_tecnico_2->nombre)?$get_tecnico_2->nombre:"");
		$aux->c_tecnico_2 = $rm->c_tecnico_2;

		$get_tecnico_3 = $this->tecnicos_model->tecnicos($rm->c_tecnico_3);
		$aux->nombre_tecnico_3 = (isset($get_tecnico_3->nombre)?$get_tecnico_3->nombre:"");
		$aux->c_tecnico_3 = $rm->c_tecnico_3;

		$get_tecnico_4 = $this->tecnicos_model->tecnicos($rm->c_tecnico_4);
		$aux->nombre_tecnico_4 = (isset($get_tecnico_4->nombre)?$get_tecnico_4->nombre:"");
		$aux->c_tecnico_4 = $rm->c_tecnico_4;

		$get_tecnico_5 = $this->tecnicos_model->tecnicos($rm->c_tecnico_5);
		$aux->nombre_tecnico_5 = (isset($get_tecnico_5->nombre)?$get_tecnico_5->nombre:"");
		$aux->c_tecnico_5 = $rm->c_tecnico_5;

		$get_profesion_1 = $this->universitarios_model->universitario($rm->c_profesion_1);
		$aux->nombre_profesion_1 = (isset($get_profesion_1->nombre)?$get_profesion_1->nombre:"");
		$aux->c_profesion_1 = $rm->c_profesion_1;

		$get_profesion_2 = $this->universitarios_model->universitario($rm->c_profesion_2);
		$aux->nombre_profesion_2 = (isset($get_profesion_2->nombre)?$get_profesion_2->nombre:"");
		$aux->c_profesion_2 = $rm->c_profesion_2;

		$get_profesion_3 = $this->universitarios_model->universitario($rm->c_profesion_3);
		$aux->nombre_profesion_3 = (isset($get_profesion_3->nombre)?$get_profesion_3->nombre:"");
		$aux->c_profesion_3 = $rm->c_profesion_3;

		$get_profesion_4 = $this->universitarios_model->universitario($rm->c_profesion_4);
		$aux->nombre_profesion_4 = (isset($get_profesion_4->nombre)?$get_profesion_4->nombre:"");
		$aux->c_profesion_4 = $rm->c_profesion_4;

		$get_profesion_5 = $this->universitarios_model->universitario($rm->c_profesion_5);
		$aux->nombre_profesion_5 = (isset($get_profesion_5->nombre)?$get_profesion_5->nombre:"");
		$aux->c_profesion_5 = $rm->c_profesion_5;

		$get_especialidad_1 = $this->especialidad_model->especialidad($rm->c_especialidad_1);
		$aux->nombre_especialidad_1 = (isset($get_especialidad_1->nombre)?$get_especialidad_1->nombre:"");
		$aux->c_especialidad_1 = $rm->c_especialidad_1;

		$get_especialidad_2 = $this->especialidad_model->especialidad($rm->c_especialidad_2);
		$aux->nombre_especialidad_2 = (isset($get_especialidad_2->nombre)?$get_especialidad_2->nombre:"");
		$aux->c_especialidad_2 = $rm->c_especialidad_2;

		$get_especialidad_3 = $this->especialidad_model->especialidad($rm->c_especialidad_3);
		$aux->nombre_especialidad_3 = (isset($get_especialidad_3->nombre)?$get_especialidad_3->nombre:"");
		$aux->c_especialidad_3 = $rm->c_especialidad_3;

		$get_especialidad_4 = $this->especialidad_model->especialidad($rm->c_especialidad_4);
		$aux->nombre_especialidad_4 = (isset($get_especialidad_4->nombre)?$get_especialidad_4->nombre:"");
		$aux->c_especialidad_4 = $rm->c_especialidad_4;

		$get_especialidad_5 = $this->especialidad_model->especialidad($rm->c_especialidad_5);
		$aux->nombre_especialidad_5 = (isset($get_especialidad_5->nombre)?$get_especialidad_5->nombre:"");
		$aux->c_especialidad_5 = $rm->c_especialidad_5;	

		$get_tecnicos_e_1 = $this->estado_model->estado($rm->tecnicos_e_1);
		$aux->nombre_tecnicos_e_1 = (isset($get_tecnicos_e_1->estado)?$get_tecnicos_e_1->estado:"");
		$aux->tecnicos_e_1 = $rm->tecnicos_e_1;

		$get_tecnicos_e_2 = $this->estado_model->estado($rm->tecnicos_e_2);
		$aux->nombre_tecnicos_e_2 = (isset($get_tecnicos_e_2->estado)?$get_tecnicos_e_2->estado:"");
		$aux->tecnicos_e_2 = $rm->tecnicos_e_2;

		$get_tecnicos_e_3 = $this->estado_model->estado($rm->tecnicos_e_3);
		$aux->nombre_tecnicos_e_3 = (isset($get_tecnicos_e_3->estado)?$get_tecnicos_e_3->estado:"");
		$aux->tecnicos_e_3 = $rm->tecnicos_e_3;

		$get_tecnicos_e_4 = $this->estado_model->estado($rm->tecnicos_e_4);
		$aux->nombre_tecnicos_e_4 = (isset($get_tecnicos_e_4->estado)?$get_tecnicos_e_4->estado:"");
		$aux->tecnicos_e_4 = $rm->tecnicos_e_4;

		$get_tecnicos_e_5 = $this->estado_model->estado($rm->tecnicos_e_5);
		$aux->nombre_tecnicos_e_5 = (isset($get_tecnicos_e_5->estado)?$get_tecnicos_e_5->estado:"");
		$aux->tecnicos_e_5 = $rm->tecnicos_e_5;

		$get_profesional_e_1 = $this->estado_model->estado($rm->profesional_e_1);
		$aux->nombre_profesional_e_1 = (isset($get_profesional_e_1->estado)?$get_profesional_e_1->estado:"");
		$aux->profesional_e_1 = $rm->profesional_e_1;

		$get_profesional_e_2 = $this->estado_model->estado($rm->profesional_e_2);
		$aux->nombre_profesional_e_2 = (isset($get_profesional_e_2->estado)?$get_profesional_e_2->estado:"");
		$aux->profesional_e_2 = $rm->profesional_e_2;

		$get_profesional_e_3 = $this->estado_model->estado($rm->profesional_e_3);
		$aux->nombre_profesional_e_3 = (isset($get_profesional_e_3->estado)?$get_profesional_e_3->estado:"");
		$aux->profesional_e_3 = $rm->profesional_e_3;

		$get_profesional_e_4 = $this->estado_model->estado($rm->profesional_e_4);
		$aux->nombre_profesional_e_4 = (isset($get_profesional_e_4->estado)?$get_profesional_e_4->estado:"");
		$aux->profesional_e_4 = $rm->profesional_e_4;

		$get_profesional_e_5 = $this->estado_model->estado($rm->profesional_e_5);
		$aux->nombre_profesional_e_5 = (isset($get_profesional_e_5->estado)?$get_profesional_e_5->estado:"");
		$aux->profesional_e_5 = $rm->profesional_e_5;

		$get_especialidad_e_1 = $this->estado_model->estado($rm->especialidad_e_1);
		$aux->nombre_especialidad_e_1 = (isset($get_especialidad_e_1->estado)?$get_especialidad_e_1->estado:"");
		$aux->especialidad_e_1 = $rm->especialidad_e_1;

		$get_especialidad_e_2 = $this->estado_model->estado($rm->especialidad_e_2);
		$aux->nombre_especialidad_e_2 = (isset($get_especialidad_e_2->estado)?$get_especialidad_e_2->estado:"");
		$aux->especialidad_e_2 = $rm->especialidad_e_2;

		$get_especialidad_e_3 = $this->estado_model->estado($rm->especialidad_e_3);
		$aux->nombre_especialidad_e_3 = (isset($get_especialidad_e_3->estado)?$get_especialidad_e_3->estado:"");
		$aux->especialidad_e_3 = $rm->especialidad_e_3;

		$get_especialidad_e_4 = $this->estado_model->estado($rm->especialidad_e_4);
		$aux->nombre_especialidad_e_4 = (isset($get_especialidad_e_4->estado)?$get_especialidad_e_4->estado:"");
		$aux->especialidad_e_4 = $rm->especialidad_e_4;

		$get_especialidad_e_5 = $this->estado_model->estado($rm->especialidad_e_5);
		$aux->nombre_especialidad_e_5 = (isset($get_especialidad_e_5->estado)?$get_especialidad_e_5->estado:"");
		$aux->especialidad_e_5 = $rm->especialidad_e_5;


		$get_dependencia_perfil_1 = $this->perfil_cargo_model->listar_perfiles_cargo($rm->perfil_de_cargo);
		$aux->nombre_dependencia_perfil_1 = (isset($get_dependencia_perfil_1->nombre) ? $get_dependencia_perfil_1->nombre: "");
		$aux->perfil_de_cargo = $rm->perfil_de_cargo;
		
		$perfil_de_cargo_id = $rm->perfil_de_cargo;

		$trabajador_estudio_basico[0] = $rm->basico_e;
		$trabajador_estudio_medio[1] = $rm->medios_e;

		$trabajador_estudio_tecnico_1[0] = $rm->c_tecnico_1;
		$trabajador_estudio_tecnico_1[1] = $rm->c_tecnico_2;
		$trabajador_estudio_tecnico_1[2] = $rm->c_tecnico_3;
		$trabajador_estudio_tecnico_1[3] = $rm->c_tecnico_4;
		$trabajador_estudio_tecnico_1[4] = $rm->c_tecnico_5;

		$trabajador_estado_tecnico_1[0] = $rm->tecnicos_e_1;
		$trabajador_estado_tecnico_1[1] = $rm->tecnicos_e_2;
		$trabajador_estado_tecnico_1[2] = $rm->tecnicos_e_3;
		$trabajador_estado_tecnico_1[3] = $rm->tecnicos_e_4;
		$trabajador_estado_tecnico_1[4] = $rm->tecnicos_e_5;

		$trabajador_estudio_universitario_1[0] = $rm->c_profesion_1;
		$trabajador_estudio_universitario_1[1] = $rm->c_profesion_2;
		$trabajador_estudio_universitario_1[2] = $rm->c_profesion_3;
		$trabajador_estudio_universitario_1[3] = $rm->c_profesion_4;
		$trabajador_estudio_universitario_1[4] = $rm->c_profesion_5;

		$trabajador_estado_universitario_1[0] = $rm->profesional_e_1;
		$trabajador_estado_universitario_1[1] = $rm->profesional_e_2;
		$trabajador_estado_universitario_1[2] = $rm->profesional_e_3;
		$trabajador_estado_universitario_1[3] = $rm->profesional_e_4;
		$trabajador_estado_universitario_1[4] = $rm->profesional_e_5;
		
		$trabajador_estudio_especialidad_1[0] = $rm->c_especialidad_1;
		$trabajador_estudio_especialidad_1[1] = $rm->c_especialidad_2;
		$trabajador_estudio_especialidad_1[2] = $rm->c_especialidad_3;
		$trabajador_estudio_especialidad_1[3] = $rm->c_especialidad_4;
		$trabajador_estudio_especialidad_1[4] = $rm->c_especialidad_5;

		$trabajador_estado_especialidad_1[0] = $rm->especialidad_e_1;
		$trabajador_estado_especialidad_1[1] = $rm->especialidad_e_2;
		$trabajador_estado_especialidad_1[2] = $rm->especialidad_e_3;
		$trabajador_estado_especialidad_1[3] = $rm->especialidad_e_4;
		$trabajador_estado_especialidad_1[4] = $rm->especialidad_e_5;

		array_push($lista_aux_2, $aux);
		unset($aux);
	}
}

$pagina = "";	
$todo_el_formulario_3 = $this->perfil_cargo_model->listar_perfiles_cargo_dos($id);
$lista_aux_3 = array();
if (!empty($todo_el_formulario_3)) {
	foreach ($todo_el_formulario_3 as $rm) {
		$aux = new stdClass();
		$aux->id = $rm->id;
		$aux->nombre = $rm->nombre;
		$aux->version = $rm->version;

		$get_area_perfil_1 = $this->area_model->area_uno($rm->area_perfil);
		$aux->nombre_area_perfil_1 = (isset($get_area_perfil_1->nombre) ? $get_area_perfil_1->nombre: "");
		$aux->area_perfil = $rm->area_perfil;

		$get_dependencia_perfil_1 = $this->perfil_cargo_model->perfiles_de_cargos($rm->dependencia_perfil);
		$aux->nombre_dependencia_perfil_1 = (isset($get_dependencia_perfil_1->nombre) ? $get_dependencia_perfil_1->nombre: "");
		$aux->dependencia_perfil = $rm->dependencia_perfil;

		$get_sede_perfil_1 = $this->sede_model->sede_uno($rm->sede_perfil);
		$aux->nombre_sede_perfil_1 = (isset($get_sede_perfil_1->nombre) ? $get_sede_perfil_1->nombre: "");
		$aux->sede_perfil = $rm->sede_perfil;

		$get_escolaridad_basica_perfil_1 = $this->estado_perfil_model->estado($rm->escolaridad_basica);
		$aux->nombre_escolaridad_basica  = (isset($get_escolaridad_basica_perfil_1->estado) ? $get_escolaridad_basica_perfil_1->estado : "");
		$aux->escolaridad_basica = $rm->escolaridad_basica;

		$get_escolaridad_perfil_1 = $this->estado_perfil_model->estado($rm->escolaridad);
		$aux->nombre_escolaridad_perfil_1 = (isset($get_escolaridad_perfil_1->estado) ? $get_escolaridad_perfil_1->estado : "");
		$aux->escolaridad = $rm->escolaridad;

		$get_tecnico_perfil_1 = $this->tecnicos_perfil_model->tecnicos($rm->tecnicos_perfil_1);
		$aux->nombre_tecnicos_perfil_1 = (isset($get_tecnico_perfil_1->nombre) ? $get_tecnico_perfil_1->nombre : "");
		$aux->tecnicos_perfil_1 = $rm->tecnicos_perfil_1;

		$get_tecnico_perfil_2 = $this->tecnicos_perfil_model->tecnicos($rm->tecnicos_perfil_2);
		$aux->nombre_tecnicos_perfil_2 = (isset($get_tecnico_perfil_2->nombre) ? $get_tecnico_perfil_2->nombre : "");
		$aux->tecnicos_perfil_2 = $rm->tecnicos_perfil_2;

		$get_tecnico_perfil_3 = $this->tecnicos_perfil_model->tecnicos($rm->tecnicos_perfil_3);
		$aux->nombre_tecnicos_perfil_3 = (isset($get_tecnico_perfil_3->nombre) ? $get_tecnico_perfil_3->nombre : "");
		$aux->tecnicos_perfil_3 = $rm->tecnicos_perfil_3;

		$get_universitario_perfil_1 = $this->universitarios_perfil_model->universitario($rm->universitario_perfil_1);
		$aux->nombre_universitario_perfil_1 = (isset($get_universitario_perfil_1->nombre) ? $get_universitario_perfil_1->nombre : "");
		$aux->universitario_perfil_1 = $rm->universitario_perfil_1;

		$get_universitario_perfil_2 = $this->universitarios_perfil_model->universitario($rm->universitario_perfil_2);
		$aux->nombre_universitario_perfil_2 = (isset($get_universitario_perfil_2->nombre) ? $get_universitario_perfil_2->nombre : "");
		$aux->universitario_perfil_2 = $rm->universitario_perfil_2;

		$get_universitario_perfil_3 = $this->universitarios_perfil_model->universitario($rm->universitario_perfil_3);
		$aux->nombre_universitario_perfil_3 = (isset($get_universitario_perfil_3->nombre) ? $get_universitario_perfil_3->nombre : "");
		$aux->universitario_perfil_3  = $rm->universitario_perfil_3;

		$get_especialidad_perfil_1 = $this->especialidad_perfil_model->especialidad($rm->especialidad_perfil_1);
		$aux->nombre_especialidad_perfil_1 = (isset($get_especialidad_perfil_1->nombre) ? $get_especialidad_perfil_1->nombre : "");
		$aux->especialidad_perfil_1 = $rm->especialidad_perfil_1;

		$get_especialidad_perfil_2 = $this->especialidad_perfil_model->especialidad($rm->especialidad_perfil_2);
		$aux->nombre_especialidad_perfil_2 = (isset($get_especialidad_perfil_2->nombre) ? $get_especialidad_perfil_2->nombre : "");
		$aux->especialidad_perfil_2 = $rm->especialidad_perfil_2;

		$get_especialidad_perfil_3 = $this->especialidad_perfil_model->especialidad($rm->especialidad_perfil_3);
		$aux->nombre_especialidad_perfil_3 = (isset($get_especialidad_perfil_3->nombre) ? $get_especialidad_perfil_3->nombre : "");
		$aux->especialidad_perfil_3 = $rm->especialidad_perfil_3;
		$perfil_id =  $aux->escolaridad_basica;

		$arr_basico_tecnico_perfil[0] =$rm->escolaridad_basica; 	
		$arr_medio_tecnico_perfil[1] = $rm->escolaridad; 

		$arr_tecnico_1_perfil[0] = $rm->tecnicos_perfil_1; 	
		$arr_tecnico_1_perfil[1] = $rm->tecnicos_perfil_2; 
		$arr_tecnico_1_perfil[2] = $rm->tecnicos_perfil_3;

		$arr_universitario_1_perfil[0] = $rm->universitario_perfil_1; 
		$arr_universitario_1_perfil[1] = $rm->universitario_perfil_2; 
		$arr_universitario_1_perfil[2] = $rm->universitario_perfil_3; 

		$arr_especialidad_1_perfil[0] = $rm->especialidad_perfil_1;
		$arr_especialidad_1_perfil[1] = $rm->especialidad_perfil_2;
		$arr_especialidad_1_perfil[2] = $rm->especialidad_perfil_3;

		if($arr_basico_tecnico_perfil[0] == $trabajador_estudio_basico[0]) {
			$resultado = "ok";
		}

		else{
			$resultado = "no cumple";
		}

		$aux->resultado_basico = $resultado;

		if($arr_medio_tecnico_perfil[1] == $trabajador_estudio_medio[1]) {
			$resultado = "ok";
		}
		else {
			$resultado ="no cumple";
		}

		$aux->resultado_medio = $resultado;

		$r=0;
		$q=0;
		for($a=0;$a<=2;$a++){
			for($b=0;$b<=4;$b++){

				if($arr_tecnico_1_perfil[$a] == 1 and $trabajador_estudio_tecnico_1[$b] == 1){ 
					$r=1;
				}

				else if ($arr_tecnico_1_perfil[$a] == $trabajador_estudio_tecnico_1[$b]) {
					$r=2; 
					$est = $trabajador_estado_tecnico_1[$b];			
				}
			}

			if ($r==1) {
				$texto="N/A";
				$estado[$a]="No Compara";
			}

			if ($r==2) {
				$texto="Tiene";
				if($est==4){
					$estado[$a]="Completo"; 

				}
				else{$estado[$a]="Incompleto";}
			}
			if ($r==0){
				$texto="No Tiene";
				$estado[$a]="No Compara";

			}

			$res[$a]=$texto;
			$r=0;
			$est=0;
		}	      

		$aux->resultado_tecnico_1 = $res[0];
		$aux->resultado_tecnico_2 = $res[1];
		$aux->resultado_tecnico_3 = $res[2];
		$aux->resultado_tecnico_e_1 = $estado[0];
		$aux->resultado_tecnico_e_2 = $estado[1];
		$aux->resultado_tecnico_e_3 = $estado[2];

				//UNIVERSITARIOS

		$u=0;
		$q=0;
		for($a=0;$a<=2;$a++){
			for($b=0;$b<=4;$b++){

				if ($arr_universitario_1_perfil[$a] == 10 and $trabajador_estudio_universitario_1[$b] == 10){ 
					$u=1;
				}

				else if ($arr_universitario_1_perfil[$a] == $trabajador_estudio_universitario_1[$b]) {
					$u=2; 
					$estado_1 = $trabajador_estado_universitario_1[$b];			
				}
			}

			if ($u==1) {
				$texto="N/A";
				$estado[$a]="No Compara";
			}

			if ($u==2) {
				$texto="Tiene";
				if($estado_1==4){
					$estado[$a]="Completo"; 

				}
				else{$estado[$a]="Incompleto";}
			}
			if ($u==0){
				$texto="No Tiene";
				$estado[$a]="No Compara";

			}

			$resultado[$a]=$texto;
			$u=0;
			$estado_1=0;
		}	          

		$aux->resultado_profesion_1 = $resultado[0];
		$aux->resultado_profesion_2 = $resultado[1];
		$aux->resultado_profesion_3 = $resultado[2];
		$aux->resultado_profesion_e_1 = $estado[0];
		$aux->resultado_profesion_e_2 = $estado[1];
		$aux->resultado_profesion_e_3 = $estado[2];

				//ESPECIALIDADES

		$z=0;
		$q=0;
		for($a=0;$a<=2;$a++){
			for($b=0;$b<=4;$b++){

				if ($arr_especialidad_1_perfil[$a] == 1 and $trabajador_estudio_especialidad_1[$b] == 1){ 
					$z=1;
				}

				else if ($arr_especialidad_1_perfil[$a] == $trabajador_estudio_especialidad_1[$b]) {
					$z=2; 
					$estado_2 = $trabajador_estado_especialidad_1[$b];			
				}
			}

			if ($z==1) {
				$texto="N/A";
				$estado_especialidad[$a]="No Compara";
			}

			if ($z==2) {
				$texto="Tiene";
				if($estado_2==4){
					$estado_especialidad[$a]="Completo"; 

				}
				else{$estado_especialidad[$a]="Incompleto";}
			}
			if ($z==0){
				$texto="No Tiene";
				$estado_especialidad[$a]="No Compara";

			}

			$resultado_especialidad[$a]=$texto;
			$z=0;
			$estado_1=0;
		}	          

		$aux->resultado_especialidad_1 = $resultado_especialidad[0];
		$aux->resultado_especialidad_2 = $resultado_especialidad[1];
		$aux->resultado_especialidad_3 = $resultado_especialidad[2];
		$aux->resultado_especialidad_e_1 = $estado_especialidad[0];
		$aux->resultado_especialidad_e_2 = $estado_especialidad[1];
		$aux->resultado_especialidad_e_3 = $estado_especialidad[2];

		array_push($lista_aux_3, $aux);
		unset($aux);
	}
}

$pagina             = "";
$todo_el_formulario_4 = $this->capacitaciones_perfil_model->capacitaciones($perfil_de_cargo_id);
$lista_aux_4          = array();
if (!empty($todo_el_formulario_4)) {
	foreach ($todo_el_formulario_4 as $rm) {
		$aux         = new stdClass();
		$get_capacitacion_perfil_1 = $this->capacitaciones_perfil_model->capacitaciones_uno($rm->id_capacitacion);
		$aux->nombre_capacitacion_perfil = (isset($get_capacitacion_perfil_1->nombre)?$get_capacitacion_perfil_1->nombre : "");




		$get_capacitacion_perfil_n = $this->capacitaciones_perfil_model->capacitaciones_comparar($rm->id_capacitacion, $id);
		$aux->estado_cap = (isset($get_capacitacion_perfil_n->id)?"Tiene":"No Tiene");

		array_push($lista_aux_4, $aux);
		unset($aux);
	}
}

$pagina             = "";
$todo_el_formulario_5 = $this->trabajador_capacitacion_model->capacitaciones($id);
$lista_aux_5          = array();
if (!empty($todo_el_formulario_5)) {
	foreach ($todo_el_formulario_5 as $rm) {
		$aux         = new stdClass();
		$aux->id     = $rm->id;

		$get_capacitacion_trabajador_1 = $this->trabajador_capacitacion_model->capacitaciones_uno($rm->id_capacitacion);
		$aux->nombre_capacitacion_trabajador_1 = (isset($get_capacitacion_trabajador_1->nombre)?$get_capacitacion_trabajador_1->nombre : "");
		$aux->id_capacitacion = $rm->id_capacitacion;

		$get_capacitacion_trabajador_1 = $this->trabajador_capacitacion_model->capacitaciones_uno($rm->id_capacitacion);
		$aux->nombre_capacitacion_trabajador_1 = (isset($get_capacitacion_trabajador_1->nombre)?$get_capacitacion_trabajador_1->nombre : "");
		$aux->id_capacitacion = $rm->id_capacitacion;

		$get_capacitacion_perfil_1 = $this->capacitaciones_perfil_model->capacitaciones_comparar($rm->id_capacitacion);
		$aux->nombre_capacitacion_perfil_1 = (isset($get_capacitacion_perfil_1->nombre)?$get_capacitacion_trabajador_1->nombre : "");
		$aux->id_trabajador = $rm->id_capacitacion;

				//Capacitaciones

		if ($aux->id_capacitacion == $aux->id_trabajador) {
			$texto="Tiene";	
		}else{
			$texto="No tiene";
		}

		$aux->texto = $texto;


		array_push($lista_aux_5, $aux);
		unset($aux);
	}
}

$pagina['perfil_lista'] = $this->perfil_cargo_model->listar_perfiles_cargo();
$pagina['crear_perfil'] = $lista_aux_2;
$pagina['listar_perfiles'] = $lista_aux_3;
$pagina['capacitaciones'] = $lista_aux_4;
$pagina['capacitaciones_trabajador'] = $lista_aux_5;
$base['cuerpo'] = $this -> load -> view('sip/trabajador/perfil_trabajador',$pagina,TRUE);
$this -> load -> view('layout2.0./layout',$base);

}


function guardar_trabajador(){
	$this->load->model("atrabajador_model");
	$this->load->model("personal_model");
	$this->load->model("capacitaciones_model");
	$this->load->model("trabajador_capacitacion_model");
	$this->load->model("estado_model");
	$this->load->model("tecnicos_model");
	$this->load->model("universitarios_model");
	$this->load->model("especialidad_model");
	$this->load->model("licencia_perfil_model");
	$this->load->helper("archivo");
	$this->load->helper("acento");

	$data = array(
		'rut' => $_POST['rut'],
		'nombre' => $_POST['nombre'],
		'apellido_paterno' => $_POST['apellido_paterno'],
		'apellido_materno' => $_POST['apellido_materno'],
		'fecha_matrimonio' => $_POST['fecha_matrimonio'],
		'fecha_nacimiento' => $_POST['fecha_nacimiento'],
		'nacionalidad' => $_POST['nacionalidad'],
		'direccion' => $_POST['direccion'],
		'telefono_dp' => $_POST['telefono_dp'],
		'celular' => $_POST['celular'],
		'n_hijos' => $_POST['n_hijos'],
		'estado_civil' => $_POST['estado_civil'],
		'valor_plan' => $_POST['valor_plan'],
		'perfil_de_cargo' => '1',
		'sueldo_depositado' => $_POST['sueldo_depositado'],
		'banco' => $_POST['banco'],
		'nombrec' => $_POST['nombrec'],
		'apellidos' => $_POST['apellidos'],
		'calle' => $_POST['calle'],
		'villa' => $_POST['villa'],
		'ciudad' => $_POST['ciudad'],
		'comuna' => $_POST['comuna'],
		'regionc' => $_POST['regionc'],
		'ntelefono' => $_POST['ntelefono'],
		'parentesco' => $_POST['parentesco'],
		'primer_apellido' => $_POST['primer_apellido'],
		'nombres' => $_POST['nombres'],
		'rut_familiar' => $_POST['rut_familiar'],
		'carga_familiar' => $_POST['carga_familiar'],
		'parentesco_2' => $_POST['parentesco_2'],
		'primer_apellido_2' => $_POST['primer_apellido_2'],
		'nombres_2' => $_POST['nombres_2'],
		'rut_familiar_2' => $_POST['rut_familiar_2'],
		'carga_familiar_2' => $_POST['carga_familiar_2'],
		'parentesco_3' => $_POST['parentesco_3'],
		'primer_apellido_3' => $_POST['primer_apellido_3'],
		'nombres_3' => $_POST['nombres_3'],
		'rut_familiar_3' => $_POST['rut_familiar_3'],
		'carga_familiar_3' => $_POST['carga_familiar_3'],
		'parentesco_4' => $_POST['parentesco_4'],
		'primer_apellido_4' => $_POST['primer_apellido_4'],
		'nombres_4' => $_POST['nombres_4'],
		'rut_familiar_4' => $_POST['rut_familiar_4'],
		'carga_familiar_4' => $_POST['carga_familiar_4'],
		'parentesco_5' => $_POST['parentesco_5'],
		'primer_apellido_5' => $_POST['primer_apellido_5'],
		'nombres_5' => $_POST['nombres_5'],
		'rut_familiar_5' => $_POST['rut_familiar_5'],
		'carga_familiar_5' => $_POST['carga_familiar_5'],
		'parentesco_6' => $_POST['parentesco_6'],
		'primer_apellido_6' => $_POST['primer_apellido_6'],
		'nombres_6' => $_POST['nombres_6'],
		'rut_familiar_6' => $_POST['rut_familiar_6'],
		'carga_familiar_6' => $_POST['carga_familiar_6'],
		'parentesco_7' => $_POST['parentesco_7'],
		'primer_apellido_7' => $_POST['primer_apellido_7'],
		'nombres_7' => $_POST['nombres_7'],
		'rut_familiar_7' => $_POST['rut_familiar_7'],
		'carga_familiar_7' => $_POST['carga_familiar_7'],
		'parentesco_8' => $_POST['parentesco_8'],
		'primer_apellido_8' => $_POST['primer_apellido_8'],
		'nombres_8' => $_POST['nombres_8'],
		'rut_familiar_8' => $_POST['rut_familiar_8'],
		'carga_familiar_8' => $_POST['carga_familiar_8'],
		'segundo_apellido_1_df' => $_POST['segundo_apellido_1_df'],
		'sexo_df_1' => $_POST['sexo_df_1'],
		'fecha_nacimiento_df_1' => $_POST['fecha_nacimiento_df_1'],
		'segundo_apellido_2_df' => $_POST['segundo_apellido_2_df'],
		'sexo_df_2' => $_POST['sexo_df_2'],
		'fecha_nacimiento_df_2' => $_POST['fecha_nacimiento_df_2'],
		'segundo_apellido_3_df' => $_POST['segundo_apellido_3_df'],
		'sexo_df_3' => $_POST['sexo_df_3'],
		'fecha_nacimiento_df_3' => $_POST['fecha_nacimiento_df_3'],
		'segundo_apellido_4_df' => $_POST['segundo_apellido_4_df'],
		'sexo_df_4' => $_POST['sexo_df_4'],
		'fecha_nacimiento_df_4' => $_POST['fecha_nacimiento_df_4'],
		'segundo_apellido_5_df' => $_POST['segundo_apellido_5_df'],
		'sexo_df_5' => $_POST['sexo_df_5'],
		'fecha_nacimiento_df_5' => $_POST['fecha_nacimiento_df_5'],
		'segundo_apellido_6_df' => $_POST['segundo_apellido_6_df'],
		'sexo_df_6' => $_POST['sexo_df_6'],
		'fecha_nacimiento_df_6' => $_POST['fecha_nacimiento_df_6'],
		'segundo_apellido_7_df' => $_POST['segundo_apellido_7_df'],
		'sexo_df_7' => $_POST['sexo_df_7'],
		'fecha_nacimiento_df_7' => $_POST['fecha_nacimiento_df_7'],
		'segundo_apellido_8_df' => $_POST['segundo_apellido_8_df'],
		'sexo_df_8' => $_POST['sexo_df_8'],
		'fecha_nacimiento_df_8' => $_POST['fecha_nacimiento_df_8'],
		'calles' => $_POST['calles'],
		'villas' => $_POST['villas'],
		'ciudades' => $_POST['ciudades'],
		'region' => $_POST['region'],
		'n_telefono_d' => $_POST['n_telefono_d'],
		'comuna_d' => $_POST['comuna_d'],
		'vivienda_d' => $_POST['vivienda_d'],
		'establecimiento_1' => $_POST['establecimiento_1'],
		'establecimiento_2' => $_POST['establecimiento_2'],
		'establecimiento_3' => $_POST['establecimiento_3'],
		'establecimiento_4' => $_POST['establecimiento_4'],
		'establecimiento_5' => $_POST['establecimiento_5'],
		'establecimiento_6' => $_POST['establecimiento_6'],
		'establecimiento_7' => $_POST['establecimiento_7'],
		'establecimiento_8' => $_POST['establecimiento_8'],
		'establecimiento_9' => $_POST['establecimiento_9'],
		'establecimiento_10' => $_POST['establecimiento_10'],
		'establecimiento_11' => $_POST['establecimiento_11'],
		'establecimiento_12' => $_POST['establecimiento_12'],
		'establecimiento_13' => $_POST['establecimiento_13'],
		'establecimiento_14' => $_POST['establecimiento_14'],
		'establecimiento_15' => $_POST['establecimiento_15'],
		'establecimiento_16' => $_POST['establecimiento_16'],
		'establecimiento_17' => $_POST['establecimiento_17'],
		'c_tecnico_1' => $_POST['id_select_tecnicos_1'],
		'c_tecnico_2' => $_POST['id_select_tecnicos_2'],
		'c_tecnico_3' => $_POST['id_select_tecnicos_3'],
		'c_tecnico_4' => $_POST['id_select_tecnicos_4'],
		'c_tecnico_5' => $_POST['id_select_tecnicos_5'],
		'c_profesion_1' => $_POST['id_select_universitarios_1'],
		'c_profesion_2' => $_POST['id_select_universitarios_2'],
		'c_profesion_3' => $_POST['id_select_universitarios_3'],
		'c_profesion_4' => $_POST['id_select_universitarios_4'],
		'c_profesion_5' => $_POST['id_select_universitarios_5'],
		'c_especialidad_1' => $_POST['id_select_especialidad_1'],
		'c_especialidad_2' => $_POST['id_select_especialidad_2'],
		'c_especialidad_3' => $_POST['id_select_especialidad_3'],
		'c_especialidad_4' => $_POST['id_select_especialidad_4'],
		'c_especialidad_5' => $_POST['id_select_especialidad_5'],
		'basico_e' => $_POST['id_select_basico'],
		'medios_e' => $_POST['id_select_medios'],
		'tecnicos_e_1' => $_POST['id_select_tecnicos_10'],
		'tecnicos_e_2' => $_POST['id_select_tecnicos_11'],
		'tecnicos_e_3' => $_POST['id_select_tecnicos_12'],
		'tecnicos_e_4' => $_POST['id_select_tecnicos_13'],
		'tecnicos_e_5' => $_POST['id_select_tecnicos_14'],
		'profesional_e_1' => $_POST['id_select_universitarios_10'],
		'profesional_e_2' => $_POST['id_select_universitarios_11'],
		'profesional_e_3' => $_POST['id_select_universitarios_12'],
		'profesional_e_4' => $_POST['id_select_universitarios_13'],
		'profesional_e_5' => $_POST['id_select_universitarios_14'],
		'especialidad_e_1' => $_POST['id_select_especialidad_10'],
		'especialidad_e_2' => $_POST['id_select_especialidad_11'],
		'especialidad_e_3' => $_POST['id_select_especialidad_12'],
		'especialidad_e_4' => $_POST['id_select_especialidad_13'],
		'especialidad_e_5' => $_POST['id_select_especialidad_14'],
		'licencia' => $_POST['id_select_licencia'],
		'clase' => $_POST['clase'],
		'talla_pantalon' => $_POST['talla_pantalon'],
		'talla_casaca' => $_POST['talla_casaca'],
		'talla_buzo' => $_POST['talla_buzo'],
		'talla_calzado' => $_POST['talla_calzado'],
		'situacion_militar' => $_POST['situacion_militar'],
		'texto' => $_POST['texto'],
		);

if($_FILES['documento']['error'] == 0){
	$nb_archivo = "Trabajador_".$_POST['rut'];
	$imagen = subir($_FILES,"documento","/extras/foto_trabajadores/",$nb_archivo);
	$arreglo_imagen = array(
		"imagen" => $imagen,
		);
}else{
	$arreglo_imagen = array();
}

if($_FILES['documento_1']['error'] == 0){
	$nb_archivo = "Doc_1".$_POST['rut'];
	$documento_1 = subir($_FILES,"documento_1","/extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_documento1 = array(
		"documento_1" => $documento_1,
		);
}else{
	$arreglo_documento1 = array();
}

if($_FILES['documento_2']['error'] == 0){
	$nb_archivo = "Doc_2".$_POST['rut'];
	$documento_2 = subir($_FILES,"documento_2","/extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_documento2 = array(
		"documento_2" => $documento_2,
		);
}else{
	$arreglo_documento2 = array();
}

if($_FILES['documento_3']['error'] == 0){
	$nb_archivo = "Trabajador_".$_POST['rut'];
	$documento_3 = subir($_FILES,"documento_3","/extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_documento3 = array(
		"documento_3" => $documento_3,
		);
}else{
	$arreglo_documento3 = array();
}

if($_FILES['documento_4']['error'] == 0){
	$nb_archivo = "Trabajador_".$_POST['rut'];
	$documento_4 = subir($_FILES,"documento_4","/extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_documento4 = array(
		"documento_4" => $documento_4,
		);
}else{
	$arreglo_documento4 = array();
}

if($_FILES['documento_5']['error'] == 0){
	$nb_archivo = "Trabajador_".$_POST['rut'];
	$documento_5 = subir($_FILES,"documento_5","/extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_documento5 = array(
		"documento_5" => $documento_5,
		);
}else{
	$arreglo_documento5 = array();
}

if($_FILES['documento_6']['error'] == 0){
	$nb_archivo = "Trabajador_".$_POST['rut'];
	$documento_6 = subir($_FILES,"documento_6","/extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_documento6 = array(
		"documento_6" => $documento_6,
		);
}else{
	$arreglo_documento6 = array();
}

if($_FILES['documento_7']['error'] == 0){
	$nb_archivo = "Trabajador_".$_POST['rut'];
	$documento_7 = subir($_FILES,"documento_7","/extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_documento7 = array(
		"documento_7" => $documento_7,
		);
}else{
	$arreglo_documento7 = array();
}

if($_FILES['documento_8']['error'] == 0){
	$nb_archivo = "Trabajador_".$_POST['rut'];
	$documento_8 = subir($_FILES,"documento_8","/extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_documento8 = array(
		"documento_8" => $documento_8,
		);
}else{
	$arreglo_documento8 = array();
}

if($_FILES['documento_9']['error'] == 0){
	$nb_archivo = "Trabajador_".$_POST['rut'];
	$documento_9 = subir($_FILES,"documento_9","/extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_documento9 = array(
		"documento_9" => $documento_9,
		);
}else{
	$arreglo_documento9 = array();
}

if($_FILES['documento_10']['error'] == 0){
	$nb_archivo = "Trabajador_".$_POST['rut'];
	$documento_10 = subir($_FILES,"documento_10","/extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_documento10 = array(
		"documento_10" => $documento_10,
		);
}else{
	$arreglo_documento10 = array();
}

if($_FILES['documento_11']['error'] == 0){
	$nb_archivo = "Trabajador_".$_POST['rut'];
	$documento_11 = subir($_FILES,"documento_11","/extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_documento11 = array(
		"documento_11" => $documento_11,
		);
}else{
	$arreglo_documento11 = array();
}

if($_FILES['documento_12']['error'] == 0){
	$nb_archivo = "Trabajador_".$_POST['rut'];
	$documento_12 = subir($_FILES,"documento_12","/extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_documento12 = array(
		"documento_12" => $documento_12,
		);
}else{
	$arreglo_documento12 = array();
}

if($_FILES['documento_13']['error'] == 0){
	$nb_archivo = "Trabajador_".$_POST['rut'];
	$documento_13 = subir($_FILES,"documento_13","/extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_documento13 = array(
		"documento_13" => $documento_13,
		);
}else{
	$arreglo_documento13 = array();
}

if($_FILES['documento_14']['error'] == 0){
	$nb_archivo = "Trabajador_".$_POST['rut'];
	$documento_14 = subir($_FILES,"documento_14","/extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_documento14 = array(
		"docuemento_14" => $documento_14,
		);
}else{
	$arreglo_documento14 = array();
}

if($_FILES['documento_15']['error'] == 0){
	$nb_archivo = "Trabajador_".$_POST['rut'];
	$documento_15 = subir($_FILES,"documento_15","/extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_documento15 = array(
		"documento_15" => $documento_15,
		);
}else{
	$arreglo_documento15 = array();
}

if($_FILES['documento_16']['error'] == 0){
	$nb_archivo = "Trabajador_".$_POST['rut'];
	$documento_16 = subir($_FILES,"documento_16","/extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_documento16 = array(
		"documento_16" => $documento_16,
		);
}else{
	$arreglo_documento16 = array();
}

if($_FILES['documento_17']['error'] == 0){
	$nb_archivo = "Trabajador_".$_POST['rut'];
	$documento_17 = subir($_FILES,"documento_17","/extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_documento17 = array(
		"documento_17" => $documento_17,
		);
}else{
	$arreglo_documento17 = array();
}

$result = array_merge($data, $arreglo_imagen, $arreglo_documento1,$arreglo_documento2,$arreglo_documento3,$arreglo_documento4,$arreglo_documento5,$arreglo_documento6,$arreglo_documento7,$arreglo_documento8,$arreglo_documento9,$arreglo_documento10,$arreglo_documento11,$arreglo_documento12,$arreglo_documento13,$arreglo_documento14,$arreglo_documento15,$arreglo_documento16,$arreglo_documento17);
$this->atrabajador_model->ingresar_trabajador($result);

$ultimo_id_trabajador = $this->db->insert_id();

if (!empty($_POST['check_estado'])?$_POST['check_estado']:false){
	foreach($_POST['check_estado'] as $c){


					//$_FILES['archivo[]'];
					//$nb_archivo = "Trabajador_";
					//$archivo[] = subir($_FILES,"archivo[]","/extras/documentos_trabajadores/",$nb_archivo);

		$data2 = array(
			"id_capacitacion" => $c,
			"id_trabajador" => $ultimo_id_trabajador,
					//		"archivo[]" => $archivo[],
			);

		$this->trabajador_capacitacion_model->guardar_trabajador_cap($data2);
	}
}


redirect('sip/trabajador', 'refresh');


}

function agregar(){
	$this->load->model("atrabajador_model");
	$this->load->model("capacitaciones_model");
	$this->load->model("personal_model");
	$this->load->model("trabajador_capacitacion_model");
	$this->load->model("estado_model");
	$this->load->model("tecnicos_model");
	$this->load->model("universitarios_model");
	$this->load->model("especialidad_model");
	$this->load->model("licencia_perfil_model");


	$base = array(
		'head_titulo' => "Sistema SIP - Personal",
		'titulo' => "Listado de Personal",
		'subtitulo' => '',
		'side_bar' => true,
		'menu' => $this -> load -> view('layout2.0/menus/menu_sip','',TRUE),
		'js' => array('js/lista_req.js'),
		'js' => array('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js','js/si_datepicker_fecha_nacimiento.js', 'js/si_datatable.js', 'js/si_validaciones.js', 'js/si_datepicker_asistencia.js','js/si_datepicker_fecha_nacimiento_df_1.js','js/si_datepicker_fecha_nacimiento_df_2.js','js/si_datepicker_fecha_nacimiento_df_3.js','js/si_datepicker_fecha_nacimiento_df_4.js','js/si_datepicker_fecha_nacimiento_df_5.js','js/si_datepicker_fecha_nacimiento_df_6.js','js/si_datepicker_fecha_nacimiento_df_7.js','js/si_datepicker_fecha_nacimiento_df_8.js'), 
		'css' =>array('plugins/DataTables/media/css/jquery.dataTables.min.css',
			'plugins/DataTables/media/css/dataTables.bootstrap.min.css',
			'plugins/DataTables/FixedColumns/css/fixedColumns.dataTables.css'),
		);

	$pagina = "";
	$todo_el_formulario = $this->capacitaciones_model->listar_capacitaciones();
	$lista_aux = array();
	if (!empty($todo_el_formulario)){
		foreach ($todo_el_formulario as $rm){
			$aux = new stdClass();
			$aux->id = $rm->id;
			$aux->nombre = $rm->nombre;

			array_push($lista_aux, $aux);
			unset($aux);
		}
	}

	
	$pagina['estadolista']= $this->estado_model->estadolista();
	$pagina['licencia_lista']= $this->licencia_perfil_model->listar_licencia_1();
	$pagina['profesionlista']= $this->tecnicos_model->estadotecnico_1();
	$pagina['universidadlista']= $this->universitarios_model->estadouniversidad();
	$pagina['especialidadlista']= $this->especialidad_model->estadoespecialidad();
	$pagina['capacitaciones'] = $lista_aux;
	$base['cuerpo'] = $this -> load -> view('sip/trabajador/trabajador_gestion',$pagina,TRUE);
	$this -> load -> view('layout2.0./layout',$base);
}

function actualizar_trabajador(){
	$this->load->model("personal_model");
	$this->load->model("atrabajador_model");
	$this->load->model("capacitaciones_model");
	$this->load->model("trabajador_capacitacion_model");
	$this->load->model("estado_model");
	$this->load->model("tecnicos_model");
	$this->load->model("universitarios_model");
	$this->load->model("especialidad_model");
	$this->load->model("licencia_perfil_model");
	$id = $_POST['id'];
	$arreglo_general = array(
		'nombre' => $_POST['nombre'],
		'rut' => $_POST['rut'],
		'apellido_paterno' => $_POST['apellido_paterno'],
		'apellido_materno' => $_POST['apellido_materno'],
		'fecha_nacimiento' => $_POST['fecha_nacimiento'],
		'fecha_matrimonio' => $_POST['fecha_matrimonio'],
		'nacionalidad' => $_POST['nacionalidad'],
		'n_hijos' => $_POST['n_hijos'],
		'estado_civil' => $_POST['estado_civil'],
		'telefono_dp' => $_POST['telefono_dp'],
		'celular' => $_POST['celular'],
		'direccion' => $_POST['direccion'],
		'valor_plan' => $_POST['valor_plan'],
		'sueldo_depositado' => $_POST['sueldo_depositado'],
		'banco' => $_POST['banco'],
		'nombrec' => $_POST['nombrec'],
		'apellidos' => $_POST['apellidos'],
		'calle' => $_POST['calle'],
		'villa' => $_POST['villa'],
		'ciudad' => $_POST['ciudad'],
		'comuna' => $_POST['comuna'],
		'regionc' => $_POST['regionc'],
		'ntelefono' => $_POST['ntelefono'],
		'parentesco' => $_POST['parentesco'],
		'primer_apellido' => $_POST['primer_apellido'],
		'nombres' => $_POST['nombres'],
		'rut_familiar' => $_POST['rut_familiar'],
		'carga_familiar' => $_POST['carga_familiar'],
		'parentesco_2' => $_POST['parentesco_2'],
		'primer_apellido_2' => $_POST['primer_apellido_2'],
		'nombres_2' => $_POST['nombres_2'],
		'rut_familiar_2' => $_POST['rut_familiar_2'],
		'carga_familiar_2' => $_POST['carga_familiar_2'],
		'parentesco_3' => $_POST['parentesco_3'],
		'primer_apellido_3' => $_POST['primer_apellido_3'],
		'nombres_3' => $_POST['nombres_3'],
		'rut_familiar_3' => $_POST['rut_familiar_3'],
		'carga_familiar_3' => $_POST['carga_familiar_3'],
		'parentesco_4' => $_POST['parentesco_4'],
		'primer_apellido_4' => $_POST['primer_apellido_4'],
		'nombres_4' => $_POST['nombres_4'],
		'rut_familiar_4' => $_POST['rut_familiar_4'],
		'carga_familiar_4' => $_POST['carga_familiar_4'],
		'parentesco_5' => $_POST['parentesco_5'],
		'primer_apellido_5' => $_POST['primer_apellido_5'],
		'nombres_5' => $_POST['nombres_5'],
		'rut_familiar_5' => $_POST['rut_familiar_5'],
		'carga_familiar_5' => $_POST['carga_familiar_5'],
		'parentesco_6' => $_POST['parentesco_6'],
		'primer_apellido_6' => $_POST['primer_apellido_6'],
		'nombres_6' => $_POST['nombres_6'],
		'rut_familiar_6' => $_POST['rut_familiar_6'],
		'carga_familiar_6' => $_POST['carga_familiar_6'],
		'parentesco_7' => $_POST['parentesco_7'],
		'primer_apellido_7' => $_POST['primer_apellido_7'],
		'nombres_7' => $_POST['nombres_7'],
		'rut_familiar_7' => $_POST['rut_familiar_7'],
		'carga_familiar_7' => $_POST['carga_familiar_7'],
		'parentesco_8' => $_POST['parentesco_8'],
		'primer_apellido_8' => $_POST['primer_apellido_8'],
		'nombres_8' => $_POST['nombres_8'],
		'rut_familiar_8' => $_POST['rut_familiar_8'],
		'carga_familiar_8' => $_POST['carga_familiar_8'],
		'segundo_apellido_1_df' => $_POST['segundo_apellido_1_df'],
		'sexo_df_1' => $_POST['sexo_df_1'],
		'fecha_nacimiento_df_1' => $_POST['fecha_nacimiento_df_1'],
		'segundo_apellido_2_df' => $_POST['segundo_apellido_2_df'],
		'sexo_df_2' => $_POST['sexo_df_2'],
		'fecha_nacimiento_df_2' => $_POST['fecha_nacimiento_df_2'],
		'segundo_apellido_3_df' => $_POST['segundo_apellido_3_df'],
		'sexo_df_3' => $_POST['sexo_df_3'],
		'fecha_nacimiento_df_3' => $_POST['fecha_nacimiento_df_3'],
		'segundo_apellido_4_df' => $_POST['segundo_apellido_4_df'],
		'sexo_df_4' => $_POST['sexo_df_4'],
		'fecha_nacimiento_df_4' => $_POST['fecha_nacimiento_df_4'],
		'segundo_apellido_5_df' => $_POST['segundo_apellido_5_df'],
		'sexo_df_5' => $_POST['sexo_df_5'],
		'fecha_nacimiento_df_5' => $_POST['fecha_nacimiento_df_5'],
		'segundo_apellido_6_df' => $_POST['segundo_apellido_6_df'],
		'sexo_df_6' => $_POST['sexo_df_6'],
		'fecha_nacimiento_df_6' => $_POST['fecha_nacimiento_df_6'],
		'segundo_apellido_7_df' => $_POST['segundo_apellido_7_df'],
		'sexo_df_7' => $_POST['sexo_df_7'],
		'fecha_nacimiento_df_7' => $_POST['fecha_nacimiento_df_7'],
		'segundo_apellido_8_df' => $_POST['segundo_apellido_8_df'],
		'sexo_df_8' => $_POST['sexo_df_8'],
		'fecha_nacimiento_df_8' => $_POST['fecha_nacimiento_df_8'],
		'calles' => $_POST['calles'],
		'villas' => $_POST['villas'],
		'ciudades' => $_POST['ciudades'],
		'region' => $_POST['region'],
		'n_telefono_d' => $_POST['n_telefono_d'],
		'comuna_d' => $_POST['comuna_d'],
		'vivienda_d' => $_POST['vivienda_d'],
		'establecimiento_1' => $_POST['establecimiento_1'],
		'establecimiento_2' => $_POST['establecimiento_2'],
		'establecimiento_3' => $_POST['establecimiento_3'],
		'establecimiento_4' => $_POST['establecimiento_4'],
		'establecimiento_5' => $_POST['establecimiento_5'],
		'establecimiento_6' => $_POST['establecimiento_6'],
		'establecimiento_7' => $_POST['establecimiento_7'],
		'establecimiento_8' => $_POST['establecimiento_8'],
		'establecimiento_9' => $_POST['establecimiento_9'],
		'establecimiento_10' => $_POST['establecimiento_10'],
		'establecimiento_11' => $_POST['establecimiento_11'],
		'establecimiento_12' => $_POST['establecimiento_12'],
		'establecimiento_13' => $_POST['establecimiento_13'],
		'establecimiento_14' => $_POST['establecimiento_14'],
		'establecimiento_15' => $_POST['establecimiento_15'],
		'establecimiento_16' => $_POST['establecimiento_16'],
		'establecimiento_17' => $_POST['establecimiento_17'],
		'c_tecnico_1' => $_POST['id_select_tecnico_1'],
		'c_tecnico_2' => $_POST['id_select_tecnico_2'],
		'c_tecnico_3' => $_POST['id_select_tecnico_3'],
		'c_tecnico_4' => $_POST['id_select_tecnico_4'],
		'c_tecnico_5' => $_POST['id_select_tecnico_5'],
		'c_profesion_1' => $_POST['id_select_profesion_1'],
		'c_profesion_2' => $_POST['id_select_profesion_2'],
		'c_profesion_3' => $_POST['id_select_profesion_3'],
		'c_profesion_4' => $_POST['id_select_profesion_4'],
		'c_profesion_5' => $_POST['id_select_profesion_5'],
		'c_especialidad_1' => $_POST['id_select_especialidad_1'],
		'c_especialidad_2' => $_POST['id_select_especialidad_2'],
		'c_especialidad_3' => $_POST['id_select_especialidad_3'],
		'c_especialidad_4' => $_POST['id_select_especialidad_4'],
		'c_especialidad_5' => $_POST['id_select_especialidad_5'],
		'basico_e' => $_POST['id_select_basico'],
		'medios_e' => $_POST['id_select_medios'],
		'tecnicos_e_1' => $_POST['id_select_tecnicos_e_1'],
		'tecnicos_e_2' => $_POST['id_select_tecnicos_e_2'],
		'tecnicos_e_3' => $_POST['id_select_tecnicos_e_3'],
		'tecnicos_e_4' => $_POST['id_select_tecnicos_e_4'],
		'tecnicos_e_5' => $_POST['id_select_tecnicos_e_5'],
		'profesional_e_1' => $_POST['id_select_universitarios_e_1'],
		'profesional_e_2' => $_POST['id_select_universitarios_e_2'],
		'profesional_e_3' => $_POST['id_select_universitarios_e_3'],
		'profesional_e_4' => $_POST['id_select_universitarios_e_4'],
		'profesional_e_5' => $_POST['id_select_universitarios_e_5'],
		'especialidad_e_1' => $_POST['id_select_especialidad_e_1'],
		'especialidad_e_2' => $_POST['id_select_especialidad_e_2'],
		'especialidad_e_3' => $_POST['id_select_especialidad_e_3'],
		'especialidad_e_4' => $_POST['id_select_especialidad_e_4'],
		'especialidad_e_5' => $_POST['id_select_especialidad_e_5'],
		'licencia' => $_POST['id_select_licencia'],
		'clase' => $_POST['clase'],
		'talla_pantalon' => $_POST['talla_pantalon'],
		'talla_casaca' => $_POST['talla_casaca'],
		'talla_buzo' => $_POST['talla_buzo'],
		'talla_calzado' => $_POST['talla_calzado'],
		'situacion_militar' => $_POST['situacion_militar'],
		'texto' => $_POST['texto'],
		);

if($_FILES['imagen']['error']==0){
	$this->load->helper("archivo");
	$this->load->helper("acento");
	$nb_archivo = "Producto_".$_POST['id'];
	$salida = subir($_FILES,"imagen","extras/foto_trabajadores/",$nb_archivo);
	$arreglo_imagen = array(
		"imagen"=>$salida,
		);
}else{ 
	$arreglo_imagen = array();
}

if($_FILES['documento_1']['error']==0){
	$this->load->helper("archivo");
	$this->load->helper("acento");
	$nb_archivo = "Producto_".$_POST['id'];
	$salida = subir($_FILES,"documento_1","extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_archivo_1 = array(
		"documento_1"=>$salida,
		);
}else{ 
	$arreglo_archivo_1 =array();
}

if($_FILES['documento_2']['error']==0){
	$this->load->helper("archivo");
	$this->load->helper("acento");
	$nb_archivo = "Producto_".$_POST['id'];
	$salida = subir($_FILES,"documento_2","extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_archivo_2 = array(
		"documento_2"=>$salida,
		);
}else{ 
	$arreglo_archivo_2=array();
}

if($_FILES['documento_3']['error']==0){
	$this->load->helper("archivo");
	$this->load->helper("acento");
	$nb_archivo = "Producto_".$_POST['id'];
	$salida = subir($_FILES,"documento_3","extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_archivo_3 = array(
		"documento_3"=>$salida,
		);
}else{ 
	$arreglo_archivo_3=array();
}

if($_FILES['documento_4']['error']==0){
	$this->load->helper("archivo");
	$this->load->helper("acento");
	$nb_archivo = "Producto_".$_POST['id'];
	$salida = subir($_FILES,"documento_4","extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_archivo_4 = array(
		"documento_4"=>$salida,
		);
}else{ 
	$arreglo_archivo_4=array();
}

if($_FILES['documento_5']['error']==0){
	$this->load->helper("archivo");
	$this->load->helper("acento");
	$nb_archivo = "Producto_".$_POST['id'];
	$salida = subir($_FILES,"documento_5","extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_archivo_5 = array(
		"documento_5"=>$salida,
		);
}else{ 
	$arreglo_archivo_5=array();
}

if($_FILES['documento_6']['error']==0){
	$this->load->helper("archivo");
	$this->load->helper("acento");
	$nb_archivo = "Producto_".$_POST['id'];
	$salida = subir($_FILES,"documento_6","extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_archivo_6 = array(
		"documento_6"=>$salida,
		);
}else{ 
	$arreglo_archivo_6=array();
}

if($_FILES['documento_7']['error']==0){
	$this->load->helper("archivo");
	$this->load->helper("acento");
	$nb_archivo = "Producto_".$_POST['id'];
	$salida = subir($_FILES,"documento_7","extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_archivo_7 = array(
		"documento_7"=>$salida,
		);
}else{ 
	$arreglo_archivo_7=array();
}

if($_FILES['documento_8']['error']==0){
	$this->load->helper("archivo");
	$this->load->helper("acento");
	$nb_archivo = "Producto_".$_POST['id'];
	$salida = subir($_FILES,"documento_8","extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_archivo_8 = array(
		"documento_8"=>$salida,
		);
}else{ 
	$arreglo_archivo_8=array();
}

if($_FILES['documento_9']['error']==0){
	$this->load->helper("archivo");
	$this->load->helper("acento");
	$nb_archivo = "Producto_".$_POST['id'];
	$salida = subir($_FILES,"documento_9","extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_archivo_9 = array(
		"documento_9"=>$salida,
		);
}else{ 
	$arreglo_archivo_9=array();
}

if($_FILES['documento_10']['error']==0){
	$this->load->helper("archivo");
	$this->load->helper("acento");
	$nb_archivo = "Producto_".$_POST['id'];
	$salida = subir($_FILES,"documento_10","extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_archivo_10 = array(
		"documento_10"=>$salida,
		);
}else{ 
	$arreglo_archivo_10=array();
}

if($_FILES['documento_11']['error']==0){
	$this->load->helper("archivo");
	$this->load->helper("acento");
	$nb_archivo = "Producto_".$_POST['id'];
	$salida = subir($_FILES,"documento_11","extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_archivo_11 = array(
		"documento_11"=>$salida,
		);
}else{ 
	$arreglo_archivo_11=array();
}

if($_FILES['documento_12']['error']==0){
	$this->load->helper("archivo");
	$this->load->helper("acento");
	$nb_archivo = "Producto_".$_POST['id'];
	$salida = subir($_FILES,"documento_12","extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_archivo_12 = array(
		"documento_12"=>$salida,
		);
}else{ 
	$arreglo_archivo_12=array();
}


if($_FILES['documento_13']['error']==0){
	$this->load->helper("archivo");
	$this->load->helper("acento");
	$nb_archivo = "Producto_".$_POST['id'];
	$salida = subir($_FILES,"documento_13","extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_archivo_13 = array(
		"documento_13"=>$salida,
		);
}else{ 
	$arreglo_archivo_13=array();
}

if($_FILES['documento_14']['error']==0){
	$this->load->helper("archivo");
	$this->load->helper("acento");
	$nb_archivo = "Producto_".$_POST['id'];
	$salida = subir($_FILES,"documento_14","extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_archivo_14 = array(
		"documento_14"=>$salida,
		);
}else{ 
	$arreglo_archivo_14=array();
}

if($_FILES['documento_15']['error']==0){
	$this->load->helper("archivo");
	$this->load->helper("acento");
	$nb_archivo = "Producto_".$_POST['id'];
	$salida = subir($_FILES,"documento_15","extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_archivo_15 = array(
		"documento_15"=>$salida,
		);
}else{ 
	$arreglo_archivo_15=array();
}

if($_FILES['documento_16']['error']==0){
	$this->load->helper("archivo");
	$this->load->helper("acento");
	$nb_archivo = "Producto_".$_POST['id'];
	$salida = subir($_FILES,"documento_16","extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_archivo_16 = array(
		"documento_16"=>$salida,
		);
}else{ 
	$arreglo_archivo_16=array();
}

if($_FILES['documento_17']['error']==0){
	$this->load->helper("archivo");
	$this->load->helper("acento");
	$nb_archivo = "Producto_".$_POST['id'];
	$salida = subir($_FILES,"documento_17","extras/documentos_trabajadores/",$nb_archivo);
	$arreglo_archivo_17 = array(
		"documento_17"=>$salida,
		);
}else{ 
	$arreglo_archivo_17=array();
}

$arreglo_total=array_merge($arreglo_general, $arreglo_imagen,$arreglo_archivo_1,$arreglo_archivo_2,$arreglo_archivo_3,$arreglo_archivo_4,$arreglo_archivo_5,$arreglo_archivo_6,$arreglo_archivo_7,$arreglo_archivo_8,$arreglo_archivo_9,$arreglo_archivo_10,$arreglo_archivo_11,$arreglo_archivo_12,$arreglo_archivo_13,$arreglo_archivo_14,$arreglo_archivo_15,$arreglo_archivo_16,$arreglo_archivo_17);
$this->personal_model->actualizar_trabajador($id,$arreglo_total);

$id_trabajador = $_POST['id_trabajador'];
$this->trabajador_capacitacion_model->eliminar_todos_cap_trabajador($id_trabajador);

if (!empty($_POST['check_estado']) ? $_POST['check_estado'] : false) {
	foreach ($_POST['check_estado'] as $c) {

		$data = array(
			"id_capacitacion" => $c,
			"id_trabajador" => $id_trabajador
			);

		$this->trabajador_capacitacion_model->guardar_trabajador_cap($data);
	}
}
echo "<script>alert('Datos Actualizados Correctamente')</script>";

redirect('sip/trabajador/modificar/'.$id.'', 'refresh');		
}

function eliminar_trabajador($id){

	$this->load->model("personal_model");
	$this->personal_model->eliminar($id);
	echo "<script>alert('Registro Eliminado')</script>";
	redirect('sip/trabajador', 'refresh');
}

}
?>