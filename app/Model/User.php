<?php 



 App::uses('AuthComponent','Controller/Component');





class User extends AppModel {



	//public $avatarUploadDir = 'img/avatars';



	public $validate = array(

	'fname' => array(

		'required' => array(

			'rule' => 'notEmpty',

			'message' => 'Please enter your first name'

		)

	),

	'password' => array(

		'required' => array(

			'rule' => 'notEmpty',

			'message' => 'Please enter a password'

		)

	),

	'lname' => array(

		'required' => array(

			'rule' => 'notEmpty',

			'message' => 'Please enter last name'

		)

	),

	 'email' => array(

	 	'required' => array(

	 	'rule' => 'email',

        'message' => 'Please enter a valid email address'

	 	),
      'unique' => array(
            'rule'    => array('isUnique'),
            'message' => 'This email is already in use',
        ),
	 )

);






	// public function beforeSave($options = array()) {

	// 	if (!parent::beforeSave($options)) {

	// 		return false;

	// 	}

	// 	if (isset($this->data[$this->alias]['password'])) {



	// 		$this->data[$this->alias]['password'] = $this->data[$this->alias]['password'];

	// 	}

	// return true;

	// }



}

