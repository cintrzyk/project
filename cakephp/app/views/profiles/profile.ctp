<!-- File: /app/views/profiles/profile.ctp -->

<h1>Mój profil: <span><?php echo $profile['Profile']['imie'].' '.$profile['Profile']['nazwisko'] ?></span></h1>

<div class="info">
	<div class="dane">


	</div>
	<div class="dane">


	</div>
</div>

<?php echo $html->link('Pozostałe profile', array('controller' => 'profiles', 'action' => 'index')) ?>
