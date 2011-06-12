<?php
class AudioTrack extends AppModel {

	var $name = 'AudioTrack';
	var $validate = array(
		'track_no' => array('numeric'),
		'audio_album_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'AudioAlbum' => array(
			'className' => 'AudioAlbum',
			'foreignKey' => 'audio_album_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>