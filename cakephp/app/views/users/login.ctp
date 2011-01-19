<h1>Panel: <span>Logowanie</span></h1>

<?php
    echo $form->create('User', array('action' => 'login'));
    echo $form->input('user', array('label' => 'użytkownik'));
    echo $form->input('passwd', array('label' => 'hasło'));
    echo $form->end('Zaloguj');
?>

<?php echo $html->link('Zarejestruj się', array('action' => 'register')); ?>