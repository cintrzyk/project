<?php

class UsersController extends AppController {

    var $name = 'Users';    
    //var $components = array('Auth'); // Not necessary if declared in your app controller
 
    function beforeFilter() {
        parent::beforeFilter();
        //$this->Auth->loginRedirect = array('controller' => 'posts', 'action' => 'index');
		//$this->Auth->allow('*');
    }

    function login() {
    }

    function logout() {
		//$this->Session->setFlash('Good-Bye');
        $this->redirect($this->Auth->logout());
    }
}
 ?>