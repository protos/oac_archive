<?php 
/* SVN FILE: $Id$ */
/* AudioTracksController Test cases generated on: 2009-06-24 16:06:47 : 1245853607*/
App::import('Controller', 'AudioTracks');

class TestAudioTracks extends AudioTracksController {
	var $autoRender = false;
}

class AudioTracksControllerTest extends CakeTestCase {
	var $AudioTracks = null;

	function startTest() {
		$this->AudioTracks = new TestAudioTracks();
		$this->AudioTracks->constructClasses();
	}

	function testAudioTracksControllerInstance() {
		$this->assertTrue(is_a($this->AudioTracks, 'AudioTracksController'));
	}

	function endTest() {
		unset($this->AudioTracks);
	}
}
?>