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
                            <form method="POST" onsubmit="return Validate()" id="vform">
                              <input type="hidden" class="form-control" id="user_id" name="user_id"  value="<?php echo $record['user_id']; ?>"></input>
                                <div class="form-group">
                                    <label for="replyFormComment">New Password</label>
                                    <input type="password" class="form-control" id="new_pass" name="new_pass" ></input>
                                    <div class="invalid-feedback" id="pass_message"></div>
                                </div>
                                <div class="form-group">
                                    <label for="replyFormComment">re-type Password</label>
                                    <input type="password" class="form-control" id="current_pass" name="current_pass" ></input>
                                    <div class="invalid-feedback" id="rpass_message"></div>
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
   <script>
   var bool = false;
    function validpass(){
        if($('#new_pass').val() == ''){
            $('#new_pass').addClass('is-invalid');
            $('#pass_message').html('Please enter your new password');
            bool = false;
        }
        else if($('#new_pass').val().length < 8){
            $('#new_pass').addClass('is-invalid');
            $('#pass_message').html('Password must be more than 8 characters!');
            bool = false;
        }
        else{
            $('#new_pass').removeClass('is-invalid');
            $('#pass_message').html('');
            bool = true;
        }
    }
    function validrpass(){
        if($('#current_pass').val() == ''){
            $('#current_pass').addClass('is-invalid');
            $('#rpass_message').html('Please enter your new password');
            bool = false;
        }
        else if($('#current_pass').val().length < 8){
            $('#current_pass').addClass('is-invalid');
            $('#rpass_message').html('Password must be more than 8 characters!');
            bool = false;
        }
        else if($('#new_pass').val() != $('#current_pass').val()){
            $('#current_pass').addClass('is-invalid');
            $('#rpass_message').html('Confirm your password!');
            bool = false;
        }
        else{
            $('#current_pass').removeClass('is-invalid');
            $('#rpass_message').html('');
            bool = true;
        }
    }
    $('#new_pass').bind('input',function(){
        validpass();
    });
    $('#current_pass').bind('input',function(){
        validrpass();
    });
    $('#new_pass').blur(function(){
        validpass();
    });
     $('#new_pass').blur(function(){
        validrpass();
    });
    function validall(){
        var form = $('#vform').serialize();
        if(bool){
            $.ajax({
                url:'update_password.php',
                method:'POST',
                data:form,
                success:function(data){
                    swal('Password changed','','success',{
                        closeOnClickOutside:false
                    })
                    .then((value) => {
                        window.location = 'setting.php'
                    })
                }
            });
        }
    }
    function Validate(){
        validpass();
        validrpass();
        validall();
        return false;
    }
   </script>
