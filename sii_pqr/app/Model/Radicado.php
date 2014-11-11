<?php 
/**
* 
*/
class Radicado extends AppModel
{
	public $validate = array(
			/*Creacion de reglas*/
			'asunto' => array('rule'=>'notEmpty'),
			'asunto' => array('rule'=>'notEmpty'),				
			'descripcion' => array(
        'rule' => array('between', 10, 1500),
        'message' => 'La descripción debe tener entre 10 y 1500 caracteres.'
    )
	);
	
}
 ?>