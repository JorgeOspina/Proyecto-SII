<?php 
	/**
	* 
	*/
	class AnexosController extends AppController
	{
		public $uses = array();
		public $components = array('Upload');

		public function upload(){
			if(!empty($this->request->data)){
				//Nombre que se le dio en la vista $this->request->data['Archivo']['uploadfile']
				$this->Upload->upload($this->request->data['Archivo']['uploadfile']);
			}
		}
		
	}
 ?>