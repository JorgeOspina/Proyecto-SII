<!--Pre:Muestra el arrglo ordenado
<pre>
<?php
	/*Muestra el arreglo en la pagina
	print_r($meseros);
	*/
?>
</pre>
-->


<h2>Lista de meseros</h2>
<div class="row col-lg-10 col-lg-offset-1" >
<table class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Detalle</th>
			<th>Editar</th>
			<th>Eliminar</th>
		</tr>
	</thead>
	<!--$meseros: variable array creada en el controlador
	$mesero: variable temporal para guardar cada mesero en una posicion especifica-->
	<tbody>
		<?php foreach ($meseros as $mesero): ?>
			<tr>
				<!--recupera el id ['Mesero']:-->
				<td><?php echo $mesero['Mesero']['id'] ?></td>
				<td><?php echo $mesero['Mesero']['nombre'] ?></td>
				<td><?php echo $mesero['Mesero']['apellido'] ?></td>
				<!--link():Crear un enlace, primer parametro:url, segundo parametro:arreglo-->
				<td><?php echo $this->Html->link('Detalle', array('controller'=>'meseros', 'action'=>'ver', $mesero['Mesero']['id'])); ?></td>
				<td><?php echo $this->Html->link('Editar', array('controller'=>'meseros', 'action'=>'editar', $mesero['Mesero']['id'])); ?></td>
				<!--se usa el metodo postLink mandar enlace por metodo post, no se envia por get porque puede traer incovenientes al omento en que los trastreadores de buscadores de la web detecten enlacen y desvocen los registros -->
				<td><?php echo $this->Form->postLink('Eliminar', array('action'=>'eliminar', $mesero['Mesero']['id']), array('confirm'=>'Eliminar a '.$mesero['Mesero']['nombre'].'?')); ?></td>
			</tr>
		
		<?php endforeach; ?>
	</tbody>
</table>
</div>