<?php require_once '../../data/config.php'; ?>
<?php include '../../layout/header-out.php';?>
<style>
#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 30px;
    padding: 10px;
    position: fixed;
    font-size: 10pt;
    z-index: 1;
    left: 50%;
    bottom: 30px;
}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
</style>
<script>
function myFunction() {
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
<script type="text/javascript">// <![CDATA[
$(document).ready(function() {
$.ajaxSetup({ cache: false }); // This part addresses an IE bug. without it, IE will only load the first number and will never refresh
setInterval(function() {
$('#results').load('order.php');
}, 1000); // the "3000" here refers to the time to refresh the div. it is in milliseconds.
});
// ]]></script>


  <!-- Start your project here-->
  <div class="container-fluid">
<div class="row">
    <div class="col-md-6" id="results">
  </div>


<div class="col-md-6">

  <div class="Card "  tabindex="-1" role="dialog" aria-labelledby="addtocard" aria-hidden="true">
    <div class="modal-dialog modal-lg  " role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>

        </div>
        <div class="modal-body table-responsive text-nowrap">
          <form method="post" action="create_order.php">

                  <div class="form-group">
                      <label for="table_no">Table No.</label>
                      <input name="table_no" readonly type="text"  class="form-control" value="1">
                  </div>
                  <?php

                  $sql = "SELECT * FROM `stores` WHERE 1";
                  $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                  while( $record = mysqli_fetch_assoc($resultset) ) {

                  ?>
                  <div class="form-group">
                      <label for="branchn">Branch</label>
                      <input name="branchn" readonly type="text"  class="form-control" value="<?php echo $record['name'] ?>">
                      <input name="branchnn" readonly type="hidden"  class="form-control" value="<?php echo $record['id'] ?>">
                  </div>
                  <?php } ?>
                  <?php

                  $sql = "SELECT SUM( qty )  FROM order_items WHERE order_id = 1";
                  $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                  while( $record = mysqli_fetch_assoc($resultset) ) {

                  ?>
                  <div class="form-group">
                      <label for="tot">Total No of Orders</label>
                      <input name="tot" readonly type="text"  class="form-control" value="<?php echo $record['SUM( qty )'] ?>">
                  </div>
                  <?php } ?>

                      <input id="rands" name="rands" readonly type="hidden"  class="form-control" value="<?php
                      function generateRandomString($length = 5) {
                        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        $charactersLength = strlen($characters);
                        $randomString = '';
                        for ($i = 0; $i < $length; $i++) {
                            $randomString .= $characters[rand(0, $charactersLength - 1)];
                        }
                        return $randomString;
                      }
                       echo generateRandomString();

                      ?>">

                  <?php

                  $sql = "SELECT SUM( amount )  FROM order_items WHERE order_id = 1";
                  $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                  while( $record = mysqli_fetch_assoc($resultset) ) {

                  ?>
                  <div class="form-group">
                      <label for="totA">Total Amount</label>
                      <input name="totA" readonly type="text"  class="form-control" value=" ₱ <?php echo number_format((float)$record['SUM( amount )'], 2, '.', ''); ?>">
                        <input name="totB" readonly type="hidden"  class="form-control" value="<?php echo $record['SUM( amount )'] ?>">
                  </div>
                  <?php } ?>
                  <div class="form-group">
                      <label for="order_date">Order Date.</label>
                      <input name="order_date" readonly type="text"  class="form-control" value="<?php date_default_timezone_set('Asia/Manila');  echo date('l j, F Y h:i A'); ?>">
                  </div>
                  <?php

                  $sql = "SELECT * FROM company WHERE id = 1";
                  $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                  while( $record = mysqli_fetch_assoc($resultset) ) {

                  ?>

                      <input name="vat" readonly type="hidden"  class="form-control" value="<?php echo $record['vat_charge_value'] ?>">

                  <?php } ?>
                    <button type="submit"  class="btn btn-primary" onclick="myFunction()">Bill out</button>
            </div>


          </form>
        <div>


              </div>
            </div>
          </div>



        <div class="Card "  tabindex="-1" role="dialog" aria-labelledby="addtocard" aria-hidden="true">
          <div class="modal-dialog modal-lg  " role="document">
            <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Need an assistance?</h5>
        </div>
        <div class="modal-body ">
          <form action="create.php" method="post">
            <div class="form-group">
                    <label>Select Request</label>
                    <select class="form-control" name="request_name">
                      <option selected>No request</option>
                      <option>Extra Spoon</option>
                      <option>Water</option>
                      <option>Chair</option>
                      <option>High Chair</option>
                    </select>
                  </div>
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
            <button type="submit" class="btn btn-primary" onclick="myFunction()" >Send Request</button>
          </form>
          </div>
        </div>
      </div>
    </div>

  </div>



</div>
</div>
<div id="snackbar">Your request has been sent successfully</div>
  <script type="text/javascript">
  function para(){

      var $name = $('#nam').val();
      //Pass Values

      $('#this_nam').html($name);

  });
});
  </script>



<?php include '../../layout/footer.php';?>
