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
      <!-- <div class="btnfb"> <a href="http://demo.wesharenow.com/users/loginwith/facebook">Login with Facebook</a> </div> -->
       <div class="btnfb"> <a href="javascript:FBlogIn()" id="fb">Login with Facebook</a> </div> 
     
      <div class="btntwit"> <a href="javascript:void(0);">Login with Twitter</a> </div>
    </div>
    <div class="row">
      <h3>or</h3>
    </div>
    <div class="row">
      <p class="email" id="hidepanel"><a href="javascript:void(0);">Signup With Email <img src="<?php echo $this->webroot; ?>img/arrow.jpg" alt=" " /></a></p>
    </div>
    <div class="formpanel" style="display:none;">
      
      <div class="row" >
          <div class="form-error"></div>
             <?php echo $this->Form->create('User',array('id'=>'UserDisplayForm'));  ?>
           <div class="formpanel" style="display:none;">
            <div class="row">
        <div class="col"> <span><img src="<?php echo $this->webroot; ?>img/user.png" alt=" " /></span>
         <!-- <form name="signup" action="user/login"> -->
         <?php echo $this->Form->input('fname',array(
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
         <?php echo $this->Form->input('lname',array(
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

            <?php echo $this->Form->input('email',array(
                'name' => 'email',
                'type' => 'text',
                'div' => false,
              //  'class' => 'form-control',
                'Placeholder' => 'Email Address')
                ); 
                ?>
               </div>

        <div class="col colright"> <span><img src="<?php echo $this->webroot; ?>img/lock.png" alt=" " /></span>

       <?php echo $this->Form->input('password',array(
                 'name' => 'password',
                'type' => 'password',
                'div' => false,
                'id' => 'password',
              //  'class' => 'form-control',
                'Placeholder' => 'Password')
                ); 
                ?>     
                 </div>  
          <?php echo $this->Form->input('Submit', array("type" => "submit", "id"=> "sign_up_submit","class"=> "login")); ?>
          <?php   echo $this->Form->end();  ?>
        
        
      </div>
    </div>
   
    
   
    <div class="row">
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an</p>
    </div>
    <div class="row bg-line">
      <p>Already a member? 
      <?php //echo  $link = $this->Html->link(__("Please log in", TRUE), array('controller' => "users", 'action' => "login" )); ?>
      <a href="javascript:void(0)" id="sign_login" onclick="openLoginDiv()">Log in</a>
     <!-- <a href="<?php echo Router::Url(array('controller' => 'users', 'action' => 'add'),TRUE);?>">Log in</a> -->

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
          <?php echo $this->Session->flash('auth'); ?>
         <?php  echo $this->Form->create('User', array('action' => 'login')); ?>
         <?php  //echo $this->Form->create('User', array('action' => 'login')); ?>
        <!--  <form id="loginForm" name="User" enctype="multipart/form-data"   method="post" action="/users/login"> -->
      <div class="col"> <span><img src="<?php echo $this->webroot; ?>img/email.png" alt=" " /></span>
          <?php echo $this->Form->input('email',array(
                'type' => 'text',
                'div' => false,
              //  'class' => 'form-control',
                'Placeholder' => 'Email Address')
                ); 
                ?>
      </div>
      <div class="col colright"> <span><img src="<?php echo $this->webroot; ?>img/lock.png" alt=" " /></span>
           <?php echo $this->Form->input('password',array(
                'div' => false,
              //  'class' => 'form-control',
                'Placeholder' => 'Password')
                ); 
                ?>      </div>

    </div>
    <div class="row row3">
        <?php echo $this->Form->input('Login', array("type" => "submit", "class"=> "login")); ?>
         <?php   echo $this->Form->end();  ?>
    </div>
    <div class="row">
      <p class="forpas"><a href="#forgot" class="forgot_pass">Forgot Password? <img src="<?php echo $this->webroot; ?>img/arrow.jpg" alt=" " /></a></p>
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
      <?php echo $this->Session->flash('auth'); ?>
         <?php  echo $this->Form->create('User', array('action' => 'forgetpwd')); ?>
      <label>Enter your email</label>
      <!-- <input type="text" name="email" class="form-control" value="Email Address" onfocus="if(this.value  == 'Email Address') { this.value = ''; } " onblur="if(this.value == '') { this.value = 'Email Address'; } "> -->
         <?php echo $this->Form->input('email',array(
                'type' => 'text',
                'div' => false,       
                'Placeholder' => 'Email Address')
                );  ?>
     </div>
    <div class="row row2">
      <input name="" type="submit" value="Cancel" />

      <input name="" class="password" type="submit" value="Reset Password" />
        <!--  <?php echo $this->Form->input('Reset Password', array("type" => "submit", "class"=> "password")); ?> -->
       <?php echo $this->Form->end();?>
    </div>

    <a href="#forgot" class="btnclose"><img src="<?php echo $this->webroot; ?>img/popclose.png" alt=" " /></a> </div>
</div>
</body>
<?php  $link=Router::Url(array('controller' => 'users', 'action' => 'activate'),TRUE) . '?activation='; ?>
<?php echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'); ?>
<?php echo $this->Html->script('lightbox'); ?>
<?php echo $this->Html->script('modality.jquery.min'); ?>
<?php echo $this->Html->script('jquery.meanmenu'); ?>
<!-- <script src="http://code.jquery.com/jquery-1.10.2.js"></script> -->
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script type="text/javascript" src="http://connect.facebook.net/en_UK/all.js"></script>

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
    // $('#sign_login').modality({
    //     effect: 'slide-up'
    // });
  
   
    </script>



<script>
$(document).ready(function () {
 $('#sign_up_submit').on('click',function(event) { 
  
     var form = $("#UserDisplayForm").serialize();
     
      $.ajax({
       type: "POST",
       url: "<?php  echo Router::Url(array('controller' => 'users', 'action' => 'add'),TRUE);?>",
       data: form,
        
       success: function(response){
          console.log(response);
          $('.form-error').html('');   
          var response  = jQuery.parseJSON(response);
         // console.log(response);
          if(response.status=='success'){  
                      
            // var act_url = "<?php echo $link; ?>"+response.code; 
            
              $('.form-error').html("Your account has been created.Please check your email to activate it.");
              <?php //echo die;  ?>
            }
              else {
            $.each(response.errors, function(index, element) {
             
            //  console.log(element);  
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



<script type="text/javascript">

  // var el = document.getElementById('fb');
  //  el.onclick = FBlogIn;
  function fbAsyncInit() {
      FB.init({
          appId      : '1541548156127748',
          status     : true, // check login status
          cookie     : true, // enable cookies to allow the server to access the session
          xfbml      : true  // parse XFBML
        });
      }
      
/*
 * Function for facebook sign_up and sign_in 
 * @mode:   if mode=0 means facebook sign_up request.
 *      if mode=1 means facebook sign_in request.
*/
      function FBlogIn() {
        FB.login(
          function(response) {
               
            if (response.status== 'connected') {
                 
              FB.api('/me', function(response1) {
                 console.log(response1);
                var postData = {
                      symbol:'fb',
                      id:response1.id
                    };
                      var fb_data=    {fname:response1.first_name, lname:response1.last_name, email:response1.email};
                      console.log(JSON.stringify(fb_data));
                    
             
                      $.ajax({
                           type: "POST",
                           url: "<?php  echo Router::Url(array('controller' => 'users', 'action' => 'social_add'),TRUE);?>",
                           data: {"User" : fb_data},
                         
                           redirect: true,
                          success: function(response){
                              alert(response)
                             //var redirect= "http://demo.wesharenow.com/users/social_add";
                             //window.location.href = redirect;
                           //  window.location = "http://demo.wesharenow.com/users/social_add";

                          }
                        }
                      );
                      
              });

              FB.api("/me/picture?width=200&redirect=0&type=normal&height=200", function (response) {
                if (response && !response.error) {
                  /* handle the result */
                  // console.log('PIC ::', response);
                  //$('#userPic').attr('src', response.data.url);
                }
              });
            }
          }
        );
      }

      function logOut() {
        FB.logout(function(response) {
          console.log('logout :: ', response);
          //Removing access token form localStorage.
        });
      }
     // To initialize the FB object 
    fbAsyncInit();
</script>
<script>
function openLoginDiv(){
	$("a.btnclose[href='#signup']").click();
	$(".login_pop").click();
}
$(function(){
  $("a.btnclose[href='#forgot']").click(function(){
      $("a.btnclose[href='#login']").click()
  })
})

</script>





</body>
</html>
