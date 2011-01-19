<?php
	class User extends AppModel {
	var $name = 'User';
	var $hasOne = array(
        'Profile' => array(
            'className'    => 'Profile',
            'dependent'    => true
        )
    );
	var $validate = array(
    'login' => array(
        'rule' => 'isUnique', // or: array('ruleName', 'param1', 'param2' ...)
        'required' => true,
        'allowEmpty' => false,
        'message' => 'Nazwa użytkownika musi być unikalna'
		),
	'haslo' => array(
        'rule' => 'alphaNumeric', // or: array('ruleName', 'param1', 'param2' ...)
        'required' => true,
        'allowEmpty' => false,
        'message' => 'Wprowadź hasło'
		)
	);
}
 ?>