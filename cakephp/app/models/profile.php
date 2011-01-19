<?php
	class Profile extends AppModel {
		var $name = 'Profile';
		var $belongsTo = array(
			'User' => array(
				'className'  => 'User',
				'foreignKey' => 'user_id'
			)
		);
		var $hasMany = array(
			'Friend' => array(
				'className'     => 'Friend',
				'foreignKey'    => 'profile_id',
				//'order'    => 'Friend.created DESC',
				'dependent'=> false
			),
			'Message' => array(
				'className'     => 'Message',
				'foreignKey'    => 'profile_id',
				//'order'    => 'Friend.created DESC',
				'dependent' => false
			)
		);
	}
?>
