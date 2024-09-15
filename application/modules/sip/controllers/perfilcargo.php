<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class perfilcargo extends CI_Controller
{
    //public $requerimiento;
    
    public function __construct()
    {
        parent::__construct();
    }
    
    function index()
    {
        $this->load->model("perfil_cargo_model");
        $base = array(
            'head_titulo' => "Sistema SIP - Perfil de Cargo",
            'titulo' => "Listado Perfiles De Cargo",
            'subtitulo' => '',
            'js' => array('js/si_validaciones.js'),
            'side_bar' => true,
            'menu' => $this->load->view('layout2.0/menus/menu_sip', '', TRUE)
        );
        
        $pagina['perfilcargo'] = $this->perfil_cargo_model->listar();
        $base['cuerpo']        = $this->load->view('sip/perfilcargo/gestion', $pagina, TRUE);
        $this->load->view('layout2.0./layout', $base);
    }



    function modificar($id)
    {
        $this->load->model("perfil_cargo_model");
        $this->load->model("capacitaciones_perfil_model");
        $this->load->model("perfil_capacitacion_model");
        $this->load->model("area_model");
        $this->load->model("sede_model");
        $base = array(
            'head_titulo' => "Sistema SIP - Perfil de Cargo",
            'titulo' => "Modificar Perfil de Cargo",
            'subtitulo' => '',
            'side_bar' => true,
            'menu' => $this->load->view('layout2.0/menus/menu_sip', '', TRUE),
            'js' => array('js/si_validaciones.js'),
            'css' => array(
                'plugins/DataTables/media/css/jquery.dataTables.min.css',
                'plugins/DataTables/media/css/dataTables.bootstrap.min.css',
                'plugins/DataTables/FixedColumns/css/fixedColumns.dataTables.css'
            )
        );
        
        $pagina             = "";
        $todo_el_formulario = $this->capacitaciones_perfil_model->listar_capacitaciones($id);
        $lista_aux          = array();
        if (!empty($todo_el_formulario)) {
            foreach ($todo_el_formulario as $rm) {
                $aux         = new stdClass();
                $aux->id     = $rm->id;
                $aux->nombre = $rm->nombre;
                $aux->estado = $this->perfil_capacitacion_model->consultar_cap_perfil($rm->id, $id);
                
                
                array_push($lista_aux, $aux);
                unset($aux);
            }
        }

          $pagina             = "";
        $todo_el_formulario_2 = $this->perfil_cargo_model->get_listar($id);
        $lista_aux_2          = array();
        if (!empty($todo_el_formulario_2)) {
            foreach ($todo_el_formulario_2 as $rm) {
                $aux         = new stdClass();
                $aux->id     = $rm->id;
                $aux->nombre = $rm->nombre;
                $aux->version = $rm->version;
                
                $get_area_perfil_1 = $this->area_model->area($rm->area_perfil);
                $aux->nombre_area_perfil_1 = (isset($get_area_perfil_1->nombre) ? $get_area_perfil_1->nombre: "");
                $aux->area_perfil = $rm->area_perfil;

                $get_dependencia_perfil_1 = $this->perfil_cargo_model->listar($rm->dependencia_perfil);
                $aux->nombre_dependencia_perfil_1 = (isset($get_dependencia_perfil_1->nombre) ? $get_dependencia_perfil_1->nombre: "");
                $aux->dependencia_perfil = $rm->dependencia_perfil;


                $get_sede_perfil_1 = $this->sede_model->sede($rm->sede_perfil);
                $aux->nombre_sede_perfil_1 = (isset($get_sede_perfil_1->nombre) ? $get_sede_perfil_1->nombre: "");
                $aux->sede_perfil = $rm->sede_perfil;

                array_push($lista_aux_2, $aux);
                unset($aux);
            }
        }
        
        $pagina['crear_perfil']   = $lista_aux_2;
        $pagina['capacitaciones'] = $lista_aux;
        $pagina['area_lista']  = $this->area_model->listar();
        $pagina['dependencia_lista']  = $this->perfil_cargo_model->listar_nombre();
        $pagina['sede_lista']  = $this->sede_model->listar();
        $base['cuerpo'] = $this->load->view('sip/perfilcargo/perfil_modificar_gestion', $pagina, TRUE);
        $this->load->view('layout2.0./layout', $base);
    }

     function guardar_crearperfil()
    {
        $this->load->model("perfil_cargo_model");
        $data = array(
            'nombre' => $_POST['nombre'],
            'version' => $_POST['version']
        );
        $this->perfil_cargo_model->ingresar($data);
        redirect('sip/perfilcargo', 'refresh');
    }
    
    function guardar_capacitaciones_perfil()
    {

        $this->load->model("perfil_capacitacion_model");
        if (isset($_POST['actualizar'])) {
            $id_perfil = $_POST['id_perfil'];
            $this->perfil_capacitacion_model->eliminar_todos_cap_perfil($id_perfil);
            
            if (!empty($_POST['check_estado']) ? $_POST['check_estado'] : false) {
                foreach ($_POST['check_estado'] as $c) {
                    
                    $data = array(
                        "id_capacitacion" => $c,
                        "id_perfil" => $id_perfil
                    );
                    
                    $this->perfil_capacitacion_model->guardar_perfil_cap($data);
                }
            }
            echo "<script>alert('Datos Actualizados Correctamente')</script>";
        }
        redirect('sip/perfilcargo/modificar/' . $id_perfil . '', 'refresh');
    }
    
    function actualizar()
    {
        $this->load->model("perfil_cargo_model");
        $id   = $_POST['id'];
        $data = array(
            'nombre' => $_POST['nombre'],
            'version' => $_POST['version'],
            'area_perfil' => $_POST['id_select_area'],
            'dependencia_perfil' => $_POST['id_select_dependencia'],
            'sede_perfil' => $_POST['id_select_sede']
        );
        $this->perfil_cargo_model->actualizar_perfil_cargo($id, $data);
        echo "<script>alert('Registros Guardados Correctamente')</script>";
        redirect('sip/perfilcargo/modificar/' . $id . '', 'refresh');
    }
    

    
    function modal_funciones($id)
    {
        $this->load->model("perfil_cargo_model");
        $pagina['datos_funciones'] = $this->perfil_cargo_model->get_listar($id);
        $this->load->view('sip/perfilcargo/modal_editar_funciones', $pagina);
    }
    
    function modal_compentencias($id)
    {
        $this->load->model("perfil_cargo_model");
        $pagina['datos_competencias'] = $this->perfil_cargo_model->get_listar($id);
        $this->load->view('sip/perfilcargo/modal_editar_competencias', $pagina);
    }
    
    function guardar_perfil()
    {
        $this->load->model("perfil_cargo_model");
        $data = array(
            'area_perfil' => '1',
            'sede_perfil' => '1',
            'dependencia_perfil' => '1',
            'licencia' => '1',
            'escolaridad' => '1',
            'escolaridad_basica' => '1',
            'tecnicos_perfil_1' => '1',
            'tecnicos_perfil_2' => '1',
            'tecnicos_perfil_3' => '1',
            'universitario_perfil_1' => '1',
            'universitario_perfil_2' => '1',
            'universitario_perfil_3' => '1',
            'especialidad_perfil_1' => '1',
            'especialidad_perfil_2' => '1',
            'especialidad_perfil_3' => '1',
            'ex_similar' => '0',
            'nombre' => $_POST['nombre']
        );
        $this->perfil_cargo_model->ingresar($data);
        echo "<script>alert('Perfil De Cargo Creado Correctamente')</script>";
        redirect('sip/perfilcargo', 'refresh');
    }

     function actualizar_funciones()
    {
        $this->load->model("perfil_cargo_model");
        $id   = $_POST['id'];
        $data = array(
            'funciones' => $_POST['funciones']
        );
        $this->perfil_cargo_model->actualizar_perfil_cargo($id, $data);
        echo "<script>alert('Funciones Ingresadas Correctamente')</script>";
        redirect('sip/perfilcargo/modificar/' . $id . '', 'refresh');
    }
    
    function actualizar_competencias()
    {
        $this->load->model("perfil_cargo_model");
        $id   = $_POST['id'];
        $data = array(
            'competencias' => $_POST['competencias']
        );
        $this->perfil_cargo_model->actualizar_perfil_cargo($id, $data);
        echo "<script>alert('Competencias Ingresadas Correctamente')</script>";
        redirect('sip/perfilcargo/modificar/' . $id . '', 'refresh');
    }

    function actualizar_requisitos()
    {
        $this->load->model("perfil_cargo_model");
        $id   = $_POST['id'];
        $data = array(
            'escolaridad' => $_POST['id_select_escolaridad'],
            'escolaridad_basica' => $_POST['id_select_escolaridad_basica'],
            'licencia' => $_POST['id_select_licencia'],
            'tecnicos_perfil_1' => $_POST['id_select_tecnicos_1'],
            'tecnicos_perfil_2' => $_POST['id_select_tecnicos_2'],
            'tecnicos_perfil_3' => $_POST['id_select_tecnicos_3'],
            'universitario_perfil_1' => $_POST['id_select_profesion_1'],
            'universitario_perfil_2' => $_POST['id_select_profesion_2'],
            'universitario_perfil_3' => $_POST['id_select_profesion_3'],
            'especialidad_perfil_1' => $_POST['id_select_especialidad_1'],
            'especialidad_perfil_2' => $_POST['id_select_especialidad_2'],
            'especialidad_perfil_3' => $_POST['id_select_especialidad_3'],
            'ex_similar' => $_POST['ex_similar']
        );
        $this->perfil_cargo_model->actualizar_perfil_cargo($id, $data);
        echo "<script>alert('Requisitos Ingresados Correctamente')</script>";
        redirect('sip/perfilcargo/modificar/' . $id . '', 'refresh');
    }
    
    
    
    function eliminar($id)
    {
        $this->load->model("perfil_cargo_model");
        $this->perfil_cargo_model->eliminar($id);
        echo "<script>alert('Registro Eliminado')</script>";
        redirect('sip/perfilcargo', 'refresh');
    }

    function modal_requisitos($id)
    {
        $this->load->model("perfil_cargo_model");
        $this->load->model("experiencia_model");
        $this->load->model("estado_perfil_model");
        $this->load->model("tecnicos_perfil_model");
        $this->load->model("universitarios_perfil_model");
        $this->load->model("especialidad_perfil_model");
        $this->load->model("licencia_perfil_model");
        $pagina             = "";
        $todo_el_formulario = $this->perfil_cargo_model->get_listar($id);
        $lista_aux          = array();
        if (!empty($todo_el_formulario)) {
            foreach ($todo_el_formulario as $rm) {
                $aux         = new stdClass();
                $aux->id     = $rm->id;
                $aux->nombre = $rm->nombre;
                
                $get_experiencia_perfil_1         = $this->experiencia_model->experiencia($rm->ex_similar);
                $aux->nombre_experiencia_perfil_1 = (isset($get_experiencia_perfil_1->años) ? $get_experiencia_perfil_1->años : "");
                $aux->ex_similar                  = $rm->ex_similar;
                $aux->competencias = $rm->competencias;

                $get_licencia_perfil_1         = $this->licencia_perfil_model->licencia($rm->licencia);
                $aux->nombre_licencia_perfil_1 = (isset($get_licencia_perfil_1->licencia) ? $get_licencia_perfil_1->nombre : "");
                $aux->licencia                 = $rm->licencia;
                
                $get_escolaridad_perfil_1         = $this->estado_perfil_model->estado($rm->escolaridad);
                $aux->nombre_escolaridad_perfil_1 = (isset($get_escolaridad_perfil_1->estado) ? $get_escolaridad_perfil_1->estado : "");
                $aux->escolaridad                 = $rm->escolaridad;
                
                $get_escolaridad_basica_perfil_1 = $this->estado_perfil_model->estado($rm->escolaridad_basica);
                $aux->nombre_escolaridad_basica  = (isset($get_escolaridad_basica_perfil_1->estado) ? $get_escolaridad_basica_perfil_1->estado : "");
                $aux->escolaridad_basica         = $rm->escolaridad_basica;
                
                $get_tecnico_perfil_1          = $this->tecnicos_perfil_model->tecnicos($rm->tecnicos_perfil_1);
                $aux->nombre_tecnicos_perfil_1 = (isset($get_tecnico_perfil_1->nombre) ? $get_tecnico_perfil_1->nombre : "");
                $aux->tecnicos_perfil_1        = $rm->tecnicos_perfil_1;
                
                $get_tecnico_perfil_2          = $this->tecnicos_perfil_model->tecnicos($rm->tecnicos_perfil_2);
                $aux->nombre_tecnicos_perfil_2 = (isset($get_tecnico_perfil_2->nombre) ? $get_tecnico_perfil_2->nombre : "");
                $aux->tecnicos_perfil_2        = $rm->tecnicos_perfil_2;
                
                $get_tecnico_perfil_3          = $this->tecnicos_perfil_model->tecnicos($rm->tecnicos_perfil_3);
                $aux->nombre_tecnicos_perfil_3 = (isset($get_tecnico_perfil_3->nombre) ? $get_tecnico_perfil_3->nombre : "");
                $aux->tecnicos_perfil_3        = $rm->tecnicos_perfil_3;
                
                $get_universitario_perfil_1         = $this->universitarios_perfil_model->universitario($rm->universitario_perfil_1);
                $aux->nombre_universitario_perfil_1 = (isset($get_universitario_perfil_1->nombre) ? $get_universitario_perfil_1->nombre : "");
                $aux->universitario_perfil_1        = $rm->universitario_perfil_1;
                
                $get_universitario_perfil_2         = $this->universitarios_perfil_model->universitario($rm->universitario_perfil_2);
                $aux->nombre_universitario_perfil_2 = (isset($get_universitario_perfil_2->nombre) ? $get_universitario_perfil_2->nombre : "");
                $aux->universitario_perfil_2        = $rm->universitario_perfil_2;
                
                $get_universitario_perfil_3         = $this->universitarios_perfil_model->universitario($rm->universitario_perfil_3);
                $aux->nombre_universitario_perfil_3 = (isset($get_universitario_perfil_3->nombre) ? $get_universitario_perfil_3->nombre : "");
                $aux->universitario_perfil_3        = $rm->universitario_perfil_3;
                
                $get_especialidad_perfil_1         = $this->especialidad_perfil_model->especialidad($rm->especialidad_perfil_1);
                $aux->nombre_especialidad_perfil_1 = (isset($get_especialidad_perfil_1->nombre) ? $get_especialidad_perfil_1->nombre : "");
                $aux->especialidad_perfil_1        = $rm->especialidad_perfil_1;
                
                $get_especialidad_perfil_2         = $this->especialidad_perfil_model->especialidad($rm->especialidad_perfil_2);
                $aux->nombre_especialidad_perfil_2 = (isset($get_especialidad_perfil_2->nombre) ? $get_especialidad_perfil_2->nombre : "");
                $aux->especialidad_perfil_2        = $rm->especialidad_perfil_2;
                
                $get_especialidad_perfil_3         = $this->especialidad_perfil_model->especialidad($rm->especialidad_perfil_3);
                $aux->nombre_especialidad_perfil_3 = (isset($get_especialidad_perfil_3->nombre) ? $get_especialidad_perfil_3->nombre : "");
                $aux->especialidad_perfil_3        = $rm->especialidad_perfil_3;
                
                array_push($lista_aux, $aux);
                unset($aux);
            }
        }
        $pagina['datos_requisitos']   = $lista_aux;
        $pagina['tecnico_lista']      = $this->tecnicos_perfil_model->listar_tecnicos();
        $pagina['profesion_lista']    = $this->universitarios_perfil_model->listar_profesional();
        $pagina['especialidad_lista'] = $this->especialidad_perfil_model->listar_especialidad();
        $pagina['escolaridad_lista']  = $this->estado_perfil_model->listar_escolaridad();
        $pagina['licencia_lista']  = $this->licencia_perfil_model->listar_licencia();
        $pagina['experiencia_lista']  = $this->experiencia_model->listar_experiencia();
        $this->load->view('sip/perfilcargo/modal_editar_requisitos', $pagina);
    }
    
}
?>