<!-- File: /app/views/profiles/profile.ctp -->

<h1>Mój profil: <span><?php echo $profile['Profile']['imie'].' '.$profile['Profile']['nazwisko'] ?></span></h1>

<div class="info">
	<div class="gravatar">
		<?php echo $this->Html->image('/attachments/photos/gravatar/' . $profile['Profile']['profile_file_path'], array('alt' => 'Gravatar', 'title' => 'Zobacz zdjęcie', 'id' => 'gravatar')); ?>
	</div>
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

<div id="content-middle" style="overflow: hidden; margin: 0 0 10px">
<h2 style="float: left">Znajdź znajomych:</h2>
<h2 style="float: right">Lista znajomych</h2>

<div id="friendList" style="width: 600px; height: 370px; overflow: auto; border: 1px solid black; padding: 10px; float: right; clear: right">
<?php if(!empty($friends)): ?>
	<table>
	<?php foreach ($friends as $friend): ?>
	<tr>
		<td style="width: 150px; padding: 1px;">
			<?php echo $this->Html->image('/attachments/photos/mini/' . $friend['profiles']['profile_file_path'], array('alt' => 'Gravatar', 'title' => 'Zobacz zdjęcie', 'id' => 'gravatar')); ?>
			
		</td>
		<td style="padding: 14px 17px;">
			<div class="friend">
				<?php echo $friend['profiles']['imie'].' '.$friend['profiles']['nazwisko']; ?>
			</div>
			<div class="city">
				<?php echo $friend['profiles']['miejscowosc']; ?>
			</div>
		<div style="margin: 7px 0; color: #d0d0d0">
			<?php echo $html->link('Pokaż profil', array('controller' => 'profiles', 'action' => 'show', $friend['profiles']['id'])).' | '.$html->link('Wyślij wiadomość', array('controller' => 'messages', 'action' => 'send', $friend['profiles']['id'])).' | '.$html->link('Usuń z mojej listy znajomych', array('action' => 'deleteFriend', $friend['profiles']['id']), null, 'Jesteś pewien?' ); ?>
		</div>
		</td>
	</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>


<?php
	echo $this->Form->create('Profile', array('action' => 'search', 'class' => 'search'));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->input('zapytanie', array('label' => '', 'value' => 'wpisz imię, nazwisko lub miejscowość'));
	echo $this->Form->end('Szukaj');
?>

<h2 style="float: left;">Tutaj mieszkam:</h2>
<div id="map" style="float: left; width: 320px; height: 260px; border: 1px solid black; clear: left"></div>
<script type="text/javascript">
	$("#map").gMap({
                  address: "<?php echo $profile['Profile']['miejscowosc']; ?>",
                  zoom: 10,
				  controls: ['GSmallMapControl']
				  });
</script>



</div>

<?php echo $html->link('Pozostałe profile', array('controller' => 'profiles', 'action' => 'index')) ?>

<?php if ($nieprzeczytane > 0): ?>
<div id="messageInfo">
		<p><b>Masz nową wiadomość w skrzynce.</b></p><?php echo $html->link('Odczytaj wiadomość', array('controller' => 'messages', 'action' => 'index')); ?>
</div>
<?php endif; ?>