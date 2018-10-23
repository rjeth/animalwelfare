  <?php require_once '../../config/config.php'; ?>
        <div class="box box-danger">
          <div class="box-header">
            <h3 class="box-title"><span class='label label-danger'>Table no.1</span></h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="manageTable" class="table table-condensed">
              <thead>
              <tr>
                <th>Quantity</th>
                <th>Product Name</th>
                <th>Status</th>
                  <th>Action</th>
              </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <?php
                      $sql = "SELECT order_items.id , order_items.qty , products.name , order_items.status , order_items.amount FROM order_items INNER JOIN products ON order_items.product_id = products.id";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>
                                    <td >".$row['qty']."</td>
                                    <td>".$row['name']."</td>";

                                    if( $row['status'] == "Serve"){
                                      echo "<td><span class='label label-success'>Serve</span></td>";
                                    }
                                    else if( $row['status']== "Cooking"){
                                      echo "<td><span class='label label-warning'>Cooking</span></td>";
                                    }
                                    else{
                                      echo "<td><span class='label label-danger'>Raw</span></td>";
                                    }
                                    echo
                                    "<td style='width:130px;'>
                                          <a href='serve.php?id=".$row['id']."' class='btn btn-success'><i class='fa fa-check-circle' aria-hidden='true'></i></a>
                                          <a href='cooking.php?id=".$row['id']."' class='btn btn-danger'><i class='fa fa-fire' aria-hidden='true'></i></a>

                                            <a href='' class='btn btn-info'><i class='fa fa-trash' aria-hidden='true'></i></a>

                                    </td>
                                </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
                        }
                        ?>
                  </td>
                </tr>
              </tbody>

            </table>
          </div>
          <!-- /.box-body -->

        <!-- /.box -->

          <div class="box-header">
            <h3 class="box-title"><span class='label label-info'>Request</span></h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="manageTable" class="table table-condensed">
              <thead>
              <tr>

                <th>Request Name</th>
                <th>Status</th>
                  <th>Action</th>
              </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <?php
                        $sql = "SELECT * FROM requests WHERE table_no = '1'";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>
                                    <td>".$row['request_name']."</td>
                                      <td>".$row['status']."</td>
                                    <td>

                                        <a href='follow.php?id=".$row['id']."'  class='btn btn-success'><i class='fa fa-check-circle' aria-hidden='true'></i></a>
                                    </td>
                                </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
                        }
                        ?>
                  </td>
                </tr>
              </tbody>

            </table>
          </div>
          <!-- /.box-body -->
        </div>
