<?php 
/* SVN FILE: $Id$ */
/* VideoTrack Fixture generated on: 2009-06-24 16:06:48 : 1245853548*/

class VideoTrackFixture extends CakeTestFixture {
	var $name = 'VideoTrack';
	var $table = 'video_tracks';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'track_no' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'title' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'primary_performers' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 70),
		'primary_instruments' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 70),
		'genre' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 50),
		'duration' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'composer' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'performance_date' => array('type'=>'date', 'null' => true, 'default' => NULL),
		'copyright_holders' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 50),
		'copyright_start_date' => array('type'=>'date', 'null' => true, 'default' => NULL),
		'comments' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'keywords' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'digital_artefact_link' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 60),
		'video_album_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'synonyms' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'video_album_id' => array('column' => 'video_album_id', 'unique' => 0))
	);
	var $records = array(array(
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
}
?>