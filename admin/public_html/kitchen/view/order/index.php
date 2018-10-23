  <?php require_once '../../config/config.php'; ?>
<?php include('../../templates/header.php') ?>
<script type="text/javascript">// <![CDATA[
$(document).ready(function() {
$.ajaxSetup({ cache: false }); // This part addresses an IE bug. without it, IE will only load the first number and will never refresh
setInterval(function() {
$('#results').load('order.php');
}, 1000); // the "3000" here refers to the time to refresh the div. it is in milliseconds.
});
// ]]></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-4"  id="results">
      </div>
    </div>
    <!-- /.row -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php include('../../templates/footer.php') ?>
