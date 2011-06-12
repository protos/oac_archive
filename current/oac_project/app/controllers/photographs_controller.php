<?php
class PhotographsController extends AppController {

	var $name = 'Photographs';
	var $helpers = array('Html', 'Form', 'Javascript');

	function index() {
		$this->Photograph->recursive = 0;
		$this->set('photographs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Photograph.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('photograph', $this->Photograph->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Photograph->create();
			if ($this->Photograph->save($this->data)) {
				$this->Session->setFlash(__('The Photograph has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Photograph could not be saved. Please, try again.', true));
			}
		}
		$photoTypes = $this->Photograph->PhotoType->find('list');
		$audioAlbums = $this->Photograph->AudioAlbum->find('list');
		$compilers = $this->Photograph->Compiler->find('list');
		$loginLevels = $this->Photograph->LoginLevel->find('list');
		$documents = $this->Photograph->Document->find('list');
		$videoAlbums = $this->Photograph->VideoAlbum->find('list');
		$this->set(compact('photoTypes', 'audioAlbums', 'compilers', 'loginLevels', 'documents', 'videoAlbums'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Photograph', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Photograph->save($this->data)) {
				$this->Session->setFlash(__('The Photograph has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Photograph could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Photograph->read(null, $id);
		}
		$photoTypes = $this->Photograph->PhotoType->find('list');
		$audioAlbums = $this->Photograph->AudioAlbum->find('list');
		$compilers = $this->Photograph->Compiler->find('list');
		$loginLevels = $this->Photograph->LoginLevel->find('list');
		$documents = $this->Photograph->Document->find('list');
		$videoAlbums = $this->Photograph->VideoAlbum->find('list');
		$this->set(compact('photoTypes','audioAlbums','compilers','loginLevels','documents','videoAlbums'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Photograph', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Photograph->del($id)) {
			$this->Session->setFlash(__('Photograph deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>