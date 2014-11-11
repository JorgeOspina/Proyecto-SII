<div class ="row center ciu login">
<h2>Recuperar mi contraseña</h2>	
<?php echo $this->Form->create('Login'); ?>

<div class="col-md 10 col-md-offset-1">
	<?php echo $this->Form->input('correo_electronico',array('type'=>'email','label'=>'Correo electrónico','class'=>'form-control')); ?>
</div>

<div class="separar col-md-4 col-md-offset-5" >
    <input class="btn btn-primary botones" type="submit" value="Enviar" />    
</div>
</div>
