
<?php

$conn = mysqli_connect("localhost", "etuckami_etuc", "etuckami", "etuckami_db");
if($_GET['id']) {
$id = $_GET['id'];

$sql = "SELECT * FROM orders WHERE id = {$id}";
$result = $conn->query($sql);
$data = $result->fetch_assoc();



?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><?php echo $page_title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../../assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../../assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../../../assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../../assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../../../assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../../assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="../../../assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../../assets/bower_components/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="../../../assets/plugins/fileinput/fileinput.min.css">



  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- jQuery 3 -->
  <script src="../../../assets/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="../../../assets/bower_components/jquery-ui/jquery-ui.min.js"></script>

  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="../../../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <script src="../../../assets/bower_components/raphael/raphael.min.js"></script>
  <script src="../../../assets/bower_components/morris.js/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="../../../assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="../../../assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="../../../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="../../../assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="../../../assets/bower_components/moment/min/moment.min.js"></script>
  <script src="../../../assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="../../../assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="../../../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="../../../assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="../../../assets/bower_components/fastclick/lib/fastclick.js"></script>
  <script src="../../../assets/plugins/fileinput/fileinput.min.js"></script>
  <!-- Select2 -->
  <script src="../../../assets/bower_components/select2/dist/js/select2.full.min.js"></script>
  <!-- ChartJS -->
  <script src="../../../assets/bower_components/Chart.js/Chart.js"></script>
  <!-- AdminLTE App -->
  <script src="../../../assets/dist/js/adminlte.min.js"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="../../../assets/dist/js/demo.js"></script>



  <!-- DataTables -->
<script src="../../../assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../../assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>



</head>
<body class="layout-top-nav" style="height: auto; min-height: 100%; background-color:#f1f1f1;">
<div class="wrapper" style="height: auto; min-height: 100%;">
  <div class="container">
        <div class="col-md-12 col-xs-12">
          <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Billing Statement Module</h3>
                    </div>
                    <br><br>
                    <div class="box-body">
      <div class="col-md-11 col-xs-12 pull pull-left">
       <div class="col-xs-6">
          <div class="form-group">
              <label for="bill" class="col-sm-5 control-label">Bill Id : </label>
              <div class="col-sm-7">
                <label name="bill"  ><?php echo $data['bill_no'] ?></label>

            </div>
          </div>
          <div class="form-group">
            <label for="tbl1" class="col-sm-5 control-label">Table no : </label>
            <div class="col-sm-7">
              <label name="tbl1"  ><?php echo $data['table_id'] ?></label>

          </div>
        </div>
        <div class="form-group">
              <label for="tbl1" class="col-sm-5 control-label">Discount : </label>
              <div class="col-sm-7">
              <label name="tbl1" ><?php echo $data['date_time'] ?></label>
            </div>
        </div>
        <div class="form-group">
          <label for="tbl1" class="col-sm-5 control-label">Total Items :</label >
          <?php

          $sql = "SELECT SUM( qty )  FROM order_items WHERE order_id = 1";
          $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
          while( $record = mysqli_fetch_assoc($resultset) ) {

          ?>
            <div class="col-sm-7">
          <label name="tbl1" ><?php echo $record['SUM( qty )'] ?></label>
        </div>
              <?php } ?>

      </div>
        </div>
          </div>

<br>
<br>



      <!------------------------------------>

      <div class="col-md-11 col-xs-12 pull pull-left">
        <br>
        <br>
      </div>



          <table class="table table-bordered" style="margin-top:50px">
          <thead>
            <tr>

              <th scope="col">Product Name</th>
              <th scope="col">Qty</th>
              <th scope="col">Amount</th>

            </tr>
          </thead>
          <tbody>

              <?php
              $tbl = $data['table_id'];
                  $sql = "SELECT order_items.order_id , order_items.qty , products.name , order_items.amount FROM order_items INNER JOIN products ON order_items.product_id = products.id WHERE order_items.order_id ='{$tbl}' ";
                  $result = $conn->query($sql);

                  if($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                          echo "<tr>

                              <td>".$row['name']."</td>
                                  <td >".$row['qty']."x</td>
                              <td> ₱ ".number_format((float)$row['amount'], 2, '.', '')."</td>

                          </tr>";
                      }
                  } else {
                      echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
                  }
                  ?>

          </tbody>
          </table>

          <br>
          <br>




        <!--------------------------------------------------->


      <div class="col-md-7 col-xs-12 pull pull-right">

        <form action="create.php" method="post">
          <input name="bill"  type="hidden" value="<?php echo $data['bill_no']?>" readonly>
        <div class="form-group">
                <label  for="gross "class="col-sm-5 control-label">Gross Amount : </label>
                 <div class="col-sm-7">
                <input name="gross"  type="text" class="form-control" value="<?php  echo number_format((float)$data['gross_amount'], 2, '.', '')?>" readonly>
              </div>
        </div>
          <div class="form-group">
            <label  for="vat "class="col-sm-5 control-label">Vat Charge (<?php echo $data['vat_charge_rate'] ?>%) : </label>
            <div class="col-sm-7">
              <input name="vat"  type="text" class="form-control" value="<?php echo number_format((float)$data['vat_charge_amount'], 2, '.', '') ?>" readonly>
                  </div>

          </div>
          <div class="form-group">
            <label  for="discount "class="col-sm-5 control-label">Discount : </label>
              <div class="col-sm-7">
            <input name="discount" id="discount" class="form-control" type="text" value="0"  onkeyup="sum();">
          </div>
        </div>
          <div class="form-group">
            <label  for="net "class="col-sm-5 control-label">Net Amount : </label>
            <div class="col-sm-7">
          <input type="text" name="net" id="net" class="form-control" value="<?php echo number_format((float)$data['net_amount'], 2, '.', '') ?>"  onkeyup="sum();">
          </div>

      </div>
      <div class="form-group">
          <label  for="tot "class="col-sm-5 control-label">Total Amount(new net amount) : </label>
          <div class="col-sm-7">
            <input type="text" name="tot" class="form-control" id="tot" value="<?php  echo number_format((float)$data['net_amount'], 2, '.', '') ?>">
          </div>
    </div>
      <div class="form-group">
      <label  for="hall "class="col-sm-5 control-label">Status : </label>
        <div class="col-sm-7">
        <select name="hall" id="hall" class="form-control">
            <option selected="selected" value="1">not paid</option>
              <option value="2">paid</option>

          </select>
      </div>


        </div>
      </div>

      <!-------------------------------------"../print/index.php?id=".$data['id'].""------------------>


  <?php $rest =  $data['table_id']; ?>
          </div>


          <div class="box-footer">

            <?php if($rest == 1){
              echo "<a href='../print/index.php?id=".$data['id']."' class='btn btn-default' >Print</a>
              <button type='submit' class='btn btn-primary'>Save Changes</button>
              <a href='/orders' class='btn btn-warning'>Back</a>";
            }else {
              echo "<a href='../print/index.php?id=".$data['id']."' class='btn btn-default' >Print</a>
              <button type='submit' class='btn btn-primary'>Save Changes</button>
              <a href='/orders' class='btn btn-warning'>Back</a>";
            }

               ?>
             </div>
           </form>
            </div>
          </div>
    </div>
</div>


  <script>
  function sum() {
              var txtFirstNumberValue = document.getElementById('net').value;
              var txtSecondNumberValue = document.getElementById('discount').value;
              var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
              if (!isNaN(result)) {
                  document.getElementById('tot').value = result;
              }
          }
  </script>
  </body>
  </html>
<?php } ?>
