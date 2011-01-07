<?php
    echo $session->flash('auth');
    echo $form->create('Post', array('controller' => 'users', 'action' => 'login'));
    echo $form->input('username');
    echo $form->input('password');
    echo $form->end('Login');
?>