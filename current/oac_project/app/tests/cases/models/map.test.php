<?php 
/* SVN FILE: $Id$ */
/* Map Test cases generated on: 2009-06-24 16:06:45 : 1245853425*/
App::import('Model', 'Map');

class MapTestCase extends CakeTestCase {
	var $Map = null;
	var $fixtures = array('app.map', 'app.map_type', 'app.compiler', 'app.login_level', 'app.document');

	function startTest() {
		$this->Map =& ClassRegistry::init('Map');
	}

	function testMapInstance() {
		$this->assertTrue(is_a($this->Map, 'Map'));
	}

	function testMapFind() {
		$this->Map->recursive = -1;
		$results = $this->Map->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Map' => array(
			'id'  => 1,
			'oac_ref_no'  => 'Lorem ipsum dolor sit amet',
			'map_type_id'  => 1,
			'specified_map_type'  => 'Lorem ipsum dolor sit amet',
			'source'  => 'Lorem ipsum dolor sit amet',
			'date_acquired'  => '2009-06-24',
			'collection_title'  => 'Lorem ipsum dolor sit amet',
			'title'  => 'Lorem ipsum dolor sit amet',
			'scale'  => 'Lorem ipsum dolor sit amet',
			'producer'  => 'Lorem ipsum dolor sit amet',
			'date_produced'  => '2009-06-24',
			'date_published'  => '2009-06-24',
			'edition_date'  => '2009-06-24',
			'sheet_number'  => 1,
			'coordinates'  => 'Lorem ipsum dolor sit amet',
			'special_purpose'  => 'Lorem ipsum dolor sit amet',
			'sheet_size'  => 'Lorem ipsum dolor sit amet',
			'publishers_cat_no'  => 'Lorem ipsum dolor sit amet',
			'copyright_start_date'  => '2009-06-24',
			'copyright_holders'  => 'Lorem ipsum dolor sit amet',
			'description'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'comments'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'keywords'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'digital_artefact_link'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'copies'  => 'Lorem ipsum dolor sit amet',
			'compiler_id'  => 1,
			'specified_compiler'  => 'Lorem ipsum dolor sit amet',
			'login_level_id'  => 1,
			'document_id'  => 1,
			'created'  => '2009-06-24 16:23:43',
			'modified'  => '2009-06-24 16:23:43'
		));
		$this->assertEqual($results, $expected);
	}
}
?>