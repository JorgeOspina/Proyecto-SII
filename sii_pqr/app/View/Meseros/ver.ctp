<h2>Detalle del Meser@ <?php echo $mesero['Mesero']['nombre']; ?></h2>
<p> 
	<label> Dni: 
		<span> <?php echo $mesero['Mesero']['dni']; ?> </span> 
	</label>
</p>

<p>
	<label>Nombre: 
		<span><?php echo $mesero['Mesero']['nombre']; ?></span>
	</label>
</p>
<p>
	<label>Apellido: 
		<span><?php echo $mesero['Mesero']['apellido']; ?></span>
	</label>
</p>
<p>
	<label>Telefono: 
		<span><?php echo $mesero['Mesero']['telefono']; ?></span>
	</label>
</p>
<p>
	<label>Fecha de creación: 
		<span><?php echo $this->Time->format('d-m-Y ; h:i A', $mesero['Mesero']['created']); ?></span>
	</label>
</p>
<p>
	<label>Fecha de modificación: 
		<span><?php echo $this->Time->format('d-m-Y ; h:i A', $mesero['Mesero']['modified']); ?></span>
	</label>
</p>

<pre><?php 
	//print_r($mesero);
 ?></pre>

 <h3>Encargado de las mesas:</h3>

<!-- Pregunta si los datos del mesero estan vacios
Mesa: accede a la clase del modelo mesa, ya que la asociacion se encuentra en el modelo-->
<?php if (empty($mesero['Mesa'])): ?>
	<p>No tiene mesas asociadas</p>
<?php endif ?>
<?php foreach ($mesero['Mesa'] as $m): ?>
	<p>
		Serie: <?php echo $m['serie']; ?>
		<br/>
		Puestos: <?php echo $m['puestos']; ?>
		<br/>
		Posición: <?php echo $m['posicion']; ?>
		<br/>
		Creado: <?php echo $m['created']; ?>
	</p>
<?php endforeach; ?>