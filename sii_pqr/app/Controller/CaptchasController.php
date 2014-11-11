<?php 

	/**
	* 
	*/
	class CaptchasController extends AppController
	{
		public $helpers = array('Form');
		public $components = array('Captcha');
		public function index(){
			$captcha = $this->Captcha->getCaptcha();
			$string = implode('', $captcha);
			$this->Session->write('string',$string);
			$this->set(compact('string'));
		}

		public function check(){
			
			if (!empty($this->request->data['Captcha']['text'])) {
				if ($this->request->data['Captcha']['text']== $this->Session->read('string')) {
					$this->Session->setFlash('Correcto');
				}else{
					$this->Session->setFlash('Incorrecto');
				}
				$this->redirect(array('action'=>'index'));
			}else{
				$this->redirect(array('action'=>'index'));
			}
		}
		
	}
 ?>