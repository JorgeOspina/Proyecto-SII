<h2>Solicitud del PQR</h2>
<?php echo $this->Form->create('Ciudadano');?>

<div class="row ciu">
	<div class="col-md-6 col-md-offset-1">
		<h3>Ciudadanos registrados</h3>
		<?php echo $this->Form->input('Número de identificación', array('class'=>'form-control'));?>
		<?php echo $this->Form->input('Número de radicado', array('class'=>'form-control'));?>
	</div>
	<div class="col-md-4">
		<h3>Ciudadanos no registrados</h3>
		<div class="btn btn-primary link-ciu col-md-12 botones">
			<?php echo $this->Html->link('Crear ciudadano', array('controller'=>'users','action'=>'crear'));?>
		</div>
		<div class="btn btn-primary link-ciu col-md-12 botones">
			<?php echo $this->Html->link('Ciudadano anónimo', array('controller'=>'radicados','action'=>'crear_anonimo'));?>
		</div>
		
	</div>
</div>