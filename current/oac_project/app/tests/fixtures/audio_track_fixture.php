<?php 
/* SVN FILE: $Id$ */
/* AudioTrack Fixture generated on: 2009-06-24 16:06:31 : 1245853351*/

class AudioTrackFixture extends CakeTestFixture {
	var $name = 'AudioTrack';
	var $table = 'audio_tracks';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'track_no' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'title' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 50),
		'primary_performers' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 80),
		'primary_instruments' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 80),
		'genre' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 80),
		'duration' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 80),
		'performance_date' => array('type'=>'date', 'null' => true, 'default' => NULL),
		'composer' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 50),
		'copyright_start_date' => array('type'=>'date', 'null' => true, 'default' => NULL),
		'copyright_holder' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 50),
		'comments' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'digital_artefact_link' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 80),
		'synonyms' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'keywords' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'audio_album_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'audio_album_id' => array('column' => 'audio_album_id', 'unique' => 0))
	);
	var $records = array(array(
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
}
?>