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
                img { max-width: 100%; }
}

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
                                    $subj = $data['mail_subject'];
                                    require_once ("../../core/config.php");
                                    $sql1 = "SELECT * FROM tbl_mail WHERE mail_subject = '$subj'";
                                    $resultset = mysqli_query($connect, $sql1) or die("database error:". mysqli_error($connect));
                                    while( $record1 = mysqli_fetch_assoc($resultset) ) {
                                      ?>


                                      <?php
                                      echo "

                                      <div class='card-body'>
                                      <form action='action/reply.php' method='post'>
                                      <p class='form-text text-muted mb-4'>SUBJECT : ";if ($record1['user_id'] == $user){
                                        echo 'me';
                                        }else {
                                          echo 'sender';

                                      }echo"</p>
                                      <p class='form-text text-muted mb-4'>Date Send : ".$record1['mail_date']."</p>

                                      <p class='form-text text-muted mb-4'>SUBJECT : ".$record1['mail_subject']."</p>
                                      <input type='hidden' value=".$record1['mail_subject']." name='subj' id='subj'></input>
                                    <div class='img-fluid'>".$record1['mail_message']."</div>
                                      <input type='hidden' value=".$from." name='sender' id='sender'></input>
                                        <input type='hidden' value=".$user." name='from' id='from'></input>

                                  </div>
                                  <hr>";
                            } } ?>
                          </div>
                          <div class="card-footer">
                            <div class="form-group">
                              <textarea name="editor1" id="content"></textarea>
                            </div>
                               <button class="btn btn-info" type="submit">Send</button>
                             </form>
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
  .create( document.querySelector( '#content' ),
  {
      cloudServices: {
          tokenUrl: 'https://35508.cke-cs.com/token/dev/HsFzvs1xgvvwdno5qQLXFAfumf92hTtKYEzcY1yYH3KIFtf4a8RzpfNShoVM',
          uploadUrl: 'https://35508.cke-cs.com/easyimage/upload/'
      }
  }
 )
  .then( editor => {
      console.log( editor );
  } )
  .catch( error => {
      console.error( error );
  } );

  </script>
<?php include("../../layout/foot.php"); ?>
