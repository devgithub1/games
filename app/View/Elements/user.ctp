

   <div class="user-section">
    <div class="dr-wrapper">
    <div class="profile">

    
 <?php
    $fname =AuthComponent::user('fname');
    $lname =AuthComponent::user('lname');
    $email =AuthComponent::user('email');

       echo '<div class="row"><h2>Welcome '. $fname . '</h2></div>';
   
      echo  '<div class="row"><p><label>First Name - </label> <span>' . $fname . '</span> </p></div>';
      echo  '<div class="row"><p><label>Last Name - </label> <span> ' . $lname . '</span> </p></div>';
      echo  '<div class="row"><p><label>Email - </label> <span> ' . $email . '</span> </p></div>';
      
    ?>
    </div>
    </div>
  </div>