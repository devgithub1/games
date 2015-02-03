<?php

class UsersController extends AppController {

          public function beforeFilter(){
        $this->Auth->allow(array('loginwith', 'login', 'add','social_add','forgetpwd','reset','search','find'));
    } 

     public function index() {
          $this->layout = 'default';   

     }

     public function dashboard() {
      // $this->Auth->allow()
          $this->layout = false;
          
     }
  

   
 public function login(){

    $this->layout = null;
   //echo  $this->Auth->login();die;
    if( $this->request->data ) {

       if( $this->Auth->login() ) {
        $this->set('authUser', $this->Auth->user());
        return $this->redirect($this->Auth->redirectUrl());
       } 
       $this->Session->setFlash(
            __('Username or password is incorrect'),
            'default',
            array(),
            'auth'
        );

    }  
 }

 public function loginwith($provider) {
        //  $this->Auth->allow('login');

           // $this->layout = 'default';

        require_once( WWW_ROOT . 'hybridauth/Hybrid/Auth.php' );

        $hybridauth_config = array(
            "base_url" => 'http://' . $_SERVER['HTTP_HOST'] . $this->base . "/hybridauth/", // set hybridauth path

            "providers" => array(
                "Facebook" => array(
                    "enabled" => true,
                    "keys" => array("id" => "1541548156127748", "secret" => "3140b1bd1b5620fbab005ab147d49019"),
                    "scope" => 'email',
                ),
            )
        );
        
        
        try {
            // create an instance for Hybridauth with the configuration file path as parameter
            $hybridauth = new Hybrid_Auth($hybridauth_config);

            // try to authenticate the selected $provider
            $adapter = $hybridauth->authenticate($provider);

            // grab the user profile
            $user_profile = $adapter->getUserProfile();
            $rand_pass= $this->randomPassword();
            echo $rand_pass;
            pr($user_profile);
            $this->User->create();
            $fbdata=$this->User->set(array(
                    
                    'fname' => $user_profile->firstName,
                    'lname' => $user_profile->lastName,
                    'email' => $user_profile->email,
                    'status' => 1,
                  'password' => $rand_pass //in case you need to save password to database.
                
                ));
            pr($fbdata);
            $fbuser=$this->User->save($fbdata);
           // echo 'hello'.$fbuser;
             if($fbuser)
             {
             $this->redirect(array(
              'controller' => 'users',
              'action' => 'activate', 
              ));
           }

         
           else
           {
           //  echo 'not authenticated';
             exit;
           }

         
            

           
            //login user using auth component
            if (!empty($user_profile)) {
                $user = $this->_findOrCreateUser($user_profile, $provider); // optional function if you combine with Auth component
                unset($user['password']);
                $this->request->data['User'] = $user;
                if ($this->Auth->login($this->request->data['User'])) {
                    $this->redirect($this->Auth->redirect());
                    $this->Session->setFlash('You are successfully logged in');
                } else {
                  //  $this->Session->setFlash('Failed to login');
                }
            }
        }
        
         catch (Exception $e) {
            // Display the recived error
            switch ($e->getCode()) {
                case 0 : $error = "Unspecified error.";
                    break;
                case 1 : $error = "Hybriauth configuration error.";
                    break;
                case 2 : $error = "Provider not properly configured.";
                    break;
                case 3 : $error = "Unknown or disabled provider.";
                    break;
                case 4 : $error = "Missing provider application credentials.";
                    break;
                case 5 : $error = "Authentification failed. The user has canceled the authentication or the provider refused the connection.";
                    break;
                case 6 : $error = "User profile request failed. Most likely the user is not connected to the provider and he should to authenticate again.";
                    $adapter->logout();
                    break;
                case 7 : $error = "User not connected to the provider.";
                    $adapter->logout();
                    break;
            }


        }
    }
        
       
        


        function randomPassword() {
              $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
              $pass = array(); //remember to declare $pass as an array
              $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
              for ($i = 0; $i < 8; $i++) {
                  $n = rand(0, $alphaLength);
                  $pass[] = $alphabet[$n];
              }
              return implode($pass); //turn the array into a string
          }

            public function social_add(){
              $this->layout = null;
             
              
            //  pr($this->request->data);
              $post_data=$this->request->data;
               $randpass=$this->randomPassword();
              // echo $randpass;
               $post_data['User']['password']=$randpass;
               $post_data['User']['password1']=$randpass;
              $post_data['User']['password'] = $this->Auth->password($post_data['User']['password']);
              $qwer1=$this->User->set($post_data);         
              $qwer2=$this->User->save($post_data);     
              if($this->User->save($post_data)) {
                      echo 'A password has been sent to your mail';
                                 $to      = $post_data['User']['email'];
                                     $subject = 'Random password';
                                     $message = 'Your random password is  '. $post_data['User']['password1'];      
                                     mail($to, $subject, $message);

            }
            else{
              echo 'Email already exists';
              exit;
            }
          }




  public function add(){  
      
          $this->User->create();
          $post_data=$this->request->data;

           $date = date('Y-m-d H:i:s'); 
           $activation_code=md5($date);
           $post_data['activation_code'] = $activation_code;
           $this->User->set($post_data);
       //   $act_link = Router::Url(array('controller' => 'users', 'action' => 'activate'),TRUE) . '?activation='.$activation_code;
          $act_link = $_SERVER['HTTP_HOST'].'/users/activate'. '?activation='.$activation_code;          
          if (!empty($post_data)) {

              
          if ($this->User->validates()) {
                   $post_data['password'] = $this->Auth->password($post_data['password']);
                if( $this->User->save($post_data) ){

           
                                     $to      = $post_data['email'];
                                     $subject = 'Activation link';
                                     $message = 'Please click on the link  to activate your account  '. $act_link;      
                                     mail($to, $subject, $message);
                                  
                                // } 
                // $this->__sendActivationEmail($this->User->getLastInsertID());
                  $response['status']='success';
                 // $response['code']=  $activation_code;
                  echo json_encode($response);
                   die;
                  } else {

                     
              echo  'validated data - but not saved';
            }

          } else {
                        
                        // didn't validate logic
                        $errors = $this->User->validationErrors;
                        $data['errors'] = $errors;
                        $data['status'] = 'false';
                       echo json_encode($data);exit;
                        // print_r($data); exit;
                              // $this->load->view('add',$data);
                    }    
                      }
                  //$params = $this->request->data;
                  //pr($params); die;
                  //$this->loadModel('User');
                
                  }

  public  function activate()
    {
       $this->layout = null;
       $data=$this->request->data;
      // print_r($data);
       $code=$_GET['activation'];
      // echo $code;
       
       $found = $this->User->find('first', array(
          'conditions' => array(
                'activation_code' => $code,
              
           )
      ));
      
         if($found)
         {        
                     
             $this->set('activation');
            $query= $this->User->updateAll(
            array('status' => "'1'"),
            array('activation_code' => $code)
           );
          //  echo $query;

         }
         else
         {
        //  echo 'user does not exists';
         }

    }

        public function logout() {
         
          
          $this->redirect($this->Auth->logout());
           echo "Logout";
        }


        function forgetpwd(){
    //$this->layout="signup";
    // pr($this->request->data);
    //$this->User->recursive=-1;
    if(!empty($this->data))
    {
      if(empty($this->data['User']['email']))
      {
        $this->Session->setFlash('Please Provide Your Email Adress that You used to Register with Us');
      }
      else
      {
        $email=$this->data['User']['email'];
       // echo $email;
        $fu=$this->User->find('first',array('conditions'=>array('User.email'=>$email)));
        if($fu)
        { 
         // echo 'mail found';
          //debug($fu);
          if($fu['User']['status'])
          {
            $key = Security::hash(String::uuid(),'sha512',true);
            $hash=sha1($fu['User']['fname'].rand(0,100));
            $url = Router::url( array('controller'=>'users','action'=>'reset'), true ).'/'.$key.'#'.$hash;
            $ms=$url;
            $ms=wordwrap($ms,1000);
            //debug($url);
            $fu['User']['activation_code']=$key;
            $this->User->id=$fu['User']['id'];
            if($this->User->saveField('activation_code',$fu['User']['activation_code'])){

              //============Email================//
                 $to      = $email;
                  $subject = 'Reset Your Password';
                 $message = 'Please click on the link to reset your password '. $ms;      
                 mail($to, $subject, $message);
            }
            else{
              $this->Session->setFlash("Error Generating Reset link");
            }
          }
          else
          {
            $this->Session->setFlash('This Account is not Active yet.Check Your mail to activate it');
          }
        }
        else
        {
          $this->Session->setFlash('Email does Not Exist');
        }
      }
    }
  }


  function reset($token=null){
    //$this->layout="Login";
    $this->User->recursive=-1;
    if(!empty($token)){
      $u=$this->User->findByactivation_code($token);
      if($u){
        $this->User->id=$u['User']['id'];
        if(!empty($this->data)){
          $this->User->data=$this->data;
          $this->User->data['User']['fname']=$u['User']['fname'];
          $new_hash=sha1($u['User']['fname'].rand(0,100));//created token
          $this->User->data['User']['activation_code']=$new_hash;
          if($this->User->validates(array('fieldList'=>array('password','password_confirm')))){
           $this->User->data['User']['password']= $this->Auth->password($this->User->data['User']['password']);
           // pr( $this->User->data['User']['password']);
            if($this->User->save($this->User->data))
            {
             // echo 'Password Has been Updated.Please login again';
              $this->Session->setFlash('Password Has been Updated.Please login again');
              $this->redirect(array('controller'=>'users','action'=>'login'));
            }

          }
          else{

            $this->set('errors',$this->User->invalidFields());
          }
        }
      }
      else
      {
        $this->Session->setFlash('Token Corrupted,,Please Retry.the reset link work only for once.');
      }
    }

    else{
      $this->redirect('/');
    }
  }




  public function select2() {
    $this->User->recursive = 0;
    $this->set('users', $this->paginate());
}


public function search() {
    $this->autoRender = false;

    // get the search term from URL
    $term = $this->request->query['q'];
    $users = $this->User->find('all',array(
        'conditions' => array(
            'User.fname LIKE' => '%'.$term.'%'
        )
    ));

    // Format the result for select2
    $result = array();
    foreach($users as $key => $user) {
        $result[$key]['id'] = (int) $user['User']['id'];
        $result[$key]['text'] = $user['User']['fname'];
    }
    $users = $result;

    echo json_encode($users);
}

public function find() {
if ($this->request->is('ajax')) {
$this->autoRender = false;
$country_name = $this->request->query('term');
$results = $this->Country->find('all', array(
'conditions' => array('User.name LIKE ' => '%' . $country_name . '%')));
$resultArr = array();
foreach($results as $result) {
$resultArr[] = array('label' =>$result['User']['fname'] , 'value' => $result['User']['fname'] );
}
echo json_encode($resultArr);
}
} 



  
}
 