<!-- File: /app/views/profiles/search.ctp -->

<h1>Wyniki wyszukiwania: <span><i><?php echo $this->Session->read('zapytanie'); ?></i></span></h1>

<?php if(!empty($profiles)) { ?>
Wyników: <?php echo sizeof($profiles); ?>
<table>
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
			<?php echo $html->link('Pokaz', array('controller' => 'profiles', 'action' => 'show', $profile['Profile']['id'])); ?>
			<?php echo $html->link('Dodaj do znajomych', array('controller' => 'profiles', 'action' => 'addFriend', $profile['Profile']['id'])); ?>
		</td>
	</tr>
	
	<?php endforeach; ?>

</table>

<?php } else { ?>
Wyników: 0
<?php } ?>