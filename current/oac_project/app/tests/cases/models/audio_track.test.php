<?php 
/* SVN FILE: $Id$ */
/* AudioTrack Test cases generated on: 2009-06-24 16:06:32 : 1245853352*/
App::import('Model', 'AudioTrack');

class AudioTrackTestCase extends CakeTestCase {
	var $AudioTrack = null;
	var $fixtures = array('app.audio_track', 'app.audio_album');

	function startTest() {
		$this->AudioTrack =& ClassRegistry::init('AudioTrack');
	}

	function testAudioTrackInstance() {
		$this->assertTrue(is_a($this->AudioTrack, 'AudioTrack'));
	}

	function testAudioTrackFind() {
		$this->AudioTrack->recursive = -1;
		$results = $this->AudioTrack->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('AudioTrack' => array(
			'id'  => 1,
			'track_no'  => 1,
			'title'  => 'Lorem ipsum dolor sit amet',
			'primary_performers'  => 'Lorem ipsum dolor sit amet',
			'primary_instruments'  => 'Lorem ipsum dolor sit amet',
			'genre'  => 'Lorem ipsum dolor sit amet',
			'duration'  => 'Lorem ipsum dolor sit amet',
			'performance_date'  => '2009-06-24',
			'composer'  => 'Lorem ipsum dolor sit amet',
			'copyright_start_date'  => '2009-06-24',
			'copyright_holder'  => 'Lorem ipsum dolor sit amet',
			'comments'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'digital_artefact_link'  => 'Lorem ipsum dolor sit amet',
			'synonyms'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'keywords'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'audio_album_id'  => 1,
			'created'  => '2009-06-24 16:22:31',
			'modified'  => '2009-06-24 16:22:31'
		));
		$this->assertEqual($results, $expected);
	}
}
?>