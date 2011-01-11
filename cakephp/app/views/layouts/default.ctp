<?php echo $this->Html->docType(); ?> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>BeInTouch - serwis społecznościowy</title>
	<?php echo $this->Html->css('main'); ?>
	<?php echo $this->Html->script('jquery-1.4.4.min'); ?>
	<?php echo $this->Html->script('jquery.gmap-1.1.0-min'); ?>
	<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAAIS_dzTcF66Tlpp5lagb-IxQQPMc1US4WhDrj9TsC7G-6SsMJcRQbUf0gCzuDR8GP3qjALMe0oT1KMg" type="text/javascript"></script>
	
	
	<style type="text/css">
	
	ul {
		background: #F4F4F4;
		list-style: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
	}
	
	li {
		background: #F4F4F4;
		text-align: left;
	}
	
	li#first {
		/* color: blue; */
		/* background: transparent; */
		/* position: relative; */
		border-bottom: 1px solid #404040;
		text-align: center;
		border-left: 1px solid #404040;
		/* float: right; */
	}
	
	li#first a {
		font-weight: bold;
		background: #cf8496;
		color: white;
		text-decoration: none;
		padding: 5px 10px;
		/* margin: 1px; */
		width: 100px;
		display: block;
	}
	
	li#first a:hover {
		/* background: #6195b3; */
	}

	
	li#first ul li a {
		color: #9f354e;
		text-decoration: none;
		padding: 7px 10px;
		/* margin: 1px; */
		width: inherit;
		display: block;
		background: white;
		font-weight: normal;
	}

	li#first ul li a:hover {
		background: white;
		color: black;
		text-decoration: underline;
	}
			
	li#first ul {
		display: none;
		border-top: 1px solid #404040;
	}
	</style>
	
	
	
	
	
	
	
	
	
	
</head>
<body>
<div id="container">
	
	
	
		<?php echo $this->Session->flash(); ?>
		<?php if($this->Session->check('zalogowany')):  '<div id="top-welcome">Witaj, <b>'.$this->Session->read('zalogowany.imie').'</b> '.$html->link('Edytuj profil', array('controller' => 'profiles', 'action' => 'edit')).'|'.$html->link('Mój profil', array('controller' => 'profiles', 'action' => 'profile')).'|'.$html->link('Wyloguj', array('controller' => 'users', 'action' => 'logout')).'</div>'; endif;?>
		<?php echo $content_for_layout; ?>
	</div>
	<div id="footer">Web Masters &copy; 2011</div>
</body>
</html> 