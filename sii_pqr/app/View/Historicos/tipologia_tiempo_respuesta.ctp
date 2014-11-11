<h2>PQR Web N° <?php  ?></h2>


<div class="row tipologia">
	

	
	<div class="radiob col-md-offset-3">
		<label class="radio-inline"><strong>Tipo de PQR:</strong></label>
		<label class="radio-inline">
			<input type="radio" name="optradio" disabled=true>Física
		</label>
		<label class="radio-inline">
	    	<input type="radio" name="optradio" disabled=true checked="checked">Web
		</label>
		<label class="radio-inline">
	    	<input type="radio" name="optradio" disabled=true>Presencial
		</label>
		<label class="radio-inline">
	    	<input type="radio" name="optradio" disabled=true>Correo electrónico
		</label>
	</div>


	<div class ="col-md-4 col-md-offset-3">
		<?php echo $this->Form->input('tipo_identificacion', array('options' => array('Cédula de ciudadania','Tarjeta de indentidad'), 'label'=>'Tipo de identificación','class'=>'form-control','disabled' => true, 'value'=>$ciudadano['User']['tipo_identificacion'])); ?>
	</div>
	<div class="col-md-3 col-md-offset-3">
		<?php echo $this->Form->input('identificacion',array('label'=>'Dependencia','class'=>'form-control','disabled' => true, 'value'=>'Grupo de Atención al Ciudadano')); ?>
	</div>	
	<div class="col-md-3">
		<?php echo $this->Form->input('recepcion',array('label'=>'Modo recepción','class'=>'form-control','disabled' => true, 'value'=>'Web')); ?>
	</div>

	<div class="col-md-4 col-md-offset-3">
	<?php echo $this->Form->input('tipo_pqr', array('label' => 'Tema del ciudadano','type'=>'select','options' => array('Derecho de petición','Consulta general', 'Solicitud de información-Certificados','Solicitud de información-Congresistas','Solicitud de información-Informes Congresistas','Queja','Reclamo','Sugerencia','Constitución en Renuencia'),'class'=>'form-control', 'disabled'=>true, 'value'=>$radicado['Radicado']['tipo_pqr'])); ?>
	</div>
	
	<div class="col-md-6 col-md-offset-3">
		<?php echo $this->Form->input('asunto',array('class'=>'form-control', 'disabled'=>true, 'value'=>$radicado['Radicado']['asunto'])); ?>
	</div>

	

	<div class="f">

	<?php echo $this->Form->create('Historico'); ?>
	<div class="col-md-3 col-md-offset-3">
	<?php echo $this->Form->input('tema', array('label' => 'Tema de colciencias','type'=>'select','options' => array('15 días','20 días','1 mes'),'empty' => 'Seleccione los días habiles','class'=>'form-control')); ?>
	</div>

	<div class="col-md-3">
	<?php echo $this->Form->input('subtema', array('label' => 'Subtema de colciencias','type'=>'select','options' => array('Investigadores de universidad','Investigador general'),'empty' => 'Seleccione un investigador','class'=>'form-control')); ?>
	</div>
	

	<div class="col-md-6 col-md-offset-3">
		
		<table class="table table-striped ">
			<thead>
				<tr class="links-tr">
					<th colspan="5"><a href="#">Oficio remisorio</a><span>></span>
									<a href="#">Anexos</a><span>></span>
									<a href="#">Historico</a></th>
				</tr>
				<tr>
					<td>Nombre</td>
					<td>Fecha</td>
					<td>Tamaño</td>
					<td>Descargar</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					
				</tr>		
			</tbody>
		</table>

	</div>

	<?php echo $this->Form->input('operacion',array('type' =>'hidden', 'value'=>'Actualizado')); ?>
	<?php echo $this->Form->input('usergac_identificacion',array('type' =>'hidden', 'value'=>$radicado['Radicado']['usergac_identificacion'])); ?>
	<?php echo $this->Form->input('observacion',array('type' =>'hidden', 'value'=>'Tipologia y tiempo de respuesta asignado a '.$ciudadano['User']['identificacion'])); ?>

	<div class="separar col-md-2 col-md-offset-4">
    <input class="btn btn-primary botones" type="submit" value="Actualizar" />
    
	</div>

	<div class="btn btn-primary cancelar1 cancelar col-md-2 botones">
			<?php echo $this->Html->link('Cancelar', array('controller'=>'historicos','action'=>'tipologia_tiempo_respuesta'));?>
	</div>
	</div>
	
</div>