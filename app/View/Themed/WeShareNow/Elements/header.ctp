<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $this->Html->charset(); ?>
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="index,follow" name="robots" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title><?php echo $title_for_layout; ?></title>
<?php echo $this->Html->css('default'); ?>
<?php echo $this->Html->css('meanmenu'); ?>
<?php echo $this->Html->css('lightbox'); ?>
<?php echo $this->Html->css('modality'); ?>

<link rel="stylesheet" href="css/meanmenu.css" media="all" />

</head>

<body>
<div class="main-container">
  <div class="dr-bg1">
    <div class="main-header main-header2">
      <div class="dr-wrapper">
        <div class="dr-header">
          <div class="dr-logo"><a href="index.html"><img src="<?php echo $this->webroot; ?>img/logo.png " alt=" " /></a>
          </div>
          <div class="btn-game">
            <input name="" value="Sell Your Game" type="submit" />
          </div>
          <div class="dr-nav">
            <ul>
              <li><a href="#signup">Signup</a></li>
              <li><a href="#login">Login</a></li>
              <li><a href="#">Help</a></li>
               <!-- <li><?php echo $this->html->link('Signup', array('controller' =>'SignUp', 'action' => 'index')); ?></li> -->
              <!-- <li><?php echo $this->html->link('login', array('controller' => 'Login', 'action' => 'index')); ?></li> -->
              <!-- <li><?php echo $this->html->link('Help', array('controller' => 'help', 'action' => 'index')); ?></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>