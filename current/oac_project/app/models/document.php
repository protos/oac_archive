<?php
class Document extends AppModel {

	var $name = 'Document';
	var $validate = array(
		'oac_ref_no' => array('notempty'),
		'doc_type_id' => array('numeric'),
		'title' => array('notempty'),
		'compiler_id' => array('numeric'),
		'login_level_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'DocType' => array(
			'className' => 'DocType',
			'foreignKey' => 'doc_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'DocLanguage' => array(
			'className' => 'DocLanguage',
			'foreignKey' => 'doc_language_id',
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
		'VideoAlbum' => array(
			'className' => 'VideoAlbum',
			'foreignKey' => 'video_album_id',
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
		)
	);

	var $hasOne = array(
		'Map' => array(
			'className' => 'Map',
			'foreignKey' => 'document_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Photograph' => array(
			'className' => 'Photograph',
			'foreignKey' => 'document_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Map' => array(
			'className' => 'Map',
			'foreignKey' => 'document_id',
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
			'foreignKey' => 'document_id',
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