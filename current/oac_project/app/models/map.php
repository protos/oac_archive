<?php
class Map extends AppModel {

	var $name = 'Map';
	var $validate = array(
		'oac_ref_no' => array('notempty'),
		'map_type_id' => array('numeric'),
		'title' => array('notempty'),
		'compiler_id' => array('numeric'),
		'login_level_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'MapType' => array(
			'className' => 'MapType',
			'foreignKey' => 'map_type_id',
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
		)
	);

}
?>