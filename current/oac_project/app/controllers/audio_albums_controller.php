<?php
class AudioAlbumsController extends AppController {

	var $name = 'AudioAlbums';
	var $helpers = array('Html', 'Form', 'Javascript');

	function index() {
		$this->AudioAlbum->recursive = 0;
		$this->set('audioAlbums', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid AudioAlbum.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('audioAlbum', $this->AudioAlbum->read(null, $id));
	}

    function viewSongs($id) {
        if(isset($id) && $id != null) {
            $opts = array(
                'conditions' => array(
                'audio_album_id' => $id
            ));
            $albumTracks = $this->AudioAlbum->AudioTrack->find('all', $opts);
            $this->set('audioTracks', $albumTracks);
        }
	}

	function add() {
		if (!empty($this->data)) {
			$this->AudioAlbum->create();
			if ($this->AudioAlbum->save($this->data)) {
				$this->Session->setFlash(__('The AudioAlbum has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AudioAlbum could not be saved. Please, try again.', true));
			}
		}

		$audioAlbumTypes = $this->AudioAlbum->AudioAlbumType->find('list');
		$loginLevels = $this->AudioAlbum->LoginLevel->find('list');
		$compilers = $this->AudioAlbum->Compiler->find('list');
		$this->set(compact('audioAlbumTypes', 'loginLevels', 'compilers'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid AudioAlbum', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->AudioAlbum->save($this->data)) {
				$this->Session->setFlash(__('The AudioAlbum has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AudioAlbum could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AudioAlbum->read(null, $id);
		}
		$audioAlbumTypes = $this->AudioAlbum->AudioAlbumType->find('list');
		$loginLevels = $this->AudioAlbum->LoginLevel->find('list');
		$compilers = $this->AudioAlbum->Compiler->find('list');
		$this->set(compact('audioAlbumTypes','loginLevels','compilers'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for AudioAlbum', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AudioAlbum->del($id)) {
			$this->Session->setFlash(__('AudioAlbum deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}
}
?>
