<h2>Crear Mesero</h2>
<?php
	
	/*Inicializa un formulario, crea un formulario, asume que
	utiliza el metdo post*/
	echo $this->Form->create('Mesero');
	/*Crea campos*/
	echo $this->Form->input('dni');
	echo $this->Form->input('nombre');
	echo $this->Form->input('apellido');
	echo $this->Form->input('telefono');
	/*Crea un boton*/
	echo $this->Form->end('Crear Mesero');
	
?>