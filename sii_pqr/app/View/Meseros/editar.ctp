<h2>Editar Mesero</h2>
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
	echo $this->Form->end('Editar Mesero');


	echo $this->Form->create('Document', array(
    'enctype' => 'multipart/form-data'
));
	echo $this->Form->input('Document.submittedfile', array(
    'between' => '<br />',
    'type' => 'file'
));

?>
<!-- El tipo de codificación de datos, enctype, se DEBE especificar como a continuación -->
<form enctype="multipart/form-data" action="__URL__" method="POST">
    <!-- MAX_FILE_SIZE debe preceder el campo de entrada de archivo -->
    <input type="" name="MAX_FILE_SIZE" value="30000" />
    <!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
    Enviar este archivo: <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>