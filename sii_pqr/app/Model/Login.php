<?php 
	/**
	* 
	*/
	class Login extends AppModel
	{		
		public $useTable = false;

		public $validate = array(
			/*Creacion de reglas*/
			
    		'nombre_usuario' => array(
				'notEmpty' => array('rule'=>'notEmpty'),
				'unique' => array('rule'=>'isUnique', 'message' => 'Ya existe un ciudadano con el mismo nombre de usuario' ),
			),
			'contrasena' => array( 'rule' => array('between', 5, 15),'message' => 'Las contraseñas deben tener entre 5 y 15 caracteres.'
    		),
    		'correo_electronico' => array( 'rule' => array('email', true),'message' => 'Por favor indique una dirección de correo electrónico válida.'
    		)
			
		 );
	}
 ?>