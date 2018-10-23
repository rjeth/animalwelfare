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
                          <?php
                          include_once("../../core/config.php");
                          $sql = "SELECT * FROM user_tbl WHERE user_id = $user";
                          $resultset = mysqli_query($connect, $sql) or die("database error:". mysqli_error($conn));
                          while( $record = mysqli_fetch_assoc($resultset) ) {
                          ?>
                            <form>
                              <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">image</span>
                                </div>
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="fileInput" aria-describedby="fileInput">
                                  <label class="custom-file-label" for="fileInput">File Label</label>
                                </div>
                              </div>
                              <div class="form-group">
                                  <label for="replyFormComment">Username:</label>
                                  <input type="text" class="form-control" id="replyFormComment" value="<?php echo $record['username']; ?>"></input>
                              </div>
                              <div class="form-group">
                                  <label for="replyFormComment">Bios</label>
                                  <textarea type="text" class="form-control" id="replyFormComment" rows="5"></textarea>
                              </div>

                              <hr class="mt-10">
                                <div class="form-group">
                                    <label for="replyFormComment">Firstname:</label>
                                    <input type="text" class="form-control" id="replyFormComment" value="<?php echo $record['firstname']; ?>"></input>
                                </div>
                                <div class="form-group">
                                    <label for="replyFormComment">Lastname:</label>
                                    <input type="text" class="form-control" id="replyFormComment" value="<?php echo $record['lastname']; ?>"></input>
                                </div>
                                <div class="form-group">
                                    <label for="replyFormComment">Middlename:</label>
                                    <input type="text" class="form-control" id="replyFormComment" value="<?php echo $record['Middlename']; ?>"></input>
                                </div>
                                <div class="form-group">
                                    <label for="replyFormComment">Suffix:</label>
                                    <input type="text" class="form-control" id="replyFormComment" value="<?php echo $record['Suffix']; ?>"></input>
                                </div>
                                <?php if ($record['gender'] == 'Male'){ ?>
                                  <div class="form-group">
                                      <label for="gen">Gender</label>
                                      <div class="row">
                                        <div class="custom-control custom-radio">
                                            <input class="control-input" type="radio" name="gender"  value="Female">
                                            <label class="control-label" for="gender">
                                              Female
                                            </label>
                                          </div>
                                          <div class="custom-control custom-radio">
                                            <input class="control-input" type="radio" name="gender"  value="Male" checked>
                                            <label class="control-label" for="gender">
                                              Male
                                            </label>
                                          </div>
                                      </div>
                                </div>
                                <?php }else{?>
                                  <div class="form-group">
                                      <label for="gen">Gender</label>
                                      <div class="row">
                                        <div class="custom-control custom-radio">
                                            <input class="control-input" type="radio" name="gender"  value="Female" checked>
                                            <label class="control-label" for="gender">
                                              Female
                                            </label>
                                          </div>
                                          <div class="custom-control custom-radio">
                                            <input class="control-input" type="radio" name="gender"  value="Male" >
                                            <label class="control-label" for="gender">
                                              Male
                                            </label>
                                          </div>
                                      </div>
                                </div>
                                <?php }?>

                                <div class="form-group">
                                    <label for="replyFormComment">Email Address:</label>
                                    <input type="text" class="form-control" id="replyFormComment" value="<?php echo $record['email_address']; ?>"></input>
                                </div>
                                <div class="form-group">
                                    <label for="replyFormComment">Contact no:</label>
                                    <input type="text" class="form-control" id="replyFormComment"  value="<?php echo $record['contact_number']; ?>"></input>
                                </div>
                                <div class="form-group">
                                    <label for="replyFormComment">Location:</label>
                                    <input type="text" class="form-control" id="replyFormComment" value="<?php echo $record['address']; ?>" ></input>
                                </div>


                                <div class="text-right mt-4">
                                    <button class="btn btn-info btn-md" type="submit">Update</button>
                                </div>
                            </form>

                          <?php } ?>
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
