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
                <div class="col-md-4 mb-4">
                  <div class=" mb-4 wow fadeIn">
                      <?php include("side.php"); ?>
                  </div>
                </div>

                  <!--Grid column-->
                  <div class="col-md-8 mb-4">

                      <!--Featured Image-->

                      <div class="card mb-3 wow fadeIn thin example-1">
                          <div class="card-body">

                              <!-- Default form reply -->
                              <div >
                                <div class="text-center"><small>16 July, 23:54</small></div>
                                  <div class="d-flex justify-content-end">
                                    <p class="primary-color rounded p-3 text-white w-75 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae modi exercitationem
                                      dignissimos repellat, voluptas iure quod aliquid voluptatem perspiciatis quidem
                                      sit eos, cum fugit voluptatibus quos laboriosam sed tenetur voluptate!</p>
                                    </div>
                                  </div>
                              <div >
                                <div class="text-center"><small>16 July, 23:55</small></div>
                                  <div class="d-flex justify-content-start media">
                                  <img class="mr-3 avatar-sm float-left" src="https://mdbootstrap.com/img/Photos/Avatars/adach.jpg">
                                  <p class="grey lighten-3 rounded p-3 w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae modi exercitationem
                                      dignissimos repellat, voluptas iure quod aliquid voluptatem perspiciatis quidem
                                      sit eos, cum fugit voluptatibus quos laboriosam sed tenetur voluptate!</p>
                                </div>
                              </div>
                              <div >
                                <div class="text-center"><small>16 July, 23:55</small></div>
                                  <div class="d-flex justify-content-start media">
                                  <img class="mr-3 avatar-sm float-left" src="https://mdbootstrap.com/img/Photos/Avatars/adach.jpg">
                                  <p class="grey lighten-3 rounded p-3 w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae modi exercitationem
                                      dignissimos repellat, voluptas iure quod aliquid voluptatem perspiciatis quidem
                                      sit eos, cum fugit voluptatibus quos laboriosam sed tenetur voluptate!</p>
                                </div>
                              </div>
                              <div >
                                <div class="text-center"><small>16 July, 23:55</small></div>
                                  <div class="d-flex justify-content-start media">
                                  <img class="mr-3 avatar-sm float-left" src="https://mdbootstrap.com/img/Photos/Avatars/adach.jpg">
                                  <p class="grey lighten-3 rounded p-3 w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae modi exercitationem
                                      dignissimos repellat, voluptas iure quod aliquid voluptatem perspiciatis quidem
                                      sit eos, cum fugit voluptatibus quos laboriosam sed tenetur voluptate!</p>
                                </div>
                              </div>



                          </div>
                          <div class="card-foot">
                            <textarea name="editor1"></textarea>
                               <button class="btn btn-info my-4" type="submit">post</button>
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
