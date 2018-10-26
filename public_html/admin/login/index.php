<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Login</title>

    <!-- Bootstrap core CSS-->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form method="POST" id="vform" onsubmit="return Validate()">
                    <div role="alert" id="alert"></div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" name="username" id="username" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
                            <label for="username">Username</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password"
                                required="required">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me">
                                Remember Password
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
                <div class="text-center">
                    <a class="d-block small" href="../forgot">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script>
        function Validate(){
            var form = $('#vform').serialize();
            $.ajax({
                url:'function.php',
                method:'POST',
                data:form,
                success:function(data){
                   if(data == 'Success'){
                       $('#alert').removeClass('alert alert-danger');
                       $('#alert').html('');
                       window.location = '../dashboard';
                   }
                   else{
                       $('#alert').addClass('alert alert-danger');
                       $('#alert').html('Invalid Username or Password');
                   }
                }
            });
            return false
        }
    </script>
</body>

</html>
