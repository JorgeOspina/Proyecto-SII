<div class ="row center ciu">
<h2>Elaboración de PQR web</h2>	

<div class ="col-md-10 col-md-offset-1">


	<div class ="col-md-6">
		<?php echo $this->Form->input('tipo_identificacion', array('options' => array('Cédula de ciudadania','Tarjeta de indentidad'), 'empty' => 'Seleccione un tipo','class'=>'form-control','disabled' => true, 'value'=>$ciudadano['User']['tipo_identificacion'])); ?>
	</div>
	<div class="col-md-6">
		<?php echo $this->Form->input('identificacion',array('label'=>'Número de identificación','class'=>'form-control','disabled' => true, 'value'=>$ciudadano['User']['identificacion'])); ?>
	</div>	
	<div class="col-md-4">
		<?php echo $this->Form->input('nombres',array('class'=>'form-control','disabled' => true, 'value'=>$ciudadano['User']['nombres'])); ?>
	</div>
	<div class="col-md-4">
		<?php echo $this->Form->input('primer_apellido',array('class'=>'form-control','disabled' => true, 'value'=>$ciudadano['User']['primer_apellido'])); ?>
	</div>
	<div class="col-md-4">
		<?php echo $this->Form->input('segundo_apellido',array('class'=>'form-control','disabled' => true, 'value'=>$ciudadano['User']['segundo_apellido'])); ?>
	</div>
	<div class="col-md-4">
		<?php echo $this->Form->input('correo_electronico', array('class'=>'form-control','disabled' => true, 'value'=>$ciudadano['User']['correo_electronico'])); ?>
	</div>
	<div class="col-md-4">
		<?php echo $this->Form->input('pais', array('options' => array('Colombia'), 'empty' => 'Seleccione un país','class'=>'form-control','disabled' => true, 'value'=>$ciudadano['User']['pais'])); ?>
	</div>
	<div class="col-md-4">
		<?php echo $this->Form->input('departamento', array('options' => array('Quindío'), 'empty' => 'Seleccione un departamento','class'=>'form-control','disabled' => true, 'value'=>$ciudadano['User']['departamento'])); ?>
	</div>
	<div class="col-md-4">
		<?php echo $this->Form->input('ciudad', array('options' => array('Armenia'), 'empty' => 'Seleccione una ciudad','class'=>'form-control','disabled' => true, 'value'=>$ciudadano['User']['ciudad'])); ?>
	</div>
	<div class="col-md-4">
		<?php echo $this->Form->input('direccion',array('class'=>'form-control','disabled' => true, 'value'=>$ciudadano['User']['direccion'])); ?>
	</div>
	<div class="col-md-4">
		<?php echo $this->Form->input('telefono',array('class'=>'form-control','disabled' => true, 'value'=>$ciudadano['User']['telefono'])); ?>
	</div>
</div>
<div class="col-md-10 col-md-offset-1">

<?php echo $this->Form->create('Radicado', array('type'=>'file')); ?>
<div class="padding-form">
	<div>
		<?php echo $this->Form->input('asunto',array('class'=>'form-control')); ?>
	</div>
	<div>
		<?php echo $this->Form->input('tipo_pqr', array('label' => 'Tipo de PQR','type'=>'select','options' => array('Derecho de petición','Consulta general', 'Solicitud de información-Certificados','Solicitud de información-Congresistas','Solicitud de información-Informes Congresistas','Queja','Reclamo','Sugerencia','Constitución en Renuencia'), 'notEmpty' => 'Seleccione el tipo de docuemnto','class'=>'form-control')); ?>
	</div>
	<div>
		<?php echo $this->Form->input('descripcion', array('label' => 'Formule su solicitud de forma clara, precisa, breve y respetuosa','rows'=>4,'class'=>'form-control')); ?>
	</div>
	
	<div class="anexos padding">
		<?php echo $this->Form->file('anexo',array('label'=>'Anexos','multiple')); ?>
		

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
			</tbody>
		</table>

	</div>
	<div>
		<?php echo $this->Form->label('Captcha'); ?> <span class="red">*</span>
		<p class="captcha"><?php echo $string; ?></p>
		<?php echo $this->Form->input('text', array('label'=>'Ingrese el texto','class'=>'form-control')); ?>
	</div>

	<?php echo $this->Form->input('identificacion_id',array('type' =>'hidden', 'value'=>$ciudadano['User']['identificacion'])); ?>
	<?php echo $this->Form->input('usergac_identificacion',array('type' =>'hidden', 'value'=>$id)); ?>
	
	
</div>

<div class="separar col-md-2 col-md-offset-4">
    <input class="btn btn-primary botones" type="submit" value="Registrar PQR anónimo" />
    
</div>
<div class="separar col-md-5 col-md-offset-1">
	<div class="btn btn-primary cancelar col-md-5 botones">
			<?php echo $this->Html->link('Cancelar', array('controller'=>'radicados','action'=>'crear_pqr/'.$ciudadano['User']['identificacion']));?>
	</div>
</div>
</div>



</div>