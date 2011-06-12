<?php 
/* SVN FILE: $Id$ */
/* MapsController Test cases generated on: 2009-06-24 16:06:51 : 1245853671*/
App::import('Controller', 'Maps');

class TestMaps extends MapsController {
	var $autoRender = false;
}

class MapsControllerTest extends CakeTestCase {
	var $Maps = null;

	function startTest() {
		$this->Maps = new TestMaps();
		$this->Maps->constructClasses();
	}

	function testMapsControllerInstance() {
		$this->assertTrue(is_a($this->Maps, 'MapsController'));
	}

	function endTest() {
		unset($this->Maps);
	}
}
?>