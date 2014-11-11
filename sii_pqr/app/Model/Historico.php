<?php 
	/**
	* 
	*/
	class Historico extends AppModel
	{
		public $validate = array(
			/*Creacion de reglas*/
			'tema' => array('rule'=>'notEmpty'),
			'subtema' => array('rule'=>'notEmpty')
			
		 );
		
		
	}
 ?>