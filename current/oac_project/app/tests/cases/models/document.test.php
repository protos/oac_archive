<?php 
/* SVN FILE: $Id$ */
/* Document Test cases generated on: 2009-06-24 16:06:11 : 1245853391*/
App::import('Model', 'Document');

class DocumentTestCase extends CakeTestCase {
	var $Document = null;
	var $fixtures = array('app.document', 'app.doc_type', 'app.doc_language', 'app.compiler', 'app.video_album', 'app.audio_album', 'app.login_level', 'app.map', 'app.photograph', 'app.map', 'app.photograph');

	function startTest() {
		$this->Document =& ClassRegistry::init('Document');
	}

	function testDocumentInstance() {
		$this->assertTrue(is_a($this->Document, 'Document'));
	}

	function testDocumentFind() {
		$this->Document->recursive = -1;
		$results = $this->Document->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Document' => array(
			'id'  => 1,
			'oac_ref_no'  => 'Lorem ipsum dolor sit amet',
			'doc_type_id'  => 1,
			'specified_doc_type'  => 'Lorem ipsum dolor sit amet',
			'collection_title'  => 'Lorem ipsum dolor sit amet',
			'source'  => 'Lorem ipsum dolor sit amet',
			'aquisition_date'  => '2009-06-24',
			'title'  => 'Lorem ipsum dolor sit amet',
			'edition'  => 'Lorem ipsum dolor sit amet',
			'authors'  => 'Lorem ipsum dolor sit amet',
			'contributors'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'publisher'  => 'Lorem ipsum dolor sit amet',
			'publication_date'  => '2009-06-24',
			'isbn_issn'  => 'Lorem ipsum dolor sit amet',
			'series'  => 'Lorem ipsum dolor sit amet',
			'description'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'doc_language_id'  => 1,
			'subject'  => 'Lorem ipsum dolor sit amet',
			'copies'  => 'Lorem ipsum dolor sit amet',
			'location'  => 'Lorem ipsum dolor sit amet',
			'oac_url'  => 'Lorem ipsum dolor sit amet',
			'digital_size'  => 'Lorem ipsum dolor sit amet',
			'comments'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'contents_page'  => 'Lorem ipsum dolor sit amet',
			'keywords'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'copyright_start_date'  => '2009-06-24',
			'copyright_holder'  => 'Lorem ipsum dolor sit amet',
			'digital_artefact_link'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'compiler_id'  => 1,
			'specified_compiler'  => 'Lorem ipsum dolor sit amet',
			'video_album_id'  => 1,
			'audio_album_id'  => 1,
			'login_level_id'  => 1,
			'created'  => '2009-06-24 16:23:10',
			'modified'  => '2009-06-24 16:23:10'
		));
		$this->assertEqual($results, $expected);
	}
}
?>