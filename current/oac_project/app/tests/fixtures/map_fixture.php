<?php 
/* SVN FILE: $Id$ */
/* Map Fixture generated on: 2009-06-24 16:06:43 : 1245853423*/

class MapFixture extends CakeTestFixture {
	var $name = 'Map';
	var $table = 'maps';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'oac_ref_no' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 45),
		'map_type_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'specified_map_type' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'source' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'date_acquired' => array('type'=>'date', 'null' => true, 'default' => NULL),
		'collection_title' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'title' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 45),
		'scale' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'producer' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'date_produced' => array('type'=>'date', 'null' => true, 'default' => NULL),
		'date_published' => array('type'=>'date', 'null' => true, 'default' => NULL),
		'edition_date' => array('type'=>'date', 'null' => true, 'default' => NULL),
		'sheet_number' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'coordinates' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'special_purpose' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'sheet_size' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'publishers_cat_no' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'copyright_start_date' => array('type'=>'date', 'null' => true, 'default' => NULL),
		'copyright_holders' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 50),
		'description' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'comments' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'keywords' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'digital_artefact_link' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'copies' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'compiler_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'specified_compiler' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 50),
		'login_level_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'document_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'map_type_id' => array('column' => 'map_type_id', 'unique' => 0), 'compiler_id' => array('column' => 'compiler_id', 'unique' => 0), 'login_level_id' => array('column' => 'login_level_id', 'unique' => 0), 'document_id' => array('column' => 'id', 'unique' => 0))
	);
	var $records = array(array(
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
}
?>