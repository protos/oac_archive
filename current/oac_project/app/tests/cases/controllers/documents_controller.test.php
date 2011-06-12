<?php 
/* SVN FILE: $Id$ */
/* DocumentsController Test cases generated on: 2009-06-24 16:06:23 : 1245853643*/
App::import('Controller', 'Documents');

class TestDocuments extends DocumentsController {
	var $autoRender = false;
}

class DocumentsControllerTest extends CakeTestCase {
	var $Documents = null;

	function startTest() {
		$this->Documents = new TestDocuments();
		$this->Documents->constructClasses();
	}

	function testDocumentsControllerInstance() {
		$this->assertTrue(is_a($this->Documents, 'DocumentsController'));
	}

	function endTest() {
		unset($this->Documents);
	}
}
?>