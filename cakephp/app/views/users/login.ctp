<?php
    echo $form->create('User', array('action' => 'login'));
    echo $form->input('user', array('label' => 'użytkownik'));
    echo $form->input('passwd', array('label' => 'hasło'));
    echo $form->end('Zaloguj');
?>