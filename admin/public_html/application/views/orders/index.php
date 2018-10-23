

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage
      <small>Orders</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Orders</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12 col-xs-12">

        <div id="messages"></div>

        <?php if($this->session->flashdata('success')): ?>
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('success'); ?>
          </div>
        <?php elseif($this->session->flashdata('errors')): ?>
          <div class="alert alert-error alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('errors'); ?>
          </div>
        <?php endif; ?>



        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Manage Orders</h3>
          </div>

          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <table id="smanageTable" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Bill no</th>

                <th>Gross Amount</th>

                  <th>Vat Charge Amount</th>
                  <th>Discount</th>
                  <th>Net Amount</th>

                <th>Date</th>
                  <th>Action</th>
              </tr>
              </thead>
              <?php
              $connect = mysqli_connect("localhost", "etuckami_etuc", "etuckami", "etuckami_db");
              $query ="SELECT * FROM orders";
              $result = mysqli_query($connect, $query);
                         while($row = mysqli_fetch_array($result))
                         {
                              echo "
                              <tr>
                                   <td>".$row["bill_no"]."</td>

                                   <td>₱ ".number_format((float)$row["gross_amount"], 2, '.', '')."</td>

                                    <td>₱ ".number_format((float)$row["vat_charge_amount"], 2, '.', '').  "</td>
                                        <td>₱ ".number_format((float)$row["discount"], 2, '.', '')."</td>
                                    <td>₱ ".number_format((float)$row["net_amount"], 2, '.', '')."</td>

                                   <td>".$row["date_time"]."</td>
                                   <td>
                                       <a  href='server/edit/index.php?id=".$row['id']."' class='btn btn-default'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>
                                       <a  href='server/print/index.php?id=".$row['id']."' class='btn btn-default'><i class='fa fa-print' aria-hidden='true'></i></a>


                                   </td>
                              </tr>
                              "


                              ;
                         }
                         ?>
                         <!--href='serve.php?id=".$row['id']."'-->

            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- col-md-12 -->
    </div>
    <!-- /.row -->


  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<script>
 $(document).ready(function(){
      $('#smanageTable').DataTable();
 });
 </script>
