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
	
	function add($dane = null) {
		if (!empty($dane)) {
			$this->Attachment->upload($dane['Profile']);
			$this->Profile->save($dane);
				$this->Session->setFlash('Profil został pomyślnie dodany');
				//$this->redirect(array('action' => 'index'));
		}
	}
	
	function deleteFriend($id = null) {
		$dousuniecia = $this->Profile->query("SELECT * FROM friends WHERE (friends.profile_id=".$this->Session->read('zalogowany.id')." AND friends.friend_id=".$id.") OR (friends.profile_id=".$id." AND friends.friend_id=".$this->Session->read('zalogowany.id').")");
		//$dousuniecia = $this->Profile->Friend->findByProfileId($id);
		//$this->Session->write('test',$dousuniecia);
		$this->Session->setFlash('Znajomy został pomyślnie usunięty.');
		$this->Profile->Friend->delete($dousuniecia[0]['friends']['id']);
		
		$this->redirect(array('action' => 'profile'));
	}
	
	function edit($id = null) {
		if ($id == null) {
			$this->Profile->id = $this->Session->read('zalogowany.id');
		}
		if (empty($this->data)) {
			$this->data = $this->Profile->read();
		} else {
			$this->Attachment->upload($this->data['Profile']);
			$this->Profile->save($this->data);
			$this->Session->setFlash('Profil został zaktualizowany.');
			$this->redirect(array('action' => 'profile'));
		}
	}	
	
	
}
?>
