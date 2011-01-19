<?php

class MessagesController extends AppController {

    var $name = 'Messages';
	var $components = array('Session');
	var $helpers = array('Html','Form');
	
	function index() {
		$ile = $this->Message->find('count', array(
			  'conditions' => array('Message.status =' => 'new', 'odbiorca_id =' => $this->Session->read('zalogowany.id'))
		   ));
		//$this->Session->setFlash($ile);

		$allMessages = $this->Message->findAllByOdbiorcaId($this->Session->read('zalogowany.id'));
		if (!empty($allMessages)) {
			$this->set('messages', $allMessages);
		}
	}
	
	// wysłanie wiadomości
	function send($id = null) {
		if ($id != null) {
			$this->Session->write('odbiorca', $id);
			$this->Message->Profile->id = $id;
			$this->Session->write('odbiorca_imie', $this->Message->Profile->field('imie'));
			$this->Session->write('odbiorca_nazwisko', $this->Message->Profile->field('nazwisko'));
		}
		print_r($this->data);
		if (!empty($this->data)) {
				$this->data['Message']['odbiorca_id'] = $this->Session->read('odbiorca');
				$this->data['Message']['profile_id'] = $this->Session->read('zalogowany.id');
				if ($this->Message->save($this->data)) {
					$this->Session->delete('odbiorca');
					$this->Session->delete('odbiorca.imie');
					$this->Session->delete('odbiorca.nazwisko');
					$this->Session->setFlash('Wiadomość została pomyślnie wysłana.');
					$this->redirect(array('controller' => 'profiles', 'action' => 'profile'));
				}
			}
	}
	
	function delete($id) {
		$this->Message->delete($id);
		$this->Session->setFlash('Wiadomość została usunięta.');
		$this->redirect(array('action'=>'index'));
	}
	
	function show($id = null) {
		$this->Message->id = $id;
		$this->Message->set('status', 'read');
		$this->Message->save();
		$this->set('message', $this->Message->read());
	}

}

 ?>