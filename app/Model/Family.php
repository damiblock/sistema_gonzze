<?php
class Family extends AppModel{
	public $hasMany = 'Branch';
	public $validate = array(
		'familia' => array(
			'No Vacio' => array(
				'rule' => 'notEmpty',
				'message' => 'Este campo no puede estar vacio.'
			),
			'No Duplicados' => array(
				'rule' => 'isUnique',
				'message' => 'Esta familia ya existe.'
			)
		)
	);
}