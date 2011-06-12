<?php 
/* SVN FILE: $Id$ */
/* AudioAlbumsController Test cases generated on: 2009-06-24 16:06:21 : 1245853581*/
App::import('Controller', 'AudioAlbums');

class TestAudioAlbums extends AudioAlbumsController {
	var $autoRender = false;
}

class AudioAlbumsControllerTest extends CakeTestCase {
	var $AudioAlbums = null;

	function startTest() {
		$this->AudioAlbums = new TestAudioAlbums();
		$this->AudioAlbums->constructClasses();
	}

	function testAudioAlbumsControllerInstance() {
		$this->assertTrue(is_a($this->AudioAlbums, 'AudioAlbumsController'));
	}

	function endTest() {
		unset($this->AudioAlbums);
	}
}
?>