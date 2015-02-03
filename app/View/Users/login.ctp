

   <?php
   // for calling header element
   echo $this->element('header',array('cache' => true)) 
    ?> 
    
    <?php
   // for calling header element
   echo $this->element('banner',array('cache' => true)) 
    ?> 

    <?php

  	 echo $this->Session->flash();
     echo $this->Session->flash('auth');
  

    ?>

  
   <?php
     // for calling footer element
    echo $this->element('footer',array('cache' => true)) 
    ?>

