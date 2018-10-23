<?php require_once '../../data/config.php'; ?>
<?php include '../../layout/header-out.php';?>


  <!-- Start your project here-->

<div class="container">

    <div class="Card"  tabindex="-1" role="dialog" aria-labelledby="addtocard" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Order</h5>
          </div>
          <div class="modal-body table-responsive text-nowrap">
  <table class="table table-borderless table-striped">
    <thead class="" >
      <tr>
        <th scope="col">Quantity</th>
        <th scope="col">Product Name</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
<!-- -->
        <?php
            $sql = "SELECT order_items.id , order_items.qty , products.name , order_items.status , order_items.amount FROM order_items INNER JOIN products ON order_items.product_id = products.id WHERE status != 'Cooking' AND status != 'Serve'  ";
            $result = $conn->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td >".$row['qty']."</td>
                        <td><strong>".$row['name']."</strong></td>
                        <td>".$row['amount']."</td>
                        <td>

                            <a href='remove_order.php?id=".$row['id']."' class='btn btn-danger px-3'><i class='fa fa-times' aria-hidden='true'></i></a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
            }
            ?>

    </tbody>
  </table>
</div>

  <div class="modal-header">
    <h5 class="heading lead" id="exampleModalLabel">Order Detail</h5>
  </div>
  <div class="modal-body table-responsive text-nowrap">
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
            <?php  $sd =  $record['SUM( qty )']; ?>
        </div>
        <?php } ?>
        <?php

        $sql = "SELECT SUM( amount )  FROM order_items WHERE order_id = 1";
        $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
        while( $record = mysqli_fetch_assoc($resultset) ) {

        ?>
        <div class="form-group">
            <label for="totA">Total Amount</label>
            <input name="totA" readonly type="text"  class="form-control" value=" ₱ <?php echo $record['SUM( amount )'] ?>">
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

        <?php


       } ?>

  </div>
  <div class="modal-footer">
    <?php if($sd == null){
        echo "<a class='btn btn-secondary' href='../category/' data-dismiss='modal'>Back to Menu</a>
        <a   class='btn btn-primary disabled' href='../order/' >Confim</a>";
    }
    else {
      echo "<a class='btn btn-secondary' href='../category/' data-dismiss='modal'>Continue Ordering</a>
      <a   class='btn btn-primary ' href='../order/' >Confim</a>";
    }
    ?>



  </div>
</div>



</div>

  <script type="text/javascript">
  function para(){

      var $name = $('#nam').val();
      //Pass Values

      $('#this_nam').html($name);

  });
});
  </script>
  <!-- /Start your project here-->


<?php include '../../layout/footer.php';?>
