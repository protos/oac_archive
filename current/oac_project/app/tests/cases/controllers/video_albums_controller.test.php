<?php 
/* SVN FILE: $Id$ */
/* VideoAlbumsController Test cases generated on: 2009-06-24 16:06:07 : 1245853747*/
App::import('Controller', 'VideoAlbums');

class TestVideoAlbums extends VideoAlbumsController {
	var $autoRender = false;
}

class VideoAlbumsControllerTest extends CakeTestCase {
	var $VideoAlbums = null;

	function startTest() {
		$this->VideoAlbums = new TestVideoAlbums();
		$this->VideoAlbums->constructClasses();
	}

	function testVideoAlbumsControllerInstance() {
		$this->assertTrue(is_a($this->VideoAlbums, 'VideoAlbumsController'));
	}

	function endTest() {
		unset($this->VideoAlbums);
	}
}
?>