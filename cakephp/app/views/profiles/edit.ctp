<!-- File: /app/views/profiles/edit.ctp -->
	
<h1>Edycja profilu: <span><?php echo $this->Session->read('zalogowany.imie').' '.$this->Session->read('zalogowany.nazwisko') ?></span></h1>

<?php
	echo $this->Form->create('Profile', array('action' => 'edit', 'enctype' => 'multipart/form-data'));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->input('Profile.imie', array('label' => 'Imię:'));
	echo $this->Form->input('Profile.nazwisko', array('label' => 'Nazwisko:'));
	echo $this->Form->input('Profile.pseudonim', array('label' => 'Pseudonim:'));
	echo $this->Form->input('Profile.miejscowosc', array('label' => 'Miejscowość:'));
	echo $this->Form->input('Profile.rok_urodzenia', array('label' => 'Rok urodzenia:'));
	echo $this->Form->input('Profile.plec', array('options' => array(
		'kobieta'=>'kobieta',
		'mężczyzna'=>'mężczyzna'
		), 'label' => 'Płeć:'));
	echo $this->Form->input('Profile.gg', array('label' => 'Gadu-Gadu:'));
	echo '<label>Zdjęcie:</label>'.$this->Form->file('Profile.profile'); // profile is the lower case model-name
	echo $this->Form->end('Zapisz zmiany');
?>
