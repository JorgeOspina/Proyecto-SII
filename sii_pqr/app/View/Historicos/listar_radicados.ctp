<h2>Lista de radicados asignados</h2>
<div class="row col-lg-10 col-lg-offset-1" >
<table class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
	<thead>
		<tr>
			<th>Nombre del ciudadano</th>
			<th>Número de identificación</th>
			<th>Número de radicado</th>
			<th>Asignar tipología y tiempo de respuesta</th>
		</tr>
	</thead>
	<!--$meseros: variable array creada en el controlador
	$mesero: variable temporal para guardar cada mesero en una posicion especifica-->
	<tbody>
		<?php $i=0; ?>
		<?php foreach ($radicados as $radicado): ?>
			
			
			<tr>
				<!--recupera el id ['Mesero']:-->
				<td><?php echo $nombres[$i];?></td>
				<td><?php echo $radicado['Radicado']['id'];?></td>
				<td><?php echo $radicado['Radicado']['identificacion_id'];?></td>
				<!--link():Crear un enlace, primer parametro:url, segundo parametro:arreglo-->
				<td><?php echo $this->Html->link('Asignar', array('controller'=>'historicos', 'action'=>'tipologia_tiempo_respuesta', $radicado['Radicado']['id'])); ?></td>
				
			</tr>
		<?php $i++; ?>
		
		<?php endforeach; ?>
	</tbody>
</table>
</div>