    
  
   <?php
   // for calling header element
   echo $this->element('header',array('cache' => true)) 
    ?> 
    

   <?php
   // for calling banner element
   echo $this->element('banner',array('cache' => true)) 
    ?> 
   
    <?php
    
    echo $this->fetch('content'); ?>

  
   <?php
     // for calling footer element
    echo $this->element('footer',array('cache' => true)) 
    ?>


