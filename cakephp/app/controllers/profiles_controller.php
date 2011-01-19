<?php
class ProfilesController extends AppController {

	var $components = array('Session', 'Attachment' => array('default_col' => 'profile'));
	var $helpers = array('Html', 'Form');
	var $name = 'Profiles';
	function index() {
		$this->set('profiles', $this->Profile->find('all'));
	}
	
	function profile() {
		//print_r($this->Session->read());
		$this->Profile->id = $this->Session->read('zalogowany.id');
		$this->set('profile', $this->Profile->read());
		
		$ile = $this->Profile->Message->find('count', array(
			  'conditions' => array('Message.status =' => 'new', 'odbiorca_id =' => $this->Session->read('zalogowany.id'))
		   ));
		$this->set('nieprzeczytane', $ile);
		
		$znajomi = $this->Profile->Friend->findAllByProfileId($this->Session->read('zalogowany.id'));
		$znajomi = $this->Profile->query("SELECT * FROM profiles, friends WHERE (friends.profile_id=".$this->Session->read('zalogowany.id')." AND friends.friend_id=profiles.id) OR (friends.profile_id=profiles.id AND friends.friend_id=".$this->Session->read('zalogowany.id').")");
		if(!empty($znajomi)) {
			$this->set('friends', $znajomi); // $this->Profile->findAllById($znajomi['Friend']['friend_id'])
		}
	}
	
	function search() {
		$zapytanie = $this->data['Profile']['zapytanie'];
		$znalezione = $this->Profile->findAllByImie($zapytanie);
		if(empty($znalezione)) {
			$znalezione = $this->Profile->findAllByNazwisko($zapytanie);
			if(empty($znalezione)) {
				$znalezione = $this->Profile->findAllByMiejscowosc($zapytanie);
			}
		}
		$this->Session->write('zapytanie', $this->data['Profile']['zapytanie']);
		if (!empty($znalezione)) {
			$this->set('profiles', $znalezione);
		}
	}
	
	function addFriend($id = null) {
		$this->data['Friend']['friend_id'] = $id;
		$this->data['Friend']['profile_id'] = $this->Session->read('zalogowany.id');
		$this->Profile->Friend->save($this->data);
		$this->Session->setFlash('Masz nowego znajomego.');
		$this->redirect(array('action' => 'profile'));
	}
	
	function deleteFriend($id = null) {
		$dousuniecia = $this->Profile->query("SELECT * FROM friends WHERE (friends.profile_id=".$this->Session->read('zalogowany.id')." AND friends.friend_id=".$id.") OR (friends.profile_id=".$id." AND friends.friend_id=".$this->Session->read('zalogowany.id').")");
		//$dousuniecia = $this->Profile->Friend->findByProfileId($id);
		//$this->Session->write('test',$dousuniecia);
		$this->Session->setFlash('Znajomy został pomyślnie usunięty.');
		$this->Profile->Friend->delete($dousuniecia[0]['friends']['id']);
		
		$this->redirect(array('action' => 'profile'));
	}
	
	function edit() {
		
		$this->Profile->id = $this->Session->read('zalogowany.id');
		
		if (empty($this->data)) {
			$this->data = $this->Profile->read();
		} else {
			$this->Attachment->upload($this->data['Profile']);
			$this->Profile->save($this->data);
			$this->Session->setFlash('Profil został zaktualizowany.');
			$this->redirect(array('action' => 'profile'));
		}
	}
	
	function show($id = null) {
		$this->Profile->id = $id;
		//$this->Profile->id = $this->Session->read('zalogowany.User.id');
		$this->set('profile', $this->Profile->read());
		
		$znajomi = $this->Profile->query("SELECT * FROM profiles, friends where (friends.profile_id=".$id." AND friends.friend_id=profiles.id) OR (friends.profile_id=profiles.id AND friends.friend_id=".$id.")");
		$this->set('friends', $znajomi); // $this->Profile->findAllById($znajomi['Friend']['friend_id'])
	}
	
	function add($dane = null) {
		if (!empty($dane)) {
			$this->Attachment->upload($dane['Profile']);
			$this->Profile->save($dane);
			$this->Session->setFlash('Profil został pomyślnie dodany');
			// $this->redirect(array('action' => 'index'));
		}
	}
	
	function deletePhoto() {
		$this->Profile->id = $this->Session->read('zalogowany.id');
		$this->Profile->set('profile_file_path', 'gravatar.jpg');
		if($this->Profile->save()) {
			$this->Session->setFlash('Zdjęcie zostało usunięte.');
			$this->redirect(array('action' => 'profile'));
		}
	}
	
}
?>