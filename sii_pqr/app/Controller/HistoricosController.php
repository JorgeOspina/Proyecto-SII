<?php 
	/**
	* 
	*/
	class HistoricosController extends AppController
	{
		public $helpers = array('Html','Form');
		public $components = array('Session');
		var $uses = array('User','Radicado', 'Anexo','Historico');
		
		public function tipologia_tiempo_respuesta($id = null){
			$radicado = $this->Radicado->findById($id);
			if (!$radicado) {
				throw new NotFoundException('Radicado no encontrado');
			}
			$ciudadano = $this->User->findByIdentificacion($radicado['Radicado']['identificacion_id']);

			$this->set('ciudadano', $ciudadano);
			$this->set('radicado', $radicado);

			if ($this->request->is('post')) {
				$this->Historico->create();	
				
				if ($this->Historico->save($this->request->data)) {
					$this->Session->setFlash('La tipología y el tiempo de respuesta ha sido asignado con éxito', 'default', array('class'=>'success'));
					return $this->redirect(array('controller'=>'historicos','action'=>'listar_radicados/'.$radicado['Radicado']['usergac_identificacion']));
				}else{
					$this->Session->setFlash('Por favor verifique la información solicitada');
				}
			}




		}






			public function listar_radicados($usergac_identificacion = null){

			$opciones=array('conditions' => array('Radicado.usergac_identificacion' => $usergac_identificacion));	
			$radicados = $this->Radicado->find('all',$opciones);

			
			
			
			$this->recorrer_radicados($radicados);
			$this->set('radicados', $radicados);
		
		//$ciudadano_id=$radicados['Radicado']['identificacion_id'];
		//$ciudadano = $this->User->findByIdentificacion($ciudadano_id);
	
	

	}

		public function recorrer_radicados($radicados){
			
			$i=0;
			foreach ($radicados as $radicado) {
				$identificacion=$radicado['Radicado']['identificacion_id'];
				$ciudadano = $this->User->findByIdentificacion($identificacion);
				$nombres[] = array();
				$nombres[$i]=$ciudadano['User']['nombres'].' '.$ciudadano['User']['primer_apellido'].
				' '.$ciudadano['User']['segundo_apellido'];
				
				$i++;
				
			}
			
			if(!empty($nombres)){
				$this->set('nombres', $nombres);
			}else{
				$this->Session->setFlash('No tiene asignado ningun radicado');
			}
			
			
		}



		
	}
 ?>