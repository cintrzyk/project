<?php echo $this->Html->docType(); ?> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>BeInTouch - serwis społecznościowy</title>
	<?php echo $this->Html->css('main'); ?>
	<?php echo $this->Html->script('jquery-1.4.4.min'); ?>
	<?php echo $this->Html->script('jquery.gmap-1.1.0-min'); ?>
	<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAAIS_dzTcF66Tlpp5lagb-IxQQPMc1US4WhDrj9TsC7G-6SsMJcRQbUf0gCzuDR8GP3qjALMe0oT1KMg" type="text/javascript"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			if ($('#flashMessage')) {
				setTimeout(function() {
					$('#flashMessage').fadeTo('slow', 0, function() {
						$(this).slideUp('slow');
					});
				}, 4000);
			}
			
			$('#first').mouseover(function() {
				$('#first ul').show();
			}).mouseout(function() {
				$('#first ul').hide();
				});
			$('#ProfileZapytanie').click(function() {
				$this.attr('value','');
			});
		});
	</script>
	
</head>
<body>
	<div id="logo">BeInTouch</div>
	<div id="container">
	<?php if($this->Session->check('zalogowany')): ?>
	<div id="top-welcome">
		<ul>
			<li id="first"><?php echo $html->link('Mój profil', array('controller' => 'profiles', 'action' => 'profile'))?>
				<ul>
					<li><?php echo $html->link('Pokaż', array('controller' => 'profiles', 'action' => 'profile'))?></li>
					<li><?php echo $html->link('Edytuj', array('controller' => 'profiles', 'action' => 'edit')); ?></li>
					<li><?php echo $html->link('Usuń zdjęcie', array('controller' => 'profiles', 'action' => 'deletePhoto'), null, 'Czy napewno usunąć zdjęcie?'); ?></li>
					<li><?php echo $html->link('Wyloguj', array('controller' => 'users', 'action' => 'logout')); ?></li>
				</ul>
			</li>
		</ul>
	</div>
	<?php endif; ?>
		<?php echo $this->Session->flash(); ?>
		<?php echo $content_for_layout; ?>
	</div>
	<div id="footer">Web Masters &copy; 2011</div>
	
</body>
</html> 