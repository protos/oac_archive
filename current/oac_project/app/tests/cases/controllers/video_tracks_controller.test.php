<?php 
/* SVN FILE: $Id$ */
/* VideoTracksController Test cases generated on: 2009-06-24 16:06:39 : 1245853779*/
App::import('Controller', 'VideoTracks');

class TestVideoTracks extends VideoTracksController {
	var $autoRender = false;
}

class VideoTracksControllerTest extends CakeTestCase {
	var $VideoTracks = null;

	function startTest() {
		$this->VideoTracks = new TestVideoTracks();
		$this->VideoTracks->constructClasses();
	}

	function testVideoTracksControllerInstance() {
		$this->assertTrue(is_a($this->VideoTracks, 'VideoTracksController'));
	}

	function endTest() {
		unset($this->VideoTracks);
	}
}
?>