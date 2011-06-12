<?php
class AudioTracksController extends AppController {

	var $name = 'AudioTracks';
	var $helpers = array('Html', 'Form', 'Javascript');

	function index() {
		$this->AudioTrack->recursive = 0;
		$this->set('audioTracks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid AudioTrack.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('audioTrack', $this->AudioTrack->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AudioTrack->create();
			if ($this->AudioTrack->save($this->data)) {
				$this->Session->setFlash(__('The AudioTrack has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AudioTrack could not be saved. Please, try again.', true));
			}
		}
		$audioAlbums = $this->AudioTrack->AudioAlbum->find('list');
		$this->set(compact('audioAlbums'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid AudioTrack', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->AudioTrack->save($this->data)) {
				$this->Session->setFlash(__('The AudioTrack has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AudioTrack could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AudioTrack->read(null, $id);
		}
		$audioAlbums = $this->AudioTrack->AudioAlbum->find('list');
		$this->set(compact('audioAlbums'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for AudioTrack', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AudioTrack->del($id)) {
			$this->Session->setFlash(__('AudioTrack deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>