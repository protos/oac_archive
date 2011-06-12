<?php
class DocumentsController extends AppController {

	var $name = 'Documents';
	var $helpers = array('Html', 'Form', 'Javascript');

	function index() {
		$this->Document->recursive = 0;
		$this->set('documents', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Document.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('document', $this->Document->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Document->create();
			if ($this->Document->save($this->data)) {
				$this->Session->setFlash(__('The Document has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Document could not be saved. Please, try again.', true));
			}
		}
		$docTypes = $this->Document->DocType->find('list');
		$docLanguages = $this->Document->DocLanguage->find('list');
		$compilers = $this->Document->Compiler->find('list');
		$videoAlbums = $this->Document->VideoAlbum->find('list');
		$audioAlbums = $this->Document->AudioAlbum->find('list');
		$loginLevels = $this->Document->LoginLevel->find('list');
		$this->set(compact('docTypes', 'docLanguages', 'compilers', 'videoAlbums', 'audioAlbums', 'loginLevels'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Document', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Document->save($this->data)) {
				$this->Session->setFlash(__('The Document has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Document could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Document->read(null, $id);
		}
		$docTypes = $this->Document->DocType->find('list');
		$docLanguages = $this->Document->DocLanguage->find('list');
		$compilers = $this->Document->Compiler->find('list');
		$videoAlbums = $this->Document->VideoAlbum->find('list');
		$audioAlbums = $this->Document->AudioAlbum->find('list');
		$loginLevels = $this->Document->LoginLevel->find('list');
		$this->set(compact('docTypes','docLanguages','compilers','videoAlbums','audioAlbums','loginLevels'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Document', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Document->del($id)) {
			$this->Session->setFlash(__('Document deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>