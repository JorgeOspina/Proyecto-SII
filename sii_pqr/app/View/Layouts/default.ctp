<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap.min.css');		
		echo $this->Html->css('style.css');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="container background">
		<header class="row header background">
			<div class="logo col-md-6">
				<?php echo $this->Html->image('logo.png') ;?>
				
			</div>
			<div class="social-links col-md-6">
				<ul class="ul">

					<li><a href="https://www.facebook.com/colciencias"><?php echo $this->Html->image('facebook.png') ;?></a></li>
					<li><a href="https://twitter.com/Colciencias"><?php echo $this->Html->image('twitter.png') ;?></a></li>
					<li><a href="http://www.youtube.com/user/colciencias"><?php echo $this->Html->image('youtube.png') ;?></a></li>
					<li><a href="http://www.colciencias.gov.co/rss.xml"><?php echo $this->Html->image('feeds.png') ;?></a></li>
					<li><a href="https://cloudkey.eforcers.com/a/colciencias.gov.co/user/login?namespace=colciencias.gov.co"><?php echo $this->Html->image('email.png') ;?></a></li>
					
				</ul>
			</div>			
			<nav class="row nav navbar navbar-default col-md-12" role = "navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#acolapsar">
							<span class="sr-only">Texto</span>
							<span class="icon-bar">		
							</span>
							<span class="icon-bar">
							</span>
							<span class="icon-bar">
							</span>
						</button>
						
					</div>
					<div class="collapse navbar-collapse" id="acolapsar" >
						<ul class="nav navbar-nav ul-menu">
							<li><a href="#">Inicio</a></li>
							<li><?php echo $this->Html->link('Ciudadano',array('controller' => 'ciudadanos', 'action' => 'index')) ;?></li>	
							<li><?php echo $this->Html->link('Iniciar Sesión',array('controller' => 'login', 'action' => 'iniciar_sesion')) ;?></li>					
						</ul>
						
					</div>
					
				</div>
			</nav>			
		</header>
		<section class="row main">
				<section class="forms col-lg-12  col-md-12 col-sm-12 col-xs-12">
				<h2>PQR WEB ATENDIDA POR USUARIO</h2>
				<?php echo $this->Session->flash(); ?>
				<?php //echo $this->fetch('content'); ?>
				<?php echo $content_for_layout ?>				
				</section>
		</section>
		
	</div>
	<?php echo $this->Html->script('jquery.min.js'); ?>
	<?php echo $this->Html->script('bootstrap.min.js'); ?>
</body>
</html>
