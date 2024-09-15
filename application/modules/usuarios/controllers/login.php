<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->library('session');
		$this->load->helper('browsers');
		if(getBrowser()){
			redirect('/home/cambiar_browser', 'refresh');
		}
	}

	function index(){
		//$this->session->unset_userdata('reemplazo_final');
		//$this->session->unset_userdata('usr_reemplazo');
		//$this->session->unset_userdata('reemplazo');
		$this->load->view('login/login');
		
	}

	function validar(){
		$this->load->model('Usuarios_model');
		//$this->load->model('Fotostrab_model');
		$rut = strtoupper($_POST['rut']);
		$pass = $_POST['password'];
		
		if(empty($rut) || empty($pass)){
			redirect('/usuarios/login/index', 'refresh');
		}
		
		$validar = $this->Usuarios_model->validar($rut,$pass);
		
		if(count($validar) > 0 ){ //el usario esta validado, existe y la contraseña es correcta
		$this->load->helper('ip');
			if( is_numeric($validar->tipo)){
				//$foto_existe = $this->Fotostrab_model->get_usuario($validar->id);
				//$foto = ( count($foto_existe) > 0 ) ? $foto_existe->thumb : 'extras/layout2.0/img_perfil/default_thumb.jpg' ;
				//$foto_barra = ( count($foto_existe) > 0 ) ? $foto_existe->barra : 'extras/layout2.0/img_perfil/default_barra.jpg' ;
				$session = array(
					'rut' => $validar->rut,
					'nombres' => ucwords(mb_strtolower($validar->nombres,'UTF-8')),
					'id' => $validar->id,
					'tipo' => $validar->tipo,
					'subtipo' => $validar->subtipo,
					//'imagen' => $foto,
					//'imagen_barra' => $foto_barra,
					'navegador' => $_SERVER['HTTP_USER_AGENT'],
					'ip' => getRealIP(),
					'logged' => FALSE,
					'chat' => $validar->chat,
					'estado' => '1'
				);
				$this->session->set_userdata($session);
			}

			if($validar->tipo == 1){
			//tipo 1 super usuario
				$this->session->set_userdata('logged', TRUE);
				redirect('usuarios/home/', 'refresh');
			}
			elseif($validar->tipo == 3 && $validar->subtipo == 1){
			//tipo 1 mandante
				$this->session->set_userdata('logged', TRUE);
				redirect('usuarios/home/', 'refresh');
			}
			elseif($validar->tipo == 3 && $validar->subtipo == 2){
			//tipo 2 trabajador
				$this->session->set_userdata('logged', TRUE);
				redirect('trabajador/', 'refresh');
			}
			elseif($validar->tipo == 3 && $validar->subtipo == 3 ){
			//tipo 3 administrador
				$this->session->set_userdata('logged', TRUE);
				redirect('usuarios/home/', 'refresh');
			}
			elseif($validar->tipo == 3 && $validar->subtipo == 5){
			//tipo 5 encargado herramientas
				$this->session->set_userdata('logged', TRUE);
			}
			elseif($validar->tipo == 3 && $validar->subtipo == 6){
			//tipo 6 sub usuarios
				$this->session->set_userdata('logged', TRUE);
				redirect('subusuario/', 'refresh');
			}
			elseif($validar->tipo == 3 && $validar->subtipo == 7){
			//tipo 7 solo consultar sobre usuarios
				$this->session->set_userdata('logged', TRUE);
				redirect('consulta/', 'refresh');
			}
			elseif($validar->tipo == 3 && $validar->subtipo == 99){
			//tipo 99 moderador
				$this->session->set_userdata('logged', TRUE);
			}
			elseif($validar->tipo == 5 && $validar->subtipo == 105){
			//tipo 99 moderador
				$this->session->set_userdata('logged', TRUE);
				redirect('usuarios/home/', 'refresh');
			}
			elseif($validar->tipo == 5 && $validar->subtipo == 106){
			//tipo 99 moderador
				$this->session->set_userdata('logged', TRUE);
				redirect('usuarios/home/', 'refresh');
			}
			elseif($validar->tipo == 5 && $validar->subtipo == 107){
			//tipo 99 moderador
				$this->session->set_userdata('logged', TRUE);
				redirect('usuarios/home/', 'refresh');
			}
			elseif($validar->tipo == 5 && $validar->subtipo == 108){
			//tipo 99 moderador
				$this->session->set_userdata('logged', TRUE);
				redirect('usuarios/home/', 'refresh');
			}
			elseif($validar->tipo == 5 && $validar->subtipo == 110){
			//tipo 99 moderador
				$this->session->set_userdata('logged', TRUE);
				redirect('usuarios/home/', 'refresh');
				//echo "hola ";
			}
			else
				redirect('/usuarios/login/index', 'refresh');
			
		}
		else{
			$validar = $this->Usuarios_model->validar2($rut,$pass);
			if(count($validar) > 0 ){ //el usario esta validado, existe y la contraseña es correcta
			$this->load->helper('ip');
				if( is_numeric($validar->tipo)){
					//$foto_existe = $this->Fotostrab_model->get_usuario($validar->id);
					//$foto = ( count($foto_existe) > 0 ) ? $foto_existe->thumb : 'extras/img/perfil/avatar.jpg' ;
					$session = array(
						'codigo_ingreso' => $validar->codigo_ingreso,
						'id' => $validar->id,
						'tipo' => $validar->tipo,
						'subtipo' => $validar->subtipo,
						//'imagen' => $foto,
						'navegador' => $_SERVER['HTTP_USER_AGENT'],
						'ip' => getRealIP(),
						'logged' => FALSE,
						'chat' => $validar->chat,
						'estado' => '1'
					);
					$this->session->set_userdata($session);
				}
				
				if($validar->tipo == 1){
				//tipo 1 super usuario
					$this->session->set_userdata('logged', TRUE);
					redirect('usuarios/home/', 'refresh');
				}
				elseif($validar->tipo == 3 && $validar->subtipo == 1){
				//tipo 1 mandante
					$this->session->set_userdata('logged', TRUE);
					redirect('usuarios/home/', 'refresh');
				}
				elseif($validar->tipo == 3 && $validar->subtipo == 2){
				//tipo 2 trabajador
					$this->session->set_userdata('logged', TRUE);
					redirect('trabajador/', 'refresh');
				}
				elseif($validar->tipo == 3 && $validar->subtipo == 3 ){
				//tipo 3 administrador
					$this->session->set_userdata('logged', TRUE);
					redirect('usuarios/home/', 'refresh');
				}
				elseif($validar->tipo == 3 && $validar->subtipo == 5){
				//tipo 5 encargado herramientas
					$this->session->set_userdata('logged', TRUE);
				}
				elseif($validar->tipo == 3 && $validar->subtipo == 6){
				//tipo 6 sub usuarios
					$this->session->set_userdata('logged', TRUE);
					redirect('subusuario/', 'refresh');
				}
				elseif($validar->tipo == 3 && $validar->subtipo == 7){
				//tipo 7 solo consultar sobre usuarios
					$this->session->set_userdata('logged', TRUE);
					redirect('consulta/', 'refresh');
				}
				elseif($validar->tipo == 3 && $validar->subtipo == 99){
				//tipo 99 moderador
					$this->session->set_userdata('logged', TRUE);
				}
				elseif($validar->tipo == 5 && $validar->subtipo == 105){
					//tipo 105 admin de contrato tccu talcahuano
						$this->session->set_userdata('logged', TRUE);
						redirect('usuarios/home/', 'refresh');
				}
				elseif($validar->tipo == 5 && $validar->subtipo == 106){
					//tipo 106 admin de contrato tccu temuco
						$this->session->set_userdata('logged', TRUE);
						redirect('usuarios/home/', 'refresh');
				}
				elseif($validar->tipo == 5 && $validar->subtipo == 107){
					//tipo 107 admin de contrato tccu chillan
						$this->session->set_userdata('logged', TRUE);
						redirect('usuarios/home/', 'refresh');
				}
				elseif($validar->tipo == 5 && $validar->subtipo == 108){
					//tipo 108 jefe servicios tccu
						$this->session->set_userdata('logged', TRUE);
						redirect('usuarios/home/', 'refresh');
				}
				elseif($validar->tipo == 5 && $validar->subtipo == 110){
					//tipo 110 administrativo
						$this->session->set_userdata('logged', TRUE);
						redirect('usuarios/home/', 'refresh');
				}
				else
					redirect('/usuarios/login/index', 'refresh');
					
				}
			else {
				redirect('/usuarios/login/index', 'refresh');
			}
		}
	}

	function salir(){
		$this->session->destroy();
		redirect('/usuarios/login', 'refresh');
	}

	
}

/* End of file login.php */
/* Location: ./application/modules/usuarios/controller/login.php */