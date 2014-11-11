<?php 
App::uses('CakeEmail','Network/Email');

class RadicadosController extends AppController
{
	
	public $helpers = array('Html','Form');
	public $components = array('Session','Captcha','Upload');
    var $uses = array('User','Radicado', 'Anexo');

	public function index(){
		
	}



		/*public function check(){
			echo "<pre>";
			print_r($this->request->data['Radicado']['text']);
			print_r($this->Session->read('string'));
			echo "<pre>";
			if (!empty($this->request->data['Captcha']['text'])) {
				if ($this->request->data['Captcha']['text']== $this->Session->read('string')) {
					$this->Session->setFlash('Correcto');
				}else{
					$this->Session->setFlash('Incorrecto');
				}
				$this->redirect(array('action'=>'crear'));
			}else{
				$this->redirect(array('action'=>'crear'));
			}
		}*/
		

		public function send($correo, $usuario, $numero){
			
			$email = new CakeEmail('smtp');
			$email->template('email_tpl')
			->emailFormat('html')
			->viewVars(array('usuario'=>$usuario, 'numero'=>$numero))
			->to($correo)
			->subject('Generación de PQR de Colciencias')
			->attachments('files/GENERACION DE PQR.pdf');
			if ($email->send()) {
				$this->Session->setFlash(__('El número de PQR ha sido enviado a su correo electrónico'),
					'default',array('class'=>'success'));
			}else{
				$this->Session->setFlash(__('Debe estar conectado a internet para enviar el mensaje'));
			}

		}

	public function crear_anonimo(){		
		
		if ($this->request->is('post')) {
		
			if (!empty($this->request->data['Radicado']['text'])) {
				if ($this->request->data['Radicado']['text']== $this->Session->read('string')) {
					$this->Radicado->create();		
				
					if ($this->Radicado->save($this->request->data)) {				
						$this->Session->setFlash('El PQR anónimo fue egistrado con éxito', 'default', array('class'=>'success'));					
						return $this->redirect(array('controller'=>'ciudadanos','action'=>'index'));
					}else{
						$this->Session->setFlash('Por favor verifique la información solicitada e ingrese de nuevo el captcha');
						$this->cargar_capcha();
						}
				}else{
					$this->Session->setFlash('El captcha es incorrecto');
					$this->cargar_capcha();
					//$this->redirect(array('action'=>'crear_anonimo'));
				}
			}else{
				$this->Session->setFlash('Debe introducir el texto del Captcha');
				$this->cargar_capcha();
				}
				//$this->redirect(array('action'=>'crear_anonimo'));
	     }else{
	    	$this->cargar_capcha();
	     }
	} 

	public function cargar_capcha(){
			$captcha = $this->Captcha->getCaptcha();
			$string = implode('', $captcha);
			$this->Session->write('string',$string);
			$this->set(compact('string'));
	}


	public function crear_pqr($identificacion = null){
				
			if (!$identificacion) {
				throw new NotFoundException('Datos invalidos');
			}
			
			/*
			echo "<pre>";			
			print_r($this->User->findByIdentificacion($identificacion));
			echo "<pre>";
			*/
			$ciudadano = $this->User->findByIdentificacion($identificacion);
			$this->set('ciudadano', $ciudadano);

			if (!$ciudadano) {
				throw new NotFoundException('Ciudadano no encontrado');
			}
			$this->gac_aleatorio();	
			if ($this->request->is('post')) {
		
			if (!empty($this->request->data['Radicado']['text'])) {
				if ($this->request->data['Radicado']['text']== $this->Session->read('string')) {
					$this->Radicado->create();		
				
					if ($this->Radicado->save($this->request->data)) {

						$this->Session->setFlash('El PQR  fue egistrado con éxito', 'default', array('class'=>'success'));
						$radicado = $this->Radicado->findByIdentificacion_id($identificacion);
						$correo = $ciudadano['User']['correo_electronico'];
						$usuario = $ciudadano['User']['nombres'].' '.$ciudadano['User']['primer_apellido'].' '.$ciudadano['User']['segundo_apellido'] ;
						$numero = $radicado['Radicado']['id'];	
						$this->send($correo, $usuario, $numero);			
						return $this->redirect(array('controller'=>'ciudadanos','action'=>'index'));
					}else{
						$this->Session->setFlash('Por favor verifique la información solicitada e ingrese de nuevo el captcha');
						$this->cargar_capcha();
						}
				}else{
					$this->Session->setFlash('El captcha es incorrecto');
					$this->cargar_capcha();
					//$this->redirect(array('action'=>'crear_anonimo'));
				}
			}else{
				$this->Session->setFlash('Debe introducir el texto del Captcha');
				$this->cargar_capcha();
				}
				//$this->redirect(array('action'=>'crear_anonimo'));
	     }else{
	    	$this->cargar_capcha();
	     }
						
		}


		public function gac_aleatorio(){
			$opciones=array('conditions' => array('User.rol' => 'GAC'));	
			$users = $this->User->find('all',$opciones);
			$tamaño = count($users);
			$posicion = rand(0,$tamaño-1);
			$id = $users[$posicion]['User']['identificacion'];
			$this->set('id',$id);

			
		}
}
?>

