<?php
	/**
	* 
	*/
	class Mesero extends AppModel
	{
		/*Campo virtual*/
		public $virtualFields = array('nombre_completo'=>'CONCAT(Mesero.nombre, " ", Mesero.apellido)');
		/*Ojo estas variables son palabras reservadas
		de cakephp*/
		public $validate = array(
			/*Creacion de reglas*/
			'dni' => array(
				'notEmpty' => array('rule'=>'notEmpty'),
				'numeric' => array('rule'=>'numeric','message'=>'Solo números'),
				'unique' => array('rule'=>'isUnique', 'message' => 'El dni a se encuentra en la base de datos' ),
				),
				
			'nombre' => array('rule'=>'notEmpty'),

			'apellido' => array('rule'=>'notEmpty'),

			'telefono' => array(
				'notEmpty' => array('rule'=>'notEmpty'),
				'numeric' => array('rule'=>'numeric','message'=>'Solo números')
				)

		 );
		/*Mesa: clase del Modelo
		Dentro de mesa un conjunto de parametros
		className: clase a la que se va a dirigir, en este caso la clase del modelo
		foreignKey: llave foranea, en este caso es mesero_id
		conditions: para condicionar algunos campos que se quieran incluir, para consultas
		order: consulta para poner orden asecendete o descendente
		depend: si es true: si eliminamos a lucas, se eliminaran tbn las mesas asociadas a lucas
		si es false: no lo elimina*/
		public $hasMany = array(
			'Mesa' =>     array(
					'className' => 'Mesa',
					'foreignKey' => 'mesero_id',
					'conditions' => '',
					'order' => 'Mesa.serie DESC',
					'depend' => false
				)
		 );
	}
?>