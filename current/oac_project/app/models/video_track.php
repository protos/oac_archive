<?php
class VideoTrack extends AppModel {

	var $name = 'VideoTrack';
    var $actsAs = array('Searchable.Searchable');
	var $validate = array(
		'track_no' => array('numeric'),
		'video_album_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'VideoAlbum' => array(
			'className' => 'VideoAlbum',
			'foreignKey' => 'video_album_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>