<?php 
/* SVN FILE: $Id$ */
/* PhotographsController Test cases generated on: 2009-06-24 16:06:41 : 1245853721*/
App::import('Controller', 'Photographs');

class TestPhotographs extends PhotographsController {
	var $autoRender = false;
}

class PhotographsControllerTest extends CakeTestCase {
	var $Photographs = null;

	function startTest() {
		$this->Photographs = new TestPhotographs();
		$this->Photographs->constructClasses();
	}

	function testPhotographsControllerInstance() {
		$this->assertTrue(is_a($this->Photographs, 'PhotographsController'));
	}

	function endTest() {
		unset($this->Photographs);
	}
}
?>