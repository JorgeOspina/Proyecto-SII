<div class="row center ciu">

<h2>Registrar PQR anónimo</h2>	
<?php echo $this->Form->create('Radicado'); ?>
<div class="col-md-9 col-md-offset-2">
	<?php echo $this->Form->input('asunto',array('class'=>'form-control')); ?>
	<?php echo $this->Form->input('tipo_pqr', array('label' => 'Tipo de PQR','type'=>'select','options' => array('Derecho de petición','Consulta general', 'Solicitud de información-Certificados','Solicitud de información-Congresistas','Solicitud de información-Informes Congresistas','Queja','Reclamo','Sugerencia','Constitución en Renuencia'), 'notEmpty' => 'Seleccione el tipo de docuemnto','class'=>'form-control')); ?>

	<?php echo $this->Form->input('descripcion', array('label' => 'Formule su solicitud de forma clara, precisa, breve y respetuosa','rows'=>4,'class'=>'form-control')); ?>

	<div class="anexos padding">
	<?php echo $this->Form->input('nombre',array('label'=>'Anexos','type' =>'file')); ?>
	<?php echo $this->Form->input('dir',array('type' =>'hidden')); ?>

	<table class="table table-striped ">

	<thead>
		<tr>
			<th colspan="5"><h3>Tabla de anexos</h3></th>
		</tr>
		<tr>
			<td>Nombre</td>
			<td>Fecha</td>
			<td>Tamaño</td>
			<td>Descargas</td>
			<td>Eliminar</td>
		</tr>
	</thead>
	<tbody>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	</tbody>
</table>
</div>
<?php echo $this->Form->label('Captcha'); ?> <span class="red">*</span>
<p class="captcha"><?php echo $string; ?></p>
<?php echo $this->Form->input('text', array('label'=>'Ingrese el texto','class'=>'form-control')); 
//,'url'=>array('action'=>'check'))?>





</div>
<div class="separar col-md-2 col-md-offset-4">
    <input class="btn btn-primary botones" type="submit" value="Registrar PQR anónimo" />
    
</div>

	<div class="btn btn-primary cancelar1 cancelar col-md-2 botones">
			<?php echo $this->Html->link('Cancelar', array('controller'=>'radicados','action'=>'crear_anonimo'));?>
	</div>





</div>



