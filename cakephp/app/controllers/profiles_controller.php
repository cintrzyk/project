<?php
class ProfilesController extends AppController {

	var $components = array('Session', 'Attachment' => array('default_col' => 'profile'));
	var $helpers = array('Html', 'Form');
	var $name = 'Profiles';
	function index() {
		$this->set('profiles', $this->Profile->find('all'));
	}

	function show($id = null) {
		$this->Profile->id = $id;
		$this->set('profile', $this->Profile->read());
	}
	
	function add() {
		if (!empty($this->data)) {
			$this->Attachment->upload($this->data['Profile']);
			$this->Profile->save($this->data);
				$this->Session->setFlash('Profil został pomyślnie dodany');
				$this->redirect(array('action' => 'index'));
		}
	}
	
}
?>