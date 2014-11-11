<?php 

class UsersController extends AppController
{
	
	public $helpers = array('Html','Form');
	public $components = array('Session');
	
	
	public function index(){
		
	}

	public function crear(){
		

		if ($this->request->is('post')) {
				/*El metodo create almacena los datos enviados por post en la bbdd*/
				
				$this->User->create();
				//$u = $this->User->find('all');			
			    //$this->set('u',$u);
				/*el metodo save: Activa validaciones de cakphp
				Se hacen desde el modelo, si estan bien validados 
				entonces sigue ejecutando*/
				
			

				if ($this->User->save($this->request->data)) {
					/*Objeto Sesion y setFlash sirve para crear un mesaje*/
					$dato = $this->request->data['User']['identificacion'];
					
					$this->Session->setFlash('El ciudadano ha sido creado '.$dato, 'default', array('class'=>'success'));
					/*Redireccionar a una accion*/

					return $this->redirect(array('controller'=>'radicados','action'=>'crear_pqr',$dato));
				}
				$this->Session->setFlash('El ciudadano no se registro con exito');
			}
	}
}
 ?>