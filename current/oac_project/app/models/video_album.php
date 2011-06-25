<?php
class VideoAlbum extends AppModel {

	var $name = 'VideoAlbum';
    var $actsAs = array('Searchable.Searchable');
	var $validate = array(
		'video_type_id' => array('numeric'),
		'oac_ref_no' => array('notempty'),
		'title' => array('notempty'),
		'login_level_id' => array('numeric'),
		'compiler_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'VideoType' => array(
			'className' => 'VideoType',
			'foreignKey' => 'video_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AudioAlbum' => array(
			'className' => 'AudioAlbum',
			'foreignKey' => 'audio_album_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'LoginLevel' => array(
			'className' => 'LoginLevel',
			'foreignKey' => 'login_level_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Compiler' => array(
			'className' => 'Compiler',
			'foreignKey' => 'compiler_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasOne = array(
		'Document' => array(
			'className' => 'Document',
			'foreignKey' => 'video_album_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Photograph' => array(
			'className' => 'Photograph',
			'foreignKey' => 'video_album_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'VideoTrack' => array(
			'className' => 'VideoTrack',
			'foreignKey' => 'video_album_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Document' => array(
			'className' => 'Document',
			'foreignKey' => 'video_album_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Photograph' => array(
			'className' => 'Photograph',
			'foreignKey' => 'video_album_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'VideoTrack' => array(
			'className' => 'VideoTrack',
			'foreignKey' => 'video_album_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>