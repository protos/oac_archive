<?php 
/* SVN FILE: $Id$ */
/* VideoTrack Test cases generated on: 2009-06-24 16:06:49 : 1245853549*/
App::import('Model', 'VideoTrack');

class VideoTrackTestCase extends CakeTestCase {
	var $VideoTrack = null;
	var $fixtures = array('app.video_track', 'app.video_album');

	function startTest() {
		$this->VideoTrack =& ClassRegistry::init('VideoTrack');
	}

	function testVideoTrackInstance() {
		$this->assertTrue(is_a($this->VideoTrack, 'VideoTrack'));
	}

	function testVideoTrackFind() {
		$this->VideoTrack->recursive = -1;
		$results = $this->VideoTrack->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('VideoTrack' => array(
			'id'  => 1,
			'track_no'  => 1,
			'title'  => 'Lorem ipsum dolor sit amet',
			'primary_performers'  => 'Lorem ipsum dolor sit amet',
			'primary_instruments'  => 'Lorem ipsum dolor sit amet',
			'genre'  => 'Lorem ipsum dolor sit amet',
			'duration'  => 'Lorem ipsum dolor sit amet',
			'composer'  => 'Lorem ipsum dolor sit amet',
			'performance_date'  => '2009-06-24',
			'copyright_holders'  => 'Lorem ipsum dolor sit amet',
			'copyright_start_date'  => '2009-06-24',
			'comments'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'keywords'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'digital_artefact_link'  => 'Lorem ipsum dolor sit amet',
			'video_album_id'  => 1,
			'synonyms'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created'  => '2009-06-24 16:25:48',
			'modified'  => '2009-06-24 16:25:48'
		));
		$this->assertEqual($results, $expected);
	}
}
?>