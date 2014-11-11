<?php 
	/**
	* 
	*/
	class CaptchaComponent extends Component
	{
		
		public $characters = array();
		public $numberChars = 6;
		public function initialize(Controller $controller){
			$this->characters = array_merge(range('a', 'z'), range('A', 'Z'),range('0', '9'));
		}

		public function getCaptcha(){
			$result = array();
			shuffle($this->characters);
			for ($i=0; $i < $this->numberChars; $i++) { 
				$result[]=$this->characters[$i];
			}
			return $result;
		}
	}
 ?>