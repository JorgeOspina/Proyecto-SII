

<div class="row center ciu">
<h2>Registro del ciudadano</h2>	
<?php echo $this->Form->create('User'); ?>
<div class="col-md-5 col-md-offset-1">


<?php echo $this->Form->input('tipo_identificacion', array('options' => array('Cédula de ciudadania','Tarjeta de indentidad'), 'empty' => 'Seleccione un tipo','class'=>'form-control')); ?>
<?php echo $this->Form->input('identificacion',array('label'=>'Número de identificación','class'=>'form-control')); ?>
<?php echo $this->Form->input('nombres',array('class'=>'form-control')); ?>
<?php echo $this->Form->input('primer_apellido',array('class'=>'form-control')); ?>
<?php echo $this->Form->input('segundo_apellido',array('class'=>'form-control')); ?>



<?php echo $this->Form->input('correo_electronico', array('class'=>'form-control')); ?>

<?php echo $this->Form->input('pais', array('options' => array('Colombia'), 'empty' => 'Seleccione un país','class'=>'form-control')); ?>
</div>
<div class="col-md-5">
<?php echo $this->Form->input('departamento', array('options' => array('Quindío'), 'empty' => 'Seleccione un departamento','class'=>'form-control')); ?>
<?php echo $this->Form->input('ciudad', array('options' => array('Armenia'), 'empty' => 'Seleccione una ciudad','class'=>'form-control')); ?>
<?php echo $this->Form->input('direccion',array('class'=>'form-control')); ?>
<?php echo $this->Form->input('telefono',array('class'=>'form-control')); ?>
<?php echo $this->Form->input('nombre_usuario',array('class'=>'form-control')); ?>
<?php echo $this->Form->input('contrasena',array('label'=>'Contraseña','type'=>'password','class'=>'form-control')); ?>
<?php echo $this->Form->input('rol',array('type' =>'hidden', 'value'=>'ciudadano')); ?>
</div>
<div class="separar col-md-5 col-md-offset-5">
    <input class="btn btn-primary botones" type="submit" value="Registrar ciudadano" />
</div>
</div>

