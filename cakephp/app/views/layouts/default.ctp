<?php echo $this->Html->docType(); ?> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>BeInTouch - serwis społecznościowy</title>
	<?php echo $this->Html->css('main'); ?>
	<?php echo $this->Html->script('jquery-1.4.4.min'); ?>
	<?php echo $this->Html->script('jquery.gmap-1.1.0-min'); ?>
	<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAAIS_dzTcF66Tlpp5lagb-IxQQPMc1US4WhDrj9TsC7G-6SsMJcRQbUf0gCzuDR8GP3qjALMe0oT1KMg" type="text/javascript"></script>
	
	
	
	
	
	
	
	
	
	
	
	
</head>
<body>
<?php echo $this->Session->flash(); ?>
<?php echo $content_for_layout; ?>
</body>
</html> 