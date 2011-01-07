<!-- File: /app/views/profiles/add.ctp -->

<h1>Dodaj nowy profil</h1>
<?php
	echo $this->Form->create('Profile', array('action' => 'add', 'enctype' => 'multipart/form-data'));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->input('imie');
	echo $this->Form->input('nazwisko');
	echo $this->Form->input('pseudonim');
	echo $this->Form->input('miasto');
	echo $this->Form->input('rok_urodzenia');
	
	echo $this->Form->file('profile'); // profile is the lower case model-name
	echo $this->Form->end('Dodaj');
?>

<p><?php echo $html->link('Wszystkie profile', array('controller' => 'profiles', 'action' => 'index')) ?></p>