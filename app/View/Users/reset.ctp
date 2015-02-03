<div class="user-section">
<div class="dr-wrapper">
    <div class="profile">
<div class="resetpwd">


<?php
if(isset($errors)){
echo '<div class="error">';
echo "<ul>";
foreach($errors as $error){
 echo"<li><div class='error-message'>$error</div></li>";
}
echo"</ul>";
echo'</div>';
}
?>

<form method="post">
<div class="row">
	<h3>Enter your new password </h3>
</div>
<?php
echo '<div class="row">';
echo $this->Form->input('password',array("type"=>"password","name"=>"data[User][password]"));
echo "</div>";
echo '<div class="row">';
echo $this->Form->input('password_confirm',array("type"=>"password","name"=>"data[User][password_confirm]"));
?></div>
<div class="row">
<input type="submit" class="button" style="float:left;margin-left:3px;" value="Save" />
</div>
<?php //echo $this->Form->end();?>
</form>
</div>
</div>
</div>
</div>