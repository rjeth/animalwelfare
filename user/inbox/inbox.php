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
                  <div class="col-md-9 mb-4 example-1">

                      <!--Featured Image-->

                      <div class="card wow fadeIn thin">
                          <div class="card-body table-responsive">
                            <table class="table table-sm">
                              <thead class="grey lighten-2">
                                <tr>
                                  <th scope="col"></th>
                                  <th scope="col" class="text-center">Sender</th>
                                  <th scope="col" class="text-center">Subject</th>
                                  <th scope="col" class="text-center">Datetime</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                    <td style="width:15%" class="text-center" ><a href=info_chat_box.php?id="3"><i class="fas fa-sign-out-alt"></i>Read</a></td>
                                  <td style="width:20%" class="text-center">Mark</td>
                                  <td style="width:50%" class="text-center">asdasdasdasdasdasdasdasdasdasdasdasdsdasdasdasdasd</td>
                                  <td style="width:20%" class="text-center">@mdo</td>
                                </tr>

                              </tbody>
                            </table>

                              <!-- Default form reply -->

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
