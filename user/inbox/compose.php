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
  <script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
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
                      <form method="post" action="">
                      <div class="card wow fadeIn thin" >
                          <div class="card-body">
                            <div class="form-group">
                                <label for="postForm">Subject</label>
                                <input class="form-control" id="subject" name="subject" type="text"></input>
                            </div>
                            <div class="form-group">
                            <textarea name="editor1" id="editor1"></textarea>
                          </div>
                          </div>
                          <div class="card-foot table-responsive">
                               <button class="btn btn-info " style="float:right" type="submit">post</button>
                          </div>
                      </div>
                    </form>
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
