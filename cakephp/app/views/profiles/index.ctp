<!-- File: /app/views/profiles/index.ctp -->

<h1>Profile użytkowników</h1>
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
		<td><?php echo $profile['Profile']['miasto']; ?></td>
		<td>
			<?php echo $html->link('Pokaz', array('controller' => 'profiles', 'action' => 'show', $profile['Profile']['id'])); ?>
		</td>
	</tr>
	<?php endforeach; ?>

</table>

<?php echo $html->link('Dodaj profil', array('controller' => 'profiles', 'action' => 'add')); ?>
