<!-- File: /app/views/messages/send.ctp -->

<h1>Wiadomość do: <span><?php echo $this->Session->read('odbiorca_imie').' '.$this->Session->read('odbiorca_nazwisko'); ?></span></h1>
<?php
	echo $this->Form->create('Message', array('action' => 'send', 'class' => 'messageForm'));
	echo $this->Form->input('Message.id', array('type' => 'hidden'));
	echo $this->Form->input('Message.tytul', array('label' => 'Tytuł wiadomości:'));
	echo $this->Form->input('Message.tresc', array('rows' => '15', 'cols' => '80', 'label' => 'Treść wiadomości:'));

	echo $this->Form->end('Wyślij wiadomość');
?>