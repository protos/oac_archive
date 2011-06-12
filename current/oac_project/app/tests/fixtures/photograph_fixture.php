<?php 
/* SVN FILE: $Id$ */
/* Photograph Fixture generated on: 2009-06-24 16:06:19 : 1245853459*/

class PhotographFixture extends CakeTestFixture {
	var $name = 'Photograph';
	var $table = 'photographs';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'oac_ref_no' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 45),
		'photo_type_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'specified_photo_type' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'collection_title' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 50),
		'source' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'aquisition_date' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'title' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 45),
		'photographer' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'camera' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'subject_detail' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'date_taken' => array('type'=>'date', 'null' => true, 'default' => NULL),
		'copies' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'copyright_start_date' => array('type'=>'date', 'null' => true, 'default' => NULL),
		'copyright_holder' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 50),
		'location' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'comments' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'engineer' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'digital_size' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'equipment' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'software_package' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'digital_artefact_link' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'oac_url' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 70),
		'audio_album_id' => array('type'=>'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'compiler_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'keywords' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'specified_compiler' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'login_level_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'document_id' => array('type'=>'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'video_album_id' => array('type'=>'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'compiler_id' => array('column' => 'compiler_id', 'unique' => 0), 'photo_type_id' => array('column' => 'photo_type_id', 'unique' => 0), 'audio_album_id' => array('column' => 'audio_album_id', 'unique' => 0), 'document_id' => array('column' => 'document_id', 'unique' => 0), 'video_album_id' => array('column' => 'video_album_id', 'unique' => 0), 'login_level_id' => array('column' => 'login_level_id', 'unique' => 0))
	);
	var $records = array(array(
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
}
?>