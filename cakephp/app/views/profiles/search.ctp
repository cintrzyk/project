<!-- File: /app/views/profiles/search.ctp -->

<h1>Wyniki wyszukiwania: <span><i><?php echo $this->Session->read('zapytanie'); ?></i></span></h1>

<?php if(!empty($profiles)) { ?>
<div style="margin: 0 5px 8px; color: rgb(110,110,110); font: 12px Arial">Wyników: <?php echo sizeof($profiles); ?></div>
<table class="list">
	<tr>
		<th>Id</th>
		<th>Imię</th>
		<th>Nazwisko</th>
		<th>Miasto</th>
		<th></th>
	</tr>

	<?php foreach ($profiles as $profile): ?>
	
	<tr>
		<td><?php echo $profile['Profile']['id']; ?></td>
		<td><?php echo $profile['Profile']['imie']; ?></td>
		<td><?php echo $profile['Profile']['nazwisko']; ?></td>
		<td><?php echo $profile['Profile']['miejscowosc']; ?></td>
		<td>
			<?php echo $html->link('Pokaż profil', array('controller' => 'profiles', 'action' => 'show', $profile['Profile']['id'])); ?>
			<?php if($profile['Profile']['id'] != $this->Session->read('zalogowany.id')): echo $html->link('Dodaj do znajomych', array('controller' => 'profiles', 'action' => 'addFriend', $profile['Profile']['id'])); endif; ?>
		</td>
	</tr>
	
	<?php endforeach; ?>

</table>

<?php } else { ?>
Wyników: 0
<?php } ?>