<?php require_once '../../data/config.php'; ?>
<div class="Card"  tabindex="-1" role="dialog" aria-labelledby="addtocard" aria-hidden="true">
  <div class="modal-dialog modal-lg " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Your Order</h5>
        <div >
          <?php

          $sql = "SELECT COUNT(status) FROM `order_items` WHERE status = 'Raw' or status = 'Cooking'";
          $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
          while( $record = mysqli_fetch_assoc($resultset) ) {
            $num = $record['COUNT(status)'];
          if($num == 0){
            echo "<h4>Status : <span class='badge badge-pill green'>Serve</span></h4>";
          }
          else {
            echo "<h4>Status : <span class='badge badge-pill orange'>on Going</span></h4>";
          }

         } ?>
      </div>
      </div>
      <div class="modal-body table-responsive text-nowrap" >
<table class="table table-borderless text-center">
<thead>
  <tr>
    <th scope="col">Quantity</th>
    <th scope="col">Product Name</th>


  </tr>
</thead>
<tbody>

    <?php
        $sql = "SELECT order_items.qty , products.name , order_items.status FROM order_items INNER JOIN products ON order_items.product_id = products.id     ";
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td >".$row['qty']."</td>
                    <td>".$row['name']."</td>

                </tr>";
            }
        } else {
            echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
        }
        ?>

</tbody>
</table>
</div>

<div class="modal-footer">
<a class="btn btn-danger" href="../category/" data-dismiss="Add order">Add New Order</a>

</div>
</div>
</div>
</div>
