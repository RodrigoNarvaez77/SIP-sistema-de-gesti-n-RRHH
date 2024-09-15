<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Cron extends CI_Controller {
		function index(){}
	
		function mail_evaluacion(){ // cron con envío de email cuando una evaluacion esta a un mes de vencer
			$this->load->model("Evaluaciones_model");
			$this->load->model("Evaluacionesevaluacion_model");
			$this->load->model("Evaluacionestipo_model");
			$this->load->model("Usuarios_model");
			$this->load->library('email');
			
			$config['smtp_host'] = 'mail.empresasintegra.cl';
			$config['smtp_user'] = 'sgo@empresasintegra.cl';
			$config['smtp_pass'] = 'gestion2012';
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			
			$dia_actual = date("d");
			$mes_actual = date("m");
			$anyo_actual = date("Y");
			
			$timestamp_actual = mktime(0,0,0,$mes_actual,$dia_actual,$anyo_actual);
			
			$listado = array();
			
			foreach($this->Evaluaciones_model->listar() as $l){
				if(!empty($l->fecha_v) && $l->fecha_v != '0000-00-00'){
					$fecha_v = explode("-", $l->fecha_v);
					
					$dia = $fecha_v[2];
					$mes = $fecha_v[1];
					$anyo = $fecha_v[0];
					$timestamp_eval = mktime(0,0,0,$mes,$dia,$anyo);
					
					$segundos_diferencia = $timestamp_eval - $timestamp_actual;
					$dias_diferencia = $segundos_diferencia / (60 * 60 * 24); 
					$dias_diferencia = floor($dias_diferencia);
					//echo $dias_diferencia."<br/>";
					if($dias_diferencia < 31 && $dias_diferencia > 29){
						$encontrados = TRUE;
						$aux = new stdClass();
						$usuario = $this->Usuarios_model->get($l->id_usuarios);
						$aux->nombre = $usuario->nombres;
						$aux->paterno = $usuario->paterno;
						$aux->materno = $usuario->materno;
						$aux->rut = $usuario->rut_usuario;
						$eval = $this->Evaluacionesevaluacion_model->get($l->id_evaluacion);
						$aux->nombre_eval = $eval->nombre;
						$aux->tipo_eval = $this->Evaluacionestipo_model->get($eval->id_tipo)->nombre;
						$aux->fecha_v = $dia."-".$mes."-".$anyo;
						array_push($listado,$aux);
						unset($aux);
					}
				}
			}
			if(@$encontrados){
				echo "enviando";
				$pagina['listado'] = $listado;
				foreach($this->Usuarios_model->listar_tipo(3) as $u){
					if(!empty($u->email) && $u->email != "" )
						$correos[] = $u->email; 
				}
				$this->email->from('sgo@empresasintegra.cl', 'Grupo de Empresas Integra Ltda.');
				$this->email->to($correos);
				$this->email->subject('Proximos vencimientos de evaluaciones');
				$this->email->message($this -> load -> view('email/evaluacion',$pagina,TRUE));
				$this->email->set_alt_message('Para visualizar correctamente este correo, favor cambiar la vista a html');
				if( !@$this->email->send()){
					//echo "error";
					echo $this->email->print_debugger();
				}
			}
		}
}
?>