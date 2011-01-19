<?php
	class Message extends AppModel {
	var $name = 'Message';
	var $belongsTo = array(
        'Profile' => array(
            'className'    => 'Profile',
            'dependent'    => false
        )
    );
}
 ?>