<div class="dr-main-footer">
    <div class="dr-wrapper">
      <div class="dr-footer">
        <div class="firstcol"> <img src="<?php echo $this->webroot; ?>img/footer-logo.png" alt=" " /></div>
        <div class="seccol">
          <p>Placeholder for 2-3 lines<br />
            something about website or<br />
            company</p>
          <img src="<?php echo $this->webroot; ?>img/bbb.png" alt=" " /></div>
        <div class="thirdcol">
          <ul>
            <li><a href="javascript:void(0);">About</a></li>
            <li><a href="javascript:void(0);">Help</a></li>
            <li><a href="javascript:void(0);">Trust &amp; Safety</a></li>
            <li><a href="javascript:void(0);">Terms &amp; Condition</a></li>
          </ul>
        </div>
        <div class="lastcol">
          <p>Follow us On</p>
          <a href="javascript:void(0);"><img src="<?php echo $this->webroot; ?>img/fb.png" alt=" " /></a> <a href="javascript:void(0);"><img src="<?php echo $this->webroot; ?>img/twit.png" alt=" " /></a> <a href="javascript:void(0);"><img src="<?php echo $this->webroot; ?>img/gplus.png" alt=" " /></a> <a href="javascript:void(0);"><img src="<?php echo $this->webroot; ?>img/pint.png" alt=" " /></a> <a href="javascript:void(0);"><img src="<?php echo $this->webroot; ?>img/in.png" alt=" " /></a> </div>
      </div>
    </div>
    <div class="dr-copy">
      <p>All Rights Reserved © wesharenow.com </p>
    </div>
  </div>
</div>
<div id="signup" class="popsec" style="display:none;">
  <div class="loginsec">
    <div class="row">
      <h3>Signup Using Your Prefered<br />
        Social Network</h3>
    </div>
    <div class="row">
      <div class="btnfb"> <a href="javascript:void(0);">Login with Facebook</a> </div>
      <div class="btntwit"> <a href="javascript:void(0);">Login with Twitter</a> </div>
    </div>
    <div class="row">
      <h3>or</h3>
    </div>
    <div class="row">
      <p class="email" id="hidepanel"><a href="javascript:void(0);">Signup With Email <img src="<?php echo $this->webroot; ?>img/arrow.jpg" alt=" " /></a></p>
    </div>
    <div class="formpanel" style="display:none;">
      
      <div class="row">
          <div class="form-error"></div>
             <?php echo $this->Form->create('User'); ?>
           <div class="formpanel" style="display:none;">
            <div class="row">
        <div class="col"> <span><img src="<?php echo $this->webroot; ?>img/user.png" alt=" " /></span>
         <!-- <form name="signup" action="user/login"> -->
         <?php echo $this->Form->input('',array(
                 'name' => 'fname',
                'type' => 'text',
                'div' => false,
               // 'class' => 'form-control',
                'Placeholder' => 'First Name')
                // 'onfocus' => '{ this.value = ''; } " onblur="if(this.value == '') { this.value = 'First Name'; }'
                ); 
                ?>
          <!-- <input type="text" class="form-control" value="First Name" onfocus="if(this.value  == 'First Name') { this.value = ''; } " onblur="if(this.value == '') { this.value = 'First Name'; } "> -->
       </div>
        <div class="col colright"> <span><img src="<?php echo $this->webroot; ?>img/user.png" alt=" " /></span>
         <?php echo $this->Form->input('',array(
                 'name' => 'lname',
                'type' => 'text',
                'div' => false,
               // 'class' => 'form-control',
                'Placeholder' => 'Last Name')
                ); 
                ?>
        
     </div>
       

      </div>

      <div class="row">

        <div class="col"> <span><img src="<?php echo $this->webroot; ?>img/email.png" alt=" " /></span>

            <?php echo $this->Form->input('',array(
                'name' => 'email',
                'type' => 'text',
                'div' => false,
              //  'class' => 'form-control',
                'Placeholder' => 'Email Address')
                ); 
                ?>
               </div>

        <div class="col colright"> <span><img src="<?php echo $this->webroot; ?>img/lock.png" alt=" " /></span>

       <?php echo $this->Form->input('',array(
                 'name' => 'password',
                'type' => 'password',
                'div' => false,
              //  'class' => 'form-control',
                'Placeholder' => 'Password')
                ); 
                ?>     
                 </div>  
          <?php echo $this->Form->input('submit', array("type" => "submit", "id"=> "sign_up_submit")); ?>
          <?php   //echo $this->Form->end();  ?>
        
        
      </div>
    </div>
   
    
   
    <div class="row">
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an</p>
    </div>
    <div class="row bg-line">
      <p>Already a member? 
      <?php //echo  $link = $this->Html->link(__("Please log in", TRUE), array('controller' => "users", 'action' => "login" )); ?>
     <a href="<?php echo Router::Url(array('controller' => 'users', 'action' => 'add'),TRUE);?>">Log in</a>

      </p>
    </div>
    <a href="#signup" class="btnclose"><img src="<?php echo $this->webroot; ?>img/popclose.png" alt=" " /></a> </div>
</div>
<div id="login" class="popsec" style="display:none;">
  <div class="loginsec">
    <div class="row">
      <h2>Login Here</h2>
    </div>
    <div class="row"> <img src="<?php echo $this->webroot; ?>img/icon-logo.png" alt=" " /></div>
    <div class="row">
      <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
    </div>
    <div class="row">
      <div class="col"> <span><img src="<?php echo $this->webroot; ?>img/email.png" alt=" " /></span>
        <input type="text" class="form-control" value="Email Address" onfocus="if(this.value  == 'Email Address') { this.value = ''; } " onblur="if(this.value == '') { this.value = 'Email Address'; } ">
      </div>
      <div class="col colright"> <span><img src="<?php echo $this->webroot; ?>img/lock.png" alt=" " /></span>
        <input type="text" class="form-control" value="Password" onfocus="if(this.value  == 'Password') { this.value = ''; } " onblur="if(this.value == '') { this.value = 'Password'; } ">
      </div>
    </div>
    <div class="row row3">
      <input name="" class="login" type="submit" value="Login" />
    </div>
    <div class="row">
      <p class="forpas"><a href="#forgot">Forgot Password? <img src="<?php echo $this->webroot; ?>img/arrow.jpg" alt=" " /></a></p>
    </div>
    <a href="#login" class="btnclose"><img src="<?php echo $this->webroot; ?>img/popclose.png" alt=" " /></a> </div>
</div>
<div id="forgot" class="popsec" style="display:none; z-index:-1;">
  <div class="loginsec">
    <div class="row">
      <h2>Forgot Your Password?</h2>
    </div>
    <div class="row"> <img src="<?php echo $this->webroot; ?>img/icon-logo.png" alt=" " /></div>
    <div class="row">
      <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
    </div>
    <div class="emailaddress">
      <label>Enter Your Email Adress</label>
      <input type="text" class="form-control" value="Email Address" onfocus="if(this.value  == 'Email Address') { this.value = ''; } " onblur="if(this.value == '') { this.value = 'Email Address'; } ">
    </div>
    <div class="row row2">
      <input name="" type="submit" value="Cancel" />
      <input name="" class="password" type="submit" value="Reset Password" />
    </div>
    <a href="#forgot" class="btnclose"><img src="<?php echo $this->webroot; ?>img/popclose.png" alt=" " /></a> </div>
</div>
</body>

<?php echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'); ?>
<?php echo $this->Html->script('lightbox'); ?>
<?php echo $this->Html->script('modality.jquery.min'); ?>
<?php echo $this->Html->script('jquery.meanmenu'); ?>


<script type="text/javascript">
 


</script>

<script>
    $('#forgot').modality({
        effect: 'slide-up'
    });
  $('#signup').modality({
        effect: 'slide-up'
    });
  $('#login').modality({
        effect: 'slide-up'
    });
   
    </script>

<!-- JS-Only:  -->
<!-- <script src="js/modality.min.js"></script>
    <script>
    var modal1 = Modality.init('#yourModalId', {
        effect: 'slide-up'
    });
    </script> -->
<!-- JS-Only:  -->

<script>
$(document).ready(function () {
 $('#sign_up_submit').on('click',function(event){ 
     var form = $("#UserDisplayForm").serialize();
      $.ajax({
       type: "POST",
       url: "<?php  echo Router::Url(array('controller' => 'users', 'action' => 'add'),TRUE);?>",
       data: form,
    
       success: function(response){
          console.log(response);
          $('.form-error').html('');   
          var response  = jQuery.parseJSON(response);
          console.log(response);
          if(response.status=='success'){          
              $('.form-error').html('Your account has been created.<br/>Please click on the link to activate it.');   
          }else{
           
            $.each(response.errors, function(index, element) {
              console.log(element);  
           $('.form-error').append(element[0]+'<br>');   
        });
         }
       }

     });
    return false;
   });  
    $('.dr-nav').meanmenu();

    $("#hidepanel").click(function(){
      $(".formpanel").toggle();
    });
  
  
  $('.meanmenu-reveal').on('click', function(){
    $('#forgot').modality({
          effect: 'slide-up'
      });
    $('#signup').modality({
      effect: 'slide-up'
    });
    $('#login').modality({
      effect: 'slide-up'
    });
  });

 
});
</script>
</html>
