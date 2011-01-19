<!-- File: /app/views/messages/send.ctp -->

<h1>Szczegóły wiadomości</h1>
<table class="messagesList">
	<tr>
		<th>Autor:</th>
		<th>Tytuł:</th>
		<th>Przesłano:</th>
	</tr>

	<tr>
		<td style="width: 28%"><?php echo $html->link($message['Profile']['imie'].' '.$message['Profile']['nazwisko'], array('controller' => 'profiles', 'action' => 'show', $message['Profile']['id']), array('title' => 'Przejdź do profilu')); ?></td>
		<td><?php echo $message['Message']['tytul']; ?></td>
		<td style="width: 25%">
			<?php echo $message['Message']['created'].' &nbsp;['.$html->link('usuń', array('controller' => 'messages', 'action' => 'delete', $message['Message']['id']), null, 'Jesteś pewien?').']'; ?>
		</td>
	</tr>
	<tr>
		<td colspan="3" class="messageTresc">
			<h3>Treść wiadomości:</h3>
			<p><?php echo $message['Message']['tresc']; ?></p>
			<div>
				<?php echo $html->link('Odpowiedz', array('controller' => 'messages', 'action' => 'send', $message['Profile']['id'])).' | '.$html->link('Usuń', array('controller' => 'messages', 'action' => 'delete', $message['Message']['id']), null, 'Jesteś pewien?'); ?>
			</div>
		</td>
	</tr>
</table>
<?php echo $html->link('Skrzynka odbiorcza', array('controller' => 'messages', 'action' => 'index')); ?>
