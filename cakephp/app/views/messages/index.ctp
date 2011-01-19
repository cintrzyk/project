<!-- File: /app/views/messages/index.ctp -->

<h1>Skrzynka odbiorcza</h1>
<table class="messagesList">
	<tr>
		<th>Autor:</th>
		<th>Tytuł:</th>
		<th>Przesłano:</th>
	</tr>

	<?php if(!empty($messages)): ?>
	<?php foreach ($messages as $message): ?>
	<tr <?php if ($message['Message']['status'] == 'new'): echo 'class="new"'; endif; ?>>
		<td style="width: 28%"><?php echo $html->link($message['Profile']['imie'].' '.$message['Profile']['nazwisko'], array('controller' => 'profiles', 'action' => 'show', $message['Profile']['id']), array('title' => 'Przejdź do profilu')); ?></td>
		<td><?php echo $html->link($message['Message']['tytul'], array('controller' => 'messages', 'action' => 'show', $message['Message']['id'])); ?></td>
		<td style="width: 26%">
			<?php echo $message['Message']['created'].' &nbsp;['.$html->link('usuń', array('controller' => 'messages', 'action' => 'delete', $message['Message']['id']), null, 'Jesteś pewien?').']'; ?>
		</td>
	</tr>
	<?php endforeach; ?>
	<?php endif; ?>
</table>