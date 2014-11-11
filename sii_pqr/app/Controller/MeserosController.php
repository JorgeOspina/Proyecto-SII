<?php 
	/**
	* 
	*/
	class MeserosController extends AppController
	{
		
		/*Componentes de cake*/
		public $helpers = array('Html', 'Form', 'Time');
		public $components =  array('Session');


		public function index(){
			/*set: Interactua con el modelo, y trae todos los datos de la tabla meseros
			primer parametro: crear variable meseros: 
			segundo parametro: llamar la funcion find para guardar en la variable meseros
			los datos de la tabla meseros*/

			/*$this->Mesero:es el modelo->find('all'):es un metodo que trae todos los registros
			, el parametro trae todo los campos*/
			$this->set('meseros', $this->Mesero->find('all'));
		}

		public function ver($id = null){
			if (!$id) {
				throw new NotFoundException('Datos invalidos');				
			}
			/*Registro con el id buscado*/
			$mesero = $this->Mesero->findById($id);
			if (!$mesero) {
				throw new NotFoundException('El mesero no existe');	
			}
			$this->set('mesero',$mesero);
		}

		public function nuevo(){
			/*Crea un nuevo mesero segun el formulario que contenga los datos a insertar
			Manda una peticion mediante $this->request, con el metodo is('post') obtiene el
			formulario completo.*/
			if ($this->request->is('post')) {
				/*El metodo create almacena los datos enviados por post en la bbdd*/
				$this->Mesero->create();
				/*el metodo save: Activa validaciones de cakphp
				Se hacen desde el modelo, si estan bien validados 
				entonces sigue ejecutando*/
				if ($this->Mesero->save($this->request->data)) {
					/*Objeto Sesion y setFlash sirve para crear un mesaje*/
					$this->Session->setFlash('El mesero ha sido creado', 'default', array('class'=>'success'));
					/*Redireccionar a una accion*/
					return $this->redirect(array('action'=>'index'));
				}
				$this->Session->setFlash('No se pudo crear el mesero');
			}
		}

		public function editar($id = null){
			if (!$id) {
				throw new NotFoundException('Datos invalidos');
			}
			$mesero = $this->Mesero->findById($id);
			if (!$mesero) {
				throw new NotFoundException('Mesero no encontrado');
			}
			if ($this->request->is('post','put')) {
				/*id=$id--> variable guarda el $id que entra por parametro*/
				$this->Mesero->id = $id;
				if ($this->Mesero->save($this->request->data)) {

					$this->Session->setFlash('El mesero ha sido modificado', 'default', array('class'=>'success'));
					return $this->redirect(array('action' => 'index' ));
				}
				$this->Session->setFlash('El registro no pudo ser modificado');
			}
			/*Si no encuentra una peticion mandada por el formulario edicion
			agarrar la peticion y hacerlo igual a la variable mesero, es decir,
			obtener los datos del mesero*/
			if (!$this->request->data) {
				$this->request->data = $mesero;
			}
		}

		public function eliminar($id){
			if ($this->request->is('get')) {
				throw new MethodNotAllowedException('Incorrecto');
				
			}
			if ($this->Mesero->delete($id)) {
				$this->Session->setFlash('El mesero ha sido eliminado', 'default', array('class'=>'success'));
				return $this->redirect(array('action' => 'index' ));
			}
		}



	}
 ?>