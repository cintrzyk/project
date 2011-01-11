<!-- File: /app/views/users/register.ctp -->

<h1>Panel: <span>Rejestracja</span></h1>
<?php
	echo $this->Form->create('User', array('action' => 'register', 'enctype' => 'multipart/form-data'));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->input('login', array('label' => 'Użytkownik:'));
    echo $this->Form->input('haslo', array('label' => 'Hasło:', 'type' => 'password'));
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
	// echo '<label>Zdjęcie:</label>'.$this->Form->file('Profile.profile'); // profile is the lower case model-name
	echo $this->Form->end('OK');
?>

<?php echo $html->link('Powrót', array('action' => 'index')); ?>
