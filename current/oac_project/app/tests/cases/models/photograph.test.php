<?php 
/* SVN FILE: $Id$ */
/* Photograph Test cases generated on: 2009-06-24 16:06:20 : 1245853460*/
App::import('Model', 'Photograph');

class PhotographTestCase extends CakeTestCase {
	var $Photograph = null;
	var $fixtures = array('app.photograph', 'app.photo_type', 'app.audio_album', 'app.compiler', 'app.login_level', 'app.document', 'app.video_album');

	function startTest() {
		$this->Photograph =& ClassRegistry::init('Photograph');
	}

	function testPhotographInstance() {
		$this->assertTrue(is_a($this->Photograph, 'Photograph'));
	}

	function testPhotographFind() {
		$this->Photograph->recursive = -1;
		$results = $this->Photograph->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Photograph' => array(
			'id'  => 1,
			'oac_ref_no'  => 'Lorem ipsum dolor sit amet',
			'photo_type_id'  => 1,
			'specified_photo_type'  => 'Lorem ipsum dolor sit amet',
			'collection_title'  => 'Lorem ipsum dolor sit amet',
			'source'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'aquisition_date'  => '2009-06-24 16:24:19',
			'title'  => 'Lorem ipsum dolor sit amet',
			'photographer'  => 'Lorem ipsum dolor sit amet',
			'camera'  => 'Lorem ipsum dolor sit amet',
			'subject_detail'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'date_taken'  => '2009-06-24',
			'copies'  => 'Lorem ipsum dolor sit amet',
			'copyright_start_date'  => '2009-06-24',
			'copyright_holder'  => 'Lorem ipsum dolor sit amet',
			'location'  => 'Lorem ipsum dolor sit amet',
			'comments'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'engineer'  => 'Lorem ipsum dolor sit amet',
			'digital_size'  => 'Lorem ipsum dolor sit amet',
			'equipment'  => 'Lorem ipsum dolor sit amet',
			'software_package'  => 'Lorem ipsum dolor sit amet',
			'digital_artefact_link'  => 'Lorem ipsum dolor sit amet',
			'oac_url'  => 'Lorem ipsum dolor sit amet',
			'audio_album_id'  => 1,
			'compiler_id'  => 1,
			'keywords'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'specified_compiler'  => 'Lorem ipsum dolor sit amet',
			'login_level_id'  => 1,
			'document_id'  => 1,
			'video_album_id'  => 1,
			'created'  => '2009-06-24 16:24:19',
			'modified'  => '2009-06-24 16:24:19'
		));
		$this->assertEqual($results, $expected);
	}
}
?>