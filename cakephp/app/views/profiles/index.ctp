<!-- File: /app/views/profiles/index.ctp -->

<h1>Profile użytkowników</h1>
<table class="list">
	<tr>
		<th>Id</th>
		<th>Imię</th>
		<th>Nazwisko</th>
		<th>Miejscowość</th>
		<th></th>
	</tr>

	<?php foreach ($profiles as $profile): ?>
	<?php if($profile['Profile']['id'] != $this->Session->read('zalogowany.id')): ?>
	<tr>
		<td><?php echo $profile['Profile']['id']; ?></td>
		<td><?php echo $profile['Profile']['imie']; ?></td>
		<td><?php echo $profile['Profile']['nazwisko']; ?></td>
		<td><?php echo $profile['Profile']['miejscowosc']; ?></td>
		<td>
			<?php echo $html->link('Pokaż', array('controller' => 'profiles', 'action' => 'show', $profile['Profile']['id'])); ?>
			<?php echo $html->link('Dodaj do znajomych', array('controller' => 'profiles', 'action' => 'addFriend', $profile['Profile']['id'])); ?>
		</td>
	</tr>
	<?php endif; ?>
	<?php endforeach; ?>
</table>