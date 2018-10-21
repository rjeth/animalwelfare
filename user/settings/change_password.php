<?php require_once("../../core/session.php"); ?>
<?php require_once("../../core/config.php"); ?>
<?php include("../../layout/head2.php"); ?>
<main class="mt-5 pt-5 pb-5">
    <div class="container">
        <!--Section: Post-->
        <section class="mt-4">

            <!--Grid row-->
            <div class="row">
              <div class="col-md-4 mb-4">
                <div class="card mb-4 wow fadeIn">



                          <!--Card content-->
                          <div class="card-body">

                              <div class="media d-block d-md-flex mt-3">
                                  <?php include("side_settings.php"); ?>
                              </div>

                          </div>

                      </div>


              </div>

                <!--Grid column-->
                <div class="col-md-8 mb-4">

                    <!--Featured Image-->

                    <div class="card mb-3 wow fadeIn">
                        <div class="card-header font-weight-bold">INFO</div>
                        <div class="card-body">

                            <!-- Default form reply -->
                            <form>

                                <div class="form-group">
                                    <label for="replyFormComment">Current Password</label>
                                    <input type="text" class="form-control" id="replyFormComment" rows="5"></input>
                                </div>
                                <div class="form-group">
                                    <label for="replyFormComment">New Password</label>
                                    <input type="text" class="form-control" id="replyFormComment" rows="5"></input>
                                </div>
                                <div class="form-group">
                                    <label for="replyFormComment">REtype Password</label>
                                    <input type="text" class="form-control" id="replyFormComment" rows="5"></input>
                                </div>


                                <div class="text-right mt-4">
                                    <button class="btn btn-info btn-md" type="submit">Update</button>
                                </div>
                            </form>
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


   <?php include("../../layout/foot.php"); ?>
