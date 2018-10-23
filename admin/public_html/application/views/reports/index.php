

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Reports
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Reports</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

        <div class="col-md-12 col-xs-12">

          <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('success'); ?>
            </div>
          <?php elseif($this->session->flashdata('error')): ?>
            <div class="alert alert-error alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('error'); ?>
            </div>
          <?php endif; ?>
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Total Paid Orders - Report Data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="smanageTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Date</th>
                  <th>Net Amount</th>

                </tr>
                </thead>
                <?php
                $connect = mysqli_connect("localhost", "etuckami_etuc", "etuckami", "etuckami_db");
                $query ="SELECT * FROM orders WHERE paid_status = '2'";
                $result = mysqli_query($connect, $query);
                           while($row = mysqli_fetch_array($result))
                           {
                                echo "
                                <tr>
                                     <td>".$row["date_time"]."</td>
                                     <td>₱ ".number_format((float)$row["net_amount"], 2, '.', '')."</td>

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
   
