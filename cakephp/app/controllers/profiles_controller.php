<?php
class ProfilesController extends AppController {

	var $components = array('Session');
	var $helpers = array('Html', 'Form');
	var $name = 'Profiles';
	function index() {
		$this->set('profiles', $this->Profile->find('all'));
	}
	
	function profile() {
		//print_r($this->Session->read());
		$this->Profile->id = $this->Session->read('zalogowany.id');
		$this->set('profile', $this->Profile->read());
	}
	
	function add($dane = null) {
		if (!empty($dane)) {
			$this->Attachment->upload($dane['Profile']);
			$this->Profile->save($dane);
			$this->Session->setFlash('Profil został pomyślnie dodany');
			// $this->redirect(array('action' => 'index'));
		}
	}
	
}
?>
