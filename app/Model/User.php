<?php 

App::uses('AuthComponent','Controller/Component');

class User extends AppModel {

	//public $avatarUploadDir = 'img/avatars';

	public $validate = array(

		'fname' => array(
			'nonEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Firstname is required',
				'allowEmpty' => false
				),

		'between' => array(
			'rule' => array('between',5,15),
			'required' => true,
			'message' => 'Firstname must be between 5 to 10 characters',

			),

		'unique' => array(
			'rule' => array('isUniqueUsername'),
			'message' => 'This username is already taken',
			),

		/*'alphaNumericDashUnderscore' => array(
			'rule' => array('alphaNumericDashUnderscore'),
			'message' => 'Username can only be letters, numbers and underscore ',
			),
		  ),
		  */

		'password' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'A password is required',
				),

			'min_length' => array(
				'rule' => array('minLength','6'),
				'message' => 'Paasword must have a minimum of 6 charaters',

				),
			),

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

		'email' => array(
			'required' => array(
			'rule' => array('email',true),
			'message' => 'Please provide a valid email adddress'
			),
             'unique' => array(
             	'rule' => array('isUniqueEmail'),
            'message' => 'This email already exists',
			),
            'between' => array(
            'rule' => array('between',6,60),
            'message'=> 'Email must be between 6 t0 60 characters'
            )
         ),
   	)
);

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
}
