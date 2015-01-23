<?php 

class UsersController extends AppController {

 /*    public $components = array(
    'Session',
    'Auth' => array(
      
        'authError' => 'You must be logged in to view this page.',
        'loginError' => 'Invalid Username or Password entered, please try again.'
 
    ));
    */
     var $components = array('Email');
  

	public function login() {

		// if already logged in , redirect
      //  $this -> view = 'login';
		if($this->Session->check('Auth.User')) {
           
			if($this->request->is('post')) {
				if($this->Auth->login()) {
					$this->Session->setFlash(__('Welcome, '. $this->Auth->user('username')));
					$this->redirect($this->Auth->redirectUrl());

				} else {
					$this->Session->setFlash(__('Invalid username or password'));
				}
			}
		}
	}

	public function add(){

          $sessiondata=$this->Session->read();
     //   if ($this->request->is('post')) {
          $this->User->create();
           $this->User->set($this->request->data);

          if (!empty($this->request->data)) {

          		
        	if ($this->User->validates()) {
 
    			if( $this->User->save($this->request->data) ){
    			// $this->__sendActivationEmail($this->User->getLastInsertID());
    				$response['status']		=	'success';
    				echo json_encode($response);die;
		        } else {

                     
		        	echo  'validated data - but not saved';
		        }

			} else {
          
			    // didn't validate logic
			    $errors = $this->User->validationErrors;
			    $data['errors'] = $errors;
			    $data['status']	=	'false';
			   echo json_encode($data);exit;
			    // print_r($data); exit;
                // $this->load->view('add',$data);
			}    
        }
		//$params = $this->request->data;
		//pr($params); die;
		//$this->loadModel('User');
	
   	}

	public function logout() {

		$this->redirect($this->Auth->logout());
	}

/*	 function __sendActivationEmail($user_id) {
        $user = $this->User->find(array('User.id' => $user_id), array('User.id','User.email', 'User.username'), null, false);
        if ($user === false) {
            debug(__METHOD__." failed to retrieve User data for user.id: {$user_id}");
            return false;
        }
    }
    */
	
}