<html>
<body>
    <footer class="app-footer">
    <div class="row">
      <div class="col-xs-12">
        <div class="footer-copyright">
          Copyright © <?php echo date('Y');?> <a href="#" target="_blank">SRDC PVT. LTD.</a>. All Rights Reserved.
        </div>
      </div>
    </div>
  </footer>
  <script>
	$(document).ready(function(){
		$('.datepicker').datepicker({
			dateFormate:'dd-mm-yy',
			minDate:0
		});
	})

 $('#end_date').on("change", function (e) {
    $('#start_date').datepicker("option",'maxDate', $('#end_date').val());
  });
  $('#start_date').on("change", function (e) {
    $('#end_date').datepicker("option",'minDate',$('#start_date').val());
  });

$('#registration_end_date').on("change", function (e) {
    $('#registration_start_date').datepicker("option",'maxDate', $('#registration_end_date').val());
  });
  $('#registration_start_date').on("change", function (e) {
    $('#registration_end_date').datepicker("option",'minDate',$('#registration_start_date').val());
  });
</script>

<script>
  $("#checkall").click(function () {
    $('input:checkbox').not(this).prop('checked', this.checked);
  });
</script>

<?php if(isset($_SESSION['msg'])){?>
<script type="text/javascript">
  $('.notifyjs-corner').empty();
  $.notify(
    '<?php echo $client_lang[$_SESSION["msg"]];?>',
    { position:"top center",className: '<?=isset($_SESSION["class"]) ? $_SESSION["class"] : "success" ?>'}
  );
</script> 
<?php
  unset($_SESSION['msg']);
  unset($_SESSION['class']);	 
  } 
?>
</body>
</html>