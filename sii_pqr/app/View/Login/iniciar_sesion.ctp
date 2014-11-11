<div class ="row center ciu login">
<h2>Ingresar a Colciencias</h2>	
<?php echo $this->Form->create('Login'); ?>

<div class="col-md 10 col-md-offset-1">
	<?php echo $this->Form->input('nombre_usuario',array('label'=>'Nombre de usuario','class'=>'form-control')); ?>
	<?php echo $this->Form->input('contrasena',array('label'=>'Contraseña','type'=>'password','class'=>'form-control')); ?>
</div>

<div class="col-md-4 col-md-offset-2 fields_login">
	<?php echo $this->Html->link('Olvidé mi contraseña', array('controller'=>'login','action'=>'recuperar_contrasena'));?>
	
</div>
<div class="col-md-4 col-md-offset-1 fields_login">
	<?php echo $this->Html->link('Soy un usuario nuevo', array('controller'=>'users','action'=>'crear'));?>
	
</div>







<div class="separar col-md-4 col-md-offset-5" >
    <input class="btn btn-primary botones" type="submit" value="Iniciar Sesion" />    
</div>
</div>
