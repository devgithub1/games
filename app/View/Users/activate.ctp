  
   <?php
   // for calling header element
   echo $this->element('header',array('cache' => true)) 
    ?> 
    

   <?php
   // for calling banner element
   echo $this->element('banner',array('cache' => true)) 
    ?> 
 
 <div class="user-section">
<div class="dr-wrapper">
    <div class="profile">  
    <h3>
    <?php
    // for calling home page content
    echo 'Your account has been activated'; ?>
    </h3>

  </div>
  </div>
  </div>
   <?php
     // for calling footer element
  echo $this->element('footer',array('cache' => true));
  
    ?>