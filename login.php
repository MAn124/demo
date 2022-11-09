<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dream im following</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.jpg">

    <!-- page css -->

    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

</head>

<body>
<?php 
    
    include 'connect.php';
       
    if(isset($_POST['signin_btn'])) { 
        $username = $_POST['username'];
        $pass = $_POST['pass'];  

        $sql = "SELECT * FROM user WHERE useremail = '$username' and userpassword = '$pass'";

        $result = mysqli_query($conn, $sql);  

        if(mysqli_num_rows($result) == 1)  {               
            header("Location:product.php");
        } else {
            echo "email or password incorrect";
        }

    }
  
?>
    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('assets/images/others/login-3.png')">
            <div class="d-flex flex-column justify-content-between w-100">
                <div class="container d-flex h-100">
                    <div class="row align-items-center w-100">
                        <div class="col-md-7 col-lg-5 m-h-auto">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between m-b-30">
                                        <img class="img-fluid" alt="" src="assets/images/logo/logo1.jpg">
                                        <br>
                                        
                                    </div>
                                    <form method="post">
                                        <div class="form-group">
                                        <h2 class="m-b-0">Sign in</h2>
                                            <label class="font-weight-semibold" for="userName">Username:</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-user"></i>
                                                <input name="username" type="text" class="form-control" id="userName" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="password">Password:</label>
                                            <a class="float-right font-size-13 text-muted" href="">Forget Password?</a>
                                            <div class="input-affix m-b-10">
                                                <i class="prefix-icon anticon anticon-lock"></i>
                                                <input name="pass" type="password" class="form-control " id="password" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span class="font-size-13 text-muted">
                                                    Don't have an account? 
                                                    <a name="signup_link" class="small" href="http://localhost:81/demoproject/sign-up.php"> Signup</a>
                                                </span>
                                                <button name="signin_btn" class="btn btn-primary">Sign In</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    
    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>
   
</body>

</html>