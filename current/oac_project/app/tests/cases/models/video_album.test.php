<?php 
/* SVN FILE: $Id$ */
/* VideoAlbum Test cases generated on: 2009-06-24 16:06:59 : 1245853499*/
App::import('Model', 'VideoAlbum');

class VideoAlbumTestCase extends CakeTestCase {
	var $VideoAlbum = null;
	var $fixtures = array('app.video_album', 'app.video_type', 'app.audio_album', 'app.login_level', 'app.compiler', 'app.document', 'app.photograph', 'app.video_track', 'app.document', 'app.photograph', 'app.video_track');

	function startTest() {
		$this->VideoAlbum =& ClassRegistry::init('VideoAlbum');
	}

	function testVideoAlbumInstance() {
		$this->assertTrue(is_a($this->VideoAlbum, 'VideoAlbum'));
	}

	function testVideoAlbumFind() {
		$this->VideoAlbum->recursive = -1;
		$results = $this->VideoAlbum->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('VideoAlbum' => array(
			'id'  => 1,
			'video_type_id'  => 1,
			'specified_video_type'  => 'Lorem ipsum dolor sit amet',
			'oac_ref_no'  => 'Lorem ipsum dolor sit amet',
			'source'  => 'Lorem ipsum dolor sit amet',
			'date_acquired'  => '2009-06-24',
			'collection_title'  => 'Lorem ipsum dolor sit amet',
			'title'  => 'Lorem ipsum dolor sit amet',
			'description'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'artists'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'series'  => 'Lorem ipsum dolor sit amet',
			'label'  => 'Lorem ipsum dolor sit amet',
			'publishers_catalogue_no'  => 'Lorem ipsum dolor sit amet',
			'release_date'  => '2009-06-24',
			'recording_venue'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'size'  => 'Lorem ipsum dolor sit amet',
			'duration'  => 'Lorem ipsum dolor sit amet',
			'director'  => 'Lorem ipsum dolor sit amet',
			'producer'  => 'Lorem ipsum dolor sit amet',
			'production_crew'  => 'Lorem ipsum dolor sit amet',
			'studio'  => 'Lorem ipsum dolor sit amet',
			'copyright_holder'  => 'Lorem ipsum dolor sit amet',
			'copyright_start_date'  => '2009-06-24',
			'artist_url'  => 'Lorem ipsum dolor sit amet',
			'comments'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'keywords'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'engineer'  => 'Lorem ipsum dolor sit amet',
			'equipment'  => 'Lorem ipsum dolor sit amet',
			'software_package'  => 'Lorem ipsum dolor sit amet',
			'oac_url'  => 'Lorem ipsum dolor sit amet',
			'specified_compiler'  => 'Lorem ipsum dolor sit amet',
			'digital_artefact_link'  => 'Lorem ipsum dolor sit amet',
			'audio_album_id'  => 1,
			'login_level_id'  => 1,
			'compiler_id'  => 1,
			'created'  => '2009-06-24 16:24:58',
			'modified'  => '2009-06-24 16:24:58'
		));
		$this->assertEqual($results, $expected);
	}
}
?>