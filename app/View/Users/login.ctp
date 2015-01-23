<div id="signup" class="popsec" style="display:none;">
  <div class="loginsec">
    <div class="row">
      <h3>Signup Using Your Prefered<br />
        Social Network</h3>
    </div>
    <div class="row">
      <div class="btnfb"> <a href="#">Login with Facebook</a> </div>
      <div class="btntwit"> <a href="#">Login with Twitter</a> </div>
    </div>
    <div class="row">
      <h3>or</h3>
    </div>
    <div class="row">
      <p class="email" id="hidepanel"><a href="#">Signup With Email <img src="<?php echo $this->webroot; ?>img/arrow.jpg" alt=" " /></a></p>
    </div>
    <div class="formpanel" style="display:none;">
      <div class="row">
        <div class="col"> <span><img src="<?php echo $this->webroot; ?>img/user.png" alt=" " /></span>
          <input type="text" class="form-control" value="First Name" onfocus="if(this.value  == 'First Name') { this.value = ''; } " onblur="if(this.value == '') { this.value = 'First Name'; } ">
        </div>
        <div class="col colright"> <span><img src="<?php echo $this->webroot; ?>img/user.png" alt=" " /></span>
          <input type="text" class="form-control" value="Last Name" onfocus="if(this.value  == 'Last Name') { this.value = ''; } " onblur="if(this.value == '') { this.value = 'Last Name'; } ">
        </div>
      </div>
      <div class="row">
        <div class="col"> <span><img src="<?php echo $this->webroot; ?>img/email.png" alt=" " /></span>
          <input type="text" class="form-control" value="Email Address" onfocus="if(this.value  == 'Email Address') { this.value = ''; } " onblur="if(this.value == '') { this.value = 'Email Address'; } ">
        </div>
        <div class="col colright"> <span><img src="<?php echo $this->webroot; ?>img/lock.png" alt=" " /></span>
          <input type="text" class="form-control" value="Password" onfocus="if(this.value  == 'Password') { this.value = ''; } " onblur="if(this.value == '') { this.value = 'Password'; } ">
        </div>
      </div>
    </div>
    <div class="row">
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an</p>
    </div>
    <div class="row bg-line">
      <p>Already a member? <a href="#">Log in</a></p>
    </div>
    <a href="#signup" class="btnclose"><img src="<?php echo $this->webroot; ?>img/popclose.png" alt=" " /></a> </div>
</div>