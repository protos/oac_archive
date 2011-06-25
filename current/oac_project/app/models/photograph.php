<?php
class Photograph extends AppModel {

	var $name = 'Photograph';
    var $actsAs = array('Searchable.Searchable');
	var $validate = array(
		'oac_ref_no' => array('notempty'),
		'photo_type_id' => array('numeric'),
		'title' => array('notempty'),
		'compiler_id' => array('numeric'),
		'login_level_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'PhotoType' => array(
			'className' => 'PhotoType',
			'foreignKey' => 'photo_type_id',
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
		'Compiler' => array(
			'className' => 'Compiler',
			'foreignKey' => 'compiler_id',
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
		'Document' => array(
			'className' => 'Document',
			'foreignKey' => 'document_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
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