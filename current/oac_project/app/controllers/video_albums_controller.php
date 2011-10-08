<?php
class VideoAlbumsController extends AppController {

	var $name = 'VideoAlbums';
	var $helpers = array('Html', 'Form', 'Javascript');

	function index() {
		$this->VideoAlbum->recursive = -1;
		$this->set('videoAlbums', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid VideoAlbum.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('videoAlbum', $this->VideoAlbum->read(null, $id));
	}

    function viewSongs($id) {
        if(isset($id) && $id != null) {
            $opts = array(
                'conditions' => array(
                'video_album_id' => $id
            ));
            $videoTracks = $this->VideoAlbum->VideoTrack->find('all', $opts);
            $this->set('videoTracks', $videoTracks);
        }
	}

	function add() {
		if (!empty($this->data)) {
			$this->VideoAlbum->create();
			if ($this->VideoAlbum->save($this->data)) {
				$this->Session->setFlash(__('The VideoAlbum has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The VideoAlbum could not be saved. Please, try again.', true));
			}
		}
		$videoTypes = $this->VideoAlbum->VideoType->find('list');
		$audioAlbums = $this->VideoAlbum->AudioAlbum->find('list');
		$loginLevels = $this->VideoAlbum->LoginLevel->find('list');
		$compilers = $this->VideoAlbum->Compiler->find('list');
		$this->set(compact('videoTypes', 'audioAlbums', 'loginLevels', 'compilers'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid VideoAlbum', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->VideoAlbum->save($this->data)) {
				$this->Session->setFlash(__('The VideoAlbum has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The VideoAlbum could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->VideoAlbum->read(null, $id);
		}
		$videoTypes = $this->VideoAlbum->VideoType->find('list');
		$audioAlbums = $this->VideoAlbum->AudioAlbum->find('list');
		$loginLevels = $this->VideoAlbum->LoginLevel->find('list');
		$compilers = $this->VideoAlbum->Compiler->find('list');
		$this->set(compact('videoTypes','audioAlbums','loginLevels','compilers'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for VideoAlbum', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->VideoAlbum->del($id)) {
			$this->Session->setFlash(__('VideoAlbum deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>