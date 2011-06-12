<?php
class VideoTracksController extends AppController {

	var $name = 'VideoTracks';
	var $helpers = array('Html', 'Form', 'Javascript');

	function index() {
		$this->VideoTrack->recursive = 0;
		$this->set('videoTracks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid VideoTrack.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('videoTrack', $this->VideoTrack->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->VideoTrack->create();
			if ($this->VideoTrack->save($this->data)) {
				$this->Session->setFlash(__('The VideoTrack has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The VideoTrack could not be saved. Please, try again.', true));
			}
		}
		$videoAlbums = $this->VideoTrack->VideoAlbum->find('list');
		$this->set(compact('videoAlbums'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid VideoTrack', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->VideoTrack->save($this->data)) {
				$this->Session->setFlash(__('The VideoTrack has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The VideoTrack could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->VideoTrack->read(null, $id);
		}
		$videoAlbums = $this->VideoTrack->VideoAlbum->find('list');
		$this->set(compact('videoAlbums'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for VideoTrack', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->VideoTrack->del($id)) {
			$this->Session->setFlash(__('VideoTrack deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>