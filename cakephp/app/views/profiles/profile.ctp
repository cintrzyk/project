<!-- File: /app/views/profiles/profile.ctp -->

<h1>Mój profil: <span><?php echo $profile['Profile']['imie'].' '.$profile['Profile']['nazwisko'] ?></span></h1>

<div class="info">
	<div class="dane">
		<p>Miejscowość: <span><?php echo $profile['Profile']['miejscowosc']?></span></p>
		<p>Rok urodzenia: <span><?php echo $profile['Profile']['rok_urodzenia']?></span></p>
		<p>Płeć: <span><?php echo $profile['Profile']['plec']?></span></p>
		<p>Gadu-Gadu: <span><?php echo $profile['Profile']['gg']?></span></p>
	</div>
	<div class="dane">
		<p>Imię: <span><?php echo $profile['Profile']['imie']?></span></p>
		<p>Nazwisko: <span><?php echo $profile['Profile']['nazwisko']?></span></p>
		<p>Pseudonim: <span><?php echo $profile['Profile']['pseudonim']?></span></p>
	</div>
</div>

<?php echo $html->link('Pozostałe profile', array('controller' => 'profiles', 'action' => 'index')) ?>
