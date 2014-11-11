<?php 
	/**
	* 
	*/
	App::uses('CakeEmail','Network/Email');
	class LoginController extends AppController
	{
		public $helpers = array('Html','Form');
		public $components = array('Session');
    	var $uses = array('User');
		
		public function iniciar_sesion(){
			if ($this->request->is('post')){

				$user = $this->User->findByNombre_usuario($this->request->data['Login']['nombre_usuario']);
				if (!$user) {
					return $this->Session->setFlash(__('El usuario no existe, verficar el nombre de usuario'));
				}
				if($user['User']['contrasena'] == $this->request->data['Login']['contrasena']){
					if($user['User']['rol'] == 'GAC'){
						$identificacion=$user['User']['identificacion'];
						return $this->redirect(array('controller'=>'historicos','action'=>'listar_radicados', $identificacion));
					}
					if($user['User']['rol'] == 'ciudadano'){
						return $this->redirect(array('controller'=>'ciudadanos','action'=>'index'));
					}
					
				}else{
					return $this->Session->setFlash(__('La contraseña es incorrecta'));
				}
			}		

		}

		public function recuperar_contrasena(){
			if ($this->request->is('post')){

				$user = $this->User->findByCorreo_electronico($this->request->data['Login']['correo_electronico']);
				if (!$user) {
				return $this->Session->setFlash(__('El usuario no se encuentra registrado en colciencias, por favor verifique su correo electrónico'));
				}else{
					$correo = $user['User']['correo_electronico'];
					$usuario = $user['User']['nombres'].' '.$user['User']['primer_apellido'].' '.$user['User']['segundo_apellido'] ;
					$contraseña = $user['User']['contrasena'];
					$this->send($correo, $usuario,$contraseña);

				}


		}


		}

		public function send($correo, $usuario, $contraseña){
			
			$email = new CakeEmail('smtp');
			$email->template('email_passwd')
			->emailFormat('html')
			->viewVars(array('usuario'=>$usuario, 'contraseña'=>$contraseña))
			->to($correo)
			->subject('Recuperación de contraseña Colciencias');
			if ($email->send()) {
				$this->Session->setFlash(__('La contraseña ha sido enviada a su correo electrónico, por favor verifique su bandeja de entrada'),
					'default',array('class'=>'success'));
				$this->redirect(array('controller'=>'login','action'=>'iniciar_sesion'));
			}

		}

		
	}
 ?>