

<?php
echo $this->Form->create('Country', array('action' => 'find'));
echo $this->Form->input('name',array('id' => 'Autocomplete'));
echo $this->Form->submit();
echo $this->Form->end();
?>
 
<script type="text/javascript">
$(document).ready(function($){
$('#Autocomplete').autocomplete({
source:'<?php echo $this->Html->url(array("controller" => "users","action"=> "find")); ?>',
minLength: 2
});
});
</script> 