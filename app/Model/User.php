<?php 

App::uses('AuthComponent','Controller/Component');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

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
	 	'rule'=>'email',
        'message' => 'Please enter a valid email address'
	 	)
);

	public function beforeSave($options = array()) {
		if (!parent::beforeSave($options)) {
			return false;
		}
		if (isset($this->data[$this->alias]['password'])) {
			$hasher = new SimplePasswordHasher();
			$this->data[$this->alias]['password'] = $hasher->hash($this->data[$this->alias]['password']);
		}
	return true;
	}
/*
		'unique' => array(
			'rule' => array('isUniqueUsername'),
			'message' => 'This username is already taken',
			),
*/
		/*'alphaNumericDashUnderscore' => array(
			'rule' => array('alphaNumericDashUnderscore'),
			'message' => 'Username can only be letters, numbers and underscore ',
			),
		  ),
		  */

		

		/*'password_confirm' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'Both passwords must match.'
				),

		'equaltofield' => array(
			'rule' => array('equaltofiled','password'),
			'message' => 'Both passwords must match.'
			),
		),
		*/



	
   	


/*
  function isUniqueEmail($check){
  	$email = $this->find(
  		'first',
  		array(
  			'fields' => array(
  				'User.id'
  				),
  			'conditions' => array(
  				'User.email' => $check['email']
  				)
  			)
  		);
    
    if(!empty($email)) {
    	if($this->data[$this->alias]['id'] == $email['User']['id']){
    		return true;
    	}
    	else{
    		return false;
    	}
    }else{
    	return true;
    }

  }



  public function beforeSave($options = array()) {
  	//hash the password

    if(isset($this->data[$this->alias]['password'])){
    	$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);

    }
    return parent::beforeSave($options);
  }

  */
}
