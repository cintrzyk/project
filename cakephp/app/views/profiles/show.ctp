<!-- File: /app/views/profiles/show.ctp -->

<h1>Profil: <?php echo $profile['Profile']['imie'].' '.$profile['Profile']['nazwisko'] ?></h1>

<div style="overflow: hidden; width: 480px;">
	<?php echo $this->Html->image('/attachments/photos/med/' . $profile['Profile']['profile_file_path'], array('alt' => 'Gravatar', 'title' => 'Zobacz zdjêcie', 'id' => 'gravatar')); ?>
	<div style="float: left;">
		<p>Pseudonim: <?php echo $profile['Profile']['pseudonim']?></p>
		<p>Miasto: <?php echo $profile['Profile']['miejscowosc']?></p>
		<p>Rok urodzenia: <?php echo $profile['Profile']['rok_urodzenia']?></p>
	</div>
</div>

<p><?php echo $html->link('Pozostale profile', array('controller' => 'profiles', 'action' => 'index')) ?></p>