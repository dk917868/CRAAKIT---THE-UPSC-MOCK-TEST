<?php
session_start();
include("../connection.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login to craakit</title>
    <!--Fav icon-->
    <link href="../assets/img/craakit-icon.png" rel="icon">
    <link rel="apple-touch-icon" href="../assets/img/craakit-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .bg-login-img {
            background: url(../assets/img/Login.jpg);
            background-position: center;
            background-size: cover;
        }
    </style>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-img"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">

                                        <a href="#" class="logo"><img src="../assets/img/craakit-white-icon1.png"
                                                alt="craakit-logo" class="img-fluid" style="max-height:60px"></a>
                                        <br><br>
                                        <h1 class="h4 text-gray-900 mb-4">Login </h1>
                                    </div>

                                    <form class="user" action="" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="username"
                                                name="username" placeholder="Enter Username" required>
                                            <!-- <input type="text" placeholder="Enter Username" title="Please enter username" required="" value="" name="username" id="username" class="form-control"> -->
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password"
                                                name="password" placeholder="Password" required>
                                            <!-- <input type="password" title="Please enter your password" placeholder="Enter your password" required="" value="" name="password" id="password" class="form-control"> -->

                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" name="login"
                                            class="btn btn-primary btn-user btn-block">Login </button>
                                        <div class="alert alert-danger" id="failure"
                                            style="margin-top:10px; display: none">
                                            <strong>Does Not Match!</strong> Invalid Username or Password
                                        </div>
                                        <!-- <a href="index.php" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a> -->
                                        <hr>
                                        <a href="#" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="#" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.php">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.php">New User Click here to register!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="../index.php">Click here to go for Home page!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="../admin/index.php" target="_blank">Main-Admin</a>
                                        <a class="small" href="../admin-checker/index.php"
                                            target="_blank">Validator-Admin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <?php
    if (isset($_POST["login"])) {
        $count = 0;
        $res = mysqli_query($link, "select * from registration where username='$_POST[username]' && password='$_POST[password]'");
        $count = mysqli_num_rows($res);

        if ($count == 0) {
            ?>
            <script type="text/javascript">
                document.getElementById("failure").style.display = "block";
            </script>

            <?php

        } else {
            $_SESSION["username"] = $_POST["username"];
            ?>
            <script type="text/javascript">
                window.location = "index.php";
            </script>
            <?php
        }
    }
    ?>
    
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery-price-slider.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>

</body>

</html>