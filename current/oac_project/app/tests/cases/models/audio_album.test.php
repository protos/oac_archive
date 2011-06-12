<?php 
/* SVN FILE: $Id$ */
/* AudioAlbum Test cases generated on: 2009-06-24 16:06:01 : 1245853321*/
App::import('Model', 'AudioAlbum');

class AudioAlbumTestCase extends CakeTestCase {
	var $AudioAlbum = null;
	var $fixtures = array('app.audio_album', 'app.audio_album_type', 'app.login_level', 'app.compiler', 'app.audio_track', 'app.document', 'app.photograph', 'app.video_album', 'app.audio_track', 'app.document', 'app.photograph', 'app.video_album');

	function startTest() {
		$this->AudioAlbum =& ClassRegistry::init('AudioAlbum');
	}

	function testAudioAlbumInstance() {
		$this->assertTrue(is_a($this->AudioAlbum, 'AudioAlbum'));
	}

	function testAudioAlbumFind() {
		$this->AudioAlbum->recursive = -1;
		$results = $this->AudioAlbum->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('AudioAlbum' => array(
			'id'  => 1,
			'audio_album_type_id'  => 1,
			'specified_audio_album_type'  => 'Lorem ipsum dolor sit amet',
			'oac_ref_no'  => 'Lorem ipsum dolor sit amet',
			'source'  => 'Lorem ipsum dolor sit amet',
			'date_acquired'  => '2009-06-24',
			'collection_title'  => 'Lorem ipsum dolor sit amet',
			'title'  => 'Lorem ipsum dolor sit amet',
			'description'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'artists'  => 'Lorem ipsum dolor sit amet',
			'series'  => 'Lorem ipsum dolor sit amet',
			'label'  => 'Lorem ipsum dolor sit amet',
			'publishers_catalogue_no'  => 'Lorem ipsum dolor sit amet',
			'multipe_cds'  => 1,
			'release_date'  => '2009-06-24',
			'recording_venue'  => 'Lorem ipsum dolor sit amet',
			'size'  => 'Lorem ipsum dolor sit amet',
			'duration'  => 'Lorem ipsum dolor sit amet',
			'matrix_no'  => 'Lorem ipsum dolor sit amet',
			'producer'  => 'Lorem ipsum dolor sit amet',
			'copyright_start_date'  => '2009-06-24',
			'copyright_holders'  => 'Lorem ipsum dolor sit amet',
			'artists_url'  => 'Lorem ipsum dolor sit amet',
			'recording_engineer'  => 'Lorem ipsum dolor sit amet',
			'comments'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'keywords'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'digitizing_engineer'  => 'Lorem ipsum dolor sit amet',
			'equipment'  => 'Lorem ipsum dolor sit amet',
			'software_package'  => 'Lorem ipsum dolor sit amet',
			'digital_artefact_link'  => 'Lorem ipsum dolor sit amet',
			'oac_shop_url'  => 'Lorem ipsum dolor sit amet',
			'login_level_id'  => 1,
			'compiler_id'  => 1,
			'specified_compiler'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2009-06-24 16:21:59',
			'modified'  => '2009-06-24 16:21:59'
		));
		$this->assertEqual($results, $expected);
	}
}
?>