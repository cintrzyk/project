<?php

class UsersController extends AppController {

    var $name = 'Users';
	var $components = array('Session');
	var $helpers = array('Html','Form');
    //var $components = array('Auth'); // Not necessary if declared in your app controller

	var $userProfile = array('controller' => 'profiles', 'action' => 'profile');
	
	function index() {
		
		if($this->Session->check('zalogowany')) {
			$this->redirect($this->userProfile);
		}
		else {
			$this->redirect(array('action' => 'login'));
		}
	}
	
    function login() {
		//print_r($this->Session->read());
			// po wypelnieniu formularza logowania
		   if (empty($this->data)) 
			   { // pokaz formularz logowania
			   }
		   else
			   { // proba zalogowania
			   // $this->data['User']['haslo'] = md5($this->data['User']['passwd']); // szyfrowanie hasla do porownania tego z baza
			   // $this->User->recursive = 1;
			   
			   // sprawdzamy czy istnieje taki user oraz czy jego konto jest aktywne, czyli active = 1
			   $user = $this->User->find("User.login='".$this->data['User']['user']."' AND User.haslo='".$this->data['User']['passwd']."'");
			   if (!empty($user)) {
				   // jezeli istnieje taki user zaladuj do jego sesji jego dane
				   $this->Session->write("zalogowany", $user['Profile']);
				   $this->Session->setFlash('Zalogowano');
				   $this->redirect($this->userProfile);
				   }
			   else {
				   $this->Session->setFlash("Niepoprawne login lub haslo."); 			   
				   $this->redirect('/users/login/');
				   }
			   }    
	}

	function logout() {
		$this->Session->delete('zalogowany');
		$this->Session->setFlash('Wylogowano');
		$this->redirect('/users/');
	}
}
 ?>