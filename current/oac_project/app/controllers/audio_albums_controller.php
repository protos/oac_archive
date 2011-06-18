<?php
class AudioAlbumsController extends AppController {

	var $name = 'AudioAlbums';
	var $helpers = array('Html', 'Form', 'Javascript');

	function index() {
//		$this->Session->setFlash(__('TEST', true));
		$this->AudioAlbum->recursive = 0;
		$this->set('audioAlbums', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid AudioAlbum.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('audioAlbum', $this->AudioAlbum->read(null, $id));
/*
         "SELECT count( * ) FROM `audio_albums` WHERE audio_album_type_id =1"
*/
	}

    function viewSongs($id) {
		// $this->Session->setFlash(__('Invalid A udioAlbum. ' . $id, true));

        if(isset($id) && $id != null) {
    		//$this->Session->setFlash(__('Invalid A udioA lbum. ' . $id, true));

            /*
            $albums = $this->AudioAlbum->find('first',
                array('conditions'=>array('AudioAlbum.id'=>$id)));
            $songs = $this->AudioAlbum->AudioTrack->find('all',
                array('conditions'=>array('AudioTrack.audio_album_id'=>$id)));
            // This returns variables to the view to use
            $this->set(compact('albums', 'songs'));
*/

            $opts = array(
                'conditions' => array(
                'audio_album_id' => $id
            ));
            $albumTracks = $this->AudioAlbum->AudioTrack->find('all', $opts);
            //$this->Session->setFlash(__('Invalid A udioA lbu.' . $albumTracks, true));
            $this->set('audioTracks', $albumTracks);
        }



        // $this->Session->setFlash(__('Invalid AudioTrack.' . $this->AudioTrack, true));

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

 //       $total_num_rows = count($this->AudioAlbum->find('count')); 
 //       print_r("sss : ". $total_num_rows);


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
