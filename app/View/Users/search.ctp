<div class="row">
    <div class="span12">
<?php
//     $cbunny = array(
//     'APP_PATH' => Router::url('/',true)
// );
// echo $this->Html->scriptBlock('var CbunnyObj = ' . $this->Javascript->object($cbunny) . ';');

?>
    <!-- Select2 Auto Complete -->
    <div class="pull-right">
        <input type="text" id="user-select2">
    </div>

    <h2><?php echo __('Users');?></h2>
    <table class="table"cellpadding="0" cellspacing="0">

    </table>
</div>



<script type="text/javascript">
  
  $(document).ready(function () {

  $('#user-select2').select2({
    placeholder: "Search user auto complete",
    minimumInputLength: 1,
    ajax: {
      url: 'http://demo.wesharenow.com/users/search',
      dataType: 'json',
      data: function (term, page) {
        return {
          q: term
        };
      },
      results: function (data, page) {
        return { results: data };
      }
    }
  });

});

</script>
