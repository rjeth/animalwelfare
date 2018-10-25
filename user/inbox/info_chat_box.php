<?php include("../../layout/head2.php");  ?>

  <style>
        .avatar-sm {
            width: 56px;
            border-radius: 50%;
        }
        .scrollbar-deep-purple::-webkit-scrollbar-track {
          -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
            background-color: #F5F5F5;
            border-radius: 10px; }

            .scrollbar-deep-purple::-webkit-scrollbar {
              width: 12px;
              background-color: #F5F5F5; }

              .scrollbar-deep-purple::-webkit-scrollbar-thumb {
                border-radius: 10px;
                  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
                  background-color: #512da8; }


    </style>

  <!-- Navbar -->

  <main class="mt-5 pt-5 pb-5">
      <div class="container">
          <!--Section: Post-->
          <section class="mt-4">
              <!--Grid row-->
              <div class="row">
                <div class="col-md-3 mb-4">
                  <div class=" mb-4 wow fadeIn">
                      <?php include("side.php"); ?>
                  </div>
                </div>

                  <!--Grid column-->
                  <div class="col-md-9 mb-4">

                      <div class="card wow fadeIn thin">
                          <div class="card-body">
                            <?php
                            require_once '../../core/config.php';
                            if($_GET['id']) {
                                $id = $_GET['id'];
                                $sql = "SELECT * FROM tbl_mail WHERE mail_id = $id";
                                $result = $connect->query($sql);
                                $data = $result->fetch_assoc();
                                ?>

                                  <div class="card-body">

                                      <?php
                                      $from = $data['user_id'];
                                      require_once ("../../core/config.php");
                                      $sql = "SELECT * FROM user_tbl WHERE user_id = $from";
                                      $resultset = mysqli_query($connect, $sql) or die("database error:". mysqli_error($connect));
                                      while( $record = mysqli_fetch_assoc($resultset) ) {
                                        ?>

                                          <small class="form-text text-muted mb-4" >FROM : <?php echo $record['username']; ?> ( <?php echo $record['email_address']; ?> )</small>
                                        <?php
                                      }
                                      ?>
                                      <p class="form-text text-muted mb-4">SUBJECT : <?php echo $data['mail_subject']; ?></p>
                                    <div class="img-fluid"><?php echo $data['mail_message'] ?></div>
                                    <p class="form-text text-muted mb-4">Date Send : <?php echo $data['mail_date']; ?></p>
                                  </div>


                            <?php } ?>
                          </div>


                          <div class="card-foot table-responsive">

                               <button class="btn btn-info " style="float:right" type="submit">post</button>
                          </div>
                      </div>


                  </div>
              </div>
              <!--Grid row-->

          </section>
          <!--Section: Post-->

      </div>
  </main>
		<script>
    ClassicEditor
  .create( document.querySelector( '#editor' ), {
      cloudServices: {
          tokenUrl: 'https://example.com/cs-token-endpoint',
          uploadUrl: 'https://your-organization-id.cke-cs.com/easyimage/upload/'
      }
  } )
  .then( ... )
  .catch( ... );
		</script>
<?php include("../../layout/foot.php"); ?>
