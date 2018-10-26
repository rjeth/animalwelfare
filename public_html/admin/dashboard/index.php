<?php include("../layout/head.php"); ?>
<?php include("../layout/side.php"); ?>
      <!-- Sidebar -->

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-paw"></i>
                  </div>
                  <?php
                  include_once("../../core/config.php");
                  $sql = "SELECT COUNT(pet_id) FROM tbl_pets WHERE validation = 1";
                  $resultset = mysqli_query($connect, $sql) or die("database error:". mysqli_error($conn));
                  while( $record = mysqli_fetch_assoc($resultset) ) {
                  ?>
                  <div class="mr-5"><?php echo $record['COUNT(pet_id)'];  ?> VALIDATED PETS  !</div>
                  <?php } ?>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="../approved_post">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <?php
                  include_once("../../core/config.php");
                  $sql = "SELECT COUNT(user_id) FROM user_tbl";
                  $resultset = mysqli_query($connect, $sql) or die("database error:". mysqli_error($conn));
                  while( $record = mysqli_fetch_assoc($resultset) ) {
                  ?>
                  <div class="mr-5"><?php echo $record['COUNT(user_id)'];  ?> USERS  !</div>
                  <?php } ?>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-users"></i>
                  </div>
                  <?php
                  include_once("../../core/config.php");
                  $sql = "SELECT COUNT(user_id) FROM user_tbl WHERE state = 'active'";
                  $resultset = mysqli_query($connect, $sql) or die("database error:". mysqli_error($conn));
                  while( $record = mysqli_fetch_assoc($resultset) ) {
                  ?>
                  <div class="mr-5"><?php echo $record['COUNT(user_id)'];  ?> ACTIVE USERS  !</div>
                  <?php } ?>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="../user_active">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-life-ring"></i>
                  </div>
                  <?php
                  include_once("../../core/config.php");
                  $sql = "SELECT COUNT(petcat_id) FROM pet_category ";
                  $resultset = mysqli_query($connect, $sql) or die("database error:". mysqli_error($conn));
                  while( $record = mysqli_fetch_assoc($resultset) ) {
                  ?>
                  <div class="mr-5"><?php echo $record['COUNT(petcat_id)'];  ?> ACTIVE CATEGORY  !</div>
                  <?php } ?>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="../maintenance_pet_category">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>




        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->

      <!-- /.content-wrapper -->
<?php include("../layout/foot.php"); ?>
