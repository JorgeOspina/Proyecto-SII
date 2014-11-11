<?php 
/**
* 
*/
class User extends AppModel
{
	public $validate = array(
			/*Creacion de reglas*/
			'tipo_identificacion' => array('rule'=>'notEmpty'),
			'identificacion' => array(
				'notEmpty' => array('rule'=>'notEmpty'),
				'numeric' => array('rule'=>'numeric','message'=>'El número de identificación debe ser numérico'),
				'unique' => array('rule'=>'isUnique', 'message' => 'El número de identificación del ciudadano, ya se encuentra registrado en el sistema' ),
			),				
			'nombres' => array('rule'=>'notEmpty'),
			'primer_apellido' => array('rule'=>'notEmpty'),
			'segundo_apellido' => array('rule'=>'notEmpty'),
			'correo_electronico' => array( 'rule' => array('email', true),'message' => 'Por favor indique una dirección de correo electrónico válida.'
    		),
    		'pais' => array('rule'=>'notEmpty'),
    		'departamento' => array('rule'=>'notEmpty'),
    		'ciudad' => array('rule'=>'notEmpty'),
    		'nombre_usuario' => array(
				'notEmpty' => array('rule'=>'notEmpty'),
				'unique' => array('rule'=>'isUnique', 'message' => 'Ya existe un ciudadano con el mismo nombre de usuario' ),
			),
			'contrasena' => array( 'rule' => array('between', 5, 15),'message' => 'Las contraseñas deben tener entre 5 y 15 caracteres.'
    		)
			
		 );
	
}
 ?>