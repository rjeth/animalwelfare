<?php require_once("../../core/session.php"); ?>
<?php require_once("../../core/config.php"); ?>
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

                      <!--Featured Image-->

                      <div class="card wow fadeIn thin">
                          <div class="card-body">
                            <?php
                            require_once '../../core/config.php';
                            if($_GET['user_id']) {
                                $id = $_GET['user_id'];
                                $sql = "SELECT * FROM user_tbl WHERE user_id = $user";
                                $result = $connect->query($sql);
                                $data = $result->fetch_assoc();
                                ?>
                                <div class="form-group">
                                    <label for="postForm">Subject</label>
                                    <input class="form-control" id="pet_name" name="pet_name" type="text" value="<?php echo $data['username']?>"></input>
                                    <div class="invalid-feedback">
                                      Please input your pet name
                                    </div>
                                </div>
                                <div class="form-group">
                                <textarea name="editor1"></textarea>
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
			CKEDITOR.replace( 'editor1' );
		</script>
<?php include("../../layout/foot.php"); ?>
